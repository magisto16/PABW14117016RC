<?php
$name = $_POST["name"];
$connection = mysqli_connect("localhost", "root", "", "student");

$sql = "delete from student_data where name = '$name'";
mysqli_query($connection, $sql);
