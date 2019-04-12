<?php
 define("db_host", "localhost");
 define("db_user", "root");
 define("db_pass", "");
 define("database", "scala");

 $con = mysqli_connect(db_host,db_user,db_pass,database);

if ($con) {
	echo "SUCCESS"; 
    }
	else {die("Cannot connect".mysqli_connect_error());
	}

	$statement = "CREATE TABLE users (
		Id int (11) NOT NULL auto_increment primary key,
		Name text (200) NOT NULL,
		Email varchar (200) NOT NULL,
		Password varchar (200) NOT NULL
		)";
    $query = mysqli_query($con, $statement);

    if ($query) 
    {
     echo "Table users Created";
    }
    else
    {
      echo "Table Not Created";
    }

    

?>