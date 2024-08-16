<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::orderby('id', 'ASC')->get();

        return view('post.index', [
            "title" => "Post",
            'post' => $post
            
        ]);
    }
    public function create()
    {
        return view('post.create', [
            "title" => "Post",
            // 'image' => "kambing.jpg",
            // 'judul' => "Wisata edukasi kambing",
            // 'deskripsi' => "hshdghsgdhdhshdshfefhdbhdbfgdhfhfhfh"
            
        ]);
    }

    public function store (Request $request)
    {
        //validasi kolom
        $request->validate([
            'tgl_datang' => 'required',
            'jm_datang' => 'required',
            'jml_org' => 'required',
            'nam_leng' => 'required',
            'email' => 'required',
            'no_tlp' => 'required',
            'askot' => 'required',
            'asne' => 'required',
            'ket_tam' => 'required'
        ]);

        //insert ke table post
        Post::create([
            'tgl_datang' => $request->tgl_datang,
            'jm_datang' => $request->jm_datang,
            'jml_org' => $request->jml_org,
            'nam_leng' => $request->nam_leng,
            'no_tlp' => $request->no_tlp,
            'email' => $request->email,
            'askot' => $request->askot,
            'asne' => $request->asne,
            'ket_tam' => $request->ket_tam
        ]);

        #untuk ngeread halaman post tampil
        return redirect()->route('post.index');
    }
}
