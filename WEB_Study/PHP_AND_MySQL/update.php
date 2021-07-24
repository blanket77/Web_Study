<?php
require_once("lib/print.php");
require_once("view/top.php");
?>

<a href="create.php">create</a>
<a href="update.php?id=<?=$_GET['id']?>">update</a>

<h2><?=$article['title']?></h2>
<p><?=$article['description']?></p>

<form action="update_process.php" method="post">
<input type="hidden" name="ID" value="<?=$_GET['id']?>">
<p>
  <input type="text" name="title" placeholder="Title" value="<?=$article['title']?>">
</p>
<p>
  <input type="textarea" name="description" placeholder="Description" value="<?=$article['description']?>">
</p>
<p>
  <input type="submit" value="갱신">
</p>
</form>
<?php
require_once("view/bootom.php");
?>
