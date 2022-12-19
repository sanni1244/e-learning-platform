<!--NavBar section-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="/vent/style/style2.css">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
<?php 
            // $_GET['q'] = 0;
            ?>
<div class="">
    <div class="navsaw">
        <a href="/vent/index.html"><div class="brand"><h1>YEET KNOWLEDGE</h1></div></a>

    <form action="" action="POST" class="frm10">
            <input type="search" class="search" <?php if(isset($r)){?> hidden <?php }?> placeholder="Search..." name="q" id="">
            
        </form>
        <?php if(!empty($_GET['q'])){ 
            $_SESSION['search'] = @$_GET['q'];
            echo "asas";
                header("location:../personal/search.php");
            $yes = @$_GET['q'];
            }?>
        <div class="acct">
            <a href="/vent/user/login.php">Manage Account</a>
            <a href="/vent/user/signup.php">Log Out</a>
            <?php 
                $wer = @$_GET['q'];
                echo @$wer;

            ?>
       </div>
    </div>
</div>






















<!-- <div class="navbar1">
    <div class="navcat">
    <a href="../index.php"><img class="logo" src="/vent/images/logo.jpg" alt=""></a>
        <h1 class="">Yeet Knowledge</h1>
    </div>    
    <div class="navcat">
        <select class="selectsection" name="" id="">
            <option value="" hidden selected>Categories</option>
            <option value="">Development</option>
            <option value="">Business</option>
        </select>
        
    </div>
    
    <div class="navend">
        <span><img class="profilepic" src="../images/profile.png" alt=""></span>

        <div class="navcat">

            <select class=" " onchange="location = this.value;" name="" id="">
                <option hidden selected>My account</option>
                <option value="../personal/edit.php">Edit Details</option>
                <option value="../personal/delete.php">Delete Account</option>
            </select>
            
    </div>
    </div>

</div> -->
