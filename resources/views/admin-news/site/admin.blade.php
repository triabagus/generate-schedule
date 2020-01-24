@extends('admin-news.layouts.master')

@section('title')
  {{ $title = 'Dashboard' }}
@stop

@section('content')
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
      <div class="row">
          <div class="col-5 align-self-center">
              <h4 class="page-title">{{ $title }}</h4>
              <div class="d-flex align-items-center">

              </div>
          </div>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->

  
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
    
    <!-- ============================================================== -->
    <!-- Info box -->
    <!-- ============================================================== -->
    <div class="card-group">
        <!-- Card -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="m-r-10">
                        <span class="btn btn-circle btn-lg bg-danger">
                            <i class="ti-time text-white"></i>
                        </span>
                    </div>
                    <div>
                        Total Waktu

                    </div>
                    <div class="ml-auto">
                        <h2 class="m-b-0 font-light">{{ $times }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card -->
        <!-- Card -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="m-r-10">
                        <span class="btn btn-circle btn-lg btn-info">
                            <i class="ti-calendar text-white"></i>
                        </span>
                    </div>
                    <div>
                        Total Hari

                    </div>
                    <div class="ml-auto">
                        <h2 class="m-b-0 font-light">{{ $days }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card -->
        <!-- Card -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="m-r-10">
                        <span class="btn btn-circle btn-lg bg-success">
                            <i class="ti-home text-white"></i>
                        </span>
                    </div>
                    <div>
                        Total Kelas

                    </div>
                    <div class="ml-auto">
                        <h2 class="m-b-0 font-light">{{ $rooms }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card -->
        <!-- Card -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="m-r-10">
                        <span class="btn btn-circle btn-lg bg-warning">
                            <i class="ti-book text-white"></i>
                        </span>
                    </div>
                    <div>
                        Total Mata Pelajaran

                    </div>
                    <div class="ml-auto">
                        <h2 class="m-b-0 font-light">{{ $courses }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card -->
        <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- Info box -->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- Info box -->
    <!-- ============================================================== -->
    <div class="row">

      <div class="col-lg-4">
          <div class="card bg-primary text-white">
              <div class="card-body">
                  <div class="d-flex">
                      <div class="m-r-20 align-self-center">
                          <h1 class="text-white">
                              <i class="mdi mdi-creation"></i>
                          </h1>
                      </div>
                      <div>
                          <h4 class="card-title">Jumlah Jadwal</h4>
                          <h6 class="text-white op-5">Total Generate Jadwal</h6>
                      </div>

                  </div>

                  <div class="row m-t-20 align-items-center">
                      <div class="col-5">
                          <h3 class="font-light text-white">{{ $schedules}} Jadwal</h3>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card bg-cyan text-white">
              <div class="card-body">
                  <div class="d-flex">
                      <div class="m-r-20 align-self-center">
                          <h1 class="text-white">
                              <i class="ti-user"></i>
                          </h1>
                      </div>
                      <div>
                          <h4 class="card-title">Total Guru</h4>
                          <h6 class="text-white op-5">Guru Pengajar</h6>
                      </div>

                  </div>

                  <div class="row m-t-20 align-items-center">
                      <div class="col-4">
                          <h3 class="font-light text-white">{{ $lecturers }} Guru</h3>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-4">
          <div class="card bg-warning text-white">
              <div class="card-body">
                  <div class="d-flex">
                      <div class="m-r-20 align-self-center">
                          <h1 class="text-white">
                              <i class="ti-agenda"></i>
                          </h1>
                      </div>
                      <div>
                          <h4 class="card-title">Jumlah Kegiatan</h4>
                          <h6 class="text-white op-5">Total Kegiatan Jadwal</h6>
                      </div>

                  </div>

                  <div class="row m-t-20 align-items-center">
                      <div class="col-6">
                          <h3 class="font-light text-white">{{ $teachs }} Kegiatan</h3>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card bg-danger text-white">
              <div class="card-body">
                  <div class="d-flex">
                      <div class="m-r-20 align-self-center">
                          <h1 class="text-white">
                              <i class="ti-user"></i>
                          </h1>
                      </div>
                      <div>
                          <h4 class="card-title">Total User</h4>
                          <h6 class="text-white op-5">Admin Pengatur Jadwal</h6>
                      </div>

                  </div>

                  <div class="row m-t-20 align-items-center">
                      <div class="col-4">
                          <h3 class="font-light text-white">{{ $users }} Orang</h3>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-lg-4">
        <div class="card bg-light-info no-card-border">
            <div class="card-body text-center">
                <div class="profile-pic m-b-20 m-t-20">
                    <img src="{{ URL('images/logo-andalus.png') }}" width="92" class="rounded-circle" alt="user">
                    <h4 class="m-t-20 m-b-0">{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}</h4>
                    <a href="mailto:{{ isset(Auth::user()->email) ? Auth::user()->email : '' }}">{{ isset(Auth::user()->email) ? Auth::user()->email : '' }}</a>
                </div>
            </div>
            <div class="p-25 border-top m-t-15">
                <div class="row text-center">
                    <div class="col-6 border-right">
                        <a href="#" class="link d-flex align-items-center justify-content-center font-medium">
                        <i class="ti-help-alt font-20 m-r-5"></i>Bantuan</a>
                    </div>
                    <div class="col-6">
                        <a href="#" class="link d-flex align-imdi mdi-developer-boardtems-center justify-content-center font-medium">
                        <i class="ti-desktop font-20 m-r-5"></i>Website</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
    </div>
    <!-- ============================================================== -->
    <!-- Info box -->
    <!-- ============================================================== -->

  </div>
  <!-- ============================================================== -->
  <!-- End Container fluid  -->
  <!-- ============================================================== -->

@stop