<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }

        img {
            max-width: 30%;
            height: auto;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .btn-confirm {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 3em;
            transition: background-color 0.3s;
        }

        .btn-confirm:hover {
            background-color: #45a049;
        }

        .thank-you-message {
            display: none;
            margin-top: 20px;
            color: #4CAF50;
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <img src="images/qr01.jpg" alt="Thank You">
    <h1>กรุณาชำราค่าบริการ</h1>
    <p>เมื่อชำระค่าบริการแล้วกรุณากดปุ่ม Confirm</p>
    <button class="btn-confirm" onclick="showThankYouMessage()">Confirm</button>
    
    <div class="thank-you-message" id="thank-you-message">
        ขอบคุณที่ใช้บริการ!
    </div>

    <script>
        function showThankYouMessage() {
            // แสดงข้อความขอบคุณ
            document.getElementById('thank-you-message').style.display = 'block';
            // เปลี่ยนเส้นทางไปหน้าหลังหลังจาก 2 วินาที
            setTimeout(function() {
                window.location.href = 'index.php'; // เปลี่ยนเส้นทางไปหน้าหลัก
            }, 2000); // รอ 2 วินาทีก่อนเปลี่ยนหน้า
        }
    </script>
</body>
</html>
