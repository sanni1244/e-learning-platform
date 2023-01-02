<?php
echo "<form action='#' method='POST'>";
session_start();
if (!isset($_POST['add'])) {
    $_SESSION['attnum'] = 10001; 
    $_SESSION['num'] = 1;
}
if($_SESSION['num'] <= $row3){
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
    <li><input type="radio" required name="q1" value="<?php echo $options[0]; ?>" /><label for=""><?php echo $options[0]; ?>
    </label></li>
 </ol>
  <?php }}
      echo "<input type='submit' name='add' value='NEXT'>"; 
      $_SESSION['attnum']++;
      $_SESSION['num']++;
  }
  if (isset($_POST['q1'])) {
      $_SESSION['incr'][] = $_POST['q1'];
  }
  ?>
</form>