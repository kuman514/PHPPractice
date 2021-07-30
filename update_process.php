<?php
  $newTitle = basename($_POST['title']);
  rename('data\\'.$_POST['oldtitle'], 'data\\'.$newTitle);
  file_put_contents('data\\'.$newTitle, $_POST['description']);
  header('Location: /index.php?id='.$newTitle);
?>