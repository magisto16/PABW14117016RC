<!DOCTYPE html>
<html>

<head>
    <title>Output Data</title>
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <?php

    $nama = $_POST["name"];
    $alamat = $_POST["address"];
    $jk = $_POST["gender"];
    $gol = $_POST["goldar"];
    $hobi = $_POST["hobi"];
    $ket = $_POST["ket"];
    ?>
</head>

<body>

    <table class="table table-bordered">
        <thead>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Golongan Darah</th>
            <th>Hobi</th>
            <th>Keterangan</th>
        </thead>

        <tbody>
            <td><?php echo "$nama" ?>
            <td><?php echo "$alamat" ?>
            <td><?php echo "$jk" ?>
            <td><?php echo "$gol" ?>
            <td><?php
                if (isset($_POST['hobi']) && !empty($_POST['hobi']))
                    foreach ($_POST['hobi'] as $hobi) echo "$hobi<br>";
                ?>
            <td><?php echo "$ket" ?>
        </tbody>
    </table>

</body>

</html>