@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')

<div class="container">
    <form action="{{ route('paket.store') }}" method="post">
        @csrf
        <p>
            <select name="nama[]" multiple="multiple" class="js-example-basic-single">
                @foreach ($items as $item)
                    <option value="{{ $item->nama }}">{{ $item->nama  }}</option>
                @endforeach
            </select>
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