-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 19, 2023 lúc 11:10 AM
-- Phiên bản máy phục vụ: 5.7.40-cll-lve
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nlrivu0naxy4_watchEcommerce`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(150) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'Trung', 'trungtoru25@gmail.com', 'trungtoru25', 'trung2507', 0),
(2, 'Duy', 'nguyenduy7@gmail.com', 'khanhduy', 'khanhduy123', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(1, 'DOXA'),
(2, 'BULOVA'),
(3, 'SEIKO'),
(5, 'CASIO'),
(6, 'MOVADO'),
(7, 'G-SHOCK &amp; BAYBY-G'),
(8, 'SKAGEN'),
(9, 'CALVIN KLEIN'),
(10, 'ROTARY'),
(11, 'FOUETTÃ‰'),
(12, 'CITIZEN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sId` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `productId`, `sId`, `productName`, `price`, `quantity`, `image`) VALUES
(131, 12, 'f1almqvuotjk92nsosl2b9c3lp', 'SEIKO SSA345J1 – NAM – AUTOMATIC (TỰ ĐỘNG) – DÂY DA', '13900000', 1, 'ea3a7798af.jpg'),
(132, 48, 'jccaq4lt9jg3qoqh7k0om3il27', 'CITIZEN NB1021-57E – NAM – KÍNH SAPPHIRE– DÂY KIM LOẠI', '14700000', 1, '4d459813de.jpg'),
(133, 9, 'd2e8f9096dae5043ee6dcf29e9714e33', 'CASIO EFR-534D-7AVDF â€“ NAM â€“ QUARTZ (PIN) â€“ DÃ‚Y KIM LOáº I', '4230000', 1, '785d942dd1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(11, 'Äá»“ng Há»“ ÄÃ´i'),
(12, 'Äá»“ng Há»“ Tráº» Em'),
(13, 'Äá»“ng Há»“ Ná»¯'),
(14, 'Äá»“ng Há»“ Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_compare`
--

CREATE TABLE `tbl_compare` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `city`, `country`, `zipcode`, `phone`, `email`, `password`) VALUES
(2, 'duc', 'Thị Trấn Lâm-Ý Yên-Nam Định', 'Thi trấn lâm', 'nd', '342342', '0917804337', 'duongbaduc2000@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Duc Nguyệt', 'Thị Trấn Lâm-Ý Yên-Nam Định', 'Nam Định', 'Việt Nam', '234234', '0384703233', 'nguyet@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'linh', 'Long Biên-Hà Nội', 'hà nội', 'việt nam', '3423423', '0917804334', 'linh@gmail.com', '123456'),
(5, 'Thac Anh', 'hanoi', 'Ha Noi', 'hanoii', '10000', '0389442917', 'nguyenthacanh01@gmail.com', '70c7b2c43a5cbe5bb3b0161ec86da210'),
(6, 'Nguyen Quang Trung', 'Tổ 12, Long Biên, Hà Nội', 'Hà Nội', 'Việt Nam', '12341', '0983237063', 'trulaz01@gmail.com', '5c3a2f868938d378c133173d47377714');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productId`, `productName`, `customer_id`, `quantity`, `price`, `image`, `date_order`, `status`) VALUES
(38, 9, 'CASIO EFR-534D-7AVDF – NAM – QUARTZ (PIN) – DÂY KIM LOẠI', 6, 1, '4230000', '785d942dd1.jpg', '2023-11-15 15:19:51', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` tinytext NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `type` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sohieusanpham` varchar(255) NOT NULL,
  `xuatxu` varchar(100) NOT NULL,
  `gioitinh` varchar(100) NOT NULL,
  `kinh` varchar(255) NOT NULL,
  `may` varchar(255) NOT NULL,
  `baohanhquocte` varchar(100) NOT NULL,
  `baohanhcuahang` varchar(100) NOT NULL,
  `duongkinhmatso` varchar(255) NOT NULL,
  `bedaymatso` varchar(255) NOT NULL,
  `nieng` varchar(255) NOT NULL,
  `daydeo` varchar(255) NOT NULL,
  `maumatso` varchar(255) NOT NULL,
  `chongnuoc` varchar(255) NOT NULL,
  `chucnangkhac` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `product_desc`, `type`, `price`, `image`, `sohieusanpham`, `xuatxu`, `gioitinh`, `kinh`, `may`, `baohanhquocte`, `baohanhcuahang`, `duongkinhmatso`, `bedaymatso`, `nieng`, `daydeo`, `maumatso`, `chongnuoc`, `chucnangkhac`) VALUES
(1, 'SEIKO SUR266P1 â€“ NAM â€“ QUARTZ (PIN) â€“ DÃ‚Y DA', 14, 3, '<p>Máº«u Seiko SUR266P1 phi&ecirc;n báº£n máº¡ v&agrave;ng sang trá»ng vá»›i pháº§n vá» m&aacute;y c&ugrave;ng chi tiáº¿t kim chá»‰, Ä‘iá»ƒm nháº¥n ná»•i báº­t vá»›i kháº£ nÄƒng chá»‘ng nÆ°á»›c l&ecirc;n Ä‘áº¿n 10atm.</p>', 1, '3690000', '77bb6df256.jpg', 'SUR266P1', 'Nháº­t Báº£n', 'Nam', 'Hardlex Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '1 NÄƒm', '5 NÄƒm', '41 mm', '9 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', ' Tráº¯ng', '10 ATM', 'Lá»‹ch NgÃ y'),
(2, 'SEIKO SYMC18K1 â€“ Ná»® â€“ AUTOMATIC (Tá»° Äá»˜NG) â€“ DÃ‚Y KIM LOáº I', 13, 3, '<p>Máº«u Seiko SYMC18K1 phi&ecirc;n báº£n thá»i trang cho ph&aacute;i Ä‘áº¹p pháº§n d&acirc;y vá» kim loáº¡i máº¡ v&agrave;ng c&ugrave;ng ná»n máº·t sá»‘ tr&ograve;n nhá» ná»¯ t&iacute;nh kiá»ƒu d&aacute;ng Ä‘Æ¡n giáº£n 3 kim vá»›i k&iacute;ch thÆ°á»›c máº·t 24mm.</p>', 1, '4040000', '0fa6421baa.jpg', 'SYMC18K1', 'Nháº­t Báº£n', 'Ná»¯', 'Hardlex Crystal (KÃ­nh Cá»©ng)', 'Automatic (Tá»± Äá»™ng)', '1 NÄƒm', '5 NÄƒm', '24 mm', '10 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'ThÃ©p KhÃ´ng Gá»‰', 'VÃ ng', '3 ATM', 'Lá»‹ch NgÃ y â€“ Lá»‹ch Thá»©'),
(3, 'SEIKO SRPD37J1 â€“ NAM â€“ AUTOMATIC (Tá»° Äá»˜NG) â€“ DÃ‚Y DA', 14, 3, '<p>Máº«u Seiko SRPD37J1 ph&acirc;n kh&uacute;c sang trá»ng tráº» trung vá»›i máº«u d&acirc;y da trÆ¡n phá»‘i c&ugrave;ng c&aacute;c chi tiáº¿t váº¡ch sá»‘ máº¡ báº¡c táº¡o h&igrave;nh lÆ°á»¡i kiáº¿m tinh táº¿ ná»•i báº­t tr&ecirc;n máº·t sá»‘ size 40mm há»a tiáº¿t tráº£i tia.</p>', 1, '11620000', '90a68e9f06.jpg', 'SRPD37J1', 'SEIKO', 'Nam', 'Hardlex Crystal (KÃ­nh Cá»©ng)', 'Automatic (Tá»± Äá»™ng)', '1 NÄƒm', '5 NÄƒm', '40.5 mm', '11.8 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'Xanh', '5 ATM', 'Lá»‹ch NgÃ y'),
(5, 'CASIO LTP-1303L-7BVDF â€“ Ná»® â€“ QUARTZ (PIN) â€“ DÃ‚Y DA', 13, 5, '<p>Äá»“ng há»“ Casio LTP-1303L-7BVDF c&oacute; máº·t Ä‘á»“ng há»“ tr&ograve;n truyá»n thá»‘ng, ná»n sá»‘ tráº¯ng c&ugrave;ng váº¡ch sá»‘ Ä‘Æ°á»£c phá»§ m&agrave;u Ä‘en v&agrave; kim chá»‰ Ä‘Æ°á»£c phá»§ pháº£n quang ná»•i báº­t, d&acirc;y Ä‘eo da v&acirc;n Ä‘en quyáº¿n rÅ©.</p>', 1, '1043000', '05c93f7f69.jpg', 'LTP-1303L-7BVDF', 'Nháº­t Báº£n', 'Ná»¯', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '1 NÄƒm', '2 NÄƒm', '30mm', '7.5 mm', 'KhÃ´ng ', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'Tráº¯ng', '5 ATM', 'KhÃ´ng'),
(6, 'CASIO EFV-520DB-2AVUDF â€“ NAM â€“ QUARTZ (PIN) â€“ DÃ‚Y KIM LOáº I', 14, 5, '<p>Máº«u Casio EFV-520DB-2AVUDF thiáº¿t káº¿ táº¡o h&igrave;nh vá» m&aacute;y d&agrave;y dáº·n mang láº¡i váº» nam t&iacute;nh thuá»™c d&ograve;ng Edifice vá»›i Ä‘áº·c trÆ°ng Ä‘á»“ng há»“ 6 kim, phong c&aacute;ch thá»ƒ thao áº¥n tÆ°á»£ng c&ugrave;ng kháº£ nÄƒng chá»‹u nÆ°á»›c l&ecirc;n Ä‘áº¿n 10 ATM.</p>', 1, '4066000', 'b2ce36b243.jpg', 'EFV-520DB-2AVUDF', 'Nháº­t Báº£n', 'Nam', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '1 NÄƒm', '2 NÄƒm', '47.2 mm', '12.3 mm', 'KhÃ´ng ', 'KhÃ´ng ', 'Xanh', '10 ATM', 'Lá»‹ch NgÃ y â€“ Chronograph'),
(7, 'CASIO MTP-1303L-7BVDFâ€“NAM â€“ QUARTZ (PIN) â€“ DÃ‚Y DA (MTP-1303L-7BVDF)', 14, 5, '<p>Äá»“ng há»“ Casio MTP-1303L-7BVDF phong c&aacute;ch thanh lá»‹ch vá»›i d&acirc;y da Ä‘en tinh táº¿, máº·t Ä‘á»“ng há»“ ná»n tráº¯ng cÅ©ng chá»¯ sá»‘ m&agrave;u Ä‘en r&otilde; r&agrave;ng, vá» m&aacute;y kim loáº¡i máº¡ báº¡c, c&ograve;n c&oacute; 3 kim chá»‰ giá».</p>', 1, '1034000', '55e4ae71e9.jpg', 'MTP-1303L-7BVDF', 'Nháº­t Báº£n', 'Nam', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '1 NÄƒm', '2 NÄƒm', ' 40mm', '8mm', 'KhÃ´ng ', 'DÃ¢y Da ChÃ­nh HÃ£ng', ' Tráº¯ng', '5 ATM', 'KhÃ´ng'),
(8, 'CASIO B650WD-1ADF â€“ NAM â€“ KÃNH NHá»°A â€“ QUARTZ (PIN) â€“ DÃ‚Y KIM LOáº I', 14, 5, '<p>Máº«u Casio B650WD-1ADF thiáº¿t káº¿ máº·t sá»‘ vu&ocirc;ng Ä‘Æ°á»£c c&aacute;c báº¡n tráº» Æ°a chuá»™ng, vá»›i ná»n máº·t sá»‘ Ä‘iá»‡n tá»­ hiá»‡n thá»‹ nhiá»u t&iacute;nh nÄƒng tiá»‡n &iacute;ch ph&ugrave; há»£p cho c&aacute;c hoáº¡t Ä‘á»™ng phÆ°á»£t d&atilde; ngoáº¡i hoáº·c thá»ƒ thao.</p>', 1, '987000', 'f96e070643.jpg', 'B650WD-1ADF', 'Nháº­t Báº£n', 'Nam', 'Resin Glass (KÃ­nh Nhá»±a)', 'Quartz (Pin)', '1 NÄƒm', '2 NÄƒm', ' 43.1 mm Ã— 41.2 mm', '10.5 mm', 'KhÃ´ng ', 'KhÃ´ng ', ' Tráº¯ng', '5 ATM', ' Lá»‹ch â€“ Bá»™ Báº¥m Giá» â€“ Giá» KÃ©p â€“ ÄÃ¨n Led â€“ VÃ i Chá»©c NÄƒng KhÃ¡c'),
(9, 'CASIO EFR-534D-7AVDF â€“ NAM â€“ QUARTZ (PIN) â€“ DÃ‚Y KIM LOáº I', 14, 5, '<p>Äá»“ng há»“ Casio EFR-534D-7AVDF vá»›i phong c&aacute;ch thá»ƒ thao máº¡nh máº½, máº·t sá»‘ Ä‘Æ°á»£c táº¡o chi tiáº¿t dáº­p ná»•i Ä‘á»™c Ä‘&aacute;o, kim chá»‰ v&agrave; váº¡ch chá»‰ giá» Ä‘Æ°á»£c phá»§ pháº£n quang, máº·t sá»‘ phá»¥ m&agrave;u Ä‘en ná»•i báº­t.</p>', 1, '4230000', '785d942dd1.jpg', 'EFR-534D-7AVDF', 'Nháº­t Báº£n', 'Nam', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '1 NÄƒm', '2 NÄƒm', '46mm', '13.7 mm', 'KhÃ´ng ', 'KhÃ´ng ', 'Tráº¯ng', '10 ATM', 'Lá»‹ch NgÃ y â€“ Chronograph â€“ Äá»“ng há»“ 24h'),
(11, 'SEIKO SRPD51K1 â€“ NAM â€“ AUTOMATIC (Tá»° Äá»˜NG) â€“ DÃ‚Y KIM LOáº I', 14, 3, '<p>Máº«u Seiko SRPD51K1 ná»•i báº­t vá»›i váº» ngo&agrave;i d&agrave;y dáº·n vá»›i pháº©n vá» m&aacute;y kim loáº¡i loáº¡i máº¡ báº¡c Ä‘á»™ d&agrave;y 13mm, c&aacute;c cháº¥m tr&ograve;n tráº¯ng dáº¡ quang vá»›i thiáº¿t káº¿ to báº£n ná»•i báº­t tr&ecirc;n máº·t sá»‘ xanh.</p>', 1, '7060000', '7414d8357a.jpg', 'SRPD51K1', 'Nháº­t Báº£n', 'Nam', 'Hardlex Crystal (KÃ­nh Cá»©ng)', 'Automatic (Tá»± Äá»™ng)', '1 NÄƒm', '5 NÄƒm', '42.5 mm', '13.4 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'ThÃ©p KhÃ´ng Gá»‰', 'Xanh', '10 ATM', 'Lá»‹ch NgÃ y â€“ Lá»‹ch Thá»©'),
(12, 'SEIKO SSA345J1 â€“ NAM â€“ AUTOMATIC (Tá»° Äá»˜NG) â€“ DÃ‚Y DA', 14, 3, '<p>Máº«u Seiko SSA345J1 vá»›i chá»©c nÄƒng lá»‹ch ng&agrave;y Ä‘Æ°á»£c t&aacute;ch háº³n ra 1 &ocirc; sá»‘ ri&ecirc;ng biá»‡t thiáº¿t káº¿ kiá»ƒu d&aacute;ng kh&ocirc;ng Ä‘á»“ng trá»¥c táº¡o n&ecirc;n váº» Ä‘á»™c Ä‘&aacute;o v&agrave; Ä‘áº§y nam t&iacute;nh vá»›i n&ecirc;n máº·t sá»‘ t&ocirc;ng Ä‘en, c&aacute;c chi tiáº¿t kim chá»‰ váº¡ch sá»‘ Ä‘Æ°á»£c phá»§ báº¡c mang láº¡i má»™t váº» ngo&agrave;i sang trá»ng.</p>', 1, '13900000', 'ea3a7798af.jpg', 'SSA345J1', 'Nh?t B?n', 'Nam', 'Hardlex Crystal (KÃ­nh Cá»©ng)', 'Automatic (Tá»± Äá»™ng)', '1 NÄƒm', '5 NÄƒm', '40.5 mm', '14.5 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'Äen', '5 ATM', 'Lá»‹ch NgÃ y'),
(13, 'BULOVA 98M124 â€“ Ná»® â€“ QUARTZ (PIN) â€“ DÃ‚Y KIM LOáº I', 13, 2, '<p>Máº«u Ä‘á»“ng há»“ 98M124 kh&ocirc;ng Ä‘Æ¡n thuáº§n chá»‰ Ä‘á»ƒ xem giá» m&agrave; c&ograve;n l&agrave; má»™t phá»¥ kiá»‡n thá»i trang Ä‘áº¿n tá»« thÆ°Æ¡ng hiá»‡u Bulova d&agrave;nh cho ph&aacute;i Ä‘áº¹p váº» ngo&agrave;i sang trá»ng vá»›i c&aacute;c chi tiáº¿t váº¡ch sá»‘ n&uacute;m váº·n phá»§ v&agrave;ng phá»‘i c&ugrave;ng máº«u d&acirc;y Ä‘eo demi.</p>', 1, '7900000', '4f01805b02.jpg', '98M124', 'Thá»¥y Sá»¹ / Má»¹', 'Ná»¯', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '3 NÄƒm', '4 NÄƒm', '27 mm', '6.5 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'ThÃ©p KhÃ´ng Gá»‰', 'Xanh', '3 ATM', 'Lá»‹ch NgÃ y'),
(14, 'BULOVA 97A136 â€“ NAM â€“ AUTOMATIC (Tá»° Äá»˜NG) â€“ DÃ‚Y DA', 14, 2, '<p>Máº«u Bulova 97A136 thiáº¿t káº¿ Ä‘á»™c Ä‘&aacute;o vá»›i &ocirc; sá»‘ ch&acirc;n k&iacute;nh ph&ocirc; diá»…n ra 1 pháº§n cá»§a bá»™ m&aacute;y cÆ¡ Ä‘áº·c trÆ°ng nam t&iacute;nh, váº» ngo&agrave;i giáº£n dá»‹ Ä‘á»“ng há»“ 3 kim, phong c&aacute;ch lá»‹ch l&atilde;m vá»›i pháº§n vá» m&aacute;y phá»§ t&ocirc;ng v&agrave;ng há»“ng káº¿t há»£p c&ugrave;ng máº«u d&acirc;y da.</p>', 1, '10099000', '1f67b2a4b0.jpg', '97A136', 'Thá»¥y Sá»¹ / Má»¹', 'Nam', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Automatic (Tá»± Äá»™ng)', '3 NÄƒm', '4 NÄƒm', '41 mm', '12 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'Tráº¯ng', '3 ATM', 'KhÃ´ng'),
(15, 'BULOVA 97A106 â€“ NAM â€“ QUARTZ (PIN) â€“ DÃ‚Y DA', 14, 2, '<p>Äá»“ng há»“ Bulova 97A106 vá»›i thiáº¿t káº¿ máº·t Ä‘á»“ng há»“ tr&ograve;n ná»n tráº¯ng, niá»ng kim loáº¡i, kim chi v&agrave; gáº¡ch sá»‘ Ä‘Æ°á»£c máº¡ Ä‘á»“ng, d&acirc;y Ä‘eo da n&acirc;u mang láº¡i n&eacute;t lá»‹ch l&atilde;m, sang trá»ng cho ph&aacute;i máº¡nh.</p>', 1, '5500000', '2bafec2207.jpg', ' 97A106', 'Thá»¥y Sá»¹ / Má»¹', 'Nam', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '3 NÄƒm', '4 NÄƒm', '38 mm', '7 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'Tráº¯ng', ' 3 ATM', 'KhÃ´ng'),
(16, 'DOXA D204SWL â€“ Ná»® â€“ KÃNH SAPPHIRE â€“ QUARTZ (PIN) â€“ DÃ‚Y DA', 13, 1, '<p>Máº«u Doxa D204SWL kiá»ƒu d&aacute;ng 3 kim Ä‘Æ¡n giáº£n tráº» trung trÆ°á»›c ná»n k&iacute;nh Sapphire, phi&ecirc;n báº£n sang trá»ng vá»›i vi&ecirc;n kim cÆ°Æ¡ng Ä‘&iacute;nh tr&ecirc;n máº·t sá»‘ xa cá»« size 28mm.</p>', 1, '14830000', '27ab609e84.jpg', 'D204SWL', 'Thá»¥y Sá»¹ ', 'Ná»¯', 'Sapphire (KÃ­nh Chá»‘ng Tráº§y)', 'Quartz (Pin)', '2 NÄƒm', '4 NÄƒm', '28 mm', '7.4 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'Tráº¯ng', '3 ATM', 'KhÃ´ng'),
(17, 'DOXA 130.60.022.02 â€“ NAM â€“ KÃNH SAPPHIRE  â€“ DÃ‚Y DA', 14, 1, '<p>Äá»“ng há»“ nam Doxa 130.60.022.02 máº·t Ä‘á»“ng há»“ tr&ograve;n viá»n ngo&agrave;i táº¡o h&igrave;nh c&aacute;c kh&iacute;a cáº¡nh nam t&iacute;nh máº¡ v&agrave;ng sang trá»ng, thiáº¿t káº¿ theo phong c&aacute;ch giáº£n dá»‹ vá»›i 3 kim chá»‰ c&ugrave;ng chá»©c nÄƒng lá»‹ch ng&agrave;y tr&ecirc;n ná»n k&iacute;nh Sapphire.</p>', 1, '32660000', 'fbb41b3a1d.jpg', '130.60.022.02', 'Thá»¥y Sá»¹ ', 'Nam', 'Sapphire (KÃ­nh Chá»‘ng Tráº§y)', 'Automatic (Tá»± Äá»™ng)', '2 NÄƒm', '4 NÄƒm', '41 mm', '11 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'Tráº¯ng', '10 ATM', 'Lá»‹ch NgÃ y'),
(18, 'DOXA D224RIY â€“ NAM â€“ KÃNH SAPPHIRE â€“ DÃ‚Y DA', 14, 1, '<p>Máº«u Doxa D224RIY v&agrave;ng há»“ng tone m&agrave;u sang trá»ng tráº» trung tr&ecirc;n cá»c váº¡ch sá»‘ Ä‘Æ°á»£c táº¡o h&igrave;nh má»ng vá»›i thiáº¿t káº¿ há»a tiáº¿t tim Ä‘&ocirc;i tr&ecirc;n ná»n máº·t sá»‘ size 41mm.</p>', 1, '39470000', 'd74cf9aed5.jpg', 'D224RIY', 'Thá»¥y Sá»¹ ', 'Nam', 'Sapphire (KÃ­nh Chá»‘ng Tráº§y)', 'Automatic (Tá»± Äá»™ng)', '2 NÄƒm', '4 NÄƒm', '41 mm', '11 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'VÃ ng Há»“ng', '10 ATM', 'Lá»‹ch NgÃ y'),
(19, 'DOXA D185SSD â€“ NAM â€“ KÃNH SAPPHIRE  â€“ DÃ‚Y KIM LOáº I', 14, 1, '<p>Máº«u Doxa D185SSD phi&ecirc;n báº£n Ä‘&iacute;nh 8 vi&ecirc;n kim cÆ°Æ¡ng táº¡o n&ecirc;n váº» sang trá»ng tráº» trung vá»›i ná»n cá»c sá»‘ la m&atilde; táº¡o h&igrave;nh má»ng tone m&agrave;u Ä‘en ná»•i báº­t trÆ°á»›c máº·t k&iacute;nh Sapphire size 41mm.</p>', 1, '21390000', '5e9583eca7.jpg', 'D185SSD', 'Thá»¥y Sá»¹ ', 'Nam', 'Sapphire (KÃ­nh Chá»‘ng Tráº§y)', 'Quartz (Pin)', '2 NÄƒm', '5 NÄƒm', '41 mm', '9 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'ThÃ©p KhÃ´ng Gá»‰', ' Tráº¯ng', '5 ATM', 'Lá»‹ch NgÃ y'),
(20, 'DOXA D158RWH â€“ Ná»® â€“ KÃNH SAPPHIRE â€“ QUARTZ (PIN) â€“ DÃ‚Y DA', 13, 1, '<p>Máº«u Doxa D158RWH vá»›i phong c&aacute;ch sang trá»ng, dÆ°á»›i máº·t k&iacute;nh Sapphire thiáº¿t káº¿ gia c&ocirc;ng Ä‘&iacute;nh 8 vi&ecirc;n kim cÆ°Æ¡ng thá»i trang ná»•i báº­t tr&ecirc;n máº·t sá»‘ x&agrave; cá»« size 29mm.</p>', 1, '16070000', '9aa01295e0.jpg', 'D158RWH', 'Thá»¥y Sá»¹ ', 'Nam', 'Sapphire (KÃ­nh Chá»‘ng Tráº§y)', 'Quartz (Pin)', '2 NÄƒm', '5 NÄƒm', '29 mm', '5 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', ' Tráº¯ng', '3 ATM', 'XÃ  Cá»« â€“ 8 ViÃªn Kim CÆ°Æ¡ng Tháº­t'),
(21, 'MOVADO 606114 â€“ NAM â€“ KÃNH SAPPHIRE â€“ DÃ‚Y DA', 14, 6, '<p>Máº«u Movado 606114 máº·t Ä‘á»“ng há»“ k&iacute;ch thÆ°á»›c to tr&ograve;n vá»›i tráº£i nghiá»‡m b&ocirc; m&aacute;y cÆ¡ d&agrave;nh cho nam, thiáº¿t káº¿ theo phong c&aacute;ch giáº£n dá»‹ chá»©c nÄƒng lá»‹ch ng&agrave;y sáº¯p á»Ÿ vá»‹ tr&iacute; m&uacute;i 6 giá» tinh táº¿ tr&ecirc;n ná»n máº·t sá»‘ tone m&agrave;u Ä‘en nam t&iacute;nh.</p>', 1, '44800000', '32e27b3421.jpg', '606114', 'Thá»¥y Sá»¹ ', 'Nam', 'Sapphire (KÃ­nh Chá»‘ng Tráº§y)', 'Automatic (Tá»± Äá»™ng)', '2 NÄƒm', '4 NÄƒm', '38 mm', '10 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'ThÃ©p KhÃ´ng Gá»‰', 'Äen', '3 ATM', 'Lá»‹ch NgÃ y'),
(22, 'MOVADO 0607092 â€“ NAM â€“ KÃNH SAPPHIRE â€“ QUARTZ (PIN) â€“ DÃ‚Y DA', 14, 6, '<p>Máº«u Ä‘á»“ng há»“ 0607092 vá»›i má»™t váº» ngo&agrave;i giáº£n dá»‹ Ä‘iá»m Ä‘áº¡m cá»§a má»™t ph&aacute;i máº¡nh Ä‘áº¿n tá»« thÆ°Æ¡ng hiá»‡u Movado, thiáº¿t káº¿ c&aacute;c chi tiáº¿t váº¡ch sá»‘ má»ng cá»§a sá»± tinh táº¿ Ä‘áº§y ná»•i báº­t tr&ecirc;n máº·t sá»‘ xanh thá»i trang.</p>', 1, '22800000', 'c71c0adf7c.jpg', '0607092', 'Thá»¥y Sá»¹ ', 'Nam', 'Sapphire (KÃ­nh Chá»‘ng Tráº§y)', 'Quartz (Pin)', '2 NÄƒm', '4 NÄƒm', ' 40mm', '6.3 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'Xanh', '3 ATM', 'KhÃ´ng'),
(23, 'MOVADO 0606875 â€“ NAM â€“ KÃNH SAPPHIRE â€“ DÃ‚Y DA', 14, 6, '<p>Äá»“ng há»“ Movado 0606875 c&oacute; thiáº¿t káº¿ cá»• Ä‘iá»ƒn khi máº·t sá»‘ tr&ograve;n káº¿t há»£p vá»›i d&acirc;y Ä‘eo da cao cáº¥p m&agrave;u Ä‘en máº¡nh máº½, kim chá»‰ v&agrave; váº¡ch sá»‘ Ä‘Æ°á»£c máº¡ v&agrave;ng ná»•i báº­t tr&ecirc;n ná»n sá»‘ m&agrave;u Ä‘en c&oacute; há»a tiáº¿t Ä‘á»™c Ä‘&aacute;o nhÆ° h&igrave;nh tÆ°á»£ng máº·t trá»i tá»a s&aacute;ng, c&oacute; &ocirc; lá»‹ch ng&agrave;y vá»‹ tr&iacute; 6h tinh táº¿.</p>', 1, '32100000', '96516b76ab.jpg', '0606875', 'Thá»¥y Sá»¹ ', 'Nam', 'Sapphire (KÃ­nh Chá»‘ng Tráº§y)', 'Automatic (Tá»± Äá»™ng)', '2 NÄƒm', '4 NÄƒm', '39.5 mm', '12 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'Äen', '3 ATM', 'Lá»‹ch NgÃ y'),
(24, 'MOVADO 3600104 â€“ NAM â€“ QUARTZ (PIN) â€“ DÃ‚Y KIM LOáº I', 14, 6, '<p>Äá»“ng há»“ nam Movado 3600104 vá»›i thiáº¿t káº¿ sang trá»ng d&agrave;nh cho nam, kim chá»‰ l&agrave;m má»ng tinh táº¿ ná»•i báº­t tr&ecirc;n ná»n v&agrave;ng, káº¿t há»£p c&ugrave;ng d&acirc;y Ä‘eo Ä‘Æ°á»£c máº¡ v&agrave;ng táº¡o n&ecirc;n váº» sang trá»ng cho ph&aacute;i máº¡nh.</p>', 1, '22300000', '7486687650.jpg', '3600104', 'Thá»¥y Sá»¹ ', 'Nam', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Automatic (Tá»± Äá»™ng)', '2 NÄƒm', '5 NÄƒm', '36 mm', '6 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'ThÃ©p KhÃ´ng Gá»‰', 'VÃ ng', '3 ATM', 'KhÃ´ng'),
(25, 'MOVADO ÄÃ”I â€“ KÃNH SAPPHIRE â€“ QUARTZ (PIN) â€“ DÃ‚Y KIM LOáº I', 11, 6, '<p>Äá»“ng há»“ Movado Ä&ocirc;i c&oacute; vá» v&agrave; d&acirc;y Ä‘eo kim loáº¡i máº¡ báº¡c s&aacute;ng b&oacute;ng, kim chá»‰ má»ng v&agrave; cháº¥m tr&ograve;n ná»•i báº­t tr&ecirc;n ná»n Ä‘en máº·t sá»‘, phi&ecirc;n báº£n máº·t k&iacute;nh Sapphire chá»‘ng tráº§y.</p>', 1, '51200000', 'd0303f8766.jpg', '0606504 (Nam) â€“ 0606505 (Ná»¯)', 'Thá»¥y Sá»¹ ', 'Nam-Ná»¯', 'Sapphire (KÃ­nh Chá»‘ng Tráº§y)', 'Quartz (Pin)', '2 NÄƒm', '4 NÄƒm', '40 mm (Nam) â€“ 28 mm (Ná»¯)', '8 mm (Nam) â€“ 7 mm (Ná»¯) ', 'ThÃ©p KhÃ´ng Gá»‰', 'ThÃ©p KhÃ´ng Gá»‰', 'Äen', '3 ATM', 'KhÃ´ng'),
(26, 'BABY-G MSG-S200G-7ADR â€“ Ná»® â€“ DÃ‚Y CAO SU', 12, 7, '<p>Thá»i trang c&aacute; t&iacute;nh vá»›i k&iacute;ch thÆ°á»›c d&agrave;y dáº·n c&ugrave;ng phi&ecirc;n báº£n d&acirc;y Ä‘eo cháº¥t liá»‡u cao su tráº¯ng, táº¡o n&ecirc;n Ä‘iá»ƒm nháº¥n ná»•i báº­t vá»›i c&ocirc;ng nghá»‡ hiá»‡n Ä‘áº¡i Solar (NÄƒng LÆ°á»£ng &Aacute;nh S&aacute;ng) Ä‘Æ°á»£c trang bá»‹ cho máº«u Baby-G MSG-S200G-7ADR.</p>', 1, '4230000', '588ae16570.jpg', 'MSG-S200G-7ADR', 'Nháº­t Báº£n', 'Ná»¯', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Solar (NÄƒng lÆ°á»£ng Ã¡nh sÃ¡ng)', '5 NÄƒm', '5 NÄƒm', '47.5 mm Ã— 38.4 mm', '12.3 mm', 'KhÃ´ng', 'DÃ¢y Cao Su', 'Tráº¯ng', '10 ATM', 'Lá»‹ch â€“ Bá»™ Báº¥m Giá» â€“ Giá» KÃ©p â€“ ÄÃ¨n Led â€“ VÃ i Chá»©c NÄƒng KhÃ¡c'),
(27, 'BABY-G BGA-210-7B4DR â€“ Ná»® â€“ QUARTZ (PIN) â€“ DÃ‚Y CAO SU', 12, 7, '<p>Äá»“ng há»“ Baby-G BGA-210-7B4DR c&oacute; kim chá»‰ phá»§ pháº£n quang v&agrave; váº¡ch sá»‘ d&agrave;y Ä‘á»™c Ä‘&aacute;o ná»•i báº­t tr&ecirc;n ná»n sá»‘ m&agrave;u tráº¯ng trang nh&atilde;, d&acirc;y Ä‘eo cao su cao cáº¥p Ä‘em láº¡i phá»¥ kiá»‡n thá»i trang c&aacute; t&iacute;nh tráº» trung cho c&aacute;c báº¡n ná»¯.</p>', 1, '4230000', '139f4c8b4d.jpg', 'BGA-210-7B4DR', 'Nháº­t Báº£n', 'Ná»¯', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '5 NÄƒm', '5 NÄƒm', '49mmâ€‚Ã—â€‚46mm', '14.9 mm', 'Nhá»±a', 'DÃ¢y Cao Su', 'Tráº¯ng', '10 ATM', 'Lá»‹ch â€“ Bá»™ Báº¥m Giá» â€“ Giá» KÃ©p â€“ ÄÃ¨n Led â€“ VÃ i Chá»©c NÄƒng KhÃ¡c'),
(28, 'G-SHOCK DW-6900-1VDR â€“ NAM â€“ QUARTZ (PIN) â€“ DÃ‚Y CAO SU', 12, 7, '<p>Äá»“ng há»“ nam G-Shock DW-6900-1VDR t&iacute;nh nÄƒng Ä‘a dá»¥ng há»— trá»£ cho bá»™ Ä‘áº¿m giá», phong c&aacute;ch thá»ƒ thao nÄƒng Ä‘á»™ng, cháº¥t liá»‡u cao cáº¥p nhá»±a si&ecirc;u bá»n, d&acirc;y Ä‘eo cao su.</p>', 1, '2162000', 'cd80ef7eec.jpg', ' DW-6900-1VDR', 'Nháº­t Báº£n', 'Nam', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '5 NÄƒm', '5 NÄƒm', '50 mm', '16 mm', 'Nhá»±a', 'DÃ¢y Cao Su', 'KhÃ¡c', '20 ATM', 'Lá»‹ch â€“ Bá»™ Báº¥m Giá» â€“ ÄÃ¨n Led â€“ VÃ i Chá»©c NÄƒng KhÃ¡c'),
(29, 'BABY-G BA-130-4ADR â€“ Ná»® â€“ QUARTZ (PIN) â€“ DÃ‚Y CAO SU', 12, 7, '<p>Máº«u Baby-G BA-130-4ADR phi&ecirc;n báº£n nÄƒng Ä‘á»™ng vá»›i kháº£ nÄƒng chá»‹u nÆ°á»›c 10atm, d&acirc;y vá» nhá»±a phá»‘i tone m&agrave;u há»“ng thá»i trang ná»•i báº­t, máº·t sá»‘ kim chá»‰ káº¿t há»£p vá»›i &ocirc; sá»‘ Ä‘iá»‡n tá»­ hiá»‡n thá»‹ Ä‘a chá»©c nÄƒng tiá»‡n &iacute;ch.</p>', 1, '4136000', '2c7bb2ac08.jpg', 'BA-130-4ADR', 'Nháº­t Báº£n', 'Ná»¯', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '5 NÄƒm', '5 NÄƒm', '46.3 mm x 43.3 mm', '15.8 mm', 'Nh?a', 'DÃ¢y Cao Su', 'Há»“ng', '10 ATM', 'Lá»‹ch â€“ Bá»™ Báº¥m Giá» â€“ ÄÃ¨n Led â€“ VÃ i Chá»©c NÄƒng KhÃ¡c'),
(30, 'G-SHOCK GA-140-1A1DR â€“ NAM â€“ QUARTZ (PIN) â€“ DÃ‚Y CAO SU', 12, 7, '<p>Máº«u G-Shock GA-140-1A1DR máº·t sá»‘ Ä‘iá»‡n tá»­ Ä‘a dá»¥ng káº¿t há»£p c&ugrave;ng chá»©c nÄƒng kim chá»‰ th&ecirc;m pháº§n Ä‘á»™c Ä‘&aacute;o c&aacute; t&iacute;nh vá»›i vá» m&aacute;y pin d&agrave;y dáº·n kháº£ nÄƒng chá»‘ng nÆ°á»›c 20atm.</p>', 1, '3572000', 'a9e3ebab6f.jpg', 'GA-140-1A1DR', 'Nháº­t Báº£n', 'Nam', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '5 NÄƒm', '5 NÄƒm', '55 mm x 51.2 mm', '16.9 mm', 'Nhá»±a', 'DÃ¢y Cao Su', 'Äen', '20 ATM', 'Lá»‹ch â€“ Bá»™ Báº¥m Giá» â€“ Giá» KÃ©p â€“ ÄÃ¨n Led â€“ VÃ i Chá»©c NÄƒng KhÃ¡c'),
(31, 'SKAGEN SKW1112 â€“ Ná»® â€“ QUARTZ (PIN) â€“ DÃ‚Y KIM LOáº I', 13, 8, '<p>Máº«u Skagen SKW1112 phi&ecirc;n báº£n d&acirc;y lÆ°á»›i báº¡c thá»i trang c&ugrave;ng vá»›i thiáº¿t káº¿ Ä‘&iacute;nh pha l&ecirc; tÆ°Æ¡ng á»©ng vá»›i c&aacute;c m&uacute;i giá» táº¡o n&ecirc;n váº» sang trá»ng tr&ecirc;n ná»n máº·t sá»‘ size 25mm.</p>', 1, '4630000', '5d6cd0b9b7.jpg', 'SKW1112', 'Äan Máº¡ch', 'Ná»¯', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '2 NÄƒm', '4 NÄƒm', '25 mm', '4 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'ThÃ©p KhÃ´ng Gá»‰', 'Tr?ng', '3 ATM', 'KhÃ´ng'),
(32, 'SKAGEN SKW2592 â€“ Ná»® â€“ QUARTZ (PIN) â€“ DÃ‚Y DA', 13, 8, '<p>Máº«u Ä‘á»“ng há»“ Skagen SKW2592 tr&ecirc;n ná»n máº·t sá»‘ vá»›i c&aacute;c váº¡ch sá»‘ c&ugrave;ng kim chá»‰ Ä‘Æ°á»£c thiáº¿t káº¿ thanh máº£nh ná»¯ t&iacute;nh, vá» m&aacute;y báº±ng th&eacute;p kh&ocirc;ng gá»‰ máº¡ m&agrave;u v&agrave;ng Ä‘á»“ng phá»‘i c&ugrave;ng b&ocirc; d&acirc;y Ä‘eo báº±ng da mang láº¡i váº» Ä‘áº¹p thá»i trang tráº» trung</p>', 1, '3720000', '32d0fa738a.jpg', 'SKW2592', 'Äan Máº¡ch', 'Ná»¯', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '5 NÄƒm', '5 NÄƒm', '30 mm', '7.8 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'Tráº¯ng', '3 ATM', 'KhÃ´ng'),
(33, 'SKAGEN SKW2644 â€“ Ná»® â€“ QUARTZ (PIN) â€“ DÃ‚Y DA', 13, 8, '<p>Giáº£n dá»‹ thá»i trang lu&ocirc;n l&agrave; yáº¿u tá»‘ h&agrave;ng Ä‘áº§u Ä‘áº¿n tá»« thÆ°Æ¡ng hiá»‡u Skagen d&agrave;nh cho máº«u Ä‘á»“ng há»“ ná»¯ SKW2644 vá»›i c&aacute;c chi tiáº¿t váº¡ch sá»‘ kim chá»‰ Ä‘Æ°á»£c táº¡o h&igrave;nh thanh máº£nh c&ugrave;ng vá» m&aacute;y bao phá»§ t&ocirc;ng v&agrave;ng há»“ng táº¡o n&ecirc;n váº» tráº» trung thanh lá»‹ch khi phá»‘i c&ugrave;ng máº«u d&acirc;y da x&aacute;m.</p>', 1, '3740000', '37a7daba81.jpg', 'SKW2644', 'Äan Máº¡ch', 'Ná»¯', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '2 NÄƒm', '4 NÄƒm', '30 mm', '8 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', ' Tráº¯ng', '5 ATM', 'KhÃ´ng'),
(34, 'SKAGEN SKW6455 â€“ NAM â€“ QUARTZ (PIN) â€“ DÃ‚Y DA', 14, 8, '<p>Máº«u Ä‘á»“ng há»“ SKW6455 thiáº¿t káº¿ mang Ä‘áº­m phong c&aacute;ch Ä‘áº·c trÆ°ng Ä‘áº¿n tá»« thÆ°Æ¡ng hiá»‡u Skagen khi c&aacute;c chi tiáº¿t m&aacute;y Ä‘Æ°á»£c táº¡o h&igrave;nh má»ng tinh táº¿, ná»n máº·t sá»‘ ná»•i báº­t vá»›i c&aacute;c chi tiáº¿t kim chá»‰ Ä‘a m&agrave;u sáº¯c táº¡o n&ecirc;n váº» tráº» trung.</p>', 1, '4630000', '9b358a4d58.jpg', 'SKW6455', 'Äan Máº¡ch', 'Nam', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '2 NÄƒm', '4 NÄƒm', ' 40mm', '9 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', ' Tráº¯ng', '5 ATM', 'KhÃ´ng'),
(35, 'SKAGEN SKW6464 â€“ NAM â€“ QUARTZ (PIN) â€“ DÃ‚Y KIM LOáº I', 14, 8, '<p>Thá»i trang nam t&iacute;nh vá»›i thiáº¿t káº¿ mang Ä‘áº­m phong c&aacute;ch Ä‘áº·c trÆ°ng Ä‘áº¿n tá»« thÆ°Æ¡ng hiá»‡u Skagen, táº¡o Ä‘iá»ƒm nháº¥n vá»›i kiá»ƒu d&aacute;ng Ä‘á»“ng há»“ SKW6464 kiá»ƒu d&aacute;ng 6 kim phong c&aacute;ch thá»ƒ thao c&ugrave;ng t&iacute;nh nÄƒng Chronograph.</p>', 1, '5230000', '0336efcd2a.jpg', 'SKW6464', 'Äan Máº¡ch', 'Nam', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '2 NÄƒm', '5 NÄƒm', ' 40mm', '11 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'ThÃ©p KhÃ´ng Gá»‰', 'XÃ¡m', '5 ATM', 'Chronograph'),
(36, 'CALVIN KLEIN K2G211C1 â€“ NAM â€“ QUARTZ (PIN) â€“ DÃ‚Y DA', 14, 9, '<p>Äá»“ng há»“ Calvin Klein K2G211C1 vá»›i ná»n Ä‘en máº·t sá»‘, kim chá»‰ v&agrave; gáº¡ch sá»‘ má»ng ná»•i báº­t, d&acirc;y Ä‘eo da Ä‘en máº¡nh máº½, l&agrave; phá»¥ kiá»‡n thá»i trang máº¡nh máº½, nam t&iacute;nh, tráº» trung cho ph&aacute;i máº¡nh.</p>', 1, '5560000', 'b964c390f5.jpg', 'K2G211C1', 'Thá»¥y Sá»¹ ', 'Nam', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '2 NÄƒm', '5 NÄƒm', '43 mm', '8 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'Äen', '3 ATM', 'KhÃ´ng'),
(37, 'CALVIN KLEIN K9H236L6 â€“ Ná»® â€“ QUARTZ (PIN) â€“ DÃ‚Y DA', 13, 9, '<p>Máº«u Calvin Klein K9H236L6 trang bá»‹ bá»™ d&acirc;y da trÆ¡n tone m&agrave;u tráº¯ng tráº» trung, c&ugrave;ng vá»›i thiáº¿t káº¿ má»ng tr&ecirc;n chi tiáº¿t váº¡ch sá»‘ hiá»‡n thá»‹ tr&ecirc;n máº·t sá»‘ size 32mm.</p>', 1, '6770000', 'b056f8d139.jpg', 'K9H236L6', 'Thá»¥y Sá»¹ ', 'Ná»¯', 'Mineral Crystal (Kï¿½nh C?ng)', 'Quartz (Pin)', '2 NÄƒm', '4 NÄƒm', '32 mm', '8 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'Tráº¯ng', '3 ATM', 'Lá»‹ch NgÃ y'),
(38, 'CALVIN KLEIN K5S341CZ â€“ NAM â€“ KÃNH SAPPHIRE â€“ DÃ‚Y DA', 14, 9, '<p>Máº«u Calvin Klein K5S341CZ kiá»ƒu m&aacute;y cÆ¡ vá»›i thiáº¿t káº¿ má»ng thá»i trang vá»›i Ä‘á»™ d&agrave;y chá»‰ 9mm, phá»‘i c&ugrave;ng phi&ecirc;n báº£n d&acirc;y da táº¡o h&igrave;nh v&acirc;n phong c&aacute;ch lá»‹ch l&atilde;m.</p>', 1, '14090000', 'c33cda8c22.jpg', 'K5S341CZ', 'Thá»¥y Sá»¹ ', 'Nam', 'Sapphire (KÃ­nh Chá»‘ng Tráº§y)', 'Automatic (Tá»± Äá»™ng)', '2 NÄƒm', '4 NÄƒm', '42 mm', '9 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'Äen', '3 ATM', 'Lá»‹ch NgÃ y'),
(39, 'CALVIN KLEIN K4D211CY â€“ NAM â€“ QUARTZ (PIN) â€“ DÃ‚Y DA', 14, 9, '<p>Máº«u Calvin Klein K4D211CY phi&ecirc;n báº£n d&acirc;y da trÆ¡n tone m&agrave;u Ä‘en thá»i trang cho ph&aacute;i máº¡nh Ä‘i c&ugrave;ng thiáº¿t káº¿ n&eacute;t Ä‘Æ¡n giáº£n 2 kim Ä‘áº·c trÆ°ng tr&ecirc;n ná»n máº·t Ä‘en size 38mm.</p>', 1, '4410000', 'ea24f582ef.jpg', 'K4D211CY', 'Thá»¥y Sá»¹ ', 'Nam', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '2 NÄƒm', '4 NÄƒm', '38 mm', '8 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'Äen', '3 ATM', 'KhÃ´ng'),
(40, 'ROTARY GB90063/06 â€“ NAM â€“ QUARTZ (PIN) â€“ DÃ‚Y KIM LOáº I', 14, 10, '<p>Äá»“ng há»“ Rotary GB90063/06 c&oacute; niá»ng kim loáº¡i máº¡ v&agrave;ng bo tr&ograve;n máº¡nh máº½ quanh ná»n sá»‘ tráº¯ng c&oacute; Ä‘iá»ƒm nháº¥n kim chá»‰ v&agrave; váº¡ch sá»‘ m&agrave;u v&agrave;ng, d&acirc;y Ä‘eo demi Ä‘em láº¡i váº» thá»i trang lá»‹ch l&atilde;m.</p>', 1, '9000000', 'f6b21c925e.jpg', 'GB90063/06', 'Thá»¥y Sá»¹ ', 'Nam', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '2 NÄƒm', '4 NÄƒm', '36 mm', '9 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'ThÃ©p KhÃ´ng Gá»‰', ' Tráº¯ng', '3 ATM', 'Lá»‹ch NgÃ y'),
(41, 'ROTARY GB90050/06â€“ NAM â€“ KÃNH SAPPHIRE â€“ DÃ‚Y KIM LOáº I', 14, 10, '<p>Äá»“ng há»“ Rotary GB90050/06 vá»›i thiáº¿t káº¿ máº¡nh máº½ khi viá»n máº·t sá»‘ v&agrave; d&acirc;y Ä‘eo l&agrave;m báº±ng kim loáº¡i th&eacute;p kh&ocirc;ng gá»‰, 2 kim chá»‰ máº£nh mai c&ugrave;ng gáº¡ch sá»‘ m&agrave;u Ä‘en ná»•i báº­t tr&ecirc;n ná»n tráº¯ng máº·t sá»‘.</p>', 1, '11480000', '395c92979b.jpg', 'GB90050/06', 'Thá»¥y Sá»¹ ', 'Nam', 'Sapphire (KÃ­nh Chá»‘ng Tráº§y)', 'Automatic (Tá»± Äá»™ng)', '2 NÄƒm', '4 NÄƒm', '38 mm', '7.3 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'ThÃ©p KhÃ´ng Gá»‰', ' Tráº¯ng', '3 ATM', 'Lá»‹ch NgÃ y'),
(42, 'ROTARY GB90070/04 â€“ NAM â€“ KÃNH SAPPHIRE â€“ DÃ‚Y KIM LOáº I', 14, 10, '<p>Äá»“ng há»“ Rotary GS90070/04 thiáº¿t káº¿ d&aacute;ng thá»ƒ thao máº¡nh máº½ c&ugrave;ng d&acirc;y Ä‘eo da Ä‘en b&oacute;ng, máº·t Ä‘á»“ng há»“ vá»›i ná»n Ä‘en vá»›i k&iacute;nh Sapphire chá»‘ng tráº§y c&ugrave;ng kim chá»‰ v&agrave; gáº¡ch sá»‘ m&agrave;u tráº¯ng pháº£n quang,.</p>', 1, '11480000', 'bb95435e68.jpg', 'GS90070/04', 'Thá»¥y Sá»¹ ', 'Nam', 'Sapphire (KÃ­nh Chá»‘ng Tráº§y)', 'Quartz (Pin)', '2 NÄƒm', '4 NÄƒm', ' 40mm', '12 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'DÃ¢y Da ChÃ­nh HÃ£ng', 'Äen', '3 ATM', 'Lá»‹ch NgÃ y'),
(43, 'ROTARY LB90188/01 â€“ Ná»® â€“ KÃNH SAPPHIREâ€“ DÃ‚Y KIM LOáº I', 13, 10, '<p>Máº«u Rotary LB90188/01 thiáº¿t káº¿ bá»™ m&aacute;y nhá» gá»n váº» ngo&agrave;i thanh máº£nh ná»¯ t&iacute;nh vá»›i ná»n cá»c sá»‘ chá»¯ la m&atilde; c&aacute;ch t&acirc;n tráº» trung trÆ°á»›c máº·t k&iacute;nh Sapphire.</p>', 1, '9790000', '1ee150b26b.jpg', 'LB90188/01', 'Thá»¥y Sá»¹ ', 'Ná»¯', 'Sapphire (KÃ­nh Chá»‘ng Tráº§y)', 'Quartz (Pin)', '2 NÄƒm', '4 NÄƒm', '34 mm', '9 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'ThÃ©p KhÃ´ng Gá»‰', ' Tráº¯ng', '3 ATM', 'Lá»‹ch NgÃ y'),
(44, 'FOUETTÃ‰ OR-LOVE â€“ Ná»® â€“ QUARTZ (PIN) â€“ DÃ‚Y DA', 13, 11, '<p>Máº«u Ä‘á»“ng há»“ Fouett&eacute; OR-LOVE mang tr&ecirc;n m&igrave;nh má»™t thiáº¿t káº¿ Ä‘á»™c Ä‘&aacute;o kháº¯c há»a l&ecirc;n h&igrave;nh áº£nh má»™t vÅ© c&ocirc;ng ba l&ecirc; chuy&ecirc;n nghiá»‡p Ä‘ang tr&igrave;nh diá»…n tr&ecirc;n ná»n máº·t sá»‘ Ä‘Æ°á»£c Ä‘&iacute;nh k&egrave;m c&aacute;c vi&ecirc;n kim cÆ°Æ¡ng táº¡o n&ecirc;n má»™t váº» Ä‘áº¹p Ä‘áº§y cuá»‘n h&uacute;t d&agrave;nh cho ph&aacute;i Ä‘áº¹p.</p>', 1, '15500000', '548fb4cdc5.jpg', 'OR-LOVE', 'Hong Kong (NhÃ  vÃ´ Ä‘á»‹ch cuá»™c thi thiáº¿t káº¿ Ä‘á»“ng há»“ Hong Kong Watch)', 'N?', 'Mineral Crystal (KÃ­nh Cá»©ng)', ' Äá»“ng há»“ Quartz (Pin) Ronda (Thá»¥y Sá»¹) & BÃºp bÃª Ba lÃª hoáº¡t Ä‘á»™ng báº±ng bá»™ mÃ¡y cÆ¡', '2 NÄƒm', '4 NÄƒm', '38 mm', 'KhÃ´ng', 'ThÃ©p KhÃ´ng Gá»‰', ' DÃ¢y da Ão cá»§a hÃ£ng Hirsch, da bÃ² tháº­t 100% phá»§ Satin', 'Há»“ng', '3 ATM', 'XÃ  cá»« tá»± nhiÃªn, Ä‘Ã­nh pha lÃª Swarovski (VÃ¡y bÃºp bÃª 12 viÃªn, viá»n 76 viÃªn)'),
(45, 'FOUETTÃ‰ OR-STAR â€“ Ná»® â€“ QUARTZ (PIN) â€“ DÃ‚Y DA', 13, 11, '<p>Máº«u Fouett&eacute; OR-STAR mang tr&ecirc;n m&igrave;nh má»™t thiáº¿t káº¿ Ä‘á»™c Ä‘&aacute;o kháº¯c há»a l&ecirc;n h&igrave;nh áº£nh má»™t vÅ© c&ocirc;ng ba l&ecirc; chuy&ecirc;n nghiá»‡p Ä‘ang tr&igrave;nh diá»…n tr&ecirc;n ná»n máº·t sá»‘ Ä‘Æ°á»£c Ä‘&iacute;nh k&egrave;m c&aacute;c vi&ecirc;n kim cÆ°Æ¡ng táº¡o n&ecirc;n má»™t váº» Ä‘áº¹p Ä‘áº§y cuá»‘n h&uacute;t d&agrave;nh cho ph&aacute;i Ä‘áº¹p.</p>', 1, '15500000', '6b8ee186b7.jpg', 'OR-STAR', 'Hong Kong (NhÃ  vÃ´ Ä‘á»‹ch cuá»™c thi thiáº¿t káº¿ Ä‘á»“ng há»“ Hong Kong Watch)', 'Ná»¯', 'Mineral Crystal (KÃ­nh Cá»©ng)', ' Äá»“ng há»“ Quartz (Pin) Ronda (Thá»¥y Sá»¹) & BÃºp bÃª Ba lÃª hoáº¡t Ä‘á»™ng báº±ng bá»™ mÃ¡y cÆ¡', '2 NÄƒm', '4 NÄƒm', '38 mm', 'KhÃ´ng', 'ThÃ©p KhÃ´ng Gá»‰', ' DÃ¢y da Ão cá»§a hÃ£ng Hirsch, da bÃ² tháº­t 100% phá»§ Satin', 'Äen', '3 ATM', 'XÃ  cá»« tá»± nhiÃªn, Ä‘Ã­nh pha lÃª Swarovski (VÃ¡y bÃºp bÃª 12 viÃªn, viá»n 76 viÃªn)'),
(46, 'CITIZEN BI5010-59A â€“ NAM â€“ QUARTZ (PIN) â€“ DÃ‚Y KIM LOáº I', 14, 12, '<p>Äá»“ng há»“ Citizen BI5010-59A c&oacute; máº·t sá»‘ tr&ograve;n lá»›n nam t&iacute;nh, ná»n sá»‘ tráº¯ng sang trá»ng, kim chá»‰ v&agrave; váº¡ch chá»‰ giá» Ä‘Æ°á»£c máº¡ báº¡c sang trá»ng, c&ograve;n c&oacute; lá»‹ch ng&agrave;y vá»‹ tr&iacute; 6h ná»•i báº­t, d&acirc;y Ä‘eo kim loáº¡i lá»‹ch l&atilde;m, máº¡nh máº½.</p>', 1, '3150000', '989e45c4ac.jpg', 'BI5010-59A', 'Nháº­t Báº£n', 'Nam', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '1 NÄƒm', '5 NÄƒm', ' 40mm', '7.2 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'ThÃ©p KhÃ´ng Gá»‰', 'Äen', '5 ATM', 'Lá»‹ch NgÃ y'),
(47, 'CITIZEN BM7330-67L â€“ NAM â€“ ECOâ€“ DÃ‚Y KIM LOáº I', 14, 12, '<p>Máº«u Citizen BM7330-67L máº·t sá»‘ xanh phi&ecirc;n báº£n Ä‘áº§y thá»i trang vá»›i c&aacute;c chi tiáº¿t váº¡ch sá»‘ táº¡o n&eacute;t má»ng tinh táº¿ máº¡ báº¡c, kiá»ƒu d&aacute;ng Ä‘Æ¡n giáº£n 3 kim k&egrave;m theo 1 &ocirc; lá»‹ch ng&agrave;y.</p>', 1, '6930000', '7d4da6cba4.jpg', 'BM7330-67L', 'Nháº­t Báº£n', 'Nam', 'Mineral Crystal (KÃ­nh Cá»©ng)', 'Quartz (Pin)', '3 NÄƒm', '5 NÄƒm', ' 40mm', '9.5 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'ThÃ©p KhÃ´ng Gá»‰', 'Xanh', '10 ATM', 'Lá»‹ch NgÃ y'),
(48, 'CITIZEN NB1021-57E â€“ NAM â€“ KÃNH SAPPHIREâ€“ DÃ‚Y KIM LOáº I', 14, 12, '<p>Äá»“ng há»“ Citizen NB1021-57E c&oacute; máº·t Ä‘á»“ng há»“ tr&ograve;n ná»n Ä‘en máº¡nh máº½, kim chá»‰ v&agrave; váº¡ch sá»‘ Ä‘Æ°á»£c phá»§ m&agrave;u tráº¯ng pháº£n quang ná»•i báº­t, d&acirc;y Ä‘eo kim loáº¡i Ä‘em Ä‘áº¿n n&eacute;t lá»‹ch l&atilde;m sang trá»ng cho ph&aacute;i máº¡nh</p>\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: -33px; top: -20px;\">&nbsp;</div>', 1, '14700000', '4d459813de.jpg', 'NB1021-57E', 'Nháº­t Báº£n', 'Nam', 'Sapphire (KÃ­nh Chá»‘ng Tráº§y)', 'Automatic (Tá»± Äá»™ng)', '3 NÄƒm', '5 NÄƒm', '41 mm', '11 mm', 'ThÃ©p KhÃ´ng Gá»‰', 'ThÃ©p KhÃ´ng Gá»‰', 'Äen', '3 ATM', 'Lá»‹ch NgÃ y');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `sliderId` int(11) NOT NULL,
  `sliderName` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`sliderId`, `sliderName`, `slider_image`, `type`) VALUES
(5, 'slider 4', 'c2b37c86ae.jpg', 1),
(6, 'slider 5', '0cba9a1388.jpg', 1),
(7, 'slider 6', '042cc8a9e4.jpg', 1),
(8, 'slider 7', '56cbbff241.jpg', 1),
(9, 'slider 8', '44938868d9.jpg', 1),
(10, 'slider 9', 'b612bdae52.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`id`, `customer_id`, `productId`, `productName`, `price`, `image`) VALUES
(7, 5, 9, 'CASIO EFR-534D-7AVDF – NAM – QUARTZ (PIN) – DÂY KIM LOẠI', '4230000', '785d942dd1.jpg'),
(8, 5, 12, 'SEIKO SSA345J1 – NAM – AUTOMATIC (TỰ ĐỘNG) – DÂY DA', '13900000', 'ea3a7798af.jpg'),
(9, 5, 14, 'BULOVA 97A136 – NAM – AUTOMATIC (TỰ ĐỘNG) – DÂY DA', '10099000', '1f67b2a4b0.jpg'),
(10, 5, 48, 'CITIZEN NB1021-57E – NAM – KÍNH SAPPHIRE– DÂY KIM LOẠI', '14700000', '4d459813de.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Chỉ mục cho bảng `tbl_compare`
--
ALTER TABLE `tbl_compare`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`sliderId`);

--
-- Chỉ mục cho bảng `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_compare`
--
ALTER TABLE `tbl_compare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `sliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
