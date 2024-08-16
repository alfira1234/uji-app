<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;

class AgamaController extends Controller
{
    //
    public function index()
    {
        $agama = Agama::orderby('id', 'ASC')->get();
        return view('agama.index', [
            "title" => "Agama",
            'agama' => $agama,
            // 'agama' => Agama::where(user_id, auth()->user()->id)->get(),

        ]);

    }

    public function create()
    {
        return view('agama.create', [
            "title" => "Agama",

        ]);

        // $agama = agama::find($id);

    }

    public function store (Request $request)
    {
        //validasi kolom
        //$validatedData =
        $validateData = $request->validate([
            'agama' => 'required',
            'Laki' => 'required',
            'Perempuan' => 'required',

        ]);

       // Paket::create($validatedData);
        //insert ke table paket
        Agama::create($validateData);
        //dd($validatedData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('agama.index')->with('success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $agama = agama::find($id);
        return view('agama.edit', ["title" => "agama"], compact('agama'));
    }

    public function update (Request $request, $id)
    {
        //validasi kolom
        $validateData=$request->validate([
            'agama' => 'required',
            'Laki' => 'required',
            'Perempuan' => 'required',

        ]);


        Agama::where('id',$id)->update($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('agama.index')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {


        $agama = Agama::findOrfail($id);
        $agama->delete();

        return redirect()->route('agama.index')->with('success', 'Data berhasil dihapus!');;
    }
}
