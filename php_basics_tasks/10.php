<?php
/*
 * С помощью конструкции switch выведите фразу: "Это рабочий день", если значение переменной day попадает в диапазон
 * чисел от 1 до 5 (включительно).
 */

$day = rand(1, 7);
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день';
        break;
}