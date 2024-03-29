<!DOCTYPE html>
<html lang="en-US">

<head>
  <?php include 'header-head.php'; ?>
  <link rel="stylesheet" href="practice.css">
  <script>
    if (!Array.prototype.includes) {
      Array.prototype.includes = function(key) {
        return this.indexOf(key) > -1;
      };
    }
    var questionsAnswered = [];
    var everything = function () {
      $('#go').click(function () {
        var questions = [];
        var questionon = 0;
        var practiceProblems = +$('#numop').val();
        var found = [];
        var wrong = 0;
        var correct = 0;
        var max = +$('#max').val();
        var min = +$('#min').val();
        for (var y = 0; y < practiceProblems; y++) {
          $('<div>').addClass('pp').appendTo($('#progressbar'));
        }
        $('#numoq').text(practiceProblems);
        if (min > max) {
          var temp = min;
          min = max;
          max = temp;
        }
        if (min == max) {
          alert('Minimum number cannot be the same as the maximum number.');
          return;
        }

        function getRandomNum() {
          var randomNum = randomNumber(min, max);
          if (found.includes(randomNum) && max - min >= (min + (practiceProblems - 1))) {
            randomNum = getRandomNum();
          }
          return randomNum;
        }
        for (var y = 1; y <= practiceProblems; y++) {
          var rn = getRandomNum();
          found.push(rn);
          questions.push(rn);
        }
        $('#practicearea').removeClass('d-none');
        $('#form').addClass('d-none');
        makeQuestion(questions[questionon]);
        $('#check').click(function () {
          if ($('#check').text() == 'Check') {
            if (isCorrect($('#factors').val(), questions[questionon])) {
              $('#check').text('Continue');
              $('.pp').eq(questionon).css('background-color', '#2d932d');
              $('#message').text('Correct!').css('color', 'green');
              correct++;
              $('#correct').text(correct);
            }
            else {
              $('#check').text('Continue');
              $('.pp').eq(questionon).css('background-color', 'salmon');
              $('#message').html('Sorry, that is not correct. <span style="color: black">The factors of ' + questions[questionon] + ' are: ' + getFactors(questions[questionon]).join(', ') + '</span>').css('color', 'red');
              wrong++;
              $('#wrong').text(wrong);
            }
            $('input').blur();
            questionsAnswered.push({
              studentAnswered: $('#factors').val(),
              correctAnswer: getFactors(questions[questionon]).join(', '),
              question: questions[questionon],
              isCorrect: isCorrect($('#factors').val(), questions[questionon])
            });
            $('#factors').attr('disabled', true);
            $('#numq').css('color', '#888686');
          }
          else {
            if (questionon == practiceProblems - 1) {
              end(wrong, correct, practiceProblems);
            }
            else {
              $('#numq').css('color', 'black');
              $('#check').text('Check');
              questionon++;
              $('#qon').text(questionon + 1);
              $('#factors').attr('disabled', false);
              makeQuestion(questions[questionon]);
            }
          }
        });
      });
    };
    $(document).ready(everything);

    function randomNumber(min, max) {
      return Math.round(Math.random() * (max - min) + min);
    }

    function makeQuestion(question) {
      $('#check').text('Check');
      $('#numq').text(question);
      $('#factors').val('').focus();
      $('#check').attr('disabled', true);
      $('#message').empty();
    }

    function getFactors(number) {
      var factors = [];
      if (number >= 0) {
        for (var i = 1; i <= number; i++) {
          if (number % i == 0) {
            factors.push(i);
          }
        }
      }
      else {
        for (var i = 0; i >= number; i--) {
          if (number % i == 0) {
            factors.push(i);
          }
        }
      }
      return factors;
    }

    function isCorrect(answer, number) {
      answer = answer.replace(/ /g, '');
      if (answer.split('')[0] == ',') {
        var temp = answer.split('');
        temp[0] = '';
        answer = temp.join('');
      }
      if (answer.split('')[answer.split('').length - 1] == ',') {
        var temp = answer.split('');
        temp[temp.length - 1] = '';
        answer = temp.join('');
      }
      answer = answer.trim();
      answer = answer.split(',');
      var ndanswer = [];
      for (var y = 0; y < answer.length; y++) {
        answer[y] = +answer[y];
        if(!ndanswer.includes(answer[y])) ndanswer.push(answer[y]);
      }
      answer = ndanswer;
      answer.sort();
      return JSON.stringify(getFactors(number).sort()) == JSON.stringify(answer);
    }

    function end(wrong, correct, noq) {
      $('#end').removeClass('d-none');
      $('#practicearea').addClass('d-none');
      var wrongp = ((wrong / noq) * 100).toFixed(1);
      var correctp = ((correct / noq) * 100).toFixed(1);
      $('#wronge').text(wrong + ' (' + wrongp + '%)');
      $('#correcte').text(correct + ' (' + correctp + '%)');
      $('#wend').css('width', wrongp + '%');
      $('#cend').css('width', correctp + '%');
      if (wrongp == 0) {
        $('#cend').css('border-top-left-radius', '7px');
        $('#cend').css('border-bottom-left-radius', '7px');
      }
      if (correctp == 0) {
        $('#wend').css('border-top-right-radius', '7px');
        $('#wend').css('border-bottom-right-radius', '7px');
      }
    }

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
        page: 'Find the Factors'
      }).always(function() {
        $('#sendResults').text('Click to resend');
        $('#sendResults').prop('disabled', false);
      });
    }
  </script>
  <title>Find the Factors &mdash; Online Practice (grades 4-6)</title>
  <meta property="og:title" content="Find the Factors">
  <meta property="og:description" content="You can practice finding all the factors of a given number.">
  <meta property="og:image" content="https://www.mathmammoth.com/practice/find-factors.jpg">
  <meta property="og:image:secure_url" content="https://www.mathmammoth.com/practice/find-factors.jpg" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="853" />
  <meta property="og:image:height" content="563" />
  <meta property="og:image:alt" content="Find the Factors" />
  <meta property="og:url" content="https://www.mathmammoth.com/practice/factorfind">
  <meta property="og:site_name" content="Math Mammoth Practice">
  <meta property="og:locale" content="en_US" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image:alt" content="Find the Factors">
