<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
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
									<a href="tel:1(800)7654321"><span class="icons-483947"></span> 061-457-1501</a>
								</address>
							</div>
						</div>
					</div>
					<div class="tt-col__item">
						<div class="tt-obj tt-obj-cart js-dropdown-cart">
							<a href="cart.php" class="tt-obj__btn"> <!-- เปลี่ยน href ที่นี่ -->
								<i class="icons-711897"></i>
								<div class="tt-obj__badge">0</div> <!-- จำนวนสินค้าสามารถเปลี่ยนได้ -->
							</a>
						</div>
					</div>
					<div class="tt-col__item d-none d-md-block">
						<a href="#" class="tt-btn" data-toggle="modal" data-target="#modalMRequestQuote">
							<span class="mask">กำหนดเวลาการรับสินค้า</span>
							<div class="button">กำหนดเวลาการรับสินค้า</div>
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

<main id="checkout-page">
    <div class="container special-container">
        <h1 class="subtitle__title text-center">ชำระเงิน</h1>

        <div class="row">
            <!-- ส่วนของการชำระเงินผ่าน QR -->
            <section class="col-md-12 text-center">
                <div class="form-group">
                    <p>กรุณาสแกน QR Code ด้านล่างเพื่อทำการชำระเงิน:</p>
                    <img src="images/qr01.jpg" alt="images/qr01.jpg" class="img-fluid" id="qr-code" />
                    <p>กดยืนยัน<span id="total-price">หลังทำรายการ</span></p>
                    <button class="tt-btn" onclick="confirmPayment()">ยืนยันการชำระเงิน</button>
                </div>
            </section>
        </div>
    </div>
</main>

<script>
    function confirmPayment() {
        alert('ชำระเงินเสร็จสิ้น!');
        localStorage.removeItem('cart'); // ลบตะกร้าสินค้าหลังจากการชำระเงินเสร็จสิ้น
        setTimeout(() => {
            window.location.href = 'index.php'; // เปลี่ยนเส้นทางไปยังหน้า Home (index.html)
        }, 2000); // หน่วงเวลา 2 วินาทีก่อนเปลี่ยนหน้า
    }

    window.onload = loadOrderSummary;
