<?php 
  $con = mysqli_connect("localhost", "root", "", "scala");

  	$targetDir = "uploads/";
  	$fileName = basename($_FILES["file"]["name"]);
  	$targetFilePath = $targetDir . $fileName;
  	$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

  	if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"]) &&isset($_POST["description"]) ) 
  	{
  		$desc = $_POST["description"];
  		$allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
  		if (in_array($fileType, $allowTypes)) 
  		{
  			if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) 
  			{
  				$stmt = "INSERT INTO images (Description, fileName) VALUES ('".$desc."','".$fileName."')";
  				$query= mysqli_query($con, $stmt);
  				if ($query) 
  				{
  					echo "Image Uploaded Successfully";
  					header('location:index.php');
  				}
  				else
  				{
  					echo "Failed to upload";
  				}

  			}
  			else
  			{
  				echo "sorry, there was an error uploading your  image";
  			}
  		}
  		else
  		{
  			echo "choose the right file formart";
  		}
  	}
  	else
  	{
  		echo "please select a file to upload";
  	}

?>