<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    //
    public function index2()
	{
    	// mengambil data dari table pegawai
		$keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data pegawai ke view index
		return view('index2',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah2()
	{

		// memanggil view tambah
		return view('tambah2');

	}
	// method untuk insert data ke table pegawai
	public function store2(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}

	// method untuk hapus data pegawai
	public function hapus($ID)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}
}
