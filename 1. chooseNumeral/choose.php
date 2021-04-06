<?php

// проверка отправки формы методом post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Результат: <br/>";
}

// переменные
$number = $_POST['number'];
$numeral = $_POST['numeral'];
$count = 0;

// получение массива из строки
for ($i = 0; $i < strlen($number); $i++) {
    if ($number[$i] == $numeral) { // если элемент массива равен введенной цифре
        $count++;
    }
}

// вывод результата
echo "Цифра {$numeral} в числе {$number} встречается {$count} раз";