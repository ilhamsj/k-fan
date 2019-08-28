@extends('layouts.admin')

@push('styles')
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @include('_produk')
        </div>
        <div class="col">
            @include('_paket')
        </div>
        <div class="col">
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
                placeholder: "Pilih Paket",
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
@endpush