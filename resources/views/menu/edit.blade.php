@extends('layouts.adminnav')
@section('content')
<h1>Edit</h1>
<hr>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold">GAMBAR</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">NAMA MAKANAN</label>
                            <input type="text" class="form-control @error('nama_makanan') is-invalid @enderror" name="nama_makanan" value="{{ old('nama_makanan', $menu->nama_makanan) }}" placeholder="Masukkan Nama Makanan">

                            <!-- error message untuk nama_makanan -->
                            @error('nama_makanan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">KELAS</label>
                            <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas', $menu->kelas) }}" placeholder="Masukkan Kelas">

                            <!-- error message untuk kelas -->
                            @error('kelas')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">HARGA</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $menu->harga) }}" placeholder="Masukkan Harga">

                            <!-- error message untuk harga -->
                            @error('harga')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">STOCK</label>
                            <input type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock', $menu->stock) }}" placeholder="Masukkan Stock">

                            <!-- error message untuk stock -->
                            @error('stock')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">JENIS</label>
                            <input type="text" class="form-control @error('jenis') is-invalid @enderror" name="jenis" value="{{ old('jenis', $menu->jenis) }}" placeholder="Masukkan Jenis">

                            <!-- error message untuk jenis -->
                            @error('jenis')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">CONTENT</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Content">{{ old('content', $menu->content) }}</textarea>

                            <!-- error message untuk content -->
                            @error('content')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection
