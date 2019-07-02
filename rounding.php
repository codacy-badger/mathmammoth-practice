<!DOCTYPE html>
<html lang="en-US">

<head>
  <?php include 'header-head.php'; ?>
  <link rel="stylesheet" href="practice.css">
  <title>Rounding Whole Numbers &amp; Decimals &mdash; Online Practice (grades 1-6)</title>
</head>

<body>
  <?php $page = 'rounding'; include 'header.php'; ?>
  <div class="container rounding-page">
    <div class="jumbotron" id="form" style="background-color: #a5eaff">
      <h1 class="text-center">
        Rounding Whole Numbers &amp; Decimals<br>
        <span style="font-size: 1.5rem">Online practice for grades 1-6</span>
      </h1>
      <div class="sharethis-inline-share-buttons"></div>
      <p>On this page, you can practice rounding whole numbers to the nearest ten, nearest hundred, nearest thousand, and so on. You can use this online practice for all elementary grades (grades 1-6). </p>

      <p>This free, online practice program can also be installed offline as an app in your phone or tablet, depending on your browser and operating system. To install it, click on the "Add to home screen" button at the bottom of the page. On Android Chrome, click on the three dots, and then "Add to home screen". If you don't see the button or the "Add to home screen" option, then you probably cannot install this app in your browser.</p>

      <p>Use these quick links for some common options for rounding practice for different grade levels.</p>

      <p><a href="javascript:location.href='/practice/rounding#number-range=0to100&round-to=ten';location.reload();">1st and 2nd grades: round to the nearest ten, within 0-100</a></p>
      <p><a href="javascript:location.href='/practice/rounding#number-range=0to1000&round-to=ten,hundred';location.reload();">3rd grade: round to the nearest ten and nearest hundred, within 0-1,000</a></p>
      <p><a href="javascript:location.href='/practice/rounding#number-range=0to10000&round-to=thousand';location.reload();">3rd grade: round to the nearest thousand, within 0-10,000</a></p>
      <p><a href="javascript:location.href='/practice/rounding#number-range=0to1000000&round-to=any-place';location.reload();">4th grade: round to any place, within 0-1,000,000</a></p>
      <p><a href="javascript:location.href='/practice/rounding#number-range=0to1000000000&round-to=any-place';location.reload();">5th grade: round to any place, within 0-1,000,000,000</a></p>
      <p><a href="javascript:location.href='/practice/rounding#number-range=decimals&decimal-place=3';location.reload();">5th grade: round decimals (up to 3 decimal digits)</a></p>
      <p><a href="javascript:location.href='/practice/rounding#number-range=decimals&decimal-place=6';location.reload();">6th grade: round decimals (up to 6 decimal digits)</a></p>

      <div class="form-group mt-4">
        <label for="number-range">Number range:</label>
        <div id="number-range">
          <div class="custom-control custom-radio">
            <input type="radio" name="number-range-input" id="0to100" data-val="0to100" class="custom-control-input">
            <label for="0to100" class="custom-control-label">0 - 100</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" name="number-range-input" id="0to1000" data-val="0to1000" class="custom-control-input">
            <label for="0to1000" class="custom-control-label">0 - 1,000</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" name="number-range-input" id="0to10000" data-val="0to10000" class="custom-control-input">
            <label for="0to10000" class="custom-control-label">0 - 10,000</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" name="number-range-input" id="0to100000" data-val="0to100000" class="custom-control-input">
            <label for="0to100000" class="custom-control-label">0 - 100,000</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" name="number-range-input" id="0to1000000" data-val="0to1000000" class="custom-control-input">
            <label for="0to1000000" class="custom-control-label">0 - 1,000,000</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" name="number-range-input" id="0to1000000000" data-val="0to1000000000" class="custom-control-input">
            <label for="0to1000000000" class="custom-control-label">0 - 1,000,000,000</label>
          </div>
          <div class="custom-control custom-radio decimal-container">
            <input type="radio" name="number-range-input" id="decimals" data-val="decimals" class="custom-control-input">
            <label for="decimals" class="custom-control-label">
              Decimals up to
              <select class="my-select">
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4" selected>4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="9">9</option>
              </select>
              decimal digits
            </label>
          </div>
        </div>
      </div>
      <div class="form-group round-to-container">
        <label for="round-to">Round to:</label>
        <div id="round-to">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" id="round-to-nearest-ten" data-val="nearest-ten" class="custom-control-input">
            <label for="round-to-nearest-ten" class="custom-control-label">The nearest ten</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" id="round-to-nearest-hundred" data-val="nearest-hundred" class="custom-control-input">
            <label for="round-to-nearest-hundred" class="custom-control-label">The nearest hundred</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" id="round-to-nearest-thousand" data-val="nearest-thousand" class="custom-control-input">
            <label for="round-to-nearest-thousand" class="custom-control-label">The nearest thousand</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" id="round-to-nearest-ten-thousand" data-val="nearest-ten-thousand" class="custom-control-input">
            <label for="round-to-nearest-ten-thousand" class="custom-control-label">The nearest ten thousand</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" id="round-to-nearest-hundred-thousand" data-val="nearest-hundred-thousand" class="custom-control-input">
            <label for="round-to-nearest-hundred-thousand" class="custom-control-label">The nearest hundred thousand</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" id="round-to-nearest-million" data-val="nearest-million" class="custom-control-input">
            <label for="round-to-nearest-million" class="custom-control-label">The nearest million</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" id="round-to-any-place" data-val="any-place" class="custom-control-input">
            <label for="round-to-any-place" class="custom-control-label">Any place</label>
          </div>
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
    <div class="jumbotron d-none" id="questionbox" style="background-color: #a5eaff; text-align: center;">
      <div id="correctawrong" style="top: 8px; right: 8px">Correct: <span id="correct">0</span> &nbsp; Wrong: <span id="wrong">0</span></div>
      <div id="questionon" style="top: 8px; left: 8px"><span id="qon">1</span>/<span id="numoq"></span></div>
      <div id="numq" class="text-center" style="font-weight: bold"></div>
      <br>
      <input
        type="text"
        pattern="[0-9,.]+"
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
    // quick links
    var params = new URLSearchParams(location.hash.replace('#', ''));
    if (['5', '10', '15', '20', '25', '30'].indexOf(params.get('question-number')) > -1) {
      $('#noq').val(params.get('question-number'));
    }
    $('#number-range input[data-val="' + params.get('number-range') + '"]').prop('checked', true);
    if (params.get('number-range') == 'decimals') {
      $('.round-to-container').slideUp(300);
    }
    if (['2', '3', '4', '5', '6', '9'].indexOf(params.get('decimal-place')) > -1) {
      $('.my-select').val(params.get('decimal-place'));
    }
    var split = typeof params.get('round-to') == 'string' ? params.get('round-to').split(',') : [];
    for (var i = 0; i < split.length; i++) {
      $('#round-to input[data-val="' + split[i] + '"], ' + '#round-to input[data-val="nearest-' + split[i] + '"]').prop('checked', true);
    }
    // end quick links

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

    function wordToNum(name) {
      switch (name) {
        case 'one': return 1; break;
        case 'ten': return 10; break;
        case 'hundred': return 100; break;
        case 'thousand': return 1000; break;
        case 'ten-thousand': return 10000; break;
        case 'hundred-thousand': return 100000; break;
        case 'million': return 1000000; break;
        case 'ten-million': return 10000000; break;
        case 'hundred-million': return 100000000; break;
        case 'billion': return 1000000000; break;
      }
      return 'unknown';
    }

    function numToWord(num) {
      switch (num) {
        case 1: return 'one'; break;
        case 10: return 'ten'; break;
        case 100: return 'hundred'; break;
        case 1000: return 'thousand'; break;
        case 10000: return 'ten-thousand'; break;
        case 100000: return 'hundred-thousand'; break;
        case 1000000: return 'million'; break;
        case 10000000: return 'ten-million'; break;
        case 100000000: return 'hundred-million'; break;
        case 1000000000: return 'billion'; break;
      }
      return null;
    }

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
      window.numberRange = $('[name="number-range-input"]').filter(function(i, el) {
        if (!el.checked) {
          return false;
        }
        return true;
      }).data('val');
      if (!window.numberRange) {
        alert('Please select a number range.');
        return;
      }
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

    function questionGenerator() {
      var number;
      var range;
      var isDecimal;
      var selectVal = document.querySelector('.my-select').value;
      var decimalDigits = random(selectVal == 9 ? 5 : 2, parseInt(selectVal));
      var decimalUnit = random(selectVal == 9 ? 3 : 0, decimalDigits - 1);
      var unit = parseInt('1' + '0'.repeat(decimalUnit));
      if (numberRange != 'decimals') {
        range = numberRange.split('to');
      } else {
        isDecimal = true;
      }
      if (isDecimal) {
        number = (Math.random() + random(0, 20)).toFixed(decimalDigits);
        while (number.toString().split('')[number.toString().length - 1] == '0') {
          number = (Math.random() + random(0, 20)).toFixed(decimalDigits);
        }
        if ((number.toString().length - 2) == (unit.length - 3)) {
          console.log('slicing', unit.slice(0, -3));
          unit = unit.slice(0, -3);
        }
        if (selectVal == 9) {
          unit = unit.toString().match(/0/g).length + ' decimals';
        } else {
          unit = numToWord(parseInt(unit)) + 'th';
        }
      } else {
        if (document.querySelector('#round-to-any-place').checked || $('[id*="round-to-"]').length == 0) {
          var zeros = random(1, range[1].toString().match(/0/g).length);
          unit = putCommasInNumber(parseInt('1' + '0'.repeat(zeros)));
        } else {
          var zeros;
          var nearestBoxes = document.querySelectorAll('[id*="round-to-"]');
          if (nearestBoxes.length == 0) {
            zeros = random(1, 6);
          }
          for (var i = 0; i < nearestBoxes.length; i++) {
            var box = nearestBoxes[i];
            if (box.checked) {
              var name = box.getAttribute('data-val') ? box.getAttribute('data-val').replace('nearest-', '') : 'any-place';
              var maxZeros;
              switch (name) {
                case 'ten': maxZeros = 1; break;
                case 'hundred': maxZeros = 2; break;
                case 'thousand': maxZeros = 3; break;
                case 'ten-thousand': maxZeros = 4; break;
                case 'hundred-thousand': maxZeros = 5; break;
                case 'million': maxZeros = 6; break;
              }
              zeros = random(1, maxZeros);
            }
          }
          unit = putCommasInNumber(parseInt('1' + '0'.repeat(zeros)));
        }
        number = putCommasInNumber(random(parseInt(range[0]), parseInt(range[1])));
      }
      unit = unit.toString().replace(/oneth/g, 'one').replace(/0 decimals/g, 'one');
      var question = 'Round ' + number + ' to ' + (isDecimal && selectVal == 9 ? unit : ('the nearest ' + unit)) + '.';
      var answer;
      if (isDecimal) {
        var numFromWord;
        if (selectVal == 9) {
          numFromWord = '1' + '0'.repeat(unit.replace(/ decimals/g, ''));
        } else {
          numFromWord = wordToNum(unit == 'one' ? unit : unit.slice(0, -2));
        }
        answer = roundDecimal(number, parseInt(numFromWord));
      } else {
        answer = roundWholeNum(number.replace(/,/g, ''), parseInt(unit.replace(/,/g, '')));
      }
      console.log(question, answer);
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
        return el == '.' || parseInt(el) == el;
      }).join('');
      var correctExpress = parseInt(studentAnswer) == parseInt(question[1]);
      if (numberRange == 'decimals') {
        correctExpress = parseFloat(studentAnswer) == parseFloat(question[1]);
      }
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
      $('#number-range .custom-control:not(.decimal-container)').each(function(i, el) {
        $(el).click(function() {
          $('.round-to-container').slideDown(300);
        });
      });
      $('.decimal-container')[0].addEventListener('click', function(e) {
        if (e.target.tagName == 'SELECT') {
          return;
        }
        $('.round-to-container').slideUp(300);
      }, true);
      if (location.hash.replace('#', '').length >= 1) {
        $('#submit').click();
      }
    });
  </script>
</body>

</html>
