@include('header')

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