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

// Fetch 10 random questions from the database
$sql = "SELECT * FROM test ORDER BY RAND() LIMIT 10";
$result = mysqli_query($conn, $sql);

// Store the questions in an array
$questions = array();
while ($row = mysqli_fetch_assoc($result)) {
    $questions[] = $row;
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
</head>
<body>
    <h1>Quiz</h1>

    <form method="post" action="submit_quiz.php" id="quizForm">
        <?php foreach ($questions as $index => $question): ?>
            <div class="question-container" <?php if ($index != 0) { echo "style='display:none;'"; } ?>>
                <p><?php echo $question['question']; ?></p>
                <input type="radio" name="answer<?php echo $question['questionid']; ?>" value="A"> <?php echo $question['option1']; ?><br>
                <input type="radio" name="answer<?php echo $question['questionid']; ?>" value="B"> <?php echo $question['option2']; ?><br>
                <input type="radio" name="answer<?php echo $question['questionid']; ?>" value="C"> <?php echo $question['option3']; ?><br>
                <input type="radio" name="answer<?php echo $question['questionid']; ?>" value="D"> <?php echo $question['option4']; ?><br>
                <button type="button" class="next-button" onclick="showNextQuestion()">Next</button>
            </div>
        <?php endforeach; ?>

        <input type="submit" value="Submit" style="display:none;">
    </form>

    <br>

    <h2>Answers</h2>
    <?php foreach ($questions as $question): ?>
        <p><?php echo $question['question']; ?></p>
        <p>Answer: <?php echo $question['answer']; ?></p>
    <?php endforeach; ?>

    <script>
        // Set the time limit for the quiz (in seconds)
        var timeLimit = 300;

        // Start the timer
        var timer = setInterval(function() {
            timeLimit--;
            document.getElementById("timer").innerHTML = "Time left: " + timeLimit + " seconds";
            if (timeLimit <= 0) {
                clearInterval(timer);
                document.getElementById("quizForm").submit();
            }
        }, 1000);

        // Show the next question when the "Next" button is clicked
        function showNextQuestion() {
            var currentQuestion = document.querySelector(".question-container:not([style='display:none;'])");
            var nextQuestion = currentQuestion.nextElementSibling;
            if (nextQuestion != null) {
                currentQuestion.style.display = "none";
                nextQuestion.style.display = "block";
            } else {
                document.getElementById("quizForm").submit();
            }
        }
    </script>

    <p id="timer">Time left: <?php echo $timeLimit; ?> seconds</p>
</body>
</html>
``
