<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/index.js"></script>
  <title>Pendaftaran Santri baru</title>
</head>

<body>
  <div class="container">

    <h1 align="center" style="margin-top: 20px;">Form Pendaftaran Santri</h1>

    <!-- <ul class="steps">
      <li class="steps-list active">
        <span>1</span>
      </li>
      <li class="steps-list">
        <span>2</span>
      </li>
      <li class="steps-list">
        <span>3</span>
      </li>
    </ul> -->

    <div class="card" style="margin-bottom: 20px;">
      <div class="card-body">
        <h2 class="text-left">Biodata Santri</h2>
        <form action="/pendaftaran/daftar" method="POST">

          @csrf

          <div class="tab">
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" name="namaSantri" class="form-control">
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label for="tempat">Tempat</label>
                  <input type="text" name="tempatLahirSantri" class="form-control">
                </div>
                <div class="col">
                  <label for="tanggal">Tanggal Lahir</label>
                  <input type="date" name="tanggalLahirSantri" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="kelamin">Jenis Kelamin</label>
              <select class="form-control" name="jenisKelaminSantri" id="exampleFormControlSelect1">
                <option selected readonly>Pilih..</option>
                <option value="Laki-Laki">Laki laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" name="alamatSantri"></textarea>
              <!-- <input type="text" class="form-control"> -->
            </div>

            <div class="form-group">
              <label for="sekolah">Email</label>
              <input type="text" class="form-control" name="emailSantri">
            </div>

            
            <div class="form-group">
              <label for="sekolah">Asal Sekolah</label>
              <input type="text" name="asalSekolahSantri" class="form-control">
            </div>
            <!-- <div class="form-group">
              <label for="nomorKK">Nomor Kartu Keluarga</label>
              <input type="text" class="form-control">
            </div> -->
            <div class="form-group">
              <label for="hp">Nomor Telp. / HP</label>
              <input type="text" name="teleponSantri" class="form-control">
            </div>
            <div class="form-group">
              <label for="hp">Unggah Foto</label>
              <div class="custom-file">
                <label class="custom-file-label" for="fileGambar">Pilih Gambar...</label>
                <input type="file" name="fotoSantri" class="custom-file-input file-gambar" id="fileGambar" accept="image/*" name="img[]"
                  required>
                <div class="invalid-feedback">Example invalid custom file feedback</div>
              </div>
            </div>
            <div class="col-sm-6 mt-4">
              <img src="https://placehold.it/120x120" id="preview" class="img-thumbnail">
            </div>
          </div>
          <hr>
          <div class="tab">
            <h2 class="text-left">Biodata Wali</h2>
            <form action="#">
              <div class="form-group">
                <label for="namaAyah">Nama Lengkap</label>
                <input type="text" name="namaWali" class="form-control">
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col">
                    <label for="tempat">Tempat</label>
                    <input type="text" name="tempatLahirWali" class="form-control" id="tempatLahirAyah">
                  </div>
                  <div class="col">
                    <label for="tanggal">Tanggal Lahir</label>
                    <input type="date" name="tanggalLahirWali" class="form-control" id="tglLahirAyah">
                  </div>
                </div>
              </div>
              <div class="form-group">
              <label for="kelamin">Jenis Kelamin</label>
              <select class="form-control" name="jenisKelaminWali" id="exampleFormControlSelect1">
                <option selected readonly>Pilih..</option>
                <option value="Laki-Laki">Laki laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamatWali" class="form-control">
              </div>
              <div class="form-group">
                <label for="pekerjaanAyah">Pekerjaan</label>
                <input type="text" name="pekerjaanWali" class="form-control">
              </div>
              
              <div class="form-group">
                <label for="EmailAyah">No Telp / Hp</label>
                <input type="text" name="teleponWali" class="form-control">
              </div>
              <div class="flex-end">
                <button class="btn btn-primary">Kirim</button>
              </div>
            </form>
          </div>
          
        </form>

      </div>
    </div>
  </div>
</body>

</html>