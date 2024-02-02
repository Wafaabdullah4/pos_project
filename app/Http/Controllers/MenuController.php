<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MenuController extends Controller
{
    public function index(): View
    {
        $menus = Menu::latest()->paginate(5);
        return view('menu.index', compact('menus'));
    }

    public function create(): View
    {
        return view('menu.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'image'        => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_makanan' => 'required|min:5',
            'kelas'        => 'required|min:5',
            'harga'        => 'required|numeric|min:0.01',
            'jenis'        => 'required|min:5',
            'stock'        => 'required|integer|min:0',
            'content'      => 'required|min:10'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/menu', $image->hashName());

        Menu::create([
            'image'        => $image->hashName(),
            'nama_makanan' => $request->nama_makanan,
            'kelas'        => $request->kelas,
            'harga'        => $request->harga,
            'jenis'        => $request->jenis,
            'stock'        => $request->stock,
            'content'      => $request->content
        ]);

        return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $menu = Menu::findOrFail($id);
        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'image'        => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama_makanan' => 'required|min:5',
            'kelas'        => 'required|min:5',
            'harga'        => 'required|min:5',
            'jenis'        => 'required|min:5',
            'stock'        => 'required',
            'content'      => 'required|min:10'
        ]);

        $menu = Menu::findOrFail($id);

        if ($request->hasFile('image')) {
            $this->deleteOldImage($menu);

            $image = $request->file('image');
            $image->storeAs('public/menu', $image->hashName());

            $menu->update([
                'image'        => $image->hashName(),
                'nama_makanan' => $request->nama_makanan,
                'kelas'        => $request->kelas,
                'harga'        => $request->harga,
                'jenis'        => $request->jenis,
                'stock'        => $request->stock,
                'content'      => $request->content
            ]);
        } else {
            $menu->update([
                'nama_makanan' => $request->nama_makanan,
                'kelas'        => $request->kelas,
                'jenis'        => $request->jenis,
                'stock'        => $request->stock,
                'content'      => $request->content
            ]);
        }

        return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Menu $menu)
    {
        $this->deleteOldImage($menu);
        $menu->delete();
        return back();
    }

    private function deleteOldImage(Menu $menu)
    {
        Storage::delete('public/menu/' . $menu->image);
    }
}
