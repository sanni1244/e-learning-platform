<?php
  session_start();
  $conn = mysqli_connect("localhost", "root", "", "learning");
  if($conn->connect_error){die("Connection failed: " . $conn->connect_error);} 
  $testcode = $_GET['tst'];
  $query1 = "SELECT * FROM test WHERE `ccourse` = '$testcode'";
  $_SESSION['atest'] = $testcode;
  $_SESSION['pageLoaded2'] = null;
  $query2 = "SELECT * FROM courses WHERE `Course Code` = '$testcode'";
  $result1 = mysqli_query($conn, $query1);
  $result2 = mysqli_query($conn, $query2);
  $row1 = mysqli_fetch_assoc($result1);
  $row2 = mysqli_fetch_assoc($result2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/bootstrap.min.css">
  <link rel="shortcut icon" href="../images/z2.png" type="image/x-icon">
  <link rel="stylesheet" href="../style/style4.css">
  <title>Take Test</title>
</head>
<body>
    <div class="areanone">
    <?php 
      if($row1['ccourse'] == null){header('Location: ./notest.php');} ?>
      <center><h3><?php echo $row1['ccourse']." "; ?>TEST</h3></center><hr><hr><hr><hr><br>
    <center><h5><?php echo ucfirst(strtolower($row2['Course Title'])) ?></h5></center>
    <div class="instructions">
      <p>Each course contains 10 questions. There is no time limit and the test will be graded</p>
      <p>Your score will be visible at the end of the test and corrections will be shown. You can always retake all tests.</p>
    </div><br>
    <div class="instructions">
      <?php echo "<center><a method='' href='./testpage.php?tst=$testcode'><button class='test_button'>Take Test</button></a></center>";?>
    </div>
    </div>
</body>

</html>



