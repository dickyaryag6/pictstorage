<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Booking;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades;

class BookingController extends Controller
{
    public $hasilforms;

    //method dibawah ini gunanya ngarahin user ke form pemesanan
    public function Form()
    {
    return view('Booking/form');

    /*return Validator::make($data, [
    'user_id' => ['required', 'integer', 'unique:users'],
    'order_type' => ['required', 'string'],
    'date' => ['required', 'dateTime'],
    'location' => ['required', 'string'],
  ]);*/


    }

    //kalo yang dibawah ini gunanya ngarahin user ke halaman konfirmasi setelah ngisi form
    //jadi ditampilin apa yng udah diisi sama user tadi buat dia mastiin udah bener atau belom
    //kalo belom, ada tombol buat dia balik ke halaman form buat ngisi lagi
    public function Konfirmasi(request $request)
    {
      $hasilforms = $request->all();

      return view('Booking.konfirmasi', compact('hasilforms'));

    }



    //kalo yang diisi udah bener, jalanin yang dibawah ini biar apa yg udah diisi dimasukin ke database
    public function Pembayaran(Request $request)
    {
      $user = Auth::user();
      $hasilforms = $request->all();

      if($hasilforms['order_type'] === 'wedding' || $hasilforms['order_type'] === 'engagement') {

          Booking::create([
         'user_id' => $user->id,
         'order_type' => $hasilforms['order_type'],
         'date' => $hasilforms['date'],
         'jam' => $hasilforms['jam'],
         'location' => $hasilforms['location'],
         'created_at' => request('created_at')
       ]);

      }
      else {
            Booking::create([
            'user_id' => $user->id,
            'order_type' => $hasilforms['order_type'],
            'date' => $hasilforms['date'],
            'jam' => $hasilforms['jam'],
            'durasi' => $hasilforms['durasi'],
            'jumlah_orang' => $hasilforms['jumlah_orang'],
            'location' => $hasilforms['location'],
            'created_at' => request('created_at')
             ]);
      }
      return view('Booking/pembayaran');
    }
}
