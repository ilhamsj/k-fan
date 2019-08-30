<div class="container">
    <h2>Produk</h2>
    <form id="tambahProdukForm" action="{{ route('produk.store') }}" method="post">
        @csrf
            <div class="form-group">
                <input class="form-control" type="text" name="nama" placeholder="Nama Produk" value="{{ old('produk') ? old('produk'): "" }}">
                @error('nama')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <input class="form-control" type="number" name="jumlah" placeholder="Jumlah Produk" value="{{ old('jumlah') ? old('jumlah'): "" }}">
                @error('jumlah')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
                        
            <div class="form-group">
                <input class="form-control" type="text" name="satuan" placeholder="Satuan Produk" value="{{ old('satuan') ? old('satuan'): "" }}">
                @error('satuan')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
                        
            <div class="form-group">
                <input class="form-control" type="number" name="harga" placeholder="Harga Produk" value="{{ old('harga') ? old('harga'): "" }}">
                @error('harga')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        <button type="submit" id="save" class="btn btn-primary btn-block">Save</button>
    </form>
    <button id="tambahProdukButton" class="btn btn-primary btn-sm mt-2">Show</button>
</div>

<div class="container mt-4">
    <div class="table-responsive-sm">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($produks as $item)
                    <tr>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->jumlah}}</td>
                        <td>{{$item->satuan}}</td>
                        <td>{{$item->harga}}</td>
                        @empty
                            <td colspan="4">Empty</td>
                        @endforelse
                    </tr>
            </tbody>
        </table>
    </div>
</div>