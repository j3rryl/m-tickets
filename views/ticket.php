<?php
include ('templates/header.php');
include ('../Database/functions.php');
$event_id = $_GET['event_id'];
$event=getEvent($event_id);
$start_date=$event['start_date'];
$end_date=$event['end_date'];
$start_time = new DateTime($start_date);
$end_time = new DateTime($end_date);

$event_start_day=date("l", strtotime($start_date));
$event_start_date=date("d", strtotime($start_date));
$event_start_month=date("F", strtotime($start_date));
$event_start_year=date("Y",strtotime($start_date));
$event_start_time = $start_time->format('h:i a');

$event_end_day=date("l", strtotime($end_date));
$event_end_date=date("d", strtotime($end_date));
$event_end_month=date("F", strtotime($end_date));
$event_end_year=date("Y",strtotime($end_date));
$event_end_time = $end_time->format('h:i a');

?>
<link rel="stylesheet" href="/assets/css/ticket.css">
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<title>Buy Ticket</title>
<div class="ticket-container">
    <h5><?php echo $event['event_name']?></h5>
    <hr/>
    <div class="ticket-description">
        <div class="image-container">
            <img src=<?php echo '/assets/images/events/'.$event['event_image_url'] ?> alt="">
        </div>
        <div class="event-details">
            <h5><span>S</span>Description</h5>
            <p><?php echo $event['event_description']?></p>
            <h5><span>S</span>Time</h5>
            <p><?php echo'From '.$event_start_time.' on '.$event_start_day.' on '.$event_start_date.' '.$event_start_month.' to '.$event_end_time.' 
            '.$event_end_day.' '.$event_end_date.' '.$event_end_month.' '.$event_end_year.'.';?></p>
            <button>Buy Ticket</button>
        </div>
    </div>
    <hr/>

    <h5>Location</h5>

    <div class="event-location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.416329638387!2d36.777006!3d-1.2596849!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf85d989cbb0ecc60!2sAbc%20Place%20Nairobi!5e0!3m2!1sen!2ske!4v1652695787992!5m2!1sen!2ske" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <hr />
    <h5>Get your Tickets</h5>
    <div class="payment">
        <div class="select-types">
        <select name="ticket-type" id="" aria-placeholder="Ticket-type">
            <option disabled selected>Ticket Type</option>
            <option value="advance">Advance</option>
            <option value="gate">Gate Ticket</option>
            <option value="early">Early Bird</option>
        </select>
        <p value=<?php echo $event['event_price'];?> >Price: <?php echo $event['event_price'];?></p>
        <select name="number-tickets" id="number-tickets">
            <option disabled selected>Number of Tickets</option>
            <?php for($i=1;$i<=10;$i++){
                echo '<option value='.$i.'>'.$i.'</option>';
            }?>
        </select>
        <p>Total: <span>200</span></p>
        </div>
        <div class="payment-details">
        <select name="payment-method" id="">
            <option disabled selected>Payment Method</option>
            <option value="mpesa">Mpesa</option>
            <option value="visa">VISA</option>
        </select><br />
        <input type="email" placeholder="Enter Email"><br/>
        <input type="tel" placeholder="Enter Phone Number"><br/>
        <button onclick="buyticket()">Checkout!</button>
        </div>
    </div>
</div>
<script>

    $('select').change(function() {
    console.log($(this).val())
    });
    function buyticket(){
        alertify.set('notifier','position', 'top-right');
 alertify.success('Purchase Successful. Check your email for your ticket.');
    }
</script>
<?php
include ('templates/footer.php');
?>
