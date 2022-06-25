<?php
include ('../templates/admin_header.php');
require_once("../../database/functions.php");
$users=getUsers();
$events=getTotalEvents();
$eorg=getEventOrganizers();
$revenue=getTotalRevenue();
$rowss=getEventOrganizerSales();


$sizeofUsers=sizeof($users);
$sizeofEvents=sizeof($events);
$sizeofEorg=sizeof($eorg);

?>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"></button>
                </div>
                <div class="user">
                    <!-- <a href="#" class="btn">Add New</a> -->
                    <!-- <img src="notifications.png" alt=""> -->
                    <div class="img-case">
                        <!-- <img src="user.png" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1><?php echo $sizeofUsers;
                        ?></h1>
                        <h3>Users</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1><?php echo $sizeofEorg;?></h1>
                        <h3>Event Organizers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1><?php echo $sizeofEvents;?></h1>
                        <h3>Events</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1><?php echo 'Kshs. '.$revenue;?></h1>
                        <h3>Total Sales</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
            <select required name="payment-method" id="chart-select">
            <option value disabled='sales'>Sales per:</option>
            <option selected value='categories'>Categories</option>';
            <option value='users'>Users</option>
            <option value='eorg'>Event Organizers</option>
            </select><br /><br>
                <div class="recent-payments">
                <canvas id="barChart" style="width:100%;max-width:700px"></canvas><br><br><br>
                <canvas id="doughChart" style="width:100%;max-width:700px"></canvas><br><br><br>
                <canvas id="lineChart" style="width:100%;max-width:700px"></canvas><br><br><br>

                </div>
            </div>
        </div>
    </div>
    <script src="/assets/js/admin/charts.js"></script>
    <?php
include ('../templates/admin_footer.php');
?>