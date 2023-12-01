@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Jadwal</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Jadwal</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('/tambah_jadwal') }}">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" >Tanggal</label>
                    <div class="col-sm-2">
                        <input type="date" class="form-control" name="tanggal">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" >Keterangan</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="keterangan">
                    </div>
                </div>
                <div class="my-2">
                    <button type="submit" type="submit" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-save"></i>
                        </span>
                        <span class="text">Simpan</span>
                    </button>
                </div>
            </form>

        
        </div>
    </div>

@endsection

@section ('title')

{{'Tambah Jadwal'}}

@endsection