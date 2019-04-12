<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript"src="bootstrap/js/bootstrap.js" ></script>
</head>
<body>

	<div class="container">
		<form action="" method="POST">
			<div class="form-group">
				<label for="email" >Email</label>
				<input type="email" name="email" class="form-control" required="">
			</div>
			<div class="form-group">
				<label for="password" >Password</label>
				<input type="password" name="pass" class="form-control" required="">
			</div>
				<input type="submit" value="Login" class="btn btn-primary">
		</form>
	</div>

</body>
</html>

	<?php 
		$con = mysqli_connect('localhost','root','','scala');
		if($con==false)
		{
			die("Unable to connect to server".mysqli_connect_error());
		}

		//check if data is set
		if (isset($_POST['email']) && isset($_POST['pass'])) 
		{
			if ($_POST['email']=='' && $_POST['pass'] =='' )
			{
				echo "email or password missing";
			}
		$emailAddress = mysqli_real_escape_string($con,$_POST['email']);
		$pass1 = mysqli_real_escape_string($con,$_POST['pass']);
		$pass2 = sha1($pass1);

		//query if user exists
		$sql = "SELECT * FROM users WHERE Email = '".$emailAddress."' AND Password = '".$pass2."'";

		//query
		$query = mysqli_query($con, $sql);
		if (mysqli_num_rows($query)>0) 
		{
			$row=mysqli_fetch_array($query);
			$_SESSION['Email']=$row['Name'];
			header('location:home.php');
			echo "SUCCESS";
		}
		else
		{
			echo "FAILED";
		}
		}

	
	?>