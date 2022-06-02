$(document).ready(function(){
var event_price=$('#event-price').attr('data-value');
    $('select').change(function() {
    var no_tickets=$(this).val();
    var total_price=no_tickets*event_price;
    $("#total-price").text(total_price);
    console.log(total_price)
    });
    $('#buy-ticket').on('click',function() {
        alertify.set('notifier','position', 'top-right');
        alertify.success('Purchase Successful. Check your email for your ticket.');
    });
});
