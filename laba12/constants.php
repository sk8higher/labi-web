<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Константы</title>
</head>
<body>
<?php
  define("FRST_CONST", 41);
  define("SCND_CONST", 33);

  $sum = FRST_CONST + SCND_CONST;
  echo "Сумма констант: ".$sum;
?>
</body>
</html>
