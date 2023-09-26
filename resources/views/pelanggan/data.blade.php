<table class="table table-compact table-stripped" id="myTable">
    <thead>
        <tr>
            <th>Kode Pelanggan</th>
            <th>Kode Nama</th>
            <th>Kode Alamat</th>
            <th>Kode No_Telp</th>
            <th>Kode Email</th>
    
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pelanggan as $p)
        <tr>
            <td>{{ $p->kode_pelanggan}}</td>
            <td>{{ $p->nama}}</td>
            <td>{{ $p->alamat}}</td>
            <td>{{ $p->no_telp}}</td>

            <td>{{ $p->email}}</td>
            
            <td>
                <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#formPelangganEdit" data-mode="edit" data-id="{{ $p->id}}" data-nama_pelanggan="{{ $p->nama_pelanggan}}">
                    <i class="fas fa-edit"></i>
                </button>
                </a>
                <form method="post" action="pelanggan/{{$p->id}}" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn delete-data btn-danger" data-nama_pelanggan="{{ $p->nama_pelanggan}}">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>