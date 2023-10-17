<?php
require("connect.php");
$sql = "SELECT * FROM id_card";
$result = mysqli_query($conn, $sql);
echo "<center>";
echo "<table border=1 width=60%>";
echo "<tr><a href=Donor_information.php>Add Donor</a></tr>";
echo "<tr><th>รหัสบัตรประชาชน</th><th>ชื่อ</th><th>นามสกุล</th><th>กรุ๊ปเลือด:</th><th>เพศ</th><th>อายุ</th><th>วันบริจาคเลือด</th><th>ปริมาตร</th><th>ข้อมูลติดต่อ</th></tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row["user_id"]."</td>"
    ."<td>".$row["name"]."</td>"
    ."<td>".$row["lastname"]."</td>"
    ."<td>".$row["blood_group"]."</td>"
    ."<td>".$row["gender"]."</td>"
    ."<td>".$row["age"]."</td>"
    ."<td>".$row["date_donate"]."</td>"
    ."<td>".$row["quantity"]."</td>"
    ."<td>".$row["contact"]."</td>";
}
echo "</table><br>";

echo "</center>";
?>

