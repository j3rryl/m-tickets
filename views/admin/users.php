<?php
require'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Display Users</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <h1> </h1>
</head>
<body>
	<div>
		<button class="btn btn-primary my-5">Search
		</button>
		<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">UserId</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$sql="Select * from tbl_users";
  	$result=mysqli_query($con,$sql);
    
  	if ($result) {
  		while ($row=mysqli_fetch_assoc($result)) {?>
  			
  			<tr>
  			
      <td><?php echo $row ["user_id"];?></td>
      <td> <?php echo $row ["first_name"];?> </td>
      <td><?php echo $row ["last_name"];?>  </td>
      <td><?php echo $row ["username"];?>  </td>
      <td> <?php echo $row ["email"];?> </td>
      <td> <?php echo $row ["password"];?> </td>
      <td> <?php echo $row ["role"];?> </td>
      <td>
	<button class="btn btn-primary"><a href="edit.php"?Edit='.$user_id.'>Edit</button>
	<button class=btn btn_danger><a href="cancel.php?cancelid='.$user_id.'">Cancel</button>
      </td>

    </tr>
  		
    <?php 
    }}
    ?>



  </tbody>
</table>
	</div>

</body>
</html>



 