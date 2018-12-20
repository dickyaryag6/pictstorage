@include('layouts.head')

<?php $user = Auth::user(); ?>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">
</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth()+1; //January is 0!
      var yyyy = today.getFullYear();
      if(dd<10){
              dd='0'+dd
          }
          if(mm<10){
              mm='0'+mm
          }

      today = yyyy+'-'+mm+'-'+dd;
      document.getElementById("date").min = today;
</script>

<div class="text-center">
  <br><br>

<br>
<br>
<div id="booking" class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">

    <div class="container form">
      <div class="card-body">
          <form action="konfirmasi" method="post">
            @csrf
            @if ($hasilforms['order_type']=='wedding' || $hasilforms['order_type']=='engagement')
            <!-- <input type="hidden" id="order_type" name="order_type" value="wedding"> -->
            <div class="form-group row">
              <label for="date" class="col-sm-4 col-form-label text-md-right">{{ __('Jenis') }}</label>
                <div class="col-md-4">
                  <?php $ordertype=ucfirst($hasilforms['order_type']); ?>
                  <p style="border-style:solid;"><?php echo $ordertype ?></p>
                </div>
            </div>
            <input type="hidden" id="order_type" name="order_type" value="<?php echo $hasilforms['order_type'] ?>">
            <div class="form-group row">
                <label for="date" class="col-sm-4 col-form-label text-md-right">{{ __('Tanggal') }}</label>

                <div class="col-md-6">
                    <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="<?php echo $hasilforms['date']; ?>" required autofocus></input>

                    @if ($errors->has('location'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('date') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="jam" class="col-sm-4 col-form-label text-md-right">{{ __('Jam') }}</label>

                <div class="col-md-6">
                    <input id="jam" type="time" class="form-control{{ $errors->has('jam') ? ' is-invalid' : '' }}" name="jam" value="<?php echo $hasilforms['jam']; ?>" required autofocus>

                    @if ($errors->has('location'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('jam') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="location" class="col-sm-4 col-form-label text-md-right">{{ __('Location') }}</label>

                <div class="col-md-6">
                    <input id="location" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="<?php echo $hasilforms['location']; ?>" required autofocus>

                    @if ($errors->has('location'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('location') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            @else
            <div class="container form">
              <div class="card-body">
            <form method="POST" action="konfirmasi">
                @csrf

                <div class="form-group row">
                  <label for="date" class="col-sm-4 col-form-label text-md-right">{{ __('Jenis') }}</label>
                    <div class="col-md-6">
                      <?php $ordertype=ucfirst($hasilforms['order_type']); ?>
                      <p><?php echo $ordertype; ?></p>
                    </div>

                </div>

                <div class="form-group row">
                    <label for="date" class="col-sm-4 col-form-label text-md-right">{{ __('Tanggal') }}</label>

                    <div class="col-md-6">
                        <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" required autofocus>

                        @if ($errors->has('location'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jam" class="col-sm-4 col-form-label text-md-right">{{ __('Jam') }}</label>

                    <div class="col-md-6">
                        <input id="jam" type="time" class="form-control{{ $errors->has('jam') ? ' is-invalid' : '' }}" name="jam" required autofocus>

                        @if ($errors->has('location'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('jam') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="location" class="col-sm-4 col-form-label text-md-right">{{ __('Location') }}</label>

                    <div class="col-md-6">
                        <input id="location" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" required autofocus>

                        @if ($errors->has('location'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('location') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="durasi" class="col-sm-4 col-form-label text-md-right">{{ __('Duration') }}</label>

                    <div class="col-md-1">
                        <input type="number" id="durasi" class="form-control{{ $errors->has('durasi') ? ' is-invalid' : '' }}" name="durasi" min="1" max="5" required autofocus>
                        <!-- <input type="time" id="durasi" class="form-control{{ $errors->has('durasi') ? ' is-invalid' : '' }}" name="durasi" min="0:00" max="06:00" required autofocus> -->
                        @if ($errors->has('durasi'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('durasi') }}</strong>
                            </span>
                        @endif
                    </div>
                    <br>
                    <p>Jam</p>
                </div>

                <div class="form-group row">
                    <label for="jumlah_orang" class="col-sm-4 col-form-label text-md-right">{{ __('Jumlah') }}</label>

                    <div class="col-md-1">
                        <input type="number" id="jumlah_orang" class="form-control{{ $errors->has('jumlah_orang') ? ' is-invalid' : '' }}" name="jumlah_orang" min="1" max="5" required autofocus>
                        <!-- <input type="time" id="durasi" class="form-control{{ $errors->has('durasi') ? ' is-invalid' : '' }}" name="durasi" min="0:00" max="06:00" required autofocus> -->
                        @if ($errors->has('jumlah_orang'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('jumlah_orang') }}</strong>
                            </span>
                        @endif
                    </div>
                    <br>
                    <p>{{ __('Orang') }}</p>
                </div>
                @endif
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Pesan') }}
                        </button>
                    </div>
                </div>
            </form>

<!--

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Pesan') }}
                    </button>
                </div> -->
            </div>
          </form>
        </div>
      </div>
        </div>
      </div>
        </div>
      </div>
    </div>
</div>
<br><br><br><br><br>
@include('layouts.footer')
</body>
