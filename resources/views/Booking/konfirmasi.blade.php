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
        <h2> <strong>Konfirmasi Pemesanan</strong> </h2>

        <ul class="list-group">
              <?php if ($hasilforms['order_type'] === 'wedding' || $hasilforms['order_type'] === 'engagement') : ?>
                <li class="list-group-item"><h4><?php echo "Jenis : ".$hasilforms['order_type']; ?></h4></li>
                <li class="list-group-item"><h4><?php echo "Tanggal : ".$hasilforms['date']; ?></h4></li>
                <li class="list-group-item"><h4><?php echo "Jam : ".$hasilforms['jam']; ?></h4></li>
                <li class="list-group-item"><h4><?php echo "Lokasi : ".$hasilforms['location']; ?></h4></li>
              <?php else : ?>
                <li class="list-group-item"><h4><?php echo "Jenis : ".$hasilforms['order_type']; ?></h4></li>
                <li class="list-group-item"><h4><?php echo "Tanggal : ".$hasilforms['date']; ?></h4></li>
                <li class="list-group-item"><h4><?php echo "Jam : ".$hasilforms['jam']; ?></h4></li>
                <li class="list-group-item"><h4><?php echo "Lokasi : ".$hasilforms['location']; ?></h4></li>
                <li class="list-group-item"><h4><?php echo "Durasi : ".$hasilforms['durasi']; ?></h4></li>
                <li class="list-group-item"><h4><?php echo "Jumlah Orang :".$hasilforms['jumlah_orang']; ?></h4></li>
              <?php endif; ?>
          <br>
        </ul>
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
