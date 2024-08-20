<?php

namespace App\Http\Controllers;

use App\Models\Disabilitas;
use App\Models\Jns_dis;
use Illuminate\Http\Request;

class DisabilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disabilitas = disabilitas::with(["jns_dis"])->get();
        return view('dashboard.disabilitas.index', [
            "title" => "disabilitas",
            'disabilitas' => $disabilitas

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.disabilitas.create', [
            "title" => "disabilitas",
            'jns_dis' => Jns_dis::all(),
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
            'jns_dis' => 'required',
            'laki' => 'required',
            'perempuan' => 'required',

        ]);

        $validateData['jns_dis_id'] = $validateData['jns_dis'];
        //insert ke table paket
        Disabilitas::create($validateData);
        //dd($validatedData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('disabilitas.index')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disabilitas  $disabilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Disabilitas $disabilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disabilitas  $disabilitas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disabilitas = disabilitas::findOrfail($id);
        // dd($disabilitas);

        return view('dashboard.disabilitas.edit', [
            "title" => "disabilitas",
            'disabilitas'=>$disabilitas,
            'jns_dis' => Jns_dis::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disabilitas  $disabilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //validasi kolom
        $validateData=$request->validate([
            'jns_dis' => 'required',
            'laki' => '',
            'perempuan' => '',

        ]);

        $validateData['jns_dis_id'] = $validateData['jns_dis'];
        unset($validateData['jns_dis']);

        disabilitas::where('id',$id)->update($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('disabilitas.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disabilitas  $disabilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disabilitas = disabilitas::findOrfail($id);
        $disabilitas->delete();

        return redirect()->route('disabilitas.index')->with('success', 'Data berhasil dihapus!');
    }
}
