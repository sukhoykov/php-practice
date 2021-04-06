<?php

$sum = 1;

// массив
$arr = [];
for ($i = 0; $i < 100; $i++) {
    $arr[] = rand(1, 50);
}

// вывод массива
echo "<pre>";
print_r($arr);
echo "</pre>";

// решение
foreach ($arr as $key => $value) {
    if ($key % 2) {
        echo $value." - нечетное</br>";
    }
    else {
        echo $value." - четное</br>";
        $sum *= $value;
    }
}

// результат
echo "Результат: ".(string) $sum;