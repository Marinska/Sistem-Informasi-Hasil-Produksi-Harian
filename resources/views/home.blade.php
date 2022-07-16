@extends('layouts.main')

@section('field')
  <h1>Sistem Informasi Hasil Produksi Harian</h1>
  <form action="/buatlaporan" style="display: inline">
    <input type="submit" name="buatlap" id="buatlap" value="Buat Laporan Baru">
  </form>
  <form action="/laporan" style="display: inline">
    <input type="submit" name="lihatlap" id="lihatlap" value="Lihat Daftar Laporan">
  </form>
@endsection