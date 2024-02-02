@extends('layouts.navKurir')

@section('content')
<style>
    /* Gaya CSS Tambahan */
    .table-responsive {
        overflow-x: auto;
    }

    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: #fff;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .table th,
    .table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #dee2e6;
    }

    .table th {
        background-color: #f8f9fa;
    }

    .btn-sm {
        padding: 5px 10px;
        font-size: 14px;
    }

    h2 {
        color: #6c757d; /* Warna abu-abu tua */
        text-align: center; /* Tengahkan judul */
    }

    .card {
        transition: transform 0.3s ease-in-out;
        margin-bottom: 20px;
        background-color: #fff; /* Warna ungu tua pada card */
        color: #; /* Warna teks putih pada card */
    }

    .card:hover {
        transform: scale(1.05); /* Efek zoom saat hover */
    }

    /* Warna ungu */
    .card-title, .btn-success {
        color: #7d2ae8; /* Warna kuning keemasan */
    }

    .card-text {
        color: #4a5568; /* Warna abu-abu muda */
    }

    /* Ubah warna sesuai preferensi Anda */
    .btn-success {
        background-color: #7d2ae8; /* Warna kuning keemasan */
        border-color: #7d2ae8;
        color: #fff;
    }

    .btn-success:hover {
        background-color: #7d2ae8; /* Warna kuning tua */
        border-color: #7d2ae8;
    }

</style>

<section id="menu" class="menu">
    <div class="container">
        <h2>Custom Pesanan</h2>
        @php $no = 1; @endphp
        @foreach ($pesanans as $data)
        <div class="card mb-3">
            <div class="card-body">
                <p>No: {{ $no++ }}</p>
                <p>Name: {{ \App\Models\User::find($data->user_id)->name }}</p>
                <p>Kelas: {{ \App\Models\User::find($data->user_id)->kelas }}</p>
                <p>Jumlah Pesanan: {{ $data->jumlah_pesanan }}</p>
                <p>Barang: {{ $data->barang }}</p>
                <p>Harga Pesanan: Rp{{ number_format($data->harga, 0, ',', '.') }}</p>
                <p>Keterangan: {{ $data->keterangan }}</p>
                <p>KURIR: {{ \App\Models\User::find($data->kurir)->name }}</p>
                <form action="{{ route('pesanans.destroy', $data->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-success"
                        onclick="return confirm('Apakah anda sudah menyelesaikan pesanan?')">Done</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
