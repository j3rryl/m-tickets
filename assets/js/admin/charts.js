var xbarValues = ["Sports", "Concerts", "Jazz", "Hip-Hop", "Family"];
var ybarValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];
const configbar = new Chart("barChart", {
    type: "bar",
    data: {
      labels: xbarValues,
      datasets: [{
        backgroundColor: barColors,
        data: ybarValues
      }]
    },
    options: {
      legend: {display: false},
      title: {
        display: true,
        text: "Total Ticket Sales"
      }
    }
  });
  var xValues = [50,60,70,80,90,100,110,120,130,140,150];
  var yValues = [7,8,8,9,9,9,10,11,14,14,15];
  const configline = new Chart("lineChart", {
    
    type: 'line',
    data: {
        labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
    },
    options: {
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 6, max:16}}],
        }
    },
  });
  const doughdata = {
    labels: [
      'Concerts',
      'Sports',
      'Hip-Hop'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: [300, 50, 100],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
      ],
      hoverOffset: 4
    }]
  };

  const configdoughnut = new Chart("doughChart", {
    
    type: 'doughnut',
    data: doughdata,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Chart.js Doughnut Chart'
        }
      }
    },
  });