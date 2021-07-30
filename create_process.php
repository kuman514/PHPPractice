<?php
  $tries = 1;
  $title = basename($_POST['title']);
  $fileName = 'data\\'.$title;
  while (file_exists($fileName)) {
    $tries++;
    $fileName = 'data\\'.$title." ($tries)";
  }
  file_put_contents($fileName, $_POST['description']);
  header('Location: /index.php?id='.$title);
?>
