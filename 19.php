<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>19</title>
</head>
<body>

<pre>Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</pre>

</body>
</html>

<?php
$day = 'черверг';
$week = ['понедельник', 'вторник', 'среда', 'черверг', 'пятница', 'суббота', 'воскресенье'];

foreach ($week as $item) {
    if ($item == $day) {
        echo '<b>' . $item . '</b>'. "\n";
    }
    else {
        echo $item . "\n";
    }

}