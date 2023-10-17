<?php
require("connect.php");
$user_id = $_POST["user_id"];
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$blood_group = $_POST["blood_group"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$date_donate = $_POST["date_donate"];
$contact = $_POST["contact"];
$quantity = $_POST["quantity"];
$sql = "SELECT * FROM id_card WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    echo "ID card: $student_code is exist <a href=cat.php>Back</a>";
    exit(0);
}

$sql = "INSERT INTO id_card(user_id, name, lastname, blood_group, gender, age, date_donate, contact, quantity)";
$sql .= " VALUES ('$user_id', '$name', '$lastname','$blood_group','$gender','$age','$date_donate','$contact','$quantity')";
mysqli_query($conn, $sql);
header("location: cat.php");
exit(0);
?>