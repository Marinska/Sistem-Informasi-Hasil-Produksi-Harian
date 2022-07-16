@extends('layouts.login')

@section('field')
<div class="row justify-content-center wrapper fadeInDown">
    <div class="col-md-5" id="formContent">

@if(session()->has('success'))
  <div class="alert alert-success alert-dismissable fade show" role="alert">
    {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </button>
</div>
@endif

@if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissable fade show" role="alert">
    {{ session('loginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </button>
</div>
@endif

        <main class="form-signin w-100 m-auto">
            <form action="/login" method="post">
              @csrf
              <div class="row justify-content-center"><img class="mb-4 mt-5 " src="login-logo.png"></div>
              <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" autofocus required>
                <label for="email">E-mail</label>
                @error('email')
                 <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating mt-1">
                <input type="password" class="form-control" id="password" name="password" required>
                <label for="password">Password</label>
              </div>
              <input class="w-100 btn btn-lg btn-primary mt-2" type="submit" value="Masuk">
            </form>
          </main>
    </div>
</div>
@endsection