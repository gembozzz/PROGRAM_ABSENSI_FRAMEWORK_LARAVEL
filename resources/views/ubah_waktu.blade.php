@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Waktu</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Ubah Waktu</h6>
                    </div>
                        <div class="card-body">
                            <form method="POST" action="{{ url('/ubah_waktu') }}">
                            <input type="hidden" name="id" value="{{ $waktu->id }}">
                                @csrf
                                <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hari</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="hari" name="hari" readonly value="{{ $waktu->hari }}">
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="inputtime" class="col-sm-2 col-form-label">Waktu masuk</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" id="inputtime" name="waktu_masuk" value="{{ $waktu->waktu_masuk }}">
                                </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputtime" class="col-sm-2 col-form-label">Waktu pulang</label>
                                    <div class="col-sm-10">
                                    <input type="time" class="form-control" id="inputtime" name="waktu_pulang" value="{{ $waktu->waktu_pulang }}">
                                    </div>
                                </div>
                            
                            <div class="my-2">
                                <button type="submit" class="btn btn-secondary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Ubah</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>

@endsection

@section ('title')

{{'Ubah Waktu'}}

@endsection