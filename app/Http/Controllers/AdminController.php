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
}
