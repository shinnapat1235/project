<?php
$servername = "localhost";  // ชื่อโฮสต์ของคุณ (มักเป็น 'localhost')
$username = "root";         // ชื่อผู้ใช้ MySQL ของคุณ
$password = "";             // รหัสผ่านของ MySQL (ถ้าเว้นว่างไว้)
$dbname = "washwithyou";    // ชื่อฐานข้อมูลของคุณ

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}
?>
