<?php

// проверка отправки формы методом post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Результат: ";
}

// переменная из формы html
$year = $_POST['year'];
$curYear = $year % 12;

// животные
$animals = [
    "Обезьяна", "Петух", "Собака", "Свинья",
    "Крыса", "Бык", "Тигр", "Кролик",
    "Дракон", "Змея", "Лошадь", "Овца",
];

// валидация + решение
if ($year < 1924) {
    echo "Некорректное значение, введите число в диапазоне от 1924";
}
else {
    echo $year." год по китайскому календарю - ".$animals[$curYear];
}