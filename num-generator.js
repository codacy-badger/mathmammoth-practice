var vals = {};
var gridSize = 12;
var numPairs = gridSize / 2;
var userChoice = 'hard';

function generatePairs(denominators, level) {
  vals[level] = {};
  let num = level == 'medium' ? numPairs - 2 : numPairs;
  for (var i = 0; i < num; i++) {
    var denominator = denominators[Math.floor(Math.random() * denominators.length)];
    var numerator = Math.floor(Math.random() * (denominator - 1)) + 1;
    vals[level][numerator / denominator] = [numerator, denominator];
  }
  if (level == 'medium') {
    let numerator = Math.floor(Math.random() * 4) + 1;
    vals.medium[numerator / 5] = [numerator, 5];
    numerator = Math.floor(Math.random() * 9) + 1;
    vals.medium[numerator / 10] = [numerator, 10];
  }
}

if (userChoice == 'easy') {
  vals.easy = {
    0.25: [1, 4],
    0.4: [2, 5],
    0.2: [1, 5],
    0.1: [1, 10],
    0.6: [3, 5],
    0.7: [7, 10],
    0.8: [4, 5],
    0.9: [9, 10],
    0.3: [3, 10],
    0.5: [1, 2],
    0.75: [3, 4]
  };
} else if (userChoice == 'medium') {
  generatePairs([20, 25, 50, 100], 'medium');
} else {
  generatePairs([1000, 500, 8, 200, 100, 40, 50, 250, 125], 'hard');
}

console.log(vals);