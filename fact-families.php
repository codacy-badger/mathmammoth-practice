<!-- start copied code --><!DOCTYPE html>
<html lang="en-US">

<head>
  <?php include 'header-head.php'; ?>
  <link rel="stylesheet" href="practice.css">
  <title>Addition &amp; Subtraction Fact Families &mdash; Online Practice (grades 1-2)</title>
</head>

<body>
  <?php $page = 'factfam-addsub'; include 'header.php'; ?>
  <div class="container">
    <div class="jumbotron" id="form" style="background-color: #a5eaff">
      <h1 class="text-center">
        Addition &amp; Subtraction Fact Families<br>
        <span style="font-size: 1.5rem">Online practice for grades 1-2</span>
      </h1>
      <p>Here you can practice the basic addition and subtraction facts using the fact families approach. This approach is used in the Math Mammoth curriculum (<a href="/complete/grade_1.php">grade 1</a> and <a href="/complete/grade_2.php">grade 2</a>).</p>
      <p>For example, if you choose to practice fact families with 6, you will get addition and subtraction facts from various fact families with the sum of 6:</p>

      <div style="float:left; margin:10px; padding:6px; background-color:#FFFFA0; border-radius: 10px">
        0 + 6 = 6<br>
        6 + 0 = 6<br>
        6 &minus; 0 = 6<br>
        6 &minus; 6 = 0
      </div>
      <div style="float:left; margin:10px; padding:6px; background-color:#FFFFA0; border-radius: 10px">
        1 + 5 = 6<br>
        5 + 1 = 6<br>
        6 &minus; 1 = 5<br>
        6 &minus; 5 = 1
      </div>
      <div style="float:left; margin:10px; padding:6px; background-color:#FFFFA0; border-radius: 10px">
        2 + 4 = 6<br>
        4 + 2 = 6<br>
        6 &minus; 2 = 4<br>
        6 &minus; 4 = 2
      </div>
      <div style="float:left; margin:10px; padding:6px; background-color:#FFFFA0; border-radius: 10px">
        3 + 3 = 6<br>
        3 + 3 = 6<br>
        6 &minus; 3 = 3<br>
        6 &minus; 3 = 3
      </div>
      <div style="clear: both"></div>

      <p>You can choose which fact families to practice. The program will give you both addition and subtraction facts from those
      families, including missing number additions and subtractions.</p>

      <p class="mb-4">For first grade, choose fact families through 10, and for second grade, choose, in particular,  fact families from 11 through 18.</p>
      <p>Additionally you can select timed or untimed practice and the number of practice problems.</p>
      <br>
      <hr>
      <br>
      <!-- end copied code -->
      <div id="factfam-nums"></div><br>
      <div id="addends">
        <div class="custom-control custom-radio">
          <input type="radio" name="addend" checked id="addend-sd" data-val="single" class="custom-control-input">
          <label for="addend-sd" class="custom-control-label">Use only addends up to 10 (recommended if your main purpose is to practice basic addition &amp; subtraction facts)</label>
        </div>
        <div class="custom-control custom-radio">
          <input name="addend" type="radio" id="addend-all" data-val="all" class="custom-control-input">
          <label for="addend-all" class="custom-control-label">Use all addends (e.g. 12 + 3 will be included for fact families with 15)</label>
        </div>
      </div><br>
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
            <option value="10" selected>10</option>
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
        page: 'Fact Families - Addition & Subtraction'
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
      window.mode = $('.switch:eq(0)').prop('style').opacity == '0.6' ? 'settime' : 'timeq';
      var anyChecked = false;
      for (var key in factFamiliesEls) {
        if(factFamiliesEls[key].prop('checked')) {
          anyChecked = true;
        }
      }
      if(!anyChecked) {
        alert('Please select some fact families to practice!');
        return;
      }
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
    function rand(min, max) {
      return Math.floor(Math.random() * (max - (min - 1))) + min;
    }
    // start copied code

    function questionGenerator() {
      var quest;
      // end copied code
      var possibleFactFams = [];
      for (var factFam in factFamiliesEls) {
        if(factFamiliesEls[factFam].prop('checked')) {
          possibleFactFams.push(factFam);
        }
      }
      var factFam = possibleFactFams[Math.floor(Math.random() * possibleFactFams.length)];
      var num1 = rand(1, factFam);
      var num2 = factFam - num1;
      var type = rand(1, 10);
      if($('#addend-sd').prop('checked')) {
        while (num1 > 10 || num2 > 10) {
          num1 = rand(1, factFam);
          num2 = factFam - num1;
        }
      }
      switch(type) {
        case 1:
        case 2:
          // 5 + 4 = _
          var way = Math.round(Math.random());
          quest = (way ? num1 : num2) + ' + ' + (way ? num2 : num1);
          break;
        case 3:
        case 4:
        case 5:
          // 5 + _ = 9
          var way = Math.round(Math.random());
          quest = (way ? num1 : '___') + ' + ' + (way ? '___' : num2) + ' = ' + factFam;
          break;
        case 6:
        case 7:
          // 9 - _ = 4
          var way = Math.round(Math.random());
          quest = (way ? '___' : factFam) + ' - ' + (way ? num1 : '___') + ' = ' + num2;
          break;
        case 8:
        case 9:
        case 10:
          // 9 - 5 = _
          var way = Math.round(Math.random());
          quest = factFam + ' - ' + (way ? num1 : num2);
          break;
      }
      var answer;
      if(quest.indexOf('___') < 0) {
        eval('answer = ' + quest + ';');
      } else {
        if(quest.indexOf('+') > -1) {
          if(quest.indexOf('___') == 0) {
            eval('answer = ' + quest.split(' = ')[1] + ' - ' + quest.split(' + ')[1].split(' = ')[0]);
          } else {
            eval('answer = ' + quest.split(' = ')[1] + ' - ' + quest.split(' + ')[0]);
          }
        } else {
          if(quest.indexOf('___') == 0) {
            eval('answer = ' + quest.split(' = ')[1] + ' + ' + quest.split(' - ')[1].split(' = ')[0]);
          } else {
            eval('answer = ' + quest.split(' = ')[0].split(' - ')[0] + ' - ' + quest.split(' = ')[1]);
          }
        }
      }
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
      window.factFamiliesEls = {};
      // end copied code
      for (var factFamNum = 4; factFamNum <= 20; factFamNum++) {
        $('#factfam-nums')
          .append(
            $('<div>')
              .addClass('tc custom-control custom-checkbox custom-control-inline')
              .append(
                $('<input>')
                  .attr('type', 'checkbox')
                  .attr('id', 'factfam-num-' + factFamNum)
                  .attr('data-factfam', factFamNum)
                  .addClass('custom-control-input')
              ).append($(document.createTextNode("\n"))).append(
                $('<label>')
                  .attr('for', 'factfam-num-' + factFamNum)
                  .text('Fact families for ' + factFamNum)
                  .addClass('custom-control-label')
              )
          ); // 10 lines
        factFamiliesEls[factFamNum] = $('#factfam-num-' + factFamNum);
      }
      // start copied code
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
