@extends('layouts.navAdmin')

@section('content')
    <a href="{{ route('foods.create') }}" class="btn btn-success">Add Food</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($foods as $food)
                <tr>
                    <td>{{ $food->id }}</td>
                    <td>{{ $food->name }}</td>
                    <td>{{ $food->description }}</td>
                    <td>{{ $food->price }}</td>
                    <td>
                        <a href="{{ route('foods.show', $food->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('foods.edit', $food->id) }}" class="btn btn-primary">Edit</a>
                        <!-- Add delete button if needed -->
                        <form action="{{ route('foods.destroy', $food->id) }}" method="POST" style="display: inline;">
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
@endsection
