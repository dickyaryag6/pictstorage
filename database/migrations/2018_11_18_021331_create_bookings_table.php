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
            //jenis order : PreWedding,Wedding,Engagement,Studio,Booth
            $table->dateTime('date');
            $table->string('location');
            $table->string('status')->default('Belum Terverifikasi');;
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
