<?php
session_start();
include 'db_connection.php';

if (isset($_POST['id'])) {
    $machine_id = $_POST['id'];

    // อัปเดตสถานะของเครื่องซักผ้า
    $sql = "UPDATE washing_machines SET status = 'ไม่ว่าง' WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $machine_id);
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'ไม่สามารถอัปเดตสถานะได้']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'ID ไม่ถูกต้อง']);
}

$conn->close();
?>
