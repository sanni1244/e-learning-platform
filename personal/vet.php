<?php
session_start();
// $rmvc = $_SESSION['ger'];
$save = $_SESSION['id'];
$conn = mysqli_connect("localhost", "root", "", "learning");
// echo "asdada";
// $addit = "UPDATE users SET mycourse = SUBSTRING_INDEX(`mycourse`, ', $rmvc', 1) WHERE id = '$save'";
// mysqli_query($conn, $addit);
// header("location:../personal/mycourses.php?enr=0");

echo $_GET['j'];
$addit = "SELECT * FROM users WHERE id = $save";
$fre = mysqli_query($conn, $addit);
            $row = mysqli_fetch_assoc($fre);
            $mycourse = $row['mycourse'];
            $mycourse = (string)$mycourse;
            $mycourse = strtolower($mycourse);
            $mycourse = str_replace(", ".$_GET['j'], "", $mycourse);
            $query = "UPDATE users SET mycourse = '$mycourse' WHERE id = $save";
            mysqli_query($conn, $query);
            $_GET['j'] = null;
            header("location:./mycourses.php");
            // echo "<script>location.reload();</script>";



?>