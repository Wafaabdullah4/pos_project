    @extends('layouts.navSiswa')



    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Buat Pesanan Baru</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('pesanans.store') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="jumlah_pesanan">Jumlah Pesanan</label>
                                    <input type="number" name="jumlah_pesanan" id="jumlah_pesanan" class="form-control"
                                        required>

                                </div>

                                <div class="form-group">
                                    <label for="barang">Nama Barang</label>
                                    <input type="text" name="barang" id="barang" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" name="harga" id="harga" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea name="keterangan" id="keterangan" class="form-control" rows="3" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="kurir">Kurir</label>
                                    <select name="kurir" id="kurir" class="form-control" required>
                                        @foreach ($kurirs as $kurir)
                                            <option value="{{ $kurir->id }}">{{ $kurir->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Buat Pesanan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
