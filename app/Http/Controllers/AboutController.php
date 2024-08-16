<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "title" => "About",
            "name" => "Alfira Nisa Fadhilah",
            "email" => "alfira1234@gmail.com"
        ]);
    }


}
