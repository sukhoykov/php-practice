<?php

// проверка отправки формы методом post
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Результат: ";
}

// переменные
$numeral = $_POST['numeral'];
$sum_numeral = 0;

// получение массива из строки
for ($i = 0; $i < strlen($numeral); $i++) {
    $sum_numeral += $numeral[$i]; // суммирование каждой цифры
}

// вывод результата
echo $sum_numeral;