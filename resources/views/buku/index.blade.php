@extends('layout.master')

@section('title', 'Buku')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Buku</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Buku</h4>
                        <div class="card-header-form">
                            <button class="btn btn-sm btn-success" type="button" data-target="#modal-tambah"
                                data-toggle="modal">Tambah Data Buku</button>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-stripped" id="table">
                            <thead>
                                <tr>
                                    <th style="width: 5%">#</th>
                                    <th>Kode</th>
                                    <th>Judul</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Stok</th>
                                    <th>Tahun Terbit</th>
                                    <th style="width: 15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($buku as $jenis)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $jenis->kode }}</td>
                                        <td>{{ $jenis->judul }}</td>
                                        <td>{{ $jenis->pengarang }}</td>
                                        <td>{{ $jenis->jumlah_halaman }}</td>
                                        <td>{{ $jenis->stok }}</td>
                                        <td>{{ $jenis->tahun_terbit }}</td>
                                        <td>
                                            <form action="/buku/{{ $jenis->id }}" id="delete-form{{ $jenis->id }}">
                                                @method('delete')
                                                <a href="/buku/{{ $jenis->id }}/edit" class="btn btn-sm btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-danger"
                                                    onclick="confirmDelete('delete-form{{ $jenis->id }}')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('buku.form')
@endsection

@push('script')
    <script>
        function confirmDelete(formId) {
            event.preventDefault()
            swal({
                    title: 'Apakah anda yakin?',
                    text: 'Ketika anda menekan OK maka data anda akan terhapus',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true
                })
                .then((willDelete) => {
                    if (willDelete) {
                        document.getElementById(formId).submit();
                    }
                });
        }

        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endpush
