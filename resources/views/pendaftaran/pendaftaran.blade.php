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
    <!-- <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#ModalTambah">Tambah Data</button> -->
    <table class="table" id="table_id">
      <thead>
        <tr>
          <th>ID Pendaftaran</th>
          <th>Nama Calon Santri</th>
          <th>Nilai</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

        @foreach($calon_santri as $data)

        <tr>
          <td>{{ $data->id }}</td>
          <td>{{ $data->nama }}</td>
          <td>{{ $data->nilai }}</td>
          <td>{{ $data->keterangan }}</td>
          <td>
            <a href="#" data-toggle="modal" data-target="#ModalEdit" idPendaftaran="{{ $data->id }}" nama="{{ $data->nama }}" class="icon-edit pr-3 btn_edit">
              <i class="fas fa-edit"></i>
            </a>
            <a href="#" idPendaftaran="{{ $data->id }}" class="icon-delete btn_delete">
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

<!-- Modal Edit -->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <form action="/pendaftaran/edit" method="POST">

      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Calon Santri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <div class="form-group">
          <label for="editIdPendaftaran">Id Pendaftaran</label>
          <input type="text" class="form-control" name="id" id="editIdPendaftaran">
        </div>
        <div class="form-group">
          <label for="namaCalonSantri">Nama Calon Santri</label>
          <input type="text" class="form-control" name="namaCalonSantri" id="namaCalonSantri" >
        </div>
        <div class="form-group">
          <label for="nilai">Nilai</label>
          <input type="text" class="form-control" name="nilai" id="nilai" >
        </div>
        <div class="form-group">
          <label for="nilai">Keterangan</label>
          <select class="form-control" name="keterangan">
            <option value="Lulus">Lulus</option>
            <option value="Tidak Lulus">Tidak Lulus</option>
          </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
</div>

<!-- Modal Delete-->
<div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <form action="/pendaftaran/hapus" method="POST">

      @csrf

    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Calon Santri</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
     Ingin hapus data ini?
     <input type="hidden" name="id" id="hapusIdPendaftaran">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>

    </form>

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

<script type="text/javascript">

  $('.btn_edit').click( function () {
    $('#ModalEdit').modal('show');

    var id_pendaftaran = $(this).attr('idPendaftaran');
    var nama = $(this).attr('nama');

    $('#editIdPendaftaran').val(id_pendaftaran);
    $('#namaCalonSantri').val(nama);

  });

  $('.btn_delete').click( function () {
    $('#ModalDelete').modal('show');

    var id_pendaftaran = $(this).attr('idPendaftaran');

    $('#hapusIdPendaftaran').val(id_pendaftaran);

  });

</script>

</body>

</html>