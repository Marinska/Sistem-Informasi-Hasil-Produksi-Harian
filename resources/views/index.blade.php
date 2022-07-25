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
              <div class="row justify-content-center"><img class="mb-4 mt-5" src="{{ URL('logo.png') }}" style="width: 200px"></div>
              <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
              <div>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" autofocus required placeholder="Username/Email">
                @error('email')
                 <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mt-1">
                <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
              </div>
              <input class="w-10 btn btn-lg btn-primary mt-2" type="submit" value="Masuk">
            </form>
          </main>
    </div>
</div>
@endsection