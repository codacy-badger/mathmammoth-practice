<!DOCTYPE html>
<html lang="en-US">
  <head>
    <?php include 'header-head.php'; ?>
    <script src="sweetalert.min.js"></script>
    <link rel="stylesheet" href="practice.css" />
    <title>Integer addition &amp; subtraction mystery picture game &mdash; Online Practice (6th, 7th, 8th, and 9th grade)</title>
    <style>
      .flex-container {
        width: 800px;
        max-width: 100%;
        margin: auto;
        height: 530px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url("images/1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
      }
      @media (max-width: 530px) {
        .flex-container {
          height: 350px;
        }
      }
      @media (max-width: 450px) {
        .flex-container {
          height: 300px;
        }
      }
      @media (max-width: 350px) {
        .flex-container {
          height: 270px;
        }
      }
      .flex {
        display: flex;
        flex-flow: column nowrap;
        width: 100%;
        height: 100%;
      }
      .item-box {
        display: flex;
        flex-flow: row nowrap;
        flex: 1;
      }
      .item {
        border: 1px solid #999;
        flex: 1;
        font-size: 2.8rem;
        display: flex;
        transition: all 0.2s;
        justify-content: center;
        align-items: center;
        background-color: #bbb;
        font-family: cursive;
      }
      .game {
        display: none;
        margin: auto;
        text-align: center;
      }
      .go-btn,
      .done-btn {
        transform: scale(2);
      }
      section.go {
        text-align: center;
        margin: auto;
      }
      .question {
        font-size: 3rem;
        text-align: center;
        margin-bottom: 10px;
        font-weight: bold;
      }
      .swal-button--done {
        background-color: salmon;
      }

      .swal-button--done:hover {
        background-color: red !important;
      }

      .swal-button--admire {
        background-color: #72dc72;
      }

      .swal-button--admire:hover {
        background-color: #0fc80f !important;
      }
      .gen-share-btn {
        text-decoration: none !important;
        margin: 10px;
      }
    </style>
    <meta property="og:title" content="Integer addition & subtraction mystery picture game">
    <meta property="og:description" content="Solve integer addition and subtraction problems while uncovering a hidden picture in this fun game for middle school math!">
    <meta property="og:image" content="https://www.mathmammoth.com/practice/mystery-picture-integers.jpg">
    <meta property="og:image:secure_url" content="https://www.mathmammoth.com/practice/mystery-picture-integers.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1026" />
    <meta property="og:image:height" content="720" />
    <meta property="og:image:alt" content="Integer addition & subtraction mystery picture game" />
    <meta property="og:url" content="https://www.mathmammoth.com/practice/mystery-picture-integers">
    <meta property="og:site_name" content="Math Mammoth Practice">
    <meta property="og:locale" content="en_US" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image:alt" content="Integer addition & subtraction mystery picture game">
  </head>

  <body>
    <?php $page = 'mystery-picture-integers'; include 'header.php'; ?>
    <div class="container">
      <div class="jumbotron" id="form" style="background-color: #a5eaff">
        <div class="titledesc text-center">
          <h1 class="text-center">
            Integer addition &amp; subtraction mystery picture game<br>
            <span style="font-size: 1.5rem">Online practice for 6th-9th grade</span>
          </h1>
          <div class="sharethis-inline-share-buttons"></div>
          <div class="row">
            <div class="col-md-6">
              <p class="mb-3 text-center">Solve integer addition and subtraction problems while uncovering a hidden picture in this fun game for middle school math!</p>
              <p class="mb-3 text-center">You can choose the range of numbers to be used in the addition and subtraction problems, which means you can make the practice easy or difficult according to your need and grade level.</p>
              <p class="mb-3 text-center">For example, choose a range from −10 to 10 for students that have just recently learned about integer addition and subtraction (6th and 7th grades). For a little more advanced practice, use −20 to 20, and for advanced level, −50 to 50.</p>
              <section class="go p-3 mb-5 shadow-lg" style="border-radius: 15px; box-shadow: 0 1rem 3rem rgba(0,0,0,.4) !important; background-color: #8cff90">
                <label for="rand-range" class="text-center d-block font-weight-bold">Range for numbers to be subtracted:</label>
                <div id="rand-range" class="text-center mb-5">
                  <div class="form-group form-inline d-inline-block">
                    <label for="min" class="d-inline">Min:</label>
                    <input type="number" id="min" class="form-control" value="-10">
                  </div><br />
                  <div class="form-group form-inline d-inline-block">
                    <label for="max" class="d-inline">Max:</label>
                    <input type="number" id="max" value="10" class="form-control">
                  </div>
                </div>
                <button class="btn btn-primary go-btn mb-5">Go!</button>
              </section>
            </div>
            <div class="col-md-6">
              <p>
                Screenshot:<br />
                <img src="mystery-picture-integers.jpg" class="rounded-lg screenshot" alt="Screenshot of someone doing a round">
              </p>
            </div>
          </div>
        </div>
        <aside class="text-center">
          <p class="mb-3 text-center">Here are some quick links to get you started with a particular grade:</p>
          <p><a href="javascript:location.href='/practice/mystery-picture-integers#min=-10&max=10';location.reload();">Easy (Min: -10, Max: 10)</a></p>
          <p><a href="javascript:location.href='/practice/mystery-picture-integers#min=-20&max=20';location.reload();">Medium (Min: -20, Max: 20)</a></p>
          <p><a href="javascript:location.href='/practice/mystery-picture-integers#min=-50&max=50';location.reload();">Challenge (Min: -50, Max: 50)</a></p>
          <p>
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".modal">Generate Quick Link for Specific Options</button>
          </p>
        </aside>
        <section class="game">
          <div class="question"></div>
          <div class="flex-container">
            <div class="flex">
              <div class="item-box">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
              </div>
              <div class="item-box">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
              </div>
              <div class="item-box">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
              </div>
              <div class="item-box">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
              </div>
            </div>
          </div>
          <audio src="Correct-answer.mp3" class="correct"></audio>
          <audio src="fail-buzzer-edited.mp3" class="wrong"></audio>
          <p style="margin-top: 20px">
            "Correct" sound credit:
            <a href="http://www.orangefreesounds.com/"
              >http://www.orangefreesounds.com</a
            >
          </p>
          <p>
            Licensed under
            <a
              target="_blank"
              rel="license"
              href="http://creativecommons.org/licenses/by/4.0/"
              >Creative Commons Attribution 4.0 International License</a
            >
          </p>
        </section>
        <section class="done" style="display: none; text-align: center; margin: auto">
          <button class="btn btn-primary done-btn" onclick="location.assign('/practice/mystery-picture');">Play Again</button>
        </section>
      </div>
    </div>
    <div class="modal fade" id="link-gen" tabindex="-1" role="dialog" aria-labelledby="gen-link-label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="gen-link-label">Generate Quick Link</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="gen-range" class="font-weight-bold">Range of numbers to be subtracted:</label>
            <div id="gen-range">
              <div class="form-group form-inline d-inline-block">
                <label for="gen-min" class="d-inline">Min:</label>
                <input type="number" id="gen-min" class="form-control" value="-10">
              </div><br />
              <div class="form-group form-inline d-inline-block">
                <label for="gen-max" class="d-inline">Max:</label>
                <input type="number" id="gen-max" value="10" class="form-control">
              </div>
            </div>
            <div class="gen-link"></div>
            <div class="gen-share"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success gen-link-btn">Generate Link</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
    <script>
      // <quick-links>
      var params = new URLSearchParams(location.hash.replace('#', ''));
      if (Number.isInteger(parseInt(params.get('min')))) {
        $('#min').val(params.get('min'));
      }
      if (Number.isInteger(parseInt(params.get('max')))) {
        $('#max').val(params.get('max'));
      }
      // </quick-links>
      var numImages = 44;
      var questioni;
      var indexes;
      var questions = [];
      function rand(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
      }
      document.querySelector('.go-btn').addEventListener('click', function() {
        var min = parseFloat(document.querySelector('#min').value);
        var max = parseFloat(document.querySelector('#max').value);
        if (max - min < 12) {
          return swal({
            title: 'The options you chose will not work',
            text: 'The difference between max and min has to be at least 12. Please change the minimum and/or maximum.',
            icon: 'warning'
          });
        }
        for (var i = 0; i < 12; i++) {
          var w = rand(0, 1);
          var rand1 = rand(min, max);
          var rand2 = rand(min, max);
          while (questions.map(function(item) { 
            return item[1]; 
          }).indexOf(w ? (rand1 + rand2) : (rand1 - rand2)) > -1) {
            rand1 = rand(min, max);
            rand2 = rand(min, max);
          }
          var question = [rand1 + (w ? ' + ' : ' - ') + (rand2 < 0 ? '(' + rand2 + ')' : rand2), w ? (rand1 + rand2) : (rand1 - rand2)];
          questions.push(question);
        }
        questions.sort(function() {
          return .5 - Math.random();
        });
        document.querySelector('.go').style.display = 'none';
        document.querySelector('.titledesc').style.display = 'none';
        document.querySelector('aside').style.display = 'none';
        document.querySelector('.game').style.display = 'block';
        setupRound();
      });
      function setupRound() {
        indexes = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
        indexes.sort(function() {
          return .5 - Math.random();
        });
        var items = document.querySelectorAll('.item');
        for (var i = 0; i < items.length; i++) {
          items[i].style.opacity = 1;
          items[i].style.border = '1px solid #999';
          items[i].style.backgroundColor = '#bbb';
          items[i].gotit = false;
        }
        document.querySelector('.flex-container').style.backgroundImage = 'url(images/' + (Math.floor(Math.random() * numImages) + 1) + '.jpg)';
        newQuestion();
      }
      function buildFlexItems() {
        var items = document.querySelectorAll('.flex-container .item');
        for (var i = 0; i < items.length; i++) {
          if (items[i].hasAttribute('data-correct')) items[i].removeAttribute('data-correct');
          if (i == questioni) items[i].setAttribute('data-correct', 'correct');
          items[i].textContent = questions[i][1];
        }
      }
      function newQuestion() {
        if (indexes.length == 0) {
          setTimeout(function() {
            swal({
              title: "Round finished!",
              text: "Congratulations, you uncovered the picture! Do you want to continue with another one?",
              icon: "success",
              buttons: {
                done: 'I\'m done!',
                admire: 'Let me see the picture a little longer!',
                continue: 'Let\'s continue!'
              },
              closeOnClickOutside: false,
              closeOnEsc: false
            }).then(function(val) {
              if (val == 'admire') {
                newQuestion();
              }
              if (val == 'continue') {
                setupRound();
              }
              if (val == 'done') {
                document.querySelector('.game').style.display = 'none';
                document.querySelector('section.done').style.display = 'block';
              }
            });
          }, 3000);
          return;
        }
        questioni = indexes.pop();
        var question = questions[questioni];
        document.querySelector('.question').textContent = question[0];
        buildFlexItems();
      }
      var items = document.querySelectorAll(".item");
      for (var i = 0; i < items.length; i++) {
        items[i].addEventListener("click", function() {
          var item = this;
          if (item.gotit) return;
          if (item.getAttribute("data-correct") !== null) {
            item.style.backgroundColor = "lightgreen";
            playSound('correct');
            setTimeout(function() {
              item.style.opacity = 0;
              item.style.border = "none";
              item.gotit = true;
              newQuestion();
            }, 200);
          } else {
            item.style.backgroundColor = "salmon";
            playSound('wrong');
            setTimeout(function() {
              item.style.backgroundColor = "#bbb";
            }, 200);
          }
        });
      }

      function playSound(which) {
        var audio = document.querySelector("audio." + which);
        var otherAudio = document.querySelector(
          "audio." + (which == "correct" ? "wrong" : "correct")
        );
        if (!audio.paused) audio.pause();
        if (!otherAudio.paused) otherAudio.pause();
        audio.currentTime = 0;
        audio.play();
      }
      if (location.hash.replace('#', '').length >= 1) {
        $('.go-btn').click();
      }

      $('.gen-link-btn').click(function() {
        var link = 'https://www.mathmammoth.com/practice/mystery-picture-subtraction#min=' + $('#gen-min').val() + '&max=' + $('#gen-max').val();
        var encoded = encodeURIComponent(link);
        var smsChar = '?';
        var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
        if (iOS) {
          var v = parseInt((navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/)[1], 10);
          if (v < 8) {
            smsChar = ';';
          } else {
            smsChar = '&';
          }
        }
        var shareHTML = "<a class=\"gen-share-btn\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=".concat(encoded, "&display=popup&src=share_button\" title=\"Facebook\">\n  <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"\n\t width=\"40px\" height=\"40px\" viewBox=\"0 0 266.893 266.895\" enable-background=\"new 0 0 266.893 266.895\"\n\t xml:space=\"preserve\">\n    <path id=\"Blue_1_\" fill=\"#3C5A99\" d=\"M248.082,262.307c7.854,0,14.223-6.369,14.223-14.225V18.812\n      c0-7.857-6.368-14.224-14.223-14.224H18.812c-7.857,0-14.224,6.367-14.224,14.224v229.27c0,7.855,6.366,14.225,14.224,14.225\n      H248.082z\"/>\n    <path id=\"f\" fill=\"#FFFFFF\" d=\"M182.409,262.307v-99.803h33.499l5.016-38.895h-38.515V98.777c0-11.261,3.127-18.935,19.275-18.935\n      l20.596-0.009V45.045c-3.562-0.474-15.788-1.533-30.012-1.533c-29.695,0-50.025,18.126-50.025,51.413v28.684h-33.585v38.895h33.585\n      v99.803H182.409z\"/>\n  </svg>\n</a>\n<a class=\"gen-share-btn\" target=\"_blank\" href=\"https://twitter.com/intent/tweet?text=").concat(encoded, "\" title=\"Twitter\">\n  <svg xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 300.00006 244.18703\" height=\"40\" width=\"40\" version=\"1.1\" xmlns:cc=\"http://creativecommons.org/ns#\" xmlns:dc=\"http://purl.org/dc/elements/1.1/\">\n     <g style=\"\" transform=\"translate(-539.18 -568.86)\">\n       <path d=\"m633.9 812.04c112.46 0 173.96-93.168 173.96-173.96 0-2.6463-0.0539-5.2806-0.1726-7.903 11.938-8.6302 22.314-19.4 30.498-31.66-10.955 4.8694-22.744 8.1474-35.111 9.6255 12.623-7.5693 22.314-19.543 26.886-33.817-11.813 7.0031-24.895 12.093-38.824 14.841-11.157-11.884-27.041-19.317-44.629-19.317-33.764 0-61.144 27.381-61.144 61.132 0 4.7978 0.5364 9.4646 1.5854 13.941-50.815-2.5569-95.874-26.886-126.03-63.88-5.2508 9.0354-8.2785 19.531-8.2785 30.73 0 21.212 10.794 39.938 27.208 50.893-10.031-0.30992-19.454-3.0635-27.69-7.6468-0.009 0.25652-0.009 0.50661-0.009 0.78077 0 29.61 21.075 54.332 49.051 59.934-5.1376 1.4006-10.543 2.1516-16.122 2.1516-3.9336 0-7.766-0.38716-11.491-1.1026 7.7838 24.293 30.355 41.971 57.115 42.465-20.926 16.402-47.287 26.171-75.937 26.171-4.929 0-9.7983-0.28036-14.584-0.84634 27.059 17.344 59.189 27.464 93.722 27.464\" fill=\"#1da1f2\"/>\n     </g>\n  </svg>\n</a>\n<a class=\"gen-share-btn\" target=\"_blank\" href=\"http://www.tumblr.com/share/link?url=").concat(encoded, "\" title=\"Tumblr\">\n  <svg viewbox=\"0 0 512 512\" preserveAspectRatio=\"xMidYMid meet\" width=\"40\" height=\"40\">\n    <path d=\"M210.8 80.3c-2.3 18.3-6.4 33.4-12.4 45.2 -6 11.9-13.9 22-23.9 30.5 -9.9 8.5-21.8 14.9-35.7 19.5v50.6h38.9v124.5c0 16.2 1.7 28.6 5.1 37.1 3.4 8.5 9.5 16.6 18.3 24.2 8.8 7.6 19.4 13.4 31.9 17.5 12.5 4.1 26.8 6.1 43 6.1 14.3 0 27.6-1.4 39.9-4.3 12.3-2.9 26-7.9 41.2-15v-55.9c-17.8 11.7-35.7 17.5-53.7 17.5 -10.1 0-19.1-2.4-27-7.1 -5.9-3.5-10-8.2-12.2-14 -2.2-5.8-3.3-19.1-3.3-39.7v-91.1H345.5v-55.8h-84.4v-90H210.8z\" fill=\"#32506d\"></path>\n  </svg>\n</a>\n<a class=\"gen-share-btn\" target=\"_blank\" href=\"sms:").concat(smsChar, "body=").concat(encoded, "\" id=\"sms\" title=\"SMS\">\n  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\"><path fill=\"none\" d=\"M0 0h24v24H0V0z\"/><path d=\"M22 2H2v20l4-4h16V2zM9 11H7V9h2v2zm4 0h-2V9h2v2zm4 0h-2V9h2v2z\" fill=\"#009688\" /></svg>\n</a>\n<a class=\"gen-share-btn\" target=\"_blank\" href=\"https://wa.me/?text=").concat(encoded, "\" title=\"WhatsApp\">\n  <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" width=\"40\" height=\"40\"><path d=\"M260.062 32C138.605 32 40.134 129.701 40.134 250.232c0 41.23 11.532 79.79 31.559 112.687L32 480l121.764-38.682c31.508 17.285 67.745 27.146 106.298 27.146C381.535 468.464 480 370.749 480 250.232 480 129.701 381.535 32 260.062 32zm109.362 301.11c-5.174 12.827-28.574 24.533-38.899 25.072-10.314.547-10.608 7.994-66.84-16.434-56.225-24.434-90.052-83.844-92.719-87.67-2.669-3.812-21.78-31.047-20.749-58.455 1.038-27.413 16.047-40.346 21.404-45.725 5.351-5.387 11.486-6.352 15.232-6.413 4.428-.072 7.296-.132 10.573-.011 3.274.124 8.192-.685 12.45 10.639 4.256 11.323 14.443 39.153 15.746 41.989 1.302 2.839 2.108 6.126.102 9.771-2.012 3.653-3.042 5.935-5.961 9.083-2.935 3.148-6.174 7.042-8.792 9.449-2.92 2.665-5.97 5.572-2.9 11.269 3.068 5.693 13.653 24.356 29.779 39.736 20.725 19.771 38.598 26.329 44.098 29.317 5.515 3.004 8.806 2.67 12.226-.929 3.404-3.599 14.639-15.746 18.596-21.169 3.955-5.438 7.661-4.373 12.742-2.329 5.078 2.052 32.157 16.556 37.673 19.551 5.51 2.989 9.193 4.529 10.51 6.9 1.317 2.38.901 13.531-4.271 26.359z\" fill=\"#00e676\" /></svg>\n</a>\n<a class=\"gen-share-btn\" href=\"mailto:?body=").concat(encoded, "\" title=\"Email\">\n  <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" width=\"40\" height=\"40\"><path d=\"M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z\" fill=\"#666\" /></svg>\n</a>");
        $('.gen-link').html("<a href='" + link + "' target='_blank'>" + link + "</a>");
        $('.gen-share').html(shareHTML);
      });
    </script>
  </body>
</html>
