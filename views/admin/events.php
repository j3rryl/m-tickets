<?php
include('../../database/functions.php');
include ('../templates/admin_header.php');
$events=getTotalEvents();
$categories=getImages();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Ajax -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="container">
    <div class="content events">
    <div class="content-2">
        <div class="recent-payments">
                    <div class="title">
                        <h2>Events</h2>
                        <button type='button' class="add" data-toggle="modal" data-target="#addModal">Add Event</button>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th>Event ID</th>
                            <th>Event Name</th>
                            <th>Event Category</th>
                            <th>Event Location</th>
                            <th>Event Price</th>
                            <th>Images</th>
                            <th>Event Description</th>
                            <th>Event Likes</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th style="width: 5%;">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($events as $event){
                        ?>
                        <tr>
                            <td>
                            <?php
                        echo $event['event_id'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $event['event_name'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $event['event_category'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $event['event_location'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $event['event_price'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo '<img style="width:8vw; height:18vh;" src="/assets/images/events/'.$event['event_image_url'].'"'.' alt="">';
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $event['event_description'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $event['event_likes'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $event['start_date'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $event['end_date'];
                            ?>
                            </td>
                            <td>
                            <button type='button' class="edit" id="edit-event" <?php echo "data-value=".$event['event_id'].""?> data-toggle="modal" data-target="#editModal">Edit</button> <br><br>
                            <button type="button" class="delete" id="delete-event" <?php echo "data-value=".$event['event_id'].""?> >Delete</button>
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

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      
      <div class="modal-body">
        <form action="">
          <label for="">Fgesd</label>
          <input type="text">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       
      <form action="" class="visa-form" id="visa-form" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
      <label for="mpesa-confirm">Event Name:</label><br>
    <input type="text" class="box1" name="product_name" id="event_name" placeholder="Event Name"><br>
    <label for="mpesa-confirm">Event Category:</label><br>
    <select name="subcategory_id" id="event_category" class="form-control input-lg box1">
    <option class="box1" disabled selected>Select Category</option>
            <?php
              foreach ($categories as $category){
                echo '<option class="box1" value='.$category['category_id'].'>'.$category['category_name'].'</option>';
              }
            ?>
    </select>
    <label for="mpesa-confirm">Event Location:</label><br>
    <input type="text" class="box1" name="product_price" id="event_location" placeholder="Event Location"><br>
    <label for="mpesa-confirm">Event Price:</label><br>
    <input type="number" class="box1" name="product_price" id="event_price" placeholder="Event Price"><br>
    <label for="mpesa-confirm">Event Image:</label><br>
    <input type="file" class="box1" name="product_image" id="event_image" placeholder="Event Image"><br>
    <label for="mpesa-confirm">Event Description:</label><br>
    <textarea rows="4" cols="50" class="box1" name="event_description" id="event_description" placeholder="Event Description"> </textarea>
    <br>
    <label for="mpesa-confirm">Start Date:</label><br>
    <input type="date" class="box1" name="product_price" id="start_date" placeholder="Start Date"><br>
    <label for="mpesa-confirm">End Date:</label><br>
    <input type="date" class="box1" name="product_price" id="end_date" placeholder="End Date"><br>
    
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="addEvent">Confirm</button>
        </form>
    </div>
  </div>
</div>




<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function(){
    $(document).on('click', '#addEvent', function(event){
      var image=$('#event_image').val();
      var event_category=$('#event_category').val();
      var event_name=$('#event_name').val();
      var location=$('#event_location').val();
      var price=$('#event_price').val();
      var description=$('#event_description').val();
      var start_date=$('#start_date').val();
      var end_date=$('#end_date').val();

      var image_name = image.replace(/^.*[\\\/]/, '');

      if(image_name==""||event_category==null||event_name==""||location==""||price==""||
        description==""||start_date==""||end_date==""){
        alertify.set('notifier','position', 'top-right');
        alertify.error('Fill in all spaces.'); 
      } else{
        $.ajax({
        type:'POST',
        url:"/controllers/admin/addorg.php",
        data:{
            image_name:image_name,
            event_category:event_category,
            event_name:event_name,
            location:location,
            price:price,
            description:description,
            start_date:start_date,
            end_date:end_date
        },
        dataType:'json',
        success: function(data){
            if(data.success==='success'){
            alertify.set('notifier','position', 'top-right');
            alertify.success('Successfully Added.'); 
            console.log("Success");
            } else {
            alertify.set('notifier','position', 'top-right');
            alertify.error('Error.'); 
            console.log("Error.");
            } 
        }
    });
      }
      
    });
    $(document).on('click', '#edit-event', function(event){
      var event_id = $(this).attr('data-value');
      alertify.set('notifier','position', 'top-right');
            alertify.success('Edit.'); 
            console.log("Success");
    });


    $(document).on('click', '#delete-event', function(event){
      var event_id = $(this).attr('data-value');
        $.ajax({
        type:'POST',
        url:"/controllers/admin/delete.php",
        data:{
            event_id:event_id,
        },
        dataType:'json',
        success: function(data){
            if(data.success==='success'){
            alertify.set('notifier','position', 'top-right');
            alertify.success('Successfully Deleted.'); 
            console.log("Success");
            } else {
            alertify.set('notifier','position', 'top-right');
            alertify.error('Error.'); 
            console.log("Error.");
            } 
        }
    });
    });

  });
</script>
<?php
include ('../templates/admin_footer.php');
 ?>