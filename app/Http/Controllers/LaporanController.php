<?php

namespace App\Http\Controllers;

use App\Models\detail_laporan;
use App\Models\laporan;
use Illuminate\Http\Request;



class LaporanController extends Controller
{
    public function index()
    {
        $laporan = laporan::latest();

        if(request('search')){
            $laporan->where('id', 'like', '%' . request('search') . '%');
        }

        return view('laporan', [
            "title" => "Laporan",
            "laporans" => $laporan->get()
        ]);
    }

    public function drop(Request $request, $id){
        detail_laporan::where('laporan_id', $id)->delete(['laporan_id' => $request->drop]);
        laporan::where('id', $id)->delete(['id' => $request->drop]);
        return redirect('/laporan')->with('success', 'Laporan berhasil dihapus!');
    }  

    // public function show($id)
    // {
    //     return view('isilaporan', [
    //         "title" => "Laporan",
    //         "laporan" => laporan::where('id', $id)->firstorfail(),
    //         "isilaporan" => detail_laporan::where('laporan_id', $id)->get()->sortByDesc('updated_at')
    //     ]);
    // }

    // public function insert(Request $request)
    // {
    //     // dd($request->all());
    //     $getTableA = rawdata::where('nopo',$request->scanbar)->get();
    //     detail_laporan::updateorcreate(
    //         ['nopo' => $getTableA->value('nopo')],
    //         [ 
    //             'laporan_id' => $request->idlaporan,
    //             'OBC' => $getTableA->value('OBC'),
    //             'SERI' => $getTableA->value('SERI'),
    //             'Personalisasi' => $getTableA->value('Personalisasi'),
    //             'GR' => $getTableA->value('GR'),
    //             'tanggal_laporan' => Carbon::now()
    //         ]);
    //     return redirect()->back()->withInput();
    // }

    // public function update(Request $request, $nopo ){
    //     // dd($request->all());
    //     detail_laporan::where('nopo', $nopo)->update(['GR' => $request->update]);
    //     return redirect()->back()->withInput();
    // }

    // public function delete(Request $request, $nopo){
    //     // dd($request->all());
    //     detail_laporan::where('nopo', $nopo)->delete(['nopo' => $request->delete]);
    //     return redirect()->back()->withInput();
    // }
}
