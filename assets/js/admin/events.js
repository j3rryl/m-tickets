$(document).ready(function () {
  $(document).on("click", "#addEvent", function (event) {
    var image_path = $("#event_image").val();
    var event_category = $("#event_category").val();
    var event_name = $("#event_name").val();
    var location = $("#event_location").val();
    var price = $("#event_price").val();
    var description = $("#event_description").val();
    var start_date = $("#start_date").val();
    var end_date = $("#end_date").val();

    var image_name = image_path.replace(/^.*[\\\/]/, "");
    var event_start_date = start_date.replace(/T/g, " ");
    var event_end_date = end_date.replace(/T/g, " ");

    if (
      image_name == "" ||
      event_category == null ||
      event_name == "" ||
      location == "" ||
      price == "" ||
      description == "" ||
      start_date == "" ||
      end_date == ""
    ) {
      alertify.set("notifier", "position", "top-right");
      alertify.error("Fill in all spaces.");
    } else {
      $.ajax({
        type: "POST",
        url: "/controllers/admin/addorg.php",
        data: {
          image_path: image_path,
          image_name: image_name,
          event_category: event_category,
          event_name: event_name,
          location: location,
          price: price,
          description: description,
          event_start_date: event_start_date,
          event_end_date: event_end_date,
        },
        dataType: "json",
        success: function (data) {
          if (data.success === "success") {
            alertify.set("notifier", "position", "top-right");
            alertify.success("Successfully Added.");
            console.log("Success");
          } else {
            alertify.set("notifier", "position", "top-right");
            alertify.error("Error.");
            console.log("Error.");
          }
        },
      });
    }
  });
  $(document).on("click", "#edit-event", function (event) {
    var event_id = $(this).attr("data-value");
    $.ajax({
      type: "POST",
      url: "/controllers/admin/edit.php",
      data: {
        event_id: event_id,
      },
      dataType: "json",
      success: function (data) {
        $("#eevent_name").attr("placeholder", data.event_name);
        $("#eevent_name").val(data.event_name);
        $("#eevent_location").attr("placeholder", data.event_location);
        $("#eevent_price").attr("placeholder", data.event_price);
        $("#eevent_category").val(data.event_category_id).change();
        // $("#eevent_image").val(data.event_image);
        $("#eevent_description").attr("placeholder", data.event_description);
        $("#eevent_description").val(data.event_description);

        var event_start_date = data.event_start_date.replace(/ /g, "T");
        var event_end_date = data.event_end_date.replace(/ /g, "T");

        $("#estart_date").val(event_start_date);
        $("#eend_date").val(event_end_date);
        // var event_start_date = start_date.replace(/T/g, ' ');
        // var event_end_date = end_date.replace(/T/g, ' ');
      },
    });
    // alertify.set('notifier','position', 'top-right');
    //       alertify.success('Edit.');
    //       console.log("Success");
  });

  $(document).on("click", "#delete-event", function (event) {
    var event_id = $(this).attr("data-value");
    $.ajax({
      type: "POST",
      url: "/controllers/admin/delete.php",
      data: {
        event_id: event_id,
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
