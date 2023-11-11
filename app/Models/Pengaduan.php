<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_pengaduan', 'nik', 'isi_laporan', 'foto', 'status', 'judul'
    ];

    public function masyarakat(){
        return $this->belongsTo(Masyarakat::class, 'nik', 'nik');
    }

    public function detail(){
        return $this->hasMany(Pengaduan::class, 'id', 'id');
    }
}
