@extends('layouts.navSiswa')

@section('content')

    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Buat Pesanan Baru</h2>
                <p>Buat <span>Pesanan Anda</span> Bersama Kami</p>
            </div>

            <div class="row g-0">
                <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);"
                    data-aos="zoom-out" data-aos-delay="200"></div>

                <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                    <form method="POST" action="{{ route('pesanans.store') }}" role="form" class="php-email-form"
                        data-aos="fade-up" data-aos-delay="100">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-lg-4 col-md-6">
                                <input type="number" name="jumlah_pesanan" class="form-control" id="jumlah_pesanan"
                                    placeholder="Jumlah Pesanan" required>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="barang" class="form-control" id="barang"
                                    placeholder="Nama Barang" required>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="number" name="harga" class="form-control" id="harga" placeholder="Harga"
                                    required>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <textarea class="form-control" name="keterangan" rows="5" placeholder="Keterangan" required></textarea>
                            </div>

                            @php
                                use App\Models\User;
                                $kurirs = User::where('type', 2)->get();
                            @endphp


                            <div class="form-group">
                                <label for="kurir">Kurir</label>
                                <select name="kurir" id="kurir" class="form-control" required>
                                    @foreach ($kurirs as $kurir)
                                        <option value="{{ $kurir->id }}">{{ $kurir->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <div class="mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Pesanan Anda telah dibuat. Terima kasih!</div>
                                </div>
                                <div class="text-center"><button type="submit">Buat Pesanan</button></div>
                            </div>
                    </form>
                </div><!-- End Reservation Form -->
            </div>
        </div>
    </section>
    <!-- End Book A Table Section -->
@endsection
