<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="/css/spinkit.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
  <title>Simpotren // Darussunnah</title>
</head>

<body>

  <div class="loader">
    <div class="sk-grid to-center">
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
      <div class="sk-grid-cube"></div>
    </div>
  </div>

  <div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" class="shadow-lg">
      <a href="#" class="navbar-brand bg-secondary shadow border-right">
        <img src="/img/logo.png" alt="Darussunnah" width="50" height="50" class="ml-2">
        <span class="brand-name">Simpotren Darussunnah</span>
      </a>
      <ul class="list-unstyled sidebar-components">
        <div class="list-sidebar--profile mb-1 pb-3 border-bottom-1 shadow-sm">
          <img src="/img/user.jpg" alt="" class="rounded-circle list-sidebar--profile__img shadow" width="80"
            height="80">
          <span class="ml-2 list-sidebar--profile__name">{{auth()->user()->nama}}</span>
          <span class="list-sidebar--profile__admin">{{auth()->user()->role}}</span>
        </div>
        <li class="border-bottom">
          <a href="/index.html" class="sidebar-menu normal" aria-expanded="false">
            <i class="fas fa-columns"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="border-bottom">
          <a href="/html/pendaftaran/pendaftaran.html" class="sidebar-menu normal" aria-expanded="true">
            <i class="fas fa-address-card"></i>
            <p>Pendaftaran</p>
          </a>
        </li>
        <li class="border-bottom">
          <a href="#akademikSubmenu" class="sidebar-menu" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-book"></i>
            <p>Akademik</p>
            <i class="fas fa-caret-right"></i>
          </a>
          <ul class="collapse list-unstyled" id="akademikSubmenu" data-parent="#sidebar">
            <li class="mb-1">
              <a href="/html/akademik/data_kelas.html">Data Kelas</a>
            </li class="mb-1">
            <li>
              <a href="/html/akademik/mata_pelajaran.html">Mata Pelajaran</a>
            </li>
            <li>
              <a href="/html/akademik/jadwal_pelajaran.html">Jadwal Pelajaran</a>
            </li>
            <li>
              <a href="/html/akademik/absensi.html">Absensi</a>
            </li>
            <li>
              <a href="/html/akademik/penilaian.html">Penilaian</a>
            </li>
            <li class="mb-2">
              <a href="/html/akademik/raport_santri.html">Raport Santri</a>
            </li>
          </ul>
        </li>
        <li class="border-bottom">
          <a href="#kepegawaianSubmenu" class="sidebar-menu" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-users"></i>
            <p>Kepegawaian</p>
            <i class="fas fa-caret-right"></i>
          </a>
          <ul class="collapse list-unstyled" id="kepegawaianSubmenu" data-parent="#sidebar">
            <li class="mb-1">
              <a href="/html/kepegawaian/data_pengajar.html">Data Pengajar</a>
            </li>
            <li class="mb-2">
              <a href="/html/kepegawaian/data_non_pengajar.html">Data Non Pengajar</a>
            </li>
          </ul>
        </li>
        <li class="border-bottom">
          <a href="#pembayaranSubmenu" class="sidebar-menu" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-chart-bar"></i>
            <i class="fas fa-caret-right"></i>
            <p>Pembayaran</p>
          </a>
          <ul class="collapse list-unstyled" id="pembayaranSubmenu" data-parent="#sidebar">
            <li class="mb-1">
              <a href="/html/pembayaran/pembayaran.html">Pembayaran SPP</a>
            </li class="mb-1">
            <li class="mb-2">
              <a href="/html/pembayaran/laporan_pembayaran.html">Laporan Pembayaran SPP</a>
            </li>
          </ul>
        </li>
        <li class="border-bottom">
          <a href="#konfigurasiSubmenu" class="sidebar-menu" data-toggle="collapse" aria-expanded="false">
            <i class="fas fa-user-cog"></i>
            <p>Konfigurasi</p>
            <i class="fas fa-caret-right"></i>
          </a>
          <ul class="collapse list-unstyled" id="konfigurasiSubmenu" data-parent="#sidebar">
            <li class="mb-1">
              <a href="/html/konfigurasi/admin.html">Home 1</a>
            </li>
            <li class="mb-1">
              <a href="/html/konfigurasi/superadmin.html">Home 2</a>
            </li>
          </ul>
        </li>
        <li class="border-bottom">
          <a href="/logout" class="sidebar-menu normal" aria-expanded="false" id="dashboardMenu">
            <i class="fas fa-door-open"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
      <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
          <button type="button" id="sidebarCollapse" class="btn btn-dark">
            <i class="fas fa-stream"></i>
          </button>
        </div>
      </nav>
      <div class="container-fluid">
        <nav class="navbar--sub navbar-expand navbar-light bg-gray mt-3 shadow">
          <h4 class="navbar--sub__title">Dashboard</h4>
          <form class="">
            <a href="#" class="pr-2">Home</a>
            <i class="far fa-arrow-alt-circle-right"></i>
            <a href="#" class="pl-2">Dashboard</a>
          </form>
        </nav>
      </div>

      <div class="container-fluid">
        <div class="card mt-4 shadow">
          <div class="card-body">
            <h5 class="header-title mt-0">Statistik Kunjungan</h5>
            <div id="chart"></div>
          </div>
        </div>
        <div class="row mt-4 mb-3">
          <div class="col-md-3 mt-3">
            <div class="card shadow card-area">
              <div class="card-body">
                <h4 class="card-area__title">Data Santri</h4>
                <p class="card-area__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
                  laborum.</p>
                <div class="card-area__cta">
                  <a href="/html/dashboard/data_santri.html" class="btn btn-secondary">Lihat Data</a>
                  <span><i class="fas fa-user-shield fa-2x"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-3">
            <div class="card shadow card-area">
              <div class="card-body">
                <h4 class="card-area__title">Data Kamar</h4>
                <p class="card-area__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
                  laborum.</p>
                <div class="card-area__cta">
                  <a href="/html/dashboard/data_kamar.html" class="btn btn-secondary">Lihat Data</a>
                  <span><i class="fas fa-bed fa-2x"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-3">
            <div class="card shadow card-area">
              <div class="card-body">
                <h4 class="card-area__title">Data Ruang</h4>
                <p class="card-area__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
                  laborum.</p>
                <div class="card-area__cta">
                  <a href="/html/dashboard/data_ruang.html" class="btn btn-secondary">Lihat Data</a>
                  <span><i class="fas fa-door-open fa-2x"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-3">
            <div class="card shadow card-area">
              <div class="card-body">
                <h4 class="card-area__title">Data Gedung</h4>
                <p class="card-area__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
                  laborum.</p>
                <div class="card-area__cta">
                  <a href="/html/dashboard/data_gedung.html" class="btn btn-secondary">Lihat Data</a>
                  <span><i class="fas fa-hotel fa-2x"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="/fontawesome/js/all.js"></script>
  <script src="/js/jquery-3.4.1.min.js"></script>
  <script src="/js/index.js"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
  </script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.8.6/apexcharts.min.js"
    integrity="sha256-fPasH9WrBndkSzQggD2jDhtCOJ8MapJPWFDUjLGPNPM=" crossorigin="anonymous"></script>
  <script src="/js/chart.js"></script>
</body>

</html>