<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warga = Warga::orderby('id', 'ASC')->get();
        return view('dashboard.warga.index', [
            "title" => "warga",
            'warga' => $warga

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.warga.create', [
            "title" => "warga",

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'warga' => 'required',
            'laki' => 'required',
            'perempuan' => 'required',

        ]);

        Warga::create($validateData);
        //dd($validatedData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('warga.index')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function show(Warga $warga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $warga = Warga::find($id);
        return view('dashboard.warga.edit', ["title" => "warga"], compact('warga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi kolom
        $validateData=$request->validate([
            'warga' => 'required',
            'laki' => 'required',
            'perempuan' => 'required',

        ]);


        warga::where('id',$id)->update($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('warga.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $warga = Warga::findOrfail($id);
        $warga->delete();

        return redirect()->route('warga.index')->with('success', 'Data berhasil dihapus!');
    }
}
