@extends('layouts.main')

@section('field')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div>
  <div>
    <form action="/laporan" style="width: 25%">
      <div class="input-group mt-4">
        <input type="text" class="form-control" placeholder="Cari Laporan.." name="search" value="{{  request('search') }}">
        <button class="btn btn-outline-secondary" type="submit">Cari</button>
      </div>
    </form>  
  </div>  
</div> <br>

<h1 class="h3 mb-3 fw-normal text-center">Daftar Laporan</h1>
<table border='1' cellpadding='5' class="table table-striped">
  <tr>
    <td align="center">
      ID Laporan
    </td>
    <td align="center">
      Petugas
    </td>
    <td align="center">
      Tanggal Laporan
    </td>
    <td align="center">AKSI</td>
  </tr>
@foreach ($laporans as $laporan)
<tr>
  <td align="center">
      <a href="/isilaporan/{{ $laporan['id'] }}" class="text-decoration-none">{{ $laporan['id'] }}</a>
  </td>
  <td align="center">
    {{ $laporan->user->name }}
  </td>
  <td align="center">
    {{ $laporan['tanggal_laporan'] }}
  </td>
  <td align="center">
    <form action="/isilaporan/{{ $laporan['id'] }}" style="display: inline">
      <input type="submit" value="Lihat & Edit" />
    </form>
    @auth
    <form method="post" action="/laporan/{{ $laporan['id'] }}" style="display: inline">
      @csrf
      @method('delete')
      {{-- <button class="badge bg-danger border-0"><img src="/icon-delete.svg" id="drop" name="drop" onclick="return confirm('Anda yakin ingin menghapus semua data Laporan?')"></button> --}}
      <input type="submit" value="Hapus" id="drop" name="drop" onclick="return confirm('Anda yakin ingin menghapus semua data Laporan?')" />
  </form>
    @endauth
  </td>
</tr>
@endforeach
</table>
@endsection