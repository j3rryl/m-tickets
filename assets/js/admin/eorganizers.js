$(document).ready(function () {
  $(document).on("click", "#deleteuser", function (event) {
    var user_id = $(this).attr("data-value");
    $.ajax({
      type: "POST",
      url: "/controllers/admin/delete.php",
      data: {
        user_id: user_id,
        user_id: $(this).attr("data-value"),
      },
      dataType: "json",
      success: function (data) {
        if (data.success === "success") {
          alertify.set("notifier", "position", "top-right");
          alertify.success("Successfully Deleted.");
          console.log("Success");
        } else if (data.success === "error") {
          alertify.set("notifier", "position", "top-right");
          alertify.error("Error");
          console.log("Error");
        } else {
          alertify.set("notifier", "position", "top-right");
          alertify.error("Error.");
          console.log("Error.");
        }
      },
    });
  });

  $("#add-org").on("click", "#addUser", function () {
    $.ajax({
      type: "POST",
      url: "/controllers/admin/addorg.php",
      data: {
        first_name: $("#first_name").val(),
        last_name: $("#last_name").val(),
        email: $("#email").val(),
        password: $("#password").val(),
        pin: $("#pin").val(),
        phone: $("#phone").val(),
      },
      dataType: "json",
      success: function (data) {
        if (data.success === "success") {
          alertify.set("notifier", "position", "top-right");
          alertify.success("Success.");
          console.log("Success");
        } else if (data.success === "empty") {
          alertify.set("notifier", "position", "top-right");
          alertify.error("Empty");
          console.log("Error");
        } else if (data.success === "exists") {
          alertify.set("notifier", "position", "top-right");
          alertify.error("Email address already exists.");
          console.log("Email address already exists.");
        } else {
          alertify.set("notifier", "position", "top-right");
          alertify.error("Error.");
          console.log("Error.");
        }
      },
    });
  });
});
