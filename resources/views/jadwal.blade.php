@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Jadwal</h1>
                    </div>
                    @if(session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                    {{ session()->get('pesan') }}
                    </div>
                    @endif


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <a href="/tambah_jadwal" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Tambah Jadwal</span>
                                </a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @forelse ($jadwals as $jadwal)
                                        <tr>
                                            <td>{{ $jadwal->id }}</td>
                                            <td>{{ $jadwal->tanggal }}</td>
                                            <td>{{ $jadwal->keterangan }}</td>
                                            <td>
                                            </a>
                                            <div class="my-2"></div>
                                            <a href="/ubah_jadwal/{{$jadwal->id}}" class="btn-sm btn-warning btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Ubah</span>
                                            </a>
                                            <a href="hapus_jadwal/{{ $jadwal->id }}" class="btn-sm btn-danger btn-icon-split" 
                                                    onclick="return confirm('Anda yakin ingin menghapus data')">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-trash"></i>
                                                    </span>
                                                    <span class="text">Hapus</span>
                                                </a>
                                        </tr>
                                        @empty
                                        data kosong
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


@endsection

@section ('title')

{{'Jadwal'}}

@endsection