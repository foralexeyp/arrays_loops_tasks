<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>20</title>
</head>
<body>

<pre><p>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.<br><br>
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx</p></pre>

</body>
</html>

<?php



for ($a = 0; $a < 20; $a++) {
    for ($i = 0; $i <= $a; $i++){
        echo 'x';
    }
    echo "\n";
}


