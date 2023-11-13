@extends('layouts.navAdmin')

@section('content')
    <a href="{{ route('pesanans.create') }}" class="btn btn-success">Add Food</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Jumlah Pesanan</th>
                <th>Barang</th>
                <th>Harga Pesanan</th>
                <th>Keterangan</th>
                <th>KURIR</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($pesanans as $data)
                <tr>

                    <td>{{ $data->id }}</td>
                    <td>{{ \App\Models\User::find($data->user_id)->name }}
                    <td>{{ $data->jumlah_pesanan }}</td>
                    <td>{{ $data->barang }}</td>
                    <td>{{ $data->harga }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>{{ \App\Models\User::find($data->kurir)->name }}

                    <td>
                        <a href="{{ route('pesanans.show', $data->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('pesanans.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                        <!-- Add delete button if needed -->
                        <form action="{{ route('pesanans.destroy', $data->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $pesanans->links() }} --}}
@endsection
