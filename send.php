<?php
  /*$servername = "localhost";
  $username = "serf";
  $password = "serf12345";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
*/

  $_POST["one"] = $one;
  $_POST["two"] = $two;
  $_POST["three"] = $three;
  $_POST["four"] = $four;
  $_POST["five"] = $five;
  $_POST["six"] = $six;
  $_POST["seven"] = $seven;
  $_POST["eight"] = $eight;
  $_POST["nine"] = $nine;
  $_POST["ten"] = $ten;
  $_POST["eleven"] = $eleven;
  $_POST["twelve"] = $twelve;
  $_POST["thirteen"] = $thirteen;
  $_POST["fourteen"] = $fourteen;
  $_POST["fifteen"] = $fifteen;
  $_POST["sixteen"] = $sixteen;
  $_POST["gender"] = $gender;
  $_POST["age"] = $age;
  $_POST["SES"] = $SES;
  $_POST["religion"] = $religion;
  $_POST["race"] = $race;
  $_POST["social"] = $social;
  $_POST["economy"] = $economy;
  $_POST["kids"] = $kids;
  $_POST["meat"] = $meat;

  $Score = $one + $two + $three + $four + $five + $six + $seven + $eight + $nine + $ten + $eleven + $twelve + $thirteen + $fourteen + $fifteen + $sixteen;
  $SDO = $Score / 16;

  if (($one == "") && ($two == "") && ($three == "") && ($four == "") && ($five == "") && ($six == "") && ($seven == "") && ($eight == "") &&
      ($nine == "") && ($ten == "") && ($eleven == "") && ($twelve == "") && ($thirteen == "") && ($fourteen == "") && ($fifteen == "") && ($sixteen == "") && ($gender == "")
      && ($age == "") && ($SES == "") && ($religion == "") && ($race == "") && ($social == "") && ($economy == "") && ($kids == "") && ($meat == ""))
      {

      }
      else {
        setcookie("My_SDO_Score", $SDO, 0);
        header('Location: results.html');
      }
?>
