$(document).ready(function () {
  $(document).on("click", "#deleteticket", function (event) {
    var ticket_id = $(this).attr("data-value");
    $.ajax({
      type: "POST",
      url: "/controllers/admin/delete.php",
      data: {
        ticket_id: ticket_id,
      },
      dataType: "json",
      success: function (data) {
        if (data.success === "success") {
          alertify.set("notifier", "position", "top-right");
          alertify.success("Successfully Deleted.");
          console.log("Success");
        } else {
          alertify.set("notifier", "position", "top-right");
          alertify.error("Error.");
          console.log("Error.");
        }
      },
    });
  });
});
