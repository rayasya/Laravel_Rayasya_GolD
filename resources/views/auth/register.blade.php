@extends('layouts.masterAuth')
@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <h1>Form Register</h1>
                                </a>
                                <p class="text-center">Silahkan isi form terlebih dahulu</p>
                                <form action="{{ route('authRegister') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input id="name" name="name" type="text" class="form-control">
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <div>{{ $message }}</div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input id="email" name="email" type="email" class="form-control">
                                    </div>
                                    @error('email')
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <div>{{ $message }}</div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input id="password" name="password" type="password" class="form-control">
                                    </div>
                                    @error('password')
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <div>{{ $message }}</div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <div class="mb-4">
                                        <label for="role" class="form-label">Role</label>
                                        <select name="role" id="role" class="form-select">
                                            <option value="Admin">Admin</option>
                                            <option value="User">User</option>
                                        </select>
                                    </div>
                                    @error('password')
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <div>{{ $message }}</div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <button type="submit" name="submit"
                                        class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Sudah Punya Akun?</p>
                                        <a class="text-primary fw-bold ms-2" href="/login">Login
                                            Disini</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
