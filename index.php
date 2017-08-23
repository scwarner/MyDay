<?php
$timeZone = date_default_timezone_set('EST');
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Day</title>
    <link href="https://fonts.googleapis.com/css?family=The+Girl+Next+Door" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>

    <!-- HEADER CONTENT -->

    <header>
      <h1>My Day</h1>
      <p class="date"><?php
      $timeZone;
      echo date('l, F d, Y'); ?></p>
    </header>

    <!-- ENT HEADER CONTENT -->

    <!-- MAIN CONTENT -->

    <div class="wrapper">
        <img src="img/coneflower.jpg" alt="Purple coneflower in bloom.">
        <section id="quote">
          <h2>Quote of the Day</h2>
          <p><?php include "inc/quotes.php"; ?></p>
        </section>
        <section>
          <h3>Today's Top To-Do</h3>
          <p><?php include "inc/todo.php"; ?></p>
        </section>
        <section>
          <h3>Other To-Dos</h3>
          <ul>
            <li>Code for at least 25 minutes</li>
            <li>Go to work</li>
            <li>Read at least 30 pages</li>
          </ul>
        </section>
    </div>

    <!-- END MAIN CONTENT -->

    <!-- FOOTER CONTENT -->

    <footer>
    &copy;2017 Sarah Warner
    </footer>

    <!-- END FOOTER CONTENT -->

  </body>
</html>
