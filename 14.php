<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>14</title>
</head>
<body>

<pre>14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
выведите на экран 'Есть!', иначе выведите 'Нет!'</pre>

</body>
</html>

<?php
$e = 2;
$arr = [4, 2, 5, 19, 13, 0, 10];
foreach ($arr as $item) {
    if ($item == $e) {
        echo 'Есть!';
    }
}
echo 'Нет!';
