-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2020 lúc 06:52 PM
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
-- Cấu trúc bảng cho bảng `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `congty` int(11) NOT NULL,
  `thoigian` varchar(100) NOT NULL,
  `noidung` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chat`
--

INSERT INTO `chat` (`id`, `congty`, `thoigian`, `noidung`) VALUES
(2, 219, '', '[{\"chatuser\":\"Ngạn mắt biếc\",\"chattime\":\"2020-03-31 23:26:13\",\"noidung\":\"ok\",\"gioitinh\":\"nam\",\"sessionid\":\"286qn3ghjjegduqqageu4p1k79\"},{\"chatuser\":\"Ngạn mắt biếc\",\"chattime\":\"2020-03-31 23:29:18\",\"noidung\":\"tin thu 2\",\"gioitinh\":\"nam\",\"sessionid\":\"286qn3ghjjegduqqageu4p1k79\"},{\"chatuser\":\"Ngạn mắt biếc\",\"chattime\":\"2020-03-31 23:34:31\",\"noidung\":\"oh ye\",\"gioitinh\":\"nam\",\"sessionid\":\"286qn3ghjjegduqqageu4p1k79\"},{\"chatuser\":\"Ngạn mắt biếc\",\"chattime\":\"2020-03-31 23:36:43\",\"noidung\":\"ok\",\"gioitinh\":\"nam\",\"sessionid\":\"286qn3ghjjegduqqageu4p1k79\"}]');

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
(204, 'BANK OF CHINA - HOCHIMINH CITY BRANCH', 'bank-of-china-hochiminh-city-branch', 'bank-of-china-hochiminh-city-branch.png', 'Sản phẩm', '1-50', 1, 3, 3, 'Ho Chi Minh', '2020-03-12 19:04:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `tieude` varchar(100) NOT NULL,
  `slugtieude` varchar(100) NOT NULL,
  `thumbnail` varchar(11) NOT NULL,
  `thoigian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `congty` int(11) NOT NULL,
  `idreview` int(11) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `reply`
--

INSERT INTO `reply` (`id`, `congty`, `idreview`, `data`) VALUES
(18, 6, 17, '[{\"replyer\":\"Bác nói đúng vãi, tặng 1 like\",\"reaction\":\"LIKE\",\"noidung\":\"Bác nói đúng vãi, tặng 1 like\",\"thoigian\":\"2020-03-01 15:59:41\"},{\"replyer\":\"Review nhảm nhí, dislike\",\"reaction\":\"LIKE\",\"noidung\":\"Review nhảm nhí, dislike\",\"thoigian\":\"2020-03-01 16:10:56\"}]'),
(19, 27, 31, '[{\"replyer\":\"Cuong Doan\",\"reaction\":\"LIKE\",\"noidung\":\"Cuong Doan Cuong DoanCuong DoanCuong DoanCuong Doan\",\"thoigian\":\"2020-03-03 11:10:08\"}]'),
(20, 11, 54, '[{\"replyer\":\"test lần cuối của lần cuối\",\"reaction\":\"LIKE\",\"noidung\":\"test lần cuối của lần cuốitest lần cuối của lần cuốitest lần cuối của lần cuối\",\"thoigian\":\"2020-03-03 15:19:49\"},{\"replyer\":\"test lần cuối của lần cuối\",\"reaction\":\"LIKE\",\"noidung\":\"test lần cuối của lần cuốitest lần cuối của lần cuốitest lần cuối của lần cuối\",\"thoigian\":\"2020-03-03 15:20:13\"},{\"replyer\":\"test lần cuối của lần cuối\",\"reaction\":\"LIKE\",\"noidung\":\"test lần cuối của lần cuốitest lần cuối của lần cuốitest lần cuối của lần cuối\",\"thoigian\":\"2020-03-03 15:23:00\"},{\"replyer\":\"test lần cuối của lần cuối\",\"reaction\":\"LIKE\",\"noidung\":\"test lần cuối của lần cuốitest lần cuối của lần cuốitest lần cuối của lần cuối\",\"thoigian\":\"2020-03-03 15:29:41\"},{\"replyer\":\"test lần cuối của lần cuối\",\"reaction\":\"LIKE\",\"noidung\":\"test lần cuối của lần cuốitest lần cuối của lần cuốitest lần cuối của lần cuối\",\"thoigian\":\"2020-03-03 15:30:09\"},{\"replyer\":\"test lần cuối của lần cuối\",\"reaction\":\"LIKE\",\"noidung\":\"test lần cuối của lần cuốitest lần cuối của lần cuốitest lần cuối của lần cuối\",\"thoigian\":\"2020-03-03 15:35:38\"}]'),
(21, 11, 53, '[{\"replyer\":\"cuối nè thề luôn\",\"reaction\":\"HATE\",\"noidung\":\"cuối nè thề luôncuối nè thề luôn\",\"thoigian\":\"2020-03-03 15:37:04\"},{\"replyer\":\"xóa dùm đi\",\"reaction\":\"DELETE\",\"noidung\":\"Xóa review này giùm!\",\"thoigian\":\"2020-03-03 15:37:20\"},{\"replyer\":\"Bác nói đúng vãi, tặng 1 like\",\"reaction\":\"HATE\",\"noidung\":\"Bác nói đúng vãi, tặng 1 like\",\"thoigian\":\"2020-03-03 19:07:04\"}]'),
(22, 11, 45, '[{\"replyer\":\"admin đập chai\",\"reaction\":\"LIKE\",\"noidung\":\"admin đập chai\",\"thoigian\":\"2020-03-03 15:44:52\"}]'),
(23, 16, 56, '[{\"replyer\":\"Cuong Doan\",\"reaction\":\"DELETE\",\"noidung\":\"Cuong Doan\",\"thoigian\":\"2020-03-03 19:52:51\"}]'),
(24, 78, 69, '[{\"replyer\":\"Ẩn Danh\",\"reaction\":\"LIKE\",\"noidung\":\"Bác nói đúng vãi, tặng 1 like\",\"thoigian\":\"2020-03-06 10:31:24\"}]'),
(25, 46, 219, '[{\"replyer\":\"Ẩn Danh\",\"reaction\":\"LIKE\",\"noidung\":\"Không nha, lo học lấy bằng đi chứ intern vào cũng ngồi chơi thôi\",\"thoigian\":\"2020-03-13 08:43:39\"}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `id` int(100) NOT NULL,
  `reviewer` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `rate` int(1) NOT NULL,
  `noidung` text NOT NULL,
  `congty` int(11) NOT NULL,
  `thoigian` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `review`
--

INSERT INTO `review` (`id`, `reviewer`, `position`, `rate`, `noidung`, `congty`, `thoigian`, `contact`) VALUES
(68, 'Ẩn Danh', 'điều phối', 3, 'Nghỉ là ghtk nhưng vẫn mang theo nổi ám ảnh.Điều phối kim luôn kiểm bao ;vác bao kéo bao.Cty luôn trong tình trạng thiếu nhân lực( ép lương ;cv nên mọi người nghỉ hết) mà thiếu là đẩy bộ phận khác làm cho dù đó là bộ phận nào.Lúc để tuyển dụng thì lương từ 6-8 tr nhưng thật sự thì chỉ có 6tr chưa tính tiền bồi hoàn đơn có khi cả triệu nhưng bạn tuyển dụng quên để tg làm việc là 11h-16h.Ép nhân viên thì khỏi phải bàn.Công ty độc tài.chỉ có một câu châm ngôn \"làm được không ;ko được nghỉ\".Lương bổng nhiều khi còn thua thời sinh viên đi làm thêm ngày 4 tiếng.Noi là điều phối chớ thật chất là một đứa pk ko thua ko kém.Nói team building vậy thôi (trên 2 năm bạn mới được đi) chớ kéo vào khu dã ngoại xong ăn bánh mì..nhìn như kẻ vô gia cư.Môi trường thì nóng bức bụi bẩn;vô cùng tệ.Mình đã thấy vô cùng tiếc thời gian bỏ ra làm tại ghtk(7th).Ko xin nghỉ sớm hơn để có kinh nghiệm môi trường tốt hơn.Nhìn bạn bè ra trường làm môi trường phúc lợi tốt thấy hối hận vô cùng khi làm ghtk', 48, '2020-03-05 16:07:32', ''),
(69, 'Sắp vào', 'chưa là nhân viên', 4, 'mình mới pv tuần trước. chưa biết kq thế nào nhưng thấy tác phong đón tiếp cũng chuyên nghiệp, có hai vòng , vòng 1 là technical, vòng 2 pv với nhân sự, kq hai vòng là độc lập và sẽ được đánh giá chung thành thang điểm dựa trên 10 tiêu chí, từ đó được đưa vào hệ thống đánh giá rank lương cho ứng viên và ko phụ thuộc về mặt con người\r\n', 78, '2020-03-06 10:22:22', ''),
(70, 'sale', 'sale quen', 1, 'Công ty trả lương không đúng hẹn, đợi gần nửa tháng mới nhận, giam lương nhân viên, không trả hoa hồng cho sale, ép nhân viên nghĩ trước tết để không phải trả lương tháng 13.\r\n\r\nMáy lạnh, lò viba hư mà không chịu sửa, không đóng tiền gởi xe cho nhà xe, nghèo nàn về vật chất, nghe đồn cty đang cạn tiền mà lúc nào sếp cũng bô bô cái miệng dự án tiền tỷ.\r\n\r\nSale vào không có ai hướng dẫn nghiệp vụ, đồng nghiệp thì chảnh chó, sếp thì vô tâm, chỉ suốt ngày Ép KPI.\r\n\r\nKhông nên hợp tác với công ty', 79, '2020-03-07 08:31:59', ''),
(71, 'Ẩn Danh', 'Dev', 3, 'Em mới đi phỏng vấn bên zing về có ai có kinh nghiệm đậu trượt, mail kết quả thế nào không ạ chia sẻ em với. Em đang hoang mang quá\r\n', 77, '2020-03-07 08:35:03', ''),
(72, 'Faker', 'Dev', 5, 'ae cho hỏi lương ở đây nghe nói trung bình 40 củ phải ko vậy?\r\n', 82, '2020-03-07 08:43:08', ''),
(73, 'Ẩn danh', 'Dev', 4, 'Mới đi phỏng vấn về chờ kết quả', 83, '2020-03-07 03:00:25', ''),
(74, 'Ẩn danh', 'Dev', 4, 'Mới đi phỏng vấn về chờ kết quả', 84, '2020-03-07 03:02:00', ''),
(75, 'Ẩn danh', 'Dev', 4, 'Mới đi phỏng vấn về chờ kết quả', 85, '2020-03-07 10:02:52', ''),
(76, 'Ẩn Danh', 'Dev', 5, 'Mọi thứ có vẻ ổn', 66, '2020-03-07 14:59:43', ''),
(77, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 86, '2020-03-07 15:38:22', ''),
(78, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 87, '2020-03-07 15:41:42', ''),
(79, 'Ẩn Danh', 'Dev', 4, 'Gmo HCM là một ngôi nhà tuyệt vời! Chính sách OK, Tuyệt nhất là ăn nhậu và chơi bời. Đời thế là vui rồi... phải không anh em? Chỉ tiếc có mấy em xinh xinh thì có chủ hết rồi. Hơi buồn\r\n', 87, '2020-03-07 15:43:03', ''),
(80, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 88, '2020-03-07 15:54:31', ''),
(81, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 89, '2020-03-07 15:55:22', ''),
(82, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 90, '2020-03-07 15:55:52', ''),
(83, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 91, '2020-03-07 15:56:22', ''),
(84, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 92, '2020-03-07 15:57:01', ''),
(85, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 93, '2020-03-07 15:57:25', ''),
(86, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 94, '2020-03-07 15:57:46', ''),
(87, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 95, '2020-03-07 15:59:12', ''),
(88, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 96, '2020-03-07 16:01:07', ''),
(89, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 97, '2020-03-07 16:21:04', ''),
(90, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 98, '2020-03-07 16:21:41', ''),
(91, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 99, '2020-03-07 16:26:29', ''),
(92, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 100, '2020-03-07 16:26:49', ''),
(93, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 101, '2020-03-07 16:26:57', ''),
(94, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 102, '2020-03-07 16:27:29', ''),
(95, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 103, '2020-03-07 16:27:41', ''),
(96, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 104, '2020-03-07 16:28:55', ''),
(97, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 105, '2020-03-07 16:29:17', ''),
(98, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 106, '2020-03-07 16:29:27', ''),
(99, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 107, '2020-03-07 16:29:37', ''),
(100, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 108, '2020-03-07 16:29:46', ''),
(101, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 109, '2020-03-07 16:29:55', ''),
(102, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 110, '2020-03-07 16:31:26', ''),
(103, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 111, '2020-03-07 16:31:35', ''),
(104, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 112, '2020-03-07 16:31:45', ''),
(105, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 113, '2020-03-07 16:31:54', ''),
(106, 'Ẩn danh', 'Dev', 4, 'Thấy mọi cái đều ổn', 114, '2020-03-07 16:32:04', ''),
(107, 'Ẩn Danh', 'Dev', 3, 'Các bác cho em hỏi ở đây có ông Đinh Trọng Long phải ko, ông ấy làm gì và có chơi đc ko?', 114, '2020-03-09 08:06:39', ''),
(108, 'Ẩn Danh', 'Dev', 4, 'Công ty có nhiều hỗ trợ về đào tạo nhân viêc mới, về lương thưởng và có nhiều các hoạt động vui khỏe khác dành cho nhân viên', 114, '2020-03-09 08:07:18', ''),
(109, 'Cài win dạo', 'Dev', 5, 'Vào được rất nhiều ae giúp đỡ chỉ bảo tận tình, môi trường khá năng động chứ ko việc ai người ấy làm như công ty cũ. Sếp ko bao giờ chậm lương. Cơm trưa có người nấu cho đầy đủ dinh dưỡng mà chỉ có 30k. Nói chung làm lâu dài khá ổn.\r\n', 112, '2020-03-09 09:50:05', ''),
(110, 'Ẩn Danh', 'Dev', 5, '- Thu nhập tốt, có lương và thưởng cuối năm\r\n- Du xuân đầu năm, du lịch vacation hàng năm.\r\n- Hỗ trợ support máy tính nếu sử dụng máy tính cá nhân.\r\n- Chủ động đăng ký thời gian làm việc.\r\n- Môi trường thoải mái, năng động, có nhiều cơ hội làm việc và học hỏi, cơ hội tiếp xúc với nhiều công nghệ mời.\r\n- Dễ hòa đồng và mọi người sống tình cảm\r\n- Sếp cực kỳ tâm lý\r\n- Chế độ phúc lợi công ty tốt.\r\n- Sử dụng miễn phí đồ dùng sinh hoạt, cf, nước uống,...\r\n- Công việc đều đặn, không phải OT nhiều.\r\n- Chế độ OT đãi ngộ tốt, bao gồm cả lương và bonus timesheet\r\n\r\n- Đăng ký giờ giấc thoải mái nên nhiều khi đi làm muộn :(((', 112, '2020-03-09 09:51:34', ''),
(112, 'Ẩn Danh', 'Sales', 5, 'chăm chỉ và kiên trì thì có thể gắn bó lâu dài với công ty, học được nhiều từ công việc\r\n', 113, '2020-03-09 16:57:47', ''),
(113, 'Ẩn Danh', 'Dev', 5, 'Cho em hỏi công ty có mức lương như thế nào ạ,anh chị nào làm lâu năm có thể cho em ít review với ạ.\r\n', 45, '2020-03-09 17:00:40', ''),
(114, 'Ẩn Danh', 'Dev', 3, 'Cho em hỏi em sắp đi test tại GMO fresher front end,ở đây ai test fresher front end rồi thì cho em hỏi đề IQ vs kiến thức tổng hợp nó như nào ạ,vài câu thôi cũng đc để em biết dạng,còn interview thì người ta sẽ hỏi gì ạ,em cảm ơn\r\n', 87, '2020-03-09 20:54:12', ''),
(115, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Thấy bảo vào công ty này phải phỏng vấn 3 vòng. Và công ty oách lắm. Xịn sò lắm. Lương cao lắm. Ai review công ty này giúp mình với\n          \n      ', 115, '2020-03-10 08:29:26', ''),
(116, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Lãnh đạo trẻ, chuyên môn thấp, lộng quyền\n          \n      ', 116, '2020-03-10 08:29:50', ''),
(117, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Cty đầu tiên mình làm việc sau khi ra trường. Cũng làm dc 2 năm rưỡi gì đó. Mới ra trường hừng hực cống hiến, nghĩ lương thế đéo nào cũng được miễn là môi trường tốt sẽ ở lại cống hiến. Ngày được sếp gọi vào tăng lương từ 6 triệu lên 8 triệu mà vui vãi cả L, giờ lương cao hơn nhưng chưa thấy lại cái cảm giác vui của ngày xưa. Cũng có nhiều kỉ niệm, được học hỏi và kết thân với những người bạn bằng tuổi: Huy và Ngân comter. Dù giờ cả năm chẳng nói với nhau câu nào nhưng vẫn nhớ về các bạn. Nhớ những ngày cùng refactor con Container Loader với anh Hùng và Huy. Nhớ những buổi chiều đi về cùng Ngân vì cùng đường. Nhiều hôm ở công ty tranh cãi nhau là bực đi mẹ về trước, hôm sau nguôi nguôi lại đi về cùng. Ôi những người bạn của tôi. Nhớ các bạn \n          \n      ', 117, '2020-03-10 08:30:29', ''),
(118, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Ai làm mobile ở đây chưa cho em ít review\n          \n      ', 118, '2020-03-10 08:32:22', ''),
(119, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Là 1 đối tác từng hợp tác  với tập đoàn này và thấy họ làm việc rất chuyên nghiệp, đúng hạn chứ chưa thấy trễ hạn bao giờ. \n          \n      ', 119, '2020-03-10 08:35:10', ''),
(120, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Các ông tướng cấp trung luôn là vấn đề đau đầu tại cac công ty lớn. Đâu chỉ riêng Brycen :-)\n          \n      ', 120, '2020-03-10 08:39:27', ''),
(121, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Môi trường tốt, thoải mái, nhưng chế độ chưa ok lắm, không phù hợp làm lâu dài\n          \n      ', 121, '2020-03-10 08:40:03', ''),
(122, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Môi trường công ty trẻ và chuyên nghiệp, phù hợp với các bạn muốn học hỏi. Các bậc quản lý và sếp tâm lý, quan tâm đến nhân viên. Đi làm không bị cảm giác gò bó mà rất vui. Tập thể công ty rất giống một gia đình. \n          \n      ', 122, '2020-03-10 14:15:11', ''),
(123, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Mấy anh chị từng làm đây cho em hỏi tuyển intern có quan trọng GPA không ạ Em có 2.5 có mấy prj mà k dám apply\n          \n      ', 123, '2020-03-10 14:15:53', ''),
(124, 'Ẩn Danh', 'HR', 5, 'Mình đã làm một thời gian ở đây rồi. Cho dù còn những điểm cần cải thiện nhưng đây vẫn là một môi trường làm việc lí tưởng cho mình, lương ổn, đồng nghiệp thân thiện đặc biệt là công việc mình làm đúng với ước mơ của mình.\r\n', 57, '2020-03-10 14:16:54', ''),
(125, 'Ẩn Danh', 'Langer', 5, 'Mình mới được nhận vào Langmaster nhưng đi phỏng vấn thấy các chị rất thoải mái và okela. Mình là sinh viên năm nhất nên tìm mấy công việc mình muốn làm và hợp với mình rất khó, vì không phải chỗ nào cũng nhận sinh viên không có tí kinh nghiệm nào như mình. Vì vậy hôm pv mình được test năng lực luôn và được nhận xét thẳng mình thiếu cái gì, giỏi cái gì ấy. Thậm chí vì dịch mà mình không đến công ty được các chị cũng chấp nhận cho mình ở nhà làm việc online. Mình chưa gắn bó với Lang lâu nhưng ấn tượng ban đầu thì rất rất ổn các bạn ạ.\r\n', 57, '2020-03-10 14:17:36', ''),
(126, 'Ẩn Danh', 'Dev', 5, 'Mới vào làm, chưa có gì xảy ra', 103, '2020-03-10 14:20:15', ''),
(127, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              HR thiếu chuyên nghiệp, công ty làm onsite là chủ yếu. Lương lậu chán Cảm giác bị đem con bỏ chợ.Không thể phát triển ở cty này được. Anh em đừng có vào, phí\n          \n      ', 124, '2020-03-10 14:22:24', ''),
(128, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Công ty bình thường, không chuyên nghiệp như các công ty khác cùng quy mô. Làm 2 tháng là té.\n          \n      ', 125, '2020-03-10 14:38:47', ''),
(129, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              team xịn, sản phẩm xịn \n          \n      ', 126, '2020-03-10 18:26:05', ''),
(130, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Từng làm TTS ở đây mình có nhận xét chủ quan như sau:- Ưu điểm:+ Thời gian làm việc quy định là 8h30 nhưng thực tế đến từ 8h30-9h00 là okie tất.+ Môi trường nhiều người trẻ, dễ hòa đồng.+ Gái xinh sẵn có, nhất là em bên tuyển dụng xinh mê hồn :)+ TTS xin nghỉ giữa chừng công ty vẫn gửi trợ cấp đàng hoàng.- Nhược điểm:+ Đào tạo thì phải làm cho công ty 2 năm. + Khi bảo vệ mock xong sẽ là CTV (có người làm CTV đâu đó 6 tháng rồi vẫn chưa lên). Mà lương CTV là 4-5 triệu.\n          \n      ', 127, '2020-03-10 18:27:18', ''),
(131, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Môi trường ổn. Mỗi năm tăng lương 1 lần, bảo hiểm phúc lợi đầy đủ.Điểm trừ: Lương thấp chưa từng thấy, nói là cộng thêm 400 tiền lạnh nhưng trừ tiền bảo hiểm đi thì vẫn thấp lẹt đẹt. Lương thời vụ lại cao hơn lương nv chính thức. Môi trường làm việc thỉnh thoảng gặp mấy người trình độ cấp 3 vào làm nghe cách nói chuyện không ưa nổi.\n          \n      ', 128, '2020-03-10 18:30:53', ''),
(132, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Nhà nhà đá banh, chưa kể còn thể loại mình làm luôn đúng, có chuyện là rống lên rồi âm thầm chỉnh sửa rồi vờ như tự nhiên hết lỗi. Market có mấy cái account thì không check, hồi đầu còn kiếm đâu ra má ất ơ nào đó từ graphic design qua làm CMO, chi biế chạy ad mà ad bị suspend thì đổ cho product bị lỗi\n          \n      ', 129, '2020-03-10 18:33:09', ''),
(133, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Mình sắp vào làm Công ty Vinfast cho mình xin ý kiến với ạ? Hoang mang quá\n          \n      ', 130, '2020-03-10 20:43:51', ''),
(134, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Các tiền bối có thể cho em biết lương thưởng của Tech tn ạ, 1 năm e nghe nói được 14.5 tháng lương có phải không ạ\n          \n      ', 131, '2020-03-10 20:44:36', ''),
(135, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              thấy ẩm ương, đã làm thử 2 tháng rồi bỏ vì hơi ngớ ngẩn. Nên rõ ràng hẵng vào vp\n          \n      ', 132, '2020-03-10 20:45:18', ''),
(136, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Công ty nhà nước trả lương thấp giờ mà còn trả lương kỹ sư bậc 1 có 5, 6 triệu thôi. Ngành hóa nói chung là khó mà khá được. Anh em học hóa ra đành chấp nhận thôi\n          \n      ', 133, '2020-03-10 20:48:36', ''),
(137, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Mình làm ở bộ phận kho kiêm hỗ trợ kĩ thuật ở ĐMX. Công việc hết sức lôm côm láo nhao bát nháo: - Quản lý: Từ nhân viên đi lên ko có kinh nghiệm gì hết nói thẳng là trưởng sàn thì chuẩn hơn.Chỉ biết làm mọi cách để hoàn tất các Công việc mà trên đưa xuống còn kệ mẹ nhân viên.- Nhân viên tư vấn: Chỉ biết bán hàng thui - Nhân viên kho kiêm hỗ trợ kỹ thuật: nói thẳng là 1 con chó hầu cả siêu thị. Khi có Công việc trên đưa xuống hầu như mình phải làm hết. Quản lý nó chỉ biết sai biết dí để nó bấm hoàn tất công việc trên hệ thống. Tư vấn chỉ biết bán hàng sai mình đi lấy hàng thử hàng. Kiểm kê thì kiểm đêm  hôm. Quản lý rảnh háng ngồi máy, tư vấn cầm giấy đếm láo nháo. Hôm sau vừa lo hầu cả siêu thị vừa lo kiểm đếm lại. Tóm lại đã gọi là nhân viên kho kiểm hỗ trợ kỹ thuật là chỉ kiểm soát hàng hóa hỗ trợ kỹ thuật thôi. Đây nó dí cho 1 đống công việc bắt phải kiêm cả bán hàng in giá kế toán kho triển khai hình ảnh st công việc chạy vặt linh tinh vân vân.Về nhà cũng đéo tha lúc nào cũng bât check công việc 24/24 bằng app Line hở ra là gọi.1 tháng hết họp rồi trực đêm vệ sinh siêu thị kiểm kê làm hình ảnh phát tờ rơi họp hành.Nói chung lương ko bằng công nhân và bát nháo mệt người đau đầu mệt mỏi tinh thần.Nói thẳng nóa cũng chỉ là lao động phổ thông bóc lột. \n      ', 134, '2020-03-10 20:50:08', ''),
(138, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Sabeco tuy đã chuyển quản lý về tay người Thái nhưng nội bộ nhà nước ở các công ty con vẫn bè phái và chém giết lẫn nhau. Đặc biệt ở công ty ngoài miền Bắc, giám đốc toàn trốn việc đi chơi golf, mỗi lần đoàn tổng công ty trong Nam ra kiểm tra thì toàn bắt anh em sales đi mua bia bày, tặng quán và khách để chứng tỏ độ phủ bia chứ thực chất là không bán nổi so với Tiger. Chưa kể đám nhân viên thì toàn quen biết, bất tài vô dụng, chuyên đi soi và cắn phá, không lo công việc mà chỉ toàn đi cắn đồng đội. Bất hạnh cho SABECO, nếu người THÁI mà không trực tiếp quản lý các công ty khu vực thì có mà bị lừa nhiều bởi những bọn vô dụng này.\n      ', 135, '2020-03-10 20:51:09', ''),
(139, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Phải trả trước gần trăm triệu hoặc kí 1 bản hợp đồng nô lệ (lấy đi 35% lương mỗi tháng trong 2 năm) để đổi lại một mớ kiến thức đéo thể dùng được khi đi xin việc và được truyền tải bởi các \"senior\" mới vào ngành khi viết code còn sai lên sai xuống cùng các bài giảng được viết ngay trước giờ lên lớp vài tiếng vì nó sida đéo chịu được.Có tiền thì nên đi các trung tâm khác còn với kiến thức còn nhiều hơn môi trường chém gió này.\n          \n      ', 136, '2020-03-10 20:57:19', ''),
(140, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Thì mình cũng sắp nghỉ việc ở đây rồi, nên cũng có chút review về công ty.Ưu điểm:- Phong trào đoàn thể tốt, event rồi là teambuilding làm rất tốt- Môi trường làm việc thoải máiNhược điểm:- Lương thấp so với mặt bằng chung, review lương thì cũng tăng ít, ko đáng kể (Nghĩ lại thì cũng đúng, dự án không nhiều, ngồi chơi nhiều thì lương thấp là đúng rồi) -> Bạn nào thích môi trường thoải mái, ko gánh nặng đồng tiền thì vào đây, khá ok- Tiền thưởng Tết thấp (Mong công ty cải thiện cái này) -> Có thể bớt khoản phí tổ chức HH (tức là giảm phí đi, ví dụ bình thường chi 3tr/ tuần thì giờ chi 1tr/tuần, mua hoa quả nhẹ nhàng thôi) để tiết kiệm ngân sách, chi cho khoản thưởng như lễ, tết sẽ thiết thực hơn.-- đó, hết rồi --Túm lại là phù hợp các bạn mới ra trường, khá là thoải mái mà cũng học hỏi được nhiều thứ đóChúc công ty ngày càng phát triển\n          \n      ', 137, '2020-03-10 20:57:32', ''),
(141, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Cho e xin thêm thông tin cụ thể với ah\n          \n      ', 138, '2020-03-10 20:57:46', ''),
(142, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Mấy ông boss ở đây có phong cách rất thích tự bợ đít mình kiểu sống ảo coi mình là startup kì lân ấy hiu hiuVào đừng để bị lừa bởi mấy màn mua giáo phóng lao xé gió nha các cháu :))\n          \n      ', 139, '2020-03-10 20:58:13', ''),
(143, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              fresher ở đây hỏi có căng không mọi người , sao toàn thấy cmt chửi :((\n          \n      ', 140, '2020-03-10 20:58:28', ''),
(144, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Né gấp. Vào chỉ làm như 1 con trâu không biết suy nghĩ. Môi trường áp lực. Chả có tý văn hóa gì. Rất lôm côm :|\n          \n      ', 141, '2020-03-10 20:58:43', ''),
(145, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Anh chị, đồng nghiệp vui vẻ, nhiệt tình. Sếp chiều hết mức. Sẽ gắn bó với công ty dài lâu. \n          \n      ', 142, '2020-03-11 15:33:53', ''),
(146, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Có mấy sếp cũng giỏi, được theo các sếp thì ngon, còn cũng có sếp dốt hơn mình, đen thì chịu\n          \n      ', 143, '2020-03-11 15:34:28', ''),
(147, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Công ty thiếu chuyên nghiệp.Hiện tại chỉ có vài mạng đang làm.Phỏng vấn xong gần 2 tuần vẫn không báo kết quả.\n          \n      ', 144, '2020-03-11 15:35:03', ''),
(148, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              bị quỵt 1,5 tháng lương chưa trả tới giờ là 5 năm rồi nản \n          \n      ', 145, '2020-03-11 15:35:21', ''),
(149, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Đi phỏng vấn thì được code giấy, hơi ngại nhưng không phải vấn đề lớn. Có 2 anh bên DEV sang phỏng vấn, hỏi 1 số vấn đề liên quan đến SQL và code tầng junior sau đó là nâng lên senior.Deal lương khoảng 8tr. VP hơi bé 1 chút nhưng nhìn cũng thoải mái. \n          \n      ', 146, '2020-03-11 15:35:32', ''),
(150, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Công ty chỉ muốn bóc lột nhân viên. Phỏng vấn fresher hỏi \"em nhận lương intern 1 tháng được không?\", bảo được cái \"2 tháng thì sao\" là hiểu luôn.Bài test thì 5 câu bắt làm trong 30 phút trên codepen (lại chả bảo trước nền tảng nào để chuẩn bị trước, làm không quen codepen, một số chuyện xảy ra và hôm đó bị mất code, phải code lại rồi này kia trong vòng 30 phút). 5 câu bao cả HTML,CSS,JS, form, fetch API, tự luận vân vân,.. và yet làm trong 30 phút.Apply fresher Reactjs mà vẫn hỏi về MVC, trong khi đã hỏi đủ thứ trên đời từ nền tảng đến công nghệ rồi, chả hiểu đang tuyển fresher hay junior, lương thì còn thấp hơn fresher ở chỗ khác mà hỏi khó.Chả biết đậu rớt thế nào, mà gần tháng rồi chưa có mail báo kết quả :) Đúng là khinh người vkl. Thực ra có đậu t cũng chả thèm làm. T biết mình đủ sức đậu KMS, VNG, Zalo huống hồ là cái startup bóc lột củ chuối này :). Bye.Nói chung là ai fresher tìm review thì cứ né ra cho đỡ tốn time, hoặc cứ pv để practice là chính nhé, chứ công ty trashy lắm. Trung bình trên reviewcongty là toàn 2.5 sao, công ty này còn 2 sao là tự hiểu rồi đó :)) \n          \n      ', 147, '2020-03-11 15:36:01', ''),
(151, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              hẹn 11h30 vào phỏng vấn. vô thấy trước mình có 6 người ngồi chờ. hỏi thăm mới biết họ vào từ lúc 10h15 mà chờ mòn mỏi khi nhân sự trả lời vui vẻ là sếp chưa về. đến lúc mọi người bỏ về là 13h00 dù chưa động tĩnh gì là sếp đã về. nhận xét thì mọi người tự nghĩ nhé. k bàn thêm làm gì.\n          \n      ', 148, '2020-03-11 15:36:28', ''),
(152, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Sếp nước ngoài cởi mở, trân trọng ý kiến của nhân viên\n          \n      ', 149, '2020-03-11 15:37:03', ''),
(153, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              chạy ngay đi trước khi mọi chuyện tồi tệ hơn\n          \n      ', 150, '2020-03-11 15:37:16', ''),
(154, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Đi phỏng vấn 2 vòng trời nắng chang chang giữa mùa hè cả chục cây số. HR cười cười nói nói hứa hẹn báo kết quả sớm xong mất hút luôn.\n      ', 151, '2020-03-11 15:37:48', ''),
(155, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Trc mk có thất nghiệp 1 tháng ở nhà buồn tay buồn chân nên tìm việc để đi làm cho đỡ buồn tay buồn chân và t đã tìm đc cái cty này và ứng tuyển và vị trí sale ko biết các bác như nào chứ e lần đầu tiên có ng phỏng vấn e là NGÀY TRC E ĐI HỌC CÔ GIÁO E ĐÁNH GIÁ VỀ E NHƯ NÀOÔi vcđ t như bị hỏi cung vậy- nv mới vào thì ko tranning nào là mặt hàng cty đang bán nào là cách tư vấn hay cách chào kh ra sao nhưng ko t mất nguyên 1 ngày trời chỉ vào phòng họp ghặp cái ông gầy và ngồi nghe ông ấy ns về định hướng của cty sau này như nào và ông ấy nhân tiện hỏi nhưng câu tế nhị về cs và gđ của t các m ạ ( t nghe loáng thoanag hình như tên long ko biết là lm bộ phận ji mà lúc quái nào tỏ vẻ ta đây giỏi hơn ng khác mồm lúc quái nào cũng gắn vs câu chuyện ngxua a làm sale đỉnh lắm các e đưa cho bất kì thứ ji a cũng có thể chốt đc cho e ọe buồn nôn )\n          \n      ', 152, '2020-03-11 15:38:12', ''),
(156, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Capgemini nước ngoài bự, nhưng ở Việt Nam bèo. Inter vào làm java, được training guidewire, rồi cuồi cùng làm salesforce, OT sấp mặt. Cảm giác như bị lừa. Guidewire, salesforce ở ngoài chẳng công ty nào dùng đến,cho dù giỏi thì mốt xin chổ khác chẳng ai nhận. Dụ bạn mới ra trường như benefit tốt, đi nước ngoài là dối trá các bạn đừng tin.\n          \n      ', 153, '2020-03-11 23:47:17', ''),
(157, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              PHP dev chỉ có 1 vị trí, bảo trì mấy website đăng tin bđs của công ty, cho nên lương tầm 10tr đổ xuống, không có cơ hội phát triển nghề nghiệp, quit sau 1 ngày thử việc.Team ERP Python thì nhân số trên 6 người, ngon không thì chẳng biết.\n          \n      ', 154, '2020-03-11 23:48:06', ''),
(158, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Công nhận VN dân trí thấp. Toàn đứa học ĐH ra mà nói năng như phường chợ búa.\n          \n      ', 155, '2020-03-11 23:49:48', ''),
(159, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Có người yêu làm tester ở đấy về kể lại như sau: - Môi trường thăng tiến như loz, vào mức lương 6tr tính cả 50$ phụ cấp làm đẹp. Nhưng sau 1 năm review lại thì tăng 120k. VKl :)))- Không hiểu mấy ông bên DEV đến cty để làm việc hay để gạ gẫm tán tỉnh tester mà cùng đợt mình vào có 1 con bé có ny rồi mà đùng cái bỏ thằng nyc để cưới thằng DEV kia. Thấy bàn tán là do thằng DEV kia có cái chung cư ghẻ ở Hà Nội :)))) - Bà lead team test thì suốt ngày nhồi nhét tư tưởng độc thân muôn năm vào đầu nhân viên :))) - Kết: muốn xàm xí cưa cẩm thì vào, lương lậu như loz vì nó có đủ thằng key rồi nên đừng mơ. Về phần mình thì đã chuyển được ny qua FIS cho \"an toàn\" :)))\n          \n      ', 156, '2020-03-11 23:50:13', ''),
(160, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Công ty luôn tuyển intern để gánh dự án lớn, lương thì thấp bèo, bốc lột sức lao động trên danh nghĩa thực tập sinh(học hỏi)\n          \n      ', 157, '2020-03-11 23:50:40', ''),
(161, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Khuyên các bạn thật tình ko nên vô cái công ty âm binh này. Quy trình làm việc không có, ăn chặn tiền OT của nhân viên, sếp thì nóng tính thích là chửi nhân viên như chó. Bình thường thì toàn hứa với hứa đéo làm được gì. \n          \n      ', 158, '2020-03-11 23:51:00', ''),
(162, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              đi pv vị trí java dev ở đây, không pass nhưng ấn tượng tạm ổnngười phỏng vấn nhiệt tình chia sẻ nhiều, office đẹp nhưng lên xuống nhiều lầunhân sự dễ xương, nhiệt tình và khá ngonLương và benefit ko bik vì ko pass\n          \n      ', 159, '2020-03-11 23:51:17', ''),
(163, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Mình từng làm vị trí SD ở đây 1 thời gian, team SD thì vui, lead có người siêng người lười. Nhưng làm vị trí SD or Customer Service thì thường bị phân biệt, chỉ được ngồi loại ghế thường, Dev, test thì đc ngồi ghế xịn, đến khi sếp thấy ghế thường mau hư quá thì mới mua ghế xin cho SD ngồi. Đến lúc company trip thì những người trùng ca trực thì sẽ đc phần tiền của trip đó. Nhưng những người trực đêm ( từ 22h- 7h sáng) vẩn bắt buộc phải đi. Không đi thì không đc trả tiền phần đó ( hỏi thử có ai thức cả đêm làm việc xong bắt người ta ngồi xe đi du lịch nổi không ?)  Còn nhiều thứ nữa. Quan trọng là khi người sếp cũ nghỉ ( Anh Du) thì người sếp mới sau này không có tầm nhìn và năng lực lãnh đạo lắm. \n          \n      ', 160, '2020-03-11 23:51:45', ''),
(164, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Sau thời gian làm rút ra cho ae tham khảo- Lương lậu: cũng tạm tạm không phải lương cạnh tranh như các công khác. Nhưng được cái có thưởng KPI trước tết nên khá ổn (cũng 2 tháng lương hoặc hơn), thêm 1 tháng 13 nữa- Công ty đóng bảo hiểm full cho nhân viên, có thêm bảo hiểm tư nhân (sau này mới được Level 1, chứ trước đó dạng cùi bắp chỉ có bị tại nạn chết mới bảo hiểm)- Thuế: công ty đóng thuế khá chát, đầu năm cty sẽ quyết toán cho nhân viên- Thời gian: 1 ngày làm việc của IT thì 8.8 tiếng, thiếu thì bị trừ ngày lương. Còn Dev thì thời gian linh động hơn. Được cái vào sớm trễ tuỳ thích, miễn sao đủ time là được.- Phúc lợi: do dạng công ty sản xuất nên 1 số phúc lợi thấy cũng bèo bèo như khám sức khoẻ hàng năm hơi cùi, ngày nghỉ 1 năm ít (12 ngày), tiền ăn 1 ngày được 20k, gửi xe free- Training: cái này cũng hên xui, chủ yếu tập trung vào key member nhiều hơn. Còn chung thì cũng có nhưng không có gì đặc biệt lắm- Sếp: sếp thì ok, vui tính, skill quản lý ok. Không có phân biệt giai cấp nhiều, được học hỏi nhiều từ sếp- Môi trường làm việc: do làm cho Châu Âu nên follow nhiều ISO, phải tuân thủ nhiều quy trình nhưng ae nếu có bôi trơn thì xử lý nhanh hơn. Công ty có nhiều quy định và chính sách bảo mật, bị block và monitor cũng nhiều do follow theo ISO 27001 với comply GDPR- Một số cái khác như OT trả tiền, môi trường ae thân thiện không có chia bè phái, vài các mỗi tháng như sinh nhật, cafe gói, mỳ gói\n          \n      ', 161, '2020-03-11 23:52:29', ''),
(165, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Hôm nay đi phỏng vấn fresher. Chị Thủy phỏng vấn mình cảm thấy khá ân cần và lắng nghe, chịu khó giải thích cho mình. Hai anh phỏng vấn technical cũng dễ gần và dễ nói chuyện. Nói chuyện lương bổng mình cũng cảm thấy khá là dễ chịu và có benefit tốt (mặc dù chưa chốt lương và mình cũng không biết được nhận không hay chỉ dễ chịu ngoài mặt nhưng lại đánh rớt :) Có cái phỏng vấn mình thấy hỏi chưa được nhiều cho lắm (cá nhân mình muốn được hỏi kĩ để đạt tới giới hạn luôn chứ không muốn hỏi dễ). Anw, chúc công ty làm ăn phát đạt.\n          \n      ', 162, '2020-03-11 23:53:54', ''),
(166, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Phỏng vấn không chuyên nghiệp. Không nên làm cty này.\n          \n      ', 163, '2020-03-12 00:00:34', ''),
(167, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              IT Manager đã xàm, th cha Tech Lead còn xàm lông hơn.Công việc phục vụ nội bộ, dùng mấy công nghệ cũ, để phục vụ sản xuất thôi mà cứ ảo tưởng mình là đỉnh cao của vũ trụ. Chắc do nằm trong khu công nghệ cao nên ảo tưởng sức mạnh, dù là công ty SX.Lúc pv thì đến khổ, làm bài test tới lui, hỏi ba cái câu vớ vẩn, làm bài test lý thuyết thì lựa bài test chán vcl. Nói chung anh em dev, ba nên né công ty này ra\n          \n      ', 164, '2020-03-12 00:01:24', ''),
(168, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Từng phỏng vấn ở đây khi còn là sinh viên. Lúc ấy hỗ trợ 300k/tháng. Nhờ tạch nên giờ mình đang làm ở 1 công ty nước ngoài với mức lương gấp gần 100 lần ngày ấy hahahaha\n          \n      ', 165, '2020-03-12 00:02:01', ''),
(169, 'Ẩn Danh', 'Dev', 3, 'Có ai làm ở công ty này chưa cho em ít review', 166, '2020-03-12 00:10:10', ''),
(170, 'Ẩn Danh', 'dev cũ', 1, 'công ty chú trọng bộ phận hành chính hơn kỹ thuật, nói chung công ty việt nam thì khỏi nói, next cho lẹ, lương bèo bọt', 166, '2020-03-12 00:12:18', ''),
(171, 'Ẩn Danh', 'Mới pv', 1, 'Mình vừa phỏng vấn ở cty này và tổng hợp 1 chút ý kiến bản thân về cty.\r\n1. HR làm việc rề rà, ko chuyên nghiệp.\r\n2. Phản hồi thông tin ko rõ ràng, mập mờ.', 165, '2020-03-12 09:10:28', ''),
(172, 'Ẩn Danh', 'Dev', 3, 'Công ty dạo này càng lúc càng tệ. Đứa làm được bắt ở cày như trâu, mấy đứa tào lao thì cho đi onsite. Bực nhất là bọn IS, mạng mùng thì chậm, đã vậy chặn từa lưa, fb chặn thì cũng đành, đây nhạc của tui với youtube nó cũng chặn. Muốn mở nhạc nghe giảm stress cũng méo được.\r\nKhuyên ae là không nên vào', 165, '2020-03-12 09:11:06', ''),
(173, 'Ẩn Danh', 'nhân viên quèn', 4, 'môi trường làm việc năng động, có áp lực nhưng tốt cho nhân viên, cơ hội thăng tiến có, tuy nhiên phải có khả năng giao tiếp tiếng anh tốt mới tự tin làm việc và phát triển.\r\n', 136, '2020-03-12 09:53:50', ''),
(174, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Văn phòng ngột ngạt khó chịu nhất là mùa hè. có vẻ nhiều ông/bà khen manager quá nhỉ, tui thấy cũng bình thường. không hài lòng về lương. đồng ý 1 vấn đề đây không phải là môi trường để học hỏi và có thể nâng cao trình độ\n          \n      ', 167, '2020-03-12 09:55:33', ''),
(175, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Dev nào 1 năm exp pv công ty này chưa, họ hỏi khó không? Lương lậu thế nào vậy ? Nay đi pv run quá ^^\n          \n      ', 168, '2020-03-12 09:56:14', ''),
(176, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Thấy đăng trên IT việc 2k5 có thật không vậy\n          \n      ', 169, '2020-03-12 09:56:28', ''),
(177, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Ai cho facebook chị phượng manager cho mình xin với hè\n          \n      ', 170, '2020-03-12 09:56:36', ''),
(178, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              - lương: cao đẳng hình như 6tr, đại học 6,5tr (lâu rồi nên cũng không rõ, mà 80% mình nhớ đúng)- văn phòng công ty mới khá đẹp, mấy anh giữ xe vui tính, môi trường hơi nhạt nhẽo (mình thấy vậy)- thực tập không lương, mà vào cũng không hướng dẫn gì để làm khoá luận bla gì đâu- công việc đơn giản, không áp lựcPhù hợp với sinh viên mới ra trường.\n          \n      ', 171, '2020-03-12 09:58:52', ''),
(179, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Lương cơ bản 3 củ áp doanh số 40tr. Nghe thì easy nhưng mà 80% nhóm ko đạt doanh số. Nghe thì bảo là kém nhưng data toàn đểu. Cũng có một số ng lương được 10-13tr nhưng cần quen biết bên marketing. Nói chung vào để học telesale thì được. Nói chung công ty thân thiện. Vui vẻ hòa đồng. Mỗi tội data như loz. Còn bị bên khác ăn cắp thông tin khách hàng. Dính mấy đơn như vậy cay vlz\n          \n      ', 172, '2020-03-12 10:08:54', ''),
(180, 'Ông bán nước gầm cầu', 'bán nước', 1, 'Tui nghe nói vui nên tui tham gia chứ tui thấy công ty này góp phần cho quán tui giàu lên lắm á mấy chú mấy cô.\r\n\r\nSáng ra là ế xíu, tới trưa mấy người đó ra ăn cơm xong ngồi đánh bài tới 2h mấy đi lên. Ai lầy thì ngồi tiếp làm ván cờ. Xong 4h xuống cafe tiếp tới 6h xách đít về, tháng tháng lấy lương, thích ghê á', 47, '2020-03-12 10:46:27', ''),
(181, 'J', 'Dev', 1, 'Công ty cùi. Ko có gì để học hỏi nhé các bạn. OT sấp mặt. Tech ko có gì ko đủ trình. Ko ai giỏi tech. Phỏng vấn bậy bạ...', 104, '2020-03-12 15:01:47', ''),
(182, 'dEv', 'Dev', 1, 'Nghe thằng bạn chia sẻ công ty này cũng giống bạn dưới kia chia sẻ vậy. Cớ chi Phạt vé là mất tiền. Mất tiền là suy nghĩ phạt tiền đó má. Chắc vậy ? Mà thấy vậy nên thiết nghĩ cty ko nên làm vậy làm chi. Cãi cọ phạt vé hay ko. Mất lòng xích mích. Theo ý kiến cá nhân. Thân\r\n', 104, '2020-03-12 15:02:07', ''),
(183, 'dev', 'Dev', 1, 'Công ty start-up. Làm việc trâu bò. OT ko có tiền. OT thí mẹ từ 8h tới 9 tối, 10h tối có luôn. Mà đéo có gì để ăn cũng méo thưởng gì. Công ty có thằng dev Lead tên Toàn tên tiếng anh nó là Tony gì đó hãm tài VL. Dev mà fix sai một cái gì hay hỏi nó lại nó phạt tiền cho nhớ (Con mẹ nó). Có mấy dev làm chung ức chế vl mà đéo có thằng nào dám nói. Cái bản mặt thằng đó cũng nham hiểm lúc nào cũng hậm hực như ai ăn hết của cha ông nội nó dẫy. Cty đó có 1 PM con gái méo biết Tech chỉ biết chém gió này nọ hùa theo với thằng DEV. Công ty thì nó thuê ở chỗ Circo Working Space: Có 1 phòng ah như 1 cái nhà trọ. Tù túng, trật hẹp. Lương thì chuyển chậm ko đúng hẹn.\r\nHeyza thật sự KO NÊN VÀO LÀM CÁC BẠN AH', 104, '2020-03-12 15:02:29', ''),
(184, 'Ẩn Danh', 'Dev', 5, 'Teamscal khuyến khích mỗi nhân viên phát triển hết tiềm năng của bản thân, mình tìm thấy cơ hội học được rất nhiều thứ ở đây. Mọi người ở đây đều rất hòa đồng và sẵn sàng chia sẻ kinh nghiệm với nhau để tất cả có thể hoàn thành tốt công việc của mình.\r\nCơ chế quản lý công việc ban đầu hơi phức tạp, mình phải làm quen với những công cụ khá mới mẻ để theo dõi tiến độ dự án và cảm thấy hơi mất thời gian. Tuy nhiên, bạn sẽ không cảm thấy quá khó chịu nếu bạn biết nhìn nhận sự việc dưới góc độ của người quản lý.', 104, '2020-03-12 15:02:54', ''),
(185, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Cho em hỏi công ty có yêu cầu tiếng Anh phải cao mới được vào làm k ạ\n          \n      ', 173, '2020-03-12 15:04:49', ''),
(186, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Xin vào intern học việc vị trí nhân sự nhưng được \"đặc cách\" cho làm Trợ lý CEO, tự biết thân phận sinh viên quèn làm gì đủ khả năng làm \"thư ký\" nói gì đến \"trợ lý\" tuy nhiên cũng đánh giá đây là 1 \"cơ hội\" hiếm có khó tìm. Tuy nhiên, lại yêu cầu thực tập 5 tháng không lương rồi mới trả 1 lần? Trong tình hình kinh tế khó khăn, ngay thời điểm đại dịch corona bất kỳ lúc nào cũng có nguy hiểm bị cách ly, ngưng hoạt động và vì cơm áo gạo tiền sinh viên bèo bọt mà cam kết gắn bó 5 tháng còn Công ty không có cam kết sẽ cho em ở nhờ  đủ 5 tháng. Lỡ tháng tháng 4,9 có vấn đề rồi 1 cục đó cũng khá bự so với tụi em lỡ may Công ty buồn đột xuất không trả thì biết làm sao?Mình cũng suggest nghiên cứu lại phương án tuy nhiên không được :( Không hiểu không hiểu không hiểu...Mặc dù chưa có kinh nghiệm va chạm nhưng thực sự về mô tả công việc, cách thức quy trình tương tác làm việc và KPI mình cũng có tầm sư học đạo rồi nên ... Nói chung là buồn\n          \n      ', 174, '2020-03-12 15:05:32', ''),
(187, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              1 proj bự nuôi sống công ty, nó đóng thì cả cty sập. Vài proj nhỏ làm thời vụ, dev 1 lúc làm vài proj là bình thường, 1 ngày nhảy qua nhảy lại các proj chóng mặtSếp tổng thi bù nhìn, ko có tiếng nói, ko build dc process hay văn hóa gì hết.Cty ai cũng có tiếng nói bự hết, nên ai thix làm gì thì làm, thix thì làm thix thì work at home, tới deadline thì cắm đầu OT rồi xong nghe client chửi, ép tasks cho mấy sprint sau, hậu quả thôiNghỉ chắc 1/3 cty roi\n          \n      ', 175, '2020-03-12 15:06:21', ''),
(188, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Thôi ai có ý định vào thì nên cân nhâc.Cty này lời hứa chỉ để nói thôi, thực hiện thì chả biết khi nào. muốn nhân viên tận lực thì trước tiên hãy tôn trọng nhân tí đi :)\n          \n      ', 176, '2020-03-12 15:06:30', ''),
(189, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Leader bên này trình độ kém cả junior =))) thế cho nó nhanh \n          \n      ', 177, '2020-03-12 15:06:37', ''),
(190, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Cho mình xin review team dev với ạ\n          \n      ', 178, '2020-03-12 15:06:45', ''),
(191, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Agency Spring vietnam đóng cửa, đổi tên thành Spring production  rồi anh em kkkk. Chỉ có công việc thì ko đổi. 1 ông  KH bự, 1 chục KH nhỏ.-  nhảy vô website của spring thì thấy hoành tráng hơn con gián. Mà bản chất cv có dzay thôi:   Team chỉnh sửa hình ảnh: xài photoshop để cut out, retouch, shadow. Bắt làm ca 7am đến 3 pm , ca còn lại 3pm đến 11pm.  Ca 2  bị cty quên tính tiền giờ ban đêm cao hơn 30%.  Thôi  tặng cty  , để cty có tiền mua sữa tươi cho uống.      Team chỉnh sửa màu sắc: chỉ xài photoshop, lightroom,.. để chỉnh sửa màu sắc. Vd: cái xe hơi màu vàng  thì mã màu phải vô cùng chính xác của màu vàng nào, đại loại vậy đó.      Team dàn trang: có 1 nhóm chuyên dàn trang cho quyển nội thất. Team này thì may mắn chưa làm  ca nè. Nhưng tương lai  ca là ko tránh nổi nha. Ko làm ca, làm sao người ta tiết kiệm tiền máy móc, tiền ot  để tăng lời.  Vô đây chỉ xài indesign thôi, mấy cái tốn tiền ở trường như illustrator, after effect, .... là được trùm mền  cho mốc meo. Kiếm được job  freelance dàn trang thì sống tiếp. Cái team còn lại tên creative  sáng tạo, mà thực tế cũng là dàn trang mấy cuốn tạp chí. Team này xui xẻo làm ca rồi nha.  Bà sếp rất khó chịu,xét nét từng cv, từng giờ, từng lý do nghỉ việc, nghỉ bệnh. Team này có đám anh chị không nói được TV  làm sướng trần đời. Rõ ràng là tụi nó làm cv ra chất lượng thấp hơn, khi nó sai, team VN chỉ lỗi hoài. Vậy mà  vì ko nói được Vietnamese nên cái gì có hình bác cũng gấp 4-9 lần mình. Ngày nghỉ cũng gấp rưỡi kkk. Sao mình giả bộ ko nói được Vietnamese thì được warning  kkk. Vô team Chỉnh sửa , là  quên việc  dám nhảy ra luôn. Vì 3 năm sau, em thành ông già so với lớp hiện tại, vì em chỉ chuyên photoshop.Vô 2 team sau, thì phải tự upgrade Englsih, kiếm cơ hội làm print proof, versioning.... thì mới nhảy qua Gameloft, hay mấy cty  khác được. 1 đứa giỏi English cày layout  versioning ở đây 3 năm nhảy ra được gấp đôi, trong khi tiếp tục ở lại chỉ được thêm 30%.  Dzay  tui học hỏi dzay kkk\n          \n      ', 179, '2020-03-12 15:06:58', ''),
(192, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Mọi người cho xin review về vị trí tư vấn tài chính được không ạ?\n          \n      ', 180, '2020-03-12 15:07:05', ''),
(193, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Good Good!!!\n          \n      ', 181, '2020-03-12 15:07:18', ''),
(194, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              -  Anh em bảo: làm 10  năm  được cái bằng khen và cái quà 2.2 t .  Chắc lấy từ cái tăng lương của tui hàng năm gửi ngân hàng, rồi mua đồ phát lại cho 10 năm cống hiến của tui.  Anh em nào  mà 10 năm cho biết ý kiến nha.  Trưởng kế toán bảo nhỏ hr quyết định. Đứa biết chuyện thì bảo : nhỏ hr muốn quà xịn, mà trưởng kế toán kiêm chủ tịch cđ  (cánh tay giữ tiền đắc lực cho anh bự) ko ủng hộ, nhỏ hr íu xìu nín luôn. Thôi túm lại, cty làm tròn chi phí quà tặng và cái bằng thành cục 2.2 t, quy thành tiền cho thực tế cuộc sống được hông kkk. Tui cmt cty tốt đv nhan vien  10 năm trên các trang cho. Chứ phát quà, xong rồi nghe bảo bán lại có vài trăm k, mất giá 10 năm wa  huhuhu-  hồi trước, nhân viên của năm được 1 chai. Đem về nộp vợ cũng đươc 5 bữa cơm có thịt bò úc :) .  Giờ nhân viên của tháng được cho 2 cái vé xem film và được cho mượn 1 cái lon coca sơn vàng chóe (nhìn cái lon vàng cho đỡ thèm tăng lương nha bà con)-   team kia cày ot  do đứa pm hay gì đó vô trách nhiệm thì được  lên facebook khen nức nở, được cty order đồ ăn. Còn team tui cày ot chạy deadline theo yêu cầu, thì  \"tự lo nha em\".\n          \n      ', 182, '2020-03-12 15:07:35', ''),
(195, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              http://mysite.ru\n          \n      ', 183, '2020-03-12 15:07:49', ''),
(196, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Công ty chế độ cơ bản ổn. Giờ đi làm thoải mái, môi trường trẻ, vui vẻ, không có gì phải lo bon chen.Các sếp bên Tổng toàn hứa lèo tăng lương xong mất hút. Lương bên đội Production thì thấp, khó lên được cao. Ít hoạt động vui chơi, lễ tết không quà cáp gì cho nhân viên cả. Bạn nào mới đi làm thì có thể vào làm 1-2 năm lấy tiếng và quy trình sau đi không nên tiếc.\n          \n      ', 184, '2020-03-12 15:08:27', ''),
(197, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Review gì sặc mùi tự nâng bi. Cười ỉa :-j\n          \n      ', 185, '2020-03-12 15:08:33', ''),
(198, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Bạn nào có kinh nghiệm về môi trường làm việc ở đây thì chia sẻ cho mọi người với nhé.Mình cũng đang tìm hiểu nhưng thông tin ít quá\n          \n      ', 186, '2020-03-12 15:08:40', ''),
(199, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Có ai phỏng vấn ở đây chưa, mất thời gian, chỉ để đó khi cần thì liên lạc, hài vl=))\n          \n      ', 187, '2020-03-12 15:08:55', ''),
(200, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Tao chưa đi phỏng vấn chỗ nào mà lễ tâm mặt lạnh như tiền như ở đây, trả lời thì cộc lốc. Công ty có vẻ nhỏ. Đến phỏng vấn thì chờ lâu nhưng chị HR cũng ra xin lỗi các thứ nên bỏ qua. Đang chờ kết quả phỏng vấn xem sao\n          \n      ', 188, '2020-03-12 15:09:01', ''),
(201, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Làm ở công ty này, thì thực sự là rất rất OK. Bất kể bạn làm ở bộ phận nào thì công việc cũng như nhau thôi. Không có sự phân biệt về công việc là điều đầu tiên mình thích ở công ty này. Bạn làm Coder thì không chỉ được code không đâu, bạn còn được tham gia vào các công việc của Tester, HR. Cụ thể hơn, bạn là Coder, OK, công việc code được đặt lên hàng đầu. Thế nhưng, có những lúc bạn cũng được vinh hạnh và ưu ái tham gia vào các công việc của Tester, nghe sướng chưa. Đôi lúc, còn kiêm luôn cả bộ phận HR, tìm CV, lọc CV. Lại có người được sếp ưu ái ban cho cái công việc tính tiền cơm nhân viên, công việc teambuilding,...nghe là thấy thích thú và đầy tính học hỏi rồi. Đó là bộ phận Dev, hay gọi nôm na là \"Coder\". Thế còn bộ phận khác thì sao ? OK, mình sẽ review về bộ phận Administration (Mình xin gọi tắt là Admin). \"Administration\" thực chất là một tên gọi khác của \"con ở\". Là một Admin của công ty, bạn phải cực kỳ tự hào, vì ở cái đất nước cong cong hình chữ S này, thì không có con ở nào có đủ tư cách và tầm vóc để sánh vai ngang hàng với bạn đâu. Bởi vì sao bạn biết không ? Vì lúc này bạn đã là \"con ở cao cấp cực kỳ sang chảnh\". Nghe giới thiệu là thấy hoành tráng rồi phải không ? Vậy vị trí này thì \"cân\" những công việc gì mà lại \"cực kỳ sang chảnh\" như thế ? Tìm CV, lọc CV, liên lạc ứng viên, cập nhật tin tuyển dụng, quản lý văn phòng phẩm, quản lý những cái abcdxyz lặt vặt khác, lấy báo cho sếp, mua đồ cúng khai trương, quét nhà, lau nhà, giúp sếp thư giãn bằng việc nghe chửi mỗi ngày,...nói tới đây, các bạn thấy hào hứng nôn nao trong lòng chưa ? Chưa hết đâu, khi sếp \"thư giãn\" thì bạn đừng nên khóc, vì nếu bạn khóc thì sếp sẽ tưởng bạn tỏ thái độ, sẽ bị đánh giá xấu đấy (đây là lời khuyên thật), các bạn cứ mỉm cười nhìn sếp âu yếm đi, vài ba hôm nữa là bạn sẽ bị sếp chửi tiếp thôi, đéo thay đổi được gì đâu. Cái thứ hai mình thích ở công ty này là mọi người đều rất \"yêu\" công việc. Điển hình là việc nghỉ phép, được cho nghỉ phép nhưng ai cũng nghỉ có 4h đồng hồ, vì quá yêu công ty và công việc nên không muốn nghỉ nữa. Mà kể cũng lạ, các công ty khác nghỉ phép đều tính ngày, chỉ có công ty này là tính giờ. Đây cũng là một điểm \"ghi điểm\" của công ty này so với các công ty khác. Đặc biệt hơn nữa, không ai thèm lấy phép để nghỉ dài ngày. Vì có lấy thì cũng có cho méo đâu, năn nỉ chỉ tổ mệt thân. Nói túm lại, thì công ty này rất OK, khuyên các bạn đừng nên vào làm. Một công ty tốt như vậy, cực kỳ xứng đáng nhận duoc9745 rate 1* từ mình\n          \n      ', 189, '2020-03-12 15:09:08', ''),
(202, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Bác nào cho em xin ít review về lương lủng, chế độ ở đây với ạ?\n          \n      ', 190, '2020-03-12 15:09:26', ''),
(203, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              CTV mà lương net đã trên chục triệu rồi. Thấy khá okie.\n          \n      ', 191, '2020-03-12 15:09:37', ''),
(204, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Các bạn cho mình hỏi : phỏng vấn ở công ty thì như thế nào ạ\n          \n      ', 192, '2020-03-12 15:09:50', ''),
(205, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Công ty được cấu thành bởi 3 người,nhân viên nom khá trẻ, chuyên về testing là chính. Dự án cũng bấp bênh, đa phần là dự án về BPO cho nên lương nhân viên cũng không cao\n          \n      ', 193, '2020-03-12 15:10:03', ''),
(206, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Cty 3s Đà Nẵng vừa giải thể, anh em mất việc trong một đêm, trong khi Hà Nội vẫn thấy tuyển đều, mọi người cân nhắc ko lại ăn quả bánh vẽ to đùng\n          \n      ', 194, '2020-03-12 15:10:15', ''),
(207, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Công ty quá ngon\n          \n      ', 195, '2020-03-12 15:10:26', ''),
(208, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Môi trường làm việc tuyệt vời\n          \n      ', 196, '2020-03-12 15:10:54', ''),
(209, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Cty mới, văn phòng nhỏ, nhưng được cái vui, văn hóa đang xây dựng khá tốt. Mấy bác sếp - nhầm, lead - support với code vãi chưởng (lần đầu thấy lead debug sốc). Nhưng buồn cái có việc gia đình phải bỏ về quê, còn làm ở đây chắc chắn lên trình (chỉ cần xách dép theo hóng lead). Cũng muốn cảm ơn mấy bác mấy tuần chỉ dạy, xin lỗi các bác vì không theo được. \n          \n      ', 197, '2020-03-12 15:11:11', ''),
(210, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Con mặp địch mặt mụn tên phượngRecruiter như bìu. Hẹn pv thì cho đợi 45 ph, vào nói chuyện technical thì ra vẻ ta đây biết tuốt.\n      ', 198, '2020-03-12 15:11:22', ''),
(211, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              không hợp đồng lao động, có BHYT,BHXH mức sàn, có lương tháng 13. Lương bổng thấp hơn mức mặt bằng chung, company trip 2 lần / năm.\n          \n      ', 199, '2020-03-12 15:11:35', ''),
(212, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Hyosung chemical hiện tại vẫn chưa có chuyến xe đưa đón a e đi làm ca từ sg đến cty nhé, ca ngày 8h sáng - 8h tối. Và ca đêm 8h tối - 8h sáng. Đề nghị thông tin tuyển dụng rõ ràng, vì trong hợp đồng lao động ghi phần phương tiện đi lại: tự túc. A e có đi có muốn nhận việc xem kĩ. Nói luôn là lương tăng hàng năm rất bèo, 200k thôi nhé. \n          \n      ', 200, '2020-03-12 15:11:48', ''),
(213, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              toàn chém gió về công nghiệp,tuyển toàn siêu nhân về gánh tạ,ai có ý định vào suy nghĩ kỹ nhé\n      ', 201, '2020-03-12 15:12:24', ''),
(214, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Hôm qua đi phỏng vấn vị trí  fresher android với công ty này, phần logic toán cảm thấy dễ, còn phần thuật toán trả lời dc 8/10, tôi offer 600$ liệu có đỗ dc không các bác? rate 5* lấy hy vọng comeback thôi :(((\n          \n      ', 202, '2020-03-12 18:55:45', ''),
(215, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              Chạy tụt quần mà vẫn không đủ doanh số, ba hồi này ba hồi nọ. Đặt mục tiêu cao quá!\n          \n      ', 203, '2020-03-12 19:03:03', ''),
(216, 'Ẩn danh', 'Dev', 3, '\n  \n          \n              HR kg chuyên nghiệp, dịch nguyên xi từ tiếng Hoa sang âm Hán Việt, dịch như cái máy chứ kg có tí động não nào, cứ nhắn tin điện thoại léo nhéo thay vì email mời phỏng vấn hoàn chỉnh, mặt thì như đưa đám. Chị gái HR Manager còn hài hước hơn, phát tờ giấy kêu kê khai lương + benefit công ty cũ. Cái này confidential của ngta mà ~Dù vậy thấy dàn sếp TQ có vẻ ok, điềm đạm nhã nhặn và open mindset, kg có vớ vẩn như đám người VN.\n          \n      ', 204, '2020-03-12 19:04:20', ''),
(217, 'Ẩn Danh', 'Dev', 4, '- Thu nhập tốt, có lương và thưởng cuối năm\r\n- Du xuân đầu năm, du lịch vacation hàng năm.\r\n- Hỗ trợ support máy tính nếu sử dụng máy tính cá nhân.\r\n- Chủ động đăng ký thời gian làm việc.\r\n- Môi trường thoải mái, năng động, có nhiều cơ hội làm việc và học hỏi, cơ hội tiếp xúc với nhiều công nghệ mời.\r\n- Dễ hòa đồng và mọi người sống tình cảm\r\n- Sếp cực kỳ tâm lý\r\n- Chế độ phúc lợi công ty tốt.\r\n- Sử dụng miễn phí đồ dùng sinh hoạt, cf, nước uống,...\r\n- Công việc đều đặn, không phải OT nhiều.\r\n- Chế độ OT đãi ngộ tốt, bao gồm cả lương và bonus timesheet\r\n\r\n- Đăng ký giờ giấc thoải mái nên nhiều khi đi làm muộn :(((', 110, '2020-03-12 22:02:57', ''),
(218, 'Ẩn Danh', 'Dev', 4, 'Môi trường làm việc thoải mái => tinh thần thoải mái => làm việc hiệu quả. Hoạt động thể thao tích cực, ăn uống tại công ty. Làm việc ở đây thật sự giống như làm việc tại gia đình của mình, mọi người luôn giúp đỡ và chỉ bảo tận tình.', 110, '2020-03-12 22:04:18', ''),
(219, 'hi', 'Fresher', 4, 'Cho em hỏi hiện ai đăng kì cuối đại học, có nộp vị trí Fresher bên Embeded nhưng được liên hệ là làm Intern do không có bằng. Vậy em nên phỏng vấn không ạ?\r\n', 46, '2020-03-13 08:38:09', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(0, 'viettxt@gmail.com', '9ffe76c47d51bbe9faee835b9b04ddba');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `congty`
--
ALTER TABLE `congty`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `congty`
--
ALTER TABLE `congty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
