<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learning";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize the score
$score = 0;

// Loop through the questions and check the answers
foreach ($_POST as $key => $value) {
    if (strpos($key, 'answer') === 0) {
        $questionid = substr($key, 6);
        $answer = mysqli_real_escape_string($conn, $value);
        
        // Fetch the correct answer from the database
        $sql = "SELECT answer FROM test WHERE questionid = $questionid";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $correct_answer = $row['answer'];
        
        // Check if the answer is correct
        if ($answer === $correct_answer) {
            $score++;
        }
    }
}

// Close the database connection
mysqli_close($conn);

// Redirect to the score page
header("Location: score.php?score=$score");
exit;
?>
