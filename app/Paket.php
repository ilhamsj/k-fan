<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
    ];

    public function layanan()
    {
        return $this->hasMany(Layanan::class);
    }
}
