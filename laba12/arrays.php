<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Массивы</title>
</head>
<body>
<?php
  $arr1 = [1, 2, 3, 4, 5];
  $arr2 = [2, 4, 6, 8, 10];

  $arr1['element'] = 'значение';
  array_shift($arr2);

  echo "Элемент под индексом 2 из первого массива: ".$arr1[2];
  echo nl2br ("\n");
  echo "Элемент под индексом 2 из второго массива: ".$arr2[2];
  echo nl2br ("\n");

  echo "Массив 1: ";
  foreach ($arr1 as $val) {
    echo "$val ";
  }
  echo nl2br ("\n");

  echo "Массив 2: ";
  foreach ($arr2 as $val) {
    echo "$val ";
  }
  echo nl2br ("\n");

  echo "Количество элементов в 1 массиве: ".count($arr1);
  echo nl2br ("\n");
  echo "Количество элементов в 2 массиве: ".count($arr2);
?>
</body>
</html>
