<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        // $post = Jenis::orderby('id', 'ASC')->get();
        $fasilitas = Fasilitas::orderby('id', 'ASC')->get();

        return view('fasilitas', [
            "title" => "Fasilitas Paket Wisata",
            'fasilitas' => $fasilitas
            // "judul" => "Edukasi Kambing",
            // "durasi" => "3 jam",
            // "harga" => "15000",
            // "fasilitas" => "local guide",
            // "aktivitas1" => "edukasi kambing",
            // "aktivitas2" => "edukasi pembuatan makanan kambing organik"
            
        ]);
    }

    public function create()
    {
        
        return view('fasilitas', [
            "title" => "Fasilitas",
            
            // 'image' => "kambing.jpg",
            // 'judul' => "Wisata edukasi kambing",
            // 'deskripsi' => "hshdghsgdhdhshdshfefhdbhdbfgdhfhfhfh"
            
        ]);
    }
}
