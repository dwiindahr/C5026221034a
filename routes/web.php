<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('halo', function () {
    //bisa diisi program apa saja
    return "Halo apa kabar";
});

Route::get('halo2', function () {
    return "<h1>Halo apa kabar</h1>";
});

Route::get('blog1', function () {
    return view('blog');
});

Route::get('catatan1', function () {
    return view('catatan1');
});

Route::get('catatan2', function () {
    return view('catatan2');
});

Route::get('catatan3', function () {
    return view('catatan3');
});

Route::get('catatan4', function () {
    return view('catatan4');
});

Route::get('catatan5', function () {
    return view('catatan5');
});

Route::get('catatan6', function () {
    return view('catatan6');
});

Route::get('catatan7', function () {
    return view('catatan7');
});

Route::get('tugasReplika', function () {
    return view('tugasReplika');
});

Route::get('tugasBootstrap', function () {
    return view('tugasBootstrap');
});

Route::get('tugasLayout', function () {
    return view('tugasLayout');
});

Route::get('submit', function () {
    return view('submit');
});

Route::get('perkalian', 'App\Http\Controllers\DosenContraller@index');

Route::get('biodata', 'App\Http\Controllers\DosenContraller@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenContraller@showtime');

Route::get('formulir', 'App\Http\Controllers\DosenContraller@formulir');

Route::post('/formulir/proses', 'App\Http\Controllers\DosenContraller@proses');

Route::get('/blog', function () {
    return view('home');
});

Route::get('/blog/tentang', function () {
    return view('tentang');
});

Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');


Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
