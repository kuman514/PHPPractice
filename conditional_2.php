<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <ol>
      <li><a href="conditional_2.php?id=HTML">HTML</a></li>
      <li><a href="conditional_2.php?id=CSS">CSS</a></li>
      <li><a href="conditional_2.php?id=JavaScript">JavaScript</a></li>
      <li><a href="conditional_2.php?id=MySQL">MySQL</a></li>
      <li><a href="conditional_2.php?id=PHP">PHP</a></li>
    </ol>
    <h1>
      <?php
        if (isset($_GET['id'])) {
          echo $_GET['id'];
        } else {
          echo 'Welcome';
        }
      ?>
    </h1>
    <?php
      if (isset($_GET['id'])) {
        echo file_get_contents('data\\'.$_GET['id']);
      } else {
        echo 'Welcome File!';
      }
    ?>
  </body>
</html>