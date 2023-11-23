<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Языки программирования</title>
</head>
<body>
  <h1>Дата: <?php echo date('d/m/Y') ?></h1>
  <h1>Время: <?php echo date('H:i:s') ?></h1>
  <?php
    $a = "Существуют следующие языки программирования: ";
    $b = "Java Script, Delphi, C++, VBasic.";

    echo $a . $b;
  ?>
</body>
</html>
