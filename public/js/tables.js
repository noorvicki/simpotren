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
    },
    dom: 'Bfrtip',
    buttons: [{
        extend: 'pdf',
        className: 'btn btn-secondary mb-2',
        text: 'PDF'
      },
      {
        extend: 'excel',
        className: 'btn btn-secondary mb-2',
        text: 'Excel'
      }
    ]
  });
});