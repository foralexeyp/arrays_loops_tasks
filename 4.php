<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4</title>
</head>
<body>

<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
    помощью второго — столбец элементов.</p>
<p>$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');</p>

</body>
</html>
<?php

$arr = array('green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой');

foreach ($arr as $key => $k) {
    echo $key."<br>";
}

foreach ($arr as $element) {
    echo $element."<br>";
}