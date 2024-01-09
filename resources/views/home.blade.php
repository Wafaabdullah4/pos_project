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

                <h2>Our Menu</h2>
                <p>Check Our <span>Yummy Menu</span></p>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                        <h4>Starters</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                        <h4>Breakfast</h4>
                    </a><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                        <h4>Lunch</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                        <h4>Dinner</h4>
                    </a>
                </li><!-- End tab nav item -->

            </ul>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                <div class="tab-pane fade active show" id="menu-starters">

                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Starters</h3>
                    </div>
                    {{-- @forelse ($menus as $data)
                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox">
                                    <img src="{{ asset('/storage/menu/'.$data->image) }}" class="menu-img img-fluid" ></a>
                                <h4>{{$data->nama_makanan}}</h4>
                                <p class="ingredients">
                            {{$data ->content}}
                                </p>
                                <p class="price">
                                   RP {{$data ->harga}}
                                </p>
                            </div><!-- Menu Item -->


                            @empty
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                        @endforelse --}}

                </div>
            </div><!-- End Starter Menu Content -->

            <div class="tab-pane fade" id="menu-breakfast">

                <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Breakfast</h3>
                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Magnam Tiste</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $5.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Aut Luia</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $14.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Est Eligendi</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $8.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Laboriosam Direva</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $9.95
                        </p>
                    </div><!-- Menu Item -->

                </div>
            </div><!-- End Breakfast Menu Content -->

            <div class="tab-pane fade" id="menu-lunch">

                <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Lunch</h3>
                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Magnam Tiste</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $5.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Aut Luia</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $14.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Est Eligendi</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $8.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Laboriosam Direva</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $9.95
                        </p>
                    </div><!-- Menu Item -->

                </div>
            </div><!-- End Lunch Menu Content -->

            <div class="tab-pane fade" id="menu-dinner">

                <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Dinner</h3>
                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Magnam Tiste</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $5.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Aut Luia</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $14.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Est Eligendi</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $8.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Laboriosam Direva</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $9.95
                        </p>
                    </div><!-- Menu Item -->

                </div>
            </div><!-- End Dinner Menu Content -->

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
