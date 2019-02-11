<script src="jquery.rateyo.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-349523-17"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-349523-17');
</script>


<!-- Google Analytics for MathMammoth.com -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-349523-2', 'auto');
  ga('send', 'pageview');

</script>
<!-- Google Analytics ends -->

<link rel="stylesheet" href="jquery.rateyo.min.css">

<br><br>
<div class="container" id="feedback">
  <div class="jumbotron text-black" style="background-color: #8cfc88">
    <?php if(!isset($_POST['rating'])) { ?>
    <form method="POST" id="form" class="container">
      <input type="hidden" name="rating" value="not-rated">
      Your Feedback:<br><br>
      <div class="rating"></div><br>
      <div class="form-group">
        <label for="email">Email Address (optional): </label>
        <input type="email" name="email" id="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="feedback">Feedback:</label>
        <textarea name="feedback" id="feedback" class="form-control" rows="8" cols="80"></textarea>
      </div>
      <div class="g-recaptcha" data-sitekey="6LfiqI8UAAAAAOA-oUXaN7mozlXJIAfXQNfSYaYw"></div><br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
    } else {
      $email = $_POST['email'];
      $rating = $_POST['rating'];
      $feedback = $_POST['feedback'];
      $send = true;
      if(isset($_POST['g-recaptcha-response'])){
        $captcha = $_POST['g-recaptcha-response'];
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
      echo '<div class="container">' . $message . '</div>';
    }
    ?>
  </div>
</div>
<script>
if(!navigator.onLine) {
  $('#feedback').hide();
}
</script>
<div class="w-100 bg-primary text-white px-4 py-2" id="addHomeScreen" style="display: none; position: fixed; bottom: 0; left: 0">


  Add "Math Mammoth Practice" to home screen? <button class="btn btn-success" title='Add "Math Mammoth Practice" to home screen?' onclick="deferredPrompt.prompt(); document.getElementById('addHomeScreen').style.display = 'none'">Add to home screen</button>
</div>
<div class="container-fluid bg-primary text-center text-white mt-3 p-3">
  Copyright &copy; <?php echo date('Y'); ?> <a href="https://www.mathmammoth.com" class="footerlink">MathMammoth.com</a>
</div>
<style>
  .footerlink {
    color: #a5eaff;
  }
  .footerlink:hover {
    color: #8cfc88;
  }
</style>
<script>
  // if (!navigator.onLine) {
  //   $('#form').hide();
  // }
  $('.rating').rateYo({
    halfStar: true,
    onSet: function(rating) {
      console.log(rating);
      $('[name="rating"]').val(rating);
    },
    normalFill: '#bab5b5'
  });
</script>
