@extends('layouts.navSiswa')

@section('content')
    {{-- <a href="{{ route('pesanans.create') }}" class="btn btn-success">Add Food</a> --}}
    <div class="bg-dark">

    </div>
    <table class="table mt-5" style="margin-top: 100px">
        <div class="tabular--wrapper">
            <div class="table-container">
                <table>
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

        </div>

    </table>
@endsection
