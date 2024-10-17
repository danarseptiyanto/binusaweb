<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'wa-ortu',
        'wa-siswa',
        'asal-sekolah',
        'tpt-lahir',
        'tgl-lahir',
        'ibu',
        'ayah',
        'alamat',
    ];
}
