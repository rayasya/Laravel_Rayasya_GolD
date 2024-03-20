<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::all();
        return view("pages.mahasiswa.mahasiswa", compact("data"));
    }

    public function create()
    {
        return view("pages.mahasiswa.mahasiswa_add");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nim" => "required|min:9|max:9",
            "nama" => "required",
            "prodi" => "required",
            "alamat" => "required",
            "no_telp" => "required|min:12",
            "tanggal_lahir" => "required",
        ]);
        $check = Mahasiswa::create([
            "nim" => $request->nim,
            "nama_mhs" => $request->nama,
            "prodi_mhs" => $request->prodi,
            "alamat_mhs" => $request->alamat,
            "no_telp" => $request->no_telp,
            "tanggal_lahir" => $request->tanggal_lahir,
        ]);
        return redirect('mahasiswa')->with('success', 'Data Berhasil Ditambahkan');
    }

}
