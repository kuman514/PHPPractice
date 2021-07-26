<!doctype html>
<html>
  <body>
    <?php
      $coworkers = array('koishi', 'is', 'an', 'adorable', 'baby');

      $length = count($coworkers);
      for ($i = 0; $i < $length; $i++) {
        // koishi is an adorable baby
        echo $coworkers[$i].' ';
      }
      echo '<br>';
      // array(5) { [0]=> string(6) "koishi" [1]=> string(2) "is" [2]=> string(2) "an" [3]=> string(8) "adorable" [4]=> string(4) "baby" }
      var_dump($coworkers);
      echo '<br>';

      array_push($coworkers, 'kuman514');
      $length = count($coworkers);
      for ($i = 0; $i < $length; $i++) {
        // koishi is an adorable baby kuman514
        echo $coworkers[$i].' ';
      }
      echo '<br>';
      // array(6) { [0]=> string(6) "koishi" [1]=> string(2) "is" [2]=> string(2) "an" [3]=> string(8) "adorable" [4]=> string(4) "baby" [5]=> string(8) "kuman514" }
      var_dump($coworkers);
      echo '<br>';

      unset($coworkers[3]);
      $length = count($coworkers);
      for ($i = 0; $i < $length; $i++) {
        // koishi is an baby
        echo $coworkers[$i].' ';
      }
      echo '<br>';
      foreach ($coworkers as $item => $value) {
        // koishi is an baby kuman514
        echo $coworkers[$item].' ';
      }
      echo '<br>';
      foreach ($coworkers as $item => $value) {
        // 0 1 2 4 5
        echo $item.' ';
      }
      echo '<br>';
      // array(5) { [0]=> string(6) "koishi" [1]=> string(2) "is" [2]=> string(2) "an" [4]=> string(4) "baby" [5]=> string(8) "kuman514" }
      var_dump($coworkers);
      echo '<br>';

      array_push($coworkers, 'kuman514');
      echo '<br>';
      // array(6) { [0]=> string(6) "koishi" [1]=> string(2) "is" [2]=> string(2) "an" [4]=> string(4) "baby" [5]=> string(8) "kuman514" [6]=> string(8) "kuman514" }
      var_dump($coworkers);
      echo '<br>';
    ?>
  </body>
</html>