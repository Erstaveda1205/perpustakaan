@extends('layout.master')

@section('title', 'Penerbit')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Penerbit</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Penerbit</h4>
                        <div class="card-header-form">
                            <button class="btn btn-sm btn-success" type="button" data-target="#modal-tambah"
                                data-toggle="modal">Tambah Data Penerbit</button>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-stripped" id="table">
                            <thead>
                                <tr>
                                    <th style="width: 10%">#</th>
                                    <th>Kode</th>
                                    <th>Nama Penerbit</th>
                                    <th style="width: 15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penerbit as $penerbitan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $penerbitan->kode }}</td>
                                        <td>{{ $penerbitan->nama }}</td>
                                        <td>
                                            <form action="/penerbit/{{ $penerbitan->id }}"
                                                id="delete-form{{ $penerbitan->id }}">
                                                @method('delete')
                                                <a href="/penerbit/{{ $penerbitan->id }}/edit" class="btn btn-sm btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-danger"
                                                    onclick="confirmDelete('delete-form{{ $penerbitan->id }}')">
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
    @include('penerbit.form')
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
