<link rel="stylesheet" href="/elearning/style/leftnav.css">
<link rel="stylesheet" href="/elearning/admin/admin.css">
<?php include_once("../personal/userdata.php"); ?>
<title>Admin user view</title>
<div class="container1">

    <div class="one left">
                <a href="/elearning/index.html"><div class="brand"><h4 class="h4">YEET KNOWLEDGE</h4></div></a>
                <ul>
                    <a href="/elearning/personal/dashboard.php"><li class="left-section "><img src="../icons/home.svg">Dashboard</li></a>
                    <a href="/elearning/personal/mycourses.php"><li class="left-section"><img src="../icons/menubook.svg">My Courses</li></a>
                    <a href="/elearning/personal/allcourses.php"><li class="left-section"><img src="../icons/librarybooks.svg">All Courses</li></a>
                    <a href="/elearning/personal/search.php"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
                    <a href="/elearning/personal/editdetails.php"><li class="left-section"><img src="../icons/editn.svg">Edit Profile</li></a>
                    <a href="/elearning/admin/admin.php"><li class="left-section Settings selection"><img  class="blue"  src="../icons/admin.svg">Admin User</li></a>
                    <a href="/elearning/personal/logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>
                </ul>
            </div>

<div class="one center">
<a class="goback" href="../admin/admin.php"><img src="../icons/back.svg" alt=""></a>
<h2><center>All registered Users</center></h2>
<?php include_once("../personal/userdata.php");

    $query = "SELECT * FROM `users` ORDER BY `matricNo` ASC";
    $select_query = mysqli_query($conn, $query);
    if (mysqli_num_rows($select_query) > 0) {
        echo "
        <table class='allstudentdata' border=2>
        <tr>
            <th>Matric Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            <th>Level</th>
            <th>Faculty</th> 
            <th>Department</th> 
            <th>Remove User</th> 


        </tr>  
    ";
        // Loop through each record and display it
        while ($row = mysqli_fetch_assoc($select_query)) {
            
            
            if($row['matricNo'] == null){
                $row['matricNo'] = "-";
            }
            if($row['level'] == null){
                $row['level'] = "-";
            }
            if($row['faculty'] == null){
                $row['faculty'] = "-";
            }
            if($row['department'] == null){
                $row['department'] = "-";
            }
            $array1["faculty"] = $row['faculty'];
            $array1["department"] = $row['department'];
            include("../personal/faculties.php");
            $semail = $row['email']; 
            echo "
                    <tr class='userdata'>
                        <td>" . $row['matricNo'] . "</td>
                        <td>" . $row['first name'] . "</td>
                        <td>" . $row['last name'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['level'] . "</td> 
                        <td>" . $fac . "</td> 
                        <td>" . $dep . "</td> ";
                        if($row['admin'] == "1"){
                            echo "<td style='color: white; background: black'>Admin</td>";
                        }
                        else{
                            echo "
                        <td><a class='removeuser' href='./studentview.php?delete=$semail'><div>Remove</div></a></td> 
                    </tr>       
                    
            ";}
            if(isset($_GET['delete'])){
                echo "lma a";
                $r = $_GET['delete'];
                $sql = "DELETE FROM `users` WHERE `Email` = '$r'";  
                $rs = mysqli_query($conn, $sql);    
                $_GET['delete'] = 'no';
                header('location: ./studentview.php');
            };
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }
    
      
?>










    