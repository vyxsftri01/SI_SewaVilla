<?php

namespace App\Http\Controllers;

use App\Models\GaleriHal;
use Illuminate\Http\Request;

class GaleriHalController extends Controller
{
    public function index()
    {
        $galeri_hal = GaleriHal::all();
        return view('galeri_hal.index', compact('galeri_hal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri_hal.create');
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
            'foto' => 'required',
            'title' => 'required',

        ]);

        $galeri_hal = new GaleriHal();
        
        if ($request->hasFile('foto')) {
            $galeri_hal->deleteImage(); //menghapus image sebelum di update melalui method deleteImage di model
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/foto/', $name);
            $galeri_hal->foto = $name;
        }
        $galeri_hal->title = $request->title;
       
        $galeri_hal->save();
        return redirect()->route('galeri_hal.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\galeri_hal  $galeri_hal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeri_hal = GaleriHal::findOrFail($id);
        return view('galeri_hal.show', compact('galeri_hal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\galeri_hal  $galeri_hal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri_hal = GaleriHal::findOrFail($id);
        return view('galeri_hal.edit', compact('galeri_hal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\galeri_hal  $galeri_hal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'foto' => 'required',
            'title' => 'required',
          
        ]);

        $galeri_hal = GaleriHal::findOrFail($id);
       
        if ($request->hasFile('foto')) {
            $galeri_hal->deleteImage(); //menghapus image sebelum di update melalui method deleteImage di model
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/foto/', $name);
            $galeri_hal->foto = $name;
        }
        $galeri_hal->title = $request->title;
        $galeri_hal->save();
        return redirect()->route('galeri_hal.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\galeri_hal  $galeri_hal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri_hal = GaleriHal::findOrFail($id);
        $galeri_hal->delete();
        return redirect()->route('galeri_hal.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
