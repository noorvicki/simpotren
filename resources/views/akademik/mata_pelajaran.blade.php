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
              <th>Nama Mapel</th>
              <th>Kitab</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          @foreach($matpel as $mp)
            <tr>
            <td>{{$mp->id}}</td>
              <td>{{$mp->nama_mapel}}</td>
              <td>{{$mp->kitab}}</td>
              <td><img src="" alt="#"></td>
              <td>
                <a href="#" data-toggle="modal" data-target="#ModalEdit" class="icon-edit pr-3">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="/mata_pelajaran/hapus/{{$mp->id}}" class="icon-delete">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

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
          <th>Nama Mapel</th>
          <th>Kitab</th>
          <th></th>@include('header')

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
                    <th>Nama Mapel</th>
                    <th>Kitab</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Hadits</td>
                    <td>Arbain Nawawi</td>
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
        <form action="/mata_pelajaran/update/" method="get">
        {{csrf_field()}}
        <div class="modal-body">
              <div class="form-group">
              <label for="id">ID</label>
              <input type="text" class="form-control" id="ID" name="ID" placeholder="Masukkan id kelas">
            </div>
            <div class="form-group">
              <label for="mapel">Nama Mapel</label>
              <input type="text" class="form-control" id="mapel" name="mapel" placeholder="Masukkan nama Mata Pelajaran">
            </div>
            <div class="form-group">
              <label for="golmapel">Golongan Mapel</label>
              <input type="text" class="form-control" id="golmapel" name="golmapel" placeholder="Masukkan nama Mata Pelajaran">
            </div>
            <div class="form-group">
              <label for="kitab">Kitab</label>
              <input type="text" class="form-control" id="kitab" name="kitab" placeholder="Masukkan nama kitab">
            </div>
            <div class="form-group">
              <label for="pengajar">Nama Pengajar</label>
              <input type="text" class="form-control" id="pengajar" name="pengajar" placeholder="Masukkan nama pengajar">
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
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Kamar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/mata_pelajaran/store" method="POST">
          {{csrf_field()}}
        <div class="modal-body">
            <div class="form-group">
              <label for="mapel">Nama Mapel</label>
              <input type="text" class="form-control" id="mapel" name="mapel" placeholder="Masukkan nama Mata Pelajaran">
            </div>
            <div class="form-group">
              <label for="golmapel">Golongan Mapel</label>
              <input type="text" class="form-control" id="golmapel" name="golmapel" placeholder="Masukkan nama Mata Pelajaran">
            </div>
            <div class="form-group">
              <label for="kitab">Kitab</label>
              <input type="text" class="form-control" id="kitab" name="kitab" placeholder="Masukkan nama kitab">
            </div>
            <div class="form-group">
              <label for="pengajar">Nama Pengajar</label>
              <input type="text" class="form-control" id="pengajar" name="pengajar" placeholder="Masukkan nama pengajar">
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
  </tr>
  </thead>
  <tbody>
    <tr>
      <td>TES</td>
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
            <input type="text" class="form-control" id="mapel" placeholder="Masukkan nama Mata Pelajaran">
          </div>
          <div class="form-group w-25">
            <label for="kitab">Kitab</label>
            <input type="text" class="form-control" id="kitab" placeholder="Masukkan nama kitab">
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
            <input type="text" class="form-control" id="mapel" placeholder="Masukkan nama Mata Pelajaran">
          </div>
          <div class="form-group w-25">
            <label for="kitab">Kitab</label>
            <input type="text" class="form-control" id="kitab" placeholder="Masukkan nama kitab">
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