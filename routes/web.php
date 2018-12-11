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
use App\Notifications\PembayaranReminder;

Route::get('/', function () {
    return view('home');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});

// Route::get('/profile/{user}', function () {
//     return view('profile');
// });
Route::get('/profile/{user}', 'BookingController@showprofile');

Route::get('/edit-profile', function () {
    return view('edit-profile');
});
Route::get('/pricelist', function () {
    return view('pricelist');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/download', function(){
	$file = public_path()."/pricelist.pdf";

	$header = array(
		'Content-Type: application/pdf',
	);

	return Response::download($file, "pricelist.pdf", $header);
});


// Route::get('/book', function () {
//     return view('Pemesanan/book');
// });

//waktu user klik tombol 'book a shoot' , dipanggil metode isi Pemesanan
//dari controller BookingControll yang gunanya nampilin halaman pengisian form
//get data
Route::get('/book', 'BookingController@Form')
            ->middleware('auth');

//kalo yang ini buat manggil metode Konfirmasi_Pemesanan dari controller yg sama
//gunanya buat nampilin halaman 'konfirmasi' buat nampilin halaman yang isinya value-value dari
//yang user isi tadi,
//post data ke halaman konfirmasi
Route::post('/konfirmasi', 'BookingController@Konfirmasi');

Route::post('/save', 'BookingController@Save');

//kalo user udah klik tombol 'konfirmasi' di halaman 'konfirmasi',
//maka data yg udah dimasukin tadi di-store ke database menggunakan metode Pemesanan_Berhasil
//post data


Route::get('profile/buktiPembayaran/{userid}/{orderid}', 'BookingController@BuktiPembayaran');

Route::post('uploadBuktiPembayaran/{userid}/{orderid}', 'BookingController@uploadBuktiPembayaran');

//Route::get('/pembayaran/{user}', 'BookingController@Pembayaran');

Auth::routes();

//yang dibawah ini buat logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/verifikasi/{orderid}', 'AdminController@VerifikasiPembayaran');

Route::post('/linkhasil/{orderid}', 'AdminController@UpdateLinkHasil');
