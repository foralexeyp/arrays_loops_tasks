<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>26</title>
</head>
<body>

<pre>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
индекс.</pre>

</body>
</html>

<?php

for ($i = 1; $i <= 100; $i++) {
    $a = rand(1, 100);
    $arr[] = $a;
}
//echo '<pre>';
print_r($arr);
//echo '</pre>';

$multiplication = 1;
foreach ($arr as $key => $value) {
    if ($value >0 && $key % 2 === 0) {
        $multiplication *= $value;
    }
    elseif ($value > 0 && $key !== 0) {
        echo $value . "\n";
    }
}
echo 'Multiplication = ' . $multiplication . "\n";
