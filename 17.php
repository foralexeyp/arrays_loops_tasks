<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>17</title>
</head>
<body>

<pre>17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</pre>

</body>
</html>

<?php
$month = 'февраль';
$arr = ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];

foreach ($arr as $item) {
    if ($item == 'февраль') {
        echo   '<b>' . $item . '</b>' . ' ';

    } else {
        echo $item . ' ';
    }
}
