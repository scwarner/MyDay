<?php

$quote1 = "Tell me, what is it you plan to do with your one wild and precious life? <span>Mary Oliver</span>";
$quote2 = "There are two ways of spreading light. To be the candle, or the mirror that reflects it. <span>Edith Wharton</span>";
$quote3 = "A ship in harbor is safe, but that's not what ships are built for. <span>John A. Shedd</span>";
$quote4 = "Remember that sometimes not getting what you want is a wonderful stroke of luck. <span>Dalai Lama</span>";
$quote5 = "We have to continually be jumping off cliffs and developing wings on the way down. <span>Kurt Vonnegut</span>";
$quote6 = "You have to accept whatever comes, and the only important thing is that you meet it with courage and the best you have to give. <span>Eleanor Roosevelt</span>";
$quote7 = "I like nonsense, it wakes up the brain cells. Fantasy is a necessary ingredient in living; it’s a way of looking at life through the wrong end of a telescope. Which is what I do, and that enables you to laugh at life’s realities. <span>Dr. Seuss</span>";

$day = date('N');


if ($day == 1) {
  echo $quote1;
} elseif ($day == 2) {
  echo $quote2;
} elseif ($day == 3) {
  echo $quote3;
} elseif ($day == 4) {
  echo $quote4;
} elseif($day == 5) {
  echo $quote5;
} elseif ($day == 6) {
  echo $quote6;
} elseif ($day == 7) {
  echo $quote7;
}
 ?>
