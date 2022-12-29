<?php
// $_SESSION['read'] = true;
echo "sss";
$conn = mysqli_connect("localhost", "root", "", "learning");
$addit = "UPDATE `users` SET `mycourse` = SUBSTRING_INDEX(`mycourse`, ', CSC 1111', 1) WHERE `id` = '1'";
mysqli_query($conn, $addit);
// header("location:../personal/mycourses.php");


?>