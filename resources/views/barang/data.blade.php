<table class="table table-compact table-stripped" id="myTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Produk</th>
            <th>Satuan</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
            <th>Ditarik</th>
            <th>User</th>
    
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barang as $p)
        <tr>
            <td>{{ $i = !isset($i)?$i=1:++$i}}</td>
            <td>{{ $p->kode_barang}}</td>
            <td>{{ $p->nama_barang}}</td>
            <td>{{ $p->id_produk}}</td>
            <td>{{ $p->Satuan}}</td>
            <td>{{ $p->harga_barang}}</td>
            <td>{{ $p->stok_barang}}</td>
            <td>{{ $p->Ditarik}}</td>
            <td>{{ $p->id_user}}</td>
            
            <td>
                <button type="button" class="btn btn-primary btn-edit" data-toggle="modal"
                 data-target="#formBarangEdit" data-mode="edit" data-id="{{ $p->id}}" 
                 data-nama_produk="{{ $p->nama_barang}}">
                    <i class="fas fa-edit"></i>
                </button>
                </a>
                <form method="post" action="produk/{{$p->id}}" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn delete-data btn-danger" data-nama_produk="{{ $p->nama_barang}}">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>