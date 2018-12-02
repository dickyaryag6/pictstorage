@extends('layouts.app')

@section('content')

<?php echo "Hore! Booking kamu berhasil"; ?>
<br>
<?php echo "Harap bayar melalui transfer ke nomor rekening brikut : "; ?><br>
<?php echo "Nomor rekening a.n. nama pemilik rek." ?>

<?php echo "Sudah melakukan pembayaran? Upload bukti pembayaran anda" ?>
<div class="card-body">
  <form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <input type="file" id="bukti_pembayaran" name="bukti_pembayaran">
    </div>
  </form>
</div>


@endsection
