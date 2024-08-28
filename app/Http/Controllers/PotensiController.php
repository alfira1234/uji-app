<?php

namespace App\Http\Controllers;

use App\Models\Potensi;
use Illuminate\Http\Request;

class PotensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $potensi = potensi::orderby('id', 'ASC')->get();
        return view('dashboard.potensi.index', [
            "title" => "potensi",
            'potensi' => Potensi::where('profil_id', auth()->user()->id)->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.potensi.create', [
            "title" => "potensi",

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
            'potensi' => '',
            'pengembangan' => '',

        ]);

        $validateData['profil_id'] = auth()->user()->id;
        Potensi::create($validateData);
        //dd($validatedData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('potensi.index')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Potensi  $potensi
     * @return \Illuminate\Http\Response
     */
    public function show(Potensi $potensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Potensi  $potensi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $potensi = potensi::find($id);
        return view('dashboard.potensi.edit', ["title" => "potensi"], compact('potensi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Potensi  $potensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi kolom
        $validateData=$request->validate([
            'potensi' => '',
            'pengembangan' => '',
        ]);


        potensi::where('id',$id)->update($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('potensi.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Potensi  $potensi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $potensi = potensi::findOrfail($id);
        $potensi->delete();

        return redirect()->route('potensi.index')->with('success', 'Data berhasil dihapus!');
    }
}
