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
        if (Auth::check()) {
            return redirect("dashboard");
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
            return redirect()->intended('dashboard')->withSuccess("Berhasil Masuk");
        }
        return redirect('login')->withSuccess("Gagal Masuk");
    }

    public function indexRegister()
    {
        if (Auth::check()) {
            return redirect("dashboard");
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
        return view('pages.dashboard');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
