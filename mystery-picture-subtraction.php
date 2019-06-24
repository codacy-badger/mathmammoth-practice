<!DOCTYPE html>
<html lang="en-US">
  <head>
    <?php include 'header-head.php'; ?>
    <script src="sweetalert.min.js"></script>
    <link rel="stylesheet" href="practice.css" />
    <title>Subtraction Hidden Picture Game &mdash; Online Practice (1st, 2nd, 3rd, and 4th grade)</title>
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
    </style>
    <meta property="og:title" content="Subtraction Hidden Picture Game">
    <meta property="og:description" content="Solve simple subtraction problems while uncovering a hidden picture in this fun game that children really like!">
    <meta property="og:image" content="https://www.mathmammoth.com/practice/mystery-picture.jpg">
    <meta property="og:image:secure_url" content="https://www.mathmammoth.com/practice/mystery-picture.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1026" />
    <meta property="og:image:height" content="720" />
    <meta property="og:image:alt" content="Subtraction Mystery Picture Game" />
    <meta property="og:url" content="https://www.mathmammoth.com/practice/mystery-picture">
    <meta property="og:site_name" content="Math Mammoth Practice">
    <meta property="og:locale" content="en_US" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image:alt" content="Subtraction Mystery Picture Game">
  </head>

  <body>
    <?php
    $page = 'mystery-picture-sub';
    include 'header.php';
    ?>
    <div class="container">
      <div class="jumbotron" id="form" style="background-color: #a5eaff">
        <div class="titledesc text-center">
          <h1 class="text-center">
            Subtraction Hidden Picture Game<br>
            <span style="font-size: 1.5rem">Online practice for 1st-4th grade</span>
          </h1>
          <div class="sharethis-inline-share-buttons"></div>
          <div class="row">
            <div class="col-md-6">
              <p class="mb-3 text-center">
                Solve simple subtraction problems while uncovering a hidden picture in this fun game that children really like!
              </p>
              <p>
                You can choose the range of numbers to be used in the addition problems, which means
                the game can fit many grade levels. For first graders, you might choose the range 0-11. For second grade, try 0-20 or 0-30. For third grade, choose 0-50 for example.
                You can even use this game with middle school students to practice  integer addition: simply choose a number range that involves negative numbers, such as from -10 to 10.
              </p>
              <p>Here are some quick links to get you started with a particular grade:</p>
              <p><a href="javascript:location.href='/practice/mystery-picture-subtraction#min=0&max=11';location.reload();">1st grade (Min: 0, Max: 11)</a></p>
              <p><a href="javascript:location.href='/practice/mystery-picture-subtraction#min=2';location.reload();">2nd grade (Min: 2, Max: 20)</a></p>
              <p><a href="javascript:location.href='/practice/mystery-picture-subtraction#min=2&max=100';location.reload();">3rd grade (Min: 2, Max: 100)</a></p>
              <p><a href="javascript:location.href='/practice/mystery-picture-subtraction#min=2&max=200';location.reload();">4th grade (Min: 2, Max: 200)</a></p>
            </div>
            <div class="col-md-6">
              <p>
                Screenshot:<br />
                <img src="mystery-picture-sub.png" class="shadow-lg rounded-lg" alt="Screenshot of someone doing a round" style="width: 700px; max-width: 100%">
              </p>
            </div>
          </div>
        </div>
        <section class="go">
          <label for="rand-range" class="text-center d-block font-weight-bold">Range for numbers to be subtracted:</label>
          <div id="rand-range" class="text-center mb-5">
            <div class="form-group form-inline d-inline-block">
              <label for="min" class="d-inline">Min:</label>
              <input type="number" id="min" class="form-control" value="9">
            </div><br />
            <div class="form-group form-inline d-inline-block">
              <label for="max" class="d-inline">Max:</label>
              <input type="number" id="max" value="20" class="form-control">
            </div>
          </div>
          <button class="btn btn-primary go-btn mt-3">Go!</button>
        </section>
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
          <button class="btn btn-primary done-btn" onclick="location.assign('/practice/mystery-picture-subtraction');">Play Again</button>
        </section>
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
        if (max - min < 11) {
          return swal({
            title: 'The options you chose will not work',
            text: 'The difference between max and min has to be at least 6. Please change the minimum and/or maximum.',
            icon: 'warning'
          });
        }
        for (var i = 0; i < 12; i++) {
          var rand1 = rand(min, max);
          var rand2 = rand(min, max);
          while (questions.map(function(item) { return item[1]; }).indexOf(rand1 - rand2) > -1 || rand1 - rand2 < 0) {
            rand1 = rand(min, max);
            rand2 = rand(min, max);
          }
          var question = [rand1 + ' &minus; ' + (rand2 < 0 ? '(' + rand2 + ')' : rand2), rand1 - rand2];
          questions.push(question);
        }
        questions.sort(function() {
          return .5 - Math.random();
        });
        document.querySelector('.go').style.display = 'none';
        document.querySelector('.titledesc').style.display = 'none';
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
          items[i].innerHTML = questions[i][1];
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
        document.querySelector('.question').innerHTML = question[0];
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
    </script>
  </body>
</html>