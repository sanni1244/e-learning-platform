<link rel="stylesheet" href="/vent/admin/admin.css">
<link rel="stylesheet" href="/vent/style/leftnav.css">
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
                    <a href="/vent/admin/admin.php"><li class="left-section Settings selection"><img class="blue" src="../icons/admin.svg">Admin User</li></a>
                    <a href="/vent/personal/logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>
                </ul>
            </div>

<div class="one center">
<a class="goback" href="../personal/dashboard.php"><img src="../icons/back.svg" alt=""></a>

<h1 class="adminheader" style="text-align:center;">Admin Page</h1>
<div class="admin-section">
  <h2 class="admin-subheader">View All Students</h2>
  <a class="admin-link" href="studentview.php">Click here</a>
</div>
<div class="admin-section">
  <h2 class="admin-subheader">Add/Remove a course</h2>
  <a class="admin-link" href="addacourse.php">Click here</a>
</div>
<div class="admin-section">
  <h2 class="admin-subheader">Add a new course material</h2>
  <a class="admin-link" href="addmaterial.php">Click here</a>
</div>
<div class="admin-section">
  <h2 class="admin-subheader">Remove a course material</h2>
  <a class="admin-link" href="remmaterial.php">Click here</a>
</div>


</div>
</div>


<style>
		body {
			margin: 0;
			padding: 0;
		}

		.center {
			display: flex;
			flex-direction: column;
			margin: 50px;
			padding: 20px;
			background-color: white;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
		}

		.adminheader {
			font-size: 36px;
			margin-top: 0;
			margin-bottom: 30px;
			color: #4a4a4a;
		}

		.adminheader {
  font-size: 2.5em;
  margin-bottom: 30px;
}

.admin-section {
  margin-bottom: 20px;
}

.admin-subheader {
  font-size: 1.5em;
  margin-bottom: 10px;
}

.admin-link {
  display: block;
  font-size: 1.2em;
  padding: 10px 20px;
  background-color: #f8f8f8;
  border: 1px solid #ccc;
  border-radius: 5px;
  text-decoration: none;
  color: #333;
  transition: background-color 0.3s ease-in-out;
}

.admin-link:hover {
  background-color: #eee;
}


		
	</style>