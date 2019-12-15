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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">
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
          <a href="#" class="sidebar-menu normal" aria-expanded="false" id="dashboardMenu">
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
        <nav class="navbar--sub navbar-expand navbar-light bg-gray mt-3 mb-4 shadow">
          <!-- <h4 class="navbar--sub__title">Data Santri</h4> -->
          <form class="my-2 my-lg-0 pt-1">
            <a href="#" class="pr-2">Home</a>
            <i class="far fa-arrow-alt-circle-right"></i>
            <a href="#" class="pl-2 pr-2">Pendaftaran</a>
          </form>
        </nav>
      </div>

      <div class="container-fluid">
        <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#ModalTambah">Tambah Data</button>
        <table class="table" id="table_id">
          <thead>
            <tr>
              <th>ID Ujian</th>
              <th>ID Pendaftaran</th>
              <th>ID Jenis</th>
              <th>Nilai</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>PDFT01</td>
              <td>PDFT01</td>
              <td>PDFT01</td>
              <td>90</td>
              <td>Lulus</td>
              <td>
                <a href="#" data-toggle="modal" data-target="#ModalEdit" class="icon-edit pr-3">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="icon-delete">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>PDFT01</td>
              <td>PDFT01</td>
              <td>PDFT01</td>
              <td>90</td>
              <td>Lulus</td>
              <td>
                <a href="#" data-toggle="modal" data-target="#ModalEdit" class="icon-edit pr-3">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="icon-delete">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>PDFT01</td>
              <td>PDFT01</td>
              <td>PDFT01</td>
              <td>90</td>
              <td>Lulus</td>
              <td>
                <a href="#" data-toggle="modal" data-target="#ModalEdit" class="icon-edit pr-3">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="icon-delete">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>PDFT01</td>
              <td>PDFT01</td>
              <td>PDFT01</td>
              <td>90</td>
              <td>Lulus</td>
              <td>
                <a href="#" data-toggle="modal" data-target="#ModalEdit" class="icon-edit pr-3">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="icon-delete">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal Edit -->
  <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Laporan Pembayaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="namaGedung">Nama Gedung</label>
              <input type="text" class="form-control" id="namaGedung" placeholder="Masukkan Nama Gedung">
            </div>
            <div class="form-group">
              <label for="kapasitas">Kapasitas</label>
              <input type="text" class="form-control" id="kapasitas" placeholder="Masukkan Kapasitas">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Tambah-->
  <div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Laporan Pembayaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="namaGedung">Nama Gedung</label>
              <input type="text" class="form-control" id="namaGedung" placeholder="Masukkan Nama Gedung">
            </div>
            <div class="form-group">
              <label for="kapasitas">Kapasitas</label>
              <input type="text" class="form-control" id="kapasitas" placeholder="Masukkan Kapasitas">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="/js/jquery-3.4.1.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
  </script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="/js/tables.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
  <script src="/fontawesome/js/all.js"></script>
  <script src="/js/index.js"></script>
</body>

</html>