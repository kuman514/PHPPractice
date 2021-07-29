<?php
  $tries = 1;
  $fileName = 'data\\'.$_POST['title'];
  while (file_exists($fileName)) {
    $tries++;
    $fileName = 'data\\'.$_POST['title']." ($tries)";
  }
  file_put_contents($fileName, $_POST['description']);
  header('Location: /index.php?id='.$_POST['title']);
?>
