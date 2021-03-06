<div class="container">
    <h2>Layanan</h2>
    <form id="tambahLayananForm" action="{{ route('layanan.store') }}" method="post">
        @csrf

        <div class="form-group"> 
            <label for="">Pilih Paket</label>
            <select name="paket_id" class="form-control js-example-basic-single">
                @foreach ($pakets as $item)
                    <option value="{{ $item->id }}">{{ $item->nama  }}</option>
                @endforeach
            </select>
            @error('paket_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Pilih Produk</label>
            <select name="produk_id[]" multiple="multiple" class="form-control js-example-basic-single">
                @foreach ($produks as $item)
                    <option value="{{ $item->id }}">{{ $item->nama  }}</option>
                @endforeach
            </select>
            @error('produk_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block" id="save">Save</button>
    </form>
    <button id="tambahLayananButton" class="btn btn-primary btn-sm mt-2">Show</button>
</div>

<div class="container mt-4">
    <div class="table-responsive">
        <table id="tabelLayanan" class="table table-bordered">
            <thead>
                <tr>
                    <th>Paket</th>
                    <th>Layanan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($layanans as $item)
                    <tr>
                        <td scope="row">{{$item->paket->nama}}</td>
                        <td>{{$item->produk->nama}}</td>
                    @empty
                        <td colspan="2">Empty</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>