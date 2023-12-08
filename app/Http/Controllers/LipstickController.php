<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LipstickController extends Controller
{
    //
    public function index3()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $lipstick = DB::table('lipstick')->paginate(15);

    	// mengirim data pegawai ke view index
		return view('index3',['lipstick' => $lipstick]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah3()
	{

		// memanggil view tambah
		return view('tambah3');

	}

	// method untuk insert data ke table pegawai
	public function store3(Request $request)
    {
        $tersedia = ($request->stocklipstick != 0) ? 'Y' : 'N';
        // insert data ke table pegawai
        DB::table('lipstick')->insert([
            'merklipstick' => $request->merklipstick,
            'stocklipstick' => $request->stocklipstick,
            'tersedia' => $tersedia // Perhatikan penggunaan variabel $tersedia di sini
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/lipstick');
    }


	// method untuk edit data pegawai
	public function edit3($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$lipstick = DB::table('lipstick')->where('kodelipstick',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit3',['lipstick' => $lipstick]);

	}

	// update data pegawai
	public function update3(Request $request)
    {
        // Menghitung nilai tersedia berdasarkan stok
        $tersedia = ($request->stocklipstick != 0) ? 'Y' : 'N';

        // Update data pegawai dengan nilai baru untuk 'tersedia'
        DB::table('lipstick')->where('kodelipstick', $request->id)->update([
            'merklipstick' => $request->merklipstick,
            'stocklipstick' => $request->stocklipstick,
            'tersedia' => $tersedia // Menggunakan nilai yang telah dihitung sebelumnya
        ]);

        // Alihkan halaman ke halaman pegawai
        return redirect('/lipstick');
    }


	// method untuk hapus data pegawai
	public function hapus3($kodelipstick)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('lipstick')->where('kodelipstick',$kodelipstick)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/lipstick');
	}

    public function cari3(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$lipstick = DB::table('lipstick')
		->where('merklipstick','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index3',['lipstick' => $lipstick, 'cari'=> $cari]);

	}

    public function view3($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$lipstick = DB::table('lipstick')->where('kodelipstick',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('view3',['lipstick' => $lipstick]);

	}
}
