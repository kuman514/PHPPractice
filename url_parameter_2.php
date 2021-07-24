<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <ol>
      <li><a href="url_parameter_2.php?id=HTML">HTML</a></li>
      <li><a href="url_parameter_2.php?id=CSS">CSS</a></li>
      <li><a href="url_parameter_2.php?id=JavaScript">JavaScript</a></li>
      <li><a href="url_parameter_2.php?id=MySQL">MySQL</a></li>
      <li><a href="url_parameter_2.php?id=PHP">PHP</a></li>
    </ol>
    <h1>
      <?php
        echo $_GET['id'];
      ?>
    </h1>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet doloremque doloribus reiciendis deleniti adipisci at alias a eligendi. Molestiae non id vero enim consectetur. Dignissimos ab error atque vero maxime?
    </p>
  </body>
</html>