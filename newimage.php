<!DOCTYPE html>
<html>
<head>
	<title>MY IMAGES</title>
<script type="text/javascript"src="bootstrap/js/bootstrap.js" ></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>

	<div class="container" >
		<form method="POST" action="upload.php" enctype="multipart/form-data" >
			<div class="form-group">
				<label>Description</label>
				<input type="text" name="description" class="form-control">
			</div>
			<div class="form-group">
				<label>Choose file to upload</label>
				<input type="file" name="file" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="upload" class="btn btn-primary">
			</div>
		</form>

	</div>

</body>
</html>