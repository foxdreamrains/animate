@extends('layouts.app')
@section('title', 'Aku Sale')
@section('css')
<style>
/* label focus color */
 .input-field input:focus + label {
   color: #7D4A82 !important;
 }
 /* label underline focus color */
 .row .input-field input:focus {
   border-bottom: 1px solid #7D4A82 !important;
   box-shadow: 0 1px 0 0 #7D4A82 !important
 }
 </style>
@endsection
@section('content')
<div class="row" style="margin-top: 7%;">
    <div class="col 14 m6 s12 offset-14 offset-m3">
        <a href="#" class="brand-logo center" style="font-family: 'lobster'; font-size: 40px; color: #7D4A82;">
            <i class="fab fa-asymmetrik" style="position: absolute; left: 10%; top: 5%; float: center;"></i>Reset Password
        </a>
        <span class="purple-text"></span>
        <div class="card z-depth-2">
            <div class="card-content">
                <form class="col s12" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="row mepet">
                        <div class="input-field col s12">
                            <i class="mdi-action-account-circle "></i>
                            <input type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label>{{ __('E-Mail') }}</label>
                            @error('email')
                            <span class="helper-text" data-error="wrong" data-success="right">Error</span>
                            @enderror
                        </div>
                    </div>
                </div>
              <div class="row">
                <div class="input-field col s12">
                  <input type="submit" name="masuk" value="Reset password" class="btn right">
              </div>
          </div>
      </form>
  </div>
</div>
</div>
</div>

@endsection
