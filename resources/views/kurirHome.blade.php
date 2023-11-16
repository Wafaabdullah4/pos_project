@extends('layouts.navKurir')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        {{ Auth::user()->name }}
                        <br>
                        {{ Auth::user()->kelas }}
                        <br>
                        {{ Auth::user()->jk }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
