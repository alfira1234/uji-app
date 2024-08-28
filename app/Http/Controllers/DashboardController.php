<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Disabilitas;
use App\Models\Kesehatan;
use App\Models\Pencaharian;
use App\Models\Pendidikan;
use App\Models\Penduduk;
use App\Models\Potensi;
use App\Models\Profil;
use App\Models\Warga;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {

        return view('dashboard.index', [
            "title" => "dashboard",
            'profil' => Profil::where('user_id', auth()->user()->id)->get(),
            'penduduk' => Penduduk::where('profil_id', auth()->user()->id)->get(),
            'warga' => Warga::where('profil_id', auth()->user()->id)->get(),
            'kesehatan' => Kesehatan::where('profil_id', auth()->user()->id)->get(),
            'disabilitas' => Disabilitas::where('profil_id', auth()->user()->id)->get(),
            'potensi' => Potensi::where('profil_id', auth()->user()->id)->get(),
            'pendidikan' => Pendidikan::where('profil_id', auth()->user()->id)->get(),
            'pencaharian' => Pencaharian::where('profil_id', auth()->user()->id)->get(),
            'agama' => Agama::where('profil_id', auth()->user()->id)->get(),


        ]);

    }
}
