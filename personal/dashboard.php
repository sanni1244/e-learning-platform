
<link rel="stylesheet" href="/vent/style/style2.css">
<link rel="stylesheet" href="/vent/style/dashboard.css">

<!-- <link rel="stylesheet" href="/vent/style/bootstrap.css"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

<body>
<?php
include_once("../personal/userdata.php");   

?>
<div class="container1">
        <div class="one left">
            <a href="/vent/index.html"><div class="brand"><h4 class="h4">YEET KNOWLEDGE</h4></div></a>

            <ul>
                <a href="/vent/personal/dashboard.php"><li class="left-section selection"><img class="blue" src="../icons/home.svg">Dashboard</li></a>
                <a href="/vent/personal/mycourses.php"><li class="left-section"><img src="../icons/menubook.svg">My Courses</li></a>
                <a href="/vent/personal/allcourses.php"><li class="left-section"><img src="../icons/librarybooks.svg">All Courses</li></a>
                <a href="/vent/personal/search.php"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
                <a href="/vent/personal/editdetails.php"><li class="left-section"><img src="../icons/editn.svg">Edit Profile</li></a>
                <a href="/vent/personal/logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>
            </ul>
        </div>
        <div class="one center">
        <div class="flex2">
            
              <?php
                if (date("H") < 12){
                  echo " <img class='logo2' src='../images/morning.png'><h1 class='greet'>Good Morning</h1>";
                }
                elseif (date("H") > 11 && date("H") < 17){
                  echo "<img class='logo2' src='../images/sunset.png'><h1 class='greet'>Good Afternoon </h1>";
                }
                elseif(date("H") > 16){
                  echo " <img class='logo2' src='../images/moon.png'><h1 class='greet'>Good Evening</h1>";    
                }

              ?>
           </div>

           <div class="tip">Hello, <?php echo $array1["first name"];?>!!
            <div class="tip2">Welcome to yeet knowledge, it's time to learn.</div>
            
            <?php
              include('./faculties.php');
            ?>
            
        </div>
<?php 
$lr = $array1["lastRead"];
  $query = "SELECT * from `courses` where `Course Code` = '$lr'";
$lr_run = mysqli_query($conn, $query);
$ry = mysqli_fetch_assoc($lr_run);
$code = $ry['Course Code'];
$level = $ry['level'];
$title = $ry['Course Title'];


?>
        <div class="dashcontent">
          <h3 class="lst_read">Last Read</h3>
          <h5 class="lst_read_content">
            <img src="../images/read.png" class="read" alt="">
            <span class="lst_read_content_text">
              <?php echo "<span><span class='lst_read'>".$code.": ".$title."</span><br/><span class='lst_read'>".$level."</span></span>";?>
            </span>
            <span class="lst_read_content_text">
asas
            </span>
          </h5>
      
    
        
      
        </div>








        </div>
        <div class="one right">
          <?php include_once('calendar.php');?>

        </div>













    </div>
</body>
   



<!-- <?php  

?> -->





