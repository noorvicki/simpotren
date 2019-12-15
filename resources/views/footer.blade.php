

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="/js/jquery-3.4.1.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
  </script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#table_id').DataTable({
        "paging": true,
        "ordering": true,
        "info": false,
        responsive: {
          breakpoints: [{
              name: 'bigdesktop',
              width: Infinity
            },
            {
              name: 'meddesktop',
              width: 1480
            },
            {
              name: 'smalldesktop',
              width: 1280
            },
            {
              name: 'medium',
              width: 1188
            },
            {
              name: 'tabletl',
              width: 1024
            },
            {
              name: 'btwtabllandp',
              width: 848
            },
            {
              name: 'tabletp',
              width: 768
            },
            {
              name: 'mobilel',
              width: 480
            },
            {
              name: 'mobilep',
              width: 320
            }
          ]
        }
      });
    });
  </script>
  <script src="/fontawesome/js/all.js"></script>
  <script src="/js/index.js"></script>
</body>

</html>