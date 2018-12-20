<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('order_id');
            $table->integer('user_id')->unsigned();
            $table->string('order_type');
            $table->date('date');
            $table->time('jam');
            $table->string('location');
            $table->time('durasi')->nullable();
            $table->integer('jumlah_orang')->nullable();
            $table->string('bukti_pembayaran')->nullable();
            $table->string('linkhasil')->nullable();
            $table->string('status')->default('Belum diverifikasi');
            $table->timestamps();

            //dibawah ini ngasi tau kalo atribut user_id dari kolom 'bookings' adalah foreign key dari
            //atribut user_id yang ada di tabel 'users'
            $table->foreign('user_id')
                  ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
