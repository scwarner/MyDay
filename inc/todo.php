<?php
$todo1 = "6:30 pm: Run 3 miles.";
$todo2 = "6:00 pm: Go to Code Louisville";
$todo3 = "8:00 pm: Handbell rehearsal at church";
$todo4 = "6:30 pm: Run 2 miles";
$todo5 = "6:00 pm: Spend a quiet evening with Scott";
$todo6 = "10:00 am: Tennis fast feed at Crescent Hill";
$todo7 = "11:00 am: Traditional service at St. Paul's";

$day = date('N');

if ($day == 1) {
  echo $todo1;
} elseif ($day == 2) {
  echo $todo2;
} elseif ($day == 3) {
  echo $todo3;
} elseif ($day == 4) {
  echo $todo4;
} elseif ($day == 5) {
  echo $todo5;
} elseif ($day == 6) {
  echo $todo6;
} elseif ($day == 7) {
  echo $todo7;
}

 ?>
