<div class="card shadow bordered">
    <div class="card-header">
        <b class="text-primary">Data Layanan</b>
    </div>
    <div class="card-body">
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
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabelLayanan" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Paket</th>
                        <th>Layanan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($layanans as $item)
                        <tr>
                            <td scope="row">{{$item->paket->nama}}</td>
                            <td>{{$item->produk->nama}}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-outline-secondary btn-sm btn-circle">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                                <a href="" class="btn btn-outline-danger btn-sm btn-circle">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        @empty
                            <td colspan="2">Empty</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
