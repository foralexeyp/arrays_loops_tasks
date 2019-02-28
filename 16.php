<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>16</title>
</head>
<body>

<pre>16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9</pre>

</body>
</html>

<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $key => $value) {
    echo $value;

    if ($value % 3 === 0) {
        echo "\n";
    }
        else {
            echo ', ';
        }

    }

