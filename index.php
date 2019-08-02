<!DOCTYPE html>
<html lang="en-US">

<head>
  <?php include 'header-head.php'; ?>
  <meta name="description" content="This area of MathMammoth.com focuses on providing online practice of various math topics. Choose a topic from the list below or from the main menu. Topics include Mulitplication Tables, Exponents, Basic Division Facts, and much more.">
  <title>Ad-free Online Practice for Math Topics (grades 1-5)</title>
  <style>
    @media screen and (max-width: 750px) {
      .testimonial-img {
        float: initial !important;
        width: 70% !important;
        margin-top: 5px;
        margin-bottom: 10px;
      }
      .test-text {
        width: 100% !important;
      }
    }
  </style>
  <script src="lazyload.min.js"></script>
</head>

<body>
  <?php
  $page = 'home';
  include 'header.php';
  ?>
  <div class="container">
    <div class="jumbotron" style="background-color: #60cfff">
      <h1 class="text-center">Math Mammoth Online Practice 💻</h1>
      <div class="addthis_inline_share_toolbox"></div>
      <p>This area of MathMammoth.com focuses on providing online practice of various math topics. Choose a topic from the list below or from the main menu. 😉</p>
      <p>
        These free, online practice programs can also be installed offline as an app in your phone or tablet, depending on your browser and operating system. To install it, click on the "Add to home screen" button at the bottom of the page. On Android Chrome, click on the three dots, and then "Add to home screen". 📱 If you don't see the button or the "Add to home screen" option, then you probably cannot install this app in your browser. 🙁
      </p>
      <p>
        <span id="not-supported">
          <span style="color: red; font-weight: bold">Note:</span>
          Your browser does not have the capability for using these programs offline. Use a different browser to get the offline capability.
        </span>
      </p>
      <ul class="list-group">
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/multiplication">
          Multiplication Tables
        </a>
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/multiplication">
          Multiplication Matching Game 
        </a>
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/multiply-with-zeros">
          Multiply with Zeros
        </a>
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/exponents">
          Exponents
        </a>
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/divide-numbers-ending-in-zeros">
          Divide Numbers Ending in Zeros
        </a>
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/division">
          Basic Division Facts
        </a>
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/division-remainder">
          Division With Remainders (Mental Math)
        </a>
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/factorfind">
          Find the Factors
        </a>
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/addition-single-digit">
          Single-Digit Addition &amp; Subtraction
        </a>
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/addition-subtraction-two-digit">
          Two-Digit Addition &amp; Subtraction (Mental Math)
        </a>
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/fact-families">
          Addition &amp; Subtraction Fact Families
        </a>
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/place-value">
          Place Value
        </a>
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/mystery-picture">
          Addition Hidden Picture Game
        </a>
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/mystery-picture-subtraction">
          Subtraction Hidden Picture Game
        </a>
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/mystery-picture-integers">
          Integers Hidden Picture Game
        </a>
        <a class="list-group-item list-group-item-action" role="listitem" href="/practice/rounding">
          Rounding
        </a>
        <a href="/practice/fractions-decimals" class="list-group-item list-group-item-action" role="listitem">
          Fractions &amp; Decimals
        </a>
        <a href="/practice/angles-matching" class="list-group-item list-group-item-action" role="listitem">
          Angles and Their Measures Matching Game
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
    </div>
  </div>
  <script>
    if ('serviceWorker' in navigator && 'caches' in window) {
      $('#not-supported').hide();
    }
    lazyload();
  </script>
  <?php include 'footer.php'; ?>
</body>

</html>
