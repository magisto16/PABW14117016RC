<?php
$bilangan = $_GET["bilangan"];
if ($bilangan >= 1) {
    for ($i = 1; $i <= $bilangan; $i++) {
        $faktorial = 1;
        for ($j = $i; $j > 0; $j--) {
            $faktorial *= $j;
        }
    }
    echo $faktorial;
} else if ($bilangan == 0) {
    echo 1;
} else {
    echo "Masukkan Bilangan Positif";
}
