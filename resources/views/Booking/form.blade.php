@include('layouts.head')

<?php $user = Auth::user(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#weddingform").hide();
    $("#engagementform").hide();
    $("#photoboothform").hide();
    $("#studioform").hide();
    $("#wedding").click(function(){
        $(".form").hide();
        $("#weddingform").fadeToggle();
    });
    $("#engagement").click(function(){
        $(".form").hide();
        $("#engagementform").fadeToggle();
    });
    $("#photobooth").click(function(){
        $(".form").hide();
        $("#photoboothform").fadeToggle();
    });
    $("#studio").click(function(){
        $(".form").hide();
        $("#studioform").fadeToggle();
    });
});
</script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">
<style type="text/css">
  #nav li.active a {background-color: blue;}
</style>
</head>

<body>

<div class="text-center">
  <br><br>
  <div class="form-header">

              <h2>Klik jenis order yang anda inginkan</h2>

  </div>
<br>
<br>
<div id="booking" class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">
<div class="container">
  <ul>
    <li type="button" class="btn btn-dark " id="wedding">Wedding</li>
    <li type="button" class="btn btn-dark" id="engagement">Engagement</li>
    <li type="button" class="btn btn-dark active" id="photobooth">Photobooth</li>
    <li type="button" class="btn btn-dark" id="studio">Studio</li>
  </ul>
</div>

<div class="container form" id="weddingform">
  <div class="card-body">
      <form method="POST" action="konfirmasi">
          @csrf

          <!-- <div class="form-group row">
              <label for="order_type" class="col-sm-4 col-form-label text-md-right">{{ __('Order Type') }}</label>
                <div class="col-md-6">
                  <select class="form-control" name="order_type" placeholder="Jenis Order" required>
                    <! jenis order : PreWedding,Wedding,Engagement,Studio,Booth -->
                    <!-- <option value="prewedding">PreWedding</option>
                    <option value="wedding">Wedding</option>
                    <option value="engagement">Engagement</option>
                    <option value="studio">Studio</option>
                    <option value="booth">Booth</option> -->
                  <!-- </select>
                </div>
          </div> -->

          <input type="hidden" id="order_type" name="order_type" value="wedding">

          <div class="form-group row">
              <label for="date" class="col-sm-4 col-form-label text-md-right">{{ __('Date') }}</label>

              <div class="col-md-6">
                  <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" required autofocus min="2018-12-20">

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


          <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Pesan') }}
                  </button>
              </div>
          </div>
      </form>
  </div>
</div>

<div class="container form" id="engagementform">
  <div class="card-body">
      <form method="POST" action="konfirmasi">
          @csrf

          <!-- <div class="form-group row">
              <label for="order_type" class="col-sm-4 col-form-label text-md-right">{{ __('Order Type') }}</label>
                <div class="col-md-6">
                  <select class="form-control" name="order_type" placeholder="Jenis Order" required>
                    <! jenis order : PreWedding,Wedding,Engagement,Studio,Booth -->
                    <!-- <option value="prewedding">PreWedding</option>
                    <option value="wedding">Wedding</option>
                    <option value="engagement">Engagement</option>
                    <option value="studio">Studio</option>
                    <option value="booth">Booth</option> -->
                  <!-- </select>
                </div>
          </div> -->

          <input type="hidden" id="order_type" name="order_type" value="engagement">

          <div class="form-group row">
              <label for="date" class="col-sm-4 col-form-label text-md-right">{{ __('Date') }}</label>

              <div class="col-md-6">
                  <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" required autofocus min="2018-12-20">

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


          <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Pesan') }}
                  </button>
              </div>
          </div>
      </form>
  </div>
</div>

<div class="container form" id="photoboothform">
  <div class="card-body">
      <form method="POST" action="konfirmasi">
          @csrf

          <!-- <div class="form-group row">
              <label for="order_type" class="col-sm-4 col-form-label text-md-right">{{ __('Order Type') }}</label>
                <div class="col-md-6">
                  <select class="form-control" name="order_type" placeholder="Jenis Order" required>
                    <! jenis order : PreWedding,Wedding,Engagement,Studio,Booth -->
                    <!-- <option value="prewedding">PreWedding</option>
                    <option value="wedding">Wedding</option>
                    <option value="engagement">Engagement</option>
                    <option value="studio">Studio</option>
                    <option value="booth">Booth</option> -->
                  <!-- </select>
                </div>
          </div> -->

          <input type="hidden" id="order_type" name="order_type" value="photobooth">

          <div class="form-group row">
              <label for="date" class="col-sm-4 col-form-label text-md-right">{{ __('Date') }}</label>

              <div class="col-md-6">
                  <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" required autofocus min="2018-12-20">

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
              <p>{{ __('Jam') }}</p>
          </div>

          <div class="form-group row">
              <label for="jumlah_orang" class="col-sm-4 col-form-label text-md-right">{{ __('Jumlah') }}</label>

              <div class="col-md-1">
                  <input type="number" id="jumlah_orang" class="form-control{{ $errors->has('jumlah_orang') ? ' is-invalid' : '' }}" name="jumlah_orang" min="1" max="10" required autofocus>
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

          <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Pesan') }}
                  </button>
              </div>
          </div>
      </form>
  </div>
</div>

<div class="container form" id="studioform">
  <div class="card-body">
      <form method="POST" action="konfirmasi">
          @csrf

          <!-- <div class="form-group row">
              <label for="order_type" class="col-sm-4 col-form-label text-md-right">{{ __('Order Type') }}</label>
                <div class="col-md-6">
                  <select class="form-control" name="order_type" placeholder="Jenis Order" required>
                    <! jenis order : PreWedding,Wedding,Engagement,Studio,Booth -->
                    <!-- <option value="prewedding">PreWedding</option>
                    <option value="wedding">Wedding</option>
                    <option value="engagement">Engagement</option>
                    <option value="studio">Studio</option>
                    <option value="booth">Booth</option> -->
                  <!-- </select>
                </div>
          </div> -->

          <input type="hidden" id="order_type" name="order_type" value="studio">

          <div class="form-group row">
              <label for="date" class="col-sm-4 col-form-label text-md-right">{{ __('Date') }}</label>

              <div class="col-md-6">
                  <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" required autofocus min="2018-20-13">

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
                  <input type="number" id="jumlah_orang" class="form-control{{ $errors->has('jumlah_orang') ? ' is-invalid' : '' }}" name="jumlah_orang" min="1" max="10" required autofocus>
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

          <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Pesan') }}
                  </button>
              </div>
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
