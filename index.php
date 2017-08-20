<?php
$timeZone = date_default_timezone_set('EST');
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Day</title>
  </head>
  <body>
    <header>
      <h1>My Day</h1>
      <p class="date"><?php
      $timeZone;
      echo date('l, F d, Y'); ?></p>
    </header>
    <main class="wrapper">
      <img src="img/coneflower.jpg" alt="Purple coneflower in bloom.">
      <section>
        <h2>Quote of the Day</h2>
        <p><?php include "inc/quotes.php"; ?></p>
      </section>
      <section>
        <h3>Today's highlights</h3>
        <p></p>
      </section>
    </main>
    <footer>
    &copy;2017 Sarah Warner
    </footer>

  </body>
</html>
