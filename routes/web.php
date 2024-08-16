<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsiaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PencaharianController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', [AboutController::class, 'index']);


Route::get('/post', [PostController::class, 'index'])->name('post.index');
//route untuk menampilkan form tambah post
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

//Route::get('/post', [PostController::class, 'create']);
//route untuk menambahkan data post
Route::post('/post', [PostController::class, 'store'])->name('post.store');

Route::get('/tabel', function () {
    return view('tabel', [
        "title" => "Tabel"
    ]);
});

Route::get('/jenis', [FasilitasController::class, 'index'])->name('jenis.index');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');;

//route untuk usia
Route::get('/usia', [UsiaController::class, 'index'])->name('usia.index');
//route untuk menampilkan form tambah
Route::get('/usia/create', [UsiaController::class, 'create'])->name('usia.create');
//route untuk menambahkan data
Route::post('/usia', [UsiaController::class, 'store'])->name('usia.store');
//route menampilkan edit data
Route::get('/usia/edit/{id}', [UsiaController::class, 'edit'])->name('usia.edit');
//update data
Route::put('/usia/update/{id}', [UsiaController::class, 'update'])->name('usia.update');
//delete
Route::delete('/usia/{id}', [UsiaController::class, 'delete'])->name('usia.delete');


//route untuk penduduk
Route::get('/penduduk', [PendukController::class, 'index'])->name('penduduk.index');
//route untuk menampilkan form tambah
Route::get('/penduduk/create', [PendukController::class, 'create'])->name('penduduk.create');
//route untuk menambahkan data
Route::post('/penduduk', [PendukController::class, 'store'])->name('penduduk.store');
//route menampilkan edit data
Route::get('/penduduk/edit/{id}', [PendukController::class, 'edit'])->name('penduduk.edit');
//update data
Route::put('/penduduk/update/{id}', [PendukController::class, 'update'])->name('penduduk.update');
//delete
Route::delete('/penduduk/{id}', [PendukController::class, 'delete'])->name('penduduk.delete');

//route untuk pendidikan
Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
//route untuk menampilkan form tambah
Route::get('/pendidikan/create', [PendidikanController::class, 'create'])->name('pendidikan.create');
//route untuk menambahkan data
Route::post('/pendidikan', [PendidikanController::class, 'store'])->name('pendidikan.store');
//route menampilkan edit data
Route::get('/pendidikan/edit/{id}', [PendidikanController::class, 'edit'])->name('pendidikan.edit');
//update data
Route::put('/pendidikan/update/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');
//delete
Route::delete('/pendidikan/{id}', [PendidikanController::class, 'delete'])->name('pendidikan.delete');

//route untuk pencaharian
Route::get('/pencaharian', [PencaharianController::class, 'index'])->name('pencaharian.index');
//route untuk menampilkan form tambah
Route::get('/pencaharian/create', [pencaharianController::class, 'create'])->name('pencaharian.create');
//route untuk menambahkan data
Route::post('/pencaharian', [pencaharianController::class, 'store'])->name('pencaharian.store');
//route menampilkan edit data
Route::get('/pencaharian/edit/{id}', [pencaharianController::class, 'edit'])->name('pencaharian.edit');
//update data
Route::put('/pencaharian/update/{id}', [pencaharianController::class, 'update'])->name('pencaharian.update');
//delete
Route::delete('/pencaharian/{id}', [pencaharianController::class, 'delete'])->name('pencaharian.delete');

//route untuk agama
Route::get('/agama', [AgamaController::class, 'index'])->name('agama.index');
//route untuk menampilkan form tambah
Route::get('/agama/create', [agamaController::class, 'create'])->name('agama.create');
//route untuk menambahkan data
Route::post('/agama', [agamaController::class, 'store'])->name('agama.store');
//route menampilkan edit data
Route::get('/agama/edit/{id}', [agamaController::class, 'edit'])->name('agama.edit');
//update data
Route::put('/agama/update/{id}', [agamaController::class, 'update'])->name('agama.update');
//delete
Route::delete('/agama/{id}', [agamaController::class, 'delete'])->name('agama.delete');

//route login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
//route register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
//route dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');
