<?php
$servername = "localhost";
$username = "Elitesammy";
$password ="elitesammy";
$database = "samuel";

$conn = new mysqli($servername, $username, $password, $database);
if (!$conn){
	 echo "does not connect" .mysql_error();
}
else{
   // echo "<script>alert('Connection successful');</script>";
}


?>