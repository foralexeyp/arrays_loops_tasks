<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>24</title>
</head>
<body>

<p>24. Вам нужно разработать программу, которая считала бы количество вхождений
    какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
    442158755745 встречается 4 раза.</p>

</body>
</html>

<?php

$a = 442158755745;
echo substr_count($a, 5) . "\n";