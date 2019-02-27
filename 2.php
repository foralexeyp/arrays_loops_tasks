<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2</title>
</head>
<body>

<p>2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива.<br>
    Запишите ее в переменную $result.</p>

</body>
</html>
<?php

$arr = [1, 20, 15, 17, 24, 35];
$result = 0;
foreach ($arr as $item ) {

    $result = $result + $item;

}

echo $result;
