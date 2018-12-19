<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/invoice.css">
  </head>
  <body>
    <h1>Pembayaran User telah di verifikasi</h1>

    <p>Pembayaran DP untuk pemesanan photoshoot {{$book->order_type}} pada tanggal {{$book->date}} jam {{$book->jam}} telah di verifikasi. Silakan melihat detail pemesanan di dashboard website <a href="https://pictstorage.com">Pictstorage</a></h4>
    <p>Apabila terdapat pertanyaan atau hal yang kurang jelas, silakan hubungi kami melalui detail kontak yang tertera.</p>


    <footer>
      <p>Regards,</p>

      <p><strong>Pictstorage</strong></p>
    </footer>

      @include('email.Invoice')
  </body>
</html>
