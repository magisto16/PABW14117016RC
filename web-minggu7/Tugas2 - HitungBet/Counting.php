<!DOCTYPE html>
<html>

<?php
$nama = $_GET["name"];
$warna = $_GET["color"];
$panjang = strlen($nama);

if ($panjang > 0 && $panjang <= 10) {
    $bet = $panjang * 300;
    echo "<font color=$warna> $nama dan Total Harga : $bet</font>";
} else if ($panjang > 10 && $panjang <= 20) {
    $bet = $panjang * 500;
    echo "<font color=$warna> $nama dan Total Harga : $bet</font>";
} else if ($panjang > 20) {
    $bet = $panjang * 700;
    echo "<font color=$warna> $nama dan Total Harga : $bet</font>";
} else {
    $bet = 0;
    $warna = "red";
    echo "<font color=$warna> $nama dan Total Harga : $bet</font>";
}
?>

</html>