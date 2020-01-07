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
          <th>Bidang Ajar</th>
          <th>Jenis Kelamin</th>
          <th>Foto</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($pengajar as $pg)
        <tr>
          <td>{{$pg->id}}</td>
          <td>{{$pg->nama}}</td>
          <td>{{$pg->alamat}}</td>
          <td>{{$pg->telepon}}</td>
          <td>{{$pg->bidang_ajar}}</td>
          <td>{{$pg->jenis_kelamin}}</td>
          <td><img src="" alt="#"></td>
          <td>
            <a href="#" data-toggle="modal" data-target="#ModalEdit" class="icon-edit pr-3">
              <i class="fas fa-edit"></i>
            </a>
            <a href="/data_pengajar/hapus/{{$pg->id}}" class="icon-delete">
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
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Santri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/data_pengajar/store" method="POST">
        {{csrf_field()}}
        <div class="modal-body">
          <div class="form-group">
            <label for="NIP">NIP</label>
            <input type="text" class="form-control" id="NIP" name="NIP" placeholder="Masukkan NIP">
          </div>
          <div class="form-group">
            <label for="pswd">Password</label>
            <input type="text" class="form-control" id="pswd" name="pswd" placeholder="Masukkan Password Baru">
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
          </div>
          <div class="form-group">
            <label for="nomorHp">No Telp / HP</label>
            <input type="text" class="form-control" id="nomorHp" name="nomorHp" placeholder="Masukkan No Telp / HP">
          </div>
          <div class="form-group">
            <label for="bidang">Bidang Ajar</label>
            <select id="jk" name="jk" class="custom-select">
              <option disabled>Pilih Bidang Ajar</option>
              @foreach($ajar as $aj)
              <option value="{{$aj->nama_mapel}}">{{$aj->nama_mapel}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select id="jk" name="jk" class="custom-select">
              <option disabled>Pilih Jenis Kelamin</option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="foto">Foto</label>
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
<div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Pengajar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/data_pengajar/store" method="POST">
        {{csrf_field()}}
        <div class="modal-body">
          <div class="form-group">
            <label for="NIP">NIP</label>
            <input type="text" class="form-control" id="NIP" name="NIP" placeholder="Masukkan NIP">
          </div>
          <div class="form-group">
            <label for="pswd">Password</label>
            <input type="text" class="form-control" id="pswd" name="pswd" placeholder="Masukkan Password Baru">
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
          </div>
          <div class="form-group">
            <label for="nomorHp">No Telp / HP</label>
            <input type="text" class="form-control" id="nomorHp" name="nomorHp" placeholder="Masukkan No Telp / HP">
          </div>
          <div class="form-group">
            <label for="bidang">Bidang Ajar</label>
            <select id="jk" name="jk" class="custom-select">
              <option disabled>Pilih Bidang Ajar</option>
              @foreach($ajar as $aj)
              <option value="{{$aj->nama_mapel}}">{{$aj->nama_mapel}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select id="jk" name="jk" class="custom-select">
              <option disabled>Pilih Jenis Kelamin</option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="foto">Foto</label>
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