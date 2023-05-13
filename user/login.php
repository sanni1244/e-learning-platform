<?php include '../sections/check.php';?>
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
        <a href="/elearning/index.html"><div class="brand"><h1>YEET KNOWLEDGE</h1></div>   </a>        
        <div class="acct">
            <a href="/elearning/user/signup.php">Sign Up</a>
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
                    <a href="/elearning/user/login.php?e=1" id="link1"><div class="button button1">E-mail</div></a> 
                    <a href="/elearning/user/login.php?e=0" id="link2"><div class="button">Matric No.</div></a>
                </div>
                <?php if (!(isset($_GET['e'])) || isset($_GET['e']) && $_GET['e'] != 0){  ?>

<div>

<div class="cntn1 vvv">
                <label for="">Email<sup title="This field is required"></sup></label>
                <input class="lbl1 lbl3" value="<?php echo $wemail; echo @$wemail1; ?>" value="<?php echo $wemail && @$wemail1 ?>" placeholder="<?php echo $blankemail ?>" type="email" name="email" id=""></input>      
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
        <p>Don't have an account? <a href="signup.php">Sign up here</a></p> 
        
    </div>

        </div>
        </div>
    </div>
</body>
<script>
    function login(){
        <?php $log = 0; ?>
    }
    function login1(){
        <?php $log = 1; ?>
    }
    const links = document.getElementById('link1');
    const links2 = document.getElementById('link2');

const currentPage = window.location.href;

  if (links.href === currentPage) {
    console.log(window.location.href)
    links.classList.add("active");
  }
  else{
    links.classList.add("hold");
  }
  if (links2.href === currentPage) {
    console.log(window.location.href)

    links2.classList.add("active");
  }
  
;

</script>
</html>
</form>

