<!DOCTYPE html>
<html>
<head>
<title>WEB1 - Welcome</title>
<meta charset="utf-8">
</head>

<body>
  <h1><a href="test2.php">Welcome</a></h1>
  <ol>
    <li><a href="test2.php?id=HTML">HTML</a></li>
    <li><a href="test2.php?id=CSS">CSS</a></li>
    <li><a href="test2.php?id=JavaScript">JavaScript</a></li>
  </ol>

  <h2><?php
  if(isset($_GET['id']))
  {
    echo $_GET['id'];
  }
    else {
      echo "Welcome";
    } ?></h2>
<p>
  <?php if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  }
  else {
    echo "Hello, PHP";
  }
  ?>
</p>
</body>
</html>
