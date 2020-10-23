function move() {
  document.getElementById("form1").style.display = "none";
  document.getElementById("form2").style.display = "block";
}

function cookie() {
  var x =  parseFloat (document.cookie.split("=")[1]);
  var y = x / 1.90952380952380952381;
  var z_score = (x - 1.90952380952380952381) / 0.85238095238095238095;
  var m_score = (x - 2.04642857142857142857) / 0.85238095238095238095;
  var f_score = (x - 1.77261904761904761905) / 0.85238095238095238095;

  console.log(z_score);

  function GetZPercent(z) {

    // z == number of standard deviations from the mean
    // if z is greater than 6.5 standard deviations from the mean the
    // number of significant digits will be outside of a reasonable range

    if (z < -6.5) {
      return 0.0;
    }

    if (z > 6.5) {
      return 1.0;
    }

    var factK = 1;
    var sum = 0;
    var term = 1;
    var k = 0;
    var loopStop = Math.exp(-23);

    while(Math.abs(term) > loopStop) {
      term = .3989422804 * Math.pow(-1,k) * Math.pow(z,k) / (2 * k + 1) / Math.pow(2,k) * Math.pow(z,k+1) / factK;
      sum += term;
      k++;
      factK *= k;
    }

    sum += 0.5;

    return sum * 100;
  }

  document.getElementById("sdo").innerHTML = "Your Social Dominance Orientation is: " + x.toFixed(2);

  document.getElementById("compared").innerHTML = "That is " + y.toFixed(2) + "x more than average US citizen. (~ 1.91)";
  document.getElementById("nd").innerHTML = "You score higher than " + GetZPercent(z_score).toFixed(2) + "% of people in the US.";
  document.getElementById("female").innerHTML = "You score higher than " + GetZPercent(f_score).toFixed(2) + "% of women in the US.";
  document.getElementById("male").innerHTML = "You score higher than " + GetZPercent(m_score).toFixed(2) + "% of men in the US.";


}
j
