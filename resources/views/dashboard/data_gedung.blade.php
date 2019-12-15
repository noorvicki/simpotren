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
            <a href="/index.html" class="pl-2 pr-2">Dashboard</a>
            <i class="far fa-arrow-alt-circle-right"></i>
            <a href="#" class="pl-2">Data Gedung</a>
          </form>
        </nav>
      </div>

      <div class="container-fluid">
        <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#ModalTambah">Tambah Data</button>
        <table class="table" id="table_id">
          <thead class="thead-light">
            <tr>
              <th>ID</th>
              <th>Nama Gedung</th>
              <th>Kapasitas</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>testestes</td>
              <td>testestes</td>
              <td>400</td>
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
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Gedung</h5>
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
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Gedung</h5>
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

@include('footer')