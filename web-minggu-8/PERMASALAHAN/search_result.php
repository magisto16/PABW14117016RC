<?php
$search = $_POST['name'];
$connection = mysqli_connect("localhost", "root", "", "student") or die("Koneksi Gagal");
$result = mysqli_query($connection, "select id_student,student_data.name,address,department.name,image
                                     from department join student_data on department.id_dept=
                                     student_data.id_dept where student_data.id_dept =
                                    (select id_dept from student_data where name like '%$search%')");
$sum = mysqli_num_rows($result);
echo "<br>";
echo "Found: $sum";
echo "<br>";

while ($rows = mysqli_fetch_array($result)) {
    echo "Id Student : ";
    echo $rows[0];
    echo "<br>";
    echo "Name : ";
    echo $rows[1];
    echo "<br>";
    echo "Address : ";
    echo $rows[2];
    echo "<br>";
    echo "Department : ";
    echo $rows[3];
    echo "<br>";
    echo "<img src=img/$rows[4]>";
}
