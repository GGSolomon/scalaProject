<?php 
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>
		<?php
			echo $_SESSION['username'];
		?>
	</h1>
</body>
</html>