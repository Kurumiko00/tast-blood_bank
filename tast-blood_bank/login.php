<?php

session_start();
require('connect.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // ค้นหาข้อมูลผู้ใช้งานในฐานข้อมูล
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // การลงชื่อเข้าใช้งานสำเร็จ
        echo "ลงชื่อเข้าใช้งานสำเร็จ";
        header("Location: Admin settings.php");
        exit;

        
    } else {
        // การลงชื่อเข้าใช้งานล้มเหลว
        echo "ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง";
    }
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>

