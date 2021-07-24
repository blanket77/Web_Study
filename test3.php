<?php
function ID(){
if(isset($_GET['id']))
{
  return $_GET['id'];
}
  else {
    return "Welcome";
  }
}
function print_description(){
if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  }
  else {
    echo "Hello, PHP";
  }
}
function print_list()
{
  $list = scandir("./data");
  $i = 0;
  while($i<count($list))
  {
    if($list[$i] != "." && $list[$i] != ".."){
    echo "<li><a href=\"test3.php?id=$list[$i]\">$list[$i]</a></li>";
  }
  $i = $i+1;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo ID() ?></title>
<meta charset="utf-8">
</head>

<body>
  <h1><a href="test3.php">Welcome</a></h1>
  <ol>
    <?php print_list()     ?>
  </ol>
  <h2>
    <?php echo ID(); ?>
  </h2>
<p>
  <?php
  print_description();
  ?>
</p>
<h2>Function</h2>
<?php
function sum($a, $b)
{
  return $a+$b;
}
print sum(2,4);
file_put_contents('result.txt', sum(2,4));
 ?>

</body>
</html>
