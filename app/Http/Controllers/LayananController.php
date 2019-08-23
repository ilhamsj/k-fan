<?php

namespace App\Http\Controllers;

use App\Layanan;
use App\Http\Requests\StoreLayananRequest;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(StoreLayananRequest $request)
    {
        foreach ($request->produk_id as $produk) {
            Layanan::create([
                'paket_id' => $request->paket_id,
                'produk_id' => $produk,
            ]);
        }

        return redirect()->back()->with([
            'status' => $request->nama . ' Paket Berhasil ditambahkan'
        ]);
    }

    public function show(Layanan $layanan)
    {
        //
    }

    public function edit(Layanan $layanan)
    {
        //
    }

    public function update(Request $request, Layanan $layanan)
    {
        //
    }

    public function destroy(Layanan $layanan)
    {
        //
    }
}
