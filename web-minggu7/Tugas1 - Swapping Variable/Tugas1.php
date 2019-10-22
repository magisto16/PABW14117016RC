<?php
$nilai_1 = 50;
$nilai_2 = 60;

function swap(&$a, &$b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}

swap($nilai_1, $nilai_2);

echo $nilai_1;
echo "\n";
echo $nilai_2;
