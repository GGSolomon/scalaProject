<?php

$con = mysqli_connect("localhost", "root", "", "scala");
 // if ($con= FALSE) {
 // 	die("Cannot connect to MYSQL DB".mysqli_connect_error());
 // }

 if (isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Pass'])) 
    {
 	$name = $_POST['Name'];
 	$email = $_POST['Email'];
 	$pass = sha1($_POST['Pass']);
 	echo $name;

 	$statement = "INSERT INTO users (Name, Email, Password)
 	              VALUES ('".$name."','".$email."', '".$pass."' )";
 	$query = mysqli_query($con, $statement);   
 	if ($query) {
 	          	echo "success";
 	          	header("location:login.php");
 	          }
 	          else
 	          {
 	          	echo "fAILED";
 	          }          

 	}

?>