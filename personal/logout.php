<?php
    require_once('userdata.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging Out</title>
</head>
<body>
    <div style="width: 150px; margin:auto; height:500px; margin-top:300px;" >
        <?php
            echo '<progress max=100><strong>Progress: 60% done.</strong></progress></br>';
            echo '<span>Logging Out...</span>'; 
        ?>
    </div>
    <?php
    session_destroy();
    mysqli_close($conn);
    echo '<meta http-equiv="refresh" content="2; url=../index.html">';
    ?>
</body>
</html>