<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Register as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Register extends Model
{
    use HasApiTokens,HasFactory;

    protected $fillable = [
        'nama',
        'ktp',
        'tanggal',
        'agama',
        'pendidikan',
        'pekerjaan',
        'pendapatan',
        'penghasilan',
        'status',
        'alamat',
        'no_hp',
        'provinsi',
        'kab',
        'kec',
        'kel',
    ];

    public function register()
    {
        return $this->belongsTo(Register::class);
    }
}
