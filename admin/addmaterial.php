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
<a class="goback" href="./admin.php"><img src="../icons/back.svg" alt=""></a>
<?php include_once('./z.php'); ?>

	<h2>File Upload</h2>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
		<label for="file">Choose a file:</label><br>
		<input type="file" id="file" name="file" ><br>
		<label for="filename">Enter Course Code:</label><br>
		<input type="text" id="filename" name="filename"><br>
        <?php echo @$errmgg; ?><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</div>
</div>
</body>
</html>



<style>
    	h2 {
		text-align: center;
		margin-top: 0;
	}

	form {
		background-color: #fff;
		padding: 20px;
		border-radius: 5px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		max-width: 500px;
		margin: 0 auto;
	}

	label {
		font-weight: bold;
	}
	input[type="text"] {
		width: 100%;
		padding: 10px;
		box-sizing: border-box;
		margin-bottom: 20px;
		border-radius: 5px;
		border: 1px solid #ccc;
		font-size: 16px;
	}
    input[type="file"] {
		color: brown;
		cursor: pointer;
		font-size: 16px;
        border: none;
        margin-left: 2rem
	}
	input[type="submit"] {
		background-color: #4CAF50;
		color: #fff;
		padding: 10px 20px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		font-size: 16px;
	}

	input[type="submit"]:hover {
		background-color: #3e8e41;
	}
</style>
