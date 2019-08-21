<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'nama',
        'jumlah',
        'satuan',
        'harga',
    ];
}
