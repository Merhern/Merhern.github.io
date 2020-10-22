<?php
  $servername = "localhost";
  $username = "serf";
  $password = "serf12345";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";


  $_POST["one"] = $one;
  $_POST["one"] = $two;
  $_POST["one"] = $three;
  $_POST["one"] = $four;
  $_POST["one"] = $five;
  $_POST["one"] = $six;
  $_POST["one"] = $seven;
  $_POST["one"] = $eight;
  $_POST["one"] = $nine;
  $_POST["one"] = $ten;
  $_POST["one"] = $eleven;
  $_POST["one"] = $twelve;
  $_POST["one"] = $thirteen;
  $_POST["one"] = $fourteen;
  $_POST["one"] = $fifteen;
  $_POST["one"] = $sixteen;
  $_POST["one"] = $gender;
  $_POST["one"] = $age;
  $_POST["one"] = $SES;
  $_POST["one"] = $religion;
  $_POST["one"] = $race;
  $_POST["one"] = $social;
  $_POST["one"] = $economy;
  $_POST["one"] = $kids;
  $_POST["one"] = $meat;
  $SDO_Score = $one + $two + $three + $four + $five + $six + $seven + $eight + $nine + $ten + $eleven + $twelve + $thirteen + $fourteen + $fifteen + $sixteen 
  if (($one <> "") && ($two <> "") && ($three <> "") && ($four <> "") && ($five <> "") && ($six <> "") && ($seven <> "") && ($eight <> "") &&       ($nine <> "") && ($ten <> "") && ($eleven <> "") && ($twelve <> "") && ($thirteen <> "") && ($fourteen <> "") && ($fifteen <> "") && ($sixteen <> "") &&        ($gender <> "") && ($age <> "") && ($SES <> "") && ($religion <> "") && ($race <> "") && ($social <> "") && ($economy <> "") && ($kids <> "") &&        ($meat <> "")) {          echo $SDO_Score;          echo "Done";      }
?>
