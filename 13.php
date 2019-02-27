<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>13</title>
</head>
<body>

<p>13. Вывести таблицу умножения</p>

</body>
</html>

<?php

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++){
        echo $j . '*' . $i . ' = '. $j*$i.' '."\n";
    }
    echo "\n";
}