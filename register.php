<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="text/javascript"src="bootstrap/js/bootstrap.js" ></script>
  </head>
<body>

<div class="container" >
  <h2>Register</h2>

<form action="validateregister.php" method="POST">
 <div class="form-group" >
    Name:<br>
  <input type="text" name="Name"required class="form-control" > 
 </div>   
  <br>
   <div class="form-group">
    Email:<br>
  <input type="Email" name="Email" class="form-control">
  </div>
  <br>

 <div class="form-group">
    Password:<br>
  <input type="Password" name="Pass" class="form-control">
  </div>
  <br>
  <input type="submit" value="Register">
</form>
</div>


</body>
</html>
