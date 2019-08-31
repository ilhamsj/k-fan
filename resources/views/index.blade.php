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
                                <img data-src="holder.js/900x400/auto/#777:#555/text:First slide" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img data-src="holder.js/900x400/auto/#666:#444/text:Second slide" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img data-src="holder.js/900x400/auto/#666:#444/text:Third slide" alt="Third slide">
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
            <div class="row justify-content-center">
                <div class="col-md-12 mb-4 mt-4">
                    <h3>Paket yang kami tawarkan</h3>
                </div>
                @foreach ($pakets as $paket)
                <div class="col-md-4 mb-4 text-center">
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
                <div class="col-md-3 mb-4">
                    <div class="card-deck">
                        <div class="card text-center">
                            <img class="card-img-top img-fluid" src="https://picsum.photos/400/200" alt="">
                            <div class="card-body">
                                <h4 class="card-title">
                                    {{$produk->nama}}
                                </h4>
                                <p class="card-text">Text</p>
                            </div>
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