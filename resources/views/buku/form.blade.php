<!-- Modal -->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/buku/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" name="kode" id="kode" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pengarang">pengarang</label>
                        <input type="text" name="pengarang" id="pengarang" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jumlah_halaman">jumlah_halaman</label>
                        <input type="text" name="jumlah_halaman" id="jumlah_halaman" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="stok">stok</label>
                        <input type="text" name="stok" id="stok" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tahun_terbit">tahun_terbit</label>
                        <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="sinopsis">sinopsis</label>
                        <input type="text" name="sinopsis" id="sinopsis" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="gambar">gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control">
                    </div>

                    <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
