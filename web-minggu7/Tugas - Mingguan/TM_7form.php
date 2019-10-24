<!DOCTYPE html>
<html>

<head>
    <title>Form Data</title>
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <form action="TM_7hasil.php" method="POST">

        <div class="form-group">
            <label>Nama : </label><br>
            <input type="text" name="name" class="form-control"><br>
        </div>

        <div class="form-group">
            <label>Alamat :</label><br>
            <input type="text" name="address" class="form-control"><br>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin :</label><br>
            <input type="radio" name="gender" value="Laki-Laki">Male<br>
            <input type="radio" name="gender" value="Perempuan">Female<br>
        </div>

        <div class="form-group">
            <label>Golongan Darah :</label>
            <select name="goldar">
                <option value="-">Pilih</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="O">O</option>
            </select> <br>
        </div>

        <div class="form-group">
            <label>Hobi :</label><br>
            <input type="checkbox" name="hobi[]" value="Berenang">Berenang<br>
            <input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
            <input type="checkbox" name="hobi[]" value="Menggambar">Menggambar<br>
        </div>

        <div class="form-group">
            <label>Keterangan :</label><br>
            <textarea name="ket"></textarea><br>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</body>

</html>