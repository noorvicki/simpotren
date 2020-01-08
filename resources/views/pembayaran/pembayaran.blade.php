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
        <a href="/dashboard" class="pl-2 pr-2">Dashboard</a>
        <i class="far fa-arrow-alt-circle-right"></i>
        <a href="#" class="pl-2">Laporan Pembayaran</a>
      </form>
    </nav>
  </div>

  <div class="container-fluid">
    <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#ModalTambah">Tambah Data</button>
    <form>
      <div class="form-group" style="width: 10rem;">
        <label for="tahunPembayaran">Tahun angkatan</label>
        <select class="form-control" id="tahunAngkatan">
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
        </select>
      </div>
      <div class="form-group" style="width: 10rem;">
        <label for="bulanPembayaran">Bulan</label>
        <select class="form-control" id="bulanPembayaran">
          <option>Januari</option>
          <option>Februari</option>
          <option>Maret</option>
          <option>April</option>
          <option>Mei</option>
          <option>Juni</option>
          <option>Juli</option>
          <option>Agustus</option>
          <option>September</option>
          <option>Oktober</option>
          <option>November</option>
          <option>Desember</option>
        </select>
      </div>
    </form>
    <table class="table" id="table_id">
      <thead class="thead-light">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIS</th>
          <th>Januari</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Aurellesia</td>
          <td>0113</td>
          <td>160000</td>
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
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
          </div>
          <div class="form-group">
            <label for="NIS">NIS</label>
            <input type="text" class="form-control" id="NIS" placeholder="Masukkan NIS">
          </div>
          <div class="form-group">
            <label for="Pembayaran">Pembayaran</label>
            <input type="text" class="form-control" id="Pembayaran" placeholder="Masukkan Pembayaran">
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
<div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
          </div>
          <div class="form-group">
            <label for="NIS">NIS</label>
            <input type="text" class="form-control" id="NIS" placeholder="Masukkan NIS">
          </div>
          <div class="form-group">
            <label for="Pembayaran">Pembayaran</label>
            <input type="text" class="form-control" id="Pembayaran" placeholder="Masukkan Pembayaran">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="/js/tables.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
<script src="/js/index.js"></script>
<script src="/fontawesome/js/all.js"></script>
</body>

</html>