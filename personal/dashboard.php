
<link rel="stylesheet" href="/vent/style/style2.css">
<!-- <link rel="stylesheet" href="/vent/style/bootstrap.css"> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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
            <div class="tip">Hello, <?php echo $array1["first name"];?>!!
            <div class="tip2">Welcome to yeet knowledge, it's time to learn.</div></div>







        </div>
        <!-- <div class="one right"></div> -->













    </div>
</body>
   















<!-- <?php  
if (date("H") < 12){
    echo "<h1 class='greet'>Good Morning <img class='logo2' src='../images/morning.png'></h1>";
}
elseif (date("H") > 11 && date("H") < 17){
    echo "<h1 class='greet'>Good Afternoon <img class='logo2' src='../images/sunset.png'></h1>";
}
elseif(date("H") > 16){
    echo "<h1 class='greet'>Good Evening <img class='logo2' src='../images/moon.png'></h1>";    
}
?> -->