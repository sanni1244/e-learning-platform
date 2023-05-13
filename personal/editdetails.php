<link rel="stylesheet" href="/elearning/style/leftnav.css">
<link rel="stylesheet" href="/elearning/style/editdetails.css">

<link rel="shortcut icon" href="../images/z2.png" type="image/x-icon">
<title>Edit Details</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<body>
    <div class="editdetailsstyle"> 
<?php
include_once("../personal/userdata.php");  

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $_POST["dtment"] = "01";
    if($_POST['fname'] !== ""){
        $firstname = $_POST['fname'];
    }
    if($_POST['lname'] !== ""){
        $lastname = $_POST['lname'];
    }
    $matrcc2 = $_POST['matrcc1'];
        $password2 = $_POST["password"];
    
  } else {
        $_POST["facrrr"] = @$facty;
        $_POST["dtment"] = $depart;
  }
  $save = $_SESSION['id'];
    $check_mail = "SELECT * FROM `users` WHERE `id` = '$save'";
    $check3 = mysqli_query($conn, $check_mail);
    $array1 = mysqli_fetch_array($check3);
?>
 <div class="container2">
        <div class="one left">
            <a href="/elearning/index.html"><div class="brand"><h4 class="h4">YEET KNOWLEDGE</h4></div></a>
            <ul>
                <a href="/elearning/personal/dashboard.php"><li class="left-section "><img src="../icons/home.svg">Dashboard</li></a>
                <a href="/elearning/personal/mycourses.php"><li class="left-section"><img src="../icons/menubook.svg">My Courses</li></a>
                <a href="/elearning/personal/allcourses.php"><li class="left-section "><img src="../icons/librarybooks.svg">All Courses</li></a>
                <a href="/elearning/personal/search.php"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
                <a href="/elearning/personal/editdetails.php"><li class="left-section selection"><img  class="blue" src="../icons/editn.svg">Edit Profile</li></a>
                <?php if($array1['admin'] == "1"){
                  echo '<a href="/elearning/admin/admin.php"><li class="left-section Settings"><img src="../icons/admin.svg">Admin User</li></a>
                '; }?>
                <a href="/elearning/personal/logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>
            </ul>
        </div>
        <div class="one center effe">
        <div>
    <h4 class="head7">Edit Your Profile</h4>
    </div>
    <div>
    <form id="sdiv" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="on" accept-charset="">       
        <div class="mvr3">
            <div class="mvr1">
                <label for="" class="mlm">FIRST NAME</label>
                <label for="" class="mlm">LAST NAME</label>
                <label for="" class="mlm" >E-MAIL</label>
                <label for="" class="mlm">MATRIC NO</label>
                <label for="" class="mlm">FACULTY</label>
                <label for="" class="mlm">DEPARTMENT </label>
                <label for="" class="mlm">LEVEL</label>
                <label for="" class="mlm">PASSWORD</label>
            </div>
            <div class="mvr2">
                <input type="text"  class="form-control mlm"  name="fname" value="<?php echo ucfirst($firstname); ?>">   
                <input type="text" class="mlm"  name="lname" value="<?php echo ucfirst($lastname); ?>">
                <input type="text"  class="editmail" name="" readonly value="<?php echo $email; ?>" >
                <input type="text" class="mlm" name="matrcc1" value="<?php echo $matrcc2; ?>">
                
            
                <?php 
                    include_once('./editfac.php');
                ?>
                <select name="level" id="Level" class="mlm nrer">
                <option selected hidden value="No">None</option>
                    <option <?php if($lev == 100){ ?> selected <?php } ?> value="100">100 level</option>
                    <option <?php if($lev == 200){ ?> selected <?php } ?> value="200">200 level</option>
                    <option <?php if($lev == 300){ ?> selected <?php } ?> value="300">300 level</option>
                    <option <?php if($lev == 400){ ?> selected <?php } ?> value="400">400 level</option>
                    <option <?php if($lev == 500){ ?> selected <?php } ?> value="500">500 level</option>
                </select>
                <input type="text" class="mlm" name="password" value="<?php echo $password2; ?>">
                <div class="updateit">
                    <button type="submit" class="same" name="updatebtn">Update Details</button>
                </div>
            </div>
            
        </div>
        <?php echo @$err44; ?>
       </form>
       
    </div>
    <div class="onlydel">
    <hr>

        <h4 class="deleted">Delete Account</h4>
            <p>Do you wish to permanently delete this account? <br> If you click the button below, your account will be deleted from the database and there will be no way to restore your account.</p>
            <a href="./del.php"><button type="submit" class="same redbttn" name="deleteacct">Delete Account</button></a> 
    </div>   
        </div>
 </div>
</div>
</body>


<style>
    /* Apply styles to the labels */
    label {
        color: #0b5cd6e7;
        font-weight: bold;
        margin-top: 5px;

    }
    
    /* Apply styles to the input fields */
    input[type="text"], select {
        border: 1px solid #0b5cd6e7;
        border-radius: 3px;
        padding: 5px;
        margin-top: 5px;
    }

</style>
