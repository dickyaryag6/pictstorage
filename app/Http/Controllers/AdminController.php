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
use App\Mail\PembayaranValid;
use App\Mail\PembayaranTidakValid;
use Mail;

class AdminController extends Controller
{
  public function __construct()
 {
     $this->middleware('auth');
 }

 public function admin()
 {
//    select first_name, last_name, order_date, order_amount
// from customers c
// inner join orders o
// on c.customer_id = o.customer_id

$belumdiverifikasi = DB::table('Bookings')
            ->join('users', 'users.id', '=', 'bookings.user_id')
            ->select('bookings.*', 'users.nama')
            ->where('status', 'Sedang diverifikasi')
            ->paginate(10);

            $terverifikasi= DB::table('Bookings')
                        ->join('users', 'users.id', '=', 'bookings.user_id')
                        ->select('bookings.*', 'users.nama')
                        ->where('status', 'Terverifikasi')
                        ->paginate(10);

                        $selesai = DB::table('Bookings')
                                    ->join('users', 'users.id', '=', 'bookings.user_id')
                                    ->select('bookings.*', 'users.nama')
                                    ->where('status', 'Selesai')
                                    ->paginate(10);



     // $order_lists = DB::table('bookings')
     //                    ->orderBy('created_at')
     //                    ->get();
    //  dd($orderlists);

     return view('Admin.master', compact('belumdiverifikasi','terverifikasi','selesai'));
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
   $book=$book[0];
   Mail::to($user)->send(new PembayaranValid($book));

  //Kirim email ke user yang ngasi tau kalo pembayarannya udah diterima

   $order_lists = DB::table('bookings')
                  ->orderBy('created_at')
                  ->get();
            //dd($order_lists);

  return redirect('admin')->with('$order_lists');
   //return redirect('/admin', compact('order_lists'));
  // return view('Admin.master', compact('order_lists'));

 }

 public function TolakPembayaran($orderid)
 {
   Booking::where('order_id', $orderid)
           ->update([
             'status' => 'Pembayaran tidak valid',
           ]);

  $book = DB::table('bookings')->where('order_id', '=', $orderid)->get();
    //kirim email yg ngasi tau ke user kalo pembayaran ditolak
    $book=$book[0];
    \Mail::to($user)->send(new PembayaranTidakValid($book));

    $order_lists = DB::table('bookings')
                   ->orderBy('created_at')
                   ->get();
             //dd($order_lists);

   return redirect('admin')->with('$order_lists');
 }


 public function detailbuktipembayaran($orderid)
 {
   $buktipembayaran = DB::table('bookings')->where('order_id', '=', $orderid)->value('bukti_pembayaran');
   //dd($buktipembayaran);
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
     //email ke user ngasi tau kalo hasil fotonya sudah selesai
     $book = DB::table('bookings')->where('order_id', '=', $orderid)->get();
     $book = $book[0];
     Mail::to($user)->send(new HasilFoto($book));

    $order_lists = DB::table('bookings')
                    ->orderBy('created_at')
                    ->get();
                      //dd($order_lists);

    return redirect('admin')->with('$order_lists');

 }

 public function modaldaetail($order_id)
 {
   $orderdetail = DB::table('Bookings')
               ->select('bookings.*')
               ->join('users', 'users.id', '=', 'bookings.user_id')
               ->first();
   return view('admin.modalview', ['sd' => $sd])->render();           
 }

}
