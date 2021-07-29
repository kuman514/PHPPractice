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
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php printWindowTitle(); ?></title>
    <link rel="stylesheet" ref="operation_button.css">
  </head>
  <body>
    <h1><a href="index.php">kuman514 memo app</a></h1>
    <ul>
      <?php
        printList();
      ?>
    </ul>
    <a href="create.php">CREATE</a>
    <?php
      if (isset($_GET['id']) && file_exists('data\\'.$_GET['id'])) { ?>
        <a href="update.php?id=<?=$_GET['id']?>">UPDATE</a>
        <form action="delete_process.php" method="POST">
          <input type="hidden" name="id" value="<?=$_GET['id']?>">
          <input type="submit" class="delete-button" value="delete">
        </form>
      <?php }
    ?>
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
