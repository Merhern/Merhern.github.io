<?php
//connect to //
//$connect = mysql_connect(“server_name”, “admin_name”, “password”); if (!connect) { die('Connection Failed: ' . mysql_error()); { mysql_select_db(“database_name”, $connect);


//operation itself
if(isset($_POST['submit'])){
  // SOS07
  $one = $_POST['one'];
  $two = $_POST['two'];
  $three = $_POST['three'];
  $four = $_POST['four'];
  $five = $_POST['five'];
  $six = $_POST['six'];
  $seven = $_POST['seven'];
  $eight = $_POST['eight'];
  $nine = $_POST['nine'];
  $ten = $_POST['ten'];
  $eleven = $_POST['eleven'];
  $twelve = $_POST['twelve'];
  $thirteen = $_POST['thirteen'];
  $fourteen = $_POST['fourteen'];
  $fifteen = $_POST['fifteen'];
  $sixteen = $_POST['sixteen'];
  //additional info about person
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $SES = $_POST['SES'];
  $religion = $_POST['religion'];
  $race = $_POST['race'];
  $social = $_POST['social'];
  $economy = $_POST['economy'];
  $kids = $_POST['kids'];
  $meat = $_POST['meat'];


  // Check whether submitted data is not empty
  if(!empty($) && !empty($one) && !empty($two) && !empty($three) && !empty($four) && !empty($five) && !empty($six)
      && !empty($seven) && !empty($eight) && !empty($nine) && !empty($ten) && !empty($eleven) && !empty($twelve)
      && !empty($thirteen) && !empty($fourteen) && !empty($fifteen) && !empty($sixteen) && !empty($gender) && !empty($age)
      && !empty($SES) && !empty($religion) && !empty($race) && !empty($social) && !empty($economy) && !empty($kids) && !empty($meat))
      {
        echo "you didn't answer all questions";
      }
  else {
          echo $race; echo $nine;

      }


?>
