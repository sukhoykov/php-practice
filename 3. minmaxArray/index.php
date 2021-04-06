<?php

// задание массива
$arr = array(rand(), rand(),
            rand(), rand());

// вывод массива для наглядности
echo "<pre>";
print_r($arr);
echo "</pre>";

// вывод min/max значений
echo "Min значение: ".$min = min($arr)."</br>";
echo "Max значение: ".$max = max($arr)."</br>";