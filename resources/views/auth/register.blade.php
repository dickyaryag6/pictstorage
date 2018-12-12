@include('layouts.head')
@include('layouts.loginhead')

<div class="sub-main-w3">
        <form action="{{ route('register') }}" method="POST">
                @csrf
            <h1>Register Now
                <i class="fas fa-level-down-alt"></i>
            </h1>
            <div class="form-style-agile">
                <label for="nama">
                    <i class="fas fa-user"></i>
                </label>
                <input placeholder="Name" id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus>

                @if ($errors->has('username'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('username') }}</strong>
                     </span>
                @endif

            <!-- </div>
            <div class="form-style-agile">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input id="username" placeholder="Username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                @if ($errors->has('username'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('username') }}</strong>
                     </span>
                @endif

            </div> -->
             <div class="form-style-agile">
                <label for="email">
                    <i class="fas fa-envelope"></i>
                </label>
                <input id="email" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

            </div>
            <div class="form-style-agile">
                <label for="password">
                    <i class="fas fa-unlock-alt"></i>
                </label>
                <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
               @endif

            </div>
             <div class="form-style-agile">
                <label  for="password-confirm">
                    <i class="fas fa-unlock-alt"></i>
                </label>
                <input  id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
            </div>
            <input type="submit" value="Register">
            </div>
            <label class="anim">
         <br> <span>Already have an account?  <a href='{{url("/login")}}'>  Sign in </a> </span> </div>
          
        </form>
    </div>


@section('content')


@endsection