</script>


        <style>
        .special-container{
            max-width: 800px; /* ขนาดสูงสุดของความกว้าง */
            margin: 50px auto; /* ระยะห่างด้านบน 50px และจัดกลางในแนวนอน */
            padding: 20px; /* ระยะห่างภายใน */
            background-color: #ffffff; /* สีพื้นหลัง */
            border-radius: 10px; /* มุมโค้ง */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* เงา */
        }
        
        .subtitle__title {
            font-size: 2em; /* ขนาดตัวอักษร */
            margin-bottom: 20px; /* ระยะห่างด้านล่าง */
        }
        
        h2 {
            font-size: 1.5em; /* ขนาดตัวอักษร */
            margin-top: 20px; /* ระยะห่างด้านบน */
            margin-bottom: 10px; /* ระยะห่างด้านล่าง */
        }
        
        .form-group {
            margin-bottom: 15px; /* ระยะห่างด้านล่าง */
        }
        
        .form-control {
            width: 100%; /* ความกว้าง 100% */
            padding: 10px; /* ระยะห่างภายใน */
            border: 1px solid #ddd; /* เส้นขอบ */
            border-radius: 5px; /* มุมโค้ง */
        }
        
        .summary-item {
            padding: 10px 0; /* ระยะห่างภายใน */
            border-bottom: 1px solid #ddd; /* เส้นขอบด้านล่าง */
        }
        
        .summary-total {
            font-weight: bold; /* ตัวหนา */
            padding: 10px 0; /* ระยะห่างภายใน */
        }
        
        .tt-btn {
            background-color: #28a745; /* สีพื้นหลัง */
            color: white; /* สีตัวอักษร */
            border: none; /* ไม่มีเส้นขอบ */
            padding: 10px 20px; /* ระยะห่างภายใน */
            border-radius: 5px; /* มุมโค้ง */
            cursor: pointer; /* แสดงเป็นมือเมื่อชี้ */
        }
        
        .tt-btn:hover {
            background-color: #218838; /* สีเมื่อ hover */
        }
        </style>
    </main>
    

    <!-- Footer -->
    <footer id="tt-footer">
        <div class="footer-wrapper01">
        <div class="container container-fluid-xl">
            <div class="row f-col-wrapper">
                <div class="col-md-4">
                    <a href="index.php" class="f-logo">
                        <i class="icons-logo tt-icon"></i><span class="tt-base-color">WASH</span>WITH YOU
                    </a>
                    <div class="f-text">
                        หมุนให้มันส์ปั่นให้สะอาด
                    </div>
                    <ul class="f-social">
                        <li><a href="https://twitter.com" target="_blank" class="icons-733635"></a></li>
                        <li><a href="https://www.facebook.com/" target="_blank" class="icons-59439"></a></li>
                        <li><a href="" target="_blank" class="icons-2111532"></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank" class="icons-733614"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="f-title">ช่องทางติดต่อ
                    </h6>
                    <ul class="f-info">
                        <li><i class="icons-484169"></i> 778/8 Sriracha,VA, 10280</li>
                        <li><i class="icons-59252"></i> Mon-Fri: 8am - 5pm<br> Sat-Sun: 10am - 5pm</li>
                        <li><a href="mailto:info@yourlaundrysite.com"><i class="icons-1004017"></i> taeoven@gmail.com</a></li>
                        <li><strong><a href="tel:1(800)765-43-21"><i class="icons-4839471"></i>061-457-1501</a></strong></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="f-title">ติดตามรับข่าวสารจากเรา</h6>
                    <form id="subscribeform" method="post" novalidate="novalidate" action="#">
                        <div class="f-form">
                            <div class="f-form__label">ลงทะเบียนและรับข้อเสนอพิเศษของเรา</div>
                            <div class="f-form__input"><input type="text" name="email" class="form-control" placeholder="Your e-mail address"></div>
                            <div class="f-form__btn">
                                <div class="tt-btn">
                                    <span class="mask">Subscribe now</span>
                                    <button class="button" type="submit">Subscribe now</button>
                                </div>
                            </div>
                        </div>
                        <div class="tt-modal-message">Form sent successfully</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-fluid-xl">
        <div class="f-holder">
            <div class="f-copyright">
                &copy; 2020 <span class="tt-base-color">WASH</span>WHIT YOU. All Rights Reserved.
            </div>
            <ul class="f-link">
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script async src="js/bundle.js"></script>
    
    
    <!-- modal - Make an Appointment -->
    <div class="modal fade" id="modalMRequestQuote" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content ">
                <div class="modal-body form-default modal-layout-dafault">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icons-860796"></span></button>
                    <div class="modal-titleblock">
                        <div class="modal-title">Schedule a Pickup</div>
                    </div>
                    <form class="form-modal" id="jsFormRequestQuote" method="post" novalidate="novalidate" action="#">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="modalName01" placeholder="Your Name *">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" id="modalEmail01" placeholder="Your e-mail address *">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" id="modalPhone01" placeholder="Your phone number">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="modalAddress" class="form-control" id="modalAddress" placeholder="Address *">
                        </div>
                        <div class="form-group">
                            <div class="custom-select">
                                <select name="service" class="tt-select">
                                    <option value="Service">Service</option>
                                    <option value="Service 02">Service 02</option>
                                    <option value="Service 03">Service 03</option>
                                    <option value="Service 04">Service 04</option>
                                    <option value="Service 05">Service 05</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="date-pick-up" placeholder="Pick-Up Date" autocomplete="off" data-timepicker="true" class="js_datepicker-1 form-control" type='text'>
                                    <div class="form-group__icon icons-747310"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="date-delivery" placeholder="Delivery Date" autocomplete="off" data-timepicker="true" class="js_datepicker-2 form-control" type='text'>
                                    <div class="form-group__icon icons-747310"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your comment"></textarea>
                        </div>
                        <div class="tt-btn tt-btn__wide">
                            <span class="mask">Order Now</span>
                            <button type="submit" class="button">Order Now</button>
                        </div>
                        <div class="tt-modal-message">Form sent successfully</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <a href="#" class="tt-btn tt-back-to-top" id="js-backtotop">
        <span class="mask">
            <svg version="1.1" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><g><polygon fill="currentColor" points="20.9,17.1 12.5,8.6 4.1,17.1 2.9,15.9 12.5,6.4 22.1,15.9 	"></polygon></g>
        </svg>
        </span>
        <div class="button">
            <svg version="1.1" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><g><polygon fill="currentColor" points="20.9,17.1 12.5,8.6 4.1,17.1 2.9,15.9 12.5,6.4 22.1,15.9 	"></polygon></g>
        </svg>
        </div>
    </a>
    </body>
    </html>