<?php
include_once("../sections/check.php");
// include_once("../sections/dashnav.php");


$filename = '../en.txt';
$filename2 = '../common_passwords.txt';
$file = file_get_contents($filename);
$conn = mysqli_connect("localhost","root", "", "learning") or die('Connection Failed');
$file2 = file_get_contents($filename2);
$save = $_SESSION['id'];
if(!isset($save)){
    header("location:../user/login.php");
}
$check_mail = "SELECT * FROM `users` WHERE `id` = '$save'";
$check3 = mysqli_query($conn, $check_mail);
$array1 = mysqli_fetch_array($check3);
    $lastname = $array1['last name'];
    $firstname = $array1['first name'];
    $email = $array1['email'];
    $matrcc2 = $array1['matricNo'];
    $password2 = $array1['password'];  
    $id = $array1['id'];  
    $facty = $array1['faculty'];  
    $depart = $array1['department'];  
    $lev = $array1['level'];  






    
?>
<?php
    if(isset($_POST['updatebtn']) ) {
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            $data = test_input($data);
            return $data;
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $fname = ucfirst($_POST['fname']);
            $lname = ucfirst($_POST['lname']);
            $faccc = $_POST['facrrr'];
            $dtrrr = $_POST['dtment'];
            $lvlvl = $_POST['level'];


            $matrcc = ucfirst($_POST['matrcc1']);
            $password = ucfirst($_POST['password']);

            $check_mat = "SELECT `matricNo` FROM `users` WHERE `matricNo` = '$matrcc'";
            $check1 = mysqli_query($conn, $check_mat);
            $array1 = mysqli_fetch_array($check1);
            $year = date("y");
            $late = 15;
            
        if(empty($fname)){
            $err44 = "<span class='red'>First name cannot be empty</span>";}
        elseif(strstr($file, $fname . "1")){
            $err44 = "<span class='red'>The first name entry made is not allowed</span>";}
        elseif(empty($lname)){
            $err44 = "<span class='red'>Last name cannot be empty</span>";}
        elseif(strstr($file, $lname . "1")){
            $err44 = "<span class='red'>The last name entry made is not allowed</span>";}
        elseif(strlen($matrcc) != 9 && $matrcc != ""){$err44 = "<span class='red'>Check your matric number</span>";}
        elseif((substr($matrcc, 0, 2) > $year || substr($matrcc, 0, 2) < $late) && $matrcc !== ""){
            $err44 = "<span class='red'>Check your matric number</span>";}
        elseif(mysqli_num_rows($check1) !== 0 && $matrcc2 !== $matrcc && $matrcc !== ""){ 
            $err44 = "<span class='red'>Check your matric number</span>";}
        elseif(strlen($password) < 4){
            $err44 = "<span class='red'><span class='red'>Password should be 4 characters or more!</span>";}
        elseif($password == "" || strpos($password, " ") !== false){
            $err44 = "<span class='red'>Cannot be blank or contain spaces.</span>" ;
            }
        elseif(strpos(strtolower($file2), $password) || $password == 1234) {
            $err44 = "<span class='red'>Password is easily predictable, try adding numbers!</span>";
        }
        else{
        $sql = "UPDATE `users` SET `first name` = '$fname', `last name` = '$lname', `matricNo` = '$matrcc', `password` = '$password', `faculty` = '$faccc', `department` = '$dtrrr', `level` = '$lvlvl' WHERE `Email` = '$email'"; 
            $rs = mysqli_query($conn, $sql);

            $err44 = "<span class='red'>Updated!</span>";
            echo "<meta http-equiv='refresh' content='1.5; url=dashboard.php'>";      
}}}  
?>