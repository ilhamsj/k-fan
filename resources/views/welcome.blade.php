@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col">
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" data-src="holder.js/900x400?auto=yes&textmode=exact&random=yes" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" data-src="holder.js/900x400?auto=yes&textmode=exact&random=yes" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" data-src="holder.js/900x400?auto=yes&textmode=exact&random=yes" alt="Second slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-4 mt-4">
                    <h3>Paket yang kami tawarkan</h3>
                </div>
                @foreach ($pakets as $paket)
                <div class="col-6 col-md-4 mb-4 text-center">
                    <div class="card h-100 shadow-sm">
                        <img class="card-img-top" data-src="holder.js/900x600?auto=yes&text={{ $paket->nama }}&random=yes" alt="Second slide">
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
                        <div class="card-footer mt-auto">
                            <a href="" class="btn btn-secondary btn-sm">Details</a>
                            <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modelId">Order</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-md-12 mb-4">
                    <h3>Produk yang tersedia</h3>
                </div>
                @foreach ($produks as $produk)
                <div class="col-6 col-md-3 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" data-src="holder.js/900x600?auto=yes&textmode=exact&random=yes" alt="Second slide">
                        <div class="card-body">
                            <h5>{{$produk->nama}}</h5>
                            {{$produk->harga}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@include('_order')
@endsection