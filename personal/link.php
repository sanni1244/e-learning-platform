<link rel="stylesheet" href="../style/style2.css">
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
    <!-- <center>
    <div class=""><h2>The course code</h2></div>
    <div class=""><h5>The course title</h5></div>
    </center>
    <p>What it is about</p>
    <p>Level</p>
     
    Materials and Notes <br>
    1. <br>
    2. <br>
    3. <br>
    4. <br>
    5. <br> -->
    <?php
    $conn = mysqli_connect("localhost", "root", "", "learning");
    if(isset($_GET["aq"])){
        if($_GET["aq"]){
            $rtr = $_GET["aq"];
            $word = strtoupper(substr($rtr, 0, 3)) . " ".  substr($rtr, 3, 6) ;
            $sqlquery = "SELECT * FROM `courses` WHERE `Course Code` = '$word'";
            $query = mysqli_query($conn, $sqlquery);
            $nnb = mysqli_fetch_array($query);

            if(mysqli_num_rows($query) == 0){
                header("location:/vent/personal/allcourses.php");
            }
            echo "<center><div class=''><h2>{$word}</h2></div>
                            <div class=''><h4>{$nnb['Course Title']}</h4></div></center>";
    $sqlquery1 = "SELECT materials FROM `courses`";
    $query1 = mysqli_query($conn, $sqlquery1);
    $nnb1 = mysqli_fetch_array($query1);
    echo $nnb1[0];




    // $fil = '../material/' .$rtr .'/' .$rtr .'.xml';
    // $filename = fopen($fil, 'r') or die ("weakness" );
    // while(!feof($filename)){
    //     $line = fgets($filename);
    //     echo $line;
    // }
    // fclose($filename);
}
    }
































    else{
        header("location:/vent/personal/allcourses.php");
    }







?>






    </div>


</div>
