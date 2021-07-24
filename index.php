<?php
require_once("lib/print.php");
require_once("view/top.php");
 ?>

  <a href="create.php">creat</a>
  <?php if (isset($_GET['id'])) {?>
  <a href="update.php?id=<?php echo $_GET['id'];?>">update</a>
  <form action="delete_process.php?id=<?=$_GET['id']?>" method="post">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <input type="submit" value="삭제">
  </form>
<?php } ?>
  <h2>
    <?php ID(); ?>
  </h2>
  <?php
  print_description();
  ?>
<?php
require_once('view/bottom.php');
 ?>
