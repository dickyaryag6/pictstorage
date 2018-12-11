@include('layouts.head')

<?php $user = Auth::user(); ?>

<div class="text-center">
<br>
<h2><?php echo "Harap bayar melalui transfer ke nomor rekening berikut : "; ?><br></h2>
<br>
<?php echo "Rekening BRI" ?><br>
<?php echo "0672-01-006666-50-6" ?><br>
<?php echo "a.n. Rima Haifa" ?><br><br>
<h5><?php echo "Sudah melakukan pembayaran? Upload bukti pembayaran anda" ?> </h5>
<?php foreach ($order as $orderqu) { ?>
  <?php $order_id=$orderqu->order_id ?>
  <?php $user_id=$orderqu->user_id ?>
<?php } ?>
<div class="card-body">
  <form action='{{url("uploadBuktiPembayaran")}}/<?php echo $user_id ?>/<?php echo $order_id ?>' method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required>
    </div>
    <div class="">
        <button type="submit" class="btn btn-primary">
            {{ __('Upload') }}
        </button>
    </div>
  </form>
@include('layouts.footer')
</div>
@section('content')



@endsection
