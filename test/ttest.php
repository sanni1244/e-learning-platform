<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learning";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve a random question from the database
$sql = "SELECT * FROM test ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $question_text = $row["question"];
  $option1 = $row["option1"];
  $option2 = $row["option2"];
  $option3 = $row["option3"];
  $option4 = $row["option4"];
  $answer = $row["answer"];
} else {
  echo "No questions found in the database.";
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  <style>
    /* Add some CSS styles to the form */
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type=radio] {
      margin-right: 5px;
    }
    #next {
      display: none;
    }
  </style>
</head>
<body>
  <h1>Quiz</h1>
  <form id="quiz" method="post">
    <p id="question"><?php echo $question_text; ?></p>
    <label><input type="radio" name="answer" value="1"><?php echo $option1; ?></label>
    <label><input type="radio" name="answer" value="2"><?php echo $option2; ?></label>
    <label><input type="radio" name="answer" value="3"><?php echo $option3; ?></label>
    <label><input type="radio" name="answer" value="4"><?php echo $option4; ?></label>
    <
