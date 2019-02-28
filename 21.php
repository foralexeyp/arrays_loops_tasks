<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>21</title>
</head>
<body>

<pre><p>21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
рядов, а не 5.<br><br>
1<br>
22<br>
333<br>
4444<br>
55555</p></pre>

</body>
</html>

<?php

for ($i = 1; $i <= 9; $i++) {
    for ($c = 1; $c <= $i; $c++) {
        echo $i;
    }
    echo "\n";
}