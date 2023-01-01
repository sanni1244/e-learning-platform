<?php
  $conn = mysqli_connect("localhost", "root", "", "learning");
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
} 
// $testcode = $_GET['j'];
$testcode = "CSC 111";

$query1 = "SELECT * FROM test WHERE `ccourse` = '$testcode'";
$query2 = "SELECT * FROM courses WHERE `Course Code` = '$testcode'";
$query3 = "SELECT COUNT(*) FROM test WHERE `ccourse` = '$testcode'";

$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);
$result3 = mysqli_query($conn, $query3);

$row1 = mysqli_fetch_assoc($result1);
$row2 = mysqli_fetch_assoc($result2);
$row3 = mysqli_fetch_array($result3)[0];

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
    <div class="area1">
<?php echo "<form method='POST'>" ;
session_start();

if (!isset($_POST['add'])) {
    $_SESSION['attnum'] = 10001; 
    $_SESSION['num'] = 1;
}
if($_SESSION['num'] <= $row3){
echo "<center><h5>Question " .$_SESSION['num'] . "</h5></center>";
// if(isset($_POST['submittest'])){
  if($_SESSION['attnum']){
    $trt = $_SESSION['attnum'];
    $query3 = "SELECT * FROM test WHERE `ccourse` = '$testcode' AND `questionid` = $trt";
    $result3 = mysqli_query($conn, $query3);
    $row3 = mysqli_fetch_assoc($result3);
    $options = explode(",", $row3['options']);
    if($row3['questionid'] == $trt){ 
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
  <?php }
  }
    echo "<input type='submit' id='submit-button' name='add' value='NEXT'>"; 
    $_SESSION['attnum']++;
    $_SESSION['num']++;
  }
  else{
    echo "At limit";
  }
// }?>

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


<?php
   
?>

<form method='post'>

</form>





































<?php
// include_once 'dbConnection.php';
// session_start();
// $email=$_SESSION['email'];



//quiz start
// if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
// $eid=@$_GET['eid'];
// $sn=@$_GET['n'];
// $total=@$_GET['t'];
// $ans=$_POST['ans'];
// $qid=@$_GET['qid'];
// $q=mysqli_query($con,"SELECT * FROM answer WHERE qid='$qid' " );
// while($row=mysqli_fetch_array($q) )
// {
// $ansid=$row['ansid'];
// }
// if($ans == $ansid)
// {
// $q=mysqli_query($con,"SELECT * FROM quiz WHERE eid='$eid' " );
// while($row=mysqli_fetch_array($q) )
// {
// $sahi=$row['sahi'];
// }
// if($sn == 1)
// {
// $q=mysqli_query($con,"INSERT INTO history VALUES('$email','$eid' ,'0','0','0','0',NOW())")or die('Error');
// }
// $q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' ")or die('Error115');

// while($row=mysqli_fetch_array($q) )
// {
// $s=$row['score'];
// $r=$row['sahi'];
// }
// $r++;
// $s=$s+$sahi;
// $q=mysqli_query($con,"UPDATE `history` SET `score`=$s,`level`=$sn,`sahi`=$r, date= NOW()  WHERE  email = '$email' AND eid = '$eid'")or die('Error124');

// } 
// else
// {
// $q=mysqli_query($con,"SELECT * FROM quiz WHERE eid='$eid' " )or die('Error129');

// while($row=mysqli_fetch_array($q) )
// {
// $wrong=$row['wrong'];
// }
// if($sn == 1)
// {
// $q=mysqli_query($con,"INSERT INTO history VALUES('$email','$eid' ,'0','0','0','0',NOW() )")or die('Error137');
// }
// $q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error139');
// while($row=mysqli_fetch_array($q) )
// {
// $s=$row['score'];
// $w=$row['wrong'];
// }
// $w++;
// $s=$s-$wrong;
// $q=mysqli_query($con,"UPDATE `history` SET `score`=$s,`level`=$sn,`wrong`=$w, date=NOW() WHERE  email = '$email' AND eid = '$eid'")or die('Error147');
// }
// if($sn != $total)
// {
// $sn++;
// header("location:account.php?q=quiz&step=2&eid=$eid&n=$sn&t=$total")or die('Error152');
// }
// else if( $_SESSION['key']!='sunny7785068889')
// {
// $q=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error156');
// while($row=mysqli_fetch_array($q) )
// {
// $s=$row['score'];
// }
// $q=mysqli_query($con,"SELECT * FROM rank WHERE email='$email'" )or die('Error161');
// $rowcount=mysqli_num_rows($q);
// if($rowcount == 0)
// {
// $q2=mysqli_query($con,"INSERT INTO rank VALUES('$email','$s',NOW())")or die('Error165');
// }
// else
// {
// while($row=mysqli_fetch_array($q) )
// {
// $sun=$row['score'];
// }
// $sun=$s+$sun;
// $q=mysqli_query($con,"UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE email= '$email'")or die('Error174');
// }
// header("location:account.php?q=result&eid=$eid");
// }
// else
// {
// header("location:account.php?q=result&eid=$eid");
// }
// }

