<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Document</title>
</head>
<body>
  <ul>
    <?php
      foreach($person as $feature => $value){
        echo "<ul>{$feature} : {$value}</ul>";
      };
    ?>
  </ul>
</body>
</html>
