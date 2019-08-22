<?php

namespace App\Http\Controllers;

use App\Paket;
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

    public function store(Request $request)
    {
        Paket::create($request->all());
        return redirect()->back();
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
