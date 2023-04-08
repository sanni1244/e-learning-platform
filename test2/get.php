<?php

// Replace these values with your own database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learning";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database for all questions
$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

// Convert the results to a PHP array
$questions = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Decode the options array from JSON
        $options = json_decode($row["options"]);
        $question = array(
            "id" => $row["id"],
            "question" => $row["question"],
            "options" => $options,
            "answer_index" => $row["answer_index"]
        );
        // Add the question to the array
        array_push($questions, $question);
    }
}

// Convert the array to JSON and output it
echo json_encode($questions);

// Close the database connection
$conn->close();

?>
