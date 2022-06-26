$(document).ready(function(){
    $('#check_range').click(function(){
        $('#Range').show();
    });
    $("#next").on('click',function(){
        var event_name=$("#event_name").val();
        var event_category=$("event_category").val();
        var event_location=$("#event_location").val();
        var event_price=$("#event_price").val();
        var event_image=$("#event_image").val();
        var event_description=$("event_description").val();
        var event_start_date=$("#event_start_date").val();
        var event_end_date=$("#event_end_date").val();
        // console.log(event_name+event_location+)
        if(event_name==""||event_description==""||event_category==""||event_location==""||event_price==""|| event_start_date==""||event_end_date==""){
            alertify.set('notifier','position', 'top-right');
            alertify.error('Fill in all the required information.');     
        } else {
            $.ajax({
                method:'POST',
                url:'/controllers/eorganiser/addevent.php',
                data:{
                    event_name:event_name,
                    event_category:event_category,
                    event_location:event_location,
                    event_price:event_price,
                    event_image:event_image,
                    event_description:event_description,
                    event_start_date:event_start_date,
                    event_end_date:event_end_date
                },
                dataType:'json',
                success: function(data){
                    if(data.success==='success'){
                        // window.open('/index.php');
                        window.location.replace('home.php');
                        alertify.set('notifier','position', 'top-right');
                        alertify.success('Event edited Successfully'); 
                    } else {
                        alertify.set('notifier','position', 'top-right');
                        alertify.error('Registration failed. Missing required informations'); 
                    }
                }
            })
        }
    });
});