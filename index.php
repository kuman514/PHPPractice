<?php
  require_once('lib\\print.php');
  require_once('view\\top.php');
?>
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
<?php
  require_once('view\\bottom.php');
?>
