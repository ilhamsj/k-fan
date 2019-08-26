<div class="container">
    <h2>Tambah Produk</h2>
    <form action="{{ route('produk.store') }}" method="post">
        @csrf
        <p>
            <input type="text" name="nama" placeholder="Nama Produk"> <br/>
            @error('nama')
                {{ $message }}
            @enderror
        </p>
        <p>
            <input type="number" name="jumlah" placeholder="jumlah Produk"> <br/>
            @error('jumlah')
                {{ $message }}
            @enderror
        </p>
        <p>
            <input type="text" name="satuan" placeholder="satuan Produk"> <br/>
            @error('satuan')
                {{ $message }}
            @enderror
        </p>
        <p>
            <input type="number" name="harga" placeholder="harga Produk"> <br/>
            @error('harga')
                {{ $message }}
            @enderror
        </p>

        <button type="submit" id="save">Save</button>
    </form>
</div>

<div class="container mt-4">
    <h2>List Produk</h2>
    @forelse ($produks as $item)
        {{$item->nama}} 
        <a href="{{ route('produk.edit', $item->id) }}">Edit</a>
        <a href="">Delete</a>
        <br/>
    @empty
        Empty
    @endforelse
</div>

<hr>
