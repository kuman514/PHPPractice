<?php
  function printWindowTitle() {
    if (isset($_GET['id'])) {
      echo htmlspecialchars($_GET['id'].' :: kuman514 memo app');
    } else {
      echo 'kuman514 memo app';
    }
  }

  function printTitle() {
    if (isset($_GET['id'])) {
      echo htmlspecialchars($_GET['id']);
    } else {
      echo 'Welcome';
    }
  }

  function printList() {
    $dataList = scandir('data');
    $except = ['.', '..'];
    foreach ($dataList as $index => $value) {
      if (!in_array($value, $except)) {
        $title = htmlspecialchars($value);
        echo "<li><a href=\"index.php?id=$title\">$title</a></li>";
      }
    }
  }

  function printContent() {
    if (isset($_GET['id'])) {
      if (file_exists('data\\'.$_GET['id'])) {
        echo htmlspecialchars(file_get_contents('data\\'.$_GET['id']));
      } else {
        echo 'File not found';
      }
    }
  }
?>