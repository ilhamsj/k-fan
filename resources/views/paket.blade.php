@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('paket.store') }}" method="post">
        @csrf
        <input type="text" name="nama" placeholder="Nama Paket">
        <input type="text" name="deskripsi" placeholder="Deskripsi Paket">
        <button type="submit">Save</button>
    </form>
</div>

<div class="container">
    @forelse ($items as $item)
        <p>
            {{$item->nama}}
            {{$item->deskripsi}}
        </p>
    @empty
        Empty
    @endforelse
</div>
@endsection

@push('scripts')
    <script>
        console.log('here i\'m');
    </script>
@endpush