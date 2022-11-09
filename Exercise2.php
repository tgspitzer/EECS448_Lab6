<?php
  //Gather data from quiz and store
  $answer1 = $_POST["q1"];
  $answer2 = $_POST["q2"];
  $answer3 = $_POST["q3"];
  $answer4 = $_POST["q4"];
  $answer5 = $_POST["q5"];

  $total = 0;
  $result = "";

  //Prints questions and results

    echo "Answers: <br><br>";
    echo "Question 1: What color is the sky?<br>";
    echo "You answered: $answer1 <br>";
    echo "Correct answer: Blue <br><br>";

    echo "Question 2: What is 2+2?<br>";
    echo "You answered: $answer2 <br>";
    echo "Correct answer: 4 <br><br>";

    echo "Question 3: How many planets in the solar system?<br>";
    echo "You answered: $answer3 <br>";
    echo "Correct answer: 8 <br><br>";

    echo "Question 4: What element does 'O' represent in the periodic table?<br>";
    echo "You answered: $answer4 <br>";
    echo "Correct answer: Oxygen <br><br>";

    echo "Question 5: What is the capital of Canada?<br>";
    echo "You answered: $answer5 <br>";
    echo "Correct answer: Ottawa <br><br>";

  //calculate score
    if($answer1 == "Blue") { $total++; }
    if($answer2 == "4") { $total++; }
    if($answer3 == "8") { $total++; }
    if($answer4 == "Oxygen") { $total++; }
    if($answer5 == "Ottawa") { $total++; }
  //convert score to a percent
    if($total == 0){$result = "0%";}
    else if($total == 1) { $result = "20%"; }
    else if($total == 2) { $result = "40%"; }
    else if($total == 3) { $result = "60%"; }
    else if($total == 4) { $result = "80%"; }
    else if($total == 5) { $result = "100%"; }

    echo "Results: $total correct: $result ";
?>
