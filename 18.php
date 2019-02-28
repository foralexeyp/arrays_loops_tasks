<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>18</title>
</head>
<body>

<pre>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.</pre>

</body>
</html>

<?php
$week = ['понедельник', 'вторник', 'среда', 'черверг', 'пятница', 'суббота', 'воскресенье'];

foreach ($week as $item) {
    if ($item == 'суббота' || $item == 'воскресенье') {
        echo '<b>' . $item . '</b>'. "\n";
    }
    else {
        echo $item . "\n";
    }

}