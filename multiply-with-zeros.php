<!-- start copied code --><!DOCTYPE html>
<html lang="en-US">

<head>
  <?php include 'header-head.php'; ?>
  <link rel="stylesheet" href="practice.css">
  <title>Multiply Whole Numbers With Zeros &mdash; Online Practice (grades 4-6)</title>
  <meta property="og:title" content="Multiply Whole Numbers With Zeros">
  <meta property="og:description" content="You can practice multiplying numbers with zeros, such as 20 * 300 and 7,000 * 200, using mental math. Students usually learn this topic in 4th grade, but 5th and 6th grade students usually benefit from practicing it too.">
  <meta property="og:image" content="https://www.mathmammoth.com/practice/multiply-zeros.jpg">
  <meta property="og:image:secure_url" content="https://www.mathmammoth.com/practice/multiply-zeros.jpg" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="456" />
  <meta property="og:image:height" content="413" />
  <meta property="og:image:alt" content="Multiply Whole Numbers With Zeros" />
  <meta property="og:url" content="https://www.mathmammoth.com/practice/multiply-with-zeros">
  <meta property="og:site_name" content="Math Mammoth Practice">
  <meta property="og:locale" content="en_US" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image:alt" content="Multiply Whole Numbers With Zeros">
</head>

<body>
  <?php $page = 'multiply-with-zeros'; include 'header.php'; ?>
  <div class="container">
    <div class="jumbotron" id="form" style="background-color: #a5eaff">
      <h1 class="text-center">
        Multiply Whole Numbers With Zeros<br>
        <span style="font-size: 1.5rem">Online practice for grades 4-6</span>
      </h1>
      <div class="addthis_inline_share_toolbox"></div>
      <div class="row">
        <div class="col-md-6">
          <p>On this page, you can practice multiplying numbers with zeros, such as 20&nbsp;&times;&nbsp;300 and 7,000&nbsp;&times;&nbsp;200, using mental math. Students usually learn this topic in 4th grade, but 5th and 6th grade students usually benefit from practicing it too.</p>
          <p>The principle for solving such multiplication problems is this: multiply the numbers without the zeros first. Then, tag as many zeros as there are in the factors to the end of the product.</p>
          <p>For example, to solve 20&nbsp;&times;&nbsp;300, first multiply 2&nbsp;&times;&nbsp;3 = 6. Then, since 20 has one zero and 300 has two, tag <i>three</i> zeros to the end of 6, to get 6,000.</p>
          <p>You can also practice the opposite operation, <a href="/practice/divide-numbers-ending-in-zeros">division of numbers ending in zeros here</a>.</p>
          <p class="mb-4">You can choose the level of difficulty, timed or untimed practice, and the number of practice problems.</p>
          <!-- end copied code -->
          <label for="level">Level:</label>
          <select id="level" class="custom-select">
            <option value="1">1 (the factors have a maximum of four zeros in total)</option>
            <option value="2" selected>2 (the factors have a maximum of eight zeros in total)</option>
            <option value="3">3 (the factors have a maximum of 12 zeros in total)</option>
          </select>
          <!-- start copied code -->
        </div>
        <div class="col-md-6">
          <p>
            Screenshot:<br />
            <img src="multiply-zeros.jpg" class="rounded-lg screenshot" alt="Screenshot of someone doing a round">
          </p>
        </div>
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
  <?php include 'footer.php'; ?>
  <script>
    var title = "Multiply Whole Numbers With Zeros";
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
      var level = parseInt($('#level').val());
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
        return Math.floor(Math.random() * (max - (min - 1))) + min;
      }
      var answer, problemdisplay;

      switch (level) {
        case 1:
          // 2/3 of the time, two numbers, and 1/3 of the time, three numbers
          var howmanynumbers;
          if (rand(1, 3) > 2) howmanynumbers = 3;
          else howmanynumbers = 2;

          var digit1 = rand(1, 9);
          var digit2 = rand(1, 9);
          var sumexp = 0;
          var digit3, exp3, number3, sumexp;

          if (howmanynumbers == 3) {
            digit3 = rand(1, 5);
            exp3 = rand(1, 2);
            number3 = digit3 * Math.pow(10, exp3);
            sumexp = exp3;
          }
          // find exponents 1 and 2 so that the sum of all the exponents is not more than 4
          var expsum, exp1, exp2;
          do {
            expsum = sumexp;
            exp1 = rand(1, 2);
            exp2 = rand(1, 2);
            expsum += exp1;
            expsum += exp2;
          } while (expsum > 4);

          var number1 = digit1 * Math.pow(10, exp1);
          var number2 = digit2 * Math.pow(10, exp2);
          answer = number1 * number2;
          if (howmanynumbers == 3) answer *= number3;
          if (rand(0, 1)) problemdisplay = number1 + " &times; " + number2;
          else problemdisplay = number2 + " &times; " + number1;
          if (howmanynumbers == 3) problemdisplay += " &times; " + number3;
        break;

        case 2:
          var howmanynumbers;
          if (rand(1, 3) > 2) howmanynumbers = 3;
          else howmanynumbers = 2;
          var digit1 = rand(1, 9);
          var digit2 = rand(1, 9);
          var sumexp = 0;
          var digit3, exp3, number3, sumexp;
          if (howmanynumbers == 3) {
            digit3 = rand(1, 5);
            exp3 = rand(1, 3);
            number3 = digit3 * Math.pow(10, exp3);
            sumexp = exp3;
          }
          // find exponents 1 and 2 so that the sum of all the exponents is not more than 8
          var expsum = 0, exp1, exp2;
          do {
            expsum = sumexp;
            exp1 = rand(1, 4);
            exp2 = rand(1, 4);
            expsum += exp1;
            expsum += exp2;
          } while (expsum > 8);
          var number1 = digit1 * Math.pow(10, exp1);
          var number2 = digit2 * Math.pow(10, exp2);
          var answer = number1 * number2;
          if (howmanynumbers == 3) answer *= number3;
          if (rand(0, 1)) problemdisplay = number1 + " &times; " + number2;
          else problemdisplay = number2 + " &times; " + number1;
          if (howmanynumbers == 3) problemdisplay += " &times; " + number3;

        break;
        case 3:
          var d = rand(1, 4);
          var howmanynumbers, digit3, exp3, number3, digit4, exp4, number4;
          if (d == 4) howmanynumbers = 4;
          else if (d == 3) howmanynumbers = 3;
          else howmanynumbers = 2;
          var digit1 = rand(1, 9);
          var digit2 = rand(1, 9);
          var sumexp = 0;
          if (howmanynumbers > 2) {
            digit3 = rand(1, 5);
            exp3 = rand(1, 3);
            number3 = digit3 * Math.pow(10, exp3);
            sumexp = exp3;
          }
          if (howmanynumbers == 4) {
            digit4 = rand(1, 5);
            exp4 = rand(1, 3);
            number4 = digit4 * Math.pow(10, exp4);
            sumexp += exp4;
          }
          // find exponents 1 and 2 so that the sum of all the exponents is not more than 12
          var expsum, exp1, exp2;
          do {
            expsum = sumexp;
            exp1 = rand(1, 6);
            exp2 = rand(1, 6);
            expsum += exp1;
            expsum += exp2;
          } while (expsum > 12);
          number1 = digit1 * Math.pow(10, exp1);
          number2 = digit2 * Math.pow(10, exp2);
          answer = number1 * number2;
          if (howmanynumbers > 2) answer *= number3;
          if (howmanynumbers == 4) answer *= number4;
          if (rand(0, 1)) problemdisplay = number1 + " &times; " + number2;
          else problemdisplay = number2 + " &times; " + number1;
          if (howmanynumbers > 2) problemdisplay += " &times; " + number3;
          if (howmanynumbers == 4) problemdisplay += " &times; " + number4;
        break;
      }
      answer = putCommasInNumber(answer);
      problemdisplay = problemdisplay.split(' &times; ').map(function(num) {
        return putCommasInNumber(parseInt(num));
      }).join(' &times; ');

      return [problemdisplay, answer];
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
