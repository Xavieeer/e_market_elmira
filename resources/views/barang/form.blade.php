<!-- Modal -->
<div class="modal fade" id="barangFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('barang.store')}}">
                    @csrf
                    <div class="form-group row">
                        <label for="nama_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Barang" name="kode_barang">
                        </div>
             
            
            <label for="kode_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="kode Barang" name="nama_barang">
                        </div>

                        <label for="kode_barang" class="col-sm-2 col-form-label">ID Produk</label>
                        <div class="col-sm-9">
                           <select name="produk_id" id="" class="col-sm-8">
                            @foreach ($produk as $item => $label)
                                <option value="{{$item}}">{{$label}}</option>
                            @endforeach
                           </select>
                        </div> 
                       

                        <label for="kode_barang" class="col-sm-2 col-form-label">Satuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Kategori Barang" name="satuan">
                        </div>

                        <label for="kode_barang" class="col-sm-2 col-form-label">Harga Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Kategori Barang" name="harga_jual">
                        </div>

                        <label for="kode_barang" class="col-sm-2 col-form-label">Stok Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Kategori Barang" name="stok">
                        </div>

                        <label for="kode_barang" class="col-sm-2 col-form-label">Ditarik</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Kategori Barang" name="ditarik">
                        </div>

                        <label for="kode_barang" class="col-sm-2 col-form-label">ID User</label>
                        <div class="col-sm-9">
                          <select name="user_id" id="">
                            @foreach ($user as $item => $label)
                            <option value="{{$item}}">{{ $label }}</option>
                        @endforeach
                          </select>
                        </div>
                    </div>
                <form>

                

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambahkan Barang</button>
            </div>
            </form>
        </div>
    </div>
</div>