<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = "nilai";
    protected $fillable = [
        'mahasiswa',
        'matakuliah_id',
        'nilai_harian',
        'nilai_uts',
        'nilai_akhir',
        'grade'
    ];

    function mahasiswa() {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
    }

    function matakuliah() {
        return $this->belongsTo(Matakuliah::class, 'matakuliah_id', 'id');
    }
}
