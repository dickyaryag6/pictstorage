@include('layouts.head')
@include('layouts.loginhead')

<!-- content -->
    <div class="sub-main-w3">
        <form action="{{ route('login') }}" method="POST">
          @csrf

            <h2>Login
                <i class="fas fa-level-down-alt"></i>
            </h2>
            <div class="form-style-agile">
                <label for="email" class="col-sm-4 col-form-label text-md-right">
                    <i class="fas fa-user"></i>
                </label>
                <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="email" name="email" type="email" required autofocus>

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

            <input type="submit" value="Log In"> <br>
            <a href='{{url("/register")}}'>Register </a>
        </form>
    </div>




@section('content')


@endsection
