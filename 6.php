<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>6</title>
</head>
<body>

<pre>6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
    русские — в массив $ru.
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    $en = array('green', 'red','blue');
    $ru = array('зеленый', 'красный', 'голубой');</pre>

</body>
</html>

<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = [];
$ru = [];

foreach ($arr as $key => $k) {
    $en[] = $key;
    $ru[] = $k;
}

var_dump($en);
var_dump($ru);