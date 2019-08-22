@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    @include('produk')
    @include('paket')
    @include('layanan')
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