<?php include '../sections/check.php'; 
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
<head>
    <?php include_once '../sections/headers.html'; ?>
    <title>LOG IN</title>
</head>
<!--NavBar section-->
<div class="">
    <div class="navsaw">
        <a href="/vent/index.html"><div class="brand"><h1>YEET KNOWLEDGE</h1></div>   </a>        
        <div class="acct">
            <a href="/vent/user/signup.php">Sign Up</a>
       </div>
    </div>
</div>
<body class="lbody">
     <div class="loginbody">
         <div class="lg1">
        <div class="both-side left-side"></div>
        <div class="both-side right-side">
        <div class="">
            <h1 class="h1">Login</h1>
            <form class="form" action="" id="form1" method="post">
                <div class="myoptions">
                    <a href="/vent/user/login.php?e=1"><div class="button">Use E-mail</div></a> <hr>
                    <a href="/vent/user/login.php?e=0"><div class="button">Use Matric Number</div></a>
                </div>
                <?php if (!(isset($_GET['e'])) || isset($_GET['e']) && $_GET['e'] != 0){  ?>

<div>

<div class="cntn1 vvv">
                <label for="">Email<sup title="This field is required"></sup></label>
                <input class="lbl1 lbl3" value="<?php echo $wemail ?>" placeholder="<?php echo $blankemail ?>" type="email" name="email" id=""></input>      
            </div>
</div>
<?php } ?>
<?php if(isset($_GET['e']) && $_GET['e'] == 0){  ?>
<div>
<div class="cntn1 vvv">
                <label title="This field is not required. It must be 9 characters long" for="">Matric Number</label>
                <input class="lbl1 lbl3" value="<?php echo $matric1 ?>" placeholder="<?php echo $matt ?>" type="number" name="matric" id=""></input>    
            </div></div>
<?php } ?>

<div class="">
            <div class="cntn1 vvv">
                <label for="">Password<sup title="This field is required. It must be at least 4 characters long."></sup></label>
                <input class="lbl1 lbl3" placeholder="<?php echo $blankpass?>" type="password" name="password" id=""></input>
            </div>
            <div class="cntn1">
            <div class="lbl2">
                <?php if($warning != ""){echo $warning; }?>
            </div>
            </div>
        
<div class="signup-section">
            <div class="cntn1">
                <input type="submit" class="lbl8" name="login" value="Log In" id="submit1">      
            </div>
        </div>

</form>
<div class="notyet">
        <h5>Already have an account?</h5> <br>
        <a href="login.php">Log In here</a>
    </div>

        </div>








        </div>

    </div>
    <!--
         <span title="Go Back" class="material-symbols-sharp">
            <a class="fixed" href="./signup.php">arrow_back</a>
        </span>
         
            
        <div class="notyet">
            <h5>Not yet registered?</h5> <br>
            <a href="signup.php">Sign Up here</a>
        </div>
    </div> -->
    
</body>
<script>
    function login(){
        <?php $log = 0; ?>
    }
    function login1(){
        <?php $log = 1; ?>
    }
</script>
</html>
</form>

