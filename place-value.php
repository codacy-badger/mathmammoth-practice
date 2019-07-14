<!DOCTYPE html>
<html lang="en-US">

<head>
  <?php include 'header-head.php'; ?>
  <link rel="stylesheet" href="practice.css">
  <title>Place Value &mdash; Online Practice (grades 1-4)</title>
  <meta property="og:title" content="Place Value">
  <meta property="og:description" content="This script makes simple math problems that help students practice place value concepts.">
  <meta property="og:image" content="https://www.mathmammoth.com/practice/place-value-screenshot.jpg">
  <meta property="og:image:secure_url" content="https://www.mathmammoth.com/practice/place-value-screenshot.jpg" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="617" />
  <meta property="og:image:height" content="301" />
  <meta property="og:image:alt" content="Place Value" />
  <meta property="og:url" content="https://www.mathmammoth.com/practice/place-value">
  <meta property="og:site_name" content="Math Mammoth Practice">
  <meta property="og:locale" content="en_US" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image:alt" content="Place Value">
</head>

<body>
  <?php $page = 'place-value'; include 'header.php'; ?>
  <div class="container rounding-page">
    <div class="jumbotron" id="form" style="background-color: #a5eaff">
      <h1 class="text-center">
        Place Value<br>
        <span style="font-size: 1.5rem">Online practice for grades 1-4</span>
      </h1>
      <div class="sharethis-inline-share-buttons"></div>
      <div class="row">
        <div class="col-12">
          <p>This script makes simple math problems that help students practice place value concepts.</p>
          <p>In the first mode, students need to find the missing part of a number, such as 2,594 = 500 + ______ + 4 + 2,000.</p>
          <p>In the second mode, students are given a number in expanded form and they need to write the number. For example, 500 + 30 + 7,000 + 2 makes the number 7,532.</p>
          <p>You can choose timed or untimed practice, the number of practice problems, the 'mode', and the maximum number of digits in the number.</p>
          <div class="form-group mt-4">
            <label for="max-digits">Max Digits:</label>
            <select id="max-digits" class="custom-select">
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4" selected>4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
            </select>
          </div>
        </div>
        <div class="col-12">
          <p>
            Screenshot:<br />
            <img src="place-value-screenshot.jpg" class="rounded-lg screenshot" alt="Screenshot of someone doing a round">
          </p>
        </div>
      </div>
      <div class="form-group">
        <label for="mode">Mode:</label>
        <select id="mode" class="custom-select">
          <option value="1">Find the missing part in number</option>
          <option value="2">Write number (from its parts)</option>
        </select>
      </div>
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
    <!-- start copied code -->
    <div class="jumbotron d-none" id="questionbox" style="background-color: #a5eaff; text-align: center;">
      <div id="correctawrong" style="top: 8px; right: 8px">Correct: <span id="correct">0</span> &nbsp; Wrong: <span id="wrong">0</span></div>
      <div id="questionon" style="top: 8px; left: 8px"><span id="qon">1</span>/<span id="numoq"></span></div>
      <div id="numq" class="text-center" style="font-weight: bold"></div>
      <br>
      <input
        type="text"
        pattern="[0-9,]+"
        required
        id="response"
        style="margin: auto; width: 75%"
        oninput="if (this.validity ? this.validity.valid : true) $('#check').prop('disabled', false); else $('#check').prop('disabled', true);"
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
    </div><!-- end copied code -->
  </div>
  <?php include 'footer.php'; ?>
  <script>
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

    function roundDecimal(num, th) {
      return Math.round(num * th) / th;
    }

    function roundWholeNum(num, to) {
      return Math.round(num / to) * to;
    }

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
        page: 'Rounding Whole Numbers & Decimals'
      }).always(function() {
        $('#sendResults').text('Click to resend');
        $('#sendResults').prop('disabled', false);
      });
    }

    function changeValidity(isValid) {
      valid = isValid;
      $('#submit').attr('disabled', !valid);
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
      window.digits = $('#max-digits').val();
      window.additionMode = $('#mode').val();
      started = true;
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
      timed.each(function(key, el) {
        if (el.checked) {
          isTimed = $(el).data('val') == 'yes';
        }
      });
      questionMode();
      newQuestion();
    }

    function random(min, max) {
      return Math.floor(Math.random() * (max - (min - 1))) + min;
    }

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

    function voidF(val) {
      return val;
    }

    function questionGenerator() {
      var number = 0;
      var parts = [];

      for (var j = 0; j < digits - 1; j++) {
        var p;
        if (additionMode == '2' && random(1, 4) == 1) {
          p = 0;
        } else {
          p = random(0, 9) * Math.pow(10, j);
        }
        number += p;
        parts[j] = p;
      }

      var p2 = random(1, 9) * Math.pow(10, digits - 1);
      number += p2;
      parts[digits - 1] = p2;

      var shownumber = putCommasInNumber(number);
      var showparts = parts.slice();
      var k;
      do {
        k = random(0, digits - 1);
      } while (parts[k] == 0);

      var answer = parts[k];
      showparts[k] = additionMode == '1' ? "_________" : answer;
      showparts.sort(function() {
        return .5 - Math.random();
      });

      var question = additionMode == '1' ? shownumber + ' = ' : '';

      for (var i = 0; i < digits - 1; i++) {
        if (showparts[i] != '0') question += (showparts[i].toString().indexOf('_') > -1 ? voidF : putCommasInNumber)(showparts[i]) + ' + ';
      }

      if (showparts[digits - 1] != '0') question += (showparts[digits - 1].toString().indexOf('_') > -1 ? voidF : putCommasInNumber)(showparts[digits - 1]);
      else question = question.slice(0, -3);
      if (additionMode == '2') {
        answer = shownumber.replace(/,/g, '');
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
      window.question = questionGenerator();
      $('#numq').html(question[0]);
    }

    function checkAns() {
      if (isTimed) {
        clearTimeout(timeout);
        clearInterval(interval);
      }
      $('#response').prop('disabled', true);
      $('#numq').css('color', '#888686');
      var studentAnswer = response.val().split('').filter(function(el) {
        return parseInt(el) == el;
      }).join('');
      var correctExpress = parseInt(studentAnswer) == parseInt(question[1]);
      var isCorrect = arguments[0] ? false : correctExpress;
      if (isCorrect) {
        correct++;
        message.css('color', 'green').text('Correct');
      } else {
        wrong++;
        message.css('color', 'red').text('Sorry, that is not correct. The correct answer is: ' + putCommasInNumber(question[1]));
      }
      $('input').blur();
      questionsAnswered.push({
        studentAnswered: parseInt(studentAnswer),
        correctAnswer: question[1],
        question: question[0],
        isCorrect: isCorrect
      });
      $('.pp').eq(questionOn - 1).css('background-color', isCorrect ? 'green' : 'salmon');
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
