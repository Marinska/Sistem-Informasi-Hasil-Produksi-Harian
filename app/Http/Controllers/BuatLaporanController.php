<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BuatLaporanController extends Controller
{
    public function index(){
        return view('/buatlaporan', [
            'title' => 'Buat Laporan'
        ]);
    }

    public function store(Request $request)
    {
        $newlap = 'LID'.$request->id;
        $tgl = Carbon::now();
        laporan::updateorcreate(
            ['id' => $newlap],
            [
                'user_id' => $request->user_id,
                'tanggal_laporan' => $tgl
            ]
        );
        return redirect('/laporan')->with('success', 'Laporan berhasil dibuat');

            // return redirect('/buatlaporan')->with('failed', 'Laporan sudah ada');
        
            // laporan::create(['id' => $newlap, 'user_id' => $request->user_id, 'tanggal_laporan' => $tgl]);
            // return redirect('/laporan')->with('success', 'Laporan berhasil dibuat');
        
        
    }
}
