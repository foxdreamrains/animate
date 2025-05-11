@extends('layouts.app')
@section('title', 'Animate By Yunna Marcier')
@section('content')

<div class="row" style="margin-top: 7%;">
    <div class="col 14 m6 s12 offset-14 offset-m3">
        <a href="../home.php" class="brand-logo center" style="font-family: 'lobster'; font-size: 40px; color: black;"><i class="fab fa-asymmetrik" style="position: absolute; left: 10%; top: 3%; float: center;"></i>Register</a>
        <span class="purple-text"></span>
        <div class="card z-depth-2">
            <div class="card-content">
                <form  method="POST" class="col s12" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <!-- namalengkap -->
                    <div class="row mepet">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle"></i>
                          <input id="name" class="name" type="text" name="name" value="{{ old('name') }}" autofocus="true" autocomplete="name" required>
                          <label for="name">Nama Lengkap</label>
                          @error('name')
                          <span class="helper-text" data-error="wrong" data-success="right">{{ $massage ?? '' }}</span>
                          @enderror
                      </div>
                  </div>
                  <!-- email -->
                  <div class="row mepet">
                    <div class="input-field col s12">
                        <i class="mdi-action-account-circle"></i>
                        <input type="email" name="email" value="{{ old('email') }}" autocomplete="email" required>
                        <label for="email">Email</label>
                        @error('email')
                        <span class="helper-text" data-error="wrong" data-success="right">{{ $massage ?? '' }}</span>
                        @enderror
                    </div>
                </div>
                <!-- namalengkap -->
                    <div class="row mepet">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle"></i>
                          <input id="telepon" class="telepon" type="number" name="telepon" value="{{ old('telepon') }}" required>
                          <label for="name">No Telepon</label>
                          @error('telepon')
                          <span class="helper-text" data-error="wrong" data-success="right">{{ $massage ?? '' }}</span>
                          @enderror
                      </div>
                  </div>
                <!-- password -->
                <div class="row mepet">
                    <div class="input-field col s12">
                      <i class="mdi-action-account-circle"></i>
                      <input type="password" name="password" value="{{ old('password') }}" autocomplete="password" required>
                      <label for="password">{{ __('Password') }}</label>
                      @error('password')
                      <span class="helper-text" data-error="wrong" data-success="right">error</span>
                      @enderror
                  </div>
              </div>
              <div class="row mepet">
                <div class="input-field col s12">
                  <i class="mdi-action-account-circle"></i>
                  <input type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                  <label for="password-confirm">{{ __('Confirm Password') }}</label>
              </div>
          </div>
      </div>


      <!-- Submit -->
      <div class="row">
        <div class="input-field col s12">
          <input style="background-color: black" type="submit" value="Daftar" class="btn right">
      </div>
  </form>
</div>
</div>
</div>
</div>

@endsection
