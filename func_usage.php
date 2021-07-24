<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>function</h1>
    <?php
      $str = 'Lorem Ipsum Dolor Sit Amet.
      
      Koishi is an adorable baby.';
      echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
      echo strlen($str);
    ?>
    <h2>nl2br()</h2>
    <?php
      echo nl2br($str);
    ?>
  </body>
</html>