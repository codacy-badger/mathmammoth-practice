<!DOCTYPE html>
<html lang="en-US">
  <head>
    <?php include 'header-head.php'; ?>
    <link rel="stylesheet" href="practice.css" />
    <title>Document</title>
    <style>
      body {
        margin: 0;
      }
      .flex-container {
        height: 70%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url("images/image1.jpg"); /* js override */
        background-size: cover;
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
        font-size: 3.5rem;
        display: flex;
        transition: all 0.2s;
        justify-content: center;
        align-items: center;
        background-color: #bbb;
        font-family: cursive;
      }
      .game {
        display: none;
      }
      .go-btn {
        transform: scale(2);
      }
      section.go {
        text-align: center;
        margin: auto;
      }
    </style>
  </head>

  <body>
    <?php $page = 'flex-image'; include 'header.php'; ?>
    <div class="container">
      <div class="jumbotron" id="form" style="background-color: #a5eaff">
        <section class="go">
          <button class="btn btn-primary go-btn">Go!</button>
        </section>
        <section class="game">
          <div class="flex-container">
            <div class="flex">
              <div class="item-box">
                <div class="item">1</div>
                <div class="item" data-wrong>2</div>
                <div class="item">3</div>
              </div>
              <div class="item-box">
                <div class="item" data-wrong>4</div>
                <div class="item">5</div>
                <div class="item">6</div>
              </div>
              <div class="item-box">
                <div class="item">7</div>
                <div class="item">8</div>
                <div class="item">9</div>
              </div>
              <div class="item-box">
                <div class="item" data-wrong>0</div>
                <div class="item">1</div>
                <div class="item">2</div>
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
      </div>
    </div>
    <?php include 'footer.php'; ?>
    <script>
      "use strict";

      var items = document.querySelectorAll(".item");
      for (var i = 0; i < items.length; i++) {
        items[i].addEventListener("click", function() {
          var item = this;
          if (item.gotit) return;

          if (item.getAttribute("data-wrong") === null) {
            item.style.backgroundColor = "lightgreen";
            setTimeout(function() {
              item.style.backgroundColor = "transparent";
              item.innerHTML = "";
              item.style.border = "none";
              item.gotit = true;
            }, 200);
          } else {
            item.style.backgroundColor = "salmon";
            setTimeout(function() {
              item.style.backgroundColor = "#ccc";
            }, 200);
          }
        });
      }

      function playAudio(which) {
        var audio = document.querySelector("audio." + which);
        var otherAudio = document.querySelector(
          "audio." + (which == "correct" ? "wrong" : "correct")
        );
        if (!audio.paused) audio.pause();
        if (!otherAudio.paused) otherAudio.pause();
        audio.currentTime = 0;
        audio.play();
      }
    </script>
  </body>
</html>
