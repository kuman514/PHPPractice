<!doctype html>
<html>
  <body>
    <h1>String & String Operators</h1>
    <?php
      echo "Hello \"world!\"";
    ?>
    <h2>Concat Operator</h2>
    <?php
      echo "Hello "."world!";
    ?>
    <h2>String Length Function</h2>
    <p>koishi is an adorable baby</p>
    <?php
      echo strlen("koishi is an adorable baby");
      $koishi = "koishi is an adorable baby";
      echo strlen($koishi);
      echo strlen("baby $koishi");
    ?>
  </body>
</html>