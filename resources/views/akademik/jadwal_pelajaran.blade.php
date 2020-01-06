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
        <a href="#" class="pr-2">Akademik</a>
        <i class="far fa-arrow-alt-circle-right"></i>
        <a href="#" class="pl-2">Jadwal Pelajaran</a>
      </form>
    </nav>
  </div>

  <div class="container-fluid">
    <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#ModalTambah">Tambah Data</button>
    <table class="table" id="table_id">
      <thead class="thead-light">
        <tr>
          <th>No.</th>
          <th>Nama Mapel</th>
          <th>Kitab</th>
          <th>Ustadz</th>
          <th>Hari</th>
          <th>Pukul</th>
          <th>Ruang</th>
          <th>Kelas</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Hadits</td>
          <td>Arbain Nawawi</td>
          <td>Muhammad Yoga</td>
          <td>Senin</td>
          <td>06.30</td>
          <td>12</td>
          <td>A</td>
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
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Kamar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="mapel">Nama Mapel</label>
            <select class="custom-select">
              <option selected>Pilih Mapel</option>
              <option value="1">Mapel1</option>
              <option value="2">Mapel2</option>
              <option value="3">Mapel3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="kitab">Kitab</label>
            <select class="custom-select">
              <option selected>Pilih Kitab</option>
              <option value="1">Kitab1</option>
              <option value="2">Kitab2</option>
              <option value="3">Kitab3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="ustadz">Ustadz</label>
            <input type="text" class="form-control" id="ustadz" placeholder="Masukkan nama ustadz">
          </div>
          <div class="form-group w-25">
            <label for="hari">Hari</label>
            <input type="date" class="form-control" id="hari">
          </div>
          <div class="form-group">
            <label for="pukul">Pukul</label>
            <input type="time" class="form-control" id="pukul">
          </div>
          <div class="form-group w-50">
            <label for="ruang">Ruang</label>
            <input type="text" class="form-control" id="ruang" placeholder="Masukkan Ruang">
          </div>
          <div class="form-group">
            <label for="kelas">Kelas</label>
            <select class="custom-select">
              <option selected>Pilih Kelas</option>
              <option value="1">Kelas1</option>
              <option value="2">Kelas2</option>
              <option value="3">Kelas3</option>
            </select>
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
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Kamar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="mapel">Nama Mapel</label>
            <select class="custom-select">
              <option selected>Pilih Mapel</option>
              <option value="1">Mapel1</option>
              <option value="2">Mapel2</option>
              <option value="3">Mapel3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="kitab">Kitab</label>
            <select class="custom-select">
              <option selected>Pilih Kitab</option>
              <option value="1">Kitab1</option>
              <option value="2">Kitab2</option>
              <option value="3">Kitab3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="ustadz">Ustadz</label>
            <input type="text" class="form-control" id="ustadz" placeholder="Masukkan nama ustadz">
          </div>
          <div class="form-group w-25">
            <label for="hari">Hari</label>
            <input type="date" class="form-control" id="hari">
          </div>
          <div class="form-group">
            <label for="pukul">Pukul</label>
            <input type="time" class="form-control" id="pukul">
          </div>
          <div class="form-group w-50">
            <label for="ruang">Ruang</label>
            <input type="text" class="form-control" id="ruang" placeholder="Masukkan Ruang">
          </div>
          <div class="form-group">
            <label for="kelas">Kelas</label>
            <select class="custom-select">
              <option selected>Pilih Kelas</option>
              <option value="1">Kelas1</option>
              <option value="2">Kelas2</option>
              <option value="3">Kelas3</option>
            </select>
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