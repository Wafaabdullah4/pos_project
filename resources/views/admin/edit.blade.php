@extends('layouts.adminnav')

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
            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" class="form-control" value="{{ $user->kelas }}" required>
        </div>

        <div class="form-group">
            <label for="jk">Gender:</label>
            <select name="jk" class="form-control" required>
                <option value="male" {{ $user->jk == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $user->jk == 'female' ? 'selected' : '' }}>Female</option>
            </select>
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
            <label for="type">User Type:</label>
            <select name="type" class="form-control" required>
                <option value="0" {{ $user->type == 0 ? 'selected' : '' }}>SISWA</option>
                <option value="2" {{ $user->type == 2 ? 'selected' : '' }}>Kurir</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
@endsection
