<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = "matakuliah";
    protected $fillable = [
        'nama',
        'semester',
        'sks_teori',
        'sks_praktikum',
        'jurusan_id'
    ];

    function jurusan() {
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }
}
