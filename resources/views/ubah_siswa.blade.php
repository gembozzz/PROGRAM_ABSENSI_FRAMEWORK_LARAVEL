@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>
                    </div>

                    <!--tambah data siswa-->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Ubah Data Siswa</h6>
                        </div>         
                        <div class="card-body">
                            <form method="POST" action="{{ url('/ubah_siswa') }}">
                            <input type="hidden" name="id" value="{{ $siswa->id }}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kode Siswa</label>
                                    <div class="col-sm-2">
                                        <input name="kode_siswa" readonly type="text" class="form-control" value="{{ $siswa->kode_siswa }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Siswa</label>
                                    <div class="col-sm-4">
                                        <input name="nama_siswa" type="text" class="form-control" value="{{ $siswa->nama_siswa }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NISN</label>
                                    <div class="col-sm-2">
                                        <input name="nisn" type="text" class="form-control" value="{{ $siswa->nisn }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-2">
                                        <select name="jenis_kelamin" class="form-control" id="inputJenisKelamin">
                                            <option value="jenis kelamin" style="text-align: center;">-Jenis Kelamin-</option>
                                            <option value="Laki-Laki" @if($siswa->jenis_kelamin=='Laki-Laki') selected @endif>Laki-Laki</option>
                                            <option value="Perempuan" @if($siswa->jenis_kelamin=='Perempuan') selected @endif>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-7">
                                        <input name="alamat" type="text" class="form-control" id="inputAlamat" value="{{ $siswa->alamat }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> No Telepon</label>
                                    <div class="col-sm-2">
                                        <input name="no_telepon" type="text" class="form-control" value="{{ $siswa->telepon }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-2">
                                        <input name="tempat_lahir" type="text" class="form-control" value="{{ $siswa->tempat_lahir }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-2">
                                        <input name="tanggal_lahir" type="date" class="form-control" value="{{ $siswa->tanggal_lahir }}">
                                    </div>
                                    </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-4">
                                        <input name="email" type="email" class="form-control" id="staticEmail" value="{{ $siswa->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Asal Sekolah</label>
                                    <div class="col-sm-4">
                                        <input name="asal_sekolah" type="text" class="form-control" value="{{ $siswa->asal_sekolah }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Angkatan</label>
                                    <div class="col-sm-2">
                                        <select name="angkatan" class="form-control" id="inputJenisKelamin">
                                            <option value="angkatan" style="text-align: center;">-Angkatan-</option>
                                            <option value="2015" @if($siswa->angkatan=='2015') selected @endif>2015</option>
                                            <option value="2016" @if($siswa->angkatan=='2016') selected @endif>2016</option>
                                            <option value="2017" @if($siswa->angkatan=='2017') selected @endif>2017</option>
                                            <option value="2018" @if($siswa->angkatan=='2018') selected @endif>2018</option>
                                            <option value="2019" @if($siswa->angkatan=='2019') selected @endif>2019</option>
                                            <option value="2020" @if($siswa->angkatan=='2020') selected @endif>2020</option>
                                            <option value="2021" @if($siswa->angkatan=='2021') selected @endif>2021</option>
                                            <option value="2022" @if($siswa->angkatan=='2022') selected @endif>2022</option>
                                            <option value="2023" @if($siswa->angkatan=='2023') selected @endif>2023</option>
                                        </select>
                                    </div>
                                </div>
                            
                            <div class="my-2">
                                <button type="submit" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-save"></i>
                                    </span>
                                    <span class="text">Simpan</span>
                                </button>
                            </div>
                        </div>           
                    </div>
                </form>

@endsection

@section ('title')

{{'Ubah Siswa'}}

@endsection