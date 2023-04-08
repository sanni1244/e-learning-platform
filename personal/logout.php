<?php
    require_once('userdata.php');
?>
<link rel="stylesheet" href="../style/logout.css">
<!-- <link rel="stylesheet" href="../style/leftnav.css"> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../images/z2.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging Out</title>
</head>
<body>
    <div class="outbody">
    <div class="">You are now logged out.</div> <br>
<img src="../images/z8.jpg" class="logout" alt="goodbye">

<a href="../user/login.php"><div class="block1">Log In</div></a>
<div class="vrt1"><a class="vrt" href="../index.html">Go Home</a></div>
</div>

<?php
    session_destroy();
    mysqli_close($conn);
    echo '<meta http-equiv="refresh" content="3 url=../index.html">';
    ?>
</body>
</html>
