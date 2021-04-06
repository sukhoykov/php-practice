<?php

// проверка отправки формы методом post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Результат: ";
}

// переменная из формы html
$minute = $_POST['minute'];

// валидация
if ($minute < 0) {
    die("Введено отрицательное значение, повторите ввод.");
}

// решение
switch ($minute % 5) {
    case 0:
        case 1:
            case 2: echo "Горит зеленый свет"; break;
    case 3:
        case 4: echo "Горит красный свет"; break;
}