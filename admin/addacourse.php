<link rel="stylesheet" href="/vent/style/leftnav.css">
<link rel="stylesheet" href="/vent/admin/admin.css">
<?php include_once("../personal/userdata.php"); ?>
<title>Admin user view</title>
<div class="container1">

    <div class="one left">
                <a href="/vent/index.html"><div class="brand"><h4 class="h4">YEET KNOWLEDGE</h4></div></a>
                <ul>
                    <a href="/vent/personal/dashboard.php"><li class="left-section "><img src="../icons/home.svg">Dashboard</li></a>
                    <a href="/vent/personal/mycourses.php"><li class="left-section"><img src="../icons/menubook.svg">My Courses</li></a>
                    <a href="/vent/personal/allcourses.php"><li class="left-section"><img src="../icons/librarybooks.svg">All Courses</li></a>
                    <a href="/vent/personal/search.php"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
                    <a href="/vent/personal/editdetails.php"><li class="left-section"><img src="../icons/editn.svg">Edit Profile</li></a>
                    <a href="/vent/admin/admin.php"><li class="left-section Settings selection"><img  class="blue"  src="../icons/logout.svg">Admin User</li></a>
                    <a href="/vent/personal/logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>
                </ul>
            </div>

<div class="one center">
<a class="goback" href="../admin/admin.php"><img src="../icons/back.svg" alt=""></a>
<?php include_once("../personal/userdata.php");
    $ccourse1 = @$_POST['coursecode'];
    $query = "SELECT * FROM courses WHERE `Course Code` = '$ccourse1'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0) {
        $myerr =  '<span style="color: red;">This course already exists</span>';
    } 
    else {
        if(strlen($ccourse1) != 7 ||$ccourse1[3] != ' '){
            $myerr = '<span style="color: brown;">Invalid course code format</span>';
            if($ccourse1 == ''){
                $myerr = "";
            }
        }
        else{
            $myerr =  '';
            $trade = 1;
        }
    }    
?>
<h1>Add Course</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="cname">Course Code</label>
    <input type="text" name="coursecode" id=""  value="<?php echo strtoupper($ccourse1) ?>">
    <?php echo $myerr; ?>
    <label for="cname">Course Title</label>
    <textarea maxlength="79" type="text" name="clstitle"  class="clstitle" id=""></textarea>
    <label for="cname">Course Level</label>
    <select name="clevel" id=""  class="clevel">
        <option value="100 Level">100</option>
        <option value="200 Level">200</option>
        <option value="300 Level">300</option>
        <option value="400 Level">400</option>
    </select>
    <label for="cname">Course Description</label>
    <textarea maxlength="500" type="text" name="cldesc" class="cldesc" id=""></textarea>
    <center><input class="addcoursebutton" type="submit" name="addit" id=""></center>
</form>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addit'])){     
        if(isset($_POST['coursecode']) && isset($_POST['clstitle']) && isset($_POST['clevel']) && isset($_POST['cldesc'])){
            if($_POST['coursecode'] !== "" && $_POST['clstitle'] !== "" && $_POST['clevel'] !== "" && $_POST['cldesc'] !== ""){
                $ccode = strtoupper($_POST['coursecode']);
                $ctitle = strtoupper($_POST['clstitle']);
                $clevel = $_POST['clevel'];
                $cdesc = ucfirst($_POST['cldesc']);
                $aquery = "INSERT INTO `courses` (`Course Code`, `Course Title`, `level`, `materials`) 
                VALUES ('$ccode', '$ctitle', '$clevel', '$cdesc')";
            if(isset($trade) && $trade !== null){
                $runquery = mysqli_query($conn, $aquery);
                $trade = null;
                echo '<span style="color: green; font-size: 1.6rem">Course has been added</span>';
            }
            }
            else{
                echo '<span style="color: red; font-size: 1.6rem">Fill the form correctly</span>';

            }   
        }}
?>
<br><br>
<hr><hr><hr>
<h1>Remove a course</h1>
<form action="" method="post">
    <label for="Enter the course you would like to remove"></label>
    <input type="text" placeholder="Enter the course to remove" name="remcourse">
    <center><input type="submit" value="Check" class="addcoursebutton" name="lkjl" id=""></center>
</form>

<?php
    if(isset($_SERVER['REQUEST_METHOD']) && isset($_POST['lkjl'])){
        $ccourse2 = $_POST['remcourse'];
        $_SESSION['acrs'] = $_POST['remcourse'];
        $query = "SELECT * FROM courses WHERE `Course Code` = '$ccourse2'";
        $result1 = mysqli_query($conn, $query);
        if(mysqli_num_rows($result1) > 0) {
            $tresh = mysqli_fetch_assoc($result1);
            echo "<div class='abttoremove'>
                <p>". $tresh['Course Code'] . "</p>
                <p>". $tresh['Course Title'] . "</p>
                <p>". $tresh['level'] . "</p>
                <p>". $tresh['materials'] . "</p>
                <a href='./addacourse.php?nest=1' class='toremove1' ><div>Remove</div></a>  
                </div>"
                
                ;
        } 
        else{
            $rtt =  "<div style= 'color: red;'> No record found </div>";
        }
    }
    if(isset($_GET['nest']) && $_GET['nest'] == 1){
        $a = $_SESSION['acrs'];
        $todelete = "DELETE FROM `Courses` WHERE `Course Code` = '$a'";
        $sql = mysqli_query($conn, $todelete);
        $_GET['nest'] = 0;
        $rtt = "<div style= 'color: red;'> Course deleted successfully</div>";
        echo '<meta http-equiv="refresh" content="3; url=addacourse.php">';

    }
    echo @$rtt;
?>

   
  </body>
</html>

    