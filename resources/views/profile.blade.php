<html>
 @include('layouts.head')
<head>

<!-- <link href="{{ asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css') }}"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">


<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
</head>
<body>

<hr class="">
<div class="container">
    <div class="row">
        <div class="col-sm-8">
          <?php $user = Auth::user(); ?>
             <h1 class=""><?php echo $user->nama; ?></h1>

         <a href='/edit-profile/{{$user->id}}'> <button type="button" class="btn btn-success">Edit Profile</button></a>  <!-- <button type="button" class="btn btn-success">Access Calendar</button> -->
<br>
        </div>
      <!-- <div class="col-sm-2"><a href="/users" class="pull-sright"><img title="profile image" class="img-circle img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBG685vI07-3MsuqJxjCfzIabfFJJG-8yM-ppvjjNpD5QNtWNE4A"></a> -->

        </div>
    </div>
  <br>

    <div class="row">
        <div class="col-sm-3">
            <!--left col-->
            <ul class="list-group">

                <li class="list-group-item text-muted" contenteditable="false"><strong>Profile</strong></li>
                <li class="list-group-item "><strong class="">Name: </strong> <?php echo $user->nama; ?></li>
                <!-- <li class="list-group-item "><span class="pull-left"><strong class="">Address: </strong></span> Ermita, Manila</li> -->
                <li class="list-group-item "><span class="pull-left"><strong class="">Email: </strong></span> <?php echo $user->email; ?></li>
                <li class="list-group-item "><span class="pull-left"><strong class="">Birthday: </strong></span></li>
                <li class="list-group-item "><span class="pull-left"><strong class="">Address: </strong></span></li>
                <li class="list-group-item "><span class="pull-left"><strong class="">Gender: </strong></span></li>
                <li class="list-group-item "><span class="pull-left"><strong class="">Phone Number: </strong></span></li>
                <!-- <li class="list-group-item text-muted" contenteditable="false">Contact Details</li> -->
                <!-- <li class="list-group-item "><span class="pull-left"><strong class="">Telephone Number: </strong></span>       514-1132</li> -->
                <!-- <li class="list-group-item "><span class="pull-left"><strong class="">Cellphone Number: </strong></span>09159092245</li> -->

            </ul>
           <!-- <div class="panel panel-default">
            <hr>
             <div class="panel-heading">Reminders:
                </div>
                <div class="panel-body"><button type="button" class="btn btn-info">Daftar Upload<br><button type="button" class="btn btn-secondary">Jadwal Pemotretan
                </div>
            </div>
            <hr>-->
            <!-- <div class="panel panel-default">
                <div class="panel-heading">NOTIFICATIONS <i class="fa fa-link fa-1x"></i>
                </div>
                <div class="panel-body"><a href="http://bootply.com" class="">~Non-compliance to certain checklist items~</a>
                </div>
            </div> -->

           <!--  <ul class="list-group">
                <li class="list-group-item text-muted">PATIENT LIBRARY<i class="fa fa-dashboard fa-1x"></i>
                </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class=""><a href="https://bootsnipp.com/user/snippets/Gavb2">Justine Tan</a></strong></span></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class=""><a href="#">Chris Poernomo</a></strong></span></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class=""><a href="#">Warren Monsod</a></strong></span> </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class=""><a href="#">Zysa del Mundo</a></strong></span></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class=""><button type="button" class="btn btn-info">Schedule Patient</strong></span></li>
            </ul> -->
            <!-- <hr>
            <div class="panel panel-default">
                <div class="panel-heading">UPLOADED PHOTO</div>
                <div class="panel-body">	<i class="fa fa-facebook fa-2x"></i>  <i class="fa fa-github fa-2x"></i>
                    <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i>  <i class="fa fa-google-plus fa-2x"></i>
                </div>
            </div> -->
        </div>
        <!--/col-3-->
        <div class="col-sm-9" style="" contenteditable="false">
            <div class="panel panel-default">
                <hr>
                <div class="panel-heading"><b><h4>Booking yang belum dikonfirmasi</h4></b></div>
                <hr>
                <div class="panel-body">
                  @if(count($belumdansedangdiverifikasi) > 0)
                    @foreach ($belumdansedangdiverifikasi as $order)
                      @if($order->order_type === 'wedding' || $order->order_type === 'engagement')
                          <pre>
                          <ul class="list-group">
                              <li class="list-group-item">Jenis Order     :   <?php echo $order->order_type; ?></li>
                              <li class="list-group-item">Tanggal         :   <?php echo $order->date; ?></li>
                              <li class="list-group-item">Jam             :   <?php echo $order->jam; ?></li>
                              <li class="list-group-item">Lokasi          :   <?php echo $order->location; ?></li>
                              <li class="list-group-item">Status          :   <?php echo $order->status; ?></li>
                              @if (!($order->order_type === 'wedding' || $order->order_type === 'engagement'))
                              <li class="list-group-item">Durasi          :   <?php echo $order->durasi; ?></li>
                              <li class="list-group-item">Jumlah Orang    :   <?php echo $order->jumlah_orang; ?></li>
                              @endif
                            @if ($order->bukti_pembayaran === null)
                              <li class="list-group-item"><a type="button" class="btn btn-danger" href="buktiPembayaran/<?php echo $order->user_id?>/<?php echo $order->order_id ?>">Upload Bukti Pembayaran</a></li>
                            @elseif (!$order->bukti_pembayaran === null && (!$order->status ==='Selesai' || !$order->status ==='Terverifikasi'))
                              <li class="list-group-item"><a type="button" class="btn btn-danger" href="buktiPembayaran/<?php echo $order->user_id?>/<?php echo $order->order_id ?>">Upload Ulang Bukti Pembayaran</a></li>

                            @endif
                          </ul>
                      </pre>
                     @endif
                   @endforeach
                   {{ $belumdansedangdiverifikasi->links() }}
                  @else
                    <h5>Anda belum pernah Booking</h5>
                  @endif
                  <br>
                </div>

            </div>
