<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="manifest" href="https://www.mathmammoth.com/practice/manifest.json">
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
  <meta name="description" content="This area of MathMammoth.com focuses on providing online practice of various math topics. Choose a topic from the list below or from the main menu. Topics include Mulitplication Tables, Exponents, Basic Division Facts, and much more.">
  <title>Ad-free Online Practice for Math Topics (grades 1-5)</title>
  <style>
    @media screen and (max-width: 750px) {
      .testimonial-img {
        float: initial!important;
        width: 70%!important;
        margin-top: 5px;
        margin-bottom: 10px;
      }
      .test-text {
        width: 100%!important;
      }
    }
  </style>
  <script src="lazyload.min.js"></script>
</head>

<body>
  <?php $page = 'home'; include 'header.php'; ?>
  <div class="container">
    <div class="jumbotron" style="background-color: #a5eaff">
      <h1 class="text-center">Math Mammoth Online Practice</h1>
      <p>This area of MathMammoth.com focuses on providing online practice of various math topics. Choose a topic from the list below or from the main menu.</p>
      <p>These scripts or programs should also work <u>offline</u> (except in IE / Opera Mini / Blackberry Browser). <span id="not-supported"><span style="color:red; font-weight:bold">Note:</span> Your browser does not have the capability for using these programs offline. Use a different browser to get the offline capability.</span></p>

        <ul class="list-group">
          <a class="list-group-item list-group-item-action" role="listitem" href="multiplication.php">
            Multiplication Tables
          </a>
          <a class="list-group-item list-group-item-action" role="listitem" href="multiply-with-zeros.php">
            Multiply with Zeros
          </a>
          <a class="list-group-item list-group-item-action" role="listitem" href="exponents.php">
            Exponents
          </a>
          <a class="list-group-item list-group-item-action" role="listitem" href="divide-numbers-ending-in-zeros.php">
            Divide Numbers Ending in Zeros
          </a>
          <a class="list-group-item list-group-item-action" role="listitem" href="division.php">
            Basic Division Facts
          </a>
          <a class="list-group-item list-group-item-action" role="listitem" href="division-remainder.php">
            Division With Remainders (Mental Math)
          </a>
          <a class="list-group-item list-group-item-action" role="listitem" href="factorfind.php">
            Find the Factors
          </a>
          <a class="list-group-item list-group-item-action" role="listitem" href="addition-single-digit.php">
            Single-Digit Addition & Subtraction
          </a>
          <a class="list-group-item list-group-item-action" role="listitem" href="addition-subtraction-two-digit.php">
            Two-Digit Addition & Subtraction (Mental Math)
          </a>
          <a class="list-group-item list-group-item-action" role="listitem" href="fact-families.php">
            Addition &amp; Subtraction Fact Families
          </a>
        </ul>
        <div class="card mt-3 clearfix" style="margin: auto; background-color: #FFFF78; border-radius: 5px; padding: 30px">
          <div class="card-body">
            <p class="card-text font-italic">
              Dear Mrs. Miller,
              <p class="font-italic">
                My daughter loves the new online practice site. Using mom's computer is always a fun treat, 
                so she was thrilled to get to practice math facts on it. Please give our thanks to your son! 
                My daughter says, &ldquo;Thank you so much!&rdquo;
              </p>
              <img 
                data-src="girl_online_practice.jpg" 
                style="width: 25%" 
                class="testimonial-img rounded float-right" 
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                onload="lzld(this)"
                alt="A girl practicing math problems online">
              <div class="float-left test-text font-italic" style="width: 70%">
                We have loved Math Mammoth for the past 6 years. 
                I've taught high school math since before I had children, using Foerster's and Jacobs' 
                books in both private schools and homeschool co-ops. When parents with younger children 
                ask what I recommend, I tell them about the great experiences my children have had and how 
                well my oldest was prepared for Algebra. I've even recommended it for remediation for 
                students I tutor who never grasped integers or percents. <br>
                Thank you for such a great program!
                <br><br>
                In Christ,<br>
                Jennifer Drury
              </div>
            </p>
          </div>
        </div>
      </p>
    </div>
  </div>
  <script>
    if('serviceWorker' in navigator && 'caches' in window) {
      $('#not-supported').hide();
    }
    lazyload();
  </script>
  <?php include 'footer.php'; ?>
</body>

</html>
