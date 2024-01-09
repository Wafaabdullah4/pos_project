@extends('layouts.navSiswa')

@section('content')
    <section id="menu" class="menu">
        <div class="container">
            <h2>Riwayat Pesanan</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Nama Menu</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Kurir</th>
                        <th>Tanggal Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $key => $order)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ \App\Models\User::find($order->user_id)->name }}
                            <td>{{ $order->menu->nama_makanan }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>Rp{{ number_format($order->total_harga, 2) }}</td>
                            <td>{{ \App\Models\User::find($order->kurir_id)->name }}
                            <td>{{ $order->created_at->format('d-m-Y H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
