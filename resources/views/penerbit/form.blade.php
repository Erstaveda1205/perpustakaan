<!-- Modal -->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penerbit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/penerbit/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode Penerbit</label>
                        <input type="text" name="kode" id="kode" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Penerbit</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>

                    <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
