<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\User;
use App\Paket;
use App\Produk;
use App\Layanan;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin')->with([
            'pakets'    => Paket::all(),
            'produks'   => Produk::all(),
            'layanans'  => Layanan::all(),
        ]);
    }

    public function user()
    {
        return view('_user');
    }
}
