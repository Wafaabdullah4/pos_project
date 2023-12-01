@extends('layouts.adminnav')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
       
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('menu.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">GAMBAR</th>
                            <th scope="col">NAMA MAKANAN</th>
                            <th scope="col">KELAS</th>
                            <th scope="col">HARGA</th>
                            {{-- <th scope="col">JENIS</th> --}}
                    
                            <th scope="col">CONTENT</th>
                            <th scope="col">AKSI</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($menus as $data)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('/storage/menu/'.$data->image) }}" class="rounded" style="width: 50%; object-fit: cover">
                                </td>
                                <td>{{ $data->nama_makanan }}</td>
                                <td>{{ $data->kelas }}</td>
                                <td>{{ $data->harga }}</td>
                                {{-- <td>{{ $data->jenis }}</td> --}}
                                <td>{{ $data->content }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('menu.destroy', $data->id) }}" method="POST">
                                        {{-- <a href="{{ route('menu.show', $data->id) }}" class="btn btn-sm btn-dark">SHOW</a> --}}
                                        <a href="{{ route('menu.edit', $data->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                          @empty
                              <div class="alert alert-danger">
                                  Data Post belum Tersedia.
                              </div>
                          @endforelse
                        </tbody>
                      </table>  
                      {{ $menus->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    //message with toastr
    @if(session()->has('success'))
    
        toastr.success('{{ session('success') }}', 'BERHASIL!'); 

    @elseif(session()->has('error'))

        toastr.error('{{ session('error') }}', 'GAGAL!'); 
        
    @endif
</script>

@endsection
