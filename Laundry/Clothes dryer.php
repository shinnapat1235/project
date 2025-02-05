<?php
session_start();
include 'db_connection.php'; // Connect to the database
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Clothes Dryer</title>
    <style>
        body {
            font-family: 'Mitr', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
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
									<a href="061-457-1501"><span class="icons-483947"></span> 061-457-1501</a>
								</address>
							</div>
						</div>
					</div>
					<div class="tt-col__item">
						<div class="tt-obj tt-obj-cart js-dropdown-cart">
							<a href="#" class="tt-obj__btn">
								<i class="icons-711897"></i>
								
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
<div id="subtitle-wrapper" class="lazyload" data-bg="images/subtitle-wrapper01.jpg">
	<div class="subtitle-wrapper-img lazyload" data-bg="images/subtitle-wrapper01-img.jpg">
		<div class="container container-fluid-xl">
			<div class="tt-breadcrumbs">
				<ul>
					<li><a href="index.php">home</a></li>
					<li>Clothes dryer</li>
				</ul>
			</div>
			<h1 class="subtitle__title">Select Your Clothes Dryer</h1>
		</div>
		<div class="bubbleContainer">
			<div class="bubble-1"></div>
			<div class="bubble-2"></div>
			<div class="bubble-3"></div>
			<div class="bubble-4"></div>
			<div class="bubble-5"></div>
			<div class="bubble-6"></div>
			<div class="bubble-7"></div>
			<div class="bubble-8"></div>
			<div class="bubble-9"></div>
			<div class="bubble-10"></div>
		</div>
	</div>
</div>
<main id="tt-pageContent">
	<div class="section-inner lazyload subpage-bg-left subpage-bg__position06" data-bg="images/wrapper-subpage-left06.png">
		<div class="lazyload subpage-bg-right subpage-bg__position06" data-bg="images/wrapper-subpage-right06.png">
			<div class="container container-fluid-lg">
				<div class="row">
					<div class="col-12 col-sm-7 col-md-7 col-xl-8">
						<div class="tt-blog-list">
							<div class="tt-item">
								<div class="blog-obj">
									<div class="blog-obj__img">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Laundry Machine Selection Page">
    <meta name="keywords" content="Laundry, Washing Machine, HTML, CSS">
    <title>Laundry Machine Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 10;
            padding: 10;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            flex-direction: row;
            width: 100%;
            margin: 0 auto;
            padding: 10px;
        }

        .main-content {
            flex: 3;
            padding: 20px;
        }

        .aside-content {
            flex: 1;
            padding: 20px;
            border-left: 1px solid #ddd;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

		.machine-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 2 คอลัมน์ */
            gap: 100px; /* เพิ่มช่องว่างระหว่างกล่อง */
            margin-top: 50px;
        }

        .machine-card {
            background-color: #fff;
            border: 20px solid #ddd;
            border-radius: 30px;
            padding: 100px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .machine-card img {
            width: 150%;
            height: auto;
            border-radius: 9px;
            margin-bottom: 20px;
        }

        .machine-card h2 {
            font-size: 24px;
            color: #333;
            margin: 10px 0;
        }

        .machine-card button {
            padding: 15px 30px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        .machine-card button:hover {
            background-color: #45a049;
        }

        .search-bar, .categories, .tags, .archive {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .search-bar input {
            width: calc(100% - 40px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .search-bar button {
            padding: 10px 20px;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            border-radius: 4px;
        }

        .search-bar button:hover {
            background-color: #45a049;
        }

        .categories ul, .tags ul {
            list-style: none;
            padding: 0;
        }

        .categories ul li, .tags ul li {
            margin: 10px 0;
        }

        .categories ul li a, .tags ul li a {
            text-decoration: none;
            color: #4CAF50;
        }

        .categories ul li a:hover, .tags ul li a:hover {
            text-decoration: underline;
        }

        .archive {
            text-align: center;
        }
    </style>
</head>
<div class="container">
        <div class="machine-list">
            <?php
            // Query data from the database
            $sql = "SELECT * FROM clothes_dryer";
            $result = $conn->query($sql);

            // Check if there are results
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='machine-card'>";
                    echo "<img src='images/wwu_dryers.jpg' alt='Clothes Dryer {$row['machine_name']}'>";
                    echo "<h2>{$row['machine_name']}</h2>";
                    echo "<p>Status: " . $row['status'] . "</p>";

                    if ($row['status'] == 'ว่าง') {
                        echo "<button onclick='bookMachine({$row['id']})'>Book Machine {$row['id']}</button>";
                    } else {
                        echo "<button disabled>ไม่ว่าง</button>";
                    }
                    
                    echo "</div>";
                }
            } else {
                echo "<p>ไม่มีข้อมูลเครื่องซักผ้า</p>";
            }
            ?>
        </div>
    </div>
    <script>
        function bookMachine(machineId) {
            const confirmBooking = confirm("คุณต้องการจองเครื่องนี้ใช่หรือไม่?");
            if (confirmBooking) {
                // Use AJAX to update the status in the database
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "book_clothes_dryer.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        location.reload(); // Reload the page to see the updated status
                    }
                };
                xhr.send("machine_id=" + machineId);
            }
        }
    </script>


        <!-- Right Sidebar Content -->
			
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</main>
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
					<li><strong><a href="tel:061-457-1501"><i class="icons-4839471"></i>061-457-1501</a></strong></li>
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
			&copy; 2567 <span class="tt-base-color">WASH</span>WHIT YOU. All Rights Reserved.
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
					<div class="modal-title">กำหนดเวลาการรับสินค้า</div>
				</div>
				<form class="form-modal" id="jsFormRequestQuote" method="post" novalidate="novalidate" action="#">
					<div class="form-group">
						<input type="text" name="name" class="form-control" id="modalName01" placeholder="ชื่อ สกุล *">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="email" class="form-control" id="modalEmail01" placeholder="อีเมล *">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="phone" class="form-control" id="modalPhone01" placeholder="เบอร์โทรศัพท์">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<input name="date-pick-up" placeholder="วันที่รับประกัน" autocomplete="off" data-timepicker="true" class="js_datepicker-1 form-control" type='text'>
								<div class="form-group__icon icons-747310"></div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<input name="date-delivery" placeholder="วันส่งประกัน" autocomplete="off" data-timepicker="true" class="js_datepicker-2 form-control" type='text'>
								<div class="form-group__icon icons-747310"></div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<textarea name="message" class="form-control" placeholder="Your comment"></textarea>
					</div>
					<div class="tt-btn tt-btn__wide">
						<span class="mask">ส่ง</span>
						<button type="submit" class="button">ส่ง</button>
					</div>
					<div class="tt-modal-message">ส่งแบบฟอร์มข้อมูลเรียบร้อย</div>
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