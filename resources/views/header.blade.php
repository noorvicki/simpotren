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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />
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
          <span class="ml-2 list-sidebar--profile__name">Abunawas Arifandi</span>
          <span class="list-sidebar--profile__admin">Admin</span>
        </div>
        <li class="border-bottom">
          <a href="/index.html" class="sidebar-menu normal" aria-expanded="false">
            <i class="fas fa-columns"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="border-bottom">
          <a href="/pendaftaran" class="sidebar-menu normal" aria-expanded="true">
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
              <a href="/data_kelas">Data Kelas</a>
            </li class="mb-1">
            <li>
              <a href="/mata_pelajaran">Mata Pelajaran</a>
            </li>
            <li>
              <a href="/jadwal_pelajaran">Jadwal Pelajaran</a>
            </li>
            <li>
              <a href="/absensi">Absensi</a>
            </li>
            <li>
              <a href="/penilaian">Penilaian</a>
            </li>
            <li class="mb-2">
              <a href="/raport_santri">Raport Santri</a>
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
              <a href="/data_pengajar">Data Pengajar</a>
            </li>
            <li class="mb-2">
              <a href="/data_pegawai">Data Non Pengajar</a>
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
              <a href="/pembayaran">Pembayaran SPP</a>
            </li class="mb-1">
            <li class="mb-2">
              <a href="/laporan_pembayaran">Laporan Pembayaran SPP</a>
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
              <a href="/admin">Home 1</a>
            </li>
            <li class="mb-1">
              <a href="/superadmin">Home 2</a>
            </li>
          </ul>
        </li>
        <li class="border-bottom">
          <a href="#" class="sidebar-menu normal" aria-expanded="false" id="dashboardMenu">
            <i class="fas fa-door-open"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
