<?php

// переменные
$n = 5;
$sum = 0;
$count = 0;

// получение квадратов и их суммы
for ($i = 1; $i <= $n; $i++) {
    $sum += $i ** $i;
    $count++;
}

// результат
echo "Квадраты: ".$count;
echo "<br>Сумма квадратов: ".$sum;