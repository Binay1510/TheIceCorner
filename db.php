<?php
session_start();
    $servername="localhost";
    $username ="root";
    $password= "";
    $databse="theicecorner";
    
    //conn obj
    $conn = mysqli_connect($servername, $username, $password,$databse);
    
    if (!$conn){
        die("connection failed".mysqli_connect_error()); 
    }
  //  else echo "success";
?>