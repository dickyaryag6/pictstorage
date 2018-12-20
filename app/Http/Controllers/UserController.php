<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function edit(User $user)
  {
      $user = Auth::user();
      return view('edit-profile', compact('user'));
  }

  public function update(User $data)
  {
    $user = Auth::user();
      $this->validate(request(), [
        'nama' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          // 'password' => 'required|min:6|confirmed'
      ]);

      User::where('id', $user->id)
              ->update([
                'nama' => $data['nama'],
                'email' => $data['email'],
                'JenisKelamin' => $data['Gender'],
                'NoTelepon' => $data['Phone number']
              ]);
      return redirect('profile/'.$user->id);
  }
}
