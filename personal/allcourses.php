<link rel="stylesheet" href="/vent/style/style2.css">
<!-- <link rel="stylesheet" href="/vent/style/bootstrap.css"> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<body>
<?php
include_once("../sections/check.php");
include_once("../personal/userdata.php");   
// include_once("../sections/dashnav.php");  
?>

 <div class="container1 container2">
        <div class="one left">
            <a href="/vent/personal/allcourses.php"><div class="brand"><h4 class="h4">YEET KNOWLEDGE</h4></div></a>

            <ul>
                <a href="/vent/personal/dashboard.php"><li class="left-section "><img src="../icons/home.svg">Dashboard</li></a>
                <a href="/vent/personal/mycourses.php"><li class="left-section"><img src="../icons/menubook.svg">My Courses</li></a>
                <a href="/vent/personal/allcourses.php"><li class="left-section selection"><img class="blue" src="../icons/librarybooks.svg">All Courses</li></a>
                <a href="/vent/personal/search.php"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
                <a href="/vent/personal/editdetails.php"><li class="left-section"><img src="../icons/editn.svg">Edit Profile</li></a>
                <a href="/vent/personal/logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>

            </ul>
        </div>
    <div class="one center">
      <?php include '../sections/main.html'; ?>

    </div>
        <div class="one right"></div>












    </div>
</body>