<script>
window.print();
  </script>
                    <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Data Laporan</h1>
                  </div>

                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      
                    </div>
                    <div class="card-body">
                     
                      <div class="table-responsive">
                        <table border="1"
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
