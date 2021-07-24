<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Conditional a and b</h1>
    <h2>
      <?php
        echo 'if ... else: '.$_GET['a'].' == '.$_GET['b'];
      ?>
    </h2>
    <?php
      if (isset($_GET['a']) && isset($_GET['b'])) {
        if ($_GET['a'] == $_GET['b']) {
          echo 'YES';
        } else {
          echo 'NO';
        }
      } else {
        echo 'Please set a and b as parameters';
      }
    ?>
  </body>
</html>