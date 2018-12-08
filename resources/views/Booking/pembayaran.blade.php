@extends('layouts.app')

@section('content')
<?php $user = Auth::user(); ?>


<br>
<?php echo "Harap bayar melalui transfer ke nomor rekening berikut : "; ?><br>
<?php echo "Nomor rekening a.n. nama pemilik rek." ?>

<?php echo "Sudah melakukan pembayaran? Upload bukti pembayaran anda" ?>
<?php foreach ($order as $orderqu) { ?>
  <?php $order_id=$orderqu->order_id ?>
  <?php $user_id=$orderqu->user_id ?>
<?php } ?>
<div class="card-body">
  <form action="/uploadBuktiPembayaran/<?php echo $user_id ?>/<?php echo $order_id ?>" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required>
    </div>
    <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Upload') }}
        </button>
    </div>
  </form>
</div>


@endsection
