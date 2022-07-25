{{-- @dd($isilaporan) --}}
@extends('layouts.main')

@section('field')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<a href="/laporan">Buka list laporan</a><br>

<table border="0" style="margin-bottom: 5px;margin-top: 25px;">
    <tr>
        <td>ID Laporan
        </td>
        <td>&nbsp;:&nbsp;&nbsp;</td>
        <td> {{ $laporan['id'] }}</td>
    </tr>
    <tr>
        <td>Tanggal
        </td>
        <td>&nbsp;:&nbsp;&nbsp;</td>
        <td>{{ $laporan['tanggal_laporan'] }}</td>
    </tr>
    <tr>
        <td>Petugas
        </td>
        <td>&nbsp;:&nbsp;&nbsp;</td>
        <td> {{ $laporan->user->name }}</td>
    </tr>
</table>
<table border="0">
    <tr>
        <td>
            <form action="/print/{{ $laporan['id'] }}" target="_blank">
                <input type="submit" value="Print" />
            </form></td>
    </tr>
</table>

@auth
<form method="post" action="/isilaporan" style="margin-bottom: 5px;margin-top: 5px;">
    @csrf
    @method('POST')
    <input type="text" id="scanbar" name="scanbar" autofocus='true' placeholder="Scan here"/>
    <input type="hidden" value="{{ $laporan['id'] }}" id="idlaporan" name="idlaporan"/>
</form>
@else
    <input style="margin-bottom: 5px; margin-top: 5px;" type="text" id="scanbar" name="scanbar" autofocus='true' placeholder="Scan here" readonly/>
@endauth
<table cellpadding="5" cellspacing="0" border="1" class="table">
    <thead>
        <tr>
            <td align="center"><b>No</b></td>
            <td align="center"><b>PO</b></td>						
            <td align="center"><b>OBC</b></td>
            <td align="center"><b>SERI</b></td>
            <td align="center"><b>PERSONALISASI</b></td>
            <td align="center"><b>JUMLAH</b></td>
            <td align="center"><b>AKSI</b></td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach ($isilaporan as $isi)
        <tr>
            <td align="center"><?php echo $no++;?></td>
            <td align="center">
                {{ $isi->nopo }}
            </td>
            <td align="center">
                {{ $isi->OBC }}
            </td>
            <td align="center">
                {{ $isi->SERI }}
            </td>
            <td align="center">
                {{ $isi->Personalisasi }}
            </td>
            <td align="center">
                @auth
                <form method="post" action="/isilaporan/{{ $isi->nopo }}">
                    @csrf
                    @method('PUT')
                    <input type="text" id="update" name="update" placeholder="{{ $isi->GR }}" style="border: none;text-align: center"/>
                </form>
                @else
                <input type="text" id="update" name="update" placeholder="{{ $isi->GR }}" style="border: none;text-align: center" readonly/>
                @endauth
            </td>
            <td align="center" valign="top">
                <form method="post" action="/isilaporan/{{ $isi->nopo }}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Hapus" id="delete" name="delete" onclick="return confirm('Anda yakin ingin menghapus data?')" />
                </form>
            </td>
        @endforeach
        <tr>
            <td colspan="7">
                Jumlah P : {{ $jumlah_p }}
            </td>
        </tr>
        <tr>
            <td colspan="7">
                Jumlah NP : {{ $jumlah_np }}
            </td>
        </tr>
        <tr>
            <td colspan="7">
                Jumlah Total : {{ $jumlah_total }}
            </td>
        </tr>
    </tr> 
    </tbody>
</table>
@endsection