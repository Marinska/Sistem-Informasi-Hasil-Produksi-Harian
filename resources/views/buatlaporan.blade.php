@extends('layouts.main')

@section('field')
<div class="row justify-content-center mt-5">
    <div class="col-md-5">
        <main class="form-signin w-100 m-auto">
            <form action="/buatlaporan" method="POST">
            @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Buat Laporan</h1>
              <div class="form-floating">
                <input type="date" class="form-control" id="floatingInput" placeholder="Masukan tanggal" name="id">
                <label for="floatingInput">ID Laporan</label>
              </div>
              <div class="form-floating mt-1">
                <input type="text" class="form-control" id="floatingInput" name="petugas" value="{{ auth()->user()->name }}" readonly>
                <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                <label for="floatingInput">Petugas</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Buat Laporan</button>
            </form>
          </main>
    </div>
</div>
@endsection