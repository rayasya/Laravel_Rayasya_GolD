<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(Request $req)
    {
        $url = $req->url();
        $kata = "Ini dari controller";
        return view('pages.data', ['kata' => $kata, 'url' => $url]);
    }
}
