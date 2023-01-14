<?php
session_start();
if(!isset($fname) && !isset($lname) && !isset($wemail) && !isset($matric1)){
    $lname = $wemail =  $matric1 =  $fname = "";
}
$blankfname = $matt = $blanklname = $blankemail = $blankpass = $warning = " ";
$mypass = "";
$filename = '../en.txt';
$filename2 = '../common_passwords.txt';
$file = file_get_contents($filename);
$conn = mysqli_connect("localhost","root", "", "learning") or die('Connection Failed');
$file2 = file_get_contents($filename2);
$noinput = "This field cannot be left blank!";
//sign up

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])){
    if(isset($_POST['firstname']) && isset($_POST['lastname'])  && isset($_POST['email'])  && isset($_POST['password']) ){
        $firstname = strtolower($_POST['firstname']);
        $lastname = strtolower($_POST['lastname']);
        $email = strtolower($_POST['email']);
        $password = $_POST['password'];
        $facl = @$_POST["facrrr"];
        $dtr = @$_POST["dtment"];
        $level = @$_POST["level"];
        if(isset($_POST['matric'])){
            $matric = $_POST['matric'];
        }
        if($firstname == ""){
            $blankfname = $noinput;}
        else{
            if(strstr($file, $firstname . "1")){
                $warning = "First name entry is not allowed";}
            else{
                $fname =  ($_POST['firstname']);
                if($lastname == ""){
                    $blanklname = $noinput;}
                else{
                    if(strstr($file, $lastname . "1")){
                        $warning = "Last name entry is not allowed";}
                    else{
                        $lname =  ($_POST['lastname']);
                        if($email == ""){
                            $blankemail = $noinput;}
                        else{
                            $check_mail = "SELECT * FROM `users` WHERE `email` = '$email'";
                            $check = mysqli_query($conn, $check_mail);
                            if(mysqli_num_rows($check) !== 0){
                                $blankemail = "Already registered!";                         
                            }
                            else{
                            $wemail =  ($_POST['email']);
                            if(isset($matric) && $matric != null){
                                $year = date("y");
                                $late = 15;
                                if(strlen($matric) != 9){
                                    $matt = "Check your matric number";}
                                else{
                                    if(substr($matric, 0, 2) <= $year && substr($matric, 0, 2) > $late){
                                        $check_mat = "SELECT `matricNo` FROM `users` WHERE `matricNo` = '$matric'";
                                        $check1 = mysqli_query($conn, $check_mat);
                                            if(mysqli_num_rows($check1) !== 0){
                                                $matt = "Matric Number already exists.";   
                                            }
                                            else{
                                                $matric1 = $_POST['matric'];}
                                            }
                                    else{
                                    $matt = "Check your matric number";}}}
                                if($password == "" || strpos($password, " ") !== false){
                                    $blankpass = "Cannot be blank or contain spaces." ;
                                    }
                                else{
                                    if(strlen($password) < 4){
                                        $blankpass = "Must be at least 4 characters long";
                                    }
                                    else{
                                        if(strpos(strtolower($file2), $password) || $password == 1234) {
                                            $warning = "Password is easily predictable, try adding numbers!";
                                        }
                                        else{  
                                            if($matt == " "){
                                                $mypass = $_POST['password'];    
                                                $successful_reg = "Yes"; 
                                                }}}}}}}}}}}
    else{
        echo "An error occured!";
    }}
if(isset($successful_reg)){
    //inserting into the database
    $insert_details = "INSERT INTO `Users`(`first name`,`last name`, `email`, `matricNo`, `faculty`, `department`, `level`, `password`) VALUES ('$fname', '$lname', '$wemail', '$matric1', '$facl', '$dtr', '$level', '$mypass')";
    $check2 = mysqli_query($conn, $insert_details);
    $check_mail = "SELECT * FROM `users` WHERE `email` = '$wemail'";
    $check3 = mysqli_query($conn, $check_mail);
    if(mysqli_num_rows($check3) !== 0){
        $warning = "Your sign up was successful";
        $_SESSION['mer'] = $_POST['email'];
        echo "<meta http-equiv='refresh' content='2; url=../user/login.php'>";
    }}
 //login
$wemail1 = @$_SESSION['mer'];

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
    $_SESSION['mer'] = null;
    $conn = mysqli_connect("localhost","root", "", "learning") or die('Connection Failed');
    if(isset($_POST['email'])  && isset($_POST['password']) ||isset($_POST['matric'])  && isset($_POST['password']) ){

        if(isset($_POST['email'])){
            $email = strtolower($_POST['email']);}
            $password = $_POST['password'];
            if(isset($_POST['matric'])){
                $matric = $_POST['matric'];
            }
            $check_pass = "SELECT * FROM `users` WHERE `password` = '$password'"; 
            $check2 = mysqli_query($conn, $check_pass);
                    if(mysqli_num_rows($check2) == 0){
                            $warning = "Incorrect details";                         
                            }
                    else {
                        if(isset($email) && $email != NULL){
                        $check_mail = "SELECT * FROM `users` WHERE `email` = '$email'";
                        $check3 = mysqli_query($conn, $check_mail);
                        $array1 = mysqli_fetch_array($check3);
                        $array2 = mysqli_fetch_array($check2);
                        $array4 = @$array1['id'];
                            if(@$array1['id'] == @$array2['id']){
                                $warning = "Login was successful";
                                    $wemail = $_POST['email'];
                                   $_SESSION['id'] = $array4;
                                    header("refresh: 3; url=../personal/dashboard.php");
                            }
                            else{
                                    $warning = "Incorrect details";                      
                            }
                    }
                        elseif(isset($matric) && $matric != NULL){
                            $check_mat = "SELECT * FROM `users` WHERE `matricNo` = '$matric'";
                            $check3 = mysqli_query($conn, $check_mat);
                            $array1 = mysqli_fetch_array($check3);
                            $array2 = mysqli_fetch_array($check2);
                            $array4 = $array1['id'];
                        if(isset($array1['id']) && $array2['id'] !== NULL && $array1['id'] == $array2['id']  ){
                            
                            $warning = "Login was successful";
                            $matric1 = $_POST['matric'];
                            // echo "<script>localStorage.setItem('sd12133', '$matric1');</script>";
                            $_SESSION['id'] = $array4;

                            header("refresh: 2; url=../personal/dashboard.php");
                        }
                        else{
                                $warning = "Incorrect details";                      
                        }
                    }
                    else{
                        $warning = "Incorrect details";                      
                }
                }}}
        // $wemail = "";

?>
