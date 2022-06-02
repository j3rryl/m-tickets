$(document).ready(function(){
    $("#search-txt").keyup(function(){
        var search_text=$("#search-txt").val().toLowerCase();
        console.log(search_text);
        $.ajax({
            type:'POST',
            url:"/views/client/search.php",
            data:{
                search_text:search_text,
            },
            success: function(data){
                $('.filter-container').html(data);
            }
        });
    });
    
    var element = document.getElementById("events");
    element.classList.add("active");  
    const queryString = window.location.search;
    // console.log(queryString);
    const urlParams = new URLSearchParams(queryString);
    const page = urlParams.get('page')
    var element = document.getElementById(page);
    element.classList.add("active");
});