@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form pemesanan') }}</div>

                <div class="card-body">
                    <form method="POST" action="konfirmasi-pemesanan.blade.php">
                        @csrf

                        <div class="form-group row">
                            <label for="satu" class="col-sm-4 col-form-label text-md-right">{{ __('Satu') }}</label>

                            <div class="col-md-6">
                                <input id="satu" type="text" class="form-control{{ $errors->has('satu') ? ' is-invalid' : '' }}" name="satu" value="{{ old('satu') }}" required autofocus>

                                @if ($errors->has('satu'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('satu') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dua" class="col-sm-4 col-form-label text-md-right">{{ __('Dua') }}</label>

                            <div class="col-md-6">
                                <input id="dua" type="text" class="form-control{{ $errors->has('dua') ? ' is-invalid' : '' }}" name="dua" value="{{ old('dua') }}" required autofocus>

                                @if ($errors->has('dua'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dua') }}</strong>
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
        </div>
    </div>
</div>
@endsection
