<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    //
    // Array untuk pemetaan emotikon ke path gambar
    public static $emotikon = array(
        ':))' => '1.png',
        ':3' => '2.png',
        ':P' => '3.png',
        ':C' => '4.png',
        ';)' => '5.png'
    );

    public function view($pesan) {
        $pesan = explode("$emotikon", $pesan);
        return view('view', ['pesan' => $pesan]);
    }
    public function view1($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('view1',['pegawai' => $pegawai]);

	}

}
