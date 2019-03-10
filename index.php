<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="manifest" href="manifest.json">
  <script src="app.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css" />
  <link rel="stylesheet" href="mm.css" />
  <script src="jquery-3.3.1.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="white">
  <meta name="apple-mobile-web-app-title" content="MM Practice">
  <link rel="apple-touch-icon" href="icons/57x57.png" sizes="57x57">
  <link rel="apple-touch-icon" href="icons/60x60.png" sizes="60x60">
  <link rel="apple-touch-icon" href="icons/72x72.png" sizes="72x72">
  <link rel="apple-touch-icon" href="icons/76x76.png" sizes="76x76">
  <link rel="apple-touch-icon" href="icons/114x114.png" sizes="114x114">
  <link rel="apple-touch-icon" href="icons/120x120.png" sizes="120x120">
  <link rel="apple-touch-icon" href="icons/144x144.png" sizes="144x144">
  <link rel="apple-touch-icon" href="icons/152x152.png" sizes="152x152">
  <link rel="apple-touch-icon" href="icons/180x180.png" sizes="180x180">
  <meta name="msapplication-TileImage" content="icons/144x144.png">
  <meta name="msapplication-TileColor" content="#fff">
  <meta name="theme-color" content="#5db0f9">
  <title>Ad-free Online Practice for Math Topics (grades 1-5)</title>
</head>

<body>
  <?php $page = 'home'; include 'header.php'; ?>
  <div class="container">
    <div class="jumbotron" style="background-color: #a5eaff">
      <h1 class="text-center">Math Mammoth Online Practice</h1>
      <p>This area of MathMammoth.com focuses on providing online practice of various math topics. Choose a topic from the list below or from the main menu.</p>
      <p>These scripts or programs should also work <u>offline</u> (except in IE / Opera Mini / Blackberry Browser). <span id="not-supported"><span style="color:red; font-weight:bold">Note:</span> Your browser does not have the capability for using these programs offline. Use a different browser to get the offline capability.</span></p>
      <p><u><b>Note:</b></u> It seems that sometimes it's necessary to RELOAD (refresh) the page a few times to make it look right and to work offline. Also, you may get an error stating that it cannot reach the site. Reloading should fix that, too.</p>

        <ul class="list-group">
          <a class="list-group-item list-group-item-action" href="multiplication.php">
            Multiplication Tables
          </a>
          <a class="list-group-item list-group-item-action" href="division.php">
            Basic Division Facts
          </a>
          <a class="list-group-item list-group-item-action" href="division-remainder.php">
            Division With Remainders (Mental Math)
          </a>
          <a class="list-group-item list-group-item-action" href="factorfind.php">
            Find the Factors
          </a>
          <a class="list-group-item list-group-item-action" href="addition-single-digit.php">
            Single-Digit Addition & Subtraction
          </a>
          <a class="list-group-item list-group-item-action" href="addition-subtraction-two-digit.php">
            Two-Digit Addition & Subtraction (Mental Math)
          </a>
          <a class="list-group-item list-group-item-action" href="fact-families.php">
            Addition &amp; Subtraction Fact Families
          </a>
        </ul>
      </p>
    </div>
  </div>
  <script>
    if('serviceWorker' in navigator && 'caches' in window) {
      $('#not-supported').hide();
    } else {
      $.post('/practice/sendnotoffline.php', {userAgent: navigator.userAgent}, function() { console.log('Success', arguments); });
    }
  </script>
  <?php include 'footer.php'; ?>
</body>

</html>
