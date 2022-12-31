<?php
session_start();
$testcode = $_SESSION['j'];
  $conn = mysqli_connect("localhost", "root", "", "learning");
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
} 

$query1 = "SELECT * FROM test WHERE `ccourse` = '$testcode'";
$query2 = "SELECT * FROM courses WHERE `Course Code` = '$testcode'";

$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);

$row1 = mysqli_fetch_assoc($result1);
$row2 = mysqli_fetch_assoc($result2);

$options = explode(",", $row1['options']);
$lll = $row1['ccourse'] ;

?>
<?php
if(!isset($count)){
    $count = 10000;
  }
if(isset($_POST['submittest'])){
for($i = 1; $i < 2; $i++){
  $count ++;
  $query3 = "SELECT * FROM test WHERE `ccourse` = '$testcode' AND `questionid` = $count";
  $result3 = mysqli_query($conn, $query3);
  $row3 = mysqli_fetch_assoc($result3);
  $options = explode(",", $row3['options']);}}
//   if($row3['questionid'] == $count){
?>