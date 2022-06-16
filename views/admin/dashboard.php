<?php
include ('../templates/admin_header.php');
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
                        <h1>2194</h1>
                        <h3>Users</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Event Organizers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Events</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                <canvas id="barChart" style="width:100%;max-width:700px"></canvas><br>
                <canvas id="doughChart" style="width:100%;max-width:700px"></canvas><br>
                <canvas id="lineChart" style="width:100%;max-width:700px"></canvas><br>

                </div>
            </div>
        </div>
    </div>
    <script src="/assets/js/admin/charts.js"></script>
    <?php
include ('../templates/admin_footer.php');
?>