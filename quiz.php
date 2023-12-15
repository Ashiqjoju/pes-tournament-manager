<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script>


<?php
include 'config.php';
$phone=$_POST['phone'];
if($phone=='')
{
 echo "<script>";
 echo "alert('LOGIN REQUIRED');";
 echo "window.location.href = 'sucesslogin.php';";
 echo "</script>";
}

$sql = "UPDATE users SET point='0' , status='y' WHERE phone='$phone'";
if ($mysqli->query($sql) === TRUE) {
 
} 

?>
<script>
         setTimeout(function(){
            window.location.href = 'teamlogin.php?phone=<?php echo $phone; ?>';
         }, 65000);
      </script>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Quiz</title>
    
</head>
<style>
				


#question{
    font-family: "sans-serif";
   color: #1d1b34 ;
    font-size: 110px;
    text-align: center;
    
    
    
}

#score {
    color: #5A6772;
    text-align: center;
    font-size: 30px;
}



.buttons {
    margin-top: 10px;
}
#btn0, #btn1, #btn2, #btn3 ,.btn{
    background-color: #1D1B34;
    width: 350px;
    height:115px;
    font-size: 45px;
    color: #fff;
    border: 1px solid #1D3C6A;
    border-radius:10px;
    margin: 10px 40px 10px 10px;
    padding: 10px 10px;
}
 
 .asq{
 				
 				Color:#1D1B34;
 				font-size:30px;
 }
#btn0:hover, #btn1:hover, #btn2:hover, #btn3:hover {
    cursor: pointer;
    
    background-color: #1D1B34;
}

#btn0:focus, #btn1:focus, #btn2:focus, #btn3:focus {
    outline: 0;
}

#progress {
    color: #1D1B34;
    font-size: 38px;
}
body{background:#1d1b34;
overflow:none;
}

section {
 
  padding: 0;
  margin: 0; 
  display: flex;
  width: 100vw;
  height: 60vh;
  margin-left:25px;
  Margin-top:10%;
  background-color:#1d1b34 ;
}

.grid {
  width:900px;
  height:1000px;
  border:none;
 
  background-color: white;
  padding: 10px;
  border-radius:15px;
  box-shadow: 0 0 10px 2px;
}

table{
width:100%;
}
.base-timer {
  position: relative;
  width: 300px;
  height: 300px;
}

.base-timer__svg {
  transform: scaleX(-1);
}

.base-timer__circle {
  fill: none;
  stroke: none;
}

.base-timer__path-elapsed {
  stroke-width: 7px;
  stroke: grey;
}

.base-timer__path-remaining {
  stroke-width: 7px;
  stroke-linecap: round;
  transform: rotate(90deg);
  transform-origin: center;
  transition: 1s linear all;
  fill-rule: nonzero;
  stroke: currentColor;
}

.base-timer__path-remaining.green {
  color: rgb(65, 184, 131);
}

.base-timer__path-remaining.orange {
  color: orange;
}

.base-timer__path-remaining.red {
  color: red;
}

.base-timer__label {
  position: absolute;
  width: 300px;
  height: 300px;
  top: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 48px;
}

#app{
color:white;
margin-top:100px;
}




				 </style> 
				 
<body>
<center>
<div id="app"></div>

<section>
    
           <div class="grid">
           <center>
        <div id="quiz"> 
        				<h1>MML Quiz</h1>

            
            <centre>
<table border="0">
				
				<tr><th colspan="2">
								<p id="question"></p>
				</th></tr>
          <tr><td>
          				
          				
          				<div class="buttons">
                <center><button id="btn0"><span id="choice0"></span></button>
           </td> <td> <center> <button id="btn1"><span id="choice1"></span></button></td></tr><tr><td>
               <center> <button id="btn2"><span id="choice2"></span></button></td><td>
               <center> <button id="btn3"><span id="choice3"></span></button>
            </div></td></tr></table>
</centre>
            <hr style="margin-top:60px; border:none; border-bottom: 2px solid #57636e;">
            <footer>
                <p id="progress">Question x of y</p>
            </footer>
        </div>
    </div>
    
    
    </section>
    
    
    <script>
 				// Credit: Mateusz Rybczonec

const FULL_DASH_ARRAY = 283;
const WARNING_THRESHOLD = 30;
const ALERT_THRESHOLD = 10;

const COLOR_CODES = {
  info: {
    color: "green"
  },
  warning: {
    color: "orange",
    threshold: WARNING_THRESHOLD
  },
  alert: {
    color: "red",
    threshold: ALERT_THRESHOLD
  }
};

