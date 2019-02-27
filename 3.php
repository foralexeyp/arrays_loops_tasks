<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3</title>
</head>
<body>

<p>3. Дан массив с элементами 26, 17, 136, 12, 79, 15.<br>
С помощью цикла foreach найдите сумму квадратов элементов этого массива.<br>
 Результат запишите переменную $result.</p>

</body>
</html>
<?php
$arr = [26, 17, 136, 12, 79, 15];
$result = 0;
foreach ($arr as $item){
    $result = $result + $item * $item;
}
echo $result;