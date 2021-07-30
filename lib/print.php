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
      if (file_exists('data\\'.$_GET['id'])) {
        echo file_get_contents('data\\'.$_GET['id']);
      } else {
        echo 'File not found';
      }
    }
  }
?>