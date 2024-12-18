@extends('layout.master')

@section('title', 'Edit Data Buku')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Buku</h1>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data Buku</h4>
                    </div>

                    <div class="card-body">
                        <form action="/buku/{{$buku->id}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="kode">Kode</label>
                                <input type="text" name="kode" id="kode" class="form-control" value="{{$buku->kode}}">
                            </div>

                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" id="judul" class="form-control" value="{{$buku->judul}}">
                            </div>

                            <div class="form-group">
                                <label for="pengarang">Pengarang</label>
                                <input type="text" name="pengarang" id="pengarang" class="form-control" value="{{$buku->pengarang}}">
                            </div>

                            <div class="form-group">
                                <label for="jumlah_halaman">Jumlah Halaman</label>
                                <input type="text" name="jumlah_halaman" id="jumlah_halaman" class="form-control" value="{{$buku->jumlah_halaman}}">
                            </div>

                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="text" name="stok" id="stok" class="form-control" value="{{$buku->stok}}">
                            </div>

                            <div class="form-group">
                                <label for="tahun_terbit">Tahun Terbit</label>
                                <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control" value="{{$buku->tahun_terbit}}">
                            </div>

                            <div class="form-group">
                                <label for="sinopsis">Sinopsis</label>
                                <input type="text" name="sinopsis" id="sinopsis" class="form-control" value="{{$buku->sinopsis}}">
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control" value="{{$buku->gambar}}">
                            </div>

                            <button class="btn btn-sm btn-warning" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
