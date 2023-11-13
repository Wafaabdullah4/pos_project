@extends('layouts.navAdmin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create User</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="kelas">Class</label>
                                <input type="text" name="kelas" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="jk">Gender</label>
                                <select name="jk" class="form-control" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="type">User Type</label>
                                <select name="type" class="form-control" required>
                                    <option value="0">SISWA</option>
                                    <option value="2">Kurir</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Create User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
