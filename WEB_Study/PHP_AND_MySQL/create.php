<?php
require_once("lib/print.php");
require_once("view/top.php");
 ?>
<p><a href="create.php">create</a></p>
<form action="process_create.php" method="POST">
  <p><input type ="text" name = "title" placeholder="Title"></p>
  <p><textarea name ="description" placeholder="Description"></textarea></p>
  <p><?=$select_form?></p>
  <p><input type="submit"></p>
</form>
<?php
require_once("view/bootom.php");
