<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Лабораторная работа №13</title>
</head>
<body>

<h1>Работа с массивами данных в PHP</h1>
<h3>Задание 1</h3>
<?php
$prog_langs = [1 => 'PHP', 2 => 'JavaScript', 3 => 'C', 4 => 'C#'];
echo "Номер языка: ".array_search('PHP', $prog_langs);
echo nl2br ("\n");
echo "Язык: ".$prog_langs[array_search('PHP', $prog_langs)];
  ?>
<hr>
<h3>Реализация:</h3>
<tt>
    $prog_langs = [1 => 'PHP', 2 => 'JavaScript', 3 => 'C', 4 => 'C#'];<br>
    echo "Номер языка:".array_search('PHP', $prog_langs);<br>
    echo nl2br ("\n");<br>
    echo "Язык: ".$prog_langs[array_search('PHP', $prog_langs)];<br>
</tt>
<hr>

<h3>Задание 2</h3>
<?php
$lang_arr = ["Английский", "Русский", "Немецкий", "Английский", "Белорусский", "Французский", "Русский", "Английский"];
echo "Самый повторяющийся язык: ".array_keys(array_count_values($lang_arr))[0];
echo nl2br ("\n");
echo "Число повторений: ".array_values(array_count_values($lang_arr))[0];
?>
<hr>

<h3>Реализация:</h3>
<tt>
$lang_arr = ["Английский", "Русский", "Немецкий", "Английский", "Белорусский", "Французский", "Русский", "Английский"];<br>
echo "Самый повторяющийся язык: ".array_keys(array_count_values($lang_arr))[0];<br>
echo nl2br ("\n");<br>
echo "Число повторений: ".array_values(array_count_values($lang_arr))[0];<br>
</tt>
<hr>

<h3>Задание 3</h3>
<?php
$prices_to_names = [500 => "Мыло", 1800 => "Утюг", 40 => "Пакет", 100 => "Рыба"];
$names_to_prices = ["Мыло" => 500, "Утюг" => 1800, "Пакет" => 40, "Рыба" => 100];
ksort($prices_to_names);
arsort($names_to_prices);

echo "Первый массив: "."<br>";

foreach($prices_to_names as $price => $name) {
  echo "Цена: $price"."<br>";
  echo "Название: $name"."<br><br>";
}

echo "Второй массив:"."<br>";

foreach($names_to_prices as $name => $price) {
  echo "Название: $name"."<br>";
  echo "Цена: $price"."<br><br>";
}
?>
<hr>

<h3>Реализация:</h3>
<tt>
$prices_to_names = [500 => "Мыло", 1800 => "Утюг", 40 => "Пакет", 100 => "Рыба"];<br>
$names_to_prices = ["Мыло" => 500, "Утюг" => 1800, "Пакет" => 40, "Рыба" => 100];<br>
ksort($prices_to_names);<br>
arsort($names_to_prices);<br><br>

echo "Первый массив: ";<br><br>

foreach($prices_to_names as $price => $name) {<br>
  echo "Цена: $price";<br>
  echo "Название: $name";<br>
}<br><br>

echo "Второй массив:";<br>

foreach($names_to_prices as $name => $price) {<br>
  echo "Название: $name";<br>
  echo "Цена: $price";<br>
}
</tt>
<hr>

<h3>Задание 4</h3>
<?php
  $books = [
    ["Название" => "Зеленая миля", "Автор" => "Стивен Кинг", "Год создания" => 2014],
    ["Название" => "Унесенные ветром", "Автор" => "Маргарет Митчелл", "Год создания" => 2020],
    ["Название" => "Война и мир", "Автор" => "Лев Толстой", "Год создания" => 1867]
  ];
  
  asort($books);

  foreach ($books as $book) {
    echo "Название: " . $book["Название"] . "<br>";
    echo "Автор: " .$book["Автор"] . "<br>";
    echo "Год создания: " . $book["Год создания"] . "<br><br>";
  }
?>
<hr>

<h3>Реализация</h3>
<tt>
  $books = [<br>
    ["Название" => "Зеленая миля", "Автор" => "Стивен Кинг", "Год создания" => 2014],<br>
    ["Название" => "Унесенные ветром", "Автор" => "Маргарет Митчелл", "Год создания" => 2020],<br>
    ["Название" => "Война и мир", "Автор" => "Лев Толстой", "Год создания" => 1867]<br>
  ];<br><br>
  
  asort($books);<br><br>

  foreach ($books as $book) {<br>
    echo "Название: " . $book["Название"];<br>
    echo "Автор: " .$book["Автор"];<br>
    echo "Год создания: " . $book["Год создания"];<br>
  }<br>
</tt>
<hr>
<h3>Задание №5</h3>
<?php
  $array1 = [1, 2, 3, 4, 5];
  $array2 = ['a', 'b', 'c'];

  $result = array_merge($array1, $array2);

  echo "Результат:"."<br>";

  foreach($result as $val) { 
    echo "$val ";
  }
?>
<hr>

<h3>Реализация</h3>
<tt>
  $array1 = [1, 2, 3, 4, 5];<br>
  $array2 = ['a', 'b', 'c'];<br><br>

  $result = array_merge($array1, $array2);<br><br>

  echo "Результат:";<br><br>

  foreach($result as $val) {<br>
    echo "$val ";<br>
  }<br>
</tt>
<hr>

<h3>Задание №6</h3>
<?php
  $num_arr = [1, 2, 3, 4, 3, 2, 1];

  for ($i = 0; $i < count($num_arr); $i++) {
    $left_sum = array_sum(array_slice($num_arr, 0, $i));
    $right_sum = array_sum(array_slice($num_arr,($i + 1)));

    if ($left_sum == $right_sum) {
      echo "Найдено число: " . $num_arr[$i];
      break;
    }
  }
?>
<hr>

<h3>Реализация</h3>
<tt>
  $num_arr = [1, 2, 3, 4, 3, 2, 1];<br><br>

  for ($i = 0; $i < count($num_arr); $i++) {<br>
    $left_sum = array_sum(array_slice($num_arr, 0, $i));<br>
    $right_sum = array_sum(array_slice($num_arr,($i + 1)));<br><br>

    if ($left_sum == $right_sum) {<br>
      echo "Найдено число: " . $num_arr[$i];<br>
      break;<br>
    }<br>
  }<br>
</tt>
<hr>

<h3>Задание 7</h3>
<?php
  $day_nums = [1 => "Понедельник", 2 => "Вторник", 3 => "Среда", 4 => "Четверг", 5 => "Пятница", 6 => "Суббота", 7 => "Воскресенье"];

  echo "Сегодня ".$day_nums[4];
?>
<hr>

<h3>Реализация</h3>
<tt>
  $day_nums = [1 => "Понедельник", 2 => "Вторник", 3 => "Среда", 4 => "Четверг", 5 => "Пятница", 6 => "Суббота", 7 => "Воскресенье"];<br>

  echo "Сегодня ".$day_nums[4];<br>
</tt>
</body>
</html>
