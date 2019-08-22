<?php

namespace App\Http\Controllers;

use App\Paket;
use App\Produk;
use App\Layanan;
use App\Http\Requests\StorePaketRequest;
use App\Http\Requests\StoreProdukRequest;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        return view('index')->with([
            'pakets'    => Paket::all(),
            'produks'   => Produk::all(),
            'layanans'  => Layanan::all(),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(StorePaketRequest $request)
    {
        Paket::create($request->validated());
        return redirect()->back()->with([
            'status' => $request->nama . ' Paket Berhasil ditambahkan'
        ]);
    }

    public function show(Request $id)
    {
        //
    }

    public function edit(Request $id)
    {
        //
    }

    public function update(Request $request, Request $id)
    {
        //
    }

    public function destroy(Request $id)
    {
        //
    }
}
