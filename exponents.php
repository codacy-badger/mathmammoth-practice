<!-- start copied code --><!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="manifest" href="manifest.json">
  <script src="app.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css" />
  <script src="jquery-3.3.1.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <link rel="stylesheet" href="mm.css" />
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
  <link rel="stylesheet" href="practice.css">
  <title>Multiply Whole Numbers With Zeros &mdash; Online Practice (grades 4-6)</title>
</head>

<body>
  <?php $page = 'exponents';include 'header.php';?>
  <div class="container">
    <div class="jumbotron" id="form" style="background-color: #a5eaff">
      <h1 class="text-center">
        Multiply Whole Numbers With Zeros<br>
        <span style="font-size: 1.5rem">Online practice for grades 4-6</span>
      </h1>
      <p>On this page, you can practice multiplying numbers with zeros, such as 20&nbsp;&times;&nbsp;300 and 7,000&nbsp;&times;&nbsp;200, using mental math. Students usually learn this topic in 4th grade, but 5th and 6th grade students usually benefit from practicing it too.</p>

      <p>The principle for solving such multiplication problems is this: multiply the numbers without the zeros first. Then, tag as many zeros as there are in the factors to the end of the product.</p>
      <p>For example, to solve 20&nbsp;&times;&nbsp;300, first multiply 2&nbsp;&times;&nbsp;3 = 6. Then, since 20 has one zero and 300 has two, tag <i>three</i> zeros to the end of 6, to get 6,000.</p>

      <p>You can also practice the opposite operation, <a href="divide-numbers-ending-in-zeros.php">division of numbers ending in zeros here</a>.</p>

      <p class="mb-4">You can choose the level of difficulty, timed or untimed practice, and the number of practice problems.</p>

      <label for="mode">Mode:</label>
      <select id="mode" class="custom-select">
        <option value="reg" selected>Use regular exponents (e.g. 4 to the 5th power)</option> <!-- <sup> tags don't work in options -->
        <option value="10te">Use n &times; 10 to the nth power (e.g. 5 * 10 to the 4th power)</option>
        <option value="both">Both</option>
      </select>
      <br>
      <div class="tonanoq switch" style="transition: opacity .3s" onclick="$('#checkbox').prop('checked', false); $('.pfst').css('opacity', 0.6); $('.pfst').css('cursor', 'default'); this.style.opacity = 1; this.style.cursor = 'auto';">
        <div class="timed">
          <div class="custom-control custom-radio">
            <input type="radio" name="timed" id="ty" data-val="yes" class="custom-control-input">
            <label for="ty" class="custom-control-label">Timed practice (5 sec per answer)</label>
          </div>
          <div class="custom-control custom-radio">
            <input name="timed" type="radio" checked id="tn" data-val="no" class="custom-control-input">
            <label for="tn" class="custom-control-label">Not timed</label>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label for="noq" style="font-weight: 500">Number of questions:</label>
          <select class="custom-select" id="noq">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="25">25</option>
            <option value="30">30</option>
          </select>
        </div>
      </div>
      <u><b>OR</b></u><br>
      <input type="checkbox" onclick="!this.checked ? (function() { $('#checkbox').prop('checked', false); $('.pfst').css('opacity', 0.6); $('.pfst').css('cursor', 'default'); $('.tonanoq')[0].style.opacity = 1; $('.tonanoq')[0].style.cursor = 'auto'; }()) : (function() { $('#checkbox').prop('checked', true); $('.tonanoq').css('opacity', 0.6); $('.tonanoq').css('cursor', 'default'); $('.pfst')[0].style.opacity = 1; $('.pfst')[0].style.cursor = 'auto'; }())" id="checkbox">
      <div class="pfst switch" style="display: inline-block; opacity: 0.6; cursor: default; transition: opacity .3s" onclick="$('#checkbox').prop('checked', true); $('.tonanoq').css('opacity', 0.6); $('.tonanoq').css('cursor', 'default'); this.style.opacity = 1; this.style.cursor = 'auto';">
        Practice for a set time: <input type="number" value="5" style="width: 80px; display: inline-block" id="settime" class="form-control"> min
      </div><br>
      <button class="btn btn-primary" onclick="onSubmit()" id="submit">Go!</button>
    </div>
    <div class="jumbotron d-none" id="questionbox" style="background-color: #a5eaff; text-align: center;">
      <div id="correctawrong" style="top: 8px; right: 8px">Correct: <span id="correct">0</span> &nbsp; Wrong: <span id="wrong">0</span></div>
      <div id="questionon" style="top: 8px; left: 8px"><span id="qon">1</span>/<span id="numoq"></span></div>
      <div id="numq" class="text-center" style="font-weight: bold"></div>
      <br>
      <input
        type="text"
        id="response"
        style="margin: auto; width: 75%"
        oninput="if (this.value != '') $('#check').prop('disabled', false); else $('#check').prop('disabled', true);"
        class="form-control">
      <br>
      <button class="btn btn-primary" id="check" disabled>Check</button>
      <br>
      <br>
      <div id="message"></div>
      <br>
      <br>
      <div id="progressbar"></div>
      <br><br>
      <div id="time"></div>
    </div>
    <div class="jumbotron" id="end" style="background-color: #a5eaff; text-align: center; font-size: 1.3em; display: none"> Wrong: <span id="wronge"></span>
      <br> Correct: <span id="correcte"></span>
      <br>
      <br>
      <div id="pb" style="width: 75%; display: inline-block; margin: auto; height: 20px">
        <div id="wend"></div>
        <div id="cend"></div>
      </div><br><br>
      <button class="btn btn-primary" onclick="window.location.reload()">Practice Again</button><br><br>
      <input type="email" class="form-control" id="teacherEmail" oninput="changedEmail()" placeholder="Enter your teacher's email..."><br>
      <div style="text-align: left; margin-right: auto"><button class="btn btn-primary mr-auto" id="sendResults" onclick="sendResultsToTeacher()">Send Results to Teacher</button></div>
    </div>
  </div>
  <?php include 'footer.php';?>
  <script>
    var title = "Exponents";
    var valid = false;
    var wrong = 0;
    var correct = 0;
    var timeout;
    var timer;
    var timerInt;
    var timerSeconds;
    var interval;
    var started = false;
    var questionsAnswered = [];

    function changedEmail() {
      if ($('#teacherEmail').val() == '') {
        $('#sendResults').prop('disabled', true);
      } else {
        $('#sendResults').prop('disabled', false);
      }
    }

    function sendResultsToTeacher() {
      $('#sendResults').prop('disabled', true).text('Sending...');
      $.post('/practice/sendresultstoteacher.php', {
        email: $('#teacherEmail').val(),
        date: new Date().getFullYear() + '/' + (((parseInt(new Date().getMonth()) + 1) < 10) ? ('0' + (parseInt(new Date().getMonth()) + 1)) : (parseInt(new Date().getMonth()) + 1)) + '/' + (new Date().getDate() < 10 ? '0' + new Date().getDate() : new Date().getDate()),
        results: JSON.stringify(questionsAnswered),
        page: title
      }).always(function() {
        $('#sendResults').text('Click to resend');
        $('#sendResults').prop('disabled', false);
      });
    }

    function time(seconds) {
      var minutes = Math.floor(seconds / 60);
      var secs = seconds % 60;
      if (secs < 10) secs = '0' + secs;
      return minutes + ':' + secs;
    }

    function minsToSecs(mins) {
      return Math.round(mins * 60);
    }

    function onSubmit() {
      started = true;
      window.tables = [];
      window.mode = $('.switch:eq(0)').prop('style').opacity == '0.6' ? 'settime' : 'timeq';
      if (mode == 'timeq') {
        for (var i = 0; i < parseInt(questions.val()); i++) {
          $('<div>').addClass('pp').appendTo(progressbar);
        }
        $('#numoq').text(parseInt(questions.val()));
      } else {
        $('#questionon').html('Question <span id="qon">1</span>');
        timerSeconds = minsToSecs($('#settime').val());
        $('#time').text(time(timerSeconds));
        timerInt = setInterval(function() {
          if (timerSeconds <= 0) clearInterval(timerInt);
          else timerSeconds--;
          $('#time').text(time(timerSeconds));
        }, 1000);
        timer = setTimeout(function() {
          clearTimeout(timer);
          alert('Time\'s up!');
          end();
        }, $('#settime').val() * 60000);
      }
      $('.tc input[type="checkbox"]').each(function(key, el) {
        if (el.checked) {
          tables.push(+el.id.replace(/m/, ''));
        }
      });
      timed.each(function(key, el) {
        if (el.checked) {
          isTimed = $(el).data('val') == 'yes';
        }
      });
      questionMode();
      newQuestion();
    }

    function questionGenerator(tables) {
      function putCommasInNumber(number) {
        var str = number.toString();
        var reversed = str.split('').reverse();
        for (var i = 0; i < reversed.length; i++) {
          if (i % 4 == 0) {
            reversed.splice(i, 0, ',');
          }
        }
        return reversed.reverse().join('').substr(0, (reversed.length - 1));
      }
      function rand(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
      }
      var mode = $('#mode').val() == 'reg' ? 0 : $('#mode').val() == '10te' ? 1 : rand(0, 1);
      var question, answer;
      if (mode == 0) {
        var pos_nums = [0, 1, 2, 2, 2, 2, 3, 3, 3, 4, 4, 5, 5, 6, 6, 7, 8, 9, 10, 10, 10, 10, 10, 10, 100, 100];
        var base = pos_nums[rand(0, pos_nums.length - 1)];
        if (base == 0) exponent = rand(1, 20);
        if (base == 1) exponent = rand(1, 80);
        if (base == 2) exponent = rand(1, 6);
        if (base == 100) exponent = rand(1, 5);
        if (base == 10) exponent = rand(1, 10);
        if (base > 2 && base < 6) exponent = rand(1, 3);
        if (base > 5 && base < 10) exponent = rand(1, 2);

        question = base + '<sup>' + exponent + '</sup>';
        answer = putCommasInNumber(Math.pow(base, exponent));
      } else {
        var factor1;
        var numDigits = rand(1, 3);
        if (numDigits == 1) {
          factor1 = rand(1, 9);
        }
        if (numDigits == 2) {
          factor1 = rand(10, 99);
        }
        if (numDigits == 3) {
          factor1 = rand(100, 999);
        }
        var pow = rand(2, 10);
        question = factor1 + ' &times; 10<sup>' + pow + '</sup>';
        answer = putCommasInNumber(factor1 * Math.pow(10, pow));
      }

      return [question, answer];
    }

    function questionMode() {
      window.questionOn = 0;
      $('#form').addClass('d-none');
      $('#questionbox').removeClass('d-none');
    }

    function end() {
      if (isTimed) {
        clearTimeout(timeout);
        clearInterval(interval);
      }
      if (mode != 'timeq') {
        clearTimeout(timer);
      }
      $('#questionbox').hide();
      $('#end').show();
      var wrongPercent = (wrong / (wrong + correct)) * 100;
      var correctPercent = (correct / (wrong + correct)) * 100;
      $('#wend').css('width', wrongPercent + '%');
      $('#cend').css('width', correctPercent + '%');
      if (wrongPercent == 0) {
        $('#cend').css('border-top-left-radius', '7px');
        $('#cend').css('border-bottom-left-radius', '7px');
      }
      if (correctPercent == 0) {
        $('#wend').css('border-top-right-radius', '7px');
        $('#wend').css('border-bottom-right-radius', '7px');
      }
      $('#wronge').text(wrong + ' (' + wrongPercent.toFixed(1) + '%)');
      $('#correcte').text(correct + ' (' + correctPercent.toFixed(1) + '%)');
    }

    function timeoutSet() {
      $('#message').css('color', 'green').text('5');
      timeout = setTimeout(function() {
        clearInterval(interval);
        alert('Time\'s up! Click OK to continue.');
        checkAns(true);
        newQuestion();
      }, 5000);
      interval = setInterval(function() {
        $('#message').text($('#message').text() - 1);
      }, 1000);
    }

    function newQuestion() {
      check.prop('disabled', true);
      $('#numq').css('color', 'black');
      $('#response').prop('disabled', false);
      response.val('');
      response.focus();
      $('#message').empty();
      if (isTimed) timeoutSet();
      if (questionOn == parseInt(questions.val()) && mode == 'timeq') {
        end();
      }
      questionOn++;
      $('#check').text('Check');
      $('#qon').text(questionOn);
      window.question = questionGenerator(tables);
      $('#numq').html(question[0]);
    }

    function checkAns() {
      if (isTimed) {
        clearTimeout(timeout);
        clearInterval(interval);
      }
      $('#response').prop('disabled', true);
      $('#numq').css('color', '#888686');
      var isCorrect = arguments[0] ? false : parseInt(response.val().replace(/,/g, "").trim().replace(/ /g, "")) == question[1].replace(/,/g, "");
      if (isCorrect) {
        correct++;
        message.css('color', 'green').text('Correct');
      } else {
        wrong++;
        message.css('color', 'red').text('Sorry, that is not correct. The correct answer is: ' + question[1]);
      }
      $('input').blur();
      questionsAnswered.push({
        studentAnswered: parseInt(response.val()),
        correctAnswer: question[1],
        question: question[0].replace(/\&times;/g, 'x'),
        isCorrect: isCorrect
      });
      $('.pp').eq(questionOn - 1).css('background-color', message.css('color'));
      check.text('Continue');
      $('#correct').text(correct);
      $('#wrong').text(wrong);
    }
    $(document).ready(function() {
      window.progressbar = $('#progressbar');
      window.questions = $('#noq');
      window.response = $('#response');
      window.timed = $('[name="timed"]');
      window.check = $('#check');
      window.message = $('#message');
      window.isTimed = false;
      $(document).on('keydown', function(event) {
        if (event.keyCode == 13 && !check.prop('disabled') && started) {
          event.preventDefault();
          check.click();
        }
      });
      check.click(function() {
        if (check.text() == 'Check') checkAns();
        else newQuestion();
      });
    });

  </script>
</body>

</html>