</head>

<body onkeydown="if(event.keyCode == 13 && !$('#practicearea').hasClass('d-none') && !$('#check').attr('disabled')) { $('#check').click(); }">
  <?php $page = 'findfactors'; include 'header.php'; ?>
  <div class="container">
    <div class="jumbotron" id="form" style="background-color: #a5eaff">
      <h1 class="text-center">
        Find the Factors<br>
        <span style="font-size: 1.5rem">Online practice for grades 4-6</span>
      </h1>
      <div class="addthis_inline_share_toolbox"></div>
      <div class="row">
        <div class="col-md-6">
          <p class="mb-4">
            On this page, you can practice finding all the factors of a given number. This is usually introduced in grade 4 (but could also be in grade 5 in some places). You can choose the minimum and maximum numbers and the amount of practice problems.
          </p>
          <div class="form-group">
            <label for="numop" style="font-weight: 500">How many practice problems?</label>
            <select class="custom-select" id="numop">
              <option value="5" selected>5</option>
              <option value="10">10</option>
              <option value="15">15</option>
              <option value="20">20</option>
            </select>
          </div>
          <div class="form-group">
            <label for="min" style="font-weight: 500">Minimum number:</label>
            <input type="number" value="5" id="min" class="form-control">
          </div>
          <div class="form-group">
            <label for="max" style="font-weight: 500">Maximum number:</label>
            <select class="custom-select" id="max">
              <option value="50">50</option>
              <option value="100" selected>100</option>
              <option value="200">200</option>
              <option value="500">500</option>
              <option value="1000">1000</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <p>
            Screenshot:<br />
            <img src="find-factors.jpg" class="rounded-lg screenshot" alt="Screenshot of someone finding factors">
          </p>
        </div>
      </div>
      <button id="go" class="btn btn-primary">Go!</button>
    </div>
    <div class="jumbotron d-none" id="practicearea" style="background-color: #a5eaff; text-align: center;">
      <div id="correctawrong" style="top: 8px; right: 8px">Correct: <span id="correct">0</span> &nbsp; Wrong: <span id="wrong">0</span></div>
      <div id="questionon" style="top: 8px; left: 8px"><span id="qon">1</span>/<span id="numoq"></span></div>
      <div class="text-center">Find all the factors of this number. Separate them by commas:</div>
      <div id="numq" class="text-center" style="font-weight: bold"></div>
      <br>
      <input type="text" id="factors" style="margin: auto; width: 75%" oninput="if(this.value != '') $('#check').removeAttr('disabled'); else $('#check').attr('disabled', true);" class="form-control">
      <br>
      <button class="btn btn-primary" id="check" disabled>Check</button>
      <br>
      <br>
      <div id="message"></div>
      <br>
      <br>
      <div id="progressbar"></div>
    </div>
    <div class="jumbotron d-none" id="end" style="background-color: #a5eaff; text-align: center; font-size: 1.3em"> Wrong: <span id="wronge"></span>
      <br> Correct: <span id="correcte"></span>
      <br>
      <br>
      <div id="pb" style="width: 75%; display: inline-block; margin: auto; height: 20px">
        <div id="wend"></div>
        <div id="cend"></div>
      </div><br><br>
      <button class="btn btn-primary" onclick="window.location.reload()">Practice Again</button><br><br>
      <input type="email" class="form-control" id="teacherEmail" oninput="changedEmail()" placeholder="Enter your teacher's email..."><br>
      <div style="text-align: left!important; margin-right: auto!important"><button class="btn btn-primary mr-auto" id="sendResults" onclick="sendResultsToTeacher()">Send Results to Teacher</button></div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>
