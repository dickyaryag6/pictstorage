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

   $user->notify(new KonfirmasiPembayaran($book));

   $order_lists = DB::table('bookings')
                  ->orderBy('created_at')
                  ->get();
            //dd($order_lists);

  return redirect('admin')->with('$order_lists');
   //return redirect('/admin', compact('order_lists'));
  // return view('Admin.master', compact('order_lists'));

 }

 public function UpdateLinkHasil($orderid, request $request)
 {
     $linkhasil = $request->all();
     $linkhasil = $linkhasil['linkhasil'];

     Booking::where('order_id', $orderid)
             ->update([
               'linkhasil' => $linkhasil,
             ]);

    $order_lists = DB::table('bookings')
                    ->orderBy('created_at')
                    ->get();
                      //dd($order_lists);

    return redirect('admin')->with('$order_lists');

 }

}
