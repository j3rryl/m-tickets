$(document).ready(function(){
    function load_data(){
        $.ajax({
            type:'GET',
            url:"/views/home.php",
            success: function(data){
                $('.ajax-page').html(data);
            }
        })
    }
    load_data();
    $(document).on('click', '#categories', null, function(event){
    event.preventDefault();
    var category_id = $(this).attr('data-value');
    $.ajax({
        type:'POST',
        url:"/views/category.php",
        data:{
            category_id:category_id,
        },
        success: function(data){
            window.history.pushState('Category','title','/views/category.php?category='+category_id+'')
            $('.ajax-page').html(data);
        }
    });
    
    // $.get('/views/home.php',function(data,status){
    //     $('.ajax-page').html(data);
    //     alert(status);
    // })
    // $('.ajax-page').load('/views/home.php');
    // console.log(value);
    });
    $(document).on('click', '#popular', null, function(event){
        event.preventDefault();
        var event_id = $(this).attr('data-value');
        var event_name = $(this).attr('data-name');

        // alert(event_name);
        window.location.replace('/views/ticket.php?event='+event_name+'&event_id='+event_id+'')
        // $.ajax({
        //     type:'POST',
        //     url:"/views/ticket.php",
        //     data:{
        //         category_id:category_id,
        //     },
        //     success: function(data){
        //         // window.history.pushState('Category','title','/views/category.php?category='+category_id+'')
        //         // $('.ajax-page').html(data);
        //     }
        // });
        });
})