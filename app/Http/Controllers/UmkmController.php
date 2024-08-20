<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $umkm = umkm::orderby('id', 'ASC')->get();
        return view('dashboard.umkm.index', [
            "title" => "umkm",
            'umkm' => $umkm

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.umkm.create', [
            "title" => "umkm",

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
            'umkm_terdaf' => '',
            'umkm_tdkterdaf' => '',
            'kube_terdaf' => '',
            'kube_tdkterdaf' => '',

        ]);

        umkm::create($validateData);
        //dd($validatedData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('umkm.index')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function show(Umkm $umkm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $umkm = umkm::find($id);
        return view('dashboard.umkm.edit', ["title" => "umkm"], compact('umkm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi kolom
        $validateData=$request->validate([
            'umkm_terdaf' => '',
            'umkm_tdkterdaf' => '',
            'kube_terdaf' => '',
            'kube_tdkterdaf' => '',

        ]);


        umkm::where('id',$id)->update($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('umkm.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $umkm = umkm::findOrfail($id);
        $umkm->delete();

        return redirect()->route('umkm.index')->with('success', 'Data berhasil dihapus!');
    }
}
