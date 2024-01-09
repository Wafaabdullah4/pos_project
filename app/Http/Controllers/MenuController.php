<?php

namespace App\Http\Controllers;
//return type View

use App\Models\Menu;
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index(): View
    {
        //get posts
        $menus = Menu::latest()->paginate(5);

        //render view with posts
        return view('menu.index', compact('menus'));
    }
    // untuk landing page
    // public function menus(): View
    // {
    //     //get posts
    //     $menus = Menu::latest()->paginate(5);

    //     //render view with posts
    //     return view('LandingPage', compact('menus'));
    // }


    public function create(): View
    {
        return view('menu.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // validate form
        $this->validate($request, [
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_makanan'  => 'required|min:5',
            'kelas'         => 'required|min:5',
            'harga'         => 'required|numeric|min:0.01', // Ubah validasi harga
            'jenis'         => 'required|min:5',
            'stock'         => 'required|integer|min:0', // Ubah validasi stock
            'content'       => 'required|min:10'
        ]);

        // upload image
        $image = $request->file('image');
        $image->storeAs('public/menu', $image->hashName());

        // create menu
        Menu::create([
            'image'        => $image->hashName(), // Ubah nama kolom menjadi 'gambar'
            'nama_makanan'  => $request->nama_makanan,
            'kelas'         => $request->kelas,
            'harga'         => $request->harga,
            'jenis'         => $request->jenis,
            'stock'         => $request->stock,
            'content' => $request->content // Ubah nama kolom menjadi 'deskripsi_makanan'
        ]);

        // redirect to index
        return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit(string $id): View
    {
        //get post by ID
        $menu = Menu::findOrFail($id);

        //render view with post
        return view('menu.edit', compact('menu'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_makanan'     => 'required|min:5',
            'kelas'     => 'required|min:5',
            'harga'     => 'required|min:5',
            'jenis'     => 'required|min:5',
            'stock'     => 'required',
            'content'   => 'required|min:10'
        ]);

        //get post by ID
        $menu = Menu::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/menu', $image->hashName());

            //delete old image
            Storage::delete('public/menu/' . $menu->image);

            //update menu with new image
            $menu->update([
                'image'     => $image->hashName(),
                'nama_makanan'     => $request->nama_makanan,
                'kelas'     => $request->kelas,
                'harga'     => $request->harga,
                'jenis'     => $request->jenis,
                'stock'     => $request->stock,
                'content'   => $request->content
            ]);
        } else {

            //update post without image
            $menu->update([
                'nama_makanan'     => $request->nama_makanan,
                'kelas'     => $request->kelas,
                'jenis'     => $request->jenis,
                'stock'     => $request->stock,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy(menu $menu)
    {
        // delete post image
        Storage::delete('public/Menu/' . $menu->image);

        // delete post data by id
        $menu->delete();

        // render view
        return back();
    }
    public function menu(): View
    {
        //get posts
        $menus = Menu::latest()->paginate(5);

        //render view with posts
        return view('daftarmakanan', compact('menus'));
    }

    public function show(string $id): View
    {
        //get post by ID
        $menus = Menu::findOrFail($id);

        //render view with post
        return view('show', compact('menus'));
    }
}
