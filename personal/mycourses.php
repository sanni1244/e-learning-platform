<link rel="stylesheet" href="/vent/style/style2.css">
<!-- <link rel="stylesheet" href="/vent/style/bootstrap.css"> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<body class="b4">
<?php 
    include_once("../sections/check.php");
    include_once("../personal/userdata.php");   
?>
<div class="container2">
    <div class="one left">
        <a href="/vent/index.html"><div class="brand"><h4 class="h4">YEET KNOWLEDGE</h4></div></a>
            <ul>
                <a href="/vent/personal/dashboard.php"><li class="left-section "><img src="../icons/home.svg">Dashboard</li></a>
                <a href="/vent/personal/mycourses.php"><li class="left-section selection"><img  class="blue" src="../icons/menubook.svg">My Courses</li></a>
                <a href="/vent/personal/allcourses.php"><li class="left-section"><img src="../icons/librarybooks.svg">All Courses</li></a>
                <a href="/vent/personal/search.php"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
                <a href="/vent/personal/editdetails.php"><li class="left-section"><img src="../icons/editn.svg">Edit Profile</li></a>
                <a href="/vent/personal/logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>   
            </ul>
        </div>
        <div class="one center centrb">
<?php
echo "<table class='table1'>
        <tr  class='tr1'>
                <td>COURSE CODE</td>
                <td>COURSE NAME</td>
                <td>LEVEL</td>
                <td colspan='3'><center>ACTIVITIES</center></td>
            </tr>";
            $conn = mysqli_connect("localhost", "root", "", "learning");
            $save = $_SESSION['id'];
           $qwery = "SELECT mycourse FROM users WHERE id = $save";
           $q1 = mysqli_query($conn, $qwery);
           $q2 = mysqli_fetch_row($q1);
           $q3 = implode($q2);
           $array = str_split($q3, 8);
foreach($array as $val){
    $ttt = strtoupper($val[2]).strtoupper($val[3]).strtoupper($val[4])." ".$val[5]. $val[6] . $val[7];
    $newop = $val[2].$val[3].$val[4].$val[5].$val[6].$val[7];     
    $array10[] = $newop;
    $array11[] = $ttt;
}?>
    <?php 
        	for ($i = 0; $i < count($array10); $i++) {
                $hrr = "SELECT * FROM `courses` WHERE `Course Code` = '$array11[$i]'";
                $hty = mysqli_query($conn, $hrr);
                $htl = mysqli_fetch_row($hty);
                echo "<tr class='tr1'>
                <td>$htl[1]</td>
                <td>$htl[2] </td>
                <td>$htl[3]</td>
                <td><a class='stake' href='/vent/personal/link.php?aq=$newop'>Read</a></td>
                <td>Take Test</td>
                <td><button onclick='echoValue(" . $i . ")'>Remove <br/>" . $htl[1] . "</button></td>
                </tr>";
              }
            $_SESSION['gbg'] = $array11;
    ?>
       <tr class='tr1'>
                
                
                <td><?php  echo "<button onclick='echoValue(" . $ttt . ")'>Button " . $ttt . "</button>"; ?>

                </td>
            </tr>
            <!-- // echo $newop; -->
        
<!-- echo $newop; -->

</div>
<script>
  function echoValue(valz) {
        // console.log(val);
        $.ajax({
    url: "./vet.php?myVar=" + valz,
    success: function(response) {
        document.write(response);
  }
});
      }
</script>
</div>
</body>
<script src="../scripts/jquery-3.6.3.min.js"></script>
<?php

?>