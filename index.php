<!DOCTYPE html>
<html>
<head>
	<title>MY IMAGES</title>
<script type="text/javascript"src="bootstrap/js/bootstrap.js" ></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>

	<div class="container">
		<div class="jumbotraon">
			<div class="display-1">HOUSES TO LET</div>
		</div>
		<div class="row">
			<?php
			 $con = mysqli_connect("localhost", "root", "", "scala");
			 $stmt = "SELECT * FROM images ";
			 $query = mysqli_query($con,$stmt);
			 if (mysqli_num_rows($query)>0) {
			 	while ($row=mysqli_fetch_array($query)) {
			 		$image_url = 'uploads/'.$row["fileName"];
			 		?>
			 		<div class="col-md-4">
			 			<img class="image-fluid" src="<?php echo $image_url?>" width = "100%" heigth = "60px" >
			 		</div>
			 		<?php
			 	}
			 }
			?>
		</div>
	</div>

</body>
</html>