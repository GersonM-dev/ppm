<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = [
        'order_date',
        'address',
        'total_amount',
        'nama'
    ];

    public function detailPemesanans()
    {
        return $this->hasMany(DetailPemesanan::class);
    }
}
