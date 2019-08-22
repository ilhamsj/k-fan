<div class="container">
    <h2>Tambah Layanan</h2>
    <form action="{{ route('layanan.store') }}" method="post">
        @csrf
        <p>
            <select name="nama[]" multiple="multiple" class="js-example-basic-single">
                @foreach ($produks as $item)
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
    <h2>List Layanan</h2>
    @forelse ($layanans as $item)
        <h3>{{$item->paket_id}}</h3>
    @empty
        Empty
    @endforelse
</div>

<hr>