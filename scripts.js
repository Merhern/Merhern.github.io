function move() {
  document.getElementById("form1").style.display = "none";
  document.getElementById("form2").style.display = "block";
}

function cookie() {
  var x =  document.cookie.split("=")[1];
  var y = x / 1.90714286;
  document.getElementById("sdo").innerHTML = "Your Social Dominance Orientation is:" + x;
  document.getElementById("compared").innerHTML = "That is " + y + "x more than average US citizen [1]";
}
