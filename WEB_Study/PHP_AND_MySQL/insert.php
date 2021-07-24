<?php
$conn=mysqli_connect("localhost", "study", "quantum", "opentutorials");
$sql =  "
  INSERT INTO
  `study`.`topic` (
    `title`, `description`, `created`)
     VALUES (
       'sql', 'sql is.. ', NOW()
     );
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo mysqli_error($conn);
}
?>
