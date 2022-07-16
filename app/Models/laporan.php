<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'tanggal_laporan'];
    public $incrementing = false;

    public function detail_laporan()
    {
        return $this->hasMany(detail_laporan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
