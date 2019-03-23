<style>
  .nav-item.dropdown:hover .dropdown-menu {
    display: block;
  }
</style>
<nav class="navbar navbar-expand-md navbar-dark bg-primary mb-3">
  <a class="navbar-brand" href="https://www.mathmammoth.com"><img src="favicon.ico" alt="MM icon" style="width: 40px; height: 40px" class="rounded mr-2">Math Mammoth</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link<?php echo $page == 'home' ? ' active' : ''; ?>" href="index.php">Practice Center</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle<?php echo $page == 'multiplication' || $page == 'multiply-with-zeros' ? ' active' : ''; ?>" href="javascript:void(0);">Multiplication</a>
        <div class="dropdown-menu" style="margin-top: -1px">
          <a href="multiplication.php" class="dropdown-item<?php echo $page == 'multiplication' ? ' active' : ''; ?>">Multiplication Tables</a>
          <a href="multiply-with-zeros.php" class="dropdown-item<?php echo $page == 'multiply-with-zeros' ? ' active' : ''; ?>">With Zeros</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle<?php echo $page == 'division' || $page == 'division-remainders' || $page == 'divide-numbers-ending-in-zeros' ? ' active' : ''; ?>" href="javascript:void(0);">Division</a>
        <div class="dropdown-menu" style="margin-top: -1px">
          <a href="division.php" class="dropdown-item<?php echo $page == 'division' ? ' active' : ''; ?>">Division Facts</a>
          <a href="division-remainder.php" class="dropdown-item<?php echo $page == 'division-remainders' ? ' active' : ''; ?>">With Remainders</a>
          <a href="divide-numbers-ending-in-zeros.php" class="dropdown-item<?php echo $page == 'divide-numbers-ending-in-zeros' ? ' active' : ''; ?>">Divide Whole Numbers Ending in Zeros</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link<?php echo $page == 'findfactors' ? ' active' : ''; ?>" href="factorfind.php">Find Factors</a>
      </li>
      <li class="nav-item dropdown">
        <a 
          class="nav-link dropdown-toggle<?php echo $page == 'addition-single-digit' || $page == 'factfam-addsub' || $page == 'addition-two-digit' ? ' active' : ''; ?>" 
          href="javascript:void(0);">Add & Subtract</a>
        <div class="dropdown-menu" style="margin-top: -1px">
          <a href="addition-single-digit.php" class="dropdown-item<?php echo $page == 'addition-single-digit' ? ' active' : ''; ?>">Single-Digit</a>
          <a href="addition-subtraction-two-digit.php" class="dropdown-item<?php echo $page == 'addition-two-digit' ? ' active' : ''; ?>">Two-Digit (Mental Math)</a>
          <a href="fact-families.php" class="dropdown-item<?php echo $page == 'factfam-addsub' ? ' active' : ''; ?>">Fact Families</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<?php
if(isset($_GET['rating'])) {
  $email = $_GET['email'];
  $rating = $_GET['rating'];
  $feedback = $_GET['feedback'];
  $send = true;
  if(isset($_GET['g-recaptcha-response'])){
    $captcha = $_GET['g-recaptcha-response'];
  }
  $message = '';
  if(!$captcha){
    $message = '<h2>Please check the captcha form.</h2>';
    $send = false;
  }
  $secretKey = "6LfiqI8UAAAAANT180ToHnW0VhyuB2gTMAnf7zmR";
  $ip = $_SERVER['REMOTE_ADDR'];
  $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha . "&remoteip=" . $ip);
  $responseKeys = json_decode($response,true);
  if($message !== '<h2>Please check the captcha.</h2>') {
    if(!intval($responseKeys["success"])) {
      $message = 'You didn\'t pass the captcha.';
      $send = false;
    } else {
      $message = 'Thanks for posting your feedback.';
    }
  }
  $a = "
  Page: $page
  Rating: $rating
  Feedback: $feedback

  IP: $ip
  ";
  if ($send) mail('maria_miller@mathmammoth.com', 'Math Mammoth Practice Feedback - Rating: ' . $rating, $a,'From: ' . (trim($email) ? 'maria_miller@mathmammoth.com' : trim($email)));
  echo '<br><div class="container"><div class="jumbotron text-black" style="background-color: #8cfc88">' . $message . '</div></div><br>';
}
?>
