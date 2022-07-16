<?php

namespace App\Models;


class laporan {
        private static $lihatlaporan = [
            [
                "idlaporan" => "LID2022-06-06",
                "slug" => "LID2022-06-06",
                "petugas" => "Marinska",
                "tanggal_laporan" => "2022-06-06"
            ],
            [
                "idlaporan" => "LID2022-06-05",
                "slug" => "LID2022-06-05",
                "petugas" => "Rita",
                "tanggal_laporan" => "2022-06-05"
            ]
            ];
    

        public static function all()
        {
            return collect(self::$lihatlaporan);
        }

        public static function find($idlaporan)
        {
            $laporans = static::all();
            return $laporans->firstWhere('idlaporan', $idlaporan);
        }
}