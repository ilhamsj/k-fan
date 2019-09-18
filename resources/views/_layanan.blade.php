
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
    <div class="form-group">
        <button type="submit" class="btn btn-primary" id="save">Save</button>
    </div>
    
</form>

<div class="table-responsive mt-4">
    <table id="tabelLayanan" class="table table-bordered">
        <thead>
            <tr>
                <th>Paket</th>
                <th>Layanan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($layanans as $item)
                <tr>
                    <td scope="row">{{$item->paket->nama}}</td>
                    <td>{{$item->produk->nama}}</td>
                    <td class="text-center">
                        <a href="" class="text-secondary">
                            <i data-feather="edit"></i>
                        </a>
                        <a href="" class="text-danger">
                            <i data-feather="x-circle"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>