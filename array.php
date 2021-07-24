<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Array</h1>
    <p>
      <?php
      $name = array('go','broc','sist', 'man', 'cook');
      echo $name[0]."<br>";
      echo $name[1]."<br>";
      var_dump(count($name));
      echo "<br>";
      array_push($name, "home","borrow");
      print_r($name);
      echo "<br>";
      var_dump($name);
      ?>
    </p>

  </body>
</html>
