<!DOCTYPE html>
<html>
<head>
	<title>SISTEM INFORMASI HASIL PRODUKSI HARIAN PITA CUKAI HASIL TEMBAKAU</title>
</head>
<body>
    <script>
        window.print()
    </script>
    <center><h2>CHECK LIST PENGEMASAN PITA CUKAI</h2>
    <h4>ETIKET, ISI DAN LABEL KONTROL HARUS SESUAI</h4></center>

    <center><table border="0">
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
    <table cellpadding="5" cellspacing="0" border="1" style="margin-top:15px">
        <thead>
            <tr>
                <td align="center"><b>No</b></td>
                <td align="center"><b>PO</b></td>						
                <td align="center"><b>OBC</b></td>
                <td align="center"><b>SERI</b></td>
                <td align="center"><b>PERSONALISASI</b></td>
                <td align="center"><b>JUMLAH</b></td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($isilaporan as $isi)
            <tr>
                <td><?php echo $no++;?></td>
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
                    {{ $isi->GR }}
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="7" style="border-bottom:1px;border-left:1px;border-right:1px">
                    Jumlah P : {{ $jumlah_p }}
                </td>
            </tr>
            <tr>
                <td colspan="7" style="border-style: none">
                    Jumlah NP : {{ $jumlah_np }}
                </td>
            </tr>
            <tr>
                <td colspan="7" style="border-style: none">
                    Jumlah Total : {{ $jumlah_total }}
                </td>
            </tr>
        </tbody>
        <tr>
            <td colspan="2" align="center" style="border-bottom:1px;border-left:1px;border-right:1px">
                Petugas
            </td>
            <td colspan="2" style="border-bottom:1px;border-left:1px;border-right:1px">

            </td>
            <td colspan="2" align="center" style="border-bottom:1px;border-left:1px;border-right:1px">
                Kaun
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="border-style: none;height:75px">
            </td>
            <td colspan="2" style="border-style: none">

            </td>
            <td colspan="2" align="center" style="border-style: none">
                
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="border-style: none">
                {{ $laporan->user->name }}
            </td>
            <td colspan="2" style="border-style: none">

            </td>
            <td colspan="2" align="center" style="border-style: none">
                Agus Soelistyo
            </td>
        </tr>
    </table>
</center>   
</body>

</html>