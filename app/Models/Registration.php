<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'jenis_kelamin',
        'ttl',
        'kewarganegaraan',
        'gelombang',
        'abk',
        'alamat',
        'nama_ayah',
        'nama_ibu',
        'daerah',
        'no_hp_ayah',
        'no_hp_ibu',
        'tlp',
        'email',
        'info_dari',
    ];
}
