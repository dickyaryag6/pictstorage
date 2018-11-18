<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    //method dibawah ini gunanya ngarahin user ke form pemesanan
    public function Isi_Pemesanan()
    {
    return view('Pemesanan/book-a-shoot');
    }

    //kalo yang dibawah ini gunanya ngarahin user ke halaman konfirmasi setelah ngisi form
    //jadi ditampilin apa yng udah diisi sama user tadi buat dia mastiin udah bener atau belom
    //kalo belom ada tombol buat dia balik ke halaman form buat ngisi lagi
    public function Konfirmasi_Pemesanan()
    {
      return view('Pemesanan/konfirmasi-pemesanan');
    }

    //kalo yang diisi udah bener, jalanin yang dibawah ini biar apa yg udah diisi dimasukin ke database
    public function Pemesanan_Berhasil()
    {
      Booking::create([
        'user_id' => request('user_id'),
        'order_type' => request('order_type'),
        'date' => request('date'),
        'location' => request('location')
      ]);
    }
}
