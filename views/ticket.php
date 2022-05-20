<?php
include ('templates/header.php');
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
    <h5>The Hanye Episode 2</h5>
    <hr/>
    <div class="ticket-description">
        <div class="image-container">
            <img src="/assets/images/events/hanye.jpeg" alt="">
        </div>
        <div class="event-details">
            <h5><span>S</span>Description</h5>
            <p>Bringing people out for fun and good times and at the end of the event,we give back to the community through charity...our main iam is good vibes and charity.</p>
            <h5><span>S</span>Time</h5>
            <p>From 11:00am on Saturday 11th June to 11:55pm Saturday 11th June 2022</p>
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
        <select name="ticket-type" id="" aria-placeholder="Ticket-typew">
            <option disabled selected>Ticket Type</option>
            <option value="advance">Advance</option>
            <option value="gate">Gate Ticket</option>
            <option value="early">Early Bird</option>
        </select>
        <p>Price: 200</p>
        <select name="number-tickets" id="">
            <option disabled selected>Number of Tickets</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <p>Total: 200</p>
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
    function buyticket(){
        alertify.set('notifier','position', 'top-right');
 alertify.success('Purchase Successful. Check your email for your ticket.');
    }
</script>
<?php
include ('templates/footer.php');
?>
