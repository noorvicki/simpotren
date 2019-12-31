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
    <nav class="navbar--sub navbar-expand navbar-light bg-gray mt-3 shadow">
      <h4 class="navbar--sub__title">Dashboard</h4>
      <form class="">
        <a href="#" class="pr-2">Home</a>
        <i class="far fa-arrow-alt-circle-right"></i>
        <a href="#" class="pl-2">Dashboard</a>
      </form>
    </nav>
  </div>

  <div class="container-fluid">
    <div class="card mt-4 shadow">
      <div class="card-body">
        <h5 class="header-title mt-0">Statistik Kunjungan</h5>
        <div id="chart"></div>
      </div>
    </div>
    <div class="row mt-4 mb-3">
      <div class="col-md-3 mt-3">
        <div class="card shadow card-area">
          <div class="card-body">
            <h4 class="card-area__title">Data Santri</h4>
            <p class="card-area__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
              laborum.</p>
            <div class="card-area__cta">
              <a href="/html/dashboard/data_santri.html" class="btn btn-secondary">Lihat Data</a>
              <span><i class="fas fa-user-shield fa-2x"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 mt-3">
        <div class="card shadow card-area">
          <div class="card-body">
            <h4 class="card-area__title">Data Kamar</h4>
            <p class="card-area__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
              laborum.</p>
            <div class="card-area__cta">
              <a href="/html/dashboard/data_kamar.html" class="btn btn-secondary">Lihat Data</a>
              <span><i class="fas fa-bed fa-2x"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 mt-3">
        <div class="card shadow card-area">
          <div class="card-body">
            <h4 class="card-area__title">Data Ruang</h4>
            <p class="card-area__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
              laborum.</p>
            <div class="card-area__cta">
              <a href="/html/dashboard/data_ruang.html" class="btn btn-secondary">Lihat Data</a>
              <span><i class="fas fa-door-open fa-2x"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 mt-3">
        <div class="card shadow card-area">
          <div class="card-body">
            <h4 class="card-area__title">Data Gedung</h4>
            <p class="card-area__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus,
              laborum.</p>
            <div class="card-area__cta">
              <a href="/html/dashboard/data_gedung.html" class="btn btn-secondary">Lihat Data</a>
              <span><i class="fas fa-hotel fa-2x"></i></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/fontawesome/js/all.js"></script>
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
</script>
<script src="/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.8.6/apexcharts.min.js" integrity="sha256-fPasH9WrBndkSzQggD2jDhtCOJ8MapJPWFDUjLGPNPM=" crossorigin="anonymous"></script>
<script src="/js/chart.js"></script>
</body>

</html>