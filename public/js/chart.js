var options = {
  chart: {
    type: 'area'
  },
  series: [{
    name: 'Berkunjung',
    data: [30, 40, 45, 50, 49, 60, 70, 91, 125, 90, 30, 40]
  }],
  grid: {
    position: 'front',
    borderColor: '#111',
    strokeDashArray: 9
  },
  dataLabels: {
    enabled: false
  },
  yaxis: {
    show: true,
    title: {
      text: 'Total Kunjungan',
      style: {
        fontSize: '15px'
      }
    }
  },
  xaxis: {
    title: {
      text: 'Tanggal Kunjungan',
      style: {
        fontSize: '15px'
      }
    },
    // categories: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31]
    categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']
  },
  fill: {
    type: 'gradient',
    gradient: {
      shadeIntensity: 1,
      opacityFrom: 0.7,
      opacityTo: 0.9,
      stops: [0, 90, 100]
    }
  },
  colors: ['#33E97B'],
  legend: {
    position: 'top'
  },
  plotOptions: {
    bar: {
      endingShape: 'rounded'
    }
  }
}

var chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();