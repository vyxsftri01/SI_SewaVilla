<?php

namespace App\Http\Controllers;

use App\Models\image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        // memanggil data Wali bersama dengan data siswa
        // yang dibuat dari method 'siswa' di model 'Wali'
        $image = image::all();
        // dd($image);
        // return $image;
        return view('image.index', compact('image'));
    }

    public function create()
    {
        return view('image.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'foto' => 'required',
        ]);

        // dd($request);
        
        $images = new image();
        if ($request->hasFile('foto')) {
            $images->deleteImage(); //menghapus image sebelum di update melalui method deleteImage di model
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/foto/', $name);
            $images->foto = $name;
        }

        // if ($request->hasFile('foto')) {
        //     $image = $request->file('foto');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/image/', $name);
        //     $image->foto = $name;
        // }
        $images->save();
        return redirect()->route('image.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $image = image::findOrFail($id);
        return view('image.show', compact('image'));
    }

    public function edit($id)
    {
        $image = image::findOrFail($id);
        return view('image.edit', compact('image'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'foto' => 'image|max:2048',
        ]);

        $images = image::findOrFail($id);
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/image/', $name);
            $images->foto = $name;
        }
        $images->save();
        return redirect()->route('image.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $image = image::find($id);
        $foto = $image->foto;

        if (!image::destroy($id)) {
            return redirect()->back();
        }
        if ($foto) {
            $image->deleteImage();
        }
        return redirect()->route('image.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