<br>
            <div class="panel panel-default">
                <hr>
                <div class="panel-heading"><b><h4>Booking yang sudah dikonfirmasi</h4></b></div>
                <hr>
                <div class="panel-body">
                  @if(count($terverifikasi) > 0)
                    @foreach ($terverifikasi as $order)
                      @if($order->order_type === 'wedding' || $order->order_type === 'engagement')
                          <pre>
                          <ul class="list-group">
                              <li class="list-group-item">Jenis Order     :   <?php echo $order->order_type; ?></li>
                              <li class="list-group-item">Tanggal         :   <?php echo $order->date; ?></li>
                              <li class="list-group-item">Jam             :   <?php echo $order->jam; ?></li>
                              <li class="list-group-item">Lokasi          :   <?php echo $order->location; ?></li>
                              <li class="list-group-item">Status          :   <?php echo $order->status; ?></li>
                              @if (!($order->order_type === 'wedding' || $order->order_type === 'engagement'))
                              <li class="list-group-item">Durasi          :   <?php echo $order->durasi; ?></li>
                              <li class="list-group-item">Jumlah Orang    :   <?php echo $order->jumlah_orang; ?></li>
                              @endif
                            @if ($order->linkhasil !== null)
                              <li class="list-group-item">Link Hasil Foto :   <?php echo $order->linkhasil; ?></li>
                            @endif
                            @if ($order->bukti_pembayaran === null)
                              <li class="list-group-item"><a type="button" class="btn btn-danger" href="buktiPembayaran/<?php echo $order->user_id?>/<?php echo $order->order_id ?>">Upload Bukti Pembayaran</a></li>
                            @elseif (!$order->bukti_pembayaran === null && (!$order->status ==='Selesai' || !$order->status ==='Terverifikasi'))
                              <li class="list-group-item"><a type="button" class="btn btn-danger" href="buktiPembayaran/<?php echo $order->user_id?>/<?php echo $order->order_id ?>">Upload Ulang Bukti Pembayaran</a></li>

                            @endif
                          </ul>
                      </pre>
                     @endif
                   @endforeach
                   {{ $terverifikasi->links() }}
                  @else
                    <h5>Belum ada booking yang sudah dikonfirmasi</h5>
                  @endif
                  <br>
                </div>

            </div>
