<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Quiz Results</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<?php
  # Can we pass this somehow?
  $qanda = array (
    #array(question, ans1, ans2, ans3, ans4, correctans);
    array("How many hours did this lab take?",
          1, 2, 3, 4, 2),
    array("How much money do you make?",
          "$0.00", "$1.00", "$2.00", "More than $2.00", 3),
    array("How much do you like php?",
          "Not at all", "Love it!", "Meh?", "Kill it with fire!", 1),
    array("Isn't this the best quiz ever?",
          "Yes!", "No", "I don't read the questions.", "Bananas", 4),
    array("How much wood?", 
          "Can a woodchuck", "Chuck", "If a woodchuck", "Could chuck", 2)
    );
  # Array of the answered picked.
  $picked = $_POST['question'];
  $total = 0;
  echo '<div class=row>';
  for ($i = 0; $i < 5; $i++) {
    $correct = $qanda[$i][($qanda[$i][5])];
    $answered = $qanda[$i][($picked[$i])];
    $question = $qanda[$i][0];
    echo '<div class="col-7">'.PHP_EOL;
    echo '<div class="card">';
    echo '<div class="card-header bg-primary">';
    echo '<h5>Question '.($i+1).': '.$question.'</h5>';
    echo '</div>';
    echo '<div class="card-body">';
    echo 'You answered: '.$answered.'<br>';
    echo 'Correct answer: '.$correct.'<br>';
    if ($correct == $answered) { $total++; }
    echo '</div>'.PHP_EOL;
    echo '</div>'.PHP_EOL;
    echo '</div>'.PHP_EOL;
  }
  echo '</div>';

  echo '<div class="row">'.PHP_EOL;
  echo '<div class="col-7">'.PHP_EOL;
  echo '<div class="card">';
  echo 'You answered '.$total.' questions correctly!<br>';
  echo 'You got a '.(($total/5)*100).'%.';
  echo '</div>'.PHP_EOL;
  echo '</div>'.PHP_EOL;
  echo '</div>'.PHP_EOL;
?>
</div>
</body>
</html>
