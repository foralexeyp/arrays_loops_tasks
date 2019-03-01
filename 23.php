<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>23</title>
</head>
<body>

<pre><p>23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6.</p>
По желанию можете сделать проверку на корректность введения данных пользователем.</pre>

</body>
</html>

<p>Введите число:</p>
<form method="post">
    <input name="number1">
    <input type="submit">
</form>

<?php

$n = $_POST['number1'];

if (empty($n)) {
    echo 'Пусто!';
} elseif (!ctype_digit($n)) {
    echo 'Нет чисел';
} else {
    $result = 0;
    $arr = str_split($n);
    foreach ($arr as $item) {
        $result += $item;
    }
    echo 'Summa = ' . $result;

}


