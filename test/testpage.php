<?php
session_start();
$save = $_SESSION['id'];
  $conn = mysqli_connect("localhost", "root", "", "learning");
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
} 
$testcode = $_SESSION['atest'];
if (!isset($_POST['add']) && isset($_SESSION['pageLoaded2'])) {
  echo "<meta http-equiv='refresh' content='0; url=test.php?tst=$testcode'>";    
  exit; 
} else {
  $_SESSION['pageLoaded2'] = true;
// $query1 = "SELECT * FROM test WHERE `ccourse` = '$testcode'";
$query1 = "SELECT * FROM test WHERE `ccourse` = '$testcode' ORDER BY RAND() LIMIT 4";
$query2 = "SELECT * FROM courses WHERE `Course Code` = '$testcode'";
$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);
$row1 = mysqli_fetch_assoc($result1);
$row2 = mysqli_fetch_assoc($result2);
$row4 = mysqli_num_rows($result1);
// $options = explode(",", $row1['options']);
$lll = $row1['ccourse'] ;
?>
<?php 
      if($row1['ccourse'] == null){
          header('Location: ./notest.php');
          $testcode = 'CSC 111';
      } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../images/z2.png" type="image/x-icon">
  <link rel="stylesheet" href="../style/style4.css">
  <title>Take Test</title>
</head>
<body>
    <div class="areanone ">
      <div class="area1">
        <?php echo "<form action='#' method='POST'>" ;
      if (!isset($_POST['add'])) {
        $_SESSION['attnum'] = $row1['questionid']; 
        $_SESSION['num'] = 1;
        $_SESSION['incr'] = [];
        $_SESSION['answw'] = [];}
      if (isset($_POST['q1'])) {
        $_SESSION['incr'][] = $_POST['q1'];
      }
      if($_SESSION['num'] <= $row4){
      echo "<center><h5>Question " .$_SESSION['num'] . "</h5></center>";
// if(isset($_POST['submittest'])){
  if($_SESSION['attnum']){
    $trt = $_SESSION['attnum'];
    $query3 = "SELECT * FROM test WHERE `ccourse` = '$testcode' AND `questionid` = $trt";

    // $query1 = "SELECT * FROM test WHERE `ccourse` = '$testcode' ORDER BY RAND() LIMIT 4";

    $result3 = mysqli_query($conn, $query3);
    $row3 = mysqli_fetch_assoc($result3);
    // $options = explode(",", $row3['options']);
    echo $row3['answer']; 
    $_SESSION['answw'][] = $row3['answer'];
    if($row3['questionid'] == $trt){ 
?>
  <ol>
    <h6 class="h6_1"><?php echo $row3['question']; ?></h6>
    <li><input type="radio" required name="q1" value="<?php echo $row3['option1']; ?>" id=""  oninvalid="this.setCustomValidity('Choose your answer')"
  oninput="this.setCustomValidity('')"/><label for=""><?php echo $row3['option1']; ?>
    </label></li>
    <li><input type="radio" required name="q1" value="<?php echo $row3['option2'] ?>" id=""><label for=""> <?php echo $row3['option2']; ?>
    </label></li>
    <li><input type="radio" required name="q1" value="<?php echo $row3['option3'] ; ?>" id=""><label for=""> <?php echo $row3['option3']; ?>
    </label></li>
    <li><input type="radio" required name="q1" value="<?php echo $row3['option4'] ; ?>" id=""><label for=""> <?php echo $row3['option4']; ?>
    </label></li>
    </ol>
  <?php }
  }
      echo "<input type='submit' id='submit-button' name='add' value='NEXT'>"; 
      $_SESSION['attnum']++;
      $_SESSION['num']++;
      // echo $_SESSION['incr'][0];
      // $row3['answer'];
  }
  else{
    echo "<table><tr><td></td> <th>Correct Answer</th><th>Your Answer</th><tr>";
    $score = 0;
    for($i = 0; $i < $row4; $i++){
      $trt = $_SESSION['attnum'];
      $query3 = "SELECT * FROM test WHERE `ccourse` = '$testcode' AND `questionid` = $trt";
      $result3 = mysqli_query($conn, $query3);
      $row5 = mysqli_fetch_assoc($result3);
      // echo $_SESSION['answw'][$i];
        echo "<tr><td>Question " .$i+1 .": </td>";
        if($_SESSION['answw'][$i] == $_SESSION['incr'][$i]){
          $score++;
          echo "<td><b>". $_SESSION['answw'][$i]. "</b><br/></td><td><b style='color:green'>". $_SESSION['incr'][$i]. "</b><br/></td>";
        }
        else{
          echo "<td><b>". $_SESSION['answw'][$i]. "</b><br/></td><td><b style='color:red'>". $_SESSION['incr'][$i]. "</b><br/></td>";
        }  
    }
    echo "</table><div>You scored ". $score . "/" .$i . "<br/>";
        echo"<a class='button_mark' href='../personal/mycourses.php'><div>End Test</div></a>";
        echo"<a class='button_mark' href='http://localhost/vent/test/test.php?tst=".$testcode ."'><div>Restart Test</div></a></div></div>";

      $testscore = "UPDATE `dashboard` SET `testScore` = '$score', `lastTest` = '$testcode'  where `id` = '$save'";
      mysqli_query($conn, $testscore); 
  }}
// }?>
</form>
</div>
</div>
</body>
</html>




