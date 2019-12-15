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
            <a href="index.html" class="pl-2 pr-2">Dashboard</a>
            <i class="far fa-arrow-alt-circle-right"></i>
            <a href="#" class="pl-2">Absensi</a>
          </form>
        </nav>
      </div>

      <div class="container p-5">
        <form>
          <div class="row">
            <div class="col">
              <label for="matkul">Mata Pelajaran</label>
              <select id="inputMatkul" class="form-control">
                <option selected>Pilih Matkul...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col">
              <label for="kelas">Kelas</label>
              <select id="inputKelas" class="form-control">
                <option selected>Pilih Kelas...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col d-flex align-items-end">
              <button type="submit" class="btn btn-secondary">Tampilkan</button>
            </div>
          </div>
        </form>
      </div>

      <div class="container-fluid">
        <table class="table" id="table_id">
          <thead class="thead-light">
            <tr>
              <th>NIS</th>
              <th>Nama Siswa</th>
              <th>Kehadiran</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>17650104</td>
              <td>Moch. Ilham Afandi</td>
              <td>
                <div class="form-check col-md-1">
                  <input class="form-check-input" type="radio" name="kehadiran" id="kehadiran" value="">
                  <label class="form-check-label" for="Hadir">
                    Hadir
                  </label>
                </div>
                <div class="form-check col-md-8">
                  <input class="form-check-input" type="radio" name="kehadiran" id="kehadiran" value="">
                  <label class="form-check-label" for="tidakHadir">
                    Tidak hadir
                  </label>
                </div>
              </td>
              <td>
                <select class="form-control form-control-sm">
                  <option>Pilih keterangan</option>
                </select>
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


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="/js/jquery-3.4.1.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
  </script>
  <script src="/fontawesome/js/all.js"></script>
  <script src="/js/index.js"></script>
</body>

</html>