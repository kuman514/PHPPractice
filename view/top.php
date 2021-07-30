<?php
  require_once('lib\\print.php');
?>
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