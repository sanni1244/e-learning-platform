<link rel="stylesheet" href="/elearning/style/mycourse.css">
<link rel="stylesheet" href="/elearning/style/leftnav.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="shortcut icon" href="../images/z2.png" type="image/x-icon">
<title>My courses</title>
<body class="b4">
<?php 
    include_once("../sections/check.php");
    include_once("../personal/userdata.php");    
?>
<div class="container2">
    <div class="one left">
        <a href="/elearning/index.html"><div class="brand"><h4 class="h4">YEET KNOWLEDGE</h4></div></a>
            <ul>
                <a href="/elearning/personal/dashboard.php"><li class="left-section "><img src="../icons/home.svg">Dashboard</li></a>
                <a href="/elearning/personal/mycourses.php"><li class="left-section selection"><img  class="blue" src="../icons/menubook.svg">My Courses</li></a>
                <a href="/elearning/personal/allcourses.php"><li class="left-section"><img src="../icons/librarybooks.svg">All Courses</li></a>
                <a href="/elearning/personal/search.php"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
                <a href="/elearning/personal/editdetails.php"><li class="left-section"><img src="../icons/editn.svg">Edit Profile</li></a>
                <?php if($array1['admin'] == "1"){
                  echo '<a href="/elearning/admin/admin.php"><li class="left-section Settings"><img src="../icons/admin.svg">Admin User</li></a>
                '; }?>
                <a href="/elearning/personal/logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>   
            </ul>
    </div>
    <div class="one center">
        <div class="tax">
        <?php
            echo "<table class='table1'>
                    <tr  class='tr1'>
                        <td>COURSE CODE</td>
                        <td>COURSE TITLE</td>
                        <td>LEVEL</td>
                        <td colspan='3'><center>ACTIVITIES</center></td>
                    </tr>";
        $conn = mysqli_connect("localhost", "root", "", "learning");
            $save = $_SESSION['id'];
            $qwery = "SELECT mycourse FROM users WHERE id = $save ";
            $q1 = mysqli_query($conn, $qwery);
            $q2 = mysqli_fetch_row($q1);
            $q3 = implode($q2);
            $array = str_split($q3, 8);
            foreach($array as $val){
                @$ttt = strtoupper($val[2]).strtoupper($val[3]).strtoupper($val[4])." ".$val[5]. $val[6] . $val[7];
                $hrr = "SELECT * FROM `courses` WHERE `Course Code` = '$ttt'";
                $hty = mysqli_query($conn, $hrr);
                $htl = mysqli_fetch_row($hty);
                @$newop = $val[2].$val[3].$val[4].$val[5].$val[6].$val[7];
        if(isset($newop) && $ttt !== " "){              
                ?>
            <tr class='tr1'>
            <?php 
                if(@$htl[2] == null){
                    $htl[2] = "<p style='color: red;'>This course no longer exists</p>";
                    $htl[3] = "<p style='color: red;'>-</p>";
                }
                ?>
                <td><?php echo $ttt ?></td>
                <td><?php echo $htl[2]; ?></td>
                <td><?php echo $htl[3]; ?></td>
                <?php 
                if($ttt[2] == null){
                    $ttt[2] = "This course no longer exists";
                }
                echo "<td><a class='stake' href='/elearning/personal/link.php?aq=$newop'><img class='sym' title='Read course' src='../icons/menedit.svg'></a></td>"?>
                <?php echo "<td><a class='stake' href='../test/test.php?tst=$ttt'><img title='Take a test' class='sym' src='../icons/quiz.svg'></a></td> ";?>
                <?php echo "<td><a class='stake' href='./vet.php?j=$newop'><img title='Remove from your course list' class='sym' src='../icons/delete.svg'></a></td> "; ?>
            </tr>
        <?php }
        else{
            echo "<h3 class='noterrolled'>You have not added a course</h3>";
        }}
        ?>
        </table>
    </div>
</div>
</div>
</body>
<script src="../scripts/jquery.js"></script>
