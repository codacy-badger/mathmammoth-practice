<!DOCTYPE html>
<html lang="en-US">
  <head>
    <?php include 'header-head.php'; ?>
    <script src="sweetalert.min.js"></script>
    <link rel="stylesheet" href="practice.css" />
    <title>Multiplication Matching Game &mdash; Online Practice (3rd, 4th, and 5th grade)</title>
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

      .gen-share-btn {
        text-decoration: none !important;
        margin: 10px;
      }
    </style>
    <meta property="og:title" content="Multiplication Matching Game" />
    <meta
      property="og:description"
      content="Practice the multiplication tables while also uncovering a hidden picture in this fun matching game!"
    />
    <meta property="og:image" content="https://www.mathmammoth.com/practice/match-multiply.png" />
    <meta property="og:image:secure_url" content="https://www.mathmammoth.com/practice/match-multiply.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="801" />
    <meta property="og:image:height" content="528" />
    <meta property="og:image:alt" content="Multiplication Matching Game" />
    <meta property="og:url" content="https://www.mathmammoth.com/practice/multiplication-matching" />
    <meta property="og:site_name" content="Math Mammoth Practice" />
    <meta property="og:locale" content="en_US" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:alt" content="Multiplication Matching Game" />
  </head>

  <body>
    <?php $page = 'match-multiply'; include 'header.php'; ?>
    <div class="container">
      <div class="jumbotron" id="form" style="background-color: #a5eaff">
        <div class="titledesc text-center">
          <h1 class="text-center">
            Multiplication Matching Game<br />
            <span style="font-size: 1.5rem">Online practice for 3rd-5th grade</span>
          </h1>
          <div class="addthis_inline_share_toolbox"></div>
          <div class="row">
            <div class="col-md-6">
              <p>
                Practice the multiplication tables while also uncovering a hidden picture in this fun matching game!
              </p>
              <p>
                You can practice any single times table (such as multiplication by 9), or several tables (such as tables of 2 and 5), 
                or all of them. You can also choose the number of tiles (12, 18, 24), and thereby make the game easier or harder.
              </p>
              <p>
                Have fun! 😎
              </p>
              <section
                class="go p-3 mb-5 shadow-lg"
                style="border-radius: 15px; box-shadow: 0 1rem 3rem rgba(0,0,0,.4) !important; background-color: #8cff90"
              >
                <label style="font-weight: 500">
                  Tables: &nbsp;
                </label>
                <div class="btn-group btn-group-sm">
                  <button
                    class="btn btn-primary"
                    onclick="$('.go .tc input').prop('checked', true); $('#submit').prop('disabled', false);"
                  >
                    Check All
                  </button>
                  <button
                    class="btn btn-primary"
                    onclick="$('.go .tc.in12 input').prop('checked', true); $('#submit').prop('disabled', false);"
                  >
                    Check Tables 1-12
                  </button>
                  <button
                    class="btn btn-primary"
                    onclick="$('.go .tc input').prop('checked', false); $('#submit').prop('disabled', true);"
                  >
                    Uncheck All
                  </button>
                </div>
                <div id="tables" class="multiplication">
                  <div class="tc custom-control custom-checkbox custom-control-inline in12">
                    <input type="checkbox" class="custom-control-input" id="m1" />
                    &nbsp;<label class="custom-control-label" for="m1">Table of 1</label>
                  </div>
                  <div class="tc custom-control custom-checkbox custom-control-inline in12">
                    <input type="checkbox" class="custom-control-input" id="m2" />
                    &nbsp;<label class="custom-control-label" for="m2">Table of 2</label>
                  </div>
                  <div class="tc custom-control custom-checkbox custom-control-inline in12">
                    <input type="checkbox" class="custom-control-input" id="m3" />
                    &nbsp;<label class="custom-control-label" for="m3">Table of 3</label>
                  </div>
                  <div class="tc custom-control custom-checkbox custom-control-inline in12">
                    <input type="checkbox" class="custom-control-input" id="m4" />
                    &nbsp;<label class="custom-control-label" for="m4">Table of 4</label>
                  </div>
                  <div class="tc custom-control custom-checkbox custom-control-inline in12">
                    <input type="checkbox" class="custom-control-input" id="m5" />
                    &nbsp;<label class="custom-control-label" for="m5">Table of 5</label>
                  </div>
                  <div class="tc custom-control custom-checkbox custom-control-inline in12">
                    <input type="checkbox" class="custom-control-input" id="m6" />
                    &nbsp;<label class="custom-control-label" for="m6">Table of 6</label>
                  </div>
                  <div class="tc custom-control custom-checkbox custom-control-inline in12">
                    <input type="checkbox" class="custom-control-input" id="m7" />
                    &nbsp;<label class="custom-control-label" for="m7">Table of 7</label>
                  </div>
                  <div class="tc custom-control custom-checkbox custom-control-inline in12">
                    <input type="checkbox" class="custom-control-input" id="m8" />
                    &nbsp;<label class="custom-control-label" for="m8">Table of 8</label>
                  </div>
                  <div class="tc custom-control custom-checkbox custom-control-inline in12">
                    <input type="checkbox" class="custom-control-input" id="m9" />
                    &nbsp;<label class="custom-control-label" for="m9">Table of 9</label>
                  </div>
                  <div class="tc custom-control custom-checkbox custom-control-inline in12">
                    <input type="checkbox" class="custom-control-input" id="m10" />
                    &nbsp;<label class="custom-control-label" for="m10">Table of 10</label>
                  </div>
                  <div class="tc custom-control custom-checkbox custom-control-inline in12">
                    <input type="checkbox" class="custom-control-input" id="m11" />
                    &nbsp;<label class="custom-control-label" for="m11">Table of 11</label>
                  </div>
                  <div class="tc custom-control custom-checkbox custom-control-inline in12">
                    <input type="checkbox" class="custom-control-input" id="m12" />
                    &nbsp;<label class="custom-control-label" for="m12">Table of 12</label>
                  </div>
                  <div class="tc custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="m13" />
                    &nbsp;<label class="custom-control-label" for="m13">Table of 13</label>
                  </div>
                  <div class="tc custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="m14" />
                    &nbsp;<label class="custom-control-label" for="m14">Table of 14</label>
                  </div>
                  <div class="tc custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="m15" />
                    &nbsp;<label class="custom-control-label" for="m15">Table of 15</label>
                  </div>
                </div><br />
                <div class="form-group">
                  <label for="tile-num">Number of tiles:</label>
                  <select id="tile-num" name="gridSize" class="custom-select">
                    <option value="12">12</option>
                    <option value="18">18</option>
                    <option value="24">24</option>
                  </select>
                </div>
                <button class="btn btn-primary go-btn mb-5 mt-4">Go!</button>
              </section>
            </div>
            <div class="col-md-6">
              <p>
                Screenshot:<br />
                <img src="match-multiply.png" class="rounded-lg screenshot" alt="Screenshot of someone doing a round" />
              </p>
            </div>
          </div>
        </div>
        <aside class="text-center">
          <p>
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".modal">Generate Quick Link for Specific Options</button>
          </p>
        </aside>
        <section class="game">
          <div class="question"></div>
          <div class="flex-container">
            <div class="flex"></div>
          </div>
          <audio src="Correct-answer.mp3" class="correct"></audio>
          <audio src="fail-buzzer-edited.mp3" class="wrong"></audio>
          <p style="margin-top: 20px">
            "Correct" sound credit:
            <a href="http://www.orangefreesounds.com/">http://www.orangefreesounds.com</a>
          </p>
          <p>
            Licensed under
            <a target="_blank" rel="license" href="http://creativecommons.org/licenses/by/4.0/"
              >Creative Commons Attribution 4.0 International License</a
            >
          </p>
        </section>
        <section class="done" style="display: none; text-align: center; margin: auto">
          <button class="btn btn-primary done-btn" onclick="location.assign('/practice/fractions-matching');">
            Play Again
          </button>
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
            <div class="form-group" id="gen-tables">
              <div class="tc custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="mg1" />
                &nbsp;<label class="custom-control-label" for="mg1">Table of 1</label>
              </div>
              <div class="tc custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="mg2" />
                &nbsp;<label class="custom-control-label" for="mg2">Table of 2</label>
              </div>
              <div class="tc custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="mg3" />
                &nbsp;<label class="custom-control-label" for="mg3">Table of 3</label>
              </div>
              <div class="tc custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="mg4" />
                &nbsp;<label class="custom-control-label" for="mg4">Table of 4</label>
              </div>
              <div class="tc custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="mg5" />
                &nbsp;<label class="custom-control-label" for="mg5">Table of 5</label>
              </div>
              <div class="tc custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="mg6" />
                &nbsp;<label class="custom-control-label" for="mg6">Table of 6</label>
              </div>
              <div class="tc custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="mg7" />
                &nbsp;<label class="custom-control-label" for="mg7">Table of 7</label>
              </div>
              <div class="tc custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="mg8" />
                &nbsp;<label class="custom-control-label" for="mg8">Table of 8</label>
              </div>
              <div class="tc custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="mg9" />
                &nbsp;<label class="custom-control-label" for="mg9">Table of 9</label>
              </div>
              <div class="tc custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="mg10" />
                &nbsp;<label class="custom-control-label" for="mg10">Table of 10</label>
              </div>
              <div class="tc custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="mg11" />
                &nbsp;<label class="custom-control-label" for="mg11">Table of 11</label>
              </div>
              <div class="tc custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="mg12" />
                &nbsp;<label class="custom-control-label" for="mg12">Table of 12</label>
              </div>
              <div class="tc custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="mg13" />
                &nbsp;<label class="custom-control-label" for="mg13">Table of 13</label>
              </div>
              <div class="tc custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="mg14" />
                &nbsp;<label class="custom-control-label" for="mg14">Table of 14</label>
              </div>
              <div class="tc custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="mg15" />
                &nbsp;<label class="custom-control-label" for="mg15">Table of 15</label>
              </div>
            </div>
            <div class="form-group">
              <label for="gen-tiles">Number of tiles:</label>
              <select id="gen-tiles" class="custom-select">
                <option value="12">12</option>
                <option value="18">18</option>
                <option value="24">24</option>
              </select>
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
      /////////////////////////////////////// START POLYFILLS //////////////////////////////////////////
      // https://tc39.github.io/ecma262/#sec-array.prototype.findindex
      if (!Array.prototype.findIndex) {
        Object.defineProperty(Array.prototype, "findIndex", {
          value: function(predicate) {
            // 1. Let O be ? ToObject(this value).
            if (this == null) {
              throw new TypeError('"this" is null or not defined');
            }

            var o = Object(this);

            // 2. Let len be ? ToLength(? Get(O, "length")).
            var len = o.length >>> 0;

            // 3. If IsCallable(predicate) is false, throw a TypeError exception.
            if (typeof predicate !== "function") {
              throw new TypeError("predicate must be a function");
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
      if (params.has('tiles')) {
        var tils = params.get('tiles');
        if (['12', '18', '24'].indexOf(tils) > -1) {
          $('[name="gridSize"]').val(tils);
        }
      }
      // tables quick link down there 👇
      // </quick-links>


      var numImages = 34;
      var questioni;
      var indexes;
      var questions = [];
      var tables = [];
      var gridSize;
      var numPairs;
      var vals = {};
      var userChoice;
      var matched = [];
      var did = 0;

      function generatePairs() {
        vals = {};
        for (var i = 0; i <= numPairs + 20; i++) {
          var num1 = tables[Math.floor(Math.random() * tables.length)];
          var num2 = rand(1, 12);
          while (Object.keys(vals).indexOf(num1 * num2) > -1) {
            num1 = tables[Math.floor(Math.random() * tables.length)];
            num2 = rand(1, 12);
          }
          vals[num1 * num2] = [num2, num1];
        }
      }

      function rand(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
      }
      document.querySelector(".go-btn").addEventListener("click", function() {
        tables = ((params.get('tables') || '').split(',').map(Number).concat(Array.prototype.slice.call(document.querySelectorAll('.go .tc input')).filter(x => x.checked).map(x => +x.getAttribute('id').slice(1)))).filter(x => x >= 1);
        gridSize = +$('[name="gridSize"]').val();
        numPairs = gridSize / 2;
        for (let i = 0; i < gridSize / 3; i++) {
          var itemBox = document.createElement("div");
          itemBox.className = "item-box";
          for (var j = 0; j < 3; j++) {
            var item = document.createElement("div");
            item.className = "item";
            itemBox.appendChild(item);
          }
          document.querySelector(".flex").appendChild(itemBox);
        }
        var items = document.querySelectorAll(".item");
        for (var i = 0; i < items.length; i++) {
          items[i].addEventListener("click", function() {
            var item = this;
            if (item.gotit) return;
            matched.push(item.question);
            item.className = "item selected";
            if (matched.length >= 2) {
              for (var j = 0; j < items.length; j++) {
                items[j].className = "item";
              }
              var secondItem = matched[0].el;
              if (matched[0].matchesTo == item.questionI) {
                item.style.backgroundColor = "lightgreen";
                secondItem.style.backgroundColor = "lightgreen";
                did += 2;
                playSound("correct");
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
                playSound("wrong");
                setTimeout(function() {
                  item.style.backgroundColor = "#bbb";
                  secondItem.style.backgroundColor = "#bbb";
                }, 200);
              }
              matched = [];
            }
          });
        }
        document.querySelector(".go").style.display = "none";
        document.querySelector(".titledesc").style.display = "none";
        document.querySelector("aside").style.display = "none";
        document.querySelector(".game").style.display = "block";
        setupRound();
      });
      function setupRound() {
        generatePairs();
        vals = Object.keys(vals).slice(0, numPairs).reduce(function(acc, key) {
          acc[key] = vals[key];
          return acc;
        }, {});
        questions = Object.keys(vals).reduce(
          (acc, item) =>
            acc.concat(
              { val: item, matchesTo: vals[item].join(" &times; ") },
              { val: vals[item].join(" &times; "), matchesTo: item }
            ),
          []
        );
        questions.sort(function() {
          return 0.5 - Math.random();
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
        indexes = Array.from({ length: gridSize }, function(_, i) {
          return i;
        });
        indexes.sort(function() {
          return 0.5 - Math.random();
        });
        var items = document.querySelectorAll(".item");
        for (var i = 0; i < items.length; i++) {
          items[i].style.opacity = 1;
          items[i].style.border = "1px solid #999";
          items[i].style.backgroundColor = "#bbb";
          items[i].gotit = false;
        }
        document.querySelector(".flex-container").style.backgroundImage =
          "url(images2/" + (Math.floor(Math.random() * numImages) + 1) + ".jpg)";
        newQuestion();
      }
      function buildFlexItems() {
        var items = document.querySelectorAll(".flex-container .item");
        for (var i = 0; i < items.length; i++) {
          items[i].innerHTML = questions[i].val;
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
                done: "I'm done!",
                admire: "Let me see the picture a little longer!",
                continue: "Let's continue!"
              },
              closeOnClickOutside: false,
              closeOnEsc: false
            }).then(function(val) {
              if (val == "admire") {
                newQuestion();
              }
              if (val == "continue") {
                setupRound();
              }
              if (val == "done") {
                document.querySelector(".game").style.display = "none";
                document.querySelector("section.done").style.display = "block";
              }
            });
          }, 3000);
          return;
        }
        buildFlexItems();
      }

      function playSound(which) {
        var audio = document.querySelector("audio." + which);
        var otherAudio = document.querySelector("audio." + (which == "correct" ? "wrong" : "correct"));
        if (!audio.paused) audio.pause();
        if (!otherAudio.paused) otherAudio.pause();
        audio.currentTime = 0;
        audio.play();
      }
      if (location.hash.replace("#", "").length >= 1) {
        $(".go-btn").click();
      }
      function getRadioValue(name) {
        var res;
        $(name).each(function(_, el) {
          if (el.checked) res = el.value;
        });
        return res;
      }
      $(".gen-link-btn").click(function() {
        var link =
          "https://www.mathmammoth.com/practice/multiplication-matching#tables=" +
          Array.prototype.slice.call(document.querySelectorAll('#gen-tables .tc input')).filter(x => x.checked).map(x => x.getAttribute('id').slice(2)) +
          "&tiles=" +
          $("#gen-tiles").val();
        var encoded = encodeURIComponent(link);
        var smsChar = "?";
        var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
        if (iOS) {
          var v = parseInt(navigator.appVersion.match(/OS (\d+)_(\d+)_?(\d+)?/)[1], 10);
          if (v < 8) {
            smsChar = ";";
          } else {
            smsChar = "&";
          }
        }
        var shareHTML = '<a class="gen-share-btn" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='
          .concat(
            encoded,
            '&display=popup&src=share_button" title="Facebook">\n  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n\t width="40px" height="40px" viewBox="0 0 266.893 266.895" enable-background="new 0 0 266.893 266.895"\n\t xml:space="preserve">\n    <path id="Blue_1_" fill="#3C5A99" d="M248.082,262.307c7.854,0,14.223-6.369,14.223-14.225V18.812\n      c0-7.857-6.368-14.224-14.223-14.224H18.812c-7.857,0-14.224,6.367-14.224,14.224v229.27c0,7.855,6.366,14.225,14.224,14.225\n      H248.082z"/>\n    <path id="f" fill="#FFFFFF" d="M182.409,262.307v-99.803h33.499l5.016-38.895h-38.515V98.777c0-11.261,3.127-18.935,19.275-18.935\n      l20.596-0.009V45.045c-3.562-0.474-15.788-1.533-30.012-1.533c-29.695,0-50.025,18.126-50.025,51.413v28.684h-33.585v38.895h33.585\n      v99.803H182.409z"/>\n  </svg>\n</a>\n<a class="gen-share-btn" target="_blank" href="https://twitter.com/intent/tweet?text='
          )
          .concat(
            encoded,
            '" title="Twitter">\n  <svg xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300.00006 244.18703" height="40" width="40" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/">\n     <g style="" transform="translate(-539.18 -568.86)">\n       <path d="m633.9 812.04c112.46 0 173.96-93.168 173.96-173.96 0-2.6463-0.0539-5.2806-0.1726-7.903 11.938-8.6302 22.314-19.4 30.498-31.66-10.955 4.8694-22.744 8.1474-35.111 9.6255 12.623-7.5693 22.314-19.543 26.886-33.817-11.813 7.0031-24.895 12.093-38.824 14.841-11.157-11.884-27.041-19.317-44.629-19.317-33.764 0-61.144 27.381-61.144 61.132 0 4.7978 0.5364 9.4646 1.5854 13.941-50.815-2.5569-95.874-26.886-126.03-63.88-5.2508 9.0354-8.2785 19.531-8.2785 30.73 0 21.212 10.794 39.938 27.208 50.893-10.031-0.30992-19.454-3.0635-27.69-7.6468-0.009 0.25652-0.009 0.50661-0.009 0.78077 0 29.61 21.075 54.332 49.051 59.934-5.1376 1.4006-10.543 2.1516-16.122 2.1516-3.9336 0-7.766-0.38716-11.491-1.1026 7.7838 24.293 30.355 41.971 57.115 42.465-20.926 16.402-47.287 26.171-75.937 26.171-4.929 0-9.7983-0.28036-14.584-0.84634 27.059 17.344 59.189 27.464 93.722 27.464" fill="#1da1f2"/>\n     </g>\n  </svg>\n</a>\n<a class="gen-share-btn" target="_blank" href="http://www.tumblr.com/share/link?url='
          )
          .concat(
            encoded,
            '" title="Tumblr">\n  <svg viewbox="0 0 512 512" preserveAspectRatio="xMidYMid meet" width="40" height="40">\n    <path d="M210.8 80.3c-2.3 18.3-6.4 33.4-12.4 45.2 -6 11.9-13.9 22-23.9 30.5 -9.9 8.5-21.8 14.9-35.7 19.5v50.6h38.9v124.5c0 16.2 1.7 28.6 5.1 37.1 3.4 8.5 9.5 16.6 18.3 24.2 8.8 7.6 19.4 13.4 31.9 17.5 12.5 4.1 26.8 6.1 43 6.1 14.3 0 27.6-1.4 39.9-4.3 12.3-2.9 26-7.9 41.2-15v-55.9c-17.8 11.7-35.7 17.5-53.7 17.5 -10.1 0-19.1-2.4-27-7.1 -5.9-3.5-10-8.2-12.2-14 -2.2-5.8-3.3-19.1-3.3-39.7v-91.1H345.5v-55.8h-84.4v-90H210.8z" fill="#32506d"></path>\n  </svg>\n</a>\n<a class="gen-share-btn" target="_blank" href="sms:'
          )
          .concat(smsChar, "body=")
          .concat(
            encoded,
            '" id="sms" title="SMS">\n  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M22 2H2v20l4-4h16V2zM9 11H7V9h2v2zm4 0h-2V9h2v2zm4 0h-2V9h2v2z" fill="#009688" /></svg>\n</a>\n<a class="gen-share-btn" target="_blank" href="https://wa.me/?text='
          )
          .concat(
            encoded,
            '" title="WhatsApp">\n  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="40" height="40"><path d="M260.062 32C138.605 32 40.134 129.701 40.134 250.232c0 41.23 11.532 79.79 31.559 112.687L32 480l121.764-38.682c31.508 17.285 67.745 27.146 106.298 27.146C381.535 468.464 480 370.749 480 250.232 480 129.701 381.535 32 260.062 32zm109.362 301.11c-5.174 12.827-28.574 24.533-38.899 25.072-10.314.547-10.608 7.994-66.84-16.434-56.225-24.434-90.052-83.844-92.719-87.67-2.669-3.812-21.78-31.047-20.749-58.455 1.038-27.413 16.047-40.346 21.404-45.725 5.351-5.387 11.486-6.352 15.232-6.413 4.428-.072 7.296-.132 10.573-.011 3.274.124 8.192-.685 12.45 10.639 4.256 11.323 14.443 39.153 15.746 41.989 1.302 2.839 2.108 6.126.102 9.771-2.012 3.653-3.042 5.935-5.961 9.083-2.935 3.148-6.174 7.042-8.792 9.449-2.92 2.665-5.97 5.572-2.9 11.269 3.068 5.693 13.653 24.356 29.779 39.736 20.725 19.771 38.598 26.329 44.098 29.317 5.515 3.004 8.806 2.67 12.226-.929 3.404-3.599 14.639-15.746 18.596-21.169 3.955-5.438 7.661-4.373 12.742-2.329 5.078 2.052 32.157 16.556 37.673 19.551 5.51 2.989 9.193 4.529 10.51 6.9 1.317 2.38.901 13.531-4.271 26.359z" fill="#00e676" /></svg>\n</a>\n<a class="gen-share-btn" href="mailto:?body='
          )
          .concat(
            encoded,
            '" title="Email">\n  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="40" height="40"><path d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z" fill="#666" /></svg>\n</a>'
          );
        $(".gen-link").html("<a href='" + link + "' target='_blank'>" + link + "</a>");
        $(".gen-share").html(shareHTML);
      });
    </script>
  </body>
</html>
