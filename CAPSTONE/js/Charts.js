var options = {
  // series: [{data: <?php echo json_encode($arr); ?>}],
  series: [45, 47, 52, 58, 65, 70],

  chart: {
    width: 400,
    type: 'polarArea'
  },
  labels: ['BSCS', 'BSIT', 'BSIS', 'BSA', 'BSAIS', 'BSENTREP'],
  fill: {
    opacity: 1
  },
  stroke: {
    width: 1,
    colors: undefined
  },
  yaxis: {
    show: false
  },
  legend: {
    position: 'bottom'
  },
  plotOptions: {
    polarArea: {
      rings: {
        strokeWidth: 0
      },
      spokes: {
        strokeWidth: 0
      },
    }
  },
  theme: {
    monochrome: {
      enabled: true,
      shadeTo: 'light',
      shadeIntensity: 0.6
    }
  }
};
var chart = new ApexCharts(document.querySelector("#polarArea"), options);
chart.render();



var barChartOptions = {
  series: [{
    data: [501, 421, 356, 206, 102, 85],
    name: "Scolarship Grantees",
  }],
  chart: {
    type: "bar",
    background: "transparent",
    height: 500,
    toolbar: {
      show: false,
    },
  },
  colors: [
    "#2962ff",
    "#d50000",
    "#2e7d32",
    "#ff6d00",
    "#583cb3",
    "#ffbb55",
  ],
  plotOptions: {
    bar: {
      distributed: true,
      borderRadius: 2,
      horizontal: false,
      columnWidth: "40%",
    }
  },
  dataLabels: {
    enabled: false,
  },
  fill: {
    opacity: 1,
  },
  grid: {
    borderColor: "#55596e",
    yaxis: {
      lines: {
        show: true,
      },
    },
    xaxis: {
      lines: {
        show: true,
      },
    },
  },
  legend: {
    labels: {
      colors: "#7383ec",
    },
    show: true,
    position: "top",
  },
  stroke: {
    colors: ["transparent"],
    show: true,
    width: 2
  },
  tooltip: {
    shared: true,
    intersect: false,
    theme: "dark",
  },
  xaxis: {
    categories: ["TES", "DOST", "CHED", "TULONG DUNONG", "MUNICIPAL", "PROVINCIAL"],
    title: {
      style: {
        color: "#7383ec",
      },
    },
    axisBorder: {
      show: true,
      color: "#55596e",
    },
    axisTicks: {
      show: true,
      color: "#55596e",
    },
    labels: {
      style: {
        colors: "#7383ec",
      },
    },
  },
  yaxis: {
    title: {
      text: "Total Number of SCholarship Grantees",
      style: {
        color: "#7383ec",
      },
    },
    axisBorder: {
      color: "#55596e",
      show: true,
    },
    axisTicks: {
      color: "#55596e",
      show: true,
    },
    labels: {
      style: {
        colors: "#7383ec",
      },
    },
  }
};

var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
barChart.render();