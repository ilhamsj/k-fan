<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Layanan;
use App\Paket;
use App\Produk;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $paket = Paket::all();

        return view('index')->with([
            'pakets'    => $paket
        ]);
    }

    public function dashboard()
    {
        return view('home');
    }

    public function user()
    {
        return User::all();
    }

    public function layanan()
    {
        return Layanan::all();
    }

    public function paket()
    {
        return Paket::all();
    }

    public function produk()
    {
        return Produk::all();
    }
}
