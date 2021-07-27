<?php
  function printTitle() {
    if (isset($_GET['current'])) {
      echo $_GET['current'];
    } else {
      echo "Welcome!";
    }
  }

  function printDataList() {
    $fileList = scandir('data');
    $except = ['.', '..'];
    foreach ($fileList as $index => $value) {
      if (!in_array($value, $except)) {
        echo "<li><a href=\"function_2.php?current=$value\">$value</a></li>\n";
      }
    }
  }

  function printDescription() {
    if (isset($_GET['current'])) {
      echo file_get_contents('data\\'.$_GET['current']);
    } else {
      echo "Welcome, PHP!";
    }
  }
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        printTitle();
      ?>
    </title>
  </head>
  <body>
  <h1><a href="function_2.php">Web</a></h1>
    <ol>
      <?php
        printDataList();
      ?>
    </ol>
    <h2>
      <?php
        printTitle();
      ?>
    </h2>
    <p>
      <?php
        printDescription();
      ?>
    </p>
  </body>
</html>