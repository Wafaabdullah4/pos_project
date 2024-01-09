@extends('layouts.navSiswa')

@section('content')
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">

                            <img src="{{ asset('storage/menu/' . $menus->image) }}" class="w-100 rounded mb-3"
                                alt="{{ $menus->nama_makanan }}">
                            <h2 class="card-title">{{ $menus->nama_makanan }}</h2>
                            <p class="card-subtitle text-muted mb-3">{{ $menus->jenis }} - {{ $menus->kelas }}</p>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4 class="text-primary">Harga: RP{{ $menus->harga }}</h4>
                                    <p class="text-muted">Stok: {{ $menus->stock }}</p>
                                </div>
                            </div>
                            <hr>
                            <p>{{ $menus->content }}</p>
                            <a href="{{ url('/menus') }}" class="btn btn-secondary mb-3">Kembali</a>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#orderModal">Pesan
                                Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="orderModalLabel">Pesan Menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="orderForm" action="{{ url('/submit-order') }}" method="POST">
                            @csrf
                            <input type="hidden" name="menu_id" value="{{ $menus->id }}">
                            <div class="form-group">
                                <label for="quantity">Jumlah:</label>
                                <input type="number" name="quantity" class="form-control" required>
                            </div>
                            @php
                                use App\Models\User;
                                $kurirs = User::where('type', 2)->get();
                            @endphp
                            <div class="form-group">
                                <label for="kurir_id">Pilih Kurir:</label>
                                <select name="kurir_id" class="form-control" required>
                                    @foreach ($kurirs as $kurir)
                                        <option value="{{ $kurir->id }}">{{ $kurir->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tambahkan script di bagian bawah sebelum tag penutup </body> -->
        <script>
            $(document).ready(function() {
                $('#orderForm').submit(function(e) {
                    e.preventDefault();

                    var formData = $(this).serialize();

                    $.ajax({
                        type: 'POST',
                        url: '/submit-order', // Ganti dengan URL endpoint penyimpanan pesanan Anda
                        data: formData,
                        success: function(response) {
                            // Handle success, mungkin menampilkan pesan atau mengarahkan pengguna
                            console.log(response);
                            // Tutup modal setelah pemesanan berhasil
                            $('#orderModal').modal('hide');
                        },
                        error: function(error) {
                            // Handle error, mungkin menampilkan pesan kesalahan
                            console.log(error);
                        }
                    });
                });
            });
        </script>

    </section>

    <!-- Tambahkan jQuery dan Popper.js untuk mendukung modal Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpuOJg9xW1me/uwfeT8hUZfP4H/7P4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </script>
    <!-- Tambahkan Bootstrap JS untuk modal -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
