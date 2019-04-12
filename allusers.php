<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="text/javascript"src="bootstrap/js/bootstrap.js" ></script>

</head>
<body>
<div class="container" >
	
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
	echo "<th> Password </th>";
	echo "</tr>";
	
	 WHILE($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['Email']."</td>";
		echo "<td>".$row['Password']."</td>";
		echo "</tr>";

	}
	 echo "</table>";
   }


 ?>

</div>
</body>
</html>

