<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
   
    public function index()
    {
        $kota = Kota::all();
        return view('kota.index', compact('kota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kota.create');
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
            'namakota' => 'required',
            'alamat' => 'required',

        ]);

        $kota = new Kota();
        $kota->namakota = $request->namakota;
        $kota->alamat = $request->alamat;
        $kota->save();
        return redirect()->route('kota.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kota = Kota::findOrFail($id);
        return view('kota.show', compact('kota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kota = Kota::findOrFail($id);
        return view('kota.edit', compact('kota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kota $kota)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',

        ]);

        $kota = Kota::findOrFail($id);
        $kota->namakota = $request->namakota;
        $kota->alamat = $request->alamat;
        $kota->save();
        return redirect()->route('kota.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kota = Kota::findOrFail($id);
        $kota->delete();
        return redirect()->route('kota.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
