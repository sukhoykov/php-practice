<?php

// переменные
$start = 20;
$end = 45;
$count = 0;
$sum = 0;

// определяем, делится ли число на 5
for ($i = $start; $i <= $end; $i++) {
    if (fmod($i, 5) == 0) {
        $count++; // подсчет чисел, делящихся на 5
        $sum += $i; // сумма этих чисел
    }
}

// вывод результата
echo "Всего чисел: {$count}<br/>";
echo "Сумма этих чисел: ".$sum;