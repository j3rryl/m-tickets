<?php
include('../../database/functions.php');
include ('../templates/admin_header.php');
$organizers=getEventOrganizers();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Ajax -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="container">
    <div class="content">
    <div class="content-2">
        <div class="recent-payments">
                    <div class="title">
                        <h2>Event Organizers</h2>
                        <button type='button' class="add" data-toggle="modal" data-target="#addModal">Add Event Organizer</button>
                    </div>
                    <table>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>PIN</th>
                            <th>Edit</th>

                        </tr>
                        <?php
                        foreach($organizers as $organizer){
                        ?>
                        <tr>
                            <td>
                            <?php
                        echo $organizer['first_name'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $organizer['last_name'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $organizer['email'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $organizer['phone_number'];
                            ?>
                            </td>
                            <td>
                            <?php
                        echo $organizer['identification'];
                            ?>
                            </td>
                            <td>
                            <button type='button' class="edit" data-toggle="modal" data-target="#editModal">Edit</button>
                            <button type="button" class="delete" id="deleteuser" <?php echo "data-value=".$organizer['organizer_id'].""?> >Delete</button>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                        
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
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
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

<!-- Delete Modal -->
<div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Delete</button>
      </div>
    </div>
  </div>
</div>
</div>


<!-- Add Event Organizer -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Event Organizer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="visa-form" id="add-org" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
      <label for="mpesa-confirm">First Name:</label><br>
    <input type="text" class="box1" name="first_name" id="first_name" placeholder="First Name"><br>
    <label for="mpesa-confirm">Last Name:</label><br>
    <input type="text" class="box1" name="last_name" id="last_name" placeholder="Last Name"><br>
    <label for="mpesa-confirm">PIN/ID:</label><br>
    <input type="text" class="box1" name="last_name" id="pin" placeholder="PIN/ID"><br>
    <label for="mpesa-confirm">Phone Number:</label><br>
    <input type="text" class="box1" name="user_name" id="phone" placeholder="Phone Number"><br>
    <label for="mpesa-confirm">Email:</label><br>
    <input type="email" class="box1" name="email" id="email" placeholder="Email"><br>
    <label for="mpesa-confirm">Password:</label><br>
    <input type="password" value="1234" class="box1" name="password" id="password" placeholder="Password"><br>
 
    
    <!-- <input type="text" class="box1" name="categ_name" id="categ_name" placeholder="Product SubCategory"><br> -->
    
    <!-- <input type="text" class="box1" name="categ_name" id="categ_name" placeholder="Product Added By"><br> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="addUser">Confirm</button>
      </div>
      </form>

    </div>
  </div>
</div>
</div>
<script src="/assets/js/admin/eorganizers.js"></script>
<?php
include ('../templates/admin_footer.php');
?>
