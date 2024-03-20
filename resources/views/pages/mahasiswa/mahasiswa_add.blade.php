@extends('layouts.masterAdmin')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Tambah Data Mahasiswa</h5>
                <p class="mb-5">Ini adalah halaman untuk menambah data Mahasiswa</p>

                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim" required>
                            @error('nim')
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    {{ $errors->first('nim') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="name" required>
                            @error('nama')
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    {{ $errors->first('nama') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="prodi" class="form-label">Program Studi</label>
                            <select name="prodi" id="prodi" class="form-select">
                                <option value="TIF">TIF</option>
                                <option value="MIF">MIF</option>
                                <option value="TKK">TKK</option>
                            </select>
                            @error('prodi')
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    {{ $errors->first('prodi') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="address" class="form-label">Alamat</label>
                            <textarea name="alamat" id="address" cols="1" rows="1" class="form-control" required></textarea>
                            @error('alamat')
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    {{ $errors->first('alamat') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="notelp" class="form-label">No Telp</label>
                            <input type="text" name="no_telp" class="form-control" id="notelp" required>
                            @error('no_telp')
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    {{ $errors->first('no_telp') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required>
                            @error('tanggal_lahir')
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    {{ $errors->first('tanggal_lahir') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
