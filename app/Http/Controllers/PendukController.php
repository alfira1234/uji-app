<?php

namespace App\Http\Controllers;

use App\Models\Usia;
use App\Models\Profil;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendukController extends Controller
{
    public function index()
    {
        $penduduk =
            Penduduk::where('profil_id', auth()->user()->id)->get();
            penduduk::with(["usias"])->get();

        // Penduduk::where('profil_id', auth()->user()->id)->get();
        // return Penduduk::where('profil_id', auth()->user()->id)->get();
        // return Penduduk::where('profil_id')->get();
        return view('penduduk.index', [
            "title" => "penduduk",
            // 'profil' => Penduduk::where('profil_id', auth()->user()->id)->get(),
            'penduduk' => $penduduk,
            // 'profil' => Penduduk::where('profil_id', auth()->profil()->id)->get(),
            // Penduduk::where('profil_id', auth()->user()->id)->get()
            // 'profil' => Profil::where('user_id', auth()->user()->id)->get()


        ]);

    }

    public function create()
    {
        return view('penduduk.create', [
            "title" => "penduduk",
            'usias' => Usia::all(),
        ]);
    }

    public function store (Request $request)
    {
        //validasi kolom
        //$validatedData =
        $validateData = $request->validate([
            'usia' => 'required',
            // 'id' => 'required',
            'laki' => '',
            'perempuan' => '',

        ]);

        $validateData['profil_id'] = auth()->user()->id;
        $validateData['usia_id'] = $validateData['usia'];
        //insert ke table paket
        penduduk::create($validateData);
        //dd($validatedData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('penduduk.index')->with('success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        // $penduduk = penduduk::find($id);
        // return view('penduduk.edit', ["title" => "penduduk"], compact('penduduk'));

        $penduduk = penduduk::findOrfail($id);
        // dd($penduduk);

        return view('penduduk.edit', [
            "title" => "penduduk",
            'penduduk'=>$penduduk,
            'usias' => Usia::all(),
        ]);
    }

    public function update (Request $request, $id)
    {
        //validasi kolom
        $validateData=$request->validate([
            'usia' => 'required',
            'laki' => '',
            'perempuan' => '',

        ]);

        $validateData['usia_id'] = $validateData['usia'];
        unset($validateData['usia']);

        Penduduk::where('id',$id)->update($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('penduduk.index')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {


        $penduduk = Penduduk::findOrfail($id);
        $penduduk->delete();

        return redirect()->route('penduduk.index')->with('success', 'Data berhasil dihapus!');;
    }
}
