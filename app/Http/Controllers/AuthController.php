<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function indexLogin()
    {
        if (Auth::check()) {
            return redirect("dashboard")->with('warning', 'Anda Sudah Login');
        }
        return view("auth.login");
    }

    public function authLogin(Request $req)
    {
        $req->validate([
            "email" => "required",
            "password" => "required",
        ]);
        $credential = $req->only(["email", "password"]);
        if (Auth::attempt($credential)) {
            return redirect()->intended('dashboard')->with('success', 'Berhasil Masuk');
        }

        return redirect('login')->with('error', 'Gagal masuk');
    }

    public function indexRegister()
    {
        if (Auth::check()) {
            return redirect("dashboard")->with('warning', 'Anda Sudah Login');
        }
        return view("auth.register");
    }

    public function authRegister(Request $req)
    {
        $req->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:8",
            "role" => "required",
        ]);
        $data = $req->all();
        $check = $this->create($data);
        return redirect('dashboard')->with('success', 'Berhasil Mendaftar');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);
    }

    public function dashboard()
    {
        $data = Mahasiswa::all();
        return view('pages.dashboard', compact('data'));
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
