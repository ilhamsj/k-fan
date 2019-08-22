<?php

namespace App\Http\Controllers;

use App\Paket;
use App\Http\Requests\StorePaketRequest;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        return view('paket')->with([
            'items' => Paket::all(),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(StorePaketRequest $request)
    {
        foreach ($request->nama as $item) {
            Paket::create([
                'nama' => $item,
                'deskripsi' => $request->deskripsi,
            ]);
        }
        return redirect()->back()->with([
            'status' => count($request->nama) . ' Paket Berhasil ditambahkan'
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
