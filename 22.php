<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>22</title>
</head>
<body>

<pre><p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p></pre>

</body>
</html>

<?php
/*
for ($i = 2; $i <= 10; $i += 2){
        for ($a = 1; $a <= $i; $a++ ){
            echo 'x';
        }
    echo "\n";
}
*/

$i = 0;
while ($i <= 10) {
    $a = 1;
    $i += 2;
    while ($a <= $i) {
        echo 'x';
        $a++;
    }
    echo "\n";
}