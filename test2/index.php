<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Multiple Choice Test with Timer</title>
    <script src="test.js"></script>
</head>
<body>
    <div id="question"></div>
    <div id="options"></div>
    <button id="submit">Submit Answer</button>
    <p id="timer">Time Remaining: </p>
    <p id="result"></p>
</body>
</html>









<script>
  // Define global variables
let questionIndex = 0;
let correctAnswers = 0;
let timer;

// Fetch questions and answers from the database
function fetchQuestions() {
    return new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'questions.php', true);
        xhr.onload = function() {
            if (this.status === 200) {
                resolve(JSON.parse(this.responseText));
            } else {
                reject(new Error(this.statusText));
            }
        };
        xhr.onerror = function() {
            reject(new Error('Network Error'));
        };
        xhr.send();
    });
}

// Display the current question and options
function displayQuestion() {
    const currentQuestion = questions[questionIndex];
    document.getElementById("question").innerHTML = currentQuestion.question;
    document.getElementById("options").innerHTML = currentQuestion.options.map(option => {
        return `<label><input type="radio" name="answer" value="${option}">${option}</label>`;
    }).join("");
}

// Check the selected answer and display the result
function checkAnswer() {
    const selectedAnswer = document.querySelector('input[name="answer"]:checked');
    if (selectedAnswer && selectedAnswer.value === questions[questionIndex].answer) {
        correctAnswers++;
    }
    questionIndex++;
    if (questionIndex < questions.length) {
        displayQuestion();
    } else {
        clearInterval(timer);
        document.getElementById("question").innerHTML = "";
        document.getElementById("options").innerHTML = "";
        document.getElementById("submit").style.display = "none";
        document.getElementById("timer").style.display = "none";
        document.getElementById("result").innerHTML = `You got ${correctAnswers} out of ${questions.length} questions correct.`;
    }
}

// Set the timer for each question
function startTimer(duration, display) {
    let time = duration;
    timer = setInterval(function() {
        display.textContent = `Time Remaining: ${time}`;
        if (time === 0) {
            checkAnswer();
            time = duration;
        } else {
            time--;
        }
    }, 1000);
}

// Start the test
function startTest() {
    fetchQuestions().then(data => {
        questions = data;
        displayQuestion();
        startTimer(10, document.getElementById("timer"));
    }).catch(error => {
        console.error(error);
    });
}

// Add event listener to the submit button
document.getElementById("submit").addEventListener("click", checkAnswer);

// Call the startTest function when the page loads
window.onload = startTest;

</script>