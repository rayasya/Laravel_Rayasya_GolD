<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";

    protected $fillable = [
        "nim",
        "nama_mhs",
        "prodi_mhs",
        "alamat_mhs",
        "no_telp",
        "tanggal_lahir"
    ];
}
