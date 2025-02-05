<?php
session_start();
include 'db_connection.php'; // Connect to the database

if (isset($_POST['machine_id'])) {
    $machine_id = $_POST['machine_id'];
    
    // Update the status to 'ไม่ว่าง'
    $sql = "UPDATE clothes_dryer SET status = 'ไม่ว่าง' WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $machine_id);
    $stmt->execute();
}