const TIME_LIMIT = 60;
let timePassed = 0;
let timeLeft = TIME_LIMIT;
let timerInterval = null;
let remainingPathColor = COLOR_CODES.info.color;

document.getElementById("app").innerHTML = `
<div class="base-timer">
  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <g class="base-timer__circle">
      <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      <path
        id="base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d="
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id="base-timer-label" class="base-timer__label">${formatTime(
    timeLeft
  )}</span>
</div>
`;

startTimer();

function onTimesUp() {
  clearInterval(timerInterval);
}

function startTimer() {
  timerInterval = setInterval(() => {
    timePassed = timePassed += 1;
    timeLeft = TIME_LIMIT - timePassed;
    document.getElementById("base-timer-label").innerHTML = formatTime(
      timeLeft
    );
    setCircleDasharray();
    setRemainingPathColor(timeLeft);

    if (timeLeft === 0) {
      onTimesUp();
    }
  }, 1000);
}

function formatTime(time) {
  const minutes = Math.floor(time / 60);
  let seconds = time % 60;

  if (seconds < 10) {
    seconds = `0${seconds}`;
  }

  return `${minutes}:${seconds}`;
}

function setRemainingPathColor(timeLeft) {
  const { alert, warning, info } = COLOR_CODES;
  if (timeLeft <= alert.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(warning.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(alert.color);
  } else if (timeLeft <= warning.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(info.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(warning.color);
  }
}

function calculateTimeFraction() {
  const rawTimeFraction = timeLeft / TIME_LIMIT;
  return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
}

function setCircleDasharray() {
  const circleDasharray = `${(
    calculateTimeFraction() * FULL_DASH_ARRAY
  ).toFixed(0)} 283`;
  document
    .getElementById("base-timer-path-remaining")
    .setAttribute("stroke-dasharray", circleDasharray);
}


 </script>
    
    
    
<script>
				function Quiz(questions) {
    this.score = 0;
    this.questions = questions;
    this.questionIndex = 0;
}

Quiz.prototype.getQuestionIndex = function() {
    return this.questions[this.questionIndex];
}

Quiz.prototype.guess = function(answer) {
    if(this.getQuestionIndex().isCorrectAnswer(answer)) {
        this.score++;
    }

    this.questionIndex++;
}

Quiz.prototype.isEnded = function() {
    return this.questionIndex === this.questions.length;
}

</script>
<script>
				function Question(text, choices, answer) {
    this.text = text;
    this.choices = choices;
    this.answer = answer;
}

Question.prototype.isCorrectAnswer = function(choice) {
    return this.answer === choice;
}

</script>

<script>
				function populate() {
    if(quiz.isEnded()) {
        showScores();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;

        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }

        showProgress();
    }
};

function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};


function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};

function showScores() {
    var gameOverHTML = "<h1>MML Quiz</h1>";
    gameOverHTML += "<table border='1'></table><tr><td><center><form action='quizupdate.php' method='get'><input type='hidden' name='phone' value='<?php echo $phone; ?>' ><input id='score' type='hidden' name='point' value='" + quiz.score + "' ><br><input class='btn' type='submit' Value='SUBMIT'></form></td></tr></table>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};

// create questions
var questions = [
    new Question("Which club took the MML season1 Cup?", ["Manchester City", "Ac Milan","Paris Saint Germain", "Atletico Madrid"], "Paris Saint Germain"),
    new Question("Golden boot winner of season 2", ["Paris Saint Germain", "Manchester City", "FC Barcelona", "Juventus"], "FC Barcelona"),
    new Question("Runner up of Season 2?", ["Atletico Madrid", "Ac Milan","Manchester City", "Paris Saint Germain"], "Ac Milan"),
    new Question("Number of Goals scored by juventus Season 3", ["24", "25", "26", "27"], "27"),
    new Question("Most valuable player", ["Mbappe", "Neymar", "Halland", "Lukaku"], "Mbappe"),
    new Question("Season 2 'Team of the season'", ["Manchester City", "Ac Milan","Manchester United","Paris Saint Germain"],"Manchester City"),
    new Question("Market value of ROMELU LUKKAKU", ["€110M", "€105M","€100M","€95M"],"€100M"),
    new Question("E.HALLAND Current club in MML", ["Paris Saint Germain", "Manchester City", "FC Barcelona", "Juventus"], "Juventus"),
    new Question("Runner up of Season 5?", ["Atletico Madrid", "Ac Milan","Manchester City", "Paris Saint Germain"], "Atletico Madrid"),
    new Question("Number of Goals scored by Manchester City Season 5", ["21", "20", "19", "18"], "20"),
];

// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();






</script>


</body>
</html>
