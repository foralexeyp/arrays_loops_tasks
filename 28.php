<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>28</title>
</head>
<body>

<p>28. Вывести таблицу умножения с помощью двух циклов for.</p>

</body>
</html>

<?php

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++){
        echo $j . '*' . $i . ' = '. $j*$i.' '."\n";
    }
    echo "\n";
}