<?php
    $_GET["one"] = $one;
    $_GET["one"] = $two;
    $_GET["one"] = $three;
    $_GET["one"] = $four;
    $_GET["one"] = $five;
    $_GET["one"] = $six;
    $_GET["one"] = $seven;
    $_GET["one"] = $eight;
    $_GET["one"] = $nine;
    $_GET["one"] = $ten;
    $_GET["one"] = $eleven;
    $_GET["one"] = $twelve;
    $_GET["one"] = $thirteen;
    $_GET["one"] = $fourteen;
    $_GET["one"] = $fifteen;
    $_GET["one"] = $sixteen;
    $_GET["one"] = $gender;
    $_GET["one"] = $age;
    $_GET["one"] = $SES;
    $_GET["one"] = $religion;
    $_GET["one"] = $race;
    $_GET["one"] = $social;
    $_GET["one"] = $economy;
    $_GET["one"] = $kids;
    $_GET["one"] = $meat;
    $SDO_Score = $one + $two + $three + $four + $five + $six + $seven + $eight + $nine + $ten + $eleven + $twelve + $thirteen + $fourteen + $fifteen + $sixteen;

    if (($one <> "") && ($two <> "") && ($three <> "") && ($four <> "") && ($five <> "") && ($six <> "") && ($seven <> "") && ($eight <> "") &&
          ($nine <> "") && ($ten <> "") && ($eleven <> "") && ($twelve <> "") && ($thirteen <> "") && ($fourteen <> "") && ($fifteen <> "") && ($sixteen <> "") &&
          ($gender <> "") && ($age <> "") && ($SES <> "") && ($religion <> "") && ($race <> "") && ($social <> "") && ($economy <> "") && ($kids <> "") &&
          ($meat <> "")) {
            echo $SDO_Score;

        }


?>
