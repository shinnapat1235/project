<?php
session_start();
include 'db_connection.php';

if (isset($_GET['id'])) {
    $machine_id = $_GET['id'];
    
    // ฟังก์ชันตรวจสอบสถานะเครื่องซักผ้า
    function getMachineStatus($conn, $machine_id) {
        $sql = "SELECT status FROM washing_machines WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $machine_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['status'];
        } else {
            return null;
        }
    }

    $status = getMachineStatus($conn, $machine_id);
    echo json_encode(['status' => $status]);
}

$conn->close();
?>
