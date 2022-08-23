@extends('layouts.form')

@section('title', 'Registro')
@section('subtitle', 'Ingrese tus datos para el registro.')
    


@section('content')
<div class="col-lg-6 col-md-8">
    <div class="card bg-secondary shadow border-0">
      <div class="card-body px-lg-5 py-lg-5">
        <div class="text-center text-muted mb-4">
            @if($errors->any())
            <div class="alert alert-danger mb-4" role="alert">
                <strong>Danger!</strong> {{$errors->first()}}
            </div>
            @endif
          
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
          <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
              </div>
              <input class="form-control" placeholder="Name" type="text" name="name">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
              </div>
              <input class="form-control" placeholder="Email" type="email"  name="email">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
              </div>
              <input class="form-control" placeholder="Password" type="password" name="password">
            </div>
          </div>


          <div class="form-group">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
              </div>
              <input class="form-control" placeholder="Confirm Password" type="password" required autocomplete="new-password" name="password_confirmation">
            </div>
          </div>

          <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary mt-4">Create account</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
