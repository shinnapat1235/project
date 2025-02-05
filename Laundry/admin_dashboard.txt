<?php
// เริ่มต้น session
session_start();
include 'db_connection.php'; // เชื่อมต่อฐานข้อมูล

// ตรวจสอบว่าผู้ใช้ได้ล็อกอินเป็น admin หรือไม่
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}

// อัปเดตสถานะของเครื่องซักผ้า
if (isset($_POST['update_status_machine'])) {
    $machine_id = $_POST['machine_id'];
    $new_status = $_POST['status'];

    $sql = "UPDATE washing_machines SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $new_status, $machine_id);
    $stmt->execute();
}

// อัปเดตสถานะของเครื่องอบผ้า
if (isset($_POST['update_status_dryer'])) {
    $dryer_id = $_POST['dryer_id'];
    $new_dryer_status = $_POST['status'];

    $sql = "UPDATE clothes_dryer SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $new_dryer_status, $dryer_id);
    $stmt->execute();
}

?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Wash with You</title>
    <style>
        body {
            font-family: 'Mitr', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #7cc877;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            padding: 20px;
        }
        .machine-card {
            background: white;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<header>
    <h2>Admin Dashboard - Wash with You</h2>
    <a href="login.php" class="logout">Logout</a>
</header>

<div class="container">
    <h3>Washing Machines</h3>
    <?php
    // Query ข้อมูลจากฐานข้อมูลเครื่องซักผ้า
    $sql = "SELECT * FROM washing_machines ORDER BY id ASC"; // เรียงลำดับตาม id
    $result = $conn->query($sql);

    // ตรวจสอบว่ามีข้อมูลหรือไม่
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='machine-card'>";
            echo "Machine ID: " . $row["id"]. " - Name: " . $row["machine_name"]. " - Status: " . $row["status"]. "<br>";
            echo "<form method='POST'>"; 
            echo "<input type='hidden' name='machine_id' value='" . $row["id"] . "'>";
            echo "<select name='status'>";
            echo "<option value='ว่าง'" . ($row['status'] == 'ว่าง' ? ' selected' : '') . ">ว่าง</option>";
            echo "<option value='ไม่ว่าง'" . ($row['status'] == 'ไม่ว่าง' ? ' selected' : '') . ">ไม่ว่าง</option>";
            echo "</select>";
            echo "<button type='submit' name='update_status_machine'>Update Status</button>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "ไม่มีข้อมูล";
    }
    ?>

    <h3>Clothes Dryers</h3>
    <?php
    // Query ข้อมูลจากฐานข้อมูลเครื่องอบผ้า
    $sql = "SELECT * FROM clothes_dryer ORDER BY id ASC"; // เรียงลำดับตาม id
    $result = $conn->query($sql);

    // ตรวจสอบว่ามีข้อมูลหรือไม่
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='machine-card'>";
            echo "Dryer ID: " . $row["id"]. " - Name: " . $row["machine_name"]. " - Status: " . $row["status"]. "<br>";
            echo "<form method='POST'>"; 
            echo "<input type='hidden' name='dryer_id' value='" . $row["id"] . "'>";
            echo "<select name='status'>";
            echo "<option value='ว่าง'" . ($row['status'] == 'ว่าง' ? ' selected' : '') . ">ว่าง</option>";
            echo "<option value='ไม่ว่าง'" . ($row['status'] == 'ไม่ว่าง' ? ' selected' : '') . ">ไม่ว่าง</option>";
            echo "</select>";
            echo "<button type='submit' name='update_status_dryer'>Update Status</button>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "ไม่มีข้อมูล";
    }

    // ปิดการเชื่อมต่อ
    $conn->close();
    ?>
</div>

</body>
</html>
