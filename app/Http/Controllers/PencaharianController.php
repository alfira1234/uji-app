<?php

namespace App\Http\Controllers;

use App\Models\Jns_mpp;
use App\Models\Pencaharian;
use Illuminate\Http\Request;

class PencaharianController extends Controller
{
    public function index()
    {
        $pencaharian = Pencaharian::with(["jns_mpps"])->get();
        return view('pencaharian.index', [
            "title" => "pencaharian",
            'pencaharian' => $pencaharian

        ]);

    }

    public function create()
    {
        return view('pencaharian.create', [
            "title" => "pencaharian",
            'jns_mpps' => Jns_mpp::all(),
        ]);
    }

    public function store (Request $request)
    {
        //validasi kolom
        //$validatedData =
        $validateData = $request->validate([
            'jns_mpp' => 'required',
            'laki' => '',
            'perempuan' => '',

        ]);

        $validateData['jns_mpp_id'] = $validateData['jns_mpp'];
        //insert ke table paket
        pencaharian::create($validateData);
        //dd($validatedData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('pencaharian.index')->with('success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        // $pencaharian = pencaharian::find($id);
        // return view('pencaharian.edit', ["title" => "pencaharian"], compact('pencaharian'));

        $pencaharian = pencaharian::findOrfail($id);
        // dd($pencaharian);

        return view('pencaharian.edit', [
            "title" => "pencaharian",
            'pencaharian'=>$pencaharian,
            'jns_mpps' => Jns_mpp::all(),
        ]);
    }

    public function update (Request $request, $id)
    {
        //validasi kolom
        $validateData=$request->validate([
            'jns_mpp' => 'required',
            'laki' => '',
            'perempuan' => '',

        ]);

        $validateData['jns_mpp_id'] = $validateData['jns_mpp'];
        unset($validateData['jns_mpp']);

        pencaharian::where('id',$id)->update($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('pencaharian.index')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {


        $pencaharian = pencaharian::findOrfail($id);
        $pencaharian->delete();

        return redirect()->route('pencaharian.index')->with('success', 'Data berhasil dihapus!');
    }
}
