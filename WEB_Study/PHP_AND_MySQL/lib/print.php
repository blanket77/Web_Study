<?php
$conn=mysqli_connect("localhost", "study", "quantum", "opentutorials");
$sql =  "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
//<li><a href="index.php?id=1">MYSQL</a></li>
$escaped_title = htmlspecialchars($row['title']);
  $list = $list."<li><a href=\"index.php?id={$row['id']}\">$escaped_title</a></li>";
  }

 $article = array('title' => 'Welcome','description' => 'Hello, web' );

 if (isset($_GET["id"]))
 {
   $filtered_id=mysqli_real_escape_string($conn, $_GET['id']);
   $sql = "SELECT * FROM topic LEFT JOIN author on topic.author_id = author.id WHERE topic.id={$filtered_id}";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_array($result);
   $article['title'] = htmlspecialchars($row['title']);
   $article['description'] = htmlspecialchars($row['description']);
   $article['name'] = htmlspecialchars($row['name']);
 }
 # creat에서만 필요
 $sql =  "SELECT * FROM author";
 $result = mysqli_query($conn, $sql);
 $select_form = '<select name="author_id">';
 while($row= mysqli_fetch_array($result))
 {
   $select_form .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
 }
 $select_form .= "</select>"; 
 ?>
