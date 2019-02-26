<!-- start copied code -->
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="manifest" href="manifest.json">
  <script src="app.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css" />
  <link rel="stylesheet" href="mm.css" />
  <script src="jquery-3.3.1.min.js"></script>
  <script src="bootstrap.min.js"></script>
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
  <title>Division With Remainders (Mental Math) &mdash; Online Practice (grades 3-4)</title>
</head>

<body>
  <?php $page = 'division-remainders'; include 'header.php'; ?>
  <div class="container">
    <div class="jumbotron" id="form" style="background-color: #a5eaff">
      <h1 class="text-center">Division With Remainders (Mental Math) Online Practice</h1>
      <p class="mb-4">This script allows you to practice division with remainders, using mental math. In other words, the division problems are based on basic division facts (or on multiplication tables), such as 53 &divide; 8 = 6 R5 or 23 &divide; 4 = 5 R3. You can choose timed or untimed practice, the number of practice problems, and the divisors you'd like to include.</p>
      <label style="font-weight: 500">
        Possible divisors: &nbsp;
        <div class="btn-group btn-group-sm">
          <button class="btn btn-primary" onclick="$('.tc input').prop('checked', true); $('#submit').prop('disabled', false);">Check All</button>
          <button class="btn btn-primary" onclick="$('.tc input').prop('checked', false); $('#submit').prop('disabled', true);">Uncheck All</button>
        </div>
      </label>
      <div id="tables">
        <div class="tc custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" class="custom-control-input" id="m2">
          &nbsp;<label class="custom-control-label" for="m2">Divide by 2</label>
        </div>
        <div class="tc custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" class="custom-control-input" id="m3">
          &nbsp;<label class="custom-control-label" for="m3">Divide by 3</label>
        </div>
        <div class="tc custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" class="custom-control-input" id="m4">
          &nbsp;<label class="custom-control-label" for="m4">Divide by 4</label>
        </div>
        <div class="tc custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" class="custom-control-input" id="m5">
          &nbsp;<label class="custom-control-label" for="m5">Divide by 5</label>
        </div>
        <div class="tc custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" class="custom-control-input" id="m6">
          &nbsp;<label class="custom-control-label" for="m6">Divide by 6</label>
        </div>
        <div class="tc custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" class="custom-control-input" id="m7">
          &nbsp;<label class="custom-control-label" for="m7">Divide by 7</label>
        </div>
        <div class="tc custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" class="custom-control-input" id="m8">
          &nbsp;<label class="custom-control-label" for="m8">Divide by 8</label>
        </div>
        <div class="tc custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" class="custom-control-input" id="m9">
          &nbsp;<label class="custom-control-label" for="m9">Divide by 9</label>
        </div>
        <div class="tc custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" class="custom-control-input" id="m10">
          &nbsp;<label class="custom-control-label" for="m10">Divide by 10</label>
        </div>
        <div class="tc custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" class="custom-control-input" id="m11">
          &nbsp;<label class="custom-control-label" for="m11">Divide by 11</label>
        </div>
        <div class="tc custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" class="custom-control-input" id="m12">
          &nbsp;<label class="custom-control-label" for="m12">Divide by 12</label>
        </div>
      </div><br>
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
      <button class="btn btn-primary" onclick="onSubmit()" id="submit" disabled>Go!</button>
    </div>
    <div class="jumbotron d-none" id="questionbox" style="background-color: #a5eaff; text-align: center;">
      <div id="correctawrong" style="top: 8px; right: 8px">Correct: <span id="correct">0</span> &nbsp; Wrong: <span id="wrong">0</span></div>
      <div id="questionon" style="top: 8px; left: 8px"><span id="qon">1</span>/<span id="numoq"></span></div>
      <p>Enter the answer like this: the quotient, space, "R", then the remainder. For example, 10 R2.</p>
      <div id="numq" class="text-center" style="font-weight: bold"></div>
      <br>
      <input type="text" id="response" style="margin: auto; width: 75%" oninput="if(this.value != '') $('#check').prop('disabled', false); else $('#check').prop('disabled', true);" class="form-control">
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
      </div><br>
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
        page: 'Division With Remainders (Mental Math)'
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
      if(secs < 10) secs = '0' + secs;
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
      var num1 = tables[Math.floor(Math.random() * tables.length)];
      var num2 = Math.floor(Math.random() * 12) + 1;
      var div1 = num1 * num2; // end copied code
      div1 += Math.floor(Math.random() * num1); // start copied code
      var div2 = num1; // end copied code
      return [div1 + ' &divide; ' + div2, Math.floor(div1 / div2) + 'R' + (div1 % div2)]; // start copied code
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
      $('#numq').css('color', '#888686'); // end copied code
      var isCorrect = arguments[0] ? false : ((response.val().replace(/ /g, '').toLowerCase() == question[1].toLowerCase()) || (response.val().replace(/ /g, '').toLowerCase() == question[1].toLowerCase().replace(/r0/, ''))); // start copied code
      if (isCorrect) {
        correct++;
        message.css('color', 'green').text('Correct');
      } else {
        wrong++;
        message.css('color', 'red').text('Sorry, that is not correct. The correct answer is: ' + question[1].replace(/R/g, ' R'));
      }
      $('input').blur();
      questionsAnswered.push({
        studentAnswered: response.val(),
        correctAnswer: question[1],
        question: question[0].replace(/\&divide;/g, '/'),
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
      $('.tc [type="checkbox"]').click(function() {
        var anyChecked = false;
        $('.tc [type="checkbox"]').each(function(key, el) {
          if (el.checked) anyChecked = true;
        });
        changeValidity(anyChecked);
      });
    });

  </script>
</body>

</html><!-- end copied code -->
