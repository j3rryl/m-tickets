var labels;
var ticket_quantity;
$(document).ready(function () {
  onLoad();
  function onLoad() {
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "/controllers/admin/chart.php",
      data: {
        chart_select: "categories",
      },
      success: function (data) {
        function getRandomColor() {
          return "hsla(" + Math.random() * 360 + ", 100%, 50%, 1)";
        }
        var color = [];
        if (data.success === "categories") {
          var length = Object.keys(data.users).length;
          var category_name = [];
          var quantity = [];
          for (var count = 0; count < length; count++) {
            category_name.push(data.users[count]["category_name"]);
            quantity.push(data.users[count]["ticket_quantity"]);
            color.push(getRandomColor());
          }
          labels = category_name;
          ticket_quantity = quantity;
          alertify.set("notifier", "position", "top-right");
          alertify.notify("Sales per Category");
          console.log("Success");
        }
        //Charts
        console.log(category_name);
        console.log(quantity);
        var xbarValues = labels;
        var ybarValues = ticket_quantity;
        //Bar chart
        var barColors = color;
        const configbar = new Chart("barChart", {
          type: "bar",
          data: {
            labels: xbarValues,
            datasets: [
              {
                backgroundColor: barColors,
                data: ybarValues,
              },
            ],
          },
          options: {
            legend: { display: false },
            title: {
              display: true,
              text: "Total Ticket Sales",
            },
          },
        });
        //Doughnut chart

        const doughdata = {
          labels: labels,
          datasets: [
            {
              label: "My First Dataset",
              data: quantity,
              backgroundColor: color,
              hoverOffset: 4,
            },
          ],
        };

        const configdoughnut = new Chart("doughChart", {
          type: "doughnut",
          data: doughdata,
          options: {
            responsive: true,
            plugins: {
              legend: {
                position: "top",
              },
              title: {
                display: true,
                text: "Chart.js Doughnut Chart",
              },
            },
          },
        });
        //Line Chart
        var xValues = labels;
        var yValues = quantity;
        const configline = new Chart("lineChart", {
          type: "line",
          data: {
            labels: xValues,
            datasets: [
              {
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues,
              },
            ],
          },
          options: {
            legend: { display: false },
            scales: {
              yAxes: [{ ticks: { min: 6, max: 16 } }],
            },
          },
        });
      },
    });
  }
  $("#chart-select").change(function () {
    var chart_select = $("#chart-select").val();
    console.log(chart_select);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "/controllers/admin/chart.php",
      data: {
        chart_select: chart_select,
      },
      success: function (data) {
        function getRandomColor() {
          return "hsla(" + Math.random() * 360 + ", 100%, 50%, 1)";
        }
        var color = [];
        if (data.success === "users") {
          var length = Object.keys(data.users).length;
          var user_id = [];
          var quantity = [];
          for (var count = 0; count < length; count++) {
            if (user_id.id == null) {
              user_id.push("Anonymous");
            } else {
              user_id.push(data.users[count]["first_name"]);
            }
            quantity.push(data.users[count]["ticket_quantity"]);
            color.push(getRandomColor());
          }
          console.log(user_id);
          console.log(quantity);

          labels = user_id;
          ticket_quantity = quantity;
          alertify.set("notifier", "position", "top-right");
          alertify.notify("Sales per user.");
          console.log("Success");
        } else if (data.success === "categories") {
          var length = Object.keys(data.users).length;
          var category_name = [];
          var quantity = [];
          for (var count = 0; count < length; count++) {
            category_name.push(data.users[count]["category_name"]);
            quantity.push(data.users[count]["ticket_quantity"]);
            color.push(getRandomColor());
          }
          labels = category_name;
          ticket_quantity = quantity;
          alertify.set("notifier", "position", "top-right");
          alertify.notify("Sales per Category");
          console.log("Success");
        } else if (data.success === "eorg") {
          var length = Object.keys(data.users).length;
          var eorg = [];
          var quantity = [];
          for (var count = 0; count < length; count++) {
            eorg.push(data.users[count]["first_name"]);
            quantity.push(data.users[count]["value_sum"]);
            color.push(getRandomColor());
          }
          labels = eorg;
          ticket_quantity = quantity;
          alertify.set("notifier", "position", "top-right");
          alertify.notify("Sales per Event Organizer");
          console.log("Success");
        }
        //Charts
        console.log(category_name);
        console.log(quantity);
        var xbarValues = labels;
        var ybarValues = ticket_quantity;
        //Bar chart
        var barColors = color;
        const configbar = new Chart("barChart", {
          type: "bar",
          data: {
            labels: xbarValues,
            datasets: [
              {
                backgroundColor: barColors,
                data: ybarValues,
              },
            ],
          },
          options: {
            legend: { display: false },
            title: {
              display: true,
              text: "Total Ticket Sales",
            },
          },
        });
        //Doughnut chart

        const doughdata = {
          labels: labels,
          datasets: [
            {
              label: "My First Dataset",
              data: quantity,
              backgroundColor: color,
              hoverOffset: 4,
            },
          ],
        };

        const configdoughnut = new Chart("doughChart", {
          type: "doughnut",
          data: doughdata,
          options: {
            responsive: true,
            plugins: {
              legend: {
                position: "top",
              },
              title: {
                display: true,
                text: "Chart.js Doughnut Chart",
              },
            },
          },
        });
        //Line Chart
        var xValues = labels;
        var yValues = quantity;
        const configline = new Chart("lineChart", {
          type: "line",
          data: {
            labels: xValues,
            datasets: [
              {
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues,
              },
            ],
          },
          options: {
            legend: { display: false },
            scales: {
              yAxes: [{ ticks: { min: 6, max: 16 } }],
            },
          },
        });
      },
    });
  });
});
