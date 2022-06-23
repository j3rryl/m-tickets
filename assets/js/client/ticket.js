$(document).ready(function () {
  var event_price = $("#event-price").attr("data-value");
  $("#number-tickets").change(function () {
    var no_tickets = $(this).val();
    var total_price = no_tickets * event_price;
    $("#total-price").text(total_price);
    console.log(total_price);
  });
  $("#payment-method").change(function () {});

  $("#buy-ticket").on("click", function () {
    var total_price = $("#total-price").text();
    var payment_method = $("#payment-method").val();
    var no_tickets = $("#number-tickets").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var event_id = $("#event-details").attr("data-value");
    var event_name = $("#event_name").attr("data-value");
    var price = $("#event-price").attr("data-value");
    if (
      email == "" ||
      phone == "" ||
      payment_method == "" ||
      no_tickets == ""
    ) {
      alertify.set("notifier", "position", "top-right");
      alertify.error("Fill in all inputs.");
      console.log("Error");
    } else {
      $.ajax({
        url: "/controllers/client/checkout.php",
        type: "POST",
        dataType: "json",
        data: {
          event_name: event_name,
          total_price: total_price,
          no_tickets: no_tickets,
          email: email,
          phone: phone,
          payment_method: payment_method,
          event_id: event_id,
          price: price,
        },
        success: function (data) {
          if (data.success === "success") {
            alertify.set("notifier", "position", "top-right");
            alertify.success(
              "Purchase Successful. Check your email for your Ticket."
            );
            console.log("Success");
          } else {
            alertify.set("notifier", "position", "top-right");
            alertify.error("Fill in all inputs.");
            console.log("Error");
          }
        },
      });
    }
  });
});
