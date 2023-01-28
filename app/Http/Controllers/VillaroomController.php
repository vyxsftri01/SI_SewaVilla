<?php

namespace App\Http\Controllers;
use App\Models\villa;
use Illuminate\Http\Request;

class VillaroomController extends Controller
{
    public function index()
    {
        //
        $villa = villa::all();
        return view('user.villaroom', compact('villa'));
    }
}
