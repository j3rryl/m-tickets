<?php
require('../../database/functions.php');
$ticket_url=$_GET['ticket_url'];

// $ticket_url='OiKY6sfd4M';
$receipt=getReceipt($ticket_url);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Icon -->
    <link rel="icon" href="/assets/images/logo/tab-icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="/assets/css/receipt.css">

    <title>Receipt</title>
</head>

<body>
    <div class="my-5 page" size="A4">
        <div class="p-5">
            <section class="top-content bb d-flex justify-content-between">
                <div class="logo">
                    <img src="/assets/images/logo/logo2.png" alt="" class="img-fluid">
                </div>
                <div class="top-left">
                    <div class="graphic-path">
                        <p>Receipt</p>
                    </div>
                    <div class="position-relative">
                        <p>Receipt No. <span><?php echo '#MT'.$receipt['ticket_id'];?></span></p>
                    </div>
                </div>
            </section>

            <section class="store-user mt-5">
                <div class="col-10">
                    <div class="row bb pb-3">
                        <div class="col-7">
                            <p>Supplier,</p>
                            <h2>MTickets</h2>
                            <p class="address"> Nairobi, <br>Kenya </p>
                            <!-- <div class="txn mt-2">TXN: XXXXXXX</div> -->
                        </div>
                        <div class="col-5">
                            <p>Client ID</p>
                            <h2><?php
                            if ($receipt['client_id']=='') {
                                echo 'Anonymous';
                            } else {
                                echo $receipt['client_id'];
                            }
                            ?>
                            </h2>
                        </div>
                    </div>
                    <div class="row extra-info pt-3">
                        <div class="col-7">
                            <p>Payment Method: <span><?php echo $receipt['payment_name'];?></span></p>
                            <p>Event Name: <span><?php echo $receipt['event_name'];?></span></p>
                        </div>
                        <div class="col-5">
                            <p>Deliver Date: <span><?php echo $receipt['date_purchased'];?></span></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="product-area mt-4">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>Item Description</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <?php
                                echo '<img class="mr-3 img-fluid" src="/assets/images/events/'.$receipt['event_image_url'].'"'.' alt='.$receipt['event_image_url'].'>';
                                ?>
                                    <div class="media-body">
                                        <p class="mt-0 title"><?php echo $receipt['event_name'];?></p>
                                        <span
                                            style="text-overflow: ellipsis; display: block; width: 30vw; overflow: hidden; white-space: nowrap;">
                                            <?php echo $receipt['event_description'];?>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td><?php echo $receipt['event_price'];?></td>
                            <td><?php echo $receipt['ticket_quantity'];?></td>
                            <td><?php echo $receipt['total_quantity'];?></td>
                        </tr>

                    </tbody>
                </table>
            </section>

            <section class="balance-info">
                <div class="row">
                    <div class="col-8">
                        <p class="m-0 font-weight-bold"> Note: </p>
                        <p>You may request to cancel your ticket for a full refund, up to 72 hours before the date and
                            time of the event. Cancellations between 25-72 hours before the event may transferred to a
                            different date/time of the same class. Cancellation requests made within 24 hours of the
                            class date/time may not receive a refund nor a transfer. When you register for a class, you
                            agree to these terms.</p>
                    </div>
                    <div class="col-4">
                        <table class="table border-0 table-hover">
                            <tfoot>
                                <tr>
                                    <td>Total:</td>
                                    <td><?php echo 'Kshs. '.$receipt['total_quantity']?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Cart BG -->
            <img src="/assets/images/logo/cart.jpg" class="img-fluid cart-bg" alt="">

            <footer>
                <hr>
                <p class="m-0 text-center">
                    View This Receipt Online At - <?php
                    echo '<a href="receipt.php?ticket_url='.$receipt['ticket_url'].'">'.$receipt['event_name'].'</a>';
                    ?>
                </p>
                <div class="social pt-3">
                    <span class="pr-2">
                        <i class="fas fa-mobile-alt"></i>
                        <span>+254790 229 229</span>
                    </span>
                    <span class="pr-2">
                        <i class="fas fa-envelope"></i>
                        <span>info@mtickets.com</span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-facebook-f"></i>
                        <span>/mtickets</span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-youtube"></i>
                        <span>/mtickets</span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-instagram"></i>
                        <span>/mtickets</span>
                    </span>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>