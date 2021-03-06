@extends('layouts.admin')

@push('styles')
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select2-bootstrap4.css') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"> --}}
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @include('_produk')
        </div>
        <div class="col-md">
            @include('_paket')
        </div>
        <div class="col-md">
            @include('_layanan')
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                theme: 'bootstrap4',
                placeholder: "Pilih Paket",
            });

            $("#tambahProdukForm, #tambahPaketForm, #tambahLayananForm").hide();

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
            $("#tambahLayananButton").click(function () {
                $("#tambahLayananForm").slideToggle();
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
    </script>
@endpush