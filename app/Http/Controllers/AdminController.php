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
     return view('Admin.master');
 }
}
