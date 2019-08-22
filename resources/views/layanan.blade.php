<div class="container">
    <h2>Tambah Layanan</h2>
    <form action="{{ route('layanan.store') }}" method="post">
        @csrf
        <p>
            <select name="paket_id" class="js-example-basic-single">
                @foreach ($items as $item)
                    <option value="{{ $item->id }}">{{ $item->nama  }}</option>
                @endforeach
            </select>
            @error('paket_id')
                {{ $message }}
            @enderror
        </p>
        <p>
            <select name="produk_id[]" multiple="multiple" class="js-example-basic-single">
                @foreach ($produks as $item)
                    <option value="{{ $item->id }}">{{ $item->nama  }}</option>
                @endforeach
            </select>
            @error('produk_id')
                {{ $message }}
            @enderror
        </p>
        <button type="submit" id="save">Save</button>
    </form>
</div>

<div class="container mt-4">
    <h2>List Layanan</h2>
    @forelse ($layanans as $item)
        <p>
            {{$item->paket_id}}
        </p>
    @empty
        Empty
    @endforelse
</div>

<hr>