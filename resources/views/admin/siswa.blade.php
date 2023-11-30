@extends('layouts.adminnav')

@section('content')
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="text-start">
                    <h4 class="card-title">Data Siswa</h4>
                </div>
                <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>
            </div>
            
          {{-- <a href="{{ route('users.edit') }}" class="btn btn-danger">Edit</a> --}}
          <div class="table-responsive mt-4">
            <table class="table">
              <thead>
    {{-- <div class="container"> --}}
        {{-- <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a> --}}
        {{-- <table class="table  ">
            <thead class="table-dark"> --}}
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                    {{-- <th scope="col">Password</th> --}}
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1 @endphp
                @foreach ($users as $data)
                @if ($data->type == 'user')
                    
                <tr>
                    <th scope="row"> {{ $no++ }}</th>
                    <td class=""> {{ $data->name }}</td>
                    <td> {{ $data->kelas }}</td>
                    <td> {{ $data->jk }}</td>
                    <td>
                        {{ $data->email }}
                    </td>
                    <td>
                       
                        <a href="{{ route('users.edit', $data->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <!-- Add delete button if needed --> 
                        <form action="{{ route('users.destroy', $data->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                    {{-- <td>
                        {{ $data->password }}
                    </td> --}}
                    {{-- <td>
                        {{ $data->type }}
                    </td> --}}
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
</div>
</div>
@endsection
