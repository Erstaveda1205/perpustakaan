@extends('layout.master')

@section('title', 'Edit Data Penerbit')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Penerbit</h1>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data Penerbit</h4>
                    </div>

                    <div class="card-body">
                        <form action="/penerbit/{{$penerbit->id}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="kode">Kode Penerbit</label>
                                <input type="text" name="kode" id="kode" class="form-control" value="{{$penerbit->kode}}">
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama Penerbit</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="{{$penerbit->nama}}">
                            </div>

                            <button class="btn btn-sm btn-warning" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
