<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="/elearning/style/leftnav.css">
<link rel="stylesheet" href="/elearning/style/dashboard.css">
<link rel="shortcut icon" href="../images/z2.png" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<title>Dashboard</title>
<body onload="displayRandomQuote()">
<?php
  include_once("../personal/userdata.php");   
  $check7 = "INSERT into `Dashboard`(id) value ('$save')";
  mysqli_query($conn, $check7);
  $check13 = "SELECT * FROM `Dashboard` WHERE `id` = '$save'";
  $okay = mysqli_query($conn, $check13);
  $flex1 = mysqli_fetch_array($okay);
  $flex2 = @$flex1['lastTest'];
  $flex3 = @$flex1['testScore'];
  $ver = "SELECT * from `courses` where `Course Code` = '$flex2'";
  $okay1 = mysqli_query($conn, $ver);
  $flex12 = mysqli_fetch_array($okay1);
  $flex14 = @$flex12['Course Title'];
?>
<div class="container1">
        <div class="one left">
            <a href="/elearning/index.html"><div class="brand"><h4 class="h4">YEET KNOWLEDGE</h4></div></a>
            <ul>
                <a href="/elearning/personal/dashboard.php"><li class="left-section selection"><img class="blue" src="../icons/home.svg">Dashboard</li></a>
                <a href="/elearning/personal/mycourses.php"><li class="left-section"><img src="../icons/menubook.svg">My Courses</li></a>
                <a href="/elearning/personal/allcourses.php"><li class="left-section"><img src="../icons/librarybooks.svg">All Courses</li></a>
                <a href="/elearning/personal/search.php"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
                <a href="/elearning/personal/editdetails.php"><li class="left-section"><img src="../icons/editn.svg">Edit Profile</li></a>
                <?php if($array1['admin'] == "1"){
                  echo '<a href="/elearning/admin/admin.php"><li class="left-section Settings"><img src="../icons/admin.svg">Admin User</li></a>
                '; }?>
                <a href="/elearning/personal/logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>
            </ul>
        </div>
        
        <div class="one center overall">
        <div class="topnot">
        <div class="flex2">
        <form action="./search.php" method="get" class="frm">
            <input type="search" class="search" placeholder="Search..." name="q" id="asearch">
        </form>
            <div class="">
            <?php
                    if (date("H") < 12){
                      echo " <img class='logo2' src='../images/morning.png'><h1 class='greet'>Good Morning</h1>";
                    }
                    elseif (date("H") > 11 && date("H") < 17){
                      echo "<img class='logo2' src='../images/sunset.png'><h1 class='greet'>Good Afternoon </h1>";
                    }
                    elseif(date("H") > 16){
                      echo " <img class='logo2' src='../images/moon.png'><h1 class='greet'>Good Evening</h1>";    
                    }
                  ?>
            </div>
               </div>
              <div class="tip">Hello, <?php echo ucfirst($array1["first name"]);?>!!
                <div class="tip2">Welcome to yeet knowledge, it's time to learn.</div>
                <?php
                  include('./faculties.php');
                  if($fac !== ""){
                    echo ("<h2 class='fac'>" .ucfirst(strtolower($fac)) . "</h2>");
                  echo ("<h2 class='fac'>" .ucfirst(strtolower($dep)) . " (". $lev ." level) </h2>");
                  echo ("<h2 class='fac'> Matric Number: ". $mat ." </h2>");
              
                  }
                ?>
        </div>
        </div>
            <?php 
            $lr = @$flex1["lastRead"];
              $query = "SELECT * from `courses` where `Course Code` = '$lr'";
            $lr_run = mysqli_query($conn, $query);
            $ry = mysqli_fetch_assoc($lr_run);
            $code = @$ry['Course Code'];
            $level = @$ry['level'];
            $title = @$ry['Course Title'];
            $codeinsmall = strtolower(@$code[0]).strtolower(@$code[1]).strtolower(@$code[2]).@$code[4].@$code[5].@$code[6];
        if($lr !== "" && $lr !== null){
          echo "
          <fieldset class='lst_read_content'>
          <legend  >Last Course</legend>
            <img src='../images/read.png' class='read' alt=''>
            <span class='lst_read_content_text'><span><span class='ferf'>$code: $title</span><br/><br/><span class='ferf'>$level</span></span>
            </span>
            <span class='lst_read_content_text'><span><a href='./link.php?aq=$codeinsmall'>Continue Reading</a><a href='../test/test.php?tst=$code'>Test</a></span></span></span>
</fieldset>
";}
          if($flex2 !== "" && $flex2 !== null){
            echo "
            <fieldset class='lst_read_content'>
          <legend>Last Test</legend>
              <img src='../images/test.png' class='read' alt=''>
              <span class='lst_read_content_text'><span><span class='ferf'>$flex2: $flex14</span><br/><br/><span><a href='../test/test.php?tst=$flex2'>Retake Test</a></span></span>
            </span>
              </span>";
            if($flex3 < 4){
              echo "<span class='lstq'><span class='gng'>Score: $flex3/10</span><img src='../images/fail.png' class='read' alt=''></span>";
            }
            if($flex3 > 3 && $flex3 < 7){
              echo "<span class='lstq'><span class='gng'>Score: $flex3/10</span><img src='../images/good.png' class='read' alt=''></span>";
            }
            if($flex3 > 6){
              echo "<span class='lstq'><span class='gng'>Score: $flex3/10</span><img src='../images/pass.png' class='read' alt=''></span>
              </fieldset>
              ";
            }    
          }
        ?>              
        </div>
        <div class="one right">
          <?php include_once('calendar.php');?>
          <div class="quotes" id="quote-container">
            <p id="quote-text"></p>
            <p id="quote-author"></p>
          </div>
          <script>
  function displayDateTime() {
  var date = new Date();
  var dateString = date.toLocaleDateString();
  var timeString = date.toLocaleTimeString();
  document.getElementById("date").innerHTML = dateString;
  document.getElementById("time").innerHTML = timeString;
}
setInterval(displayDateTime, 1000);

var quotes = [
      {
        quote: "The best way to predict the future is to create it.",
        author: "Abraham Lincoln"
      },
      {
        quote: "I have not failed. I've just found 10,000 ways that won't work.",
        author: "Thomas Edison"
      },
      {
        quote: "You miss 100% of the shots you don't take.",
        author: "Wayne Gretzky"
      },
      {
        quote: "Education is not the filling of a pail, but the lighting of a fire.",
        author: "William Butler Yeats"
      },
      {
        quote: "The best teacher is not the one who knows most but the one who is most capable of reducing knowledge to that simple compound of the obvious and wonderful.",
        author: "H.L. Mencken"
      },
      {
        quote: "The only way to do great work is to love what you do.",
        author: "Steve Jobs"
      },
      {
        quote: "An investment in knowledge pays the best interest.",
        author: "Benjamin Franklin"
      },
      {
        quote: "The purpose of education is to replace an empty mind with an open one.",
        author: "Malcolm Forbes"
      },
      {
        quote: "It is not that I’m so smart. But I stay with the questions much longer.",
        author: "Albert Einstein"
      },
      {
        quote: "The only person who is educated is the one who has learned how to learn and change.",
        author: "Carl Rogers"
      },
      {
        quote: "Learning is not attained by chance, it must be sought for with ardor and attended to with diligence.",
        author: "Abigail Adams"
      },
      {
        quote: "The more that you read, the more things you will know. The more that you learn, the more places you’ll go.",
        author: "Dr. Seuss"
      },
      {
        quote: "Education is not the learning of facts, it’s rather the training of the mind to think.",
        author: "Albert Einstein"
      },
      {
        quote: "The only real limitation on your abilities is the level of your desires. If you want it badly enough, there are no limits.",
        author: "Brian Tracy"
      },
      {
        quote: "The only thing that interferes with my learning is my education.",
        author: "Albert Einstein"
      },
      {
        quote: "Education is the most powerful weapon which you can use to change the world.",
        author: "Nelson Mandela"
      },
      {
        quote: "The best way to predict your future is to create it.",
        author: "Abraham Lincoln"
      },
      {
        quote: "The more that you study, the more you will learn. The more that you learn, the more places you’ll go.",
        author: "Dr. Seuss"
      },
      {
        quote: "The greatest glory in living lies not in never falling, but in rising every time we fall.",
        author: "Nelson Mandela"
      },
      {
        quote: "The function of education is to teach one to think intensively and to think critically. Intelligence plus character – that is the goal of true education.",
        author: "Martin Luther King Jr."
      }

    ];
    function displayRandomQuote() {
      var randomIndex = Math.floor(Math.random() * quotes.length);
      var selectedQuote = quotes[randomIndex];
      var quoteText = document.getElementById("quote-text");
      var quoteAuthor = document.getElementById("quote-author");
      quoteText.innerHTML = selectedQuote.quote;
      quoteAuthor.innerHTML = selectedQuote.author;
    }
    setInterval(displayRandomQuote, 20000);
</script> 
        </div>
    </div>
</body>
   


<style>
  .quotes{
    font-size: 0.85rem
  }
</style>


