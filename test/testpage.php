<?php
  $conn = mysqli_connect("localhost", "root", "", "learning");
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
} 
$testcode = $_GET['j'];

$query1 = "SELECT * FROM test WHERE `ccourse` = '$testcode'";
$query2 = "SELECT * FROM courses WHERE `Course Code` = '$testcode'";

$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);

$row1 = mysqli_fetch_assoc($result1);
$row2 = mysqli_fetch_assoc($result2);

$options = explode(",", $row1['options']);
$lll = $row1['ccourse'] ;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/bootstrap.min.css">
  <link rel="stylesheet" href="../style/style4.css">
  <title>Take Test</title>
</head>
<body>
    <div class="areanone ">
    <center><h5>Question 1</h5></center>
    <div class="area1">
<?php echo "<form method='POST'>" ;
if(!isset($count)){
  $count = 10000;
}
echo "<input type='submit' name='submittest' value='NEXT'>";
if(isset($_POST['submittest']))
  for($i = 1; $i < 3; $i++){
    $count ++;
    $query3 = "SELECT * FROM test WHERE `ccourse` = '$testcode' AND `questionid` = $count";
    $result3 = mysqli_query($conn, $query3);
    $row3 = mysqli_fetch_assoc($result3);
    $options = explode(",", $row3['options']);
    if($row3['questionid'] == $count){ 
?>
  <ol>
    <h6 class="h6_1"><?php echo $row3['question']; ?></h6>
    <li><input type="radio" name="q1" value="<?php echo $options[0]; ?>" id=""><label for=""><?php echo $options[0]; ?>
    </label></li>
    <li><input type="radio" name="q1" value="<?php echo $options[1]; ?>" id=""><label for=""> <?php echo $options[1]; ?>
    </label></li>
    <li><input type="radio" name="q1" value="<?php echo $options[2]; ?>" id=""><label for=""> <?php echo $options[2]; ?>
    </label></li>
    <li><input type="radio" name="q1" value="<?php echo $options[3]; ?>" id=""><label for=""> <?php echo $options[3]; ?>
    </label></li>
    </ol>
  <?php  }} ; $_POST['submittest'] = null; ?>

    

</form>
</div>
<?php
  // if(isset($_POST['submittest'])){
    // $i++;
    // $answer = $_POST['q1'];
    // if($answer == $row1['answer']){
    //   echo "Correct Stuff man";
    // }
    // else{
    //   echo "Very wrong and very messed up dude!";
    // }
  // }
?>
</div>
</body>
</html>