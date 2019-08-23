<div class="container mb-4">
    <h2>Tambah Paket</h2>
    <form action="{{ route('paket.store') }}" method="post">
        @csrf
        <p>
            <input type="text" name="nama" placeholder="nama Paket" value="{{ old('nama') }}"> <br/>
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

<div class="container mb-4">
    <h2>List Paket</h2>
    @forelse ($pakets as $item)
        <h4>{{$item->nama}}</h4>
        <ol type="1">
            @foreach ($item->layanan as $itemLayanan)
                <li>
                    {{$itemLayanan->produk->nama}}
                </li>
            @endforeach
        </ol>
    @empty
        Empty
    @endforelse
</div>

<hr>