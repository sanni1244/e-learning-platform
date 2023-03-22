<link rel="stylesheet" href="/vent/style/leftnav.css">
<link rel="stylesheet" href="/vent/admin/admin.css">
<?php include_once("../personal/userdata.php"); ?>
<title>Admin</title>
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
<a class="goback" href="../personal/dashboard.php"><img src="../icons/back.svg" alt=""></a>

    <h1 class="adminheader"><center>Admin Page</center></h1>
    <div class="">
        <h2>View All Students</h2>
        <a href="studentview.php">View All Students</a>

    </div>
    <div class="">
        <h2>Add/Remove a courses</h2>
        <a href="addacourse.php">Click here</a>
    </div>
    <div class="">
        <h2>Add a material from a course</h2>
        <a href="addmaterial.php">Click here</a>

    </div>
    <div class="">
        <h2>Remove a material from a course</h2>
        <a href="remmaterial.php">Click here</a>

    </div>


</div>
</div>