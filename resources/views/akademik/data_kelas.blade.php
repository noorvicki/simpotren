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
            <a href="#" class="pl-2">Mata Pelajaran</a>
          </form>
        </nav>
      </div>

      <div class="container-fluid">
        <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#ModalTambah">Tambah Data</button>
        <table class="table" id="table_id">
          <thead class="thead-light">
            <tr>
              <th>ID</th>
              <th>Nama Kelas</th>
              <th>Jumlah Santri</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          @foreach($datakelas as $dk)
            <tr>
            <td>{{$dk->id}}</td>
              <td>{{$dk->nama_kelas}}</td>
              <td>{{$dk->jumlah_santri}}</td>
              <td><img src="" alt="#"></td>
              <td>
                <a href="#" data-toggle="modal" data-target="#ModalEdit" class="icon-edit pr-3">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="/data_kelas/hapus/{{$dk->id}}" class="icon-delete">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
            @endforeach
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
          <h5 class="modal-title">Edit Data Kamar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/data_kelas/update/" method="get">
          {{csrf_field()}}
          <div class="modal-body">
            <div class="form-group">
              <label for="id">ID</label>
              <input type="text" class="form-control" id="ID" name="ID" placeholder="Masukkan id kelas">
            </div>
            <div class="form-group">
              <label for="kelas">Nama Kelas</label>
              <input type="text" class="form-control" id="namakelas" name="namakelas" placeholder="Masukkan nama kelas">
            </div>
            <div class="form-group">
              <label for="jumlahSantri">Jumlah Santri</label>
              <input type="text" class="form-control" id="jumlahsantri" name="jumlahsantri" placeholder="contoh: 100">
            </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Tambah-->
  <div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Kamar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/data_kelas/store" method="POST">
        {{csrf_field()}}
          <div class="modal-body">
              <div class="form-group">
                <label for="kelas">Nama Kelas</label>
                <input type="text" class="form-control" id="namakelas" name="namakelas" placeholder="Masukkan nama kelas">
              </div>
              <div class="form-group">
                <label for="jumlahSantri">Jumlah Santri</label>
                <input type="text" class="form-control" id="jumlahsantri" name="jumlahsantri" placeholder="contoh: 100">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" value="Simpan" class="btn btn-primary">
          </div>
        </form>
        </div>
    </div>
  </div>
@include('footer')