-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 22, 2020 lúc 06:05 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `rvcongty`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congty`
--

CREATE TABLE `congty` (
  `id` int(11) NOT NULL,
  `tencongty` varchar(100) NOT NULL,
  `slugcongty` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `nganhnghe` varchar(100) NOT NULL,
  `nhanvien` varchar(50) NOT NULL,
  `luotdanhgia` int(11) NOT NULL,
  `tongsao` int(11) NOT NULL,
  `rate` float NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `thoigian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `congty`
--

INSERT INTO `congty` (`id`, `tencongty`, `slugcongty`, `logo`, `nganhnghe`, `nhanvien`, `luotdanhgia`, `tongsao`, `rate`, `diachi`, `thoigian`) VALUES
(45, 'Luvina Software', 'luvina-software', 'luvina-software-logo.jpg', 'Sản phẩm', '301-500', 1, 5, 5, '106 Hoang Quoc Viet\n  Cau Giay\n  Ha Noi', '2020-03-09 17:00:40'),
(46, 'Robert Bosch Engineering And Business Solutions', 'robert-bosch-engineering-and-business-solutions', 'robert-bosch-engineering-and-business-solutions-logo.jpg', 'Sản phẩm', '301-500', 1, 4, 4, '364 Cong Hoa\n  Tan Binh\n  Ho Chi Minh', '2020-03-13 08:38:09'),
(47, 'Glass Egg', 'glass-egg', 'glass-egg-logo.jpg', 'Dịch vụ', '301-500', 1, 1, 1, '9  Doan Van Bo\n  District 4\n  Ho Chi Minh', '2020-03-12 10:46:27'),
(48, 'Giao Hàng Tiết Kiệm', 'giao-hang-tiet-kiem', 'giao-hang-ti-t-ki-m-logo.png', 'Sản phẩm', '1000+', 1, 3, 3, '55 K2, Cầu Diễn\n  Nam Tu Liem\n  Ha Noi', '2020-03-05 16:07:32'),
(49, 'Line Technology Vietnam', 'line-technology-vietnam', 'line-viet-nam-logo.png', 'Sản phẩm', '51-150', 0, 0, 0, '54 Nguyen Chi Thanh\n  Dong Da\n  Ha Noi', '2020-03-05 01:49:46'),
(50, 'Sao Mai Soft', 'sao-mai-soft', 'sao-mai-soft-logo.png', 'Dịch vụ', '1-50', 0, 0, 0, '389 Trường Chinh\n  Thanh Xuan\n  Ha Noi', '2020-03-05 01:51:38'),
(52, 'EMG Education', 'emg-education', 'emg-education-logo.png', 'Sản phẩm', '51-150', 0, 0, 0, '41 Nguyen Thi Minh Khai\n  District 1\n  Ho Chi Minh', '2020-03-05 02:42:53'),
(53, 'QSR Vietnam', 'qsr-vietnam', 'qsr-vietnam-logo.jpg', 'Sản phẩm', '1-50', 0, 0, 0, '63 Pham Ngoc Thach\n  District 3\n  Ho Chi Minh', '2020-03-05 15:34:05'),
(54, 'Shopee', 'shopee', 'shopee-logo.jpg', 'Sản phẩm', '1000+', 0, 0, 0, 'Tầng 15, Tòa nhà Petronas, 235 Nguyễn Văn Cừ\n  District 1\n  Ho Chi Minh', '2020-03-05 15:34:17'),
(55, 'Tek Experts', 'tek-experts', 'tek-experts-logo.png', 'Dịch vụ', '501-1000', 0, 0, 0, 'Lieu Giai\n  Ba Dinh\n  Ha Noi', '2020-03-05 15:37:59'),
(56, 'Alt Plus Việt Nam', 'alt-plus-viet-nam', 'alt-plus-vi-t-nam-logo.png', 'Dịch vụ', '151-300', 0, 0, 0, 'Pham Hung\n  Nam Tu Liem\n  Ha Noi', '2020-03-05 15:39:19'),
(57, 'Langmaster', 'langmaster', 'langmaster-logo.png', 'Sản phẩm', '1-50', 2, 10, 5, '139 Cau Giay\n  Cau Giay\n  Ha Noi', '2020-03-10 14:17:36'),
(58, 'Ten Group', 'ten-group', 'ten-group-logo.png', 'Dịch vụ', '1-50', 0, 0, 0, '3122 Phạm Thế Hiển\n  District 8\n  Ho Chi Minh', '2020-03-05 15:40:28'),
(59, 'Shopdunk', 'shopdunk', 'shopdunk.png', 'Sản phẩm', '1-50', 0, 0, 0, 'Cau Giay, Ha Noi', '2020-03-05 15:41:54'),
(60, 'VNB Group', 'vnb-group', 'vnb-group-logo.png', 'Sản phẩm', '51-150', 0, 0, 0, 'Tầng 23, tòa Vonaconex 9, Phạm Hùng, Nam Từ Liêm\n  Nam Tu Liem\n  Ha Noi', '2020-03-05 15:42:03'),
(61, 'VCCorp', 'vccorp', 'vccorp-logo.PNG', 'Sản phẩm', '151-300', 0, 0, 0, '1 Nguyen Huy Tuong\n  Hai Ba Trung\n  Ha Noi', '2020-03-05 15:42:16'),
(62, 'NashTech', 'nashtech', 'nashtech-logo.png', 'Dịch vụ', '301-500', 0, 0, 0, '364 Cong Hoa\n  Tan Binh\n  Ho Chi Minh', '2020-03-05 15:42:56'),
(63, 'Prudential Vietnam Assurance', 'prudential-vietnam-assurance', 'prudential-vietnam-assurance-logo.png', 'Dịch vụ', '51-150', 0, 0, 0, '37 Ton Duc Thang\n  District 8\n  Ho Chi Minh', '2020-03-05 15:43:06'),
(64, 'Atlas Industries (Vietnam) Limited', 'atlas-industries-vietnam-limited', 'atlas-industries-vietnam-limited-logo.gif', 'Sản phẩm', '51-150', 0, 0, 0, '364 Cộng Hoà\n  Tan Binh\n  Ho Chi Minh', '2020-03-05 15:43:16'),
(65, 'Ecomobi', 'ecomobi', 'ecomobi-logo.jpg', 'Sản phẩm', '51-150', 0, 0, 0, 'Tầng 2, Tòa nhà Golden Palace, Mễ Trì, Từ Liêm\n  Nam Tu Liem\n  Ha Noi', '2020-03-05 15:43:27'),
(66, 'Passion Fruit Software', 'passion-fruit-software', 'passion-fruit-software-logo.png', 'Sản phẩm', '1-50', 1, 5, 5, '1 Bach Dang \n  Tan Binh\n  Ho Chi Minh', '2020-03-07 14:59:43'),
(67, 'Ewoosoft Vietnam', 'ewoosoft-vietnam', 'ewoosoft-vietnam-logo.png', 'Sản phẩm', '51-150', 0, 0, 0, '19 Duy Tan\n  Cau Giay\n  Ha Noi', '2020-03-05 15:52:11'),
(68, 'AES Technologies', 'aes-technologies', 'aes-technologies-logo.jpg', 'Sản phẩm', '1-50', 0, 0, 0, 'BCons Tower, 4A/167A Duong D1, P.25, Q.Binh Thanh\n  Binh Thanh\n  Ho Chi Minh', '2020-03-05 15:52:49'),
(69, 'FPT Software', 'fpt-software', 'fpt-software-logo.png', 'Dịch vụ', '1000+', 0, 0, 0, 'FPT Software Đường D1 Phường Tân Phú \n  District 9\n  Ho Chi Minh', '2020-03-05 15:53:28'),
(70, 'SAPO', 'sapo', 'sapo-logo.png', 'Sản phẩm', '301-500', 0, 0, 0, '266 Đội Cấn\n  Ba Dinh\n  Ha Noi', '2020-03-05 15:54:59'),
(71, 'CMC Global', 'cmc-global', 'cmc-global-logo.jpg', 'Dịch vụ', '151-300', 0, 0, 0, 'Lot C1A, Dich Vong Hau\n  Cau Giay\n  Ha Noi', '2020-03-05 15:55:39'),
(72, 'S3 Corporation (S3 Corp.)', 's3-corporation-s3-corp', 's3-corporation-s3-corp-logo.jpg', 'Dịch vụ', '151-300', 0, 0, 0, '307 Nguyễn Văn Trỗi\n  Tan Binh\n  Ho Chi Minh', '2020-03-05 15:56:14'),
(73, 'Ominext', 'ominext', 'ominext-logo.png', 'Dịch vụ', '151-300', 0, 0, 0, '147  789 Building\n  Cau Giay\n  Ha Noi', '2020-03-05 15:57:17'),
(74, 'SmartOSC', 'smartosc', 'smartosc-logo.png', 'Dịch vụ', '301-500', 0, 0, 0, 'Pham Hung\n  Nam Tu Liem\n  Ha Noi', '2020-03-05 15:57:30'),
(75, 'ECPay', 'ecpay', 'ecpay-logo.jpg', 'Sản phẩm', '301-500', 0, 0, 0, '8  Phạm Hùng\n  Cau Giay\n  Ha Noi', '2020-03-05 15:57:54'),
(76, 'Kootoro Việt Nam', 'kootoro-viet-nam', 'kootoro-vi-t-nam-logo.jpg', 'Sản phẩm', '1-50', 0, 0, 0, '311 Điện Biên Phủ\n  District 3\n  Ho Chi Minh', '2020-03-05 15:58:49'),
(77, 'VNG Corporation', 'vng-corporation', 'vng-corporation-logo.jpg', 'Sản phẩm', '1000+', 1, 3, 3, '182 Le Dai Hanh St\n  Ho Chi Minh', '2020-03-07 08:35:03'),
(78, 'Framgia Inc.', 'framgia-inc', 'framgia-inc-logo.png', 'Dịch vụ', '1000+', 1, 4, 4, 'Keangnam Hanoi Landmark Tower \n  Nam Tu Liem\n  Ha Noi', '2020-03-06 10:22:22'),
(79, 'redWeb', 'redweb', 'redweb-logo.png', 'Sản phẩm', '51-150', 1, 1, 1, '449 Trần Hưng Đạo\n  District 1\n  Ho Chi Minh', '2020-03-07 08:31:59'),
(80, 'POPS WorldWide', 'pops-worldwide', 'pops-worldwide-logo.png', 'Sản phẩm', '151-300', 0, 0, 0, '285 Cách Mạng Tháng 8\n  District 10\n  Ho Chi Minh', '2020-03-07 01:35:32'),
(81, 'soXes GmbH', 'soxes-gmbh', 'soxes-gmbh-logo.jpg', 'Dịch vụ', '51-150', 0, 0, 0, '67 Nguyen Thi Minh Khai\n  District 1\n  Ho Chi Minh', '2020-03-07 01:36:03'),
(82, 'SAI Digital', 'sai-digital', 'sai-digital-logo.png', 'Dịch vụ', '151-300', 1, 5, 5, '364 Cong Hoa\n  Tan Binh\n  Ho Chi Minh', '2020-03-07 08:43:08'),
(83, 'NOVAON DIGITAL GROUP', 'novaon-digital-group', 'novaon-digital-group-logo.png', 'Sản phẩm', '301-500', 1, 4, 4, '11 Duy Tân\n  Cau Giay\n  Ha Noi', '2020-03-07 03:00:25'),
(84, 'PSC Telecom', 'psc-telecom', 'psc-telecom-logo.png', 'Sản phẩm', '51-150', 1, 4, 4, '5 Hoa Sua\n  Phu Nhuan\n  Ho Chi Minh', '2020-03-07 03:02:00'),
(85, 'Prostage', 'prostage', 'prostage-logo.jpg', 'Dịch vụ', '51-150', 1, 4, 4, '117 Ly Chinh Thang\n  District 3\n  Ho Chi Minh', '2020-03-07 10:02:52'),
(86, 'Hệ thống giáo dục IMAP', 'he-thong-gio-duc-imap', 'he-thong-giao-duc-imap.png', 'Sản phẩm', '301-500', 1, 4, 4, 'Ha Noi', '2020-03-07 15:38:22'),
(87, 'GMO-Z.com RUNSYSTEM', 'gmo-zcom-runsystem', 'gmo-z-com-runsystem-logo.png', 'Dịch vụ', '301-500', 3, 11, 3.66667, '1 Dao Duy Anh\n  Dong Da\n  Ha Noi', '2020-03-09 20:54:12'),
(88, 'Samsung Vietnam Mobile R&D Center', 'samsung-vietnam-mobile-rd-center', 'samsung-vietnam-mobile-r-d-center-logo.png', 'Sản phẩm', '301-500', 1, 4, 4, '1 Pham Van Bach\n  Cau Giay\n  Ha Noi', '2020-03-07 15:54:31'),
(89, 'Misa', 'misa', 'misa-logo.jpg', 'Sản phẩm', '1000+', 1, 4, 4, 'Khu đô thị Ngoại giao đoàn\n  Bac Tu Liem\n  Ha Noi', '2020-03-07 15:55:22'),
(90, 'Dien Quan Media & Entertainment', 'dien-quan-media-entertainment', 'dien-quan-media-entertainment-logo.jpg', 'Sản phẩm', '51-150', 1, 4, 4, '34 Nguyễn Thị Minh Khai\n  District 1\n  Ho Chi Minh', '2020-03-07 15:55:52'),
(91, 'CÔNG TY CÔNG NGHỆ THÔNG TIN  VNPT', 'cong-ty-cong-nghe-thong-tin-vnpt', 'cong-ty-cong-ngh-thong-tin-vnpt-logo.jpg', 'Sản phẩm', '1000+', 1, 4, 4, '57 Huỳnh Thúc Kháng\n  Dong Da\n  Ha Noi', '2020-03-07 15:56:22'),
(92, 'Beetsoft', 'beetsoft', 'beetsoft-logo.jpg', 'Dịch vụ', '51-150', 1, 4, 4, 'Tầng 6, Tòa Nhà Mitec, KĐT mới Cầu Giấy\n  Cau Giay\n  Ha Noi', '2020-03-07 15:57:01'),
(93, 'VSOURCE', 'vsource', 'vsource-logo.png', 'Sản phẩm', '151-300', 1, 4, 4, 'Quang Trung\n  District 12\n  Ho Chi Minh', '2020-03-07 15:57:25'),
(94, 'KMS Technology', 'kms-technology', 'kms-technology-logo.png', 'Dịch vụ', '501-1000', 1, 4, 4, '123 Cong Hoa\n  Tan Binh\n  Ho Chi Minh', '2020-03-07 15:57:46'),
(95, 'ITSOL', 'itsol', 'itsol-logo.png', 'Sản phẩm', '151-300', 1, 4, 4, '84 Duy Tân\n  Cau Giay\n  Ha Noi', '2020-03-07 15:59:12'),
(96, 'TIKI CORPORATION', 'tiki-corporation', 'tiki-corporation-logo.png', 'Sản phẩm', '1000+', 1, 4, 4, '52 Út Tịch, \n  Tan Binh\n  Ho Chi Minh', '2020-03-07 16:01:07'),
(97, 'PowerGate Software', 'powergate-software', 'powergate-software-logo.png', 'Dịch vụ', '51-150', 1, 4, 4, '1 Trung Hoa\n  Cau Giay\n  Ha Noi', '2020-03-07 16:21:04'),
(98, 'Siten JSC', 'siten-jsc', 'siten-jsc-logo.png', 'Dịch vụ', '1-50', 1, 4, 4, 'Dương Nội, Spark Nam Cường, CT8C, R402\n  Ha Dong\n  Ha Noi', '2020-03-07 16:21:41'),
(99, 'Renesas Design Vietnam', 'renesas-design-vietnam', 'renesas-design-vietnam-logo.jpg', 'Sản phẩm', '301-500', 1, 4, 4, '31 Tan Thuan\n  Ho Chi Minh', '2020-03-07 16:26:29'),
(100, 'JUST-IN-TIME SOLUTIONS (JITS)', 'just-in-time-solutions-jits', 'just-in-time-solutions-jits-logo.png', 'Sản phẩm', '51-150', 1, 4, 4, '27 Nguyễn Hữu Thọ\n  District 7\n  Ho Chi Minh', '2020-03-07 16:26:49'),
(101, 'Pioneer Soft', 'pioneer-soft', 'pioneer-soft-logo.png', 'Sản phẩm', '1-50', 1, 4, 4, '1 Pham Huy Thong\n  Ba Dinh\n  Ha Noi', '2020-03-07 16:26:57'),
(102, 'SDC', 'sdc', 'sdc-logo.png', 'Sản phẩm', '51-150', 1, 4, 4, '41 Le Duan\n  Hai Chau\n  Da Nang', '2020-03-07 16:27:29'),
(103, 'Lozi', 'lozi', 'lozi-logo.jpg', 'Sản phẩm', '51-150', 2, 9, 4.5, '268 To Hien Thanh\n  District 10\n  Ho Chi Minh', '2020-03-10 14:20:15'),
(104, 'Teamscāl', 'teamscl', 'teamscal-logo.png', 'Sản phẩm', '1-50', 5, 12, 2.4, '384 Level 1, H3 Building, Hoang Dieu\n  District 4\n  Ho Chi Minh', '2020-03-12 15:02:54'),
(105, 'Fado.vn', 'fadovn', 'fado-vn-logo.png', 'Sản phẩm', '51-150', 1, 4, 4, '21 Hậu Giang, Phường 4\n  Tan Binh\n  Ho Chi Minh', '2020-03-07 16:29:17'),
(106, 'PIRAGO', 'pirago', 'pirago.jpg', 'Outsource', '1-50', 1, 4, 4, 'Thanh Xuan, Ha Noi', '2020-03-07 16:29:27'),
(107, 'Gameloft', 'gameloft', 'gameloft-logo.jpg', 'Sản phẩm', '301-500', 1, 4, 4, '364 Cong Hoa\n  Tan Binh\n  Ho Chi Minh', '2020-03-07 16:29:37'),
(108, 'Kiwi Universe', 'kiwi-universe', 'kiwi-universe-logo.png', 'Sản phẩm', '1-50', 1, 4, 4, '241 Xuan Thuy\n  Cau Giay\n  Ha Noi', '2020-03-07 16:29:46'),
(109, 'Công ty Cổ phần đầu tư và phát triển Fabbi', 'cong-ty-co-phan-dau-tu-va-phat-trien-fabbi', 'cong-ty-c-ph-n-d-u-t-va-phat-tri-n-fabbi-logo.jpg', 'Dịch vụ', '1-50', 1, 4, 4, 'Tran Thai Tong Street, Sunrise Tower, room 1108\n  Cau Giay\n  Ha Noi', '2020-03-07 16:29:55'),
(110, 'SEA-Solutions JSC', 'sea-solutions-jsc', 'sea-solutions-jsc-logo.png', 'Sản phẩm', '1-50', 3, 12, 4, '26, ngõ 61/21 Phạm Tuấn Tài\n  Bac Tu Liem\n  Ha Noi', '2020-03-12 22:04:18'),
(111, 'Manteiv Group | Skyads', 'manteiv-group-skyads', 'manteiv-group-skyads.png', 'Sản phẩm', '1-50', 1, 4, 4, 'Thanh Xuan, Ha Noi', '2020-03-07 16:31:35'),
(112, 'Canary Software', 'canary-software', 'canary-software-logo.png', 'Sản phẩm', '51-150', 4, 17, 4.25, 'Tố Hữu\n  Ha Dong\n  Ha Noi', '2020-03-09 09:51:47'),
(113, 'Expertrans Global', 'expertrans-global', 'expertrans-global-logo.png', 'Sản phẩm', '51-150', 2, 9, 4.5, '19  Trần Quang Diệu\n  Dong Da\n  Ha Noi', '2020-03-09 16:57:47'),
(114, 'VNDIRECT', 'vndirect', 'vndirect-logo.png', 'Sản phẩm', '301-500', 3, 11, 3.66667, '9 VCCI Building, Đào Duy Anh\n  Dong Da\n  Ha Noi', '2020-03-09 08:07:18'),
(115, 'GARENA VN/ Sea Group', 'garena-vn-sea-group', 'garena-vn-sea-group-logo.png', 'Sản phẩm', '301-500', 1, 4, 4, '92 Nam Kỳ Khởi Nghĩa, SaiGon Center 2 - Takashimaya\n  District 1\n  Ho Chi Minh', '2020-03-10 08:29:26'),
(116, 'VinID (Member of VinGroup)', 'vinid-member-of-vingroup', 'vinid-member-of-vingroup-logo.png', 'Sản phẩm', '301-500', 1, 4, 4, '458 Minh Khai\n  Hai Ba Trung\n  Ha Noi', '2020-03-10 08:29:50'),
(117, 'Vinicorp', 'vinicorp', 'vinicorp-logo.png', 'Dịch vụ', '51-150', 1, 4, 4, '106 Hoàng Ngân\n  Cau Giay\n  Ha Noi', '2020-03-10 08:30:29'),
(118, 'G&G Blockchain Camp', 'g-g-blockchain-camp', 'g-g-blockchain-camp.jpg', 'Outsource', '1-50', 1, 4, 4, 'Ha Noi', '2020-03-10 08:32:22'),
(119, 'UHM Group', 'uhm-group', 'uhm-group-logo.jpg', 'Sản phẩm', '501-1000', 1, 4, 4, '115 Nguyen Van Linh\n  Thanh Khe\n  Da Nang', '2020-03-10 08:35:10'),
(120, 'Brycen Vietnam', 'brycen-vietnam', 'brycen-vietnam-logo.png', 'Dịch vụ', '1-50', 1, 3, 3, '25 25 Nguyễn Văn Cừ, Thành Phố Huế', '2020-03-10 08:39:27'),
(121, 'Ylinkee', 'ylinkee', 'ylinkee-logo.png', 'Sản phẩm', '1-50', 1, 3, 3, 'Tầng 7, 112 Nguyễn Hữu Thọ, Hải Châu, Đà Nẵng\n  Da Nang', '2020-03-10 08:40:03'),
(122, 'Bac Ha International Software Co., Ltd', 'bac-ha-international-software-co-ltd', 'bac-ha-international-software-co-ltd-logo.png', 'Sản phẩm', '51-150', 1, 3, 3, 'Duy Tan\n  Cau Giay\n  Ha Noi', '2020-03-10 14:15:11'),
(123, 'Teko Vietnam', 'teko-vietnam', 'teko-vietnam-logo.png', 'Sản phẩm', '301-500', 1, 3, 3, '54 Vincom Nguyễn Chí Thanh\n  Dong Da\n  Ha Noi', '2020-03-10 14:15:53'),
(124, 'DFT', 'dft', 'dft-logo.png', 'Sản phẩm', '1-50', 1, 3, 3, '27 Minh Khai\n  Hai Ba Trung\n  Ha Noi', '2020-03-10 14:22:24'),
(125, 'Fado.vn', 'fado-vn', 'fado-vn-logo.png', 'Sản phẩm', '51-150', 1, 3, 3, '21 Hậu Giang, Phường 4\n  Tan Binh\n  Ho Chi Minh', '2020-03-10 14:38:47'),
(126, 'mStage', 'mstage', 'mstage-logo.png', 'Sản phẩm', '1-50', 1, 3, 3, 'Binh Thanh\n  Ho Chi Minh', '2020-03-10 18:26:05'),
(127, 'LIFESUP Việt Nam', 'lifesup-viet-nam', 'lifesup-viet-nam.png', 'Sản phẩm', '1-50', 1, 3, 3, 'Cau Giay, Ha Noi', '2020-03-10 18:27:18'),
(128, 'Mega Market', 'mega-market', 'mega-market-logo.png', 'Sản phẩm', '301-500', 1, 3, 3, 'District 2\n  Ho Chi Minh', '2020-03-10 18:30:53'),
(129, 'BLOOMER', 'bloomer', 'bloomer-logo.jpg', 'Sản phẩm', '1-50', 1, 3, 3, 'REE Tower, 9 Doan Van Bo Str., W.12, Dist. 4, HCMC\n  District 4\n  Ho Chi Minh', '2020-03-10 18:33:09'),
(130, 'Vinfast', 'vinfast', 'vinfast-logo.jpg', 'Sản phẩm', '301-500', 1, 3, 3, '458 Minh Khai\n  Hai Ba Trung\n  Ha Noi', '2020-03-10 20:43:51'),
(131, 'Techcombank', 'techcombank', 'techcombank-logo.png', 'Sản phẩm', '301-500', 1, 3, 3, '191 Bà Triệu\n  Hai Ba Trung\n  Ha Noi', '2020-03-10 20:44:36'),
(132, 'VPBank', 'vpbank', 'vpbank-logo.png', 'Sản phẩm', '1000+', 1, 3, 3, '89 Lang Ha\n  Dong Da\n  Ha Noi', '2020-03-10 20:45:18'),
(133, 'Tổng Công Ty Hóa Dầu Petrolimex - CTCP', 'tong-cong-ty-hoa-dau-petrolimex-ctcp', 'tong-cong-ty-hoa-dau-petrolimex-ctcp.png', 'Sản phẩm', '501-1000', 1, 3, 3, 'Dong Da, Ha Noi', '2020-03-10 20:48:36'),
(134, 'Thế Giới Di Động', 'the-gioi-di-dong', 'th-gi-i-di-d-ng-logo.jpg', 'Sản phẩm', '301-500', 1, 3, 3, 'Khu Công Nghệ Cao\n  District 9\n  Ho Chi Minh', '2020-03-10 20:50:08'),
(135, 'SABECO', 'sabeco', 'sabeco-logo.png', 'Sản phẩm', '1-50', 1, 3, 3, 'Ho Chi Minh', '2020-03-10 20:51:09'),
(136, 'CoderSchool', 'coderschool', 'coderschool.png', 'Sản phẩm', '51-150', 2, 7, 3.5, 'District 4, Ho Chi Minh', '2020-03-12 09:53:50'),
(137, 'VietIS', 'vietis', 'vietis-logo.png', 'Dịch vụ', '151-300', 1, 3, 3, '82 Duy Tân\n  Cau Giay\n  Ha Noi', '2020-03-10 20:57:32'),
(138, 'MEDLATEC', 'medlatec', 'medlatec-logo.png', 'Sản phẩm', '301-500', 1, 3, 3, '42  Nghĩa Dũng\n  Ba Dinh\n  Ha Noi', '2020-03-10 20:57:46'),
(139, 'SSKPI', 'sskpi', 'sskpi.png', 'Sản phẩm', '1-50', 1, 3, 3, 'Ha Noi', '2020-03-10 20:58:13'),
(140, 'MOR', 'mor', 'mor-logo.png', 'Dịch vụ', '51-150', 1, 3, 3, '451 Tô Hiến Thành\n  District 10\n  Ho Chi Minh', '2020-03-10 20:58:28'),
(141, 'SIMAX', 'simax', 'simax-logo.JPG', 'Sản phẩm', '51-150', 1, 3, 3, 'Yên Hòa\n  Cau Giay\n  Ha Noi', '2020-03-10 20:58:43'),
(142, 'DCV jsc | Truyền số liệu Vietnam', 'dcv-jsc-truyen-so-lieu-vietnam', 'dcv-jsc-truy-n-s-li-u-vietnam-logo.png', 'Dịch vụ', '51-150', 1, 3, 3, '138 Trần Bình\n  Nam Tu Liem\n  Ha Noi', '2020-03-11 15:33:53'),
(143, 'FSI', 'fsi', 'fsi-logo.png', 'Dịch vụ', '1-50', 1, 3, 3, '319 Cầu Giấy\n  Cau Giay\n  Ha Noi', '2020-03-11 15:34:28'),
(144, 'Template.net', 'template-net', 'template-net.png', 'Sản phẩm', '51-150', 1, 3, 3, 'Ho Chi Minh, Ho Chi Minh', '2020-03-11 15:35:03'),
(145, 'MAPLE', 'maple', 'maple-logo.png', 'Dịch vụ', '1-50', 1, 3, 3, '2 Trương Quốc Dung\n  Ho Chi Minh', '2020-03-11 15:35:21'),
(146, 'Citigo Software', 'citigo-software', 'citigo-software-logo.jpg', 'Sản phẩm', '301-500', 1, 3, 3, '1 Yet Kieu\n  Hoan Kiem\n  Ha Noi', '2020-03-11 15:35:32'),
(147, 'Citynow', 'citynow', 'citynow-logo.png', 'Dịch vụ', '1-50', 1, 3, 3, '298 Ba Tháng Hai Street\n  District 10\n  Ho Chi Minh', '2020-03-11 15:36:01'),
(148, 'Vinatech Group', 'vinatech-group', 'vinatech-group.png', 'Sản phẩm', '1-50', 1, 3, 3, 'District 12, Ho Chi Minh', '2020-03-11 15:36:28'),
(149, 'CRCC Asia', 'crcc-asia', 'crcc-asia.png', 'Sản phẩm', '1-50', 1, 3, 3, 'District 2, Ho Chi Minh', '2020-03-11 15:37:03'),
(150, 'Newwave Solutions', 'newwave-solutions', 'newwave-solutions-logo.png', 'Dịch vụ', '51-150', 1, 3, 3, '16 Duong Dinh Nghe\n  Cau Giay\n  Ha Noi', '2020-03-11 15:37:16'),
(151, 'Maxgroup', 'maxgroup', 'maxgroup-logo.png', 'Sản phẩm', '51-150', 1, 3, 3, '22 Xuan La\n  Tay Ho\n  Ha Noi', '2020-03-11 15:37:48'),
(152, 'Công ty TNHH Bigmax Quốc Tế', 'cong-ty-tnhh-bigmax-quoc-te', 'cong-ty-tnhh-bigmax-quoc-te.jpg', 'Sản phẩm', '1-50', 1, 3, 3, 'Ha Noi', '2020-03-11 15:38:12'),
(153, 'Capgemini Vietnam', 'capgemini-vietnam', 'capgemini-vietnam-logo.jpg', 'Dịch vụ', '301-500', 1, 3, 3, '106 Nguyen Van Troi\n  Phu Nhuan\n  Ho Chi Minh', '2020-03-11 23:47:17'),
(154, 'HHD Group', 'hhd-group', 'hhd-group-logo.jpg', 'Sản phẩm', '51-150', 1, 3, 3, '136 136-138 Cô Bắc, Phường Cô Giang, Quận 1\n  District 1\n  Ho Chi Minh', '2020-03-11 23:48:06'),
(155, 'DEK Technologies', 'dek-technologies', 'dek-technologies-logo.png', 'Sản phẩm', '151-300', 1, 3, 3, '121 Le Loi\n  District 1\n  Ho Chi Minh', '2020-03-11 23:49:48'),
(156, 'NEXTOP CO.,LTD', 'nextop-co-ltd', 'nextop-co-ltd-logo.jpg', 'Sản phẩm', '51-150', 1, 3, 3, 'Keangnam Hanoi Landmark Tower\n  Cau Giay\n  Ha Noi', '2020-03-11 23:50:13'),
(157, 'Kyanon Digital', 'kyanon-digital', 'kyanon-digital-logo.png', 'Dịch vụ', '51-150', 1, 3, 3, '294 Trường Sa\n  Phu Nhuan\n  Ho Chi Minh', '2020-03-11 23:50:40'),
(158, 'Innotech | Innovative Technology', 'innotech-innovative-technology', 'innotech-innovative-technology-logo.jpg', 'Sản phẩm', '1-50', 1, 3, 3, '63 Vo Van Tan\n  District 3\n  Ho Chi Minh', '2020-03-11 23:51:00'),
(159, 'Innotech Vietnam Corporation', 'innotech-vietnam-corporation', 'innotech-vietnam-corporation-logo.png', 'Dịch vụ', '51-150', 1, 3, 3, '33 Ba Vì\n  Tan Binh\n  Ho Chi Minh', '2020-03-11 23:51:17'),
(160, 'DOU Holdings Networks Vietnam Co.,Ltd', 'dou-holdings-networks-vietnam-co-ltd', 'dou-holdings-networks-vietnam-co-ltd-logo.jpg', 'Dịch vụ', '151-300', 1, 3, 3, '19A Cong Hoa, Ward 12\n  Tan Binh\n  Ho Chi Minh', '2020-03-11 23:51:45'),
(161, 'Swiss Post Solutions Vietnam', 'swiss-post-solutions-vietnam', 'swiss-post-solutions-vietnam-logo.png', 'Sản phẩm', '1000+', 1, 3, 3, 'Saigon ICT Tower, Quang Trung Software City\n  District 12\n  Ho Chi Minh', '2020-03-11 23:52:29'),
(162, 'GNT VN., LTD', 'gnt-vn-ltd', 'gnt-vn-ltd-logo.png', 'Sản phẩm', '151-300', 1, 3, 3, '35 Ton Duc Thang\n  District 1\n  Ho Chi Minh', '2020-03-11 23:53:54'),
(163, 'Amaris', 'amaris', 'amaris-logo.png', 'Sản phẩm', '1000+', 1, 3, 3, '285 Cach Mang Thang Tam\n  District 10\n  Ho Chi Minh', '2020-03-12 00:00:34'),
(164, 'Jabil Vietnam', 'jabil-vietnam', 'jabil-vietnam-logo.png', 'Sản phẩm', '51-150', 1, 3, 3, 'Le Van Viet\n  Ho Chi Minh', '2020-03-12 00:01:24'),
(165, 'Global CyberSoft', 'global-cybersoft', 'global-cybersoft-logo.jpg', 'Dịch vụ', '301-500', 3, 7, 2.33333, '3 Quang Trung Software City\n  District 12\n  Ho Chi Minh', '2020-03-12 09:11:06'),
(166, 'Phần Mềm Phương Chi', 'phan-mem-phuong-chi', 'Untitled-1.png', 'Dịch vụ', '51-150', 2, 4, 2, 'Tầng 3-5 Số 22 Thành Công, Ba Đình, Hà Nội', '2020-03-12 00:12:18'),
(167, 'YouTech', 'youtech', 'youtech-logo.png', 'Dịch vụ', '51-150', 1, 3, 3, 'Ham Tu Quan\n  Hoan Kiem\n  Ha Noi', '2020-03-12 09:55:33'),
(168, 'Cổ Phần Công Nghệ Alphaway', 'co-phan-cong-nghe-alphaway', 'co-phan-cong-nghe-alphaway.png', 'Sản phẩm', '1-50', 1, 3, 3, 'Cau Giay, Ha Noi', '2020-03-12 09:56:14'),
(169, 'CloudStorm', 'cloudstorm', 'cloudstorm.png', 'Sản phẩm', '1-50', 1, 3, 3, 'District 4, Ho Chi Minh', '2020-03-12 09:56:28'),
(170, 'Công Ty TNHH Enjoyworks', 'cong-ty-tnhh-enjoyworks', 'cong-ty-tnhh-enjoyworks.png', 'Sản phẩm', '1-50', 1, 3, 3, 'Da Nang, Ho Chi Minh', '2020-03-12 09:56:36'),
(171, 'Fast (HCM)', 'fast-hcm', 'fast-hcm-logo.png', 'Sản phẩm', '301-500', 1, 3, 3, '10 Pho Quang\n  Tan Binh\n  Ho Chi Minh', '2020-03-12 09:58:52'),
(172, 'MP Tech', 'mp-tech', 'mp-tech.jpg', 'Outsource', '1-50', 1, 3, 3, 'Hoang Mai, Ha Noi', '2020-03-12 10:08:54'),
(173, 'Designveloper (DSV)', 'designveloper-dsv', 'designveloper-dsv-logo.png', 'Dịch vụ', '51-150', 1, 3, 3, '146 Nguyen Thai Binh\n  District 1\n  Ho Chi Minh', '2020-03-12 15:04:49'),
(174, 'AZTech', 'aztech', 'aztech-logo.jpg', 'Sản phẩm', '51-150', 1, 3, 3, '39 Nguyễn Bỉnh Khiêm\n  Go Vap\n  Ho Chi Minh', '2020-03-12 15:05:32'),
(175, 'DEVBLOCK VIETNAM', 'devblock-vietnam', 'devblock-vietnam-logo.png', 'Dịch vụ', '1-50', 1, 3, 3, 'Tầng 9, Tòa nhà ACB, 444A - 446 Cách Mạng Tháng 8\n  District 3\n  Ho Chi Minh', '2020-03-12 15:06:21'),
(176, 'NewSaigonSoft (NSS)', 'newsaigonsoft-nss', 'newsaigonsoft-nss-logo.png', 'Dịch vụ', '1-50', 1, 3, 3, '243 Chu Van An\n  Binh Thanh\n  Ho Chi Minh', '2020-03-12 15:06:30'),
(177, 'PadITech', 'paditech', 'paditech-logo.png', 'Dịch vụ', '1-50', 1, 3, 3, '235 Nguyễn Ngọc Nại\n  Thanh Xuan\n  Ha Noi', '2020-03-12 15:06:37'),
(178, 'LINE Vietnam', 'line-vietnam', 'line-vietnam-ho-chi-minh-logo.png', 'Sản phẩm', '301-500', 1, 3, 3, 'District 1\n  Ho Chi Minh', '2020-03-12 15:06:45'),
(179, 'Agency Spring Viet Nam', 'agency-spring-viet-nam', 'agency-spring-viet-nam-logo.jpg', 'Dịch vụ', '51-150', 1, 3, 3, '60 Hoang Van Thu\n  Phu Nhuan\n  Ho Chi Minh', '2020-03-12 15:06:58'),
(180, 'Shinhan Finance Vietnam', 'shinhan-finance-vietnam', 'shinhan-finance-vietnam.jpg', 'Sản phẩm', '1000+', 1, 3, 3, 'Ho Chi Minh, Ho Chi Minh', '2020-03-12 15:07:05'),
(181, '1Link', '1link', '1link-logo.png', 'Dịch vụ', '1-50', 1, 3, 3, '66 Hoang Ngan\n  Cầu Giấy\n  Ha Noi', '2020-03-12 15:07:18'),
(182, 'SPRING Production', 'spring-production', 'spring-production.jpg', 'Outsource', '151-300', 1, 3, 3, 'Phu Nhuan, Ho Chi Minh', '2020-03-12 15:07:35'),
(183, 'FLC Group', 'flc-group', 'flc-group-logo.jpg', 'Sản phẩm', '51-150', 1, 3, 3, 'Ha Noi', '2020-03-12 15:07:49'),
(184, 'Jonckers Co., Ltd', 'jonckers-co-ltd', 'jonckers-co-ltd-logo.jpg', 'Sản phẩm', '51-150', 1, 3, 3, '444  Hoang Hoa Tham\n  Ba Dinh\n  Ha Noi', '2020-03-12 15:08:27'),
(185, 'Linkbal Vietnam', 'linkbal-vietnam', 'linkbal-vietnam.png', 'Sản phẩm', '1-50', 1, 3, 3, 'Nam Tu Liem, Ha Noi', '2020-03-12 15:08:33'),
(186, 'SkyLab', 'skylab', 'skylab-logo.jpg', 'Sản phẩm', '1-50', 1, 3, 3, '208 Nguyen Trai\n  District 1\n  Ho Chi Minh', '2020-03-12 15:08:40'),
(187, 'GESO', 'geso', 'geso-logo.jpg', 'Sản phẩm', '1-50', 1, 3, 3, '234 Nguyen Trong Tuyen\n  Phu Nhuan\n  Ho Chi Minh', '2020-03-12 15:08:55'),
(188, 'NMS', 'nms', 'nms-logo.png', 'Sản phẩm', '1-50', 1, 3, 3, '138 Tran Binh\n  Nam Tu Liem\n  Ha Noi', '2020-03-12 15:09:01'),
(189, 'W2solution Việt Nam', 'w2solution-viet-nam', 'w2solution-vi-t-nam-logo.png', 'Dịch vụ', '1-50', 1, 3, 3, '30  30 Nguyễn Phi Khanh, phường Tân Định, Quận 1\n  District 1\n  Ho Chi Minh', '2020-03-12 15:09:08'),
(190, 'Công Ty Cổ phần Công Nghệ Truyền Thông DTS', 'cong-ty-co-phan-cong-nghe-truyen-thong-dts', 'cong-ty-c-ph-n-cong-ngh-truy-n-thong-dts-logo.png', 'Sản phẩm', '151-300', 1, 3, 3, '04 Dã Tượng\n  Hoan Kiem\n  Ha Noi', '2020-03-12 15:09:26'),
(191, 'Techcom Securities', 'techcom-securities', 'techcom-securities-logo.png', 'Sản phẩm', '151-300', 1, 3, 3, '191  Ba Trieu\n  Hai Ba Trung\n  Ha Noi', '2020-03-12 15:09:37'),
(192, 'Sota Tek', 'sota-tek', 'sota-tek-logo.png', 'Dịch vụ', '51-150', 1, 3, 3, 'Nguyễn Cơ Thạch\n  Nam Tu Liem\n  Ha Noi', '2020-03-12 15:09:50'),
(193, 'Lotus Quality Assurance', 'lotus-quality-assurance', 'lotus-quality-assurance-logo.png', 'Dịch vụ', '1-50', 1, 3, 3, '14th Floor, MHDI Building, 68 Nguyen Co Thach \n  Nam Tu Liem\n  Ha Noi', '2020-03-12 15:10:03'),
(194, '3S Intersoft', '3s-intersoft', '3s-intersoft-logo.jpg', 'Dịch vụ', '1-50', 1, 3, 3, '8 Ton That Thuyet\n  Nam Tu Liem\n  Ha Noi', '2020-03-12 15:10:15'),
(195, 'Fuji Technology JSC', 'fuji-technology-jsc', 'fujitech-logo.png', 'Dịch vụ', '1-50', 1, 3, 3, '1 Thái Hà\n  Dong Da\n  Ha Noi', '2020-03-12 15:10:26'),
(196, 'IIT', 'iit', 'iit-logo.png', 'Sản phẩm', '1-50', 1, 3, 3, '147 Mai Dịch\n  Cau Giay\n  Ha Noi', '2020-03-12 15:10:54'),
(197, 'HiveTech', 'hivetech', 'hivetech.png', 'Outsource', '1-50', 1, 3, 3, 'Ba Dinh, Ha Noi', '2020-03-12 15:11:11'),
(198, 'Phong Vũ', 'phong-vu', 'phong-vu-logo.png', 'Sản phẩm', '51-150', 1, 3, 3, '198 Nguyen Thi Minh Khai\n  District 3\n  Ho Chi Minh', '2020-03-12 15:11:22'),
(199, 'TQ Design', 'tq-design', 'tq-design-logo.png', 'Dịch vụ', '1-50', 1, 3, 3, '20 Kỳ Đồng\n  District 3\n  Ho Chi Minh', '2020-03-12 15:11:35'),
(200, 'HyoSung Vietnam', 'hyosung-vietnam', 'hyosung-vietnam-logo.png', 'Sản phẩm', '1-50', 1, 3, 3, 'Đường N2, Khu công nghiệp Nhơn Trạch 5, Đồng Nai,', '2020-03-12 15:11:48'),
(201, 'Yeah1 Network', 'yeah1-network', 'yeah1-network-logo.png', 'Sản phẩm', '151-300', 1, 3, 3, '201 Nam Ky Khoi Nghia\n  District 3\n  Ho Chi Minh', '2020-03-12 15:12:24'),
(202, 'Miichisoft', 'miichisoft', 'miichisoft-logo.png', 'Dịch vụ', '1-50', 1, 3, 3, '120 Truong Chinh\n  Thanh Xuan\n  Ha Noi', '2020-03-12 18:55:45'),
(203, 'One On One English', 'one-on-one-english', 'one-on-one-english.png', 'Sản phẩm', '51-150', 1, 3, 3, 'District 3, Ho Chi Minh', '2020-03-12 19:03:03'),
(204, 'BANK OF CHINA - HOCHIMINH CITY BRANCH', 'bank-of-china-hochiminh-city-branch', 'bank-of-china-hochiminh-city-branch.png', 'Sản phẩm', '1-50', 1, 3, 3, 'Ho Chi Minh', '2020-03-12 19:04:20'),
(205, 'Yojee', 'yojee', 'yojee-logo.jpg', 'Sản phẩm', '1-50', 1, 3, 3, '384 Hoàng Diệu\n    District 4\n    Ho Chi Minh', '2020-05-21 10:07:55'),
(206, 'Vmodev Hà Nội', 'vmodev-ha-noi', 'vmodev-ha-n-i-logo.jpg', 'Dịch vụ', '51-150', 1, 3, 3, '19  Duy Tân\n    Cau Giay\n    Ha Noi', '2020-05-22 10:13:56');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `congty`
--
ALTER TABLE `congty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `congty`
--
ALTER TABLE `congty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
