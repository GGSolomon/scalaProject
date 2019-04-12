<?php 
	$cookie_name = 'student';
	$cookie_value = "Solomon Gichuru";
	setcookie($cookie_name, $cookie_value, time()+60);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php
 		echo $_COOKIE[$cookie_name];
 	?>
 
 </body>
 </html>