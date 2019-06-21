function roundDecimal(num, th) {
  return Math.round(num * th) / th;
}

function roundWholeNum(num, to) {
  return Math.round(num / to) * to;
}