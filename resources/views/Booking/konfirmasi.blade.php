@include('layouts.head')


<head>
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">
</head>
<body>
    <div class="container text-center">
      <br>
      <table align="center">
        <h2> Konfirmasi Pemesanan </h2>
        @foreach ($hasilforms as $hasilform)
        <tr>
          <th><h4>
            <?php
            if ($hasilform !== $hasilforms['_token']) :
              echo $hasilform;
            endif;
            ?>
          </h4></th><br>
        </tr>
        @endforeach
   
      </table>
      <form action='save' method="post">
          @csrf
          <?php if ($hasilforms['order_type'] === 'wedding' || $hasilforms['order_type'] === 'engagement') {?>
            <input type="hidden" id="order_type" name="order_type" value=<?php echo $hasilforms['order_type']; ?>>
            <input type="hidden" id="date" name="date" value=<?php echo $hasilforms['date']; ?>>
            <input type="hidden" id="jam" name="jam" value=<?php echo $hasilforms['jam']; ?>>
            <input type="hidden" id="location" name="location" value=<?php echo $hasilforms['location']; ?>>
          <?php } else { ?>
            <input type="hidden" id="order_type" name="order_type" value=<?php echo $hasilforms['order_type']; ?>>
            <input type="hidden" id="date" name="date" value=<?php echo $hasilforms['date']; ?>>
            <input type="hidden" id="jam" name="jam" value=<?php echo $hasilforms['jam']; ?>>
            <input type="hidden" id="location" name="location" value=<?php echo $hasilforms['location']; ?>>
            <input type="hidden" id="durasi" name="durasi" value=<?php echo $hasilforms['durasi']; ?>>
            <input type="hidden" id="jumlah_orang" name="jumlah_orang" value=<?php echo $hasilforms['jumlah_orang']; ?>>
        <?php  } ?>
        <button type="button" href='/Edit' class="btn btn-primary">Edit</button>
        <button type="submit" class="btn btn-primary">Konfirmasi</button>
        <!-- <button type="button" name="button" onclick="javascript:location.href='book'" class="btn btn-primary">
          {{ __('Ubah') }}
        </button> -->
      </form>

      <!-- <button type="button" name="button" onclick="javascript:location.href='book'">Ubah</button> -->

  </div>

</body>
@section('content')

@endsection
