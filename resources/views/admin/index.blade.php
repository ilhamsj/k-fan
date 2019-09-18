@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md mb-4">
            <div class="card shadow bordered">
                <div class="card-header">
                    <b class="text-primary">Data Produk</b>
                </div>
                <div class="card-body">
                    @include('_produk')
                </div>
            </div>
        </div>
        <div class="col-md mb-4">
            <div class="card shadow bordered">
                <div class="card-header">
                    <b class="text-primary">Data Paket</b>
                </div>
                <div class="card-body">
                    @include('_paket')
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            @include('_layanan')
        </div>
    </div>
</div>
@endsection

@push('styles')
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                theme: 'bootstrap4',
                placeholder: "Pilih Paket",
            });

            $("#tambahProdukButton").click(function () {
                $("#tambahProdukForm").slideToggle();
                var curText = $(this).text() == "Show" ? "Hide": "Show";
                $(this).html(curText);
            });
            $("#tambahPaketButton").click(function () {
                $("#tambahPaketForm").slideToggle();
                var curText = $(this).text() == "Show" ? "Hide": "Show";
                $(this).html(curText);
            });
        });
    </script>
    @if (session('status'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: '{{ session('status') }}',
                type: 'success',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $('#tabelPaket, #tabelLayanan, #tabelProduk').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'pdfHtml5',
                        orientation: 'portrait',
                        pageSize: 'A4'
                    },
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'print',
                    // 'colvis',
                ]
            });
        });

        $(".card-header").click(function (e) { 
            e.preventDefault();
            console.log('safjk');
            $(this).next().slideToggle('slow');
        });
    </script>
@endpush