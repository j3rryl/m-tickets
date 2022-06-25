<?php
include ('../templates/admin_header.php');
include('../../database/functions.php');
$purchases=getTicketPurchases();
?>
<div class="container">
<div class="content events">
    <div class="content-2">
        <div class="recent-payments">
                    <div class="title">
                        <h2>Sales</h2>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th>Ticket ID</th>
                            <th>Client ID</th>
                            <th>Event ID</th>
                            <th>Payment Type</th>
                            <th>Ticket Price</th>
                            <th>Ticket Quantity</th>
                            <th>Total Price</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date of Purchase</th>

                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($purchases as $purchase){
                        ?>
                        <tr>
                            <td>
                            <?php
                        echo $purchase['ticket_id'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $purchase['client_id'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $purchase['event_id'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $purchase['payment_type'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $purchase['ticket_price'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $purchase['ticket_quantity'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $purchase['total_quantity'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $purchase['email'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $purchase['phone'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $purchase['date_purchased'];
                            ?>
                            </td>
                            <td>
                            <button type='button' class="edit" data-toggle="modal" data-target="#editModal">Edit</button> <br><br>
                            <button type="button" class="delete" id="deleteticket" <?php echo "data-value=".$purchase['ticket_id'].""?> >Delete</button>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    </div>    
</div>
<script src="/assets/js/admin/sales.js"></script>
<?php
include ('../templates/admin_footer.php');
?>