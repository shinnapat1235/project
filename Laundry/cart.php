<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Wash with you - Responsive HTML5 Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="ProLaundry - Responsive HTML5 Template">
    <meta name="author" content="ProLaundry">
    <link rel="shortcut icon" href="images/favicon.ico">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    </head>
<body>
<nav class="panel-menu" id="mobile-menu">
	<ul>

	</ul>
	<div class="mm-navbtn-names">
		<div class="mm-closebtn">Close</div>
		<div class="mm-backbtn">Back</div>
	</div>
</nav>
<header id="tt-header">
	<!-- holder-top (desktop) -->
	<div class="holder-top-desktop d-none d-md-block">
		<div class="row">
			<div class="col-auto">
				<div class="h-info01">
					<div class="tt-item">
						<address>
						778/8 Sriracha 10280
						</address>
					</div>
					<div class="tt-item">
						Mon-Fri 08:00 AM - 05:00 PM
Sat-Sun 10:00 AM - 5:00 PM
					</div>
					<div class="tt-item">
						<a href="mailto:taeoven@gmail.com">
							taeoven@gmail.com
						</a>
					</div>
				</div>
			</div>
			<div class="col-auto ml-auto">
				<div class="tt-obj">
					<div class="h-info02">
						<div class="tt-item">
							<address>
								<a href="tel:061-457-1501"><span class="icons-483947"></span> 061-457-1501</a>
							</address>
						</div>
					</div>
				</div>
				<div class="tt-obj">
					<ul class="h-social">
						<li><a href="https://twitter.com" target="_blank" class="icons-733635"></a></li>
						<li><a href="https://www.facebook.com/" target="_blank" class="icons-59439"></a></li>
						<li><a href="https://www.facebook.com/" target="_blank" class="icons-2111532"></a></li>
						<li><a href="https://www.instagram.com/" target="_blank" class="icons-733614"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /holder-top (desktop) -->
	<!-- holder- -->
	<div id="js-init-sticky">
		<div class="tt-holder-wrapper">
			<div class="tt-holder">
				<div class="tt-col-left">
					<!-- logo -->
					<a href="index.php" class="tt-logo tt-logo-alignment">
	<i class="icons-logo tt-icon"></i><span class="tt-base-color">WASH</span>WITH YOU
</a>
					<!-- /logo -->
				</div>
				<div class="tt-col-center tt-col-wide tt-col-objects text-center">
					<div class="tt-col__item">
						<!-- desktop-nav -->
						<nav id="tt-nav">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li>
			<a href="about.php">About Us</a>
		</li>
		<li>
			<a href="services.php">Services</a>
			<ul>
				<li><a href="services-item.php">Services Item</a></li>
			</ul>
		</li>
		<li><a href="price.php">Prices</a></li>
		<li>
			<a href="washing machine.php">Washing machine</a>
			<ul>
				<li><a href="Clothes dryer.php">Clothes dryer</a></li>
			</ul>
		</li>
		<li><a href="faq.php">FAQ</a></li>
		<li>
			<a href="contact.php">Contacts</a>
		</li>
		<li>
			<a href="Product.php">Product</a>
		</li>
	</ul>
</nav>
						<!-- /desktop-nav -->
					</div>
				</div>
				<div class="tt-col-right tt-col-objects">
					<div class="tt-col__item d-block d-lg-none">
						<div class="h-info02">
							<div class="tt-item">
								<address>
									<a href="061-457-1501"><span class="icons-483947"></span> 061-457-1501</a>
								</address>
							</div>
						</div>
					</div>
					<div class="tt-obj tt-obj-cart js-dropdown-cart">
						<a href="cart.php" class="tt-obj__btn">
							<i class="icons-711897"></i>  
						</a>
					</div>
					<div class="tt-col__item d-none d-md-block">
						<a href="#" class="tt-btn" data-toggle="modal" data-target="#modalMRequestQuote">
							<a href="Login.php" class="tt-btn tt-logout-btn">
								<span class="mask">ออกจากระบบ</span>
								<div class="button">ออกจากระบบ</div>
							</a>
						</a>
					</div>
					<div class="tt-col__item toggle-wrapper">
						<a href="#" id="tt-menu-toggle" class="icons-1828859"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

    <style>
        h1, h2 {
            text-align: center;
            color: #333;
        }

        .special-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        .btn-remove {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn-remove:hover {
            background-color: #ff1a1a;
        }

        .btn-checkout {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .btn-checkout:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <!-- ส่วน header เดิมของคุณจะอยู่ที่นี่ -->
    </header>

    <main>
        <div class="container special-container">  
            <h1>Your Cart</h1>

            <!-- ฟอร์มที่ส่งข้อมูลไปยัง save_order.php -->
            <form action="save_order.php" method="POST" onsubmit="return checkCart()">
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price (THB)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="cart-items"></tbody>
                </table>

                <h2>Total: <span id="total-price">0</span> THB</h2>
                
                <!-- ปุ่ม Submit สำหรับบันทึกคำสั่งซื้อ -->
                <button type="submit" class="btn-checkout">Proceed to Checkout</button>
            </form>
        </div>
    </main>

    <footer id="tt-footer">
        <!-- Footer ของคุณจะอยู่ที่นี่ -->
    </footer>

    <script>
        function loadCart() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let cartItems = document.getElementById('cart-items');
            cartItems.innerHTML = ''; // เคลียร์ข้อมูลเดิม
            let totalPrice = 0;

            cart.forEach((item, index) => {
                let row = `
                    <tr>
                        <td><input type="hidden" name="product_name[]" value="${item.machineName}">${item.machineName}</td>
                        <td><input type="hidden" name="price[]" value="${item.price}">${item.price}</td>
                        <td><button class="btn-remove" type="button" onclick="removeFromCart(${index})">Remove</button></td>
                    </tr>
                `;
                cartItems.innerHTML += row;
                totalPrice += item.price;
            });

            document.getElementById('total-price').innerText = totalPrice;
        }

        function removeFromCart(index) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.splice(index, 1); // ลบสินค้าตาม index
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart(); // โหลดข้อมูลใหม่หลังจากลบสินค้า
        }

        function clearCart() {
            // เคลียร์ตะกร้าสินค้าหลังจากทำการส่งฟอร์ม
            localStorage.removeItem('cart');
        }

        function checkCart() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (cart.length === 0) {
                alert("ตะกร้าสินค้าเปล่า กรุณาเพิ่มสินค้าก่อนทำการชำระเงิน.");
                return false; // ไม่ส่งฟอร์ม
            }
            clearCart(); // เคลียร์ตะกร้าหลังจากชำระเงินสำเร็จ
            return true; // ส่งฟอร์ม
        }

        window.onload = loadCart;
    </script>
</body>
</html>
