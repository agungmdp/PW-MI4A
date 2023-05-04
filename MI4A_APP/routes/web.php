<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/halo', function () {
    return "welcome home";
});

Route::get('/mahasiswa/{nama}',
function ($nama){
    echo "<h2>Nama saya $nama</h2>";
});

route::get('/profile/{nama?}/{pekerjaan?}',
function ($nama = "Agung", $pekerjaan = "Business man")
{
    echo "<h2>Nama saya $nama,pekerjaan $pekerjaan";
});

//route to view
route::get('/dosen', function(){
    return view('dosen');
});

route::get('/jadwal', function (){
    return view('jadwal.index');
});

//route ++ data

route::get('/fakultas',
function(){
    return view('fakultas.index') -> with ('fakultas', ["FIKR","FEB"]);
});

