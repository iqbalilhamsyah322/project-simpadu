<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Databio extends Model
{
    use HasFactory;

    protected $fillable = [
        'jumlah_sd',
        'jumlah_smp',
        'jumlah_sma',
        'jumlah_kuliah',
        'pdam',
        'pln',
        'rumah',
        'daya_pln',
        'beasiswa',
    ];

    public function databio()
    {
        return $this->belongsTo(Databio::class);
    }
}
