<?php

// проверка отправки формы методом post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Результат: <br>";
}

// переменная из формы html
$card = $_POST['card'];

// валидация + решение
if ($card >= 2 && $card <= 10) {
    echo "Карты достоинством от 2 до 10 обозначаются числами. 
    Введите число в диапазоне от 11 до 14";
}
elseif ($card <= 1 || $card >= 15) {
    echo "Такой карты не существует, введите число 
    в диапазоне от 11 до 14";
}
else {
    switch ($card) {
        case 11:
            echo "Ваша карта {$card} - валет";
            break;
        case 12:
            echo "Ваша карта {$card} - дама";
            break;
        case 13:
            echo "Ваша карта {$card} - король";
            break;
        case 14:
            echo "Ваша карта {$card} - туз";
            break;
    }
}