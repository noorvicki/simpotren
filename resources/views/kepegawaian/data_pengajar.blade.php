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
            <a href="#" class="pr-2">Kepegawaian</a>
            <i class="far fa-arrow-alt-circle-right"></i>
            <a href="#" class="pl-2">Data Pengajar</a>
          </form>
        </nav>
      </div>

      <div class="container-fluid">
        <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#ModalTambah">Tambah Data</button>
        <table class="table" id="table_id">
          <thead>
            <tr>
              <th>NIP</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No Telp / HP</th>
              <th>Email</th>
              <th>Password</th>
              <th>Bidang ajar</th>
              <th>Foto</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1650104</td>
              <td>Moch. Ilham Afandi</td>
              <td>Malang</td>
              <td>0823333</td>
              <td>ilham@mail.com</td>
              <td>password</td>
              <td>testestes</td>
              <td><img src="" alt="#"></td>
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

  <!-- Modal Edit-->
  <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Santri</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="NIP">NIP</label>
              <input type="text" class="form-control" id="NIP" placeholder="Masukkan NIP">
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
              <label for="nomorHp">No Telp / HP</label>
              <input type="text" class="form-control" id="nomorHp" placeholder="Masukkan No Telp / HP">
            </div>
            <div class="form-group">
              <label for="bidang">Kamar</label>
              <select class="custom-select">
                <option selected>Pilih bidang ajar</option>
                <option value="1">Matematika</option>
                <option value="2">Biologi</option>
                <option value="3">Fisika</option>
              </select>
            </div>
            <div class="form-group">
              <label for="nama">Foto</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="Filefoto">Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="Filefoto">
                  <label class="custom-file-label" for="inputGroupFile01">Pilih Foto</label>
                </div>
              </div>
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
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Pengajar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="NIP">NIP</label>
              <input type="text" class="form-control" id="NIP" placeholder="Masukkan NIP">
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
              <label for="nomorHp">No Telp / HP</label>
              <input type="text" class="form-control" id="nomorHp" placeholder="Masukkan No Telp / HP">
            </div>
            <div class="form-group">
              <label for="bidang">Kamar</label>
              <select class="custom-select">
                <option selected>Pilih bidang ajar</option>
                <option value="1">Matematika</option>
                <option value="2">Biologi</option>
                <option value="3">Fisika</option>
              </select>
            </div>
            <div class="form-group">
              <label for="nama">Foto</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="Filefoto">Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="Filefoto">
                  <label class="custom-file-label" for="inputGroupFile01">Pilih Foto</label>
                </div>
              </div>
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