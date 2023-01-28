<?php

namespace App\Http\Controllers;
use App\Models\Halaman;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        //
        $data = Halaman::all();
        return view('welcome', compact('data'));
    }
}
