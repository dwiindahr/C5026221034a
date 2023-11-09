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

Route::get('blog', function () {
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
