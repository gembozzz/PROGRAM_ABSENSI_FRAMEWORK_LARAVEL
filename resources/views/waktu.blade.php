@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Waktu</h1>
                    </div>
                    </div>
                    @if(session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                    {{ session()->get('pesan') }}
                    </div>
                    @endif
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Waktu</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Hari</th>
                                            <th>Waktu Masuk</th>
                                            <th>Waktu Pulang</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($waktus as $waktu)
                                        <tr>
                                            <td>{{ $waktu->id }}</td>
                                            <td>{{ $waktu->hari }}</td>
                                            <td>{{ $waktu->waktu_masuk }}</td>
                                            <td>{{ $waktu->waktu_pulang }}</td>
                                            <td>
                                                <a href="/ubah_waktu/{{ $waktu->id }}" class="btn btn-secondary btn-icon-split btn-sm">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Ubah</span>
                                            </td>
                                        </tr>
                                        @empty
                                        data kosong
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

@endsection

@section ('title')

{{'Waktu'}}

@endsection