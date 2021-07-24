<?php
require_once("lib/print.php");
 ?>
<?php

$label_submit = 'Create author';
$form_action = 'process_create_author.php';

$escaped = array('name' => "", 'profile' => "");
if(isset($_GET['id'])){
 $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
 settype($filtered_id, 'integer');
 $sql = "SELECT * FROM author WHERE id = {$filtered_id}";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
 $escaped = array(
   'name' => htmlspecialchars($row['name']),
   'profile'=> htmlspecialchars($row['profile']),
   'id' => htmlspecialchars($row['id'])
 );

 $label_submit = 'Update author';
 $form_action = 'process_update_author.php';
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <p><a href="index.php">topic</a></p>
    <table border="1">
      <tr>
        <td>id</td><td>name</td><td>profile</td>
        <?php $sql = "SELECT * FROM author";
        $result = mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($result)){
         $filtered = array(
           'id' => htmlspecialchars($row['id']),
           'name' => htmlspecialchars($row['name']),
           'profile' => htmlspecialchars($row['profile']),
         );
        ?>
          <tr>
            <td><?=$filtered['id']?></td>
            <td><?=$filtered['name']?></td>
            <td><?=$filtered['profile']?></td>
            <td><a href="author.php?id=<?=$filtered['id']?>">update</a></td>
            <td>
              <form action="process_delete_author.php" method="post" onsubmit="confirm('sure?');">
                <input type="hidden" name="id" value="<?=$filtered['id']?>">
                <input type="submit" value="delete">
            </form>
            </td>
          </tr>
          <?php
        }
        ?>
      </tr>
    </table>
      <form action="<?=$form_action?>" method="post">
        <?php if(isset($_GET['id']))
        {
          ?>
          <p><input type="hidden" name="id" value="<?=$escaped['id']?>"></p>
          <?php
        } ?>
        <p><input type="text" name="name" value="<?=$escaped['name']?>" placeholder="Text"></p>
        <p><textarea name="profile" placeholder="Profile"><?=$escaped['profile']?></textarea></p>
        <p><input type="submit" value="<?=$label_submit?>"></p>
      </form>
  </head>
</html>
