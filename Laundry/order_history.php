<?php
// เชื่อมต่อฐานข้อมูล
$servername = "localhost";
$username = "root";  // เปลี่ยนตามค่าของคุณ
$password = "";      // เปลี่ยนตามค่าของคุณ
$dbname = "washwithyou";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// สร้างคำสั่ง SQL เพื่อดึงข้อมูลคำสั่งซื้อ
$sql = "SELECT product_name, price, order_date FROM orders ORDER BY order_date DESC";
$result = $conn->query($sql);

// ตรวจสอบว่ามีข้อมูลคำสั่งซื้อหรือไม่
if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Product Name</th>
                <th>Price (THB)</th>
                <th>Order Date</th>
            </tr>";
    
    // วนลูปเพื่อแสดงข้อมูลคำสั่งซื้อทีละรายการ
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["product_name"]."</td>
                <td>".$row["price"]."</td>
                <td>".$row["order_date"]."</td>
              </tr>";
    }
    
    echo "</table>";
} else {
    echo "No orders found.";
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>
