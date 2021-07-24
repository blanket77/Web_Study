<?php
function ID(){
if(isset($_GET['id']))
{
  echo htmlspecialchars($_GET['id']);
}
  else {
    echo "Welcome";
  }
}
function print_description(){
if(isset($_GET['id'])){
  $basename = basename($_GET['id']);
  echo htmlspecialchars(file_get_contents("data/".$basename));
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
    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>";
  }
  $i = $i+1;
  }
}
?>
