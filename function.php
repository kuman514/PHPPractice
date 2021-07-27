<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
      function basic() {
        print("koishi is an adorable baby<br>");
        print("koishi is an adorable baby<br>");
      }
      basic();
    ?>
    <h2>Parameters &amp; Arguments</h2>
    <?php
      function sum($left, $right) {
        print($left + $right);
        print("<br>");
      }
      sum(11, 23);
      sum(44.5, 34.77);
    ?>
    <h2>Return</h2>
    <?php
      function sum2($left, $right) {
        return ($left + $right);
      }
      print(sum2(2, 5));
      // Write result to a file
      file_put_contents('result.txt', sum2(2, 5));
    ?>
  </body>
</html>