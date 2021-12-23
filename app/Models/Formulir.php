<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'nisn',
        'user_id',
        'place',
        'birthday',
        'agama',
        'anak_ke',
        'jml_saudara',
        'address',
        'school',
        'gender',
        'tinggal_dengan',
        'penyakit',
        'nama_ayah',
        'nama_ibu',
        'kerja_ayah',
        'kerja_ibu',
        'pend_akhira',
        'pend_akhiri',
        'status',
        'prestasi',
        'file_prestasi',
        'no_telpayah',
        'no_telpibu',
        'ijazah',
        'rapot',
        'phone',
        'photo',
        'nilai1',
        'nilai2',

    ];
}