<br>
            <div class="panel panel-default">
                <hr>
                <div class="panel-heading"><b><h4>Booking yang sudah selesai</h4></b></div>
                <hr>
                <div class="panel-body">
                  @if(count($selesai) > 0)
                    @foreach ($selesai as $order)
                      @if($order->order_type === 'wedding' || $order->order_type === 'engagement')
                          <pre>
                          <ul class="list-group">
                              <li class="list-group-item">Jenis Order     :   <?php echo $order->order_type; ?></li>
                              <li class="list-group-item">Tanggal         :   <?php echo $order->date; ?></li>
                              <li class="list-group-item">Jam             :   <?php echo $order->jam; ?></li>
                              <li class="list-group-item">Lokasi          :   <?php echo $order->location; ?></li>
                              <li class="list-group-item">Status          :   <?php echo $order->status; ?></li>
                              @if (!($order->order_type === 'wedding' || $order->order_type === 'engagement'))
                              <li class="list-group-item">Durasi          :   <?php echo $order->durasi; ?></li>
                              <li class="list-group-item">Jumlah Orang    :   <?php echo $order->jumlah_orang; ?></li>
                              @endif
                            @if ($order->linkhasil !== null)
                              <li class="list-group-item">Link Hasil Foto :   <?php echo $order->linkhasil; ?></li>
                            @endif
                            @if ($order->bukti_pembayaran === null)
                              <li class="list-group-item"><a type="button" class="btn btn-danger" href="buktiPembayaran/<?php echo $order->user_id?>/<?php echo $order->order_id ?>">Upload Bukti Pembayaran</a></li>
                            @elseif (!$order->bukti_pembayaran === null && (!$order->status ==='Selesai' || !$order->status ==='Terverifikasi'))
                              <li class="list-group-item"><a type="button" class="btn btn-danger" href="buktiPembayaran/<?php echo $order->user_id?>/<?php echo $order->order_id ?>">Upload Ulang Bukti Pembayaran</a></li>

                            @endif
                          </ul>
                      </pre>
                     @endif
                   @endforeach
                   {{ $selesai->links() }}
                  @else
                    <h5>Booking Anda belum ada yang selesai</h5>
                  @endif
                  <br>
                </div>
                <div class="panel-body"><i>Ingin melakukan booking lagi?</i><br>
                <a href='{{url("/book")}}' type="button" class="btn btn-primary">Book</a>
                <br>
                <hr>

                </div>
            </div>
            <!-- <div class="panel panel-default target">
                <div class="panel-heading" contenteditable="false"><h4><b>Hasil Foto</b></h4></div>
                <br>
                <div class="panel-body">
                  <div class="row">
				<div class="col-md-8">
					<div class="thumbnail">
						<img alt="300x200" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/UPMCEast_CTscan.jpg/280px-UPMCEast_CTscan.jpg">
						<div class="caption">
							<h3>
								Foto 1
							</h3>
							<p>
							</p>

						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="thumbnail">
						<img alt="300x200" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEQz__ycuhuAoNISn3rNWuaZhhzH4lAnPg0IvmQXJpkN08pC5oZA">
						<div class="caption">
							<h3>
								Foto 2
							</h3>


						</div>
					</div>
                </div>
                        <div class="col-md-8">
                    <div class="thumbnail">
                        <img alt="300x200" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEQz__ycuhuAoNISn3rNWuaZhhzH4lAnPg0IvmQXJpkN08pC5oZA">
                        <div class="caption">
                            <h3>
                                Foto 3
                            </h3>


                        </div>
                    </div>
                </div>
				 </div>
				<div class="col-md-8">
					<div class="thumbnail">
						<img alt="300x200" src="https://assets.nhs.uk/prod/images/C0097883.2e16d0ba.fill-920x613.jpg">
						<div class="caption">
							<h3>
								Foto 3
							</h3>
							<p>
							</p>
							<p>
							</p>
						</div>
                </div> -->

            <!-- </div>
 -->
            </div>

        </div>
        <hr>
    </div>
           <div class="panel panel-default">
                <div class="panel-heading"><b>Daftar Fotografer</b></div>
                <div class="panel-body"> Contact Fotografer
                <br><button type="button" class="btn btn-primary">Report

                </div>
</div></div>

</div>
<hr>
@include('layouts.footer')
</body>
</html>
