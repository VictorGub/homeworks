<?php
/*
 * Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий
 * месяц должен храниться в переменной $month.
 */

$months = [
    'Январь',
    'Февраль',
    'Март',
    'Апрель',
    'Май',
    'Июнь',
    'Июль',
    'Август',
    'Сентябрь',
    'Октябрь',
    'Ноябрь',
    'Декабрь'
];
$month = $months[date('m') - 1];
foreach ($months as $value) {
    echo $value == $month ? "<strong>{$value}</strong><br>\n" : "{$value}<br>\n";
}