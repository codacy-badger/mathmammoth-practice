<?php
$page = $_POST['page'];
$date = $_POST['date'];
$results = json_decode($_POST['results']);
$email = $_POST['email'];
$resultsFormatted = '';
$correct = 0;
$wrong = 0;

foreach ($results as $result) {
  $result->isCorrect ? $correct++ : $wrong++;
  $correctAns = $result->correctAnswer;
  $studentAns = $result->studentAnswered;
  $isCorrect = $result->isCorrect ? 'Correct' : 'Wrong';
  $question = $result->question;
  $before = $page == 'Find the Factors' ? 'Find the factors of ' : '';
  $catext = ($isCorrect == 'Wrong') ? "Correct answer: $correctAns." : '';
  $resultsFormatted .= "$before$question = $studentAns. $isCorrect. $catext\n";
}

$correctPer = round(($correct / ($correct + $wrong)) * 100);
$wrongPer = round(($wrong / ($correct + $wrong)) * 100);

$a = "
Student Results for $page on $date:

$resultsFormatted
Correct: $correct ($correctPer%)
Wrong: $wrong ($wrongPer%)
";

if (!function_exists('http_response_code')) {
  function http_response_code($newcode = NULL) {
    static $code = 200;
    if($newcode !== NULL) {
      header('X-PHP-Response-Code: '.$newcode, true, $newcode);
      if(!headers_sent()) $code = $newcode;
    }
    return $code;
  }
}

if(mail($email, 'Student results for ' . $page, $a, 'From: maria_miller@mathmammoth.com')) {
  echo 'Sent';
  http_response_code(200);
} else {
  echo 'Failed to send';
  http_response_code(404);
}
?>
