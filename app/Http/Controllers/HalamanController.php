<?php

namespace App\Http\Controllers;

use App\Models\Halaman;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index()
    {
        $halaman = Halaman::all();
        return view('halaman.index', compact('halaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'judul' => 'required',
            'foto' => 'required',
            'destitle' => 'required',
            'deskripsi' => 'required',

        ]);

        $halaman = new Halaman();
        $halaman->title = $request->title;
        $halaman->judul = $request->judul;
        
        if ($request->hasFile('foto')) {
            $halaman->deleteImage(); //menghapus image sebelum di update melalui method deleteImage di model
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/foto/', $name);
            $halaman->foto = $name;
        }
        $halaman->destitle = $request->destitle;
        $halaman->deskripsi = $request->deskripsi;
        
       
        $halaman->save();
        return redirect()->route('halaman.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\halaman  $halaman
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $halaman = Halaman::findOrFail($id);
        return view('halaman.show', compact('halaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\halaman  $halaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $halaman = Halaman::findOrFail($id);
        return view('halaman.edit', compact('halaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\halaman  $halaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'judul' => 'required',
            'foto' => 'required',
            'destitle' => 'required',
            'deskripsi' => 'required',


        ]);

        $halaman = Halaman::findOrFail($id);
        $halaman->title = $request->title;
        $halaman->judul = $request->judul;
       
        if ($request->hasFile('foto')) {
            $halaman->deleteImage(); //menghapus image sebelum di update melalui method deleteImage di model
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/foto/', $name);
            $halaman->foto = $name;
        }
        $halaman->destitle = $request->destitle;
        $halaman->deskripsi = $request->deskripsi;
        $halaman->save();
        return redirect()->route('halaman.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\halaman  $halaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $halaman = Halaman::findOrFail($id);
        $halaman->delete();
        return redirect()->route('halaman.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
