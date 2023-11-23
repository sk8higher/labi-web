<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Циклы</title>
</head>
<body>
<?php
$sum_for = 0;
$sum_while = 0;

for($i = 1; $i <=25; $i++) {
  $sum_for += $i;
}

$start = 1;
$end = 25;

while($start <= 25) {
  $sum_while += $start;
  $start++;
}

echo "Сумма чисел (for): ".$sum_for;
echo nl2br ("\n");
echo "Сумма чисел (while): ".$sum_while;
?>
</body>
</html>
