<?php

$nama = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");

echo "ARRAY BELUM TERURUT : <br><br>";
foreach ($nama as $value) {
    echo $value;
    echo "<br>";
}

echo "<br>";

sort($nama, SORT_STRING | SORT_FLAG_CASE);

echo "ARRAY TELAH TERURUT : <br><br>";
foreach ($nama as $value) {
    echo $value;
    echo "<br>";
}
