<?php

// проверка отправки формы методом post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Результат: ";
}

// переменные
$turnover = 360;
$hours = 12;
$degree_hour = $turnover / $hours;

$degree = $_POST['degree']; // введенное количество градусов

// валидация
if ($degree < 0) {
    die("Введено отрицательное значение, повторите ввод.");
}

// результат
echo round($degree / $degree_hour,2);