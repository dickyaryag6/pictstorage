<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

  //primary key ga perlu dinyatain, karena eloquent secara default
  //kolom 'id' sbg primary key

  //kita ga perlu ngasi tau ntar datanya mau disimpen ke tabel mana
  //karena eloquent secara Default nama tabelnya sama dengan
  //bentuk plural dari nama modelnya
  //tapi kalo mau diganti juga bisa

  //ini buat ngasi tau atribut apa aja yang bisa diisi sama user
    protected $fillable = [
    'order_type', 'date', 'jam' , 'location', 'user_id', 'durasi', 'jumlah_orang', 'status','bukti_pembayaran',
    ];


        public function users()
        {
            return $this->belongsTo('App\User');
        }
}
