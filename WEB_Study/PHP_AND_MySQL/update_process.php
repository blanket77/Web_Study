<?php
settype($_POST['ID'], 'integer');
var_dump($_POST); echo "<br>";
print_r($_POST); echo "<br>";
$conn=mysqli_connect("localhost", "study", "quantum", "opentutorials");

$filterd = array(
  'id'=> mysqli_real_escape_string($conn, $_POST['ID']),
  'title' =>mysqli_real_escape_string($conn, $_POST['title']) ,
  'description' => mysqli_real_escape_string($conn, $_POST['description']));
$sql =  "
UPDATE topic
  SET
    title = '{$filterd['title']}',
    description ='{$filterd['description']}'
  WHERE
    id={$filterd['id']}
";

$result = mysqli_query($conn, $sql);
#header('Location: /index.php?id='.$_POST['ID']);

if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
}
else{
  echo "성공했습니다. <a href=\"index.php?id={$_POST['ID']}\">돌아가기</a>";
}
?>
<!--궁금한게 있음 UPDATE문에서 string을 또 작은 따옴표를....-->
