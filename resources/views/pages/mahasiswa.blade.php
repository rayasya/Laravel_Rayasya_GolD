@extends('layouts.masterAdmin')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold">Selamat Datang {{ Auth::user()->name }} :)</h5>
            </div>
        </div>
    </div>
@endsection
