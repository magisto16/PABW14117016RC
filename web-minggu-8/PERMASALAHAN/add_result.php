<?php
$id_student = $_POST["id_student"];
$name = $_POST["name"];
$address = $_POST["address"];
$dept = $_POST["dept"];

if ($dept == "Communication") {
    $id_dept = "C1";
} else if ($dept == "Elka") {
    $id_dept = "E1";
} else if ($dept == "IT") {
    $id_dept = "I1";
} else if ($dept == "Elin") {
    $id_dept = "EN1";
}

$filename = $_FILES['image']['name'];
$place = $_FILES['image']['tmp_name'];

move_uploaded_file($place, 'img/' . $filename);

$connection = mysqli_connect("localhost", "root", "", "student") or die("Koneksi Gagal");

$insert = "INSERT INTO department (`id_dept`, `name`) VALUES ('$id_dept','$dept')";
mysqli_query($connection, $insert);

$insert2 =  "INSERT INTO student_data (`id_student`, `name`, `address`, `id_dept`, `image`) 
            VALUES ('$id_student','$name','$address','$id_dept','$filename')";
mysqli_query($connection, $insert2);
