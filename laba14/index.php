<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Создание пользовательских функций в PHP</title>
</head>
<body>
  <h3>Задание №1</h3>
  <?php
    function getNumber($num) {
      echo $num + 55;
    }

    getNumber(55);
  ?>
<hr>

<h3>Реализация</h3>
<tt>
    function getNumber($num) {<br>
      echo $num + 55;<br>
    }<br><br>

    getNumber(55);<br>
</tt>
<hr>
<h3>Задание №2</h3>
<?php
     function getNumberRet($num) {
      return $num + 55;
    }

    echo getNumberRet(55);
?>
<h3>Реализация</h3>
<tt>
     function getNumberRet($num) {<br>
      return $num + 55;<br>
    }<br><br>

    echo getNumberRet(55);<br>
</tt>
<hr>

<h3>Задание №3</h3>
<?php
  function pythagoras($kat1, $kat2) {
    return round(sqrt(pow($kat1, 2) + pow($kat2, 2)), 3);
  }

  echo "Гипотенуза для 3 и 5: ".pythagoras(3, 5);
?>
<hr>
<h3>Реализация</h3>
<tt>
  function pythagoras($kat1, $kat2) {<br>
    return round(sqrt(pow($kat1, 2) + pow($kat2, 2)), 3);<br>
  }<br>
  <br>
  echo "Гипотенуза для 3 и 5: ".pythagoras(3, 5);<br>
</tt>
<hr>
<h3>Задание №4</h3>
<?php
  function col() {
    echo func_num_args();
  }

  echo "Количество аргументов: ";
  col(1, 2, 3, 4, 5);
?>
<hr>

<h3>Реализация</h3>
<tt>
  function col() {<br>
    echo func_num_args();<br>
  }<br><br>

  echo "Количество аргументов: ";<br>
  col(1, 2, 3, 4, 5);<br>

</tt>
<hr>

<h3>Задание №5</h3>
<?php
  function midArgs() {
    $arg_array = func_get_args();
    $result = [];

    foreach($arg_array as $arg) {
      if(is_int($arg)) array_push($result, $arg);
    }

    return array_sum($result) / count($result);
  }

  echo "Среднее значение всех целочисленных аргументов (4, 10, 1.1, 4,5): ".midArgs(4, 10, 1.1, 4.5);
?>
<hr>

<h3>Реализация</h3>
<tt>
  function midArgs() {<br>
    $arg_array = func_get_args();<br>
    $result = [];<br><br>

    foreach($arg_array as $arg) {<br>
      if(is_int($arg)) array_push($result, $arg);<br>
    }<br><br>

    return array_sum($result) / count($result);<br>
  }<br><br>

  echo "Среднее значение всех целочисленных аргументов (4, 10, 1.1, 4,5): ".midArgs(4, 10, 1.1, 4.5);<br>

</tt>


<hr>
<h3>Задание №6</h3>
<?php
  function op($num1, $num2, $operator) {
    switch($operator) {
      case '-':
        return $num1 - $num2;
      case '+':
        return $num1 + $num2;
      case '/':
        return $num1 / $num2;
      case '*':
        return $num1 * $num2;
    }
  }

  echo "5 + 5 = ".op(5, 5, '+')."<br>";
  echo "5 - 5 = ".op(5, 5, '-')."<br>";
  echo "5 / 5 = ".op(5, 5, '/')."<br>";
  echo "5 * 5 = ".op(5, 5, '*')."<br>";
?>
<hr>
<h3>Реализация</h3>
<tt>
  function op($num1, $num2, $operator) {<br>
    switch($operator) {<br>
      case '-':<br>
        return $num1 - $num2;<br>
      case '+':<br>
        return $num1 + $num2;<br>
      case '/':<br>
        return $num1 / $num2;<br>
      case '*':<br>
        return $num1 * $num2;<br>
    }<br>
  }<br><br>

  echo "5 + 5 = ".op(5, 5, '+');<br>
  echo "5 - 5 = ".op(5, 5, '-');<br>
  echo "5 / 5 = ".op(5, 5, '/');<br>
  echo "5 * 5 = ".op(5, 5, '*');<br>
</tt>
<hr>

<h3>Задание №7</h3>
<?php
  function worksOnlyOnce() {
    static $stat_var = 0;
    if($stat_var == 1) return "Функция была уже использована";

    $stat_var++;
  }

  echo "Первый вызов: ".worksOnlyOnce();
  echo nl2br ("\n");
  echo "Второй вызов: ".worksOnlyOnce();
?>
<hr>

<h3>Реализация</h3>
<tt>
  function worksOnlyOnce() {<br>
    static $stat_var = 0;<br>
    if($stat_var == 1) return "Функция была уже использована";<br><br>

    $stat_var++;<br>
  }<br><br>

  echo "Первый вызов: ".worksOnlyOnce();<br>
  echo nl2br ("\n");<br>
  echo "Второй вызов: ".worksOnlyOnce();<br>
</tt>
</body>
</html>
