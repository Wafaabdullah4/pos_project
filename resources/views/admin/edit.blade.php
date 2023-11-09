@extends('layouts.navAdmin')
@section('content')
    <!-- resources/views/users/edit.blade.php -->

    <h2>Edit User - {{ $user->name }}</h2>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="role_id">Role:</label>
            <select name="role_id" class="form-control" required>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                        {{ $role->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
@endsection
