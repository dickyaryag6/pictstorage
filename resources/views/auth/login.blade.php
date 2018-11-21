@include('layouts.head')
<!-- @include('layouts.loginhead') -->

<!-- content -->
<br><br>
    <div class="sub-main-w3">
        <br> <br> <br> <br>
        <form action="{{ route('login') }}" method="POST">
          @csrf

            <h2>Login
                <i class="fas fa-level-down-alt"></i>
            </h2>
            <div class="form-style-agile">
                <label for="email" class="col-md-4 col-form-label text-md-right">
                    <i class="fas fa-envelope"></i>
                </label>
                <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" type="email" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

            </div>
            <div class="form-style-agile">
                <label for="password" class="col-md-4 col-form-label text-md-right">
                    <i class="fas fa-unlock-alt"></i>
                </label>
                <input id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" type="password" required>

                @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif

            </div>
            <!-- checkbox -->
            <div class="wthree-text">
                <ul>
                    <li>
                        <label class="anim">
                            <input type="checkbox" class="checkbox">
                            <span>Remember me</span>
                        </label>
                    </li>
                    <li>
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                    </li>
                </ul>
            </div>
            <!-- //checkbox -->

            <input type="submit" value="Login"> <br>
            Don't have an account?   <a href='{{url("/register")}}'><br> Register </a>
        </form>
    </div>




@section('content')


@endsection
