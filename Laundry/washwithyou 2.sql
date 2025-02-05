-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2024 at 12:20 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `washwithyou`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothes_dryer`
--

CREATE TABLE `clothes_dryer` (
  `id` int NOT NULL,
  `machine_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `weight_kg` int NOT NULL,
  `status` enum('ว่าง','ไม่ว่าง') COLLATE utf8mb4_general_ci DEFAULT 'ว่าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clothes_dryer`
--

INSERT INTO `clothes_dryer` (`id`, `machine_name`, `weight_kg`, `status`) VALUES
(1, 'Clothes Dryer 1', 6, 'ว่าง'),
(2, 'Clothes Dryer 2', 6, 'ว่าง'),
(3, 'Clothes Dryer 3', 8, 'ว่าง'),
(4, 'Clothes Dryer 4', 8, 'ว่าง'),
(5, 'Clothes Dryer 5', 10, 'ว่าง'),
(6, 'Clothes Dryer 6', 10, 'ว่าง');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_general_ci,
  `registered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'user',
  `role` enum('user','admin') COLLATE utf8mb4_general_ci DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `address`, `registered_at`, `username`, `role`) VALUES
(9, 'Itsada', 'Khamyom', 'itsadakhamyom@gmail.com', '$2y$10$6mmLwdxzj8KSuph/T0taYOLOCYZuJ24gNXoNXNvYw70eyHrB7VO9O', '0627126526', '10 1 ต. บางนาง อ. พานทอง', '2024-10-13 07:31:41', NULL, 'user'),
(10, 'Itsada', 'Khamyom', 'itsada.kh@ku.th', '$2y$10$r5XrXL7mnMsiUv8IMamOxeLYI4sgQVCyedn0OiPL2.XZwOjqngqSG', '027126526', '10 1 ต. บางนาง อ. พานทอง', '2024-10-13 07:36:03', 'zemxn', 'user'),
(11, 'Itsada', 'Khamyom', 'zeemonnoxicz@gmail.com', '$2y$10$MWJ.tYFmVnXB8CTsYlkr6uJsZgYHjhpnZIbNrd0sMyVa9xDdPtdFG', '0627126526', '10 1 ต. บางนาง อ. พานทอง', '2024-10-13 07:40:00', 'zeemon', 'admin'),
(12, 'Itsada', 'Khamyom', 'shinnapat.c@ku.th', '$2y$10$InmBEu/IeyM/7paLKG9EO.pMhNgrzuM9WX7bXan3ahbG.0uPhM2j2', '027126526', '10 1 ต. บางนาง อ. พานทอง', '2024-10-13 07:45:12', 'zemxn1', 'user'),
(13, 'ชินพัฒน์', 'ชมวิหค', 'okokoko12003@gmail.com', '$2y$10$by3gw0UgdmffEUWxTHSU3eZIO/NUFO.uwfLOPPxVvHNQlhZZZ92z2', '0955492291', '123/456', '2024-10-13 08:17:27', 'shinnapat_k', 'user'),
(14, 'Itsada', 'Khamyom', 'asdfadad@gmail.com', '$2y$10$LJMfZXS.4UOg.cRTmhff8.k5qUtjudIqIBJeCobMijTo.hC54600S', '027126526', '10 1 ต. บางนาง อ. พานทอง', '2024-10-13 12:32:08', 'zemxn1', 'user'),
(15, 'Itsada', 'Khamyom', 'adasdasdada@gmail.com', '$2y$10$IXq4Q3TdJnrI4P434Iqr0uGQ2gR6ABd/f/w6D2ymHmE2f6FZOqXJe', '027126526', '10 1 ต. บางนาง อ. พานทอง', '2024-10-13 12:35:53', 'zemxn1', 'user'),
(16, 'Itsada', 'Khamyom', 'shinnapat.sac@ku.th', '$2y$10$WsP6wWvY96qMVf/90UZ13u32T00BgxNfQ8K19HwOeQ6NrrLwEDBGm', '0327126526', '10 1 Bang Nang Phanthong Chon Buri', '2024-10-13 12:36:43', 'zemxn1', 'user'),
(17, 'Itsada', 'Khamyom', 'itsadakhaadadmyom@gmail.com', '$2y$10$23XvCCTaieRDattI844bheKN11NaUukFqwOHV9R0C3qr1bSdr2LEa', '0237126526', '10 1 Bang Nang Phanthong Chon Buri', '2024-10-13 12:46:50', 'root', 'user'),
(18, 'Itsada', 'Khamyom', 'zeemonasnoxicz@gmail.com', '$2y$10$FFs/h5MHmOREXjrEuX4yB.9xfy5b9SwCo1zHhoekuzQoyk8IE67PC', '0227126526', '10 1 Bang Nang Phanthong Chon Buri', '2024-10-13 17:27:59', 'zeemon', 'admin'),
(19, 'Itsada', 'Khamyom', 'nightcoreigk@gmail.com', '$2y$10$CTBJjs02oT2wiv8M9/fdHevWFLXX89Pnyk3vSnAsz8GILqlhPx/Nu', '027126526', '10 1 Bang Nang Phanthong Chon Buri', '2024-10-13 17:29:57', 'zeemon', 'admin'),
(20, 'Itsada', 'Khamyom', 'zeemonnodfgdfgdfgxicz@gmail.com', '$2y$10$u39JbMwV7gD9TwkzZcmwp.CfEwn4NTBaCZMBuR9zvOKAiesOM2B76', '027126526', '10 1 ต. บางนาง อ. พานทอง', '2024-10-13 17:30:35', 'zeemon', 'admin'),
(21, 'Itsada', 'Khamyom', 'itsadakhamyoeem@gmail.com', '$2y$10$Si5HCRVGfTABb7elp/Vs0.nFmKXX7DTF7wsNMHzsPWkZNVr4c8NYS', '0869825545', '10 1 ต. บางนาง อ. พานทอง', '2024-10-13 17:35:02', 'zemxn1213', 'user'),
(22, 'Itsada', 'Khamyom', 'nightadadcoreigk@gmail.com', '$2y$10$ip/UvaVJnlleKOIpGDSoy./RihE8sTZ76D3rnrCY37W5SsFAKYfUe', '027126526', '10 1 ต. บางนาง อ. พานทอง', '2024-10-14 14:39:26', 'ZyPhiRuS', 'user'),
(23, 'Itsada', 'Khamyom', 'zzeemonnoxicz@gmail.com', '$2y$10$1TwSeAej2ssN3pRePzQewuozD5ja3CMK0oGJcWp2ndmxV3dt4ZR9a', '027126526', '10 1 ต. บางนาง อ. พานทอง', '2024-10-14 14:39:48', 'zemxn123', 'user'),
(24, 'Itsada', 'Khamyom', 'nightcoreigasdadsk@gmail.com', '$2y$10$Q1Zgrk5Hb6E9OV9da9zruOOCzh2yXvft9Pcyyn9u/qRFAtLXxZ1/a', '027126526', '10 1 ต. บางนาง อ. พานทอง', '2024-10-14 15:19:21', 'zaza', 'admin'),
(25, '', '', '', 'hashed_password', NULL, NULL, '2024-10-14 15:26:30', 'newuser', 'user'),
(26, 'Itsada', 'Khamyom', 'itsadakhasssasmyom@gmail.com', '$2y$10$B84jYMVmY5i2ue1HPkA7CeI9YUB98I4ECd5OY3soHI2Iyw/gCRRfG', '027126526', '10 1 ต. บางนาง อ. พานทอง', '2024-10-14 15:35:37', 'qwertyu', 'admin'),
(27, 'Nawaphon', 'Khamyom', 'itsadakhamyommm@gmail.com', '$2y$10$VxMWLOS0MwVNdRJf9ibBzeNCz.hZGO3AjDvsoo24h8VSahGJbQyqG', '0869825545', '10 1 ต. บางนาง อ. พานทอง', '2024-10-14 21:37:13', 'zemxnnn', 'admin'),
(28, 'ชินพัฒน์', 'ชมวิหค', 'Noahza12003@gmail.com', '$2y$10$Svc24vhaYMmqhMN56ByCBeN4o8HWPyQAN3fUwRCLOcWzIok4rkIty', '0918853904', '26/2 bangpu', '2024-10-15 07:29:33', 'goodduck', 'admin'),
(29, 'ชินพัฒน์', 'ชมวิหค', 'Rattanaza555@gmail.com', '$2y$10$ZKccF3De1QaLGeCOhJkttOH5xgTF/rYIV7QNKVJhharWGF7LMMiF6', '0614571501', '914/235 bankpu', '2024-10-15 07:59:22', 'rattana', 'admin'),
(30, 'ชินพัฒน์', 'ชมวิหค', 'rottae123@gmail.com', '$2y$10$sNuOLsQxhrVMAbTfGiyUjeQc4/Rhgq/qH5FOEV2WZ/hRxmJ6OJ5Ve', '0658942568', '123/45', '2024-10-15 08:15:21', 'raty', 'admin'),
(31, 'ชินพัฒน์', 'ชมวิหค', 'toy555@gmail.com', '$2y$10$1IAKiHtmC43v.XipT5qaqOqpUBqGB3gDUIOgH9lVTMHHqyhv.rAPS', '0955492291', '123/2 Bangpu', '2024-10-15 08:18:59', 'toy555', 'admin'),
(32, 'ชินพัฒน์', 'ชมวิหค', 'lolol12003@gmail.com', '$2y$10$lOgfAZ9Pbki1HyHswVVgy.x6Jhw0SLPDMD8ND4kZ1fwU8fyolkD7O', '0653256985', '194/2 บางปู', '2024-10-15 11:35:44', 'jubb', 'admin'),
(33, 'ชินพัฒน์', 'ชมวิหค', 'popy15399@gmail.com', '$2y$10$.yS7mKAGdNYmi5wPjOku2uX.UFIdjKcFfVXtRB3ruYJRDh6QmwJrS', '0865483922', '12/2 bangpu', '2024-10-15 11:41:12', 'toppy', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `order_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_name`, `price`, `order_date`) VALUES
(83, 'น้ำยาซักผ้า สูตรสดชื่น', 120.00, '2024-10-15 04:15:53'),
(84, 'น้ำยาซักผ้า สูตรถนอมผ้า', 120.00, '2024-10-15 04:15:53'),
(85, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 04:15:53'),
(86, 'น้ำยาซักผ้า สูตรลดกลิ่นอับ', 120.00, '2024-10-15 04:15:53'),
(87, 'น้ำยาซักผ้า สูตรสำหรับผ้าขาว', 120.00, '2024-10-15 04:15:53'),
(88, 'น้ำยาซักผ้า สูตรธรรมชาติ', 120.00, '2024-10-15 04:15:53'),
(89, 'น้ำยาปรับผ้านุ่ม สูตรหอมติดทนนาน', 120.00, '2024-10-15 04:15:53'),
(90, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 04:19:06'),
(91, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 04:19:06'),
(92, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 04:19:06'),
(93, 'น้ำยาซักผ้า สูตรสดชื่น', 120.00, '2024-10-15 04:50:04'),
(94, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 04:50:04'),
(95, 'น้ำยาปรับผ้านุ่ม สูตรกลิ่นดอกไม้', 120.00, '2024-10-15 04:50:04'),
(96, 'น้ำยาปรับผ้านุ่ม สูตรหอมติดทนนาน', 120.00, '2024-10-15 04:50:04'),
(97, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 04:50:45'),
(98, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 04:50:45'),
(99, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 04:50:45'),
(100, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 04:50:45'),
(101, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 04:50:45'),
(102, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 04:50:45'),
(103, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 04:50:45'),
(104, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 05:16:17'),
(105, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 05:16:17'),
(106, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 05:16:17'),
(107, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 05:16:17'),
(108, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 05:16:17'),
(109, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 05:16:17'),
(110, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 05:16:17'),
(111, 'น้ำยาซักผ้า สูตรเข้มข้น', 120.00, '2024-10-15 05:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `washing_machines`
--

CREATE TABLE `washing_machines` (
  `id` int NOT NULL,
  `machine_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `weight_kg` int NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `washing_machines`
--

INSERT INTO `washing_machines` (`id`, `machine_name`, `weight_kg`, `status`) VALUES
(1, 'Washing Machine 1', 15, 'ว่าง'),
(2, 'Washing Machine 2', 15, 'ว่าง'),
(3, 'Washing Machine 3', 15, 'ว่าง'),
(4, 'Washing Machine 4', 25, 'ว่าง'),
(5, 'Washing Machine 5', 45, 'ว่าง'),
(6, 'Washing Machine 6', 45, 'ว่าง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothes_dryer`
--
ALTER TABLE `clothes_dryer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `washing_machines`
--
ALTER TABLE `washing_machines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothes_dryer`
--
ALTER TABLE `clothes_dryer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `washing_machines`
--
ALTER TABLE `washing_machines`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
