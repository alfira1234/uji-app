<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    //
    public function index()
    {

        return view('register.index', [
            "title" => "register",
            'active' => 'register',


        ]);

    }
    public function store(Request $request)
    {
//$validatedData =
$validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',//harus ada kalimat campuran seperti "@Example123"

        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        // $validatedData['password'] = Hash:make($validatedData['password']);

        User::create($validatedData);
// $request->session()->flash('success', 'registration successfull! Please login');
// return redirect('/login');
return redirect('/login')->with('success', 'registration successfull! Please login');

        // dd('registrasi berhasil!');

    }
}
