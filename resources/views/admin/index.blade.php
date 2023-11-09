@extends('layouts.navAdmin')

@section('content')
    <div class="container">
        <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>
        <table class="table  ">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Type User</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1 @endphp
                @foreach ($users as $data)
                    <tr>
                        <th scope="row"> {{ $no++ }}</th>
                        <td class=""> {{ $data->name }}</td>
                        <td> {{ $data->kelas }}</td>
                        <td> {{ $data->jk }}</td>
                        <td>
                            {{ $data->email }}
                        </td>
                        <td>
                            {{ $data->password }}
                        </td>
                        <td>
                            {{ $data->type }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
