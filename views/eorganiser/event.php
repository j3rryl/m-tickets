    <?php
        include("../templates/eorg_header.php");
    ?>
    <link rel="stylesheet" href="/assets/css/eorg/event.css">
    <main>
        <aside>
            <div class="img"><i class="fas fa-user-circle fa-5x"></i></div>
            <div class='title'>Welcome, 
                <?php
                    require'../../database/database.php';
                    $query = mysqli_query($conn, "SELECT * FROM `tbl_users` WHERE `email`='$_SESSION[email]'") or die(mysqli_error());
                    $fetch = mysqli_fetch_array($query);
                    echo $fetch['username'];
                ?>    
            </div>
            <ol class="fa-ul">
                <li class=""><span class="fa-li"><i class="fas fa-user-circle fa-2x"></i></span><div class="text"><a href="home.php" style="text-decoration:none; color:black">Home</a></div></li>
                <li class="active"><span class="fa-li"><i class="fas fa-address-card fa-2x"></i></span><div class="text"><a href="event.php" style="text-decoration:none; color:black">Edit Event</a></div></li>
                <li class=""><span class="fa-li"><i class="fas fa-fingerprint fa-2x"></i></span><div class="text">Security</div></li>
                <li class=""><span class="fa-li"><i class="fas fa-comments-dollar fa-2x"></i></i></span><div class="text"><a href="track.html" style="text-decoration:none; color:black">Sales Statement</a></div></li>
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
                        <input type="text"required autocomplete="off" id="event_category" name="event_category" placeholder="Specify category..." >
                    </div>
                    <div class="label-field">
                        <div class='label'>Event Location: </div>
                        <input type="text" required autocomplete="off" name="event_location" placeholder="Event Location...">
                    </div>
                    <div class="label-field">
                        <div class='label'>Event price: </div>
                        <input type="number" required autocomplete="off" id="event_price" name="event_price" placeholder="1000">
                    </div>
                    <div class="extra" >
                        <input type="button" id="check_range" value="Define a price range" >
                    </div>
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
                <button id="next">Next >></button>
            </form>
        </section>
    </main>
    <?php
        include("../templates/eorg_footer.php");
    ?>