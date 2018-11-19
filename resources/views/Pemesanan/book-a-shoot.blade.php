@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form pemesanan') }}</div>

                <div class="card-body">
                    <form method="POST" action="konfirmasi-pemesanan">
                        @csrf

                        <div class="form-group row">
                            <label for="order_type" class="col-sm-4 col-form-label text-md-right">{{ __('Order Type') }}</label>
                              <div class="col-md-6">
                                <select class="form-control" name="order_type" placeholder="Jenis Order" required>
                                  <!-- jenis order : PreWedding,Wedding,Engagement,Studio,Booth -->
                                  <option value="prewedding">PreWedding</option>
                                  <option value="wedding">Wedding</option>
                                  <option value="engagement">Engagement</option>
                                  <option value="studio">Studio</option>
                                  <option value="booth">Booth</option>
                                </select>
                              </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-sm-4 col-form-label text-md-right">{{ __('Date') }}</label>

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
                            <label for="location" class="col-sm-4 col-form-label text-md-right">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ old('location') }}" required autofocus>

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
        </div>
    </div>
</div>
@endsection
