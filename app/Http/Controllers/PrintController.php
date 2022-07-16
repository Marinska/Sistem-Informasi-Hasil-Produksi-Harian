<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\detail_laporan;
use App\Models\laporan;

class PrintController extends Controller
{
    public function index($id)
    {
        $data_p = detail_laporan::where('laporan_id', $id)->where('Personalisasi', 'P')->sum('GR');
        $data_np = detail_laporan::where('laporan_id', $id)->where('Personalisasi', 'NP')->sum('GR');
        $jumlah = detail_laporan::where('laporan_id', $id)->sum('GR');
        return view('print', [
            "title" => "Laporan",
            "laporan" => laporan::where('id', $id)->firstorfail(),
            "isilaporan" => detail_laporan::where('laporan_id', $id)->get()->sortByDesc('updated_at'),
            "jumlah_p" => $data_p,
            "jumlah_np" => $data_np,
            "jumlah_total" => $jumlah
        ]);
    }
}
