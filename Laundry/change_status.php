<?php
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $booking_id = $_POST['booking_id'];
    $new_status = $_POST['new_status'];

    // อัปเดตสถานะการจอง
    $sql = "UPDATE bookings SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ii', $new_status, $booking_id);

    if ($stmt->execute()) {
        // หลังจากอัปเดตสำเร็จ กลับไปยังหน้าแดชบอร์ด
        header("Location: admin_dashboard.php");
        exit();
    } else {
        echo "เกิดข้อผิดพลาด: " . $stmt->error;
    }
}
?>
