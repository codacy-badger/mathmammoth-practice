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
<?php if ($page != '404') { ?>
  <div class="container" id="feedback">
    <?php if (!isset($_GET['rating'])) { ?>
      <div class="jumbotron text-black" style="background-color: #8cfc88">
        <form method="GET" id="form" class="container">
          <input type="hidden" name="rating" value="not-rated">
          Your Feedback:<br><br>
          <div class="rating"></div><br>
          <div class="form-group">
            <label for="email">Email Address (optional, but you can put it here if you would like a response): </label>
            <input type="email" name="email" id="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="feedback">Feedback:</label>
            <textarea name="feedback" id="feedback" class="form-control" rows="8" cols="80" required></textarea>
          </div>
          <div class="g-recaptcha" data-sitekey="6LfiqI8UAAAAAOA-oUXaN7mozlXJIAfXQNfSYaYw"></div><br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    <?php } ?>
  </div>
  <script>
    if (!navigator.onLine) {
      $('#feedback').hide();
    }
    if (navigator.connection) {
      navigator.connection.onchange = function() {
        if (navigator.onLine) {
          $('#feedback').show();
        } else {
          $('#feedback').hide();
        }
      };
    }
  </script>
<?php } ?>
<div class="w-100 bg-primary text-white px-4 py-2" id="addHomeScreen" style="display: none; position: fixed; bottom: 0; left: 0">
  Add "Math Mammoth Practice" to home screen? <button class="btn btn-success" title='Add "Math Mammoth Practice" to home screen?' onclick="deferredPrompt.prompt(); document.getElementById('addHomeScreen').style.display = 'none'">Add to home screen</button>
</div>
<div class="container-fluid bg-primary text-center text-white mt-3 p-3 footer">
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
