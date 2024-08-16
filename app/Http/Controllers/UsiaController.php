<?php

namespace App\Http\Controllers;

use App\Models\Usia;
use Illuminate\Http\Request;

class UsiaController extends Controller
{
    public function index()
    {
        $usia = Usia::orderby('id', 'ASC')->get();
        return view('usia.index', [
            "title" => "Usia",
            'usia' => $usia

        ]);

    }

    public function create()
    {
        return view('usia.create', [
            "title" => "Usia",
        ]);
    }

    public function store (Request $request)
    {
        //validasi kolom
        //$validatedData =
        $validateData = $request->validate([
            'usia' => 'required',

        ]);

       // Paket::create($validatedData);
        //insert ke table paket
        usia::create($validateData);
        //dd($validatedData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('usia.index')->with('success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $usia = usia::find($id);
        return view('usia.edit', ["title" => "Usia"], compact('usia'));
    }

    public function update (Request $request, $id)
    {
        //validasi kolom
        $validateData=$request->validate([
            'usia' => 'required',

        ]);


        usia::where('id',$id)->update($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('usia.index')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {


        $usia = usia::findOrfail($id);
        $usia->delete();

        return redirect()->route('usia.index')->with('success', 'Data berhasil dihapus!');;
    }
}
