<?php

namespace App\Http\Controllers;

use App\Models\villa;
use Illuminate\Http\Request;

class VillaController extends Controller
{
    public function index()
    {
        $villa = villa::all();
        return view('villa.index', compact('villa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('villa.create');
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
            'foto' => 'required|image|max:2048',
            'namavilla' => 'required',
            'fasilitas' => 'required',
            'kapasitas' => 'required',
            'lantai' => 'required',
            'kamar' => 'required',
            'kamar_mandi' => 'required',
            'view' => 'required',
            'kasur' => 'required',
            'harga' => 'required',

        ]);

        $villa = new villa();
        if ($request->hasFile('foto')) {
            $villa->deleteImage(); //menghapus image sebelum di update melalui method deleteImage di model
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/foto/', $name);
            $villa->foto = $name;
        }
        $villa->namavilla = $request->namavilla;
        $villa->fasilitas = $request->fasilitas;
        $villa->kapasitas = $request->kapasitas;
        $villa->lantai = $request->lantai;
        $villa->kamar = $request->kamar;
        $villa->kamar_mandi = $request->kamar_mandi;
        $villa->view = $request->view;
        $villa->kasur = $request->kasur;
        $villa->harga = $request->harga;
       
        $villa->save();
        return redirect()->route('villa.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $villa = villa::findOrFail($id);
        return view('villa.show', compact('villa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $villa = villa::findOrFail($id);
        return view('villa.edit', compact('villa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'foto' => 'required|image|max:2048',
            'namavilla' => 'required',
            'fasilitas' => 'required',
            'kapasitas' => 'required',
            'lantai' => 'required',
            'kamar' => 'required',
            'kamar_mandi' => 'required',
            'view' => 'required',
            'kasur' => 'required',
            'harga' => 'required',

        ]);

        $villa = villa::findOrFail($id);
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/image/', $name);
            $villa->foto = $name;
        }
        $villa->namavilla = $request->namavilla;
        $villa->fasilitas = $request->fasilitas;
        $villa->kapasitas = $request->kapasitas;
        $villa->lantai = $request->lantai;
        $villa->kamar = $request->kamar;
        $villa->kamar_mandi = $request->kamar_mandi;
        $villa->view = $request->view;
        $villa->kasur = $request->kasur;
        $villa->harga = $request->harga;
        $villa->save();
        return redirect()->route('villa.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $villa = villa::findOrFail($id);
        $villa->delete();
        return redirect()->route('villa.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
