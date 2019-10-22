<!DOCTYPE html>
<html>

<?php
$nama = $_GET["name"];
$panjang = strlen($nama);

if ($panjang > 0 && $panjang <= 10) {
    $bet = $panjang * 300;
    echo "<font color=purple> $nama dan Total Harga : $bet</font>";
} else if ($panjang > 10 && $panjang <= 20) {
    $bet = $panjang * 500;
    echo "<font color=yellow> $nama dan Total Harga : $bet</font>";
} else if ($panjang > 20) {
    $bet = $panjang * 700;
    echo "<font color=green> $nama dan Total Harga : $bet</font>";
} else {
    $bet = 0;
    echo "<font color=red> $nama dan Total Harga : $bet</font>";
}
?>

</html>