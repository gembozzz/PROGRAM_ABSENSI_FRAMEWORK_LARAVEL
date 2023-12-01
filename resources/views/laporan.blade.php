@extends('layouts.admin')

@section('content')
                    <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Data Laporan</h1>
                  </div>

                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      
                    </div>
                    <div class="card-body">
                      <div class="mb-2">
                        <form class="form-inline" action="{{ url('/laporan') }}" method="POST" >
                          @csrf
                          <label for="dari">Dari : </label>
                          <input type="date" id="dari" name="tgl_awal" class="form-control" style="margin: 2px;" required>
                          &nbsp;
                          <label for="s/d">s/d : </label>
                          <input type="date" id="s/d" name="tgl_akhir" class="form-control" style="margin: 2px;" required>
                          <div class="form-inline">
                            &nbsp;
                            <input type="submit" value="cari" name="kirim" class="btn btn-primary" style="margin: 2px;">
                            <input type="submit" value="cetak" name="kirim" class="btn btn-warning" style="margin: 2px;">
                            <input type="submit" value="export" name="kirim" class="btn btn-success" style="margin: 2px;">

                          </div>
                        </form>                  
                      </div>
                      <div class="table-responsive">
                        <table
                          class="table table-bordered"
                          id="dataTable"
                          width="100%"
                          cellspacing="0"
                        >
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama Siswa</th>
                              <th>Tanggal</th>
                              <th>Hari</th>
                              <th>Waktu Masuk</th>
                              <th>Waktu Pulang</th>
                              <th>Keterangan</th>
                            </tr>
                          </thead>
                          <tbody>
                          @forelse ($laporans as $i=>$laporan)
                            <tr>
                              <td>{{ $i+1}}</td>
                              <td>{{ $laporan->siswa->nama_siswa }}</td>
                              <td>{{ $laporan->tanggal }}</td>
                              <td>{{ $laporan->hari }}</td>
                              <td>{{ $laporan->waktu_masuk }}</td>
                              <td>{{ $laporan->waktu_pulang }}</td>
                              <td>{{ $laporan->keterangan }}</td>
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

{{'Laporan'}}

@endsection