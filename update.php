<?php
  function printWindowTitle() {
    if (isset($_GET['id'])) {
      echo 'Modify '.$_GET['id'].' :: kuman514 memo app';
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

  function printContent() {
    if (isset($_GET['id'])) {
      if ('data\\'.file_exists($_GET['id'])) {
        echo file_get_contents('data\\'.$_GET['id']);
      } else {
        echo 'File not found';
      }
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
    <h2>Create a memo</h2>
    <form action="update_process.php" method="post">
      <input type="hidden" name="oldtitle" value="<?php printTitle(); ?>">
      <p><input type="text" name="title" placeholder="Title" value="<?php printTitle(); ?>"></p>
      <p><textarea name="description" placeholder="Description"><?php printContent(); ?></textarea></p>
      <p><input type="submit"></p>
    </form>
  </body>
</html>
