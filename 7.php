<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>7</title>
</head>
<body>

<p>7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if<br>
    выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.</p>

</body>
</html>

<?php
$arr =[2, 5, 9, 15, 0, 4];

foreach ($arr as $item) {
    if ($item > 3 && $item < 10) {
        echo $item;
    }

}