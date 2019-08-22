@extends('layouts.app')

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
<div class="container">
    <form action="{{ route('paket.store') }}" method="post">
        @csrf
        <p>
            <input type="text" name="nama" placeholder="Nama Paket" value="{{ old('nama') }}"> <br/>
            @error('nama')
                {{ $message }}
            @enderror
        </p>
        <p>
            <input type="text" name="deskripsi" placeholder="Deskripsi Paket" value="{{ old('deskripsi') }}"> <br/>
            @error('deskripsi')
                {{ $message }}
            @enderror
        </p>
        <button type="submit" id="save">Save</button>
    </form>
</div>

<div class="container mt-4">
    @forelse ($items as $item)
        {{$item->nama}}
        {{$item->deskripsi}}<br/>
    @empty
        Empty
    @endforelse
</div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.min.js"></script>

    {{-- SweetAlert2 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.js"></script>
    <script>
        Swal.fire({
            title: 'Warning!',
            text: 'Do you want to continue',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Cool',
            cancelButtonText: 'Cool'
        })

        $('#save').click(function () { 
            Swal.fire({
                title: 'Warning!',
                text: 'Do you want to continue',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Cool',
                cancelButtonText: 'Cool'
            })            
        });
    </script>

@endpush