<?php 
include_once("./userdata.php");

$sql = "DELETE FROM `users` WHERE `Email` = '$email'";  
        $rs = mysqli_query($conn, $sql);
        header('location:../index.html');
      
    
?>
