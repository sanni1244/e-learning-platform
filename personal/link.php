
<link rel="stylesheet" href="../style/style2.css">
<div class="container2">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>

<div class="one left">
            <a href="/vent/personal/allcourses.php"><div class="brand"><h4 class="h4">YEET KNOWLEDGE</h4></div></a>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
            <ul>
                <a href="/vent/personal/dashboard.php"><li class="left-section"><img src="../icons/home.svg">Dashboard</li></a>
                <a href="/vent/personal/mycourses.php"><li class="left-section"><img src="../icons/menubook.svg">My Courses</li></a>
                <a href="/vent/personal/allcourses.php"><li class="left-section selection"><img class="blue" src="../icons/librarybooks.svg">All Courses</li></a>
                <a href="/vent/personal/search.php"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
                <a href="/vent/personal/editdetails.php"><li class="left-section"><img src="../icons/editn.svg">Edit Profile</li></a>
                <a href="/vent/personal/logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>
            </ul>
        </div>
    <div class="one center coursedetails">
    <?php
    session_start();
    
    $conn = mysqli_connect("localhost", "root", "", "learning");
    $save = $_SESSION['id'];
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
                            <div class=''><h4>{$nnb['Course Title']} ({$nnb['level']})</h4></div></center>              
                            <div class='coursedet1'>{$nnb['materials']}</div>" ;
                            $f2 = $nnb['Course Code'];
                            $last_read = $word;
            $yr = "SELECT mycourse FROM users WHERE id = $save AND `mycourse` like '%$rtr%'";
            $lkl = "UPDATE `users` SET `lastRead` = '$last_read' where id = '$save'";
            mysqli_query($conn, $lkl);
            $yr1 = mysqli_query($conn, $yr);
            $nnbdd= mysqli_fetch_array($yr1);
            function runMyFunction() {
                global $save;
                global $rtr;
                global $conn;
                global $yr1;
                if(mysqli_num_rows($yr1) == 0){
                    $addit = "UPDATE users SET mycourse = CONCAT(`mycourse`, ', $rtr') WHERE id = $save";
                    mysqli_query($conn, $addit);
                    echo "<script>location.reload();</script>";
                }
                else{
                    return 0;
                }}
            function runMyFunction1() {
                global $save;
                global $rtr;
                global $conn;
                global $yr1;
                if(mysqli_num_rows($yr1) !== 0){
                    $addit = "SELECT * FROM users WHERE id = $save";
                    $fre = mysqli_query($conn, $addit);
                    $row = mysqli_fetch_assoc($fre);
                    $mycourse = $row['mycourse'];
                    $mycourse = (string)$mycourse;
                    $mycourse = strtolower($mycourse);
                    $mycourse = str_replace(", ".$rtr, "", $mycourse);
                    $query = "UPDATE users SET mycourse = '$mycourse' WHERE id = $save";
                    mysqli_query($conn, $query);
                    $_GET['enr'] = '';
                    echo "<script>location.reload();</script>";
                }
                else{
                    return 0;
                }}  
    if(mysqli_num_rows($yr1) !== 0){
        echo "<a href='/vent/personal/link.php?aq={$rtr}&enr=yes'><div class='enrol enrolled'>Enrolled</div></a>";}
    else{
        echo "<a href='/vent/personal/link.php?aq={$rtr}&enr=no'><div class='enrol'>Enrol for this course</div></a>";
        }      
        if(isset($_GET['enr']) && $_GET['enr'] == 'yes') {
            runMyFunction1();
        }
        elseif (isset($_GET['enr']) && $_GET['enr'] == 'no'){
            runMyFunction();
        }    
        echo "<div class=''>Download Materials</div>"; 
        ?>
            
<script>
var creater = "<?php echo $rtr; ?>";
$(function() {
$.getJSON('./elist.json', function(data) {
   $.each(data[creater], function(i, f) {
      var tblRow = "<p  class='yyy'>" + "<span>" + f.materialname + "</span><a href='" + f.link + "'><img class='dwl' src='/Vent/icons/download.png'></a></p>"
       $(tblRow).appendTo("#userdata ");
 });

});

});

</script>
</head>

<body>
<div class="wrapper">
<div class="profile">
<div id= "userdata" border="2">
</div>
</div>
<?php 
    $fil = '../material/' .$rtr .'/' .$rtr .'.xml';
    $filename = fopen($fil, 'r') or die ("weakness" );
    while(!feof($filename)){
        $line = fgets($filename);
        echo $line;
    }
    fclose($filename);
}}
    else{
        header("location:/vent/personal/allcourses.php");
    }
    
?><br><br><br>
</div></div>










e