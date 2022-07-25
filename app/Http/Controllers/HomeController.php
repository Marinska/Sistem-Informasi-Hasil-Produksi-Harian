<?php

namespace App\Http\Controllers;

use App\Models\detail_laporan;
use Illuminate\Http\Request;
use App\Models\laporan;

class HomeController extends Controller
{
    
    public function index(){
        $laporans = laporan::limit(7)->get();
        $category = [];
        $total = [];

        foreach($laporans as $laporan)
        {
            $category[] = $laporan->id;
            $total[] = detail_laporan::where('laporan_id', $laporan->id)->sum('GR');
        }

        // dd($total);
        return view('/home', [
            "category" => $category,
            "total" => $total,
            "title" => "Home",
            "active" => "Home"
        ]);
    }
}
