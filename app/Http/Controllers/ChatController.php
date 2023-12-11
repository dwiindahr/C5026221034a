<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function view()
    {
        // Mengambil data pesan dari tabel 'chat'
        $chats = DB::table('chat')->get();

        // Loop melalui setiap pesan untuk mengubah emotikon menjadi gambar
        foreach ($chats as $chat) {
            $chat->pesan = $this->convertEmoticonToImage($chat->pesan);
        }

        // Passing data pesan yang telah diubah ke view 'view.blade.php'
        return view('view', ['chats' => $chats]);
    }

    private function convertEmoticonToImage($text)
    {
        $emotikon = [
            ':))' => '1.png',
            ':3' => '2.png',
            ':P' => '3.png',
            ':C' => '4.png',
            ';)' => '5.png'
            // Tambahkan lebih banyak pemetaan sesuai kebutuhan
        ];

        foreach ($emotikon as $icon => $image) {
            $text = str_replace($icon, '<img src="' . asset("{$image}") . '" alt="' . $icon . '">', $text);
        }

        return $text;
    }
}
