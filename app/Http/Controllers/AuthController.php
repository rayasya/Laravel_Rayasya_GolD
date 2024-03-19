<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function indexLogin()
    {
        return view("auth.login");
    }

    public function authLogin(Request $req)
    {
        $req->validate([
            "username" => "required",
            "password" => "required",
        ]);
        $credential = $req->only(["username", "password"]);
        if (Auth::attempt($credential)) {
            return redirect()->intended('dashboard')->withSuccess("Berhasil Masuk");
        }
        return redirect('login')->withSuccess("Gagal Masuk");
    }

    public function indexRegister()
    {
        return view("auth.register");
    }

    public function authRegister(Request $req)
    {
        $req->validate([
            "name" => "required",
            "username" => "required",
            "email" => "required|email|unique:users",
            "password" => "required"
        ]);
        $data = $req->all();
        $check = $this->create($data);
        return redirect('dashboard')->withSuccess("Berhasil Mendaftar");
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('auth.dashboard');
        }
        return redirect('login')->withSuccess('Kamu tidak memiliki akses');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
