$(document).ready(function(){
    function load_data(){
        $.ajax({
            type:'GET',
            url:"../eorganiser/above_the_fold.php",
            success: function(data){
                $('.ajax-page').html(data);
            }
        })
    }
    load_data();
})