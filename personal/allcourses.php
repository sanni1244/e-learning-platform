<!-- <link rel="stylesheet" href="/elearning/style/style2.css"> -->
<link rel="stylesheet" href="/elearning/style/leftnav.css">
<link rel="stylesheet" href="/elearning/style/allcourse.css">



<!-- <link rel="stylesheet" href="/elearning/style/bootstrap.css"> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<title>All courses</title>
<link rel="shortcut icon" href="../images/z2.png" type="image/x-icon">

<body>
    <?php
    include_once("../sections/check.php");
    include_once("../personal/userdata.php");
    // include_once("../sections/dashnav.php");
    // error_reporting(0);
    ?>

    <div class="container2">
        <div class="one left">
            <a href="/elearning/personal/allcourses.php">
                <div class="brand">
                    <h4 class="h4">YEET KNOWLEDGE</h4>
                </div>
            </a>

            <ul>
                <a href="/elearning/personal/dashboard.php">
                    <li class="left-section "><img src="../icons/home.svg">Dashboard</li>
                </a>
                <a href="/elearning/personal/mycourses.php">
                    <li class="left-section"><img src="../icons/menubook.svg">My Courses</li>
                </a>
                <a href="/elearning/personal/allcourses.php">
                    <li class="left-section selection"><img class="blue" src="../icons/librarybooks.svg">All Courses</li>
                </a>
                <a href="/elearning/personal/search.php">
                    <li class="left-section"><img src="../icons/search.svg">Search List</li>
                </a>
                <a href="/elearning/personal/editdetails.php">
                    <li class="left-section"><img src="../icons/editn.svg">Edit Profile</li>
                </a>
                <?php if($array1['admin'] == "1"){
                  echo '<a href="/elearning/admin/admin.php"><li class="left-section Settings"><img src="../icons/admin.svg">Admin User</li></a>
                '; }?>
                <a href="/elearning/personal/logout.php">
                    <li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li>
                </a>

            </ul>
        </div>
        <div class="one center">
            <?php include '../sections/main.html'; ?>

        </div>



    </div>
</body>