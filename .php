<?php
// Определяем массив с квадратами чисел от 1 до 10
$squares = [];
for ($i = 1; $i <= 10; $i++) {
    $squares[$i] = $i * $i;
}

// Выводим массив, указывая ключ и значение
foreach ($squares as $key => $value) {
    echo "Квадрат числа $key: $value<br>";
}
?>