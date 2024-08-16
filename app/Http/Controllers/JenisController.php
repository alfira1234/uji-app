<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        // $post = Jenis::orderby('id', 'ASC')->get();

        return view('jenis.index', [
            "title" => "Jenis",
            // "jenis" => "Paket Keluarga",
            // "harga" => "15000",
            // "deskripsi" => "mencakup fasiltas umum dan lain-lain"
        ]);
    }

    public function create()
    {
        return view('jenis.create', [
            "title" => "Jenis",
            // 'image' => "kambing.jpg",
            // 'judul' => "Wisata edukasi kambing",
            // 'deskripsi' => "hshdghsgdhdhshdshfefhdbhdbfgdhfhfhfh"
            
        ]);
    }
}
