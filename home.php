<?php
session_start();
if(!isset($_SESSION['Email']))
{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script type="text/javascript"src="bootstrap/js/bootstrap.js" ></script>
</head>
<body>

<div class="container" >
	<h1>WELCOME <?php echo $_SESSION['Email']; ?></h1>
<?php 
$con = mysqli_connect("localhost", "root", "", "scala");

$sql = "SELECT * FROM users";

$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result)>0) 
   {
	echo "<table class='table table-striped table-bordered' width='100%' >";
	echo "<tr>";
	echo "<th> Name </th>";
	echo "<th> Email </th>";
	
	echo "<th> Edit </th>";
	echo "<th> Delete </th>";
	echo "</tr>";
	
	 WHILE($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['Email']."</td>";
		
			echo "<td>".'<a href= "edit.php?id='.$row["Id"].'" class="btn btn-primary">Edit</a>'."</td>";
		echo "<td>".'<a href= "delete.php?id='.$row["Id"].'" class="btn btn-danger">Del</a>'."</td>";

		echo "</tr>";

	}
	 echo "</table>";
   }


 ?>

</div>
</body>
</html>