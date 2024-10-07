<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PAP - Portal Asisten Praktikum</title>
    <!-- plugins:css -->
    
    <link rel="stylesheet" href="{{ asset('assets/vendor/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-bs4/dataTables.bootstrap4.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/ti-icons/css/themify-icons.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/select.dataTables.min.css') }}"> --}}
    
    {{-- DATA TABLE --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.7/css/dataTables.semanticui.css">
    
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}"/>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav style="color: #14246c; background-color: #14246c" class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a href="{{ url('/dashboard') }}" class="logo d-flex align-items-center me-auto">
            <img style="max-height: 36px; margin-right: 8px" src="{{ asset('assets/img/iconpap.png') }}" alt="">
            <h1 style="color: #dda04d; font-size: 30px;margin: 0; font-weight: 500;letter-spacing: 2px; text-transform: uppercase;"> P A P </h1>
        </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                  <span class="input-group-text" id="search">
                    <i class="icon-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="icon-bell mx-0"></i>
                <span class="count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="ti-info-alt mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="ti-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="ti-user mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="images/faces/face28.jpg" alt="profile"/>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="ti-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item">
                  <i class="ti-power-off text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
            <li class="nav-item nav-settings d-none d-lg-flex">
              <a class="nav-link" href="#">
                <i class="icon-ellipsis"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
 
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Profil</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Formulir Pendaftaran</h4>
                    <p class="card-description">
                      Mohon diisi dengan data sebenarnya
                    </p>
                    <form action="{{route('update', $profil->id)}}" method="POST" class="forms-sample">
                      @method('PUT')
                      @csrf
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="{{ $profil->nama }}">
                      </div>
                      <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" name="npm" class="form-control" id="npm" placeholder="NPM" value="{{ $profil->npm }}">
                      </div>
                      <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="number" name="semester" class="form-control" id="semester" placeholder="Semester" value="{{ $profil->semester }}">
                      </div>
                      <div class="form-group">
                        <label for="ips">IP Semester</label>
                        <input type="text" name="ip_semester" class="form-control" id="ips" placeholder="IP Semester saat ini" value="{{ $profil->ip_semester }}">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Alamat Email" value="{{ $profil->email }}">
                      </div>
                      <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Nomor Telepon" value="{{ $profil->telepon }}">
                      </div>
                      <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                          <select class="form-control" name="jenis_kelamin" id="jk">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="ttl">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="ttl" placeholder="Tanggal Lahir">
                      </div>
                      <div class="form-group">
                        <label for="status">Status Keaktifan</label>
                          <select class="form-control" name="aktif" id="status">
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                          </select>
                        </div>
                      <button type="submit" value="simpan" class="btn btn-primary mr-2">Simpan</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  
  <!-- Plugin js for this page -->
  <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
  {{-- <script src="{{ asset('assets/vendor/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script> --}}
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/js/template.js') }}"></script>
  <script src="{{ asset('assets/js/settings.js') }}"></script>
  <script src="{{ asset('assets/js/todolist.js') }}"></script>
  <!-- endinject -->

  <!-- Custom js for this page-->
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/Chart.roundedBarCharts.js') }}"></script>

  {{-- Data Table --}}
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.js"></script>
  <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.1.7/js/dataTables.semanticui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.js"></script>
  <script>
    new DataTable('#profil');
  </script>
  <!-- End custom js for this page-->
</body>

</html>
