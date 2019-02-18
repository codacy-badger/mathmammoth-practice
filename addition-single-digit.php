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
  <title>Basic Addition &amp; Subtraction Facts &mdash; Online Practice (grades 1-2)</title>
</head>

<body>
  <?php $page = 'addition-single-digit'; include 'header.php'; ?>
  <div class="container">
    <div class="jumbotron" id="form" style="background-color: #a5eaff">
      <h1 class="text-center">Basic Addition &amp; Subtraction Facts &mdash; Online Practice (grades 1-2)</h1>
      <p>On this page, you can practice the basic addition and subtraction facts with single-digit addends (such as 4 + 5, 9 + 7, 9 &minus; 4, 12 &minus; 8).</p>
      
      <p>You can practice addition facts, subtraction facts, and missing addend problems (missing number additions).</p>
      
         <p>For first grade, choose basic facts where the sum is 10 or less, and for second grade, choose basic facts where the sum is 20 or less.  Additionally you can select timed or untimed practice and the number of practice problems.</p>
      
       <p class="mb-4">Further options for <i>addition only</i> include: adding with zero, doubles, doubles plus one, nine trick (or adding with 9), and the eight-trick (or adding with 8).</p>
<br>

      <!-- end copied code -->
      
      <div id="tenOrEighteen">
        <input type="radio" name="1018" id="10less"> 
        <label for="10less">Basic facts within 10 &mdash; 1st grade (the biggest number is 10 or less)</label><br>
        <input type="radio" name="1018" checked id="18less"> 
        <label for="18less">Basic facts within 20 &mdash; 2nd grade (the biggest number is 20 or less)</label>
      </div><br>
      

      
      Choose the types of <i>addition</i> problems:<br><br>
      <div id="problemTypes">
      
        <input type="checkbox" id="general" checked> 
        <label for="general">General (any, e.g. 2 + 7, 5 + 3)</label><br>
        
        <input type="checkbox" id="withZero"> 
        <label for="withZero">With zero (e.g. 0 + 4, 7 + 0)</label><br>

        <input type="checkbox" id="doubles"> 
        <label for="doubles">Doubles</label><br>

        <input type="checkbox" id="doublesPlus1"> 
        <label for="doublesPlus1">Doubles + 1 (e.g. 8 + 9, 6 + 5, 3 + 4)</label><br>

        <input type="checkbox" id="9trick"> 
        <label for="9trick">9 Trick (or add to 9, e.g. 9 + 2, 3 + 9, 9 + 6)</label><br>

        <input type="checkbox" id="8trick"> 
        <label for="8trick">8 Trick (or add to 8, e.g. 8 + 7, 1 + 8, 8 + 3)</label><br>
        <br>

