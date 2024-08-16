<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use App\Models\Penduduk;
use App\Models\Usia;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = Pendidikan::with(["usias"])->get();
        return view('pendidikan.index', [
            "title" => "pendidikan",
            'pendidikan' => $pendidikan

        ]);

    }

    public function create()
    {
        return view('pendidikan.create', [
            "title" => "pendidikan",
            'usias' => usia::all(),
        ]);
    }

    public function store (Request $request)
    {
        //validasi kolom
        //$validatedData =
        $validateData = $request->validate([
            'jenis' => 'required',
            'usia' => 'required',
            'laki' => '',
            'perempuan' => '',

        ]);

        $validateData['usia_id'] = $validateData['usia'];
        // $validateData['penduduks_id'] = $validateData['laki'];
        // $validateData['penduduks_id'] = $validateData['perempuan'];
        //insert ke table paket
        // Penduduk::create($validateData);
        Pendidikan::create($validateData);
        // dd($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('pendidikan.index')->with('success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        // $penduduk = penduduk::find($id);
        // return view('penduduk.edit', ["title" => "penduduk"], compact('penduduk'));

        $pendidikan = Pendidikan::findOrfail($id);
        // dd($penduduk);

        return view('pendidikan.edit', [
            "title" => "pendidikan",
            'pendidikan'=>$pendidikan,
            'usias' => usia::all(),
        ]);
    }

    public function update (Request $request, $id)
    {
        //validasi kolom
        $validateData=$request->validate([
            'jenis' => 'required',
            'usia' => 'required',
            'laki' => '',
            'perempuan' => '',

        ]);

        // dd($validateData);
        $validateData['usia_id'] = $validateData['usia'];
        unset($validateData['usia']);
        // $validateData['penduduk_id'] = $validateData['laki'];
        // unset($validateData['laki']);
        // $validateData['penduduk_id'] = $validateData['perempuan'];
        // unset($validateData['perempuan']);

        Pendidikan::where('id',$id)->update($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('pendidikan.index')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {


        $pendidikan = Pendidikan::findOrfail($id);
        $pendidikan->delete();

        return redirect()->route('pendidikan.index')->with('success', 'Data berhasil dihapus!');;
    }
}
