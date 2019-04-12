<?php

$con = mysqli_connect("localhost", "root", "", "scala");
 // if ($con= FALSE) {
 // 	die("Cannot connect to MYSQL DB".mysqli_connect_error());
 // }

 if (isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Pass'])) 
    {
    	$id = $_GET['id'];
 	$name = $_POST['Name'];
 	$email = $_POST['Email'];
 	$pass = sha1($_POST['Pass']);
 	echo $name;

 	$statement = "UPDATE users SET  Name= '".$name."', Email='".$email."', Password = '".$pass."' WHERE Id='".$id."' ";
 	$query = mysqli_query($con, $statement);   
 	if ($query) {
 	          	echo "success";
 	          	header("location:home.php");
 	          }
 	          else
 	          {
 	          	echo "fAILED";
 	          }          

 	}

?>
<!DOCTYPE html>
<html>
<head>
  <title>EDIT</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="text/javascript"src="bootstrap/js/bootstrap.js" ></script>
  </head>
<body>

<div class="container" >
	<?php 
	$uid = $_GET['id'];
	$sql = "SELECT * FROM users  WHERE Id='".$uid."'";

    $result = mysqli_query($con,$sql);

if (mysqli_num_rows($result)>0) 
   {
   	 $row=mysqli_fetch_array($result)
	
	?>
  <h2>EDIT</h2>

<form action="" method="POST">
 <div class="form-group" >
    Name:<br>
  <input type="text" name="Name" value = <?php echo $row['Name']; ?> required class="form-control" > 
 </div>   
  <br>
   <div class="form-group">
    Email:<br>
  <input type="Email" name="Email" value = <?php echo $row['Email']; ?> class="form-control">
  </div>
  <br>
<?php } ?>
 <div class="form-group">
    Password:<br>
  <input type="Password" name="Pass" class="form-control">
  </div>
  <br>
  <input type="submit" value="save">
</form>
</div>


</body>
</html>
