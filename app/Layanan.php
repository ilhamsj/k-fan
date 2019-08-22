<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $fillable = [
        'paket_id',
        'produk_id',
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
