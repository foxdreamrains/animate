@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 7%;">
    <div class="col 14 m6 s12 offset-14 offset-m3">
        <a href="#" class="brand-logo center" style="font-family: 'lobster'; font-size: 40px; color: black;">
            Reset Password
        </a>
        <span class="purple-text"></span>
        <div class="card z-depth-2">
            <div class="card-content">
                <form class="col s12" method="POST" action="{{ route('login') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="row mepet">
                        <div class="input-field col s12">
                            <i class="mdi-action-account-circle "></i>
                            <input type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label>{{ __('E-Mail') }}</label>
                            @error('email')
                            <span class="helper-text" data-error="wrong" data-success="right">{{ $massage }}</span>
                            @enderror
                        </div>
                    </div>
              <div class="row">
                <div class="input-field col s12">
                  <input type="submit" name="masuk" value="login" class="btn right">
              </div>
          </div>
      </form>
  </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background:black;">
                                    {{ __('Reset Password') }}
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
