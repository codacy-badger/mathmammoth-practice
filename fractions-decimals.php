<!DOCTYPE html>
<html lang="en-US">
  <head>
    <?php include 'header-head.php'; ?>
    <script src="sweetalert.min.js"></script>
    <link rel="stylesheet" href="practice.css" />
    <title>Fractions &amp; Decimals Matching Game &mdash; Online Practice (5th, 6th, and 7th grade)</title>
    <style>
      .flex-container {
        width: 800px;
        max-width: 100%;
        margin: auto;
        height: 530px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url("images2/1.jpg");
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
        font-size: 2.4rem;
        display: flex;
        transition: all 0.2s;
        justify-content: center;
        align-items: center;
        background-color: #bbb;
        font-family: cursive;
      }
      .item.selected {
        border: 1px solid rgb(0, 0, 0) !important;
        background-color: rgb(170, 168, 168) !important;
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
    <meta property="og:title" content="Fractions & Decimals Matching Game">
    <meta property="og:description" content="Practice converting fractions to decimals while also uncovering a hidden picture in this fun matching game!">
    <meta property="og:image" content="https://www.mathmammoth.com/practice/fractions-matching.jpg">
    <meta property="og:image:secure_url" content="https://www.mathmammoth.com/practice/fractions-matching.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="747" />
    <meta property="og:image:height" content="502" />
    <meta property="og:image:alt" content="Fractions & Decimals Matching Game" />
    <meta property="og:url" content="https://www.mathmammoth.com/practice/fractions-decimals">
    <meta property="og:site_name" content="Math Mammoth Practice">
    <meta property="og:locale" content="en_US" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image:alt" content="Fractions & Decimals Matching Game">
  </head>

  <body>
    <?php $page = 'fractions-decimals'; include 'header.php'; ?>
    <div class="container">
      <div class="jumbotron" id="form" style="background-color: #a5eaff">
        <div class="titledesc text-center">
          <h1 class="text-center">
            Fractions &amp; Decimals Matching Game<br>
            <span style="font-size: 1.5rem">Online practice for 4th-7th grade</span>
          </h1>
          <div class="sharethis-inline-share-buttons"></div>
          <div class="row">
            <div class="col-md-6">
              <p>
                Practice converting fractions to decimals while also uncovering a hidden picture in this fun matching game!
              </p>
              <p>
                You can choose from three different difficulty levels and from three different grid sizes (which determines the number of
                tiles to be matched). For fourth grade, I recommend the easy level, for fifth, the medium level, and for sixth and seventh
                grades the hard level.
              </p>
              <p>Here are some quick links to get you started with a particular grade:</p>
              <p><a href="javascript:location.href='/practice/fractions-decimals#level=easy&gridSize=18';location.reload();">4th grade (Easy level)</a></p>
              <p><a href="javascript:location.href='/practice/fractions-decimals#level=medium&gridSize=18';location.reload();">5th grade (Medium level)</a></p>
              <p><a href="javascript:location.href='/practice/fractions-decimals#level=hard&gridSize=18';location.reload();">6th and 7th grades (Hard level)</a></p>
            </div>
            <div class="col-md-6">
              <p>
                Screenshot:<br />
                <img src="fractions-matching.jpg" class="rounded-lg screenshot" alt="Screenshot of someone doing a round">
              </p>
            </div>
          </div>
        </div>
        <section class="go">
          <div class="form-group">
            <label for="gridSize" class="font-weight-bold mr-4">Number of tiles:</label>
            <div id="gridSize" class="d-inline-block">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" checked name="gridSize" id="grid12" value="12" class="custom-control-input">
                <label for="grid12" class="custom-control-label">12</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="gridSize" id="grid18" value="18" class="custom-control-input" checked>
                <label for="grid18" class="custom-control-label">18</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="gridSize" id="grid24" value="24" class="custom-control-input">
                <label for="grid24" class="custom-control-label">24</label>
              </div>
            </div>
          </div>
          <div class="form-group mb-5">
            <label for="level" class="font-weight-bold mr-4">Level:</label>
            <div id="level" class="d-inline-block">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" checked name="level" id="levelEasy" checked value="easy" class="custom-control-input">
                <label for="levelEasy" class="custom-control-label">Easy</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="level" id="levelMedium" value="medium" class="custom-control-input">
                <label for="levelMedium" class="custom-control-label">Medium</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="level" id="levelHard" value="hard" class="custom-control-input">
                <label for="levelHard" class="custom-control-label">Hard</label>
              </div>
            </div>
          </div>
          <button class="btn btn-primary go-btn mt-3">Go!</button>
        </section>
        <section class="game">
          <div class="question"></div>
          <div class="flex-container">
            <div class="flex"></div>
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
          <button class="btn btn-primary done-btn" onclick="location.assign('/practice/fractions-matching');">Play Again</button>
        </section>
      </div>
    </div>
    <?php include 'footer.php'; ?>
    <script>
      /////////////////////////////////////// START POLYFILLS //////////////////////////////////////////
      // https://tc39.github.io/ecma262/#sec-array.prototype.findindex
      if (!Array.prototype.findIndex) {
        Object.defineProperty(Array.prototype, 'findIndex', {
          value: function(predicate) {
          // 1. Let O be ? ToObject(this value).
            if (this == null) {
              throw new TypeError('"this" is null or not defined');
            }

            var o = Object(this);

            // 2. Let len be ? ToLength(? Get(O, "length")).
            var len = o.length >>> 0;

            // 3. If IsCallable(predicate) is false, throw a TypeError exception.
            if (typeof predicate !== 'function') {
              throw new TypeError('predicate must be a function');
            }

            // 4. If thisArg was supplied, let T be thisArg; else let T be undefined.
            var thisArg = arguments[1];

            // 5. Let k be 0.
            var k = 0;

            // 6. Repeat, while k < len
            while (k < len) {
              // a. Let Pk be ! ToString(k).
              // b. Let kValue be ? Get(O, Pk).
              // c. Let testResult be ToBoolean(? Call(predicate, T, « kValue, k, O »)).
              // d. If testResult is true, return k.
              var kValue = o[k];
              if (predicate.call(thisArg, kValue, k, o)) {
                return k;
              }
              // e. Increase k by 1.
              k++;
            }

            // 7. Return -1.
            return -1;
          },
          configurable: true,
          writable: true
        });
      }
      /////////////////////////////////////// END POLYFILLS //////////////////////////////////////////

      // <quick-links>
      var params = new URLSearchParams(location.hash.replace('#', ''));
      if (params.has('level')) {
        $('[name="level"][value="' + params.get('level') + '"]').prop('checked', true);
      }
      if (params.has('tiles')) {
        $('[name="gridSize"][value="' + params.get('tiles') + '"]').prop('checked', true);
      }
      // </quick-links>

      var numImages = 34;
      var questioni;
      var indexes;
      var questions = [];
      var vals = {};
      var gridSize;
      var numPairs;
      var userChoice;
      var matched = [];
      var did = 0;

      function generatePairs(denominators, level) {
        vals[level] = {};
        for (var i = 0; i <= numPairs + 2; i++) {
          var denominator = denominators[Math.floor(Math.random() * denominators.length)];
          var numerator = Math.floor(Math.random() * (denominator - 1)) + 1;
          while (Object.keys(vals[level]).indexOf(numerator / denominator) > -1) {
            denominator = denominators[Math.floor(Math.random() * denominators.length)];
            numerator = Math.floor(Math.random() * (denominator - 1)) + 1;
          }
          vals[level][numerator / denominator] = [numerator, denominator];
        }
        // if (level == 'medium') {
        //   let numerator = Math.floor(Math.random() * 4) + 1;
        //   vals.medium[numerator / 5] = [numerator, 5];
        //   numerator = Math.floor(Math.random() * 9) + 1;
        //   vals.medium[numerator / 10] = [numerator, 10];
        // }
      }

      function rand(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
      }
      document.querySelector('.go-btn').addEventListener('click', function() {
        $('[name="level"]').each(function(_, el) {
          if (el.checked) userChoice = el.value;
        });
        $('[name="gridSize"]').each(function(_, el) {
          if (el.checked) gridSize = +el.value;
        });
        numPairs = gridSize / 2;
        for (let i = 0; i < gridSize / 3; i++) {
          var itemBox = document.createElement('div');
          itemBox.className = 'item-box';
          for (var j = 0; j < 3; j++) {
            var item = document.createElement('div');
            item.className = 'item';
            itemBox.appendChild(item);
          }
          document.querySelector('.flex').appendChild(itemBox);
        }
        var items = document.querySelectorAll(".item");
        for (var i = 0; i < items.length; i++) {
          items[i].addEventListener("click", function() {
            var item = this;
            if (item.gotit) return;
            matched.push(item.question);
            item.className = 'item selected';
            if (matched.length >= 2) {
              for (var j = 0; j < items.length; j++) {
                items[j].className = 'item';
              }
              var secondItem = matched[0].el;
              if (matched[0].matchesTo == item.questionI) {
                item.style.backgroundColor = "lightgreen";
                secondItem.style.backgroundColor = "lightgreen";
                did += 2;
                playSound('correct');
                setTimeout(function() {
                  item.style.opacity = 0;
                  item.style.border = "none";
                  item.gotit = true;
                  secondItem.style.opacity = 0;
                  secondItem.style.border = "none";
                  secondItem.gotit = true;
                  newQuestion();
                }, 200);
              } else {
                item.style.backgroundColor = "salmon";
                secondItem.style.backgroundColor = "salmon";
                playSound('wrong');
                setTimeout(function() {
                  item.style.backgroundColor = "#bbb";
                  secondItem.style.backgroundColor = "#bbb";
                }, 200);
              }
              matched = [];
            }
          });
        }
        document.querySelector('.go').style.display = 'none';
        document.querySelector('.titledesc').style.display = 'none';
        document.querySelector('.game').style.display = 'block';
        setupRound();
      });
      function setupRound() {
        if (userChoice == 'easy') {
          vals.easy = {
            0.25: [1, 4],
            0.4: [2, 5],
            0.2: [1, 5],
            0.1: [1, 10],
            0.6: [3, 5],
            0.7: [7, 10],
            0.8: [4, 5],
            0.9: [9, 10],
            0.3: [3, 10],
            0.5: [1, 2],
            0.75: [3, 4],
            0: [0, 2]
          };
        } else if (userChoice == 'medium') {
          generatePairs([20, 25, 50, 100], 'medium');
        } else {
          generatePairs([1000, 500, 8, 200, 100, 40, 50, 250, 125], 'hard');
        }
        vals[userChoice] = Object.keys(vals[userChoice]).slice(0, numPairs).reduce(function(acc, item) {
          acc[item] = vals[userChoice][item];
          return acc;
        }, {});
        questions = Object.keys(vals[userChoice]).reduce(
          (acc, item) =>
            acc.concat(
              { val: item, matchesTo: vals[userChoice][item].join("/") },
              { val: vals[userChoice][item].join("/"), matchesTo: item }
            ),
          []
        );
        questions.sort(function() {
          return .5 - Math.random();
        });
        questions = questions.map(function(item) {
          return {
            val: item.val,
            matchesTo: questions.findIndex(function(q) {
              return q.val == item.matchesTo;
            })
          }; 
        });
        did = 0;
        indexes = Array.from({length: gridSize}, function(_, i) {
          return i;
        });
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
        document.querySelector('.flex-container').style.backgroundImage = 'url(images2/' + (Math.floor(Math.random() * numImages) + 1) + '.jpg)';
        newQuestion();
      }
      function buildFlexItems() {
        var items = document.querySelectorAll('.flex-container .item');
        for (var i = 0; i < items.length; i++) {
          items[i].textContent = questions[i].val;
          items[i].question = questions[i];
          items[i].questionI = i;
          questions[i].el = items[i];
        }
      }
      function newQuestion() {
        if (did >= questions.length) {
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
        buildFlexItems();
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
