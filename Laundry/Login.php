<?php
// เริ่มต้น session
session_start();

// ตั้งค่าการเชื่อมต่อกับฐานข้อมูล
$servername = "localhost";
$db_username = "root";  // ชื่อผู้ใช้ฐานข้อมูล
$db_password = "";  // รหัสผ่านฐานข้อมูล
$dbname = "washwithyou";  // ชื่อฐานข้อมูล

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}

// ตัวแปรสำหรับแจ้งเตือน
$error_message = "";

// ตรวจสอบว่ามีการส่งข้อมูลจากฟอร์มหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากฟอร์ม
    $username = $_POST['username'];
    $password = $_POST['password'];

    // เขียน SQL สำหรับการตรวจสอบชื่อผู้ใช้
    $sql = "SELECT * FROM customers WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);  // ผูกตัวแปรกับ SQL
    $stmt->execute();
    $result = $stmt->get_result();

    // ตรวจสอบว่าพบผู้ใช้หรือไม่
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // ดึงข้อมูลผู้ใช้

        // ตรวจสอบรหัสผ่าน
        if (password_verify($password, $row['password'])) {
            // ถ้ารหัสผ่านถูกต้อง ตรวจสอบ role
            if ($username == 'zeemon') {
                // ถ้าเป็น admin
                $_SESSION['username'] = $username;
                $_SESSION['role'] = 'admin';
                header("Location: admin_dashboard.php");  // เปลี่ยนไปหน้า admin dashboard
                exit();
            } else {
                // ถ้าเป็นผู้ใช้ทั่วไป
                $_SESSION['username'] = $username;
                $_SESSION['role'] = 'user';
                header("Location: index.php");  // เปลี่ยนไปหน้า index.php
                exit();
            }
        } else {
            // ถ้ารหัสผ่านไม่ถูกต้อง
            $error_message = "รหัสผ่านไม่ถูกต้อง";
        }
    } else {
        // ถ้าไม่พบชื่อผู้ใช้
        $error_message = "ไม่พบชื่อผู้ใช้นี้ในระบบ";
    }

    // ปิด statement
    $stmt->close();
}

// ปิดการเชื่อมต่อ
$conn->close();
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Wash with You</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Mitr', sans-serif;
            background-image: url(images/1676009161780-1461.7890625-0qund85289b55jvaa5xz.jpg);
            display: flex;
            justify-content: space-between; 
            align-items: center;
            height: 100vh;
            padding: 0 400px; 
            color: #333;
        }

        .welcome-text {
            flex: 1;
            text-align: center; 
        }

        .welcome-text img {
            max-width: 100%; 
            height: auto; 
            border-radius: 20px;
            box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.2);
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9); 
            padding: 40px;
            border-radius: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
            flex: 1;
        }

        h2 {
            font-size: 4rem;
            color: #000000;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 1rem;
            color: #555;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 1rem;
            color: #333;
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background-color: #7cc877;
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 1.2rem;
        }

        .error-message {
            color: red;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .register-link {
            margin-top: 20px;
            font-size: 1rem;
            color: #7cc877;
        }

        .register-link a {
            text-decoration: none;
        }

        @media (max-width: 768px) {
            body {
                flex-direction: column;
                padding: 20px;
            }

            .welcome-text {
                margin-bottom: 30px;
                text-align: center;
            }

            .login-container {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="welcome-text">
        <img src="images/LOGO.png" alt="Welcome Image">
    </div>

    <div class="login-container">
        <h2>Login</h2>

        <!-- แสดงข้อความแจ้งเตือนถ้ามี -->
        <?php if (!empty($error_message)) : ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>
            
        <form id="login-form" method="POST" action="login.php">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <span class="register-link"><a href="register.php">Don't have an account? Register</a></span>
    </div>
</body>
</html>
