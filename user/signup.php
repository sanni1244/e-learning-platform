
<?php include '../sections/check.php'; 
$sort = "";
if(isset($_POST['radio']) && $_POST['radio'] == "yes"){
    $sort = "yes";
}
elseif(isset($_POST['radio']) && $_POST['radio'] == "no"){
    $sort = "no";
    }?>
<head>
    <?php include_once '../sections/headers.html'; ?>
    <title>SIGN UP</title>
</head>
<body class="sbody">
<div class="">
    <!--NavBar section-->
    <div class="">
    <div class="navsaw">
        <a href="/vent/index.html"><div class="brand"><h1>YEET KNOWLEDGE</h1></div>   </a>        
        <div class="acct">
            <a href="/vent/user/login.php">Log In</a>
       </div>
    </div>
</div>

    <form class="form" id="thediv" action="" method="post">
        <div class="signup-section">
            <div class="cntn1">
                <label for="">First Name<sup title="This field is required">*</sup></label>
                <input class="lbl1" value="<?php echo $fname ?>" placeholder= "<?php echo $blankfname ?>" type="text" name="firstname" id=""></input> 
            </div>
            <div class="cntn1">
                <label for="">Last Name<sup title="This field is required">*</sup></label>
                <input class="lbl1" value="<?php echo $lname ?>" placeholder="<?php echo $blanklname ?>" type="text" name="lastname" id=""></input>    
            </div>
        </div>
        <div class="signup-section">
            <div class="cntn1">
                <label for="">Email<sup title="This field is required">*</sup></label>
                <input class="lbl1" value="<?php echo $wemail ?>" placeholder="<?php echo $blankemail ?>" type="email" name="email" id=""></input>      
            </div>
            <div class="cntn1">
                <div class="studDiv">
                    <label for="">Are you a student?</label>
                        <span class="mnb">
                            <span class="imp">YES<input type="radio" onchange="autosubmit()" <?php if($sort == "yes"){?> checked="checked" <?php } ?> name="radio" value="yes"></span>
                            <span class="imp">NO<input type="radio" onchange="autosubmit()" <?php if($sort == "no"){?> checked="checked" <?php } ?> name="radio" value="no"></span>
                        </span>
                </div>
            </div> 
        </div>
                <?php if($sort == "yes"){ include '../user/signup1.php'; ?>
        <div class="signup-section">
            <div class="cntn1">
                <label title="This field is not required. It must be 9 characters long" for="">Matric Number</label>
                <input class="lbl1" value="<?php echo $matric1 ?>" placeholder="<?php echo $matt ?>" type="number" name="matric" id=""></input>    
            </div>
            <div class="cntn1">
                <label for="">Level</label>
                <select name="level" id="Level" class="lbl1">
                    <option selected value="100">100 level</option><option value="200">200 level</option><option value="300">300 level</option><option value="400">400 level</option><option value="500">500 level</option>
                </select>
            </div>
        </div> 
        <?php } ?>
        <div class="signup-section">
            <div class="cntn1">
                <label for="">Password*<sup title="This field is required. It must be at least 4 characters long."></sup></label>
                <input class="lbl1" placeholder="<?php echo $blankpass?>" type="password" name="password" id=""></input>
            </div>
            <div class="cntn1">
            <div class="lbl2">
                <?php if($warning != ""){echo $warning; }?>
            </div>
            
            </div>
        </div>
        <div class="signup-section">
            <div class="cntn1">
                <input type="submit" class="lbl1" name="signup" value="Signup" id="submit1">       
            </div>
        </div>
                    </div>
    </form>
    <div class="notyet">
        <p>Already have an account? <a href="login.php">Log In here</a></p>
        
    </div>

</body>
<script>

    function autosubmit(){
        var rrr = document.forms["thediv"];
        rrr.submit();
    }
    function facchange(){
        document.getElementById("deptt")
    }
</script>
</html>
</form>





