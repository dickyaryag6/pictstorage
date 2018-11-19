<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/test', function () {
    return view('home2');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/book', function () {
    return view('Pemesanan/book-a-shoot');
});

//waktu user klik tombol 'book a shoot' , dipanggil metode isi Pemesanan
//dari controller BookingControll yang gunanya nampilin halaman pengisian form
//get data
Route::get('/book-a-shoot', 'BookingController@Isi_Pemesanan')->name('Isi-pemesanan');

//kalo yang ini buat manggil metode Konfirmasi_Pemesanan dari controller yg sama
//gunanya buat nampilin halaman 'konfirmasi' buat nampilin halaman yang isinya value-value dari
//yang user isi tadi,
//post data ke halaman konfirmasi
Route::post('/konfirmasi-pemesanan', 'BookingController@Konfirmasi_Pemesanan')->name('konfirmasi-pemesanan');

//kalo user udah klik tombol 'konfirmasi' di halaman 'konfirmasi',
//maka data yg udah dimasukin tadi di-store ke database menggunakan metode Pemesanan_Berhasil
//post data
//Route::post('/konfirmasi-pemesanan', 'BookingController@Pemesanan_Berhasil')->name('Pemesanan_Berhasil');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
