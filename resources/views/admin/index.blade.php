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
        $('.js-example-basic-single').select2({
            theme: 'bootstrap4',
            placeholder: "Pilih Paket",
        });

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