<?php
  function printWindowTitle() {
    if (isset($_GET['id'])) {
      echo $_GET['id'].' :: kuman514 memo app';
    } else {
      echo 'kuman514 memo app';
    }
  }

  function printTitle() {
    if (isset($_GET['id'])) {
      echo $_GET['id'];
    } else {
      echo 'Welcome';
    }
  }

  function printList() {
    $dataList = scandir('data');
    $except = ['.', '..'];
    foreach ($dataList as $index => $value) {
      if (!in_array($value, $except)) {
        echo "<li><a href=\"index.php?id=$value\">$value</a></li>";
      }
    }
  }

  function printContent() {
    if (isset($_GET['id'])) {
      echo file_get_contents('data\\'.$_GET['id']);
    }
  }
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php printWindowTitle(); ?></title>
  </head>
  <body>
    <h1><a href="index.php">kuman514 memo app</a></h1>
    <ul>
      <?php
        printList();
      ?>
    </ul>
    <a href="create.php">CREATE</a>
    <h2>
      <?php
        printTitle();
      ?>
    </h2>
    <p>
      <?php
        printContent();
      ?>
    </p>
  </body>
</html>
