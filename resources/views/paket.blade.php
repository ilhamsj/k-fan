@extends('layouts.app')

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')

<div class="container">
    <form action="{{ route('paket.store') }}" method="post">
        @csrf
        <p>
            {{ 'hello' == 'hello' ? 'true' : 'false' }}
            <select name="nama" id="">
                <option value="{{ old('nama') }}">{{ old('nama') }}</option>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.min.js"></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
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