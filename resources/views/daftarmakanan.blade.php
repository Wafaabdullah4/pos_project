@extends('layouts.navSiswa')

@section('content')

<style>
   .menu-item {
    margin-bottom: 30px;
}

.menu-item-container {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    text-align: center;
    transition: transform 0.3s ease-in-out;
}

.menu-item-container:hover {
    transform: scale(1.05);
}

.menu-img {
    width: 100%; /* Gambar akan mengisi 100% dari lebar container */
    height: 200px; /* Anda dapat menyesuaikan ketinggian sesuai kebutuhan */
    object-fit: cover; /* Memastikan gambar diatur agar sesuai dengan kotak tanpa merubah rasio aspek */
    border-radius: 8px;
    margin-bottom: 10px;
}

.ingredients {
    color: #666;
}

.price {
    font-weight: bold;
    color: #333;
}

.button {
    display: inline-block;
    margin-top: 10px; /* Atur margin atas agar tombol tidak terlalu rapat dengan konten di atasnya */
}

.button a {
    color: #fff;
    background: #7d2ae8;
    border-radius: 6px;
    padding: 10px 20px; /* Sesuaikan padding agar tombol terlihat proporsional */
    cursor: pointer;
    text-decoration: none;
    transition: background-color 0.3s ease-in-out;
}

.button a:hover {
    background-color: #6a2490; /* Warna latar belakang yang berbeda saat tombol dihover */
}

</style>
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">



            {{-- <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

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

            </ul> --}}

            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                <div class="tab-pane fade active show" id="menu-starters">

                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Menu Kami</h3>
                    </div>
                    <div class="row gy-5">
                        @forelse ($menus as $data)
                            <div class="col-lg-4 menu-item">
                                <div class="menu-item-container">
                                    <a href="{{ asset('/storage/menu/' . $data->image) }}" class="glightbox">
                                        <img src="{{ asset('/storage/menu/' . $data->image) }}" class="menu-img img-fluid" alt="{{ $data->nama_makanan }}">
                                    </a>
                                    <h4>{{ $data->nama_makanan }}</h4>
                                    <p class="ingredients">{{ $data->content }}</p>
                                    <p class="price">RP {{ number_format($data->harga, 0, ',', '.') }}</p>
                                    <div class="button input-box">
                                        <a href="{{ route('menus.show', ['id' => $data->id]) }}" class="button">
                                            Lihat
                                        </a>
                                    </div>
                                </div>
                                {{-- <a href="{{ asset('/storage/menu/' . $data->image) }}" class="glightbox">
                                    <img src="{{ asset('/storage/menu/' . $data->image) }}" class="menu-img img-fluid"></a>
                                <h4>{{ $data->nama_makanan }}</h4>
                                <p class="ingredients">
                                    {{ $data->content }}
                                </p>
                                <p class="price">
                                    RP {{ $data->harga }}
                                </p>
                                <div class="button input-box"
                                    style="display: flex; justify-content: center; align-items: center;">
                                    <a href="{{ route('menus.show', ['id' => $data->id]) }}" class="button"
                                        style="   color: #fff;
                                        background: #7d2ae8;
                                        border-radius: 6px;
                                        padding: 10px 30%;
                                        cursor: pointer;
                                        text-decoration: none;">
                                        Lihat
                                    </a>
                                </div> --}}

                            </div><!-- Menu Item -->


                        @empty
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                        @endforelse

                    </div>
                </div><!-- End Starter Menu Content -->


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
