@extends('layout.master')

@section('title', 'Edit Data Anggota')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Anggota</h1>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data Anggota</h4>
                    </div>

                    <div class="card-body">
                        <form action="/anggota/{{$anggota->id}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="kode">Kode</label>
                                <input type="text" name="kode" id="kode" class="form-control" value="{{$anggota->kode}}">
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="{{$anggota->nama}}">
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="{{$anggota->jenis_kelamin}}">
                            </div>

                            <div class="form-group">
                                <label for="telfon">Telfon</label>
                                <input type="text" name="telfon" id="telfon" class="form-control" value="{{$anggota->telfon}}">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" value="{{$anggota->alamat}}">
                            </div>

                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{$anggota->tempat_lahir}}">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{$anggota->tanggal_lahir}}">
                            </div>

                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" name="foto" id="foto" class="form-control" value="{{$anggota->foto}}">
                            </div>

                            <button class="btn btn-sm btn-warning" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
