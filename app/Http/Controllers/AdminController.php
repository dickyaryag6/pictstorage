<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Booking;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades;
use DB;
use Redirect;
use App\Notifications\KonfirmasiPembayaran;
use App\Mail\HasilFoto;

class AdminController extends Controller
{
  public function __construct()
 {
     $this->middleware('auth');
 }

 public function admin()
 {
     $order_lists = DB::table('bookings')
                        ->orderBy('created_at')
                        ->get();
      //dd($order_lists);

     return view('Admin.master', compact('order_lists'));
 }

 public function VerifikasiPembayaran($orderid)
 {
   //dd($orderid);
   Booking::where('order_id', $orderid)
           ->update([
             'status' => 'Terverifikasi',
           ]);

   $userid = DB::table('bookings')->where('order_id', '=', $orderid)->value('user_id');
   $book = DB::table('bookings')->where('order_id', '=', $orderid)->get();
   $user = DB::table('users')->where('id', '=', $userid)->get();

   //$user->notify(new KonfirmasiPembayaran($book));
  // Notification::send($user, new KonfirmasiPembayaran($book));
  //Mail::to($user)->send(new Email);

   $order_lists = DB::table('bookings')
                  ->orderBy('created_at')
                  ->get();
            //dd($order_lists);

  return redirect('admin')->with('$order_lists');
   //return redirect('/admin', compact('order_lists'));
  // return view('Admin.master', compact('order_lists'));

 }

 public function detailbuktipembayaran($orderid)
 {
   $buktipembayaran = DB::table('bookings')->where('order_id', '=', $orderid)->value('bukti_pembayaran');

   return view('Admin.detailbuktipembayaran', compact('buktipembayaran'));
 }

 public function UpdateLinkHasil($orderid, request $request)
 {
     $linkhasil = $request->all();
     $linkhasil = $linkhasil['linkhasil'];

     Booking::where('order_id', $orderid)
             ->update([
               'linkhasil' => $linkhasil,
               'status' => 'Selesai',
             ]);

     $userid = DB::table('bookings')->where('order_id', '=', $orderid)->value('user_id');
     $user = DB::table('users')->where('id', '=', $userid)->get();
     //dd($user);
    \Mail::to($user)->send(new HasilFoto);

    $order_lists = DB::table('bookings')
                    ->orderBy('created_at')
                    ->get();
                      //dd($order_lists);

    return redirect('admin')->with('$order_lists');

 }

}
