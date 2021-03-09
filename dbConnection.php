<?php

$db_host = "localhost";
$db_user="root";
$db_password= "";
$db_name= "firstproject_db";

//create fann_get_total_connections

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

//check connection
if($conn->connect_error){
  die("connection failed");
}
else{
echo"connected";

}

 ?>
