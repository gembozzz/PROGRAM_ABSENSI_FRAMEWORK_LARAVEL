@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>
                    </div>

                    <!--tambah data siswa-->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detail Data Siswa</h6>
                        </div>         
                        <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kode Siswa</label>
                                    <div class="col-sm-2">
                                        <input name="kode_siswa" readonly type="text" class="form-control" value="{{ $siswa->kode_siswa }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Siswa</label>
                                    <div class="col-sm-4">
                                        <input name="nama_siswa" readonly type="text" class="form-control" value="{{ $siswa->nama_siswa }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NISN</label>
                                    <div class="col-sm-2">
                                        <input name="nisn" readonly type="text" class="form-control" value="{{ $siswa->nisn }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-2">
                                        <input name="jenis_kelamin" readonly type="text" class="form-control" value="{{ $siswa->jenis_kelamin }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-7">
                                        <input name="alamat" readonly type="text" class="form-control" id="inputAlamat" value="{{ $siswa->alamat }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> No Telepon</label>
                                    <div class="col-sm-2">
                                        <input name="no_telepon" readonly type="text" class="form-control" value="{{ $siswa->telepon }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-2">
                                        <input name="tempat_lahir" readonly type="text" class="form-control" value="{{ $siswa->tempat_lahir }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-2">
                                        <input name="tanggal_lahir" readonly type="date" class="form-control" value="{{ $siswa->tanggal_lahir }}">
                                    </div>
                                    </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-4">
                                        <input name="email" readonly type="email" class="form-control" id="staticEmail" value="{{ $siswa->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Asal Sekolah</label>
                                    <div class="col-sm-4">
                                        <input name="asal_sekolah" readonly type="text" class="form-control" value="{{ $siswa->asal_sekolah }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Angkatan</label>
                                    <div class="col-sm-2">
                                    <input name="angkatan" readonly type="text" class="form-control" value="{{ $siswa->angkatan }}">
                                    </div>
                                </div>
                            
                            <div class="my-2">
                                <a href="/data_siswa" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-left"></i>
                                    </span>
                                    <span class="text">Kembali</span>
                                </a>
                            </div>
                        </div>           
                    </div>
                

@endsection

@section ('title')

{{'Detail Siswa'}}

@endsection