<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1</title>
</head>
<body>

<p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.</p>

</body>
</html>
<?php

$arr = ['html', 'css', 'php', 'js', 'jq'];

foreach ($arr as $item)  {
    echo $item ."<br>"; //в браузере
    //echo $item ."\n"; //в консоле
}
