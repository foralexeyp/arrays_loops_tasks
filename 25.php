<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>25</title>
</head>
<body>

<pre>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.</pre>

</body>
</html>

<?php


echo $a;
for ($i = 1; $i < 5; $i++) {
    $a = rand(0, 4);
    $arr[] = $a;
}
$arr1 = array();
echo '<pre>';
print_r($arr);
echo '</pre>';
$max_el = max($arr); // Ищем максимальный элемент массива
$min_el = min($arr); //Ищем минимальный элемент массива

echo 'max_el = ' . $max_el;
echo '<br>';
echo 'min_el = ' . $min_el;
echo '<br>';

$max_key = array_keys($arr, $max_el)[0]; //Ищем ключ первого максимального элемента
$min_key = array_keys($arr, $min_el)[0]; //Ищем ключ первого минимального элемента

foreach ($arr as $key => $value) {
    if ($key == $max_key) {
        $arr1[] = $min_el;
    } elseif ($key == $min_key) {
        $arr1[] = $max_el;
    } else {
        $arr1[] = $value;
    }
}
echo '<pre>';
print_r($arr1);
echo '</pre>';








