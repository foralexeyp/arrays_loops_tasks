<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>8</title>
</head>
<body>

<p>8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.<br>
    С помощью цикла foreach создайте строку '123456789'.</p>

</body>
</html>

<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $item) {
    $result .= $item;
}
strval($result);
var_dump($result);