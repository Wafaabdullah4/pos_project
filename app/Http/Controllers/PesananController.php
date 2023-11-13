<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::latest()->get();
        return view('pesanan.index', compact('pesanans'));
    }

    public function create()
    {
        $kurirs = User::where('type', 2)->get();
        return view('pesanan.create', compact('kurirs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jumlah_pesanan' => 'required|numeric',
            'barang' => 'required|string',
            'harga' => 'required|numeric',
            'keterangan' => 'required|string',
            'kurir' => 'required|string',
        ]);

        $user = auth()->user();

        $pesanan = new Pesanan([
            'jumlah_pesanan' => $request->input('jumlah_pesanan'),
            'barang' => $request->input('barang'),
            'harga' => $request->input('harga'),
            'keterangan' => $request->input('keterangan'),
            'kurir' => $request->input('kurir'),
        ]);

        $user->pesanans()->save($pesanan);

        return redirect()->route('home')->with('success', 'Pesanan berhasil ditempatkan.');
    }
    public function edit(Pesanan $pesanan)
    {
        $kurirs = User::where('type', 2)->get();
        return view('pesanan.edit', compact('pesanan', 'kurirs'));
    }

    public function update(Request $request, Pesanan $pesanan)
    {
        $request->validate([
            'jumlah_pesanan' => 'required|numeric',
            'barang' => 'required|string',
            'harga' => 'required|numeric',
            'keterangan' => 'required|string',
            'kurir' => 'required|string',
        ]);

        $pesanan->update([
            'jumlah_pesanan' => $request->input('jumlah_pesanan'),
            'barang' => $request->input('barang'),
            'harga' => $request->input('harga'),
            'keterangan' => $request->input('keterangan'),
            'kurir' => $request->input('kurir'),
        ]);

        return redirect()->route('home')->with('success', 'Pesanan berhasil diperbarui.');
    }

    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();

        return redirect()->route('home')->with('success', 'Pesanan berhasil dihapus.');
    }
}
