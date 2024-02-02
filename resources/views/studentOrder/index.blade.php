@extends('layouts.navSiswa')

@section('content')
<section id="menu" class="menu">
    <div class="container">
        <h2>Riwayat Pesanan</h2>
        <table class="table">


                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Jumlah Pesanan</th>
                            <th>Barang</th>
                            <th>Harga Pesanan</th>
                            <th>Keterangan</th>
                            <th>KURIR</th>

                        </tr>
                    <tbody>
                        @php
                            $no = 1;

                        @endphp
                        @foreach ($pesanans as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ \App\Models\User::find($data->user_id)->name }}
                                <td>{{ $data->jumlah_pesanan }}</td>
                                <td>{{ $data->barang }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>{{ $data->keterangan }}</td>
                                <td>{{ \App\Models\User::find($data->kurir)->name }}

                            </tr>
                        @endforeach
                    </tbody>
                    </thead>
                </table>
            </div>


</section>
@endsection
