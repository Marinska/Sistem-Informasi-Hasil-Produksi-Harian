@extends('layouts.main')

@section('field')
  <div style="margin-bottom: 50px">
  <h1 style="text-align:center;margin-top:15px">Sistem Informasi Hasil Produksi Harian<br>Selamat Datang {{ auth()->user()->name }}</h1>
  <center><form action="/buatlaporan" style="display: inline">
    <input type="submit" name="buatlap" id="buatlap" value="Buat Laporan Baru" class="w-10 btn btn-lg btn-primary mt-2" type="submit">
  </form>
  <form action="/laporan" style="display: inline">
    <input type="submit" name="lihatlap" id="lihatlap" value="Lihat Daftar Laporan" class="w-10 btn btn-lg btn-primary mt-2" type="submit">
  </form><center>
  </div><br>
  <div id="chart">
  </div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>// Create the chart
  Highcharts.chart('chart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Produksi Harian 7 Hari Terakhir'
    },
    xAxis: {
        categories: {!! json_encode($category) !!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Lembar Kemas'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} lembar kirim</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Jumlah Kemas',
        data: {!! json_encode($total) !!}

    }]
});
</script>
@endsection