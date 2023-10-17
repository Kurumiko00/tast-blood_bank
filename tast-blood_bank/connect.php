<?php
$servername = "localhost";
$username = "Kurumiko";
$password = "Chinnawat02";
$database = "blood_bank";

$conn = new mysqli($servername, $username, $password, $database);

$conn ->set_charset('utf8');

if (mysqli_connect_error()){
    echo 'การเชื่อมต่อล้มเหลว';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Donor information</h1>
    <?php 
    $query = "SELECT user_id, name, lastname, blood_group, gender, age, date_donate, contact FROM id_card";
    $path = mysqli_query($conn, $query);
    if (mysqli_num_rows($path) > 0) {
        while($row = mysqli_fetch_assoc($path)){
    
   
        }
    }
   
    ?>

</body>
</html>