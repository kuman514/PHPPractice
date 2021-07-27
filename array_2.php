<!doctype html>
<html>
  <body>
    <h1><a href="array_2.php">Web</a></h1>
    <ol>
      <?php
        $fileList = scandir('data');
        $except = ['.', '..'];
        foreach ($fileList as $index => $value) {
          if (!in_array($value, $except)) {
            echo "<li><a href=\"array_2.php?current=$value\">$value</a></li>\n";
          }
        }
      ?>
    </ol>
    <h2>
      <?php
        if (isset($_GET['current'])) {
          echo $_GET['current'];
        } else {
          echo "Welcome";
        }
      ?>
    </h2>
    <p>
      <?php
        if (isset($_GET['current'])) {
          echo file_get_contents('data\\'.$_GET['current']);
        } else {
          echo "Welcome PHP";
        }
      ?>
    </p>
  </body>
</html>