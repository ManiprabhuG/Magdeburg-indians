/*************************
      Chart Column
*************************/

    var colors = [
      '#f26722',
      '#f26722',
      '#f26722',
      '#f26722'
    ]

    var options = {
      series: [{
      data: [10, 15, 20, 25]
    }],
      chart: {
      height: 470,
      type: 'bar',
       toolbar: {
            show: false
        },
      events: {
        click: function(chart, w, e) {
          // console.log(chart, w, e)
        }
      }
    },
    colors: colors,
    plotOptions: {
      bar: {
        columnWidth: '45%',
        distributed: true
      }
    },
    dataLabels: {
      enabled: false
    },
    legend: {
      show: false
    },
    grid: {
      borderColor: '#404040',
      strokeDashArray: 0,
    },

        yaxis: {
            tickAmount: 1,
             axisBorder: {
                show: false,
                color: '#fff',
            },
            labels: {
                show: false
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },

            min: 0,
            },


    xaxis: {
      categories: [
        ['2010'],
        ['2012'],
        ['2016'],
        ['2020'],
      ],
      axisBorder: {
          show: false,
          color: '#fafbfb',
          },
      labels: {
        style: {
          colors: colors,
          fontSize: '14px'
        }
      }
    }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
