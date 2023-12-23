-- phpMyAdmin SQL Dump
-- version 4041
-- http://wwwphpmyadminnet
--
-- Host: 127001
-- Generation Time: Oct 31, 2014 at 05:45 PM
-- Server version: 5611
-- PHP Version: 553

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bandienthoai`
--
CREATE DATABASE IF NOT EXISTS `bandienthoai` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bandienthoai`;

-- --------------------------------------------------------
CREATE TABLE `KHACHHANG` (
  `MAKH` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `HOTEN` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DCHI` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SODT` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MATKHAU` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;
--
-- Dumping data for table `KHACHHANG`
--

INSERT INTO `KHACHHANG` (`MAKH`, `HOTEN`,`SODT`, `DCHI`,`EMAIL`,`MATKHAU` ) VALUES
('1', 'Nguyen Van A', '08823451', '731, Tran Hung Dao, Q 5, Tp HCM', 'anguyen@gmailcom' ,'anguyen'),
('2', 'Tran Ngoc Han', '0908256478', '23/5, Nguyen Trai, Q 5, Tp HCM',  'ngochan@gmaicom', 'ngochan');

--
-- Table structure for table `binhluan`
--

CREATE TABLE IF NOT EXISTS `binhluan` (
  `Mabinhluan` int(11) NOT NULL AUTO_INCREMENT,
  `Mathanhvien` int(11) NOT NULL,
  `Masanpham` int(11) NOT NULL,
  `Noidung` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Mabinhluan`),
  KEY `Mathanhvien` (`Mathanhvien`),
  KEY `Masanpham` (`Masanpham`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `binhluan`
--
INSERT INTO `binhluan` (`Mabinhluan`, `Mathanhvien`, `Masanpham`, `Noidung`) VALUES
(27, 4, 12, 'Sản phẩm này còn hàng không?'),
(28, 2, 11, 'Hao pin quá đi'),
(29, 3, 15, 'Có dán sẵn miếng cường lực không?');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iddonhang` int(11) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT '1',
  `gia` decimal(55,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `iddonhang` (`iddonhang`),
  KEY `idsanpham` (`idsanpham`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `iddonhang`, `idsanpham`, `soluong`, `gia`) VALUES
(25, 26, 12, 1, '4000000'),
(26, 26, 15, 1, '4000000'),
(27, 26, 11, 1, '4400000'),
(32, 28, 18, 1, '4000000'),
(34, 30, 12, 1, '5900000'),
(45, 33, 13, 1, '8000000'),
(46, 33, 15, 1, '4500000'),
(58, 40, 12, 1, '5900000'),
(59, 41, 11, 1, '4400000'),
(60, 41, 12, 1, '5900000'),
(61, 42, 11, 1, '4400000');

-- --------------------------------------------------------

--
-- Table structure for table `chitietphukien`
--

CREATE TABLE IF NOT EXISTS `chitietphukien` (
  `Mahang` int(11) NOT NULL AUTO_INCREMENT,
  `Tenphukien` varchar(255) NOT NULL,
  `Maphukien` varchar(50) NOT NULL,
  `Mota` longtext NOT NULL,
  `Baohanh` varchar(50) NOT NULL,
  `Tinhtrang` varchar(50) NOT NULL,
  `Trangthai` varchar(50) NOT NULL,
  `Hinhanh` varchar(255) NOT NULL,
  `Gia` varchar(100) NOT NULL,
  `Gia_Discount` decimal(55,0) ,
  `Soluong` int(11) NOT NULL,
  PRIMARY KEY (`Mahang`),
  KEY `Maphukien` (`Maphukien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;
DROP TABLE CHITIETPHUKIEN;
--
-- Dumping data for table `chitietphukien`

INSERT INTO `chitietphukien` (`Mahang`, `Tenphukien`, `Maphukien`, `Mota`, `Baohanh`, `Tinhtrang`, `Trangthai`, `Hinhanh`, `Gia`,`Gia_Discount``Soluong`) VALUES
(1, 'Ốp lưng Galaxy Z Fold5 Nhựa cứng Samsung Linh hoạt', 'PK02', '<p><span>Chất liệu nhựa cứng khá chắc chắn, hạn chế nứt vỡ hay trầy xước</span><span>&nbsp;Thiết kế trong suốt, kiểu dáng tối giản</span></p>', '3 tháng', 'Mới 100%', 'Còn hàng', 'op-lung-galaxy-z-fold5-nhua-cung-samsung-linh-hoat-trong-5jpg', '960000','960000','100'),
(2, 'Ốp lưng Galaxy S23 FE Nhựa cứng PC Samsung Linh hoạt', 'PK02', '<p><span>CTích hợp nhẫn đỡ ốp lưng</span></p>\r\n<p><strong>Ốp lưng</strong><span>&nbsp;Được làm từ nhựa cứng bền bỉ, giúp bảo vệ điện thoại 1 cách tối ưu&nbsp;Hạn chế bám bụi, dấu vân tay, giữ cho Galaxy S23 FE của người dùng luôn mới&amp;</span></p>', '3 tháng', 'Mới 100%', 'Còn hàng', 'op-lung-galaxy-s23-fe-nhua-cung-pc-samsung-linh-hoat-trong-1jpg', '800000','800000','100'),
(3, 'Ốp lưng Galaxy M54 5G Nhựa cứng viền dẻo Pure II JM', 'PK02', '', '3 tháng', 'Mới 100%', 'Còn hàng', 'op-lung-galaxy-m54-5g-nhua-cung-vien-deo-pure-ii-jm-1jpg', '200000','200000','100'),
(4, 'Ốp lưng Galaxy S23 FE Silicone Samsung', 'PK02', '', '3 tháng', 'Mới 100%', 'Còn hàng', 'op-lung-galaxy-s23-fe-silicone-samsung-xanh-mint-1jpg', '700000','700000','100'),
(5, 'Bao da Galaxy S23 FE Samsung Thông minh', 'PK02', '', '3 tháng', 'Mới 100%', 'Còn hàng', 'bao-da-galaxy-s23-fe-samsung-thong-minh-trang-1jpg', '1000000','1000000','100'),
(6, 'Tai nghe Có Dây Mozard DS510-WB', 'PK01', '', '6 tháng', 'Mới 100%', 'Còn hàng', 'tai-nghe-ep-mozard-ds510-wb-xanh-up-1-orgjpg', '75000','75000','100'),
(7, 'Tai nghe Bluetooth True Wireless Samsung Galaxy Buds 2 R177N', 'PK01', '', '6 tháng', 'Mới 100%', 'Còn hàng', 'samsung-galaxy-buds-2-r177n-trang-1jpg', '2990000','2990000','100'),
(8, 'Tai nghe Có Dây Samsung IA500', 'PK01', '', '6 tháng', 'Mới 100%', 'Còn hàng', 'tai-nghe-bluetooth-true-wireless-galaxy-buds2-pro-den-1jpg', '300000','280000','100'),
(9, 'Tai nghe Bluetooth True Wireless Samsung Galaxy Buds 2 Pro R510N', 'PK01', '', '6 tháng', 'Mới 100%', 'Còn hàng', 'tai-nghe-bluetooth-true-wireless-galaxy-buds2-pro-den-1jpg', '4990000','3490000','100'),
(10, 'Củ sạc Samsung USB-C 25W 1 cổng', 'PK03', '', '6 tháng', 'Mới 100%', 'Còn hàng', 'group_205_2jpg', '499000','250000','100'),
(11, 'Củ sạc Samsung Type-C 45W kèm cáp C-C 5A 18M T4510', 'PK04', '', '6 tháng', 'Mới 100%', 'Còn hàng', 'group_205_2jpg', '11490000','950000','100'),
(12, 'Củ sạc Samsung 2 cổng 35W EP-TA210', 'PK03', '', '6 tháng', 'Mới 100%', 'Còn hàng', 'group_121_2jpg', 'Giá liên hệ','','100'),
(13, 'Củ sạc nhanh Samsung 25W không kèm cáp (EP-T2510NBEGWW)', 'PK03', '', '6 tháng', 'Mới 100%', 'Còn hàng', 'cu-sac-nhanh-samsung-25w-ep-t2510nbegww-1jpg', '550000','440000','150'),
(14, 'Đế sạc nhanh không dây Samsung Galaxy S6 Edge Plus', 'PK03', '', '6 tháng', 'Mới 100%', 'Còn hàng', 'big_de-sac-khong-day-samsung-galaxy-s6-edge-plus-chinh-hangjpg', '950000','','100');

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE IF NOT EXISTS `chitietsanpham` (
  `Mota` longtext NOT NULL,
  `Masanpham` int(11) NOT NULL AUTO_INCREMENT,
  `Madong` varchar(25) NOT NULL,
  `Tensp` varchar(55) NOT NULL,
  `Manhinh` varchar(55) NOT NULL,
  `RomRam` varchar(55) NOT NULL,
  `chipset` varchar(55) NOT NULL,
  `Gia` decimal(55,0) NOT NULL,
  `Kichthuoc` varchar(55) NOT NULL,
  `Trongluong` varchar(55) NOT NULL,
  `Camera` varchar(55) NOT NULL,
  `DungLuong` varchar(55) NOT NULL,
  `Pin` varchar(55) NOT NULL,
  `Hinhanh` varchar(100) NOT NULL,
  `Baohanh` varchar(55) NOT NULL,
  `Trangthai` varchar(55) NOT NULL,
  `Tinhtrang` varchar(10) NOT NULL,
  `Gia_Discount` decimal(55,0) NOT NULL,
   `Soluong` int(11) NOT NULL,
  PRIMARY KEY (`Masanpham`),
  KEY `Madong` (`Madong`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`Mota`, `Masanpham`, `Madong`, `Tensp`, `Manhinh`, `RomRam`, `chipset`, `Gia`, `Kichthuoc`, `Trongluong`, `Camera`, `DungLuong`, `Pin`, `Hinhanh`, `Baohanh`, `Trangthai`,`Tinhtrang`,`Gia_Discount`,`Soluong`) VALUES
('', 2, 'SS1', 'Điện thoại Samsung Galaxy Z Flip4 5G 512GB ','67 inches','8 GB','Snapdragon 8+ Gen 1 8 nhân','29490000','Height 1652 mm; Width 719 mm','187g','2 camera 12 MP','64 GB','3700 mAh','https://cdn.tgdd.vn/Products/Images/42/258047/samsung-galaxy-flip4-glr-tim-1.jpg','6 tháng', 'Mới 100%', 'Còn hàng','15490000','150'),
('Kiểu dáng gập mở tinh tế tạo nên sự khác biệt', 3, 'SS02', 'Điện thoại Samsung Galaxy Z Fold4 5G 256GB ', 'Chính 76" & Phụ 62"', '12 GB', 'Snapdragon 8+ Gen 1 8 nhân', '26000000', 'Height 1551 mm; Width 1301 mm;', '263g', 'Chính 50 MP & Phụ 12 MP, 10 MP', '256 GB', '4400 mAh', 'fold4218.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','22990000','150'),
('Kiểu dáng gập mở tinh tế tạo nên sự khác biệt', 4, 'SS02', 'Điện thoại Samsung Galaxy Z Fold4 5G 516GB ', 'Dynamic AMOLED 2XChính 76" & Phụ 62"Quad HD+ (2K+)', '12 GB', 'Snapdragon 8+ Gen 1 8 nhân', '44490000', 'Height 1551 mm; Width 1301 mm;', '263g', 'Chính 50 MP & Phụ 12 MP, 10 MP', '516 GB', '4400 mAh', 'fold4_518.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','24990000','150'),
('', 5, 'SS3', 'Điện thoại Samsung Galaxy A24 6GB', 'Super AMOLED', '6 GB', 'Mediatek MT8781 Helio G99 (6nm)', '6490000', 'Height 1551 mm; Width 1301 mm;', '263g', 'Camera macro: 2 MP, f/24', '128 GB', '5000 mAh', 'a24.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','5890000','150'),
('', 6, 'SS3', 'Điện thoại Samsung Galaxy A24 8GB', 'Super AMOLED', '8 GB', 'Mediatek MT8781 Helio G99 (6nm)', '6990000', 'Height 1551 mm; Width 1301 mm;', '263g', 'Camera macro: 2 MP, f/24', '128 GB', '5000 mAh', 'a24.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','6390000','150'),
('', 7, 'SS4', 'Điện thoại Samsung Galaxy A04s', 'PLS LCD', '4 GB', 'Exynos 850 8 nhân', '3990000', 'Height 1551 mm; Width 1301 mm;', '263g', '5 MP, f/2', '64 GB', '5000 mAh', 'samsung-galaxy-a04s_1.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','3190000'),
('', 8, 'SS5', 'Điện thoại Samsung Galaxy A54 5G 256GB', 'Super AMOLED64"Full HD+', '8 GB', 'Exynos 850 8 nhân', '11490000', 'Height 1551 mm; Width 1301 mm;', '263g', '5 MP, f/2', '256 GB', '5000 mAh', 'vi-vn-samsung-galaxy-a54-5g-slider--(7).jpg', '6 tháng', 'Mới 100%', 'Còn hàng','9990000','150'),
('', 9, 'SS5', 'Điện thoại Samsung Galaxy A54 5G 218GB', 'Super AMOLED64"Full HD+', '8 GB', 'Exynos 850 8 nhân', '10490000', 'Height 1551 mm; Width 1301 mm;', '263g', '5 MP, f/2', '218 GB', '5000 mAh', 'vi-vn-samsung-galaxy-a54-5g-slider--(7).jpg', '6 tháng', 'Mới 100%', 'Còn hàng','9490000','150'),
('', 10, 'SS6', 'Điện thoại Samsung Galaxy A34 5G 256GB', 'Super AMOLED', '8GB', 'Exynos 850 8 nhân', '9490000', 'Height 1551 mm; Width 1301 mm;', '199g', '480 MP + 80 MP + 50 MP', '256 GB', '5000 mAh', 'vn-feature-simple-and-sleek-535764976.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','7990000','150'),
('', 11, 'SS6', 'Điện thoại Samsung Galaxy A34 5G 128GB', 'Super AMOLED', '8GB', 'Exynos 850 8 nhân', '8490000', 'Height 1551 mm; Width 1301 mm;', '199g', '480 MP + 80 MP + 50 MP', '128 GB', '5000 mAh', 'vn-feature-simple-and-sleek-535764976.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','7490000','150'),
('', 12, 'SS7', 'Điện thoại Samsung Galaxy A14 5G ', 'PLS LCD66"Full HD+', '4 GB', 'MediaTek Dimensity 7', '5190000', 'Height 1551 mm; Width 1301 mm;', '263g', 'Chính 50 MP & Phụ 5 MP, 2 MP', '128 GB', '5000 mAh', 'samsung-galaxy-a14-5g-tong-quan-6-1020x570.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','4490000','150'),
('', 13, 'SS7', 'Điện thoại Samsung Galaxy A14 6GB', 'PLS LCD66"Full HD+', '6 GB', 'MediaTek Dimensity 7', '4990000', 'Height 1551 mm; Width 1301 mm;', '263g', 'Chính 50 MP & Phụ 5 MP, 2 MP', '128 GB', '5000 mAh', 'samsung-galaxy-a14-5g-tong-quan-6-1020x570.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','4390000','150'),
('', 14, 'SS7', 'Điện thoại Samsung Galaxy A14 4GB', 'IPS LCD', '4 GB', 'Exynos 850 8 nhân', '4490000', 'Height 1551 mm; Width 1301 mm;', '263g', 'Chính 50 MP & Phụ 5 MP, 2 MP', '128 GB', '5000 mAh', 'samsung-galaxy-a14-5g-tong-quan-6-1020x570.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','3690000','150'),
('', 15, 'SS8', 'Điện thoại Samsung Galaxy A04 (4GB/64GB)', 'PLS LCD', '4 GB', 'Exynos 850 8 nhân', '2990000', 'Height 1551 mm; Width 1301 mm;', '192g', 'Chính 50 MP & Phụ 2 MP', '32 GB', '5000 mAh', 'samsung-galaxy-a04-thumb-1020x570-2.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','2590000','150'),
('', 16, 'SS8', 'Điện thoại Samsung Galaxy A04 (3GB/32GB)', 'IPS LCD65"HD+', '3 GB', 'MediaTek Helio P35', '3490000', 'Height 1551 mm; Width 1301 mm;', '192g', '500 MP + 20 MP', '64 GB', '5000 mAh', 'vn-feature-minimal-look--quality-design-533743735.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','3090000','150'),
('', 17, 'SS9', 'Điện thoại Samsung Galaxy S21 FE 5G (6GB/128GB)', 'Dynamic AMOLED 2X', '6 GB', 'Exynos 2100 (5nm)', '12990000', 'Height 1551 mm; Width 1301 mm;', '263g', '32 MP, f/22', '128 GB', '5000 mAh', 'sm-g990_s21fe_backfront_zw_7.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','9990000','150'),
('', 18, 'SS9', 'Điện thoại Samsung Galaxy S21 FE 5G (8GB/256GB)', 'Dynamic AMOLED 2X', '8 GB', 'Exynos 2100 (5nm)', '18990000', 'Height 1551 mm; Width 1301 mm;', '263g', '32 MP, f/22', '256 GB', '5000 mAh', 'sm-g990_s21fe_backfront_zw_7.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','11990000','150'),
('', 19, 'SS10', 'Điện thoại Samsung Galaxy S23 Ultra 5G 256GB', 'Dynamic AMOLED 2X68"Quad HD+ (2K+)', '8 GB', 'Snapdragon 8 Gen 2 for Galaxy', '31990000', 'Height 1551 mm; Width 1301 mm;', '263g', 'Chính 200 MP & Phụ 12 MP, 10 MP, 10 MP', '256 GB', '5000 mAh', 'samsung-galaxy-s23-ultra-thumb-1020x570.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','23990000','150'),
('', 20, 'SS10', 'Điện thoại Samsung Galaxy S23 Ultra 5G 512GB', 'Dynamic AMOLED 2X68"Quad HD+ (2K+)', '8 GB', 'Snapdragon 8 Gen 2 for Galaxy', '36990000', 'Height 1551 mm; Width 1301 mm;', '263g', 'Chính 200 MP & Phụ 12 MP, 10 MP, 10 MP', '512 GB', '5000 mAh', 'samsung-galaxy-s23-ultra-thumb-1020x570.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','29990000','150'),
('', 21, 'SS10', 'Điện thoại Samsung Galaxy S23 5G Ultra 1TB', 'Dynamic AMOLED 2X68"Quad HD+ (2K+)', '8 GB', 'Snapdragon 8 Gen 2 for Galaxy', '44990000', 'Height 1551 mm; Width 1301 mm;', '263g', 'Chính 200 MP & Phụ 12 MP, 10 MP, 10 MP', '1T', '5000 mAh', 'samsung-galaxy-s23-ultra-thumb-1020x570.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','35990000','150'),
('', 22, 'SS11', 'Điện thoại Samsung Galaxy S23 5G 512GB', 'Dynamic AMOLED 2X61"Full HD+', '8 GB', 'Snapdragon 8 Gen 2 for Galaxy', '29990000', 'Height 1551 mm; Width 1301 mm;', '263g', 'Chính 50 MP & Phụ 12 MP, 10 MP', '512 GB', '5000 mAh', 'samsung-galaxy-s23-5g-thumb-yt-1020x570.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','22990000','150'),
('', 23, 'SS11', 'Điện thoại Samsung Galaxy S23 5G 256GB', 'Dynamic AMOLED 2X61"Full HD+', '8 GB', 'Snapdragon 8 Gen 2 for Galaxy', '26990000', 'Height 1551 mm; Width 1301 mm;', '263g', 'Chính 50 MP & Phụ 12 MP, 10 MP', '256 GB', '5000 mAh', 'samsung-galaxy-s23-5g-thumb-yt-1020x570.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','19990000','150'),
('', 24, 'SS11', 'Điện thoại Samsung Galaxy S23 5G 128GB', 'Dynamic AMOLED 2X61"Full HD+', '8 GB', 'Snapdragon 8 Gen 2 for Galaxy', '22990000', 'Height 1551 mm; Width 1301 mm;', '263g', 'Chính 50 MP & Phụ 12 MP, 10 MP', '128 GB', '5000 mAh', 'samsung-galaxy-s23-5g-thumb-yt-1020x570.jpg', '6 tháng', 'Mới 100%', 'Còn hàng','16990000','150');
--
-- Table structure for table `donhang`
--

CREATE TABLE IF NOT EXISTS `donhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idthanhvien` int(11) NOT NULL,
  `ngaydat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fullname` (`idthanhvien`),
  KEY `idthanhvien` (`idthanhvien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `idthanhvien`, `ngaydat`) VALUES
(26, 2, '2023-10-29 15:58:04'),
(28, 3, '2023-10-29 16:09:09'),
(29, 5, '2023-10-30 08:31:12'),
(30, 2, '2023-10-30 08:42:37'),
(31, 2, '2023-10-30 10:26:54'),
(32, 4, '2023-10-30 11:44:55'),
(33, 4, '2023-10-31 13:06:55'),
(34, 3, '2023-10-31 13:26:54'),
(35, 5, '2023-10-31 15:56:22'),
(36, 2, '2023-10-31 15:57:45'),
(37, 3, '2023-10-31 16:02:33'),
(38, 3, '2023-10-31 16:05:01'),
(39, 4, '2023-10-31 16:08:15'),
(40, 5, '2023-10-31 16:10:05'),
(41, 4, '2023-10-31 16:12:39'),
(42, 5, '2023-10-31 16:25:50');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE IF NOT EXISTS `lienhe` (
  `Malienhe` int(11) NOT NULL AUTO_INCREMENT,
  `Hoten` varchar(55) NOT NULL,
  `Tieude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Diachi` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(55) NOT NULL,
  `SDT` int(25) NOT NULL,
  `Noidung` varchar(999) NOT NULL,
  PRIMARY KEY (`Malienhe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`Malienhe`, `Hoten`, `Tieude`, `Diachi`, `Email`, `SDT`, `Noidung`) VALUES
(2, 'Nguyễn Văn A', 'VN - Giao hàng  ', 'Bắc Ninh', 'anguyen0392@gmailcom', 08823451, 'Sao bao lâu thì có hàng ?');

-- --------------------------------------------------------

--
-- Table structure for table `loaiphukien`
--

CREATE TABLE IF NOT EXISTS `loaiphukien` (
  `Maphukien` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Loaiphukien` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Maphukien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loaiphukien`
--

INSERT INTO `loaiphukien` (`Maphukien`, `Loaiphukien`) VALUES
('PK01', 'Tai nghe'),
('PK02', 'Bao da, Case'),
('PK03', 'Cáp sạc');

-- --------------------------------------------------------

--
-- Table structure for table `nhanxet`
--

CREATE TABLE IF NOT EXISTS `nhanxet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsanpham` int(11) NOT NULL,
  `idthanhvien` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idsanpham` (`idsanpham`,`idthanhvien`),
  KEY `idthanhvien` (`idthanhvien`),
  KEY `idsanpham_2` (`idsanpham`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nhanxet`

INSERT INTO `nhanxet` (`id`, `idsanpham`, `idthanhvien`, `tieude`, `noidung`) VALUES
(1, 14, 3, 'Sản phẩm tuyệt vời!', 'Mình mới mua chiếc điện thoại iPhone 14 và mình rất hài lòng với sản phẩm này Chiếc điện thoại có thiết kế đẹp, cấu hình mạnh mẽ và camera tuyệt vời Mình rất thích chụp ảnh và quay video bằng chiếc điện thoại này Mình đánh giá sản phẩm 5 sao!');

-- --------------------------------------------------------

--
-- Table structure for table `quangcao`
--

/*CREATE TABLE IF NOT EXISTS `quangcao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diachi` varchar(255) NOT NULL,
  `ngaydang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hinhanh` varchar(255) NOT NULL,
  `loai` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `quangcao`
--

INSERT INTO `quangcao` (`id`, `diachi`, `ngaydang`, `hinhanh`, `loai`) VALUES
(4, 'daudenvn', '2014-10-29 17:21:13', 'quangcao/20141029062113d2yWK2wpng', 'left'),
(5, 'quang3gvn', '2014-10-29 17:22:19', 'quangcao/20141029062517r2_b2_playbook_journey_bannerjpg', 'right'),
(6, 'bbvietcom1', '2014-10-29 17:25:41', 'quangcao/20141030102837Blackberry Boldpng', 'left'),
(7, 'daudenvn', '2014-10-29 17:26:19', 'quangcao/20141029062619BBPassportjpg', 'Slide'),
(8, 'daudenvn', '2014-10-29 17:27:26', 'quangcao/20141029062726BBQ10jpg', 'Slide'),
(9, 'quang3gvn', '2014-10-29 17:27:46', 'quangcao/20141029062746BBZ30jpg', 'Slide'),
(11, 'wwwquang3gvn', '2014-10-30 09:22:09', 'quangcao/20141030102209d2yWK2wpng', 'right'),
(12, 'wwwÄ‘auenvn', '2014-10-30 09:22:46', 'quangcao/20141030102246r2_b2_playbook_journey_bannerjpg', 'right');
*/
-- --------------------------------------------------------

--
-- Table structure for table `quantri`
--

CREATE TABLE IF NOT EXISTS `quantri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Tendangnhap` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Matkhau` varchar(255) CHARACTER SET utf8 NOT NULL,
  `hoten` varchar(55) CHARACTER SET utf8 NOT NULL,
  `email` varchar(55) NOT NULL,
  `dchi` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ngsinh` date NOT NULL,
  `sdt` varchar(25) NOT NULL,
  `Quyen` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `quantri`
--

INSERT INTO `quantri` (`id`, `Tendangnhap`, `Matkhau`, `hoten`, `email`, `dchi`, `ngsinh`, `sdt`, `Quyen`) VALUES
(1, 'admin', 'web', 'Administrator', 'admin@gmailcom', 'TPHCM', '2000-10-19', '0987654322', '1');


-- --------------------------------------------------------

--
-- Table structure for table `tbldongsanpham`
--

CREATE TABLE IF NOT EXISTS `tbldongsanpham` (
  `Madong` varchar(25) CHARACTER SET utf8 NOT NULL,
  `Tendong` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`Madong`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldongsanpham`
-- sưa

INSERT INTO `tbldongsanpham` (`Madong`, `Tendong`) VALUES
('SS1', 'Điện thoại Samsung Galaxy Z Flip4'),
('SS2', 'Điện thoại Samsung Galaxy Z Fold4 '),
('SS3', 'Điện thoại Samsung Galaxy A24'),
('SS4', 'Điện thoại Samsung Galaxy A04s'),
('SS5', 'Điện thoại Samsung Galaxy A54'),
('SS6', 'Điện thoại Samsung Galaxy A34'),
('SS7', 'Điện thoại Samsung Galaxy A14'),
('SS8', 'Điện thoại Samsung Galaxy A04'),
('SS9', 'Điện thoại Samsung Galaxy S21 FE'),
('SS10', 'Điện thoại Samsung Galaxy S23 Ultra'),
('SS11', 'Điện thoại Samsung Galaxy S23');


-- --------------------------------------------------------

--
-- Table structure for table `tbltintuc`
--

CREATE TABLE IF NOT EXISTS `tbltintuc` (
  `MaTinTuc` int(11) NOT NULL AUTO_INCREMENT,
  `TieuDe` longtext CHARACTER SET utf8,
  `TomTat` longtext CHARACTER SET utf8,
  `NoiDung` longtext CHARACTER SET utf8,
  `NgayDangTin` date DEFAULT NULL,
  `TacGia` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `HinhAnh` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`MaTinTuc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbltintuc`
-- sua

INSERT INTO `tbltintuc` (`MaTinTuc`, `TieuDe`, `TomTat`, `NoiDung`, `NgayDangTin`, `TacGia`) VALUES
(1, 'Apple ra mắt iPhone 14 Pro Max với thiết kế mới, camera khủng', 'Apple vừa chính thức ra mắt dòng iPhone 14 mới, bao gồm iPhone 14, iPhone 14 Max, iPhone 14 Pro và iPhone 14 Pro Max Trong đó, iPhone 14 Pro Max là phiên bản cao cấp nhất của dòng sản phẩm này', 'iPhone 14 Pro Max có thiết kế hoàn toàn mới, với phần notch được thu gọn lại thành hình viên thuốc Chiếc điện thoại cũng được trang bị hệ thống camera sau 48 MP, mạnh mẽ nhất trong các dòng iPhone', '2023-09-14', 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

/*CREATE TABLE IF NOT EXISTS `thanhvien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Tendangnhap` varchar(25) NOT NULL,
  `Matkhau` varchar(25) NOT NULL,
  `fullname` varchar(55) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Diachi` varchar(255) NOT NULL,
  `Ngaysinh` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Tendangnhap` (`Tendangnhap`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `Tendangnhap`, `Matkhau`, `fullname`, `Email`, `Diachi`, `Ngaysinh`) VALUEs
(2, 'nga', 'utghol', 'Nguyễn Thị Kim Nga', 'nga@gmailcom', 'Gia Lai', '2003-07-27'),
(3, 'nhuy', 'utghol', 'Chiếng Mành Như Ý', 'nhuy@gmailcom', 'TPHCM', '2003-10-06'),
(4, 'kim', 'utghol', 'Võ Lê Hoàng Kim', 'kim@gmailcom', 'Khánh Hòa', '2003-03-13'),
(5, 'quyen', 'utghol', 'Vưu Mỹ Quyên', 'quyen@gmailcom', 'Tiền Giang', '2003-09-19');
*/
-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_spbanchay`
--
CREATE TABLE IF NOT EXISTS `vw_spbanchay` (
`idsanpham` int(11)
,`Tensp` varchar(55)
,`Hinhanh` varchar(100)
,`gia` decimal(55,0)
,`SL` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `ww_thanhtien`
--
CREATE TABLE IF NOT EXISTS `ww_thanhtien` (
`iddonhang` int(11)
,`Tongtien` decimal(65,0)
);
-- --------------------------------------------------------

--
-- Structure for view `vw_spbanchay`
--
DROP TABLE IF EXISTS `vw_spbanchay`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_spbanchay` AS select `chitietdonhang`.`idsanpham` AS `idsanpham`,`chitietsanpham`.`Tensp` AS `Tensp`,`chitietsanpham`.`Hinhanh` AS `Hinhanh`,`chitietdonhang`.`gia` AS `gia`,count(`chitietdonhang`.`idsanpham`) AS `SL` from (`chitietdonhang` join `chitietsanpham`) where (`chitietdonhang`.`idsanpham` = `chitietsanpham`.`Masanpham`) group by `chitietdonhang`.`idsanpham`;

-- --------------------------------------------------------

--
-- Structure for view `ww_thanhtien`
--
DROP TABLE IF EXISTS `ww_thanhtien`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost`
 SQL SECURITY DEFINER VIEW `ww_thanhtien` AS 
 select `chitietdonhang`.`iddonhang` AS `iddonhang`,sum((`chitietdonhang`.`soluong` * `chitietdonhang`.`gia`)) AS `Tongtien` 
from `chitietdonhang` 
group by `chitietdonhang`.`iddonhang`;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`Masanpham`) REFERENCES `chitietsanpham` (`Masanpham`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sfsfsf` FOREIGN KEY (`Mathanhvien`) REFERENCES `thanhvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`iddonhang`) REFERENCES `donhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`idsanpham`) REFERENCES `chitietsanpham` (`Masanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietphukien`
--
ALTER TABLE `chitietphukien`
  ADD CONSTRAINT `chitietphukien_ibfk_1` FOREIGN KEY (`Maphukien`) REFERENCES `loaiphukien` (`Maphukien`);

--
-- Constraints for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD CONSTRAINT `chitietsanpham_ibfk_1` FOREIGN KEY (`Madong`) REFERENCES `tbldongsanpham` (`Madong`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idthanhvien`) REFERENCES `thanhvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nhanxet`
--
ALTER TABLE `nhanxet`
  ADD CONSTRAINT `nhanxet_ibfk_1` FOREIGN KEY (`idsanpham`) REFERENCES `chitietsanpham` (`Masanpham`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nhanxet_ibfk_2` FOREIGN KEY (`idthanhvien`) REFERENCES `thanhvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
