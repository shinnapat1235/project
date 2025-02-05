<?php
// ข้อมูลการเชื่อมต่อฐานข้อมูล
$servername = "localhost";
$username = "root";
$password = ""; // แก้ไขให้ตรงกับรหัสผ่านของฐานข้อมูล
$dbname = "washwithyou";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}

// ตัวแปรสำหรับแจ้งเตือน
$error_message = "";
$success_message = "";

// ตรวจสอบว่ามีการส่งข้อมูลจากฟอร์มหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากฟอร์ม
    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $confirm_password = $_POST['confirm_password'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    // ตรวจสอบว่าอีเมลนี้มีอยู่แล้วในฐานข้อมูลหรือไม่
    $check_email_query = $conn->prepare("SELECT * FROM customers WHERE email = ?");
    $check_email_query->bind_param("s", $email);
    $check_email_query->execute();
    $check_email_query->store_result();

    if ($check_email_query->num_rows > 0) {
        $error_message = "อีเมลนี้ถูกใช้แล้ว กรุณาใช้อีเมลอื่น";
    } else {
        // เตรียมและรันคำสั่ง SQL โดยใช้ prepare statement
        $stmt = $conn->prepare("INSERT INTO customers (username, first_name, last_name, email, password, phone_number, address) VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        if ($stmt) {
            // กำหนดค่าให้กับ parameter
            $stmt->bind_param("sssssss", $username, $first_name, $last_name, $email, $password, $phone_number, $address);
            
            // รันคำสั่งและตรวจสอบผล
            if ($stmt->execute()) {
                $success_message = "สมัครเสร็จเรียบร้อยแล้ว!";
                // ถ้าลงทะเบียนสำเร็จ เปลี่ยนหน้าไปยัง Login.php
                header("Location: Login.php?message=" . urlencode($success_message));
                exit();
            } else {
                $error_message = "เกิดข้อผิดพลาด: " . $stmt->error;
            }

            // ปิด statement
            $stmt->close();
        } else {
            $error_message = "เกิดข้อผิดพลาดในการเตรียม statement: " . $conn->error;
        }
    }
    // ปิด statement ตรวจสอบอีเมล
    $check_email_query->close();
}

// ปิดการเชื่อมต่อ
$conn->close();
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มลงทะเบียน</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('images/1676009161780-1461.7890625-0qund85289b55jvaa5xz.jpg') no-repeat center center fixed; /* ใส่ URL ของภาพที่คุณต้องการใช้ที่นี่ */
            background-size: cover; /* ทำให้ภาพขยายเต็มจอ */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-form {
            background-color: rgba(255, 255, 255, 0.8); /* พื้นหลังโปร่งแสง */
            padding: 20px;
            width: 400px; /* ปรับขนาดความกว้าง */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .register-form h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .register-form input[type="text"],
        .register-form input[type="email"],
        .register-form input[type="password"],
        .register-form textarea {
            width: 100%;
            padding: 12px; /* ปรับขนาด padding */
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box; /* ทำให้ padding ไม่ส่งผลต่อความกว้าง */
        }

        .register-form textarea {
            resize: none;
            height: 60px; /* ขนาดที่อยู่ */
        }

        .register-form input[type="submit"] {
            background-color: #00aaff;
            color: white;
            padding: 12px; /* ปรับขนาด padding */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%; /* ให้ปุ่มกว้างเท่ากับฟอร์ม */
        }

        .register-form input[type="submit"]:hover {
            background-color: #0077cc;
        }

        .success {
            color: green;
            font-weight: bold;
        }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="register-form">
    <h2>ฟอร์มลงทะเบียน</h2>
    <!-- แสดงข้อความแจ้งเตือนถ้ามี -->
    <?php if (!empty($error_message)) : ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php endif; ?>
    
    <?php if (!empty($success_message)) : ?>
        <p class="success"><?php echo $success_message; ?></p>
    <?php endif; ?>

    <form method="post" action="register.php">
        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="first_name" placeholder="ชื่อ" required>
        <input type="text" name="last_name" placeholder="นามสกุล" required>
        <input type="email" name="email" placeholder="อีเมล" required>
        <input type="text" name="phone_number" placeholder="เบอร์โทร">
        <input type="password" name="password" placeholder="รหัสผ่าน" required>
        <input type="password" name="confirm_password" placeholder="ยืนยันรหัสผ่าน" required>
        <textarea name="address" placeholder="ที่อยู่" required></textarea> <!-- เพิ่มฟิลด์ที่อยู่ -->
        <input type="submit" value="ลงทะเบียน">
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
</div>

</body>
</html>
