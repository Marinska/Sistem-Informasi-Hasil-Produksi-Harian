<?php

namespace App\Http\Controllers;

use App\Models\detail_laporan;
use Illuminate\Http\Request;
use App\Models\rawdata;
use Illuminate\Support\Carbon;
use App\Models\laporan;

class DetailLaporanController extends Controller
{
    public function show($id)
    {
        $data_p = detail_laporan::where('laporan_id', $id)->where('Personalisasi', 'P')->sum('GR');
        $data_np = detail_laporan::where('laporan_id', $id)->where('Personalisasi', 'NP')->sum('GR');
        $jumlah = detail_laporan::where('laporan_id', $id)->sum('GR');
        return view('isilaporan', [
            "title" => "Laporan",
            "laporan" => laporan::where('id', $id)->firstorfail(),
            "isilaporan" => detail_laporan::where('laporan_id', $id)->get()->sortByDesc('updated_at'),
            "jumlah_p" => $data_p,
            "jumlah_np" => $data_np,
            "jumlah_total" => $jumlah
        ]);
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        $getTableA = rawdata::where('nopo',$request->scanbar)->get();
        detail_laporan::updateorcreate(
            ['nopo' => $getTableA->value('nopo')],
            [ 
                'laporan_id' => $request->idlaporan,
                'OBC' => $getTableA->value('OBC'),
                'SERI' => $getTableA->value('SERI'),
                'Personalisasi' => $getTableA->value('Personalisasi'),
                'GR' => $getTableA->value('GR'),
                'tanggal_laporan' => Carbon::now()
            ]);
        return redirect()->back()->withInput();
    }

    public function update(Request $request, $nopo ){
        // dd($request->all());
        detail_laporan::where('nopo', $nopo)->update(['GR' => $request->update]);
        return redirect()->back()->withInput();
    }

    public function delete(Request $request, $nopo){
        // dd($request->all());
        detail_laporan::where('nopo', $nopo)->delete(['nopo' => $request->delete]);
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }    
}
