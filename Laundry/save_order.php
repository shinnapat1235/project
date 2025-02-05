<?php
// เชื่อมต่อฐานข้อมูล
$servername = "localhost";
$username = "root"; // แก้ไขให้ตรงกับ user ที่ใช้
$password = ""; // แก้ไขให้ตรงกับ password ที่ใช้
$dbname = "washwithyou";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// รับข้อมูลจากฟอร์ม
$product_names = $_POST['product_name']; // รับชื่อสินค้าที่ส่งมาจากฟอร์ม
$prices = $_POST['price']; // รับราคาที่ส่งมาจากฟอร์ม

// เตรียมข้อมูลเพื่อบันทึกในตาราง orders
$order_date = date("Y-m-d H:i:s"); // วันที่และเวลาที่สั่งซื้อ

// วนลูปบันทึกคำสั่งซื้อแต่ละชิ้น
for ($i = 0; $i < count($product_names); $i++) {
    $product_name = $product_names[$i];
    $price = $prices[$i];

    // SQL สำหรับเพิ่มข้อมูลลงในตาราง orders
    $sql = "INSERT INTO orders (product_name, price, order_date) VALUES ('$product_name', '$price', '$order_date')";

    if ($conn->query($sql) === TRUE) {
        echo "New order created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();

// หลังจากบันทึกเสร็จสิ้น ให้เปลี่ยนหน้าไปยังหน้า Thank You หรือหน้าสรุปคำสั่งซื้อ
header("Location: thank_you.php");
exit();
?>
