@extends('layouts.adminnav')
@section('content')
<h1>Edit</h1>
<hr>

<form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label class="font-weight-bold">GAMBAR</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="form-group">
        <label for="nama_makanan">Nama Makanan</label>
        <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" value="{{ $menu->nama_makanan }}">
    </div>
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $menu->kelas }}">
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" value="{{ $menu->harga }}">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control" id="content" name="content" value="{{ $menu->content }}">
    </div>
    
    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>

    

@endsection