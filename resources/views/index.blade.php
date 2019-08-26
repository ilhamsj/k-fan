@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center mb-4 mt-4">
            <h1>Paket yang kami tawarkan</h1>
        </div>
        @foreach ($pakets as $paket)
        <div class="col-md-3 mb-4 text-center">
            <div class="card shadow-sm">
                <img class="card-img-top img-fluid" src="https://picsum.photos/id/157/400/200">
                <div class="card-body">
                    <h4 class="card-title">{{ $paket->nama }}</h4>
                    <p class="card-text">{{ $paket->deskripsi }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    @php
                        $harga = 0;
                    @endphp
                    @foreach ($paket->layanan as $itemLayanan)
                        <li class="list-group-item">
                            {{$itemLayanan->produk->nama}}
                            @php
                                $harga += $itemLayanan->produk->harga;
                            @endphp
                        </li>
                    @endforeach
                </ul>
                <div class="card-body">
                    Harga {{$harga}}
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-secondary btn-sm">Details</a>
                    <a href="" class="btn btn-success btn-sm">Order</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection