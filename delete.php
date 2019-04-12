<?php 
$con = mysqli_connect("localhost", "root", "", "scala");
$id = $_GET['id'];
$sql = "DELETE FROM users  WHERE Id='".$id."'";

$result = mysqli_query($con,$sql);
if ($result) {
	echo "successfully deleted";
 	          	header("location:home.php");
 	          }
 	          else
 	          {
 	          	echo "fAILED";
 	          }    
?>