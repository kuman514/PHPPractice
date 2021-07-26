<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      switch ($_GET['something']) {
        case '1g':
          echo 'koishi is an adorable baby';
          break;
        case 'a1':
          echo 'koishi is a cat';
          break;
        default:
          echo 'URL Parameter \'something\' = 1g or a1';
      }
    ?>
  </body>
</html>