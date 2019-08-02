<div class="w-100 bg-warning px-4 py-2" id="addHomeScreen" style="display: none">
  With our free app you can do the math practice offline, and open this page with a click of a button. 
  <button class="btn btn-primary" title="Install app?" onclick="deferredPrompt.prompt(); document.getElementById('addHomeScreen').style.display = 'none'">Install</button> 
  <button onclick="document.getElementById('addHomeScreen').style.display = 'none'" class="btn btn-danger">Not right now</a>
</div>
<nav class="navbar navbar-expand-xl navbar-dark" style="z-index: 1000; background-color: #712be2">
  <a class="navbar-brand" href="https://www.mathmammoth.com/practice/"><img src="favicon.ico" alt="MM icon" style="width: 40px; height: 40px" class="rounded mr-2">MM Practice Center</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle<?php 
        echo (
          $page == 'multiplication' ||
          $page == 'multiply-with-zeros' ||
          $page == 'exponents' ||
          $page == 'match-multiply'
            ? ' active'
            : ''
        ); ?>" href="javascript:void(0);">Multiplication</a>
        <div class="dropdown-menu" style="margin-top: -1px">
          <a href="/practice/multiplication" class="dropdown-item<?php echo $page == 'multiplication' ? ' active' : ''; ?>">Multiplication Tables</a>
          <a href="/practice/multiplication-matching" class="dropdown-item<?php echo $page == 'match-multiply' ? ' active' : ''; ?>">Multiplication Matching Game</a>
          <a href="/practice/multiply-with-zeros" class="dropdown-item<?php echo $page == 'multiply-with-zeros' ? ' active' : ''; ?>">With Zeros</a>
          <a href="/practice/exponents" class="dropdown-item<?php echo $page == 'exponents' ? ' active' : ''; ?>">Exponents</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle<?php 
        echo (
          $page == 'division' ||
          $page == 'division-remainders' ||
          $page == 'divide-numbers-ending-in-zeros' ||
          $page == 'findfactors'
            ? ' active'
            : ''
        ); ?>" href="javascript:void(0);">Division</a>
        <div class="dropdown-menu" style="margin-top: -1px">
          <a href="/practice/division" class="dropdown-item<?php echo $page == 'division' ? ' active' : ''; ?>">Division Facts</a>
          <a href="/practice/division-remainder" class="dropdown-item<?php echo $page == 'division-remainders' ? ' active' : ''; ?>">With Remainders</a>
          <a href="/practice/divide-numbers-ending-in-zeros" class="dropdown-item<?php echo $page == 'divide-numbers-ending-in-zeros' ? ' active' : ''; ?>">Divide Whole Numbers Ending in Zeros</a>
          <a class="dropdown-item<?php echo $page == 'findfactors' ? ' active' : ''; ?>" href="/practice/factorfind">Find Factors</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle<?php 
          echo (
            $page == 'addition-single-digit' ||
            $page == 'factfam-addsub' ||
            $page == 'addition-two-digit' ||
            $page == 'place-value' ||
            $page == 'mystery-picture' ||
            $page == 'mystery-picture-sub' ||
            $page == 'mystery-picture-integers'
              ? ' active'
              : ''
          ); ?>"
          href="javascript:void(0);">Add &amp; Subtract</a>
        <div class="dropdown-menu" style="margin-top: -1px">
          <a href="/practice/addition-single-digit" class="dropdown-item<?php echo $page == 'addition-single-digit' ? ' active' : ''; ?>">Single-Digit</a>
          <a href="/practice/addition-subtraction-two-digit" class="dropdown-item<?php echo $page == 'addition-two-digit' ? ' active' : ''; ?>">Two-Digit (Mental Math)</a>
          <a href="/practice/fact-families" class="dropdown-item<?php echo $page == 'factfam-addsub' ? ' active' : ''; ?>">Fact Families</a>
          <a href="/practice/mystery-picture" class="dropdown-item<?php echo $page == 'mystery-picture' ? ' active' : ''; ?>">Addition Hidden Picture Game</a>
          <a href="/practice/mystery-picture-subtraction" class="dropdown-item<?php echo $page == 'mystery-picture-sub' ? ' active' : ''; ?>">Subtraction Hidden Picture Game</a>
          <a href="/practice/mystery-picture-integers" class="dropdown-item<?php echo $page == 'mystery-picture-integers' ? ' active' : ''; ?>">Integers Hidden Picture Game</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle<?php echo $page == 'fractions-decimals' || $page == 'place-value' ? ' active' : ''; ?>"
          href="javascript:void(0);">Place Value</a>
        <div class="dropdown-menu" style="margin-top: -1px">
          <a href="/practice/rounding" class="dropdown-item<?php echo $page == 'rounding' ? ' active' : ''; ?>">Rounding</a>
          <a href="/practice/place-value" class="dropdown-item<?php echo $page == 'place-value' ? ' active' : ''; ?>">Place Value</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="/practice/fractions-decimals" class="nav-link<?php echo $page == 'fractions-decimals' ? ' active ' : ''; ?>">Fractions &amp; Decimals</a>
      </li>
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle<?php echo $page == 'elapsed-time' || $page == 'angles-matching' ? ' active' : ''; ?>"
          href="javascript:void(0);">Measurement</a>
        <div class="dropdown-menu" style="margin-top: -1px">
          <a href="/practice/angles-matching" class="dropdown-item<?php echo $page == 'angles-matching' ? ' active ' : ''; ?>">Angles</a>
          <a href="/practice/clocks" class="dropdown-item<?php echo $page == 'elapsed-time' ? ' active ' : ''; ?>">Elapsed Time</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div style="margin-top: 50px"></div>
<noscript>
  We're sorry, but our website requires JavaScript to run.
</noscript>
<!--[if lte IE 9 ]>
  <p class="text-center">We're sorry, but we don't support IE versions 9 or lower. Please either upgrade your browser, or <a href="https://www.google.com/chrome/">get a new one</a>.</p>
<![endif]-->
<?php if (isset($_GET['rating'])) {
  $email = $_GET['email'];
  $rating = $_GET['rating'];
  $feedback = $_GET['feedback'];
  $send = true;
  if (isset($_GET['g-recaptcha-response'])) {
    $captcha = $_GET['g-recaptcha-response'];
  }
  $message = '';
  if (!$captcha) {
    $message = '<h2>Please check the captcha form.</h2>';
    $send = false;
  }
  $secretKey = '6LfiqI8UAAAAANT180ToHnW0VhyuB2gTMAnf7zmR';
  $ip = $_SERVER['REMOTE_ADDR'];
  $response = file_get_contents(
    'https://www.google.com/recaptcha/api/siteverify?secret=' .
      $secretKey .
      '&response=' .
      $captcha .
      '&remoteip=' .
      $ip
  );
  $responseKeys = json_decode($response, true);
  if ($message !== '<h2>Please check the captcha.</h2>') {
    if (!intval($responseKeys['success'])) {
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
  if ($send) {
    mail(
      'maria_miller@mathmammoth.com',
      'Math Mammoth Practice Feedback - Rating: ' . $rating,
      $a,
      'From: ' . (trim($email) ? 'maria_miller@mathmammoth.com' : trim($email))
    );
  }

  echo '<br><div class="container"><div class="jumbotron text-black" style="background-color: #8cfc88">' .
    $message .
    '</div></div><br>';
}
?>
