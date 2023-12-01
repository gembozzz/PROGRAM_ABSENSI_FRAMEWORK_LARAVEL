 @extends('layouts.admin')

 @section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Profil</h1>
                    </div>

                        <section style="background-color: #eee;">
                      
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="card mb-4">
                                <div class="card-body text-center">
                                  <img src="{{ asset('image/' .Auth::user()->foto) }}" alt="avatar"
                                    class="rounded-circle img-fluid" style="width: 150px;">
                                    
                                  <h5 class="my-3">Sistem Aplikasi</h5>
                                  <p class="text-muted mb-1">Full Stack Developer</p>
                                  <p class="text-muted mb-4">Metro, Lampung, Indonesia</p>
                                  <div class="d-flex justify-content-center mb-2">
                                    <button type="button" class="btn btn-primary" >Follow</button>
                                    <button type="button" class="btn btn-outline-primary ms-1" style="margin-left: 10px;">Message</button>
                                  </div>
                                </div>
                              </div>
                              <div class="card mb-4 mb-lg-0">
                                <div class="card-body p-0">
                                  <ul class="list-group list-group-flush rounded-3">
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                      <i class="fas fa-globe fa-lg text-warning"></i>
                                      <p class="mb-0">https://sistemabsensi.com</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                      <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                      <p class="mb-0">imsiap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                      <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                      <p class="mb-0">@imsiap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                      <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                      <p class="mb-0">imsiap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                      <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                      <p class="mb-0">SIAB</p>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-8">
                                    <h4 class="text-center mt-3">Selamat Datang!!!</h4>
                                <hr>
                              <div class="card mb-4">
                                <div class="card-body">
                                    <form method="POST" action="{{ url('/setting_profile') }}">
                                      @csrf
                                        <div class="mb-3">
                                          <label for="exampleInputUsername1" class="form-label">Username</label>
                                          <input type="text" class="form-control" id="exampleInputUsername1" name="username" value="{{ Auth::user()->username }}">
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputPassword1" class="form-label">Password</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                        </div>
                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                      <p class="mb-4"><span class="text-primary font-italic me-1"></span> Project Status
                                      </p>
                                      <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                      <div class="progress rounded mb-2" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                      <p class="mb-4"><span class="text-primary font-italic me-1"></span> Project Status
                                      </p>
                                      <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                      <div class="progress rounded mb-2" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
@endsection

@section ('title')

{{'Setting Profile'}}

@endsection