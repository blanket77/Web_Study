<?php
$conn = mysqli_connect(
  'localhost',
  'study',
  'quantum',
  'opentutorials');
$sql = "SELECT * FROM topic WHERE id=1";
$result = mysqli_query($conn, $sql);
print_r($row=mysqli_fetch_array($result));
echo "<br><br>";
print_r($result->num_rows);
echo "<br><br>";

echo "<h1>single row</h1>";
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);

$row=mysqli_fetch_array($result);
echo '<h2>'.$row['title'].'</h2>';
echo $row['description'];

echo "<h1>multi row</h1>";
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);

while($row=mysqli_fetch_array($result)) #없을 때 NULL을 출력
{
  echo '<h2>'.$row['title'].'</h2>';
  echo $row['description'];
}
?>
