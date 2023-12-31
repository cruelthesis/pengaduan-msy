<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_petugas','id_pengaduan','tgl_tanggapan', 'tanggapan'
    ];

    public function pengaduan(){
        return $this->hasOne(Pengaduan::class, 'id', 'id');
    }
}
