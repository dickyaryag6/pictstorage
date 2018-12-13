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
class BookingController extends Controller
{
    public function Form()
    {
    return view('Booking/form');
    /*return Validator::make($data, [
    'user_id' => ['required', 'integer', 'unique:users'],
    'order_type' => ['required', 'string'],
    'date' => ['required', 'dateTime'],
    'location' => ['required', 'string'],
  ]);*/
    }
    //kalo yang dibawah ini gunanya ngarahin user ke halaman konfirmasi setelah ngisi form
    //jadi ditampilin apa yng udah diisi sama user tadi buat dia mastiin udah bener atau belom
    //kalo belom, ada tombol buat dia balik ke halaman form buat ngisi lagi
    public function Konfirmasi(request $request)
    {
      // $this->validate($request, [
      //   'blabla' => 'required'
      // ])
      $hasilforms = $request->all();
      return view('Booking.konfirmasi', compact('hasilforms'));
    }
    //kalo yang diisi udah bener, jalanin yang dibawah ini biar apa yg udah diisi dimasukin ke database
    public function Save(Request $request)
    {
      $user = Auth::user();
      $hasilforms = $request->all();
    //  dd($hasilforms);
      if($hasilforms['order_type'] === 'wedding' || $hasilforms['order_type'] === 'engagement') {
          Booking::create([
         'user_id' => $user->id,
         'order_type' => $hasilforms['order_type'],
         'date' => $hasilforms['date'],
         'jam' => $hasilforms['jam'],
         'location' => $hasilforms['location'],
         // 'created_at' => request('created_at')
         ]);
      }
      else {
            Booking::create([
            'user_id' => $user->id,
            'order_type' => $hasilforms['order_type'],
            'date' => $hasilforms['date'],
            'jam' => $hasilforms['jam'],
            'durasi' => $hasilforms['durasi'],
            'jumlah_orang' => $hasilforms['jumlah_orang'],
            'location' => $hasilforms['location'],
            // 'created_at' => request('created_at')
             ]);
      }
      //$user->notify(new PembayaranReminder($user->id));
      return redirect('profile/'.$user->id);
      // return redirect()->route('profile/{user}', ['user' => $user->id]);
      //return redirect()->route('/profile', [$user->id]);
      //return redirect()->route('profile/{user}', ['user' => $user->id]);
    }
    public function showprofile($user_id)
    {
      $booking_list = Booking::where('user_id', $user_id)->get();
      $profile = User::where('id', $user_id)->get();
      return view('profile', compact('booking_list', 'profile'));
    }
    public function buktiPembayaran($userid,$orderid)
    {
      $user = Booking::where('user_id', $userid)->get();
      $order = Booking::where('order_id', $orderid)->get();
      return view('Booking.pembayaran',compact('user', 'order'));
    }
    public function uploadBuktiPembayaran(request $request,$user_id, $orderid)
    {
      // $order_id = Bookings::findOrFail()
      $bukti = $request->all();
      //$ordertype  = DB::select('select order_type from bookings where order_id = :id', ['id' => $order_id]);
      $ordertype = DB::table('bookings')->where('order_id', '=', $orderid)->value('order_type');
      $createdatonlydate = DB::table('bookings')->where('order_id', '=', $orderid)->value('created_at');
      $createdatonlydate=substr( $createdatonlydate, 0, 10);
      // $date = DB::table('bookings')->where('order_id', '=', $orderid)->value('date');
      // $jam =  DB::table('bookings')->where('order_id', '=', $orderid)->value('jam');
      // $location =  DB::table('bookings')->where('order_id', '=', $orderid)->value('location');
      $user = Auth::user();
      //yang dibawah ini buat mastiin kalo yang diupload itu file gambar dan berukuran max 2mb
      $this->validate($request, [
        'bukti_pembayaran' => 'image|required|max:1999|mimes:jpeg,jpg,bmp,png,pdf'
      ]);
      $namafiledenganextension = $request->file('bukti_pembayaran')->getClientOriginalName();
      $namafile = pathinfo($namafiledenganextension, PATHINFO_FILENAME);
      $extensionfile = $request->file('bukti_pembayaran')->getClientOriginalExtension();
      $filenameyangdipake = $user_id.'_'.$orderid.'_'.$ordertype.'_'.$createdatonlydate.'.'.$extensionfile;
      $path = $request->file('bukti_pembayaran')->storeAs('buktiPembayaran', $filenameyangdipake);
      //Proses yg buat update
      Booking::where('order_id', $orderid)
              ->update([
                'bukti_pembayaran' => $filenameyangdipake,
                'status' => 'Sedang diverifikasi',
              ]);
              //   array('bukti_pembayaran' => $filenameyangdipake))
              // ->update(array('status' => 'Sedang diverfikasi'));
      //return Redirect::action('BookingController@showprofile');
      return redirect('profile/'.$user->id);
      }
}
