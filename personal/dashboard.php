
<link rel="stylesheet" href="/vent/style/style2.css">
<link rel="stylesheet" href="/vent/style/dashboard.css">
<link rel="stylesheet" href="/vent/style/allcourses.css">
<link rel="shortcut icon" href="../images/z2.png" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
<title>Dashboard</title>
<body>
<?php
include_once("../personal/userdata.php");   
$check7 = "INSERT IGNORE into `Dashboard`(id) value ('$save')";
$check13 = "SELECT * FROM `Dashboard` WHERE `id` = '$save'";
  $okay = mysqli_query($conn, $check7);
  $okay = mysqli_query($conn, $check13);

            $flex1 = mysqli_fetch_array($okay);
            $flex2 = @$flex1['lastTest'];
            $flex3 = @$flex1['testScore'];
            $ver = "SELECT * from `courses` where `Course Code` = '$flex2'";
  $okay1 = mysqli_query($conn, $ver);
  $flex12 = mysqli_fetch_array($okay1);
  $flex14 = @$flex12['Course Title'];



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
        <div class="one center overall">
        <div class="topnot">
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
            
        </div>
            <?php 
            $lr = @$flex1["lastRead"];
              $query = "SELECT * from `courses` where `Course Code` = '$lr'";
            $lr_run = mysqli_query($conn, $query);
            $ry = mysqli_fetch_assoc($lr_run);
            $code = @$ry['Course Code'];
            $level = @$ry['level'];
            $title = @$ry['Course Title'];
            $codeinsmall = strtolower(@$code[0]).strtolower(@$code[1]).strtolower(@$code[2]).@$code[4].@$code[5].@$code[6];
        if($lr !== ""){
          echo "
          <div class='dashcontent'>
          
          Last Read

          <h5 class='lst_read_content'>
            <img src='../images/read.png' class='read' alt=''>
            <span class='lst_read_content_text'><span><span class='ferf'>$code: $title</span><br/><br/><span class='ferf'>$level</span></span>
            </span>
            <span class='lst_read_content_text'><span class='links_to_text'><a href='./link.php?aq=$codeinsmall'>Continue Reading</a><a href='../test/test.php?tst=$code'>Test</a></span></span></span>
            </h5>
          </div>";}
          if($flex2 !== ""){
            echo "
            <div class='dashcontent'>
          Last Test

            <h5 class='lst_read_content'>
              <img src='../images/test.png' class='read' alt=''>
              <span class='lst_read_content_text'><span><span class='ferf'>$flex2: $flex14</span><br/><br/><span class='ferf'><a  class='ferf' href='../test/test.php?tst=$flex2'>Retake Test</a></span></span>
            </span>
              </span>";
            if($flex3 < 4){
              echo "<span class='lstq'><span class='gng'>Score: $flex3/10</span><img src='../images/fail.png' class='read' alt=''></span>
              </h5>
            </div>";
            }
            if($flex3 > 3 && $flex3 < 7){
              echo "<span class='lstq'><span class='gng'>Score: $flex3/10</span><img src='../images/good.png' class='read' alt=''></span>
              </h5>
            </div>";
            }
            if($flex3 > 6){
              echo "<span class='lstq'><span class='gng'>Score: $flex3/10</span><img src='../images/pass.png' class='read' alt=''></span>
              </h5>
            </div>";
            }
              
          }
          
       
          ?>              
        </div>
        <div class="one right">
          <?php include_once('calendar.php');?>

        </div>













    </div>
</body>
   





