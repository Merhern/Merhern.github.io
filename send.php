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


  $one = $_POST["one"];
  $two = $_POST["two"];
  $three = $_POST["three"];
  $four = $_POST["four"];
  $five = $_POST["five"];
  $six = $_POST["six"];
  $seven = $_POST["seven"];
  $eight = $_POST["eight"];
  $nine = $_POST["nine"];
  $ten = $_POST["ten"];
  $eleven = $_POST["eleven"];
  $twelve = $_POST["twelve"];
  $thirteen = $_POST["thirteen"];
  $fourteen = $_POST["fourteen"];
  $fifteen = $_POST["fifteen"];
  $sixteen = $_POST["sixteen"];
  $gender = $_POST["gender"];
  $age = $_POST["age"];
  $SES = $_POST["SES"];
  $religion = $_POST["religion"];
  $race = $_POST["race"];
  $social = $_POST["social"];
  $economy = $_POST["economy"];
  $kids = $_POST["kids"];
  $meat = $_POST["meat"];

  $Score = $one + $two + $three + $four + $five + $six + $seven + $eight + $nine + $ten + $eleven + $twelve + $thirteen + $fourteen + $fifteen + $sixteen;
  $SDO = $Score / 16;

  if (($one == "") && ($two == "") && ($three == "") && ($four == "") && ($five == "") && ($six == "") && ($seven == "") && ($eight == "") &&
      ($nine == "") && ($ten == "") && ($eleven == "") && ($twelve == "") && ($thirteen == "") && ($fourteen == "") && ($fifteen == "") && ($sixteen == "") && ($gender == "")
      && ($age == "") && ($SES == "") && ($religion == "") && ($race == "") && ($social == "") && ($economy == "") && ($kids == "") && ($meat == ""))
      {
        echo "You didn't fill something and you are stuck here. Go back and try again.";
      }
  elseif ((((($one + $two + $three + $four) - ($five + $six + $seven + $eight)) > 9) &&
        ((($nine + $ten + $eleven + $twelve) - ($thirteen + $fourteen + $fifteen + $sixteen)) > 9)) &&
        (((($one + $two + $three + $four) - ($five + $six + $seven + $eight)) < -6) &&
        ((($nine + $ten + $eleven + $twelve) - ($thirteen + $fourteen + $fifteen + $sixteen)) < -6)))
      {
        echo "I think you can't read, bruh. Go back and try again.";
      }
  else
      {
        setcookie("My_SDO_Score", $SDO, 0);
        echo("your sdo score is: " . $SDO);
        header('Location: results.html');

      }

?>
