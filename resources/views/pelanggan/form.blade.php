<!-- Modal -->
<div class="modal fade" id="pelangganFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="pelanggan">
                    @csrf
                <form>
                    <div class="form-group row">
                        

                        <label for="nama_pelanggan" class="col-sm-2 col-form-label">Kode Pelanggan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Pelanggan" name="kode_pelanggan">
                        </div>

                        <label for="nama_pelanggan" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Pelanggan" name="nama">
                        </div>

                        <label for="nama_pelanggan" class="col-sm-2 col-form-label">No_telp</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Pelanggan" name="no_telp">
                        </div>

                        <label for="nama_pelanggan" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Pelanggan" name="email">
                        </div>
                        
                        <label for="nama_pelanggan" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Pelanggan" name="alamat">
                        </div>
                        
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
            </form>
        </div>
    </div>
</div>