Instead of addition, or in addition to it &#x1F601;, you can also choose to have missing addend and/or subtraction problems:
        
        <br><br>
        <input type="checkbox" id="missingAddend"> 
        <label for="missingAddend">Missing addend (e.g. 2 + ___ = 8)</label><br>

        <input type="checkbox" id="subtraction"> 
        <label for="subtraction">Subtraction (e.g. 8 &minus; 6)</label>
      <br>
      

      </div><br><!-- start copied code -->
      <div class="tonanoq switch" style="transition: opacity .3s" onclick="$('#checkbox').prop('checked', false); $('.pfst').css('opacity', 0.6); $('.pfst').css('cursor', 'default'); this.style.opacity = 1; this.style.cursor = 'auto';">
        <div class="timed">
          <input type="radio" name="timed" id="ty" data-val="yes"> <label for="ty">Timed practice (5 sec per answer)</label><br>
          <input name="timed" type="radio" checked id="tn" data-val="no"> <label for="tn">Not timed</label>
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
      <input type="number" id="response" style="margin: auto; width: 75%" oninput="if(this.value != '') $('#check').prop('disabled', false); else $('#check').prop('disabled', true);" class="form-control">
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

    // end copied code
    function randomNumberGeneral() {
        var rnd = Math.floor(Math.random() * (window.withZero.prop('checked') ? 10 : 9)) + (window.withZero.prop('checked') ? 0 : 1);
        return rnd;
    }
    function rndsGen10less() {
        var rnd1 = randomNumberGeneral();
        var rnd2 = randomNumberGeneral();
        while((rnd1 + rnd2) > 10) {
            console.log('redo', rnd1, rnd2);
            rnd1 = randomNumberGeneral();
            rnd2 = randomNumberGeneral();
        }
        var way = Math.round(Math.random());
        return `${way ? rnd1 : rnd2} + ${way ? rnd2 : rnd1}`;
    }
    function rndsDoubles18less() {
        var rnd = randomNumberGeneral();
        return `${rnd} + ${rnd}`;
    }
    function rndsDoubles118less() {
        var rnd = randomNumberGeneral();
        var way = Math.round(Math.random());
        return `${way ? rnd : (rnd+1)} + ${way ? (rnd+1) : rnd}`;
    }
    function trick918less() {
        var rnd = randomNumberGeneral();
        var way = Math.round(Math.random());
        return `${way ? 9 : rnd} + ${way ? rnd : 9}`;
    }
    function trick818less() {
        var rnd = randomNumberGeneral();
        var way = Math.round(Math.random());
        return `${way ? 8 : rnd} + ${way ? rnd : 8}`;
    }
    function missingAddend18less() {
        var rnd1 = randomNumberGeneral();
        var rnd2 = randomNumberGeneral();
        var way1 = Math.round(Math.random());
        if(way1) {
          var temp = rnd1;
          rnd1 = rnd2;
          rnd2 = temp;
        }
        var way = Math.round(Math.random());
        return `${way ? rnd1 : "___"} + ${way ? "___" : rnd2} = ${rnd1 + rnd2}`;
    }
    function subtraction18less() {
        var rnd1 = randomNumberGeneral();
        var rnd2 = randomNumberGeneral();
        var way1 = Math.round(Math.random());
        if(way1) {
          var temp = rnd1;
          rnd1 = rnd2;
          rnd2 = temp;
        }
        var way = Math.round(Math.random());
        return `${rnd1 + rnd2} - ${way ? rnd1 : rnd2}`;
    }
    function rndsGen18less() {
        var rnd1 = randomNumberGeneral();
        var rnd2 = randomNumberGeneral();
        var way = Math.round(Math.random());
        return `${way ? rnd1 : rnd2} + ${way ? rnd2 : rnd1}`;
    }
    function rndsDoubles10less() {
        var rnd = randomNumberGeneral();
        while((rnd + rnd) > 10) {
            console.log('redo', rnd);
            rnd = randomNumberGeneral();
        }
        return `${rnd} + ${rnd}`;
    }
    function rndsDoubles110less() {
        var rnd = randomNumberGeneral();
        while((rnd + (rnd + 1)) > 10) {
            console.log('redo', rnd);
            rnd = randomNumberGeneral();
        }
        var way = Math.round(Math.random());
        return `${way ? rnd : (rnd+1)} + ${way ? (rnd+1) : rnd}`;
    }
    function trick910less() {
        var rnd = randomNumberGeneral();
        while((rnd + 9) > 10) {
            console.log('redo', rnd);
            rnd = randomNumberGeneral();
        }
        var way = Math.round(Math.random());
        return `${way ? 9 : rnd} + ${way ? rnd : 9}`;
    }
    function trick810less() {
        var rnd = randomNumberGeneral();
        while((rnd + 8) > 10) {
            console.log('redo', rnd);
            rnd = randomNumberGeneral();
        }
        var way = Math.round(Math.random());
        return `${way ? 8 : rnd} + ${way ? rnd : 8}`;
    }
    function missingAddend10less() {
        var rnd1 = randomNumberGeneral();
        var rnd2 = randomNumberGeneral();
        while((rnd1 + rnd2) > 10) {
            console.log('redo', rnd1, rnd2);
            rnd1 = randomNumberGeneral();
            rnd2 = randomNumberGeneral();
        }
        var way1 = Math.round(Math.random());
        if(way1) {
          var temp = rnd1;
          rnd1 = rnd2;
          rnd2 = temp;
        }
        var way = Math.round(Math.random());
        return `${way ? rnd1 : "___"} + ${way ? "___" : rnd2} = ${rnd1 + rnd2}`;
    }
    function subtraction10less() {
        var rnd1 = randomNumberGeneral();
        var rnd2 = randomNumberGeneral();
        while((rnd1 + rnd2) > 10) {
            console.log('redo', rnd1, rnd2);
            rnd1 = randomNumberGeneral();
            rnd2 = randomNumberGeneral();
        }
        var way1 = Math.round(Math.random());
        if(way1) {
          var temp = rnd1;
          rnd1 = rnd2;
          rnd2 = temp;
        }
        var way = Math.round(Math.random());
        return `${rnd1 + rnd2} - ${way ? rnd1 : rnd2}`;
    } // 30 lines
    // start copied code

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
        page: 'Single Digit Addition'
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
      var anyChecked = false;
      /* end copied code */ for (var key in problemTypes) {
        if(problemTypes[key].prop('checked')) {
          anyChecked = true;
        }
      }
      if(!anyChecked) {
        problemTypes.general.prop('checked', true);
      } /* start copied code */
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

    function questionGenerator() {
      var possibleProblems = [];
      for (var key in problemTypes) {
        var quest;
        console.log(problemTypes, key, problemTypes[key]);
        if($('#10less').prop('checked') && problemTypes[key].prop('checked')) {
          switch(key) {
            case 'doubles':
              quest = rndsDoubles10less();
              break;
            case 'doubles1':
              quest = rndsDoubles110less();
              break;
            case 'general':
              quest = rndsGen10less();
              break;
            case 'missingAddend':
              quest = missingAddend10less();
              break;
            case 'subtraction':
              quest = subtraction10less();
              break;
            case 'trick9':
              quest = trick910less();
              break;
            case 'trick8':
              quest = trick810less();
              break;
          }
        }
        if($('#18less').prop('checked') && problemTypes[key].prop('checked')) {
          switch(key) {
            case 'doubles':
              quest = rndsDoubles18less();
              break;
            case 'doubles1':
              quest = rndsDoubles118less();
              break;
            case 'general':
              quest = rndsGen18less();
              break;
            case 'missingAddend':
              quest = missingAddend18less();
              break;
            case 'subtraction':
              quest = subtraction18less();
              break;
            case 'trick9':
              quest = trick918less();
              break;
            case 'trick8':
              quest = trick818less();
              break;
          }
        }
        if(quest) possibleProblems.push(quest);
      }
      var quest = possibleProblems[Math.floor(Math.random() * possibleProblems.length)];
      console.log(quest);
      if(quest.indexOf('___') == -1) eval('var answer = ' + quest + ';');
      else if(quest.indexOf(' + ___') != -1) eval('var answer = ' + quest.replace(' + ___ =', '').split(' ').reverse().join(' - ') + ';');
      else eval('var answer = ' + quest.replace('___ + ', '').split(' = ').reverse().join(' - ') + ';');
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
      /* end copied code */ window.problemTypes = {
        doubles: $('#doubles'),
        doubles1: $('#doublesPlus1'),
        trick9: $('#9trick'),
        trick8: $('#8trick'),
        general: $('#general'),
        missingAddend: $('#missingAddend'),
        subtraction: $('#subtraction')
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
