<!DOCTYPE html>
<html>
<head>
	<title>Fetch Records</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript"src="bootstrap/js/bootstrap.js" ></script>
</head>
<body>
	<div class="container">
	
	<?php 
	$con = mysqli_connect('localhost','root','','scala');
		if($con==false)
		{
			die("Unable to connect to server".mysqli_connect_error());
		}

	$sql = "SELECT * FROM login";
	$query = mysqli_query($con, $sql);	

	if (mysqli_num_rows($query)>0)
	{
		echo "<table class='table table-striped table-bordered' width='100%' >";
		echo "<tr>";
		echo "<th>Email</th>";
		echo "<th>Password</th>";
		//echo "<th colspan="3">Actions</th>";
		echo "</tr>";

		WHILE($row=mysqli_fetch_array($query))
	{
		echo "<tr>";
		echo "<td>".$row['Email']."</td>";
		echo "<td>".$row['Password']."</td>";
		echo "<td>" '<a href= "edit.php?id='.$row["id"].'">  Edit</a>'  "</td>";
		echo "</tr>";
	}
		echo "</table>";
	}
?>	

	</div>

</body>
</html>

