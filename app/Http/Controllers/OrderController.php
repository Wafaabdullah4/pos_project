<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

use App\Models\Pesanan;

class OrderController extends Controller
{
    public function storeOrder(Request $request)
    {
        // Validasi data pemesanan
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'quantity' => 'required|integer|min:1',
            'kurir_id' => 'required|exists:users,id',
        ]);

        // Ambil data menu berdasarkan ID
        $menu = \App\Models\Menu::find($request->menu_id);

        // Hitung total harga berdasarkan jumlah
        $totalHarga = $menu->harga * $request->quantity;

        // Simpan pemesanan ke database
        Order::create([
            'user_id' => auth()->user()->id,
            'menu_id' => $request->menu_id,
            'quantity' => $request->quantity,
            'total_harga' => $totalHarga,
            'kurir_id' => $request->kurir_id,
        ]);

        // Anda juga dapat menambahkan logika lain di sini, seperti mengurangi stok menu, dll.
        return redirect()->route('menus')->with(['success' => 'Data Berhasil Disimpan!']);
        // return response()->json(['message' => 'Pemesanan berhasil.']);
    }
    public function destroyOrder($id)
    {
        $order = Order::findOrFail($id);

        // Pastikan bahwa pengguna yang menghapus pesanan adalah pemilik pesanan atau memiliki akses yang diperlukan
        // Anda dapat menyesuaikan ini sesuai dengan logika autentikasi dan otorisasi di aplikasi Anda

        // Hapus pesanan
        $order->delete();

        return redirect()->route('kurirorders.show')->with('success', 'Pesanan berhasil dihapus.');
    }

    public function showOrders()
    {
        // Ambil semua pesanan dari database
        $orders = Order::with('menu')->where('user_id', auth()->user()->id)->get();

        // Kirim data pesanan ke view
        return view('studentorder.showorder', compact('orders'));
    }
    public function KurirshowOrders()
    {
        // Ambil semua pesanan dari database
        $orders = Order::with('menu')->where('kurir_id', auth()->user()->id)->get();

        // Kirim data pesanan ke view
        return view('kurirorder.kurirshow', compact('orders'));
    }
}
