<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>15</title>
</head>
<body>

<pre>15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество
элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
5, 19, 13, 0, 10.</pre>

</body>
</html>

<?php
$arr = [4, 2, 5, 19, 13, 0, 10];
$count = 0;
foreach ($arr as $value => $key) {
    $count++;
}

echo $count . "\n";
