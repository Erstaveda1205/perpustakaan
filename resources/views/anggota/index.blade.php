@extends('layout.master')

@section('title', 'Anggota')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Anggota</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Anggota</h4>
                        <div class="card-header-form">
                            <button class="btn btn-sm btn-success" type="button" data-target="#modal-tambah"
                                data-toggle="modal">Tambah Data Anggota</button>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-stripped" id="table">
                            <thead>
                                <tr>
                                    <th style="width: 5%">#</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Telfon</th>
                                    <th>Alamat</th>
                                    <th>Tempat Lahir</th>
                                    <th style="width: 15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($anggota as $member)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $member->kode }}</td>
                                        <td>{{ $member->nama }}</td>
                                        <td>{{ $member->jenis_kelamin }}</td>
                                        <td>{{ $member->telfon }}</td>
                                        <td>{{ $member->alamat }}</td>
                                        <td>{{ $member->tempat_lahir }}</td>
                                        <td>
                                            <form action="/anggota/{{ $member->id }}" id="delete-form{{ $member->id }}">
                                                @method('delete')
                                                <a href="/anggota/{{ $member->id }}/edit" class="btn btn-sm btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-danger"
                                                    onclick="confirmDelete('delete-form{{ $member->id }}')">
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
    @include('anggota.form')
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
