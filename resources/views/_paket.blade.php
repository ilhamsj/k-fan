<div class="mb-4">
    <div id="tambahPaketForm">
        <form action="{{ route('paket.store') }}" method="post">
            @csrf
            <div id="addProduct">
                <div class="products">
                    <div class="form-group">
                        <input type="text" name="nama[]" class="form-control" placeholder="Nama Paket" value="{{ old('nama') ? old('nama'): "" }}" required>
                        @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="deskripsi[]" class="form-control" placeholder="Deskripsi Paket" value="{{ old('deskripsi') ? old('deskripsi'): "" }}" required>
                        @error('deskripsi')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" id="save" class="btn btn-primary btn-block">Save</button>
        </form>
        
        <div class="mt-2">
            <button id="clone" class="btn btn-primary btn-sm">Clone input</button>
            <button id="delete" class="btn btn-danger btn-sm">Delete input</button>
        </div>
    </div>
</div>


<div class="table-responsive-sm">
    <table id="tabelPaket" class="table table-bordered">
        <thead>
            <tr>
                <th>Paket</th>
                <th>Layanan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pakets as $item)
            <tr>
                <td>
                    {{$item->nama}}
                </td>
                <td>
                        @foreach ($item->layanan as $itemLayanan)
                            {{$itemLayanan->produk->nama}},
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@push('scripts')
    <script>
        $(document).ready(function () {
            $("#delete").click(function () { 
                $(".products").not(".products:first").last().remove();
            });

            $("#clone").click(function () {
                $(".products:last").clone().prependTo("#addProduct");
            });
        });
    </script>
@endpush