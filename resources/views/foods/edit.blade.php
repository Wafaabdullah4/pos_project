@extends('layouts.navAdmin')
@section('content')
    <form action="{{ route('foods.update', $food->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $food->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control" required>{{ $food->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" class="form-control" value="{{ $food->price }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Food</button>
    </form>
@endsection
