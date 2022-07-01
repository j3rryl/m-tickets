    <?php
        include("../templates/eorg_header.php");
        include('../../database/functions.php');
        $categories=getImages();
        ?>
    <link rel="stylesheet" href="/assets/css/eorg/event.css">
    <main>
        <aside>
            <div class="img"><i class="fas fa-user-circle fa-5x"></i></div>
            <div class='title'>Welcome, 
                <?php
                    require'../../database/database.php';
                    $query = mysqli_query($conn, "SELECT * FROM `tbl_organizers` WHERE `email`='$_SESSION[email]'") or die(mysqli_error($conn));
                    $fetch = mysqli_fetch_array($query);
                    echo $fetch['username'];
                ?>    
            </div>
            <ol class="fa-ul">
                <li class=""><span class="fa-li"><i class="fas fa-user-circle fa-2x"></i></span><div class="text"><a href="home.php" style="text-decoration:none; color:black">Home</a></div></li>
                <li class="active"><span class="fa-li"><i class="fas fa-address-card fa-2x"></i></span><div class="text"><a href="event.php" style="text-decoration:none; color:black">Add Event</a></div></li>
                <li class=""><span class="fa-li"><i class="fas fa-fingerprint fa-2x"></i></span><div class="text">Security</div></li>
                <li class=""><span class="fa-li"><i class="fas fa-comments-dollar fa-2x"></i></i></span><div class="text"><a href="track.php" style="text-decoration:none; color:black">Sales Statement</a></div></li>
            </ol>
        </aside>
        <section class="content">
            <form>
                <div class="header">General Information</div>
                <div class="label-content">
                    <div class="label-field">
                        <div class='label'>Event Name: </div>
                        <input type="text" required autocomplete="off" id="event_name" name="event_name" placeholder="Enter the name of the event">
                    </div>
                    <div class="label-field">
                        <div class="label">Event Category: </div>
                        <select id="event_category" name="event_category" style="width: 380px;" >
                        <option disabled selected style="color: lightgrey;">Select Category</option>
                                <?php
                                foreach ($categories as $category){
                                    echo '<option class="box1" value='.$category['category_id'].'>'.$category['category_name'].'</option>';
                                }
                                ?>
                        </select>
                        <!-- <input type="text"required autocomplete="off" id="event_category" name="event_category" placeholder="Specify category..." > -->
                    </div>
                    <div class="label-field">
                        <div class='label'>Event Location: </div>
                        <input type="text" required autocomplete="off" id="event_location" name="event_location" placeholder="Event Location...">
                    </div>
                    <div class="label-field">
                        <div class='label'>Event price: </div>
                        <input type="number" required autocomplete="off" id="event_price" name="event_price" placeholder="1000">
                    </div>
                    <!-- Didn't Know purpose of this so commented it out-->
                    <!-- <div class="extra" >
                        <input type="button" id="check_range" value="Define a price range" >
                    </div> -->
                    <div id="Range" style="display:none">      
                    </div>
                    <div class="label-field">
                        <div class='label'>Start date: </div>
                        <input type="datetime-local" id="event_start_date" name="event_start_date">
                    </div>
                    <div class="label-field">
                        <div class='label'>End date: </div>
                        <input type="datetime-local" id="event_end_date" name="event_end_date">
                    </div>
                </div>
                <div class="header">Additional Information</div>
                <div class="label-content">
                    <div class="label-field">
                        <div class='label'>Choose File: </div>
                        <input type="file" id="event_image" name="event_image">
                    </div>
                    <div class="extra">
                        <input type="checkbox" class='checkbox'>
                        <div>Request for Mticket poster services</div>
                    </div>
                    <div class="label-field">
                        <div class='label'>Event Description: </div>
                        <textarea id="event_description" name="event_description" autocomplete="on" rows="15" cols="50"></textarea>
                    </div>
                </div>
                <button type="button" id="addevent" <?php echo "data-value=".$_SESSION['organizer_id'];?> >Add Event</button>
            </form>
        </section>
    </main>
    <script>
$(document).ready(function () {
    $(document).on("click", "#addevent", function (event) {
        event.preventDefault();
    var eorg_id = $(this).attr("data-value");
    var image_path = $("#event_image").val();
    var event_category = $("#event_category").val();
    var event_name = $("#event_name").val();
    var location = $("#event_location").val();
    var price = $("#event_price").val();
    var description = $("#event_description").val();
    var start_date = $("#event_start_date").val();
    var end_date = $("#event_end_date").val();

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
      alert("empty");
    } else{
        $.ajax({
        type: "POST",
        url: "/controllers/admin/addorg.php",
        data: {
          eorg_id:eorg_id,
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
        url: "/controllers/eorganiser/addevent.php",
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
});

    </script>
    <?php
        include("../templates/eorg_footer.php");
    ?>