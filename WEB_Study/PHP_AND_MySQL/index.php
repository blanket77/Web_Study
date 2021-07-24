<?php
require_once("view/top.php");
require_once("lib/print.php");
 ?>
<a href="create.php">create</a>
<?php if (isset($_GET ['id'])) {?>
  <a href="update.php?id=<?=$_GET['id']?>">update</a>
  <form action="delete_process.php?id=<?=$_GET['id']?>" method="post">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <input type="submit" value="삭제">
  </form>
<?php  }?>

<h2><?=$article['title']?></h2>
<p><?=$article['description']?></p>

<?php
require_once("view/bootom.php");
?>
