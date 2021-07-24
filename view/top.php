<?php
require_once('lib/print.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo ID() ?></title>
<meta charset="utf-8">
</head>

<body>
  <h1><a href="index.php">Welcome</a></h1>
  <ol>
    <?php print_list()?>
  </ol>
