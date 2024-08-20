<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProController extends Controller
{
    //
    // public function index()
    // {
    //     $profil = profil::orderby('id', 'ASC')->get();
    //     return view('profil.index', [
    //         "title" => "profil",
    //         'profil' => $profil

    //     ]);

    // }

    // public function create()
    // {
    //     return view('profil.create', [
    //         "title" => "profil",
    //     ]);
    // }

    // public function store (Request $request)
    // {
    //     //validasi kolom
    //     //$validatedData =
    //     $validateData = $request->validate([
    //         'ketua_rt' => 'required',
    //         'ketua_rw' => 'required',
    //         'pokmas' => 'required',
    //         'pendamping' => 'required',
    //         'koordinat' => 'required',
    //         'jml_kk' => 'required',
    //         'rt' => 'required',
    //         'rw' => 'required',
    //         'kelurahan' => 'required',
    //         'kecamatan' => 'required',

    //     ]);

    //    // Paket::create($validatedData);
    //     //insert ke table paket
    //     profil::create($validateData);
    //     //dd($validatedData);
    //     #untuk ngeread halaman paket tampil
    //     return redirect()->route('profil.index')->with('success', 'Data berhasil ditambah!');
    // }

    // public function edit($id)
    // {
    //     $profil = profil::find($id);
    //     return view('profil.edit', ["title" => "profil"], compact('profil'));
    // }

    // public function update (Request $request, $id)
    // {
    //     //validasi kolom
    //     $validateData=$request->validate([
    //         'ketua_rt' => 'required',
    //         'ketua_rw' => 'required',
    //         'pokmas' => 'required',
    //         'pendamping' => 'required',
    //         'koordinat' => 'required',
    //         'jml_kk' => 'required',
    //         'rt' => 'required',
    //         'rw' => 'required',
    //         'kelurahan' => 'required',
    //         'kecamatan' => 'required',

    //     ]);


    //     profil::where('id',$id)->update($validateData);
    //     #untuk ngeread halaman paket tampil
    //     return redirect()->route('profil.index')->with('success', 'Data berhasil diupdate!');
    // }

    // public function delete($id)
    // {


    //     $profil = profil::findOrfail($id);
    //     $profil->delete();

    //     return redirect()->route('profil.index')->with('success', 'Data berhasil dihapus!');;
    // }
}
