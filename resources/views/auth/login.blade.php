@extends('layouts.form')

@section('content')

@section('title', 'Iniciar Sesión')
@section('subtitle', 'Llene los campos para iniciar Sesión')


<div class="col-lg-5 col-md-7">
  <div class="card bg-secondary shadow border-0">
   
    <div class="card-body px-lg-5 py-lg-5">
      @if($errors->any())
      <div class="alert alert-danger mb-4" role="alert">
        <strong>Danger!</strong> {{$errors->first()}}
    </div>
    @endif
      <form role="form" method="POST" action="{{ route('login') }}">
        @csrf
      <div class="form-group mb-3">
          <div class="input-group input-group-alternative">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
            </div>
            <input class="form-control @error('email') is-invalid @enderror" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group input-group-alternative">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
            </div>
            <input class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" type="password">
          </div>
        </div>
        <div class="custom-control custom-control-alternative custom-checkbox">
          <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <label class="custom-control-label" for="remember">
            <span class="text-muted">Remember me</span>
          </label>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary my-4">{{ __('Login') }}</button>
        </div>
      </form>
      
  
    </div>
  </div>

  
 

  <div class="row mt-3">
    <div class="col-6">
      @if (Route::has('password.request'))
      <a class="text-light" href="{{ route('password.request') }}">
          <small>{{ __('Forgot Your Password?') }}</small>
      </a>
    @endif
    </div>
    <div class="col-6 text-right">
      <a href="{{route('register') }}" class="text-light"><small>Create new account</small></a>
    </div>
  </div>
</div>
@endsection