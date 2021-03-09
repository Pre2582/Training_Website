<?php
include_once('../dbConnection.php');
if(isset($_POST['clientname'])&& isset($_POST['clientemail'])&&
 isset($_POST['clientpass'])){

   $cliname=$_POST['clientname'];
    $cliemail=$_POST['clientemail'];
     $clipass=$_POST['clientpass'];

     $sql="INSERT INTO client(cli_name,cli_email,cli_pass) VALUES
      ('$cliname','$cliemail', '$clipass')";

      if($conn->query($sql)==TRUE){
        echo json_encode("ok");
      } else{
        echo json_encode("Failed");
      }
 }

 ?>
