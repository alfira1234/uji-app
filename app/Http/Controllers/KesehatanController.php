<?php

namespace App\Http\Controllers;

use App\Models\Jns_kes;
use App\Models\Kesehatan;
use Illuminate\Http\Request;

class KesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kesehatan = kesehatan::with(["jns_kes"])->get();
        return view('dashboard.kesehatan.index', [
            "title" => "kesehatan",
            'kesehatan' => $kesehatan

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kesehatan.create', [
            "title" => "kesehatan",
            'jns_kes' => Jns_kes::all(),
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
            'jns_kon' => 'required',
            'laki' => '',
            'perempuan' => '',

        ]);

        $validateData['jns_kes_id'] = $validateData['jns_kon'];
        //insert ke table paket
        Kesehatan::create($validateData);
        //dd($validatedData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('kesehatan.index')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kesehatan $kesehatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kesehatan = kesehatan::findOrfail($id);
        // dd($kesehatan);

        return view('dashboard.kesehatan.edit', [
            "title" => "kesehatan",
            'kesehatan'=>$kesehatan,
            'jns_kes' => Jns_kes::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi kolom
        $validateData=$request->validate([
            'jns_kon' => 'required',
            'laki' => '',
            'perempuan' => '',

        ]);

        $validateData['jns_kes_id'] = $validateData['jns_kon'];
        unset($validateData['jns_kon']);

        kesehatan::where('id',$id)->update($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('kesehatan.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kesehatan = kesehatan::findOrfail($id);
        $kesehatan->delete();

        return redirect()->route('kesehatan.index')->with('success', 'Data berhasil dihapus!');
    }
}
