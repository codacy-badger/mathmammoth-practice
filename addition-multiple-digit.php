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
  <title>Multiple Digit Addition &amp; Subtraction Facts &mdash; Online Practice (grades 1-2)</title>
</head>

<body>
  <?php $page = 'addition-multiple-digit'; include 'header.php'; ?>
  <div class="container">
    <div class="jumbotron" id="form" style="background-color: #a5eaff">
      <h1 class="text-center">Basic Addition &amp; Subtraction Facts &mdash; Online Practice (grades 1-2)</h1>
      <p>On this page, you can practice the basic addition and subtraction facts with single-digit addends (such as 4 + 5, 9 + 7, 9 &minus; 4, 12 &minus; 8).</p>
      <p>You can practice addition facts, subtraction facts, and missing addend problems (missing number additions).</p>
      <p>For first grade, choose basic facts where the sum is 10 or less, and for second grade, choose basic facts where the sum is 20 or less. Additionally you can select timed or untimed practice and the number of practice problems.</p>
      <p class="mb-4">Further options for <i>addition only</i> include: adding with zero, doubles, doubles plus one, nine trick (or adding with 9), and the eight-trick (or adding with 8).</p><br>
      <!-- end copied code -->
      <!-- addition opts -->
      <div class="custom-control custom-checkbox">
        <input type="checkbox" id="2p1dnr" class="custom-control-input">
        <label for="2p1dnr" class="custom-control-label">2-digit + 1-digit, no regrouping</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" id="2p1dwr" class="custom-control-input">
        <label for="2p1dwr" class="custom-control-label">2-digit + 1-digit, with regrouping</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" id="2dpmo10" class="custom-control-input" checked>
        <label for="2dpmo10" class="custom-control-label">2-digit + multiple of 10</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" id="2p2dnr" class="custom-control-input">
        <label for="2p2dnr" class="custom-control-label">2-digit + 2-digit, no regrouping</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" id="2p2dwr" class="custom-control-input">
        <label for="2p2dwr" class="custom-control-label">2-digit + 2-digit, with regrouping</label>
      </div>
      <!-- subtraction opts --><hr>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" id="2m1dnr" class="custom-control-input">
        <label for="2m1dnr" class="custom-control-label">2-digit &minus; 1-digit, no regrouping</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" id="2m1dwr" class="custom-control-input">
        <label for="2m1dwr" class="custom-control-label">2-digit &minus; 1-digit, with regrouping</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" id="2dmmo10" class="custom-control-input" checked>
        <label for="2dmmo10" class="custom-control-label">2-digit &minus; multiple of 10</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" id="2m2dnr" class="custom-control-input">
        <label for="2m2dnr" class="custom-control-label">2-digit &minus; 2-digit, no regrouping</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" id="2m2dwr" class="custom-control-input">
        <label for="2m2dwr" class="custom-control-label">2-digit &minus; 2-digit, with regrouping</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" id="100m2d" class="custom-control-input">
        <label for="100m2d" class="custom-control-label">100 &minus; 2-digit</label>
      </div>
      <!-- start copied code -->
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
      <input type="checkbox" onclick="
        !this.checked ? (function() { 
          $('#checkbox').prop('checked', false); 
          $('.pfst').css('opacity', 0.6); 
          $('.pfst').css('cursor', 'default'); 
          $('.tonanoq')[0].style.opacity = 1; 
          $('.tonanoq')[0].style.cursor = 'auto'; 
        }()) : (function() { 
          $('#checkbox').prop('checked', true); 
          $('.tonanoq').css('opacity', 0.6); 
          $('.tonanoq').css('cursor', 'default'); 
          $('.pfst')[0].style.opacity = 1; 
          $('.pfst')[0].style.cursor = 'auto'; 
        }())" id="checkbox">
      <div class="pfst switch" style="display: inline-block; opacity: 0.6; cursor: default; transition: opacity .3s" onclick="
        $('#checkbox').prop('checked', true); 
        $('.tonanoq').css('opacity', 0.6);
        $('.tonanoq').css('cursor', 'default'); 
        this.style.opacity = 1; 
        this.style.cursor = 'auto';">
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
        type="number" 
        id="response"
        style="margin: auto; width: 75%"
        oninput="if(this.value != '') $('#check').prop('disabled', false); else $('#check').prop('disabled', true);" 
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
      if($('#teacherEmail').val() == '') {
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
        page: 'Multiple Digit Addition'
      }).always(function() {
        $('#sendResults').text('Click to resend');
        $('#sendResults').prop('disabled', false);
      });
    }

    function time(seconds) {
      var minutes = Math.floor(seconds / 60);
      var secs = seconds % 60;
      if(secs < 10) secs = '0' + secs;
      return minutes + ':' + secs;
    }

    function minsToSecs(mins) {
      return Math.round(mins * 60);
    }

    function onSubmit() {
      started = true;
      window.withZero = $('#withZero'); // not copied line
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
          if(timerSeconds <= 0) clearInterval(timerInt);
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

    // end copied code
    function hasRegrouping(num1, num2) {
      var num1digits = num1.toString().split('');
      var num2digits = num2.toString().split('');
      var regrouping = false;
      if(num1digits.length == 1) {
        num1digits = ['0', num1digits[0]];
      }
      if(num2digits.length == 1) {
        num2digits = ['0', num2digits[0]];
      }
      if (parseInt(num1digits[1]) + parseInt(num2digits[1]) >= 10) {
        regrouping = true;
      }
      if(parseInt(num1digits[0]) + parseInt(num2digits[0]) >= 10) {
        regrouping = true;
      }
      return regrouping;
    }
    function random(min, max) {
      return Math.floor(Math.random() * (max - (min - 1))) + min;
    } // start copied code

    function questionGenerator() {
      var possibleProblems = [];
      // end copied code
      if(options['2p1dnr'].prop('checked')) {
        var num1 = random(10, 99);
        var num2 = random(1, 9);
        while(hasRegrouping(num1, num2)) {
          num1 = random(10, 99);
          num2 = random(1, 9);
        }
        var way = Math.round(Math.random());
        possibleProblems.push(way ? (num1 + ' + ' + num2) : (num2 + ' + ' + num1));
      }
      if(options['2p1dwr'].prop('checked')) {
        var num1 = random(10, 99);
        var num2 = random(1, 9);
        while(!hasRegrouping(num1, num2)) {
          num1 = random(10, 99);
          num2 = random(1, 9);
        }
        var way = Math.round(Math.random());
        possibleProblems.push(way ? (num1 + ' + ' + num2) : (num2 + ' + ' + num1));
      }
      var quest = possibleProblems[Math.floor(Math.random() * possibleProblems.length)];
      eval('var answer = ' + quest + ';');
      // start copied code
      return [quest, answer];
    }

    function questionMode() {
      window.questionOn = 0;
      $('#form').addClass('d-none');
      $('#questionbox').removeClass('d-none');
    }

    function end() {
      console.log(questionsAnswered);
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
      var isCorrect = arguments[0] ? false : parseInt(response.val()) == question[1];
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
        question: question[0],
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
      /* end copied code */ window.options = {
        '2p1dnr': $('#2p1dnr'),
        '2p1dwr': $('#2p1dwr'),
        '2dpmo10': $('#2dpmo10'),
        '2p2dnr': $('#2p2dnr'),
        '2p2dwr': $('#2p2dwr'),
        '2m1dnr': $('#2m1dnr'),
        '2m1dwr': $('#2m1dwr'),
        '2dmmo10': $('#2dmmo10'),
        '2m2dnr': $('#2m2dnr'),
        '2m2dwr': $('#2m2dwr'),
        '100m2d': $('#100m2d')
      }; // start copied code
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
