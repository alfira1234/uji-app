<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $profil = profil::orderby('id', 'ASC')->get();
        // return Penduduk::where('profil_id', auth()->user()->id)->get();
        return view('dashboard.profil.index', [
            "title" => "profil",
            'profil' => Profil::where('user_id', auth()->user()->id)->get(),

        ]);
        // return 'ini halaman profil';

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.profil.create', [
                    "title" => "profil",
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
            'ketua_rt' => '',
            'ketua_rw' => '',
            'pendamping' => '',
            'pokmas' => '',
            'rt' => '',
            'rw' => '',
            'kelurahan' => '',
            'kecamatan' => '',
            'koordinat' => '',
            'jml_kk' => '',

        ]);

        $validateData['user_id'] = auth()->user()->id;
        profil::create($validateData);
        //dd($validatedData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('profil.index')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Profil $profil
        // $profil = profil::find($id);
        // return view('dashboard.profil.edit', ["title" => "profil"], compact('profil'));
        // return view('dashboard.profil.edit', [
        //     //         "title" => "profil",
        //         ]);
        $profil = profil::find($id);
        return view('dashboard.profil.edit', ["title" => "profil"], compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData=$request->validate([
            'ketua_rt' => '',
            'ketua_rw' => '',
            'pendamping' => '',
            'pokmas' => '',
            'rt' => '',
            'rw' => '',
            'kelurahan' => '',
            'kecamatan' => '',
            'koordinat' => '',
            'jml_kk' => '',
        ]);


        profil::where('id',$id)->update($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('profil.index')->with('success', 'Data berhasil diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profil = profil::findOrfail($id);
        $profil->delete();

        return redirect()->route('profil.index')->with('success', 'Data berhasil dihapus!');
    }
}
