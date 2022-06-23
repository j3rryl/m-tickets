<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Icon -->
    <link rel="icon" href="/assets/images/logo/tab-icon.png">
    <!-- Charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <!-- Ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h2>Admin</h2>
        </div>
        <ul>
            <li><i style="color:#56A099;" class="fas fa-home"></i> &nbsp;<a
                    href="dashboard.php"><span>Dashboard</span></a> </li>
            <li><i style="color:#56A099;" class="fas fa-users"></i>&nbsp;<a href="users.php"><span>Users</span></a>
            </li>
            <li><i style="color:#56A099;" class="fas fa-users-cog"></i>&nbsp;<a href="eorganizers.php"><span>Event
                        Organizers</span></a> </li>
            <li><i style="color:#56A099;" class="fas fa-calendar-alt"></i>&nbsp;<a
                    href="events.php"><span>Events</span></a> </li>
            <li><i style="color:#56A099;" class="fas fa-money-check-alt"></i>&nbsp;<a
                    href="sales.php"><span>Sales</span></a> </li>
        </ul>
    </div>