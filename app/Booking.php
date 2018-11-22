<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
  //ini buat ngasi tau atribut apa aja yang bisa diisi sama user
    protected $fillable = [
      'order_type', 'date', 'location', 'user_id', 'email', 'nama', 
    ];
}
