@extends('layouts.navSiswa')

@section('content')
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <a href="#" id="showReservationForm" class="btn  mt-5"
                    style="background-color: #593FA2; text-decoration: none ; color: white;">Custom Pesanan</a>
                {{-- <a href="{{ route('pesanans.create') }}" > Custom Pesanan</a> --}}

                <section id="book-a-table" class="book-a-table" style="display: none;">
                    <form method="POST" action="{{ route('pesanans.store') }}" data-aos="fade-up" data-aos-delay="100">
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
                            {{-- <div class="form-group">
                                <label for="kurir">Menu</label>
                                <select name="menu" id="menu" class="form-control" required>
                                    <option value="">Pilih Menu</option>
                                    @foreach ($menus as $menu)
                                        <option value="{{ $menu->id }}">{{ $menu->nama_makanan }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="form-group mt-3">
                                <button type="submit" class="btn  btn-lg btn-block py-2 rounded-pill"
                                    style="background-color: #593FA2; text-decoration: none ; color: white;">Buat
                                    Pesanan</button>
                            </div>

                        </div>
                    </form>
                </section>


        </div>

        </div>
    </section><!-- End Menu Section -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Menangkap elemen-elemen yang diperlukan
            var reservationSection = document.getElementById("book-a-table");
            var showReservationButton = document.getElementById("showReservationForm");

            // Menambahkan status tersembunyi pada elemen <section>
            var isReservationVisible = false;

            // Menambahkan event listener pada tombol
            showReservationButton.addEventListener("click", function(event) {
                // Mencegah perilaku default dari tautan
                event.preventDefault();

                // Toggle antara terlihat dan tersembunyi
                if (isReservationVisible) {
                    reservationSection.style.display = "none";
                } else {
                    reservationSection.style.display = "block";
                }

                // Mengubah status
                isReservationVisible = !isReservationVisible;
            });
        });
    </script>
@endsection
