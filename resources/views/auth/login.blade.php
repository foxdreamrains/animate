@extends('layouts.app')
@section('title', 'Hybro Cloth')
@section('content')
<div class="row" style="margin-top: 2%;">
    <div class="col 14 m6 s12 offset-14 offset-m3">
        <a href="#" class="brand-logo center" style="font-family: 'lobster'; font-size: 40px; color: black;">
           Login
        </a>
        <span class="purple-text"></span>
        <div class="card z-depth-2">
            <div class="card-content">
                <form class="col s12" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mepet">
                        <div class="input-field col s12">
                            <i class="mdi-action-account-circle "></i>
                            <input type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label>{{ __('E-Mail') }}</label>
                            @error('email')
                            <span class="helper-text" data-error="wrong" data-success="right">{{ "Password salah, mohon ulangi" }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mepet">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle"></i>
                          <input type="password" name="password">
                          <label>{{ __('Password') }}</label>
                          @error('password')
                          <span class="helper-text" data-error="wrong" data-success="right">{{ "Email tidak terdaftar" }}</span>
                          @enderror
                      </div>
                      <div class="col-md-6">
                            <p>
                              <label for="remember">
                                <input type="checkbox" class="filled-in" checked="checked" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span>{{ __('Simpan Email dan Password') }}</span>
                            </label>
                        </p>
                    </div>
                    @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Kamu Lupa Password ?') }}
                            </a>
                            @endif
                  </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input style="background-color: black" type="submit" name="masuk" value="login" class="btn right">
              </div>
          </div>
      </form>
  </div>
</div>
</div>
</div>
@endsection
