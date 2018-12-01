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


Route::get('/login', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});

// Route::get('/book', function () {
//     return view('Pemesanan/book');
// });

//waktu user klik tombol 'book a shoot' , dipanggil metode isi Pemesanan
//dari controller BookingControll yang gunanya nampilin halaman pengisian form
//get data
Route::get('/book', 'BookingController@Form');

//kalo yang ini buat manggil metode Konfirmasi_Pemesanan dari controller yg sama
//gunanya buat nampilin halaman 'konfirmasi' buat nampilin halaman yang isinya value-value dari
//yang user isi tadi,
//post data ke halaman konfirmasi
Route::post('/konfirmasi', 'BookingController@Konfirmasi');

//kalo user udah klik tombol 'konfirmasi' di halaman 'konfirmasi',
//maka data yg udah dimasukin tadi di-store ke database menggunakan metode Pemesanan_Berhasil
//post data
Route::post('/pembayaran', 'BookingController@Pembayaran');


Auth::routes();

//yang dibawah ini buat logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
