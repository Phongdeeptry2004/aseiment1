-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 02:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novel`
--

-- --------------------------------------------------------

--
-- Table structure for table `baocaoloi`
--

CREATE TABLE `baocaoloi` (
  `MaBaoCao` int(11) NOT NULL,
  `MaNguoiDung` int(11) DEFAULT NULL,
  `MaTruyen` int(11) DEFAULT NULL,
  `NoiDungBaoCao` text DEFAULT NULL,
  `ThoiDiemBaoCao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBinhLuan` int(11) NOT NULL,
  `MaNguoiDung` int(11) DEFAULT NULL,
  `MaChuong` int(11) DEFAULT NULL,
  `NoiDungBinhLuan` text DEFAULT NULL,
  `ThoiDiemBinhLuan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chuongtruyen`
--

CREATE TABLE `chuongtruyen` (
  `MaChuong` int(11) NOT NULL,
  `MaTruyen` int(11) DEFAULT NULL,
  `SoChuong` int(11) DEFAULT NULL,
  `TieuDeChuong` varchar(255) DEFAULT NULL,
  `NoiDungChuong` text DEFAULT NULL,
  `ThoiDiemXuatBan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chuongtruyen`
--

INSERT INTO `chuongtruyen` (`MaChuong`, `MaTruyen`, `SoChuong`, `TieuDeChuong`, `NoiDungChuong`, `ThoiDiemXuatBan`) VALUES
(1, 1, 1, 'Nhập Môn Kiếm Sĩ', 'Nội dung chương 1...', '2024-01-19 10:40:43'),
(2, 1, 3, 'Gặp Nhau Định Mệnh', 'Nội dung chương 3', '2024-01-19 10:40:43'),
(3, 1, 4, 'Hành Trình Bắt Đầu', 'Nội dung chương 4', '2024-01-19 10:40:43'),
(4, 1, 2, '[value-4]', 'Nội dung chương 2', '2024-01-22 10:25:59'),

-- --------------------------------------------------------

--
-- Table structure for table `danhmuctruyen`
--

CREATE TABLE `danhmuctruyen` (
  `MaDanhMuc` int(11) NOT NULL,
  `MaTruyen` int(11) NOT NULL,
  `TenDanhMuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuctruyen`
--

INSERT INTO `danhmuctruyen` (`MaDanhMuc`, `MaTruyen`, `TenDanhMuc`) VALUES
(1, 1, 'Action'),
(2, 1, 'Adapted to Anime'),
(3, 1, 'Adapted to Drama CD'),
(4, 1, 'Adapted to Manga'),
(5, 1, 'Adult'),
(6, 1, 'Adventure'),
(7, 1, 'Age Gap'),
(8, 1, 'Boys Love'),
(9, 1, 'Character Growth'),
(10, 1, 'Chinese Novel'),
(11, 1, 'Comedy'),
(12, 1, 'Cooking'),
(13, 1, 'Different Social Status'),
(14, 1, 'Drama'),
(15, 2, 'Ecchi'),
(16, 2, 'English Novel'),
(17, 2, 'Fantasy'),
(18, 2, 'Female Protagonist'),
(19, 2, 'Game'),
(20, 2, 'Gender Bender'),
(21, 2, 'Harem'),
(22, 2, 'Historical'),
(23, 2, 'Horror'),
(24, 2, 'Incest'),
(25, 2, 'Isekai'),
(26, 2, 'Josei'),
(27, 2, 'Korean Novel'),
(28, 2, 'Magic'),
(29, 2, 'Martial Arts'),
(30, 2, 'Mature'),
(31, 2, 'Mecha'),
(32, 2, 'Military'),
(33, 2, 'Misunderstanding'),
(34, 2, 'Mystery'),
(35, 2, 'Netorare'),
(36, 3, 'One shot'),
(37, 3, 'Otome Game'),
(38, 3, 'Parody'),
(39, 3, 'Psychological'),
(40, 3, 'Reverse Harem'),
(41, 3, 'Romance'),
(42, 3, 'School Life'),
(43, 3, 'Science Fiction'),
(44, 3, 'Seinen'),
(45, 3, 'Shoujo'),
(46, 3, 'Shoujo ai'),
(47, 3, 'Shounen'),
(48, 3, 'Shounen ai'),
(49, 3, 'Slice of Life'),
(50, 3, 'Slow Life'),
(51, 3, 'Sports'),
(52, 3, 'Super Power'),
(53, 3, 'Supernatural'),
(54, 3, 'Suspense'),
(55, 3, 'Tragedy'),
(56, 3, 'Wars'),
(57, 3, 'Web Novel'),
(58, 3, 'Workplace'),
(59, 3, 'Yuri');

-- --------------------------------------------------------

--
-- Table structure for table `lichsudoctruyen`
--

CREATE TABLE `lichsudoctruyen` (
  `MaLichSu` int(11) NOT NULL,
  `MaNguoiDung` int(11) DEFAULT NULL,
  `MaTruyen` int(11) DEFAULT NULL,
  `ChapDocGanNhat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lichsudoctruyen`
--

INSERT INTO `lichsudoctruyen` (`MaLichSu`, `MaNguoiDung`, `MaTruyen`, `ChapDocGanNhat`) VALUES
(4, 4, 1, 3),
(6, 4, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaNguoiDung` int(11) NOT NULL,
  `TenDangNhap` varchar(50) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Exp` int(11) DEFAULT 0,
  `Level` int(11) DEFAULT 0,
  `Role` varchar(100) NOT NULL,
  `Avatar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaNguoiDung`, `TenDangNhap`, `MatKhau`, `Email`, `Exp`, `Level`, `Role`, `Avatar`) VALUES
(1, 'User1', 'Password1', 'user1@example.com', 100, 5, 'User', 'path/image1.jpg'),
(4, 'phong1', '123', 'test@gmail.com', 12, 1, 'User', 'avatar/ua63228-16f7674c-8652-403d-b1ac-ff9525773a6c.jpg'),
(36, '124524', '123', '123@gmailc.om', 0, 0, 'user', NULL),
(37, 'phong123', '123123', 'kanata2003232@gmail.com', 0, 0, 'user', NULL),
(38, '4141', 'Ahihi123.', 'kanata2003232@gmail.com', 0, 0, 'user', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `MaTheLoai` int(11) NOT NULL,
  `TenTheLoai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`MaTheLoai`, `TenTheLoai`) VALUES
(1, 'Truyện Dịch'),
(2, 'Convert'),
(3, 'Sáng Tác');

-- --------------------------------------------------------

--
-- Table structure for table `truyen`
--

CREATE TABLE `truyen` (
  `MaTruyen` int(11) NOT NULL,
  `TieuDe` varchar(255) NOT NULL,
  `TacGia` varchar(255) DEFAULT NULL,
  `MaTheLoai` int(11) NOT NULL,
  `MoTa` text DEFAULT NULL,
  `TinhTrangDich` varchar(100) DEFAULT 'Đang Tiến Hành',
  `LuotXem` int(11) DEFAULT 0,
  `LuotThich` int(11) DEFAULT 0,
  `DanhGia` int(11) DEFAULT 0,
  `ThoiDiemTao` timestamp NOT NULL DEFAULT current_timestamp(),
  `img` varchar(255) DEFAULT NULL,
  `MaNguoiDang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `truyen`
--

INSERT INTO `truyen` (`MaTruyen`, `TieuDe`, `TacGia`, `MaTheLoai`, `MoTa`, `TinhTrangDich`, `LuotXem`, `LuotThich`, `DanhGia`, `ThoiDiemTao`, `img`, `MaNguoiDang`) VALUES
(1, 'Story1', 'Author1', 2, 'Description1', 'Đang Tiến Hành', 1000, 500, 4, '2024-02-02 12:38:59', 'path/image1.jpg', 1),
(2, 'ohohohooh', 'Author2', 1, 'Description2', 'Đang Tiến Hành', 800, 300, 5, '2024-02-02 12:38:59', 'path/s14884-b33418e3-89ca-4f59-8c28-421fae46de80-m.jpg', 1),
(3, 'Story3', 'Author3', 1, 'Description3', 'Đang Tiến Hành', 1200, 700, 4, '2024-02-02 12:38:59', 'path/image3.jpg', 1),
(4, 'Story4', 'Author4', 1, 'Description4', 'Đang Tiến Hành', 900, 400, 3, '2024-02-02 12:38:59', 'path/image4.jpg', 1),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baocaoloi`
--
ALTER TABLE `baocaoloi`
  ADD PRIMARY KEY (`MaBaoCao`),
  ADD KEY `MaNguoiDung` (`MaNguoiDung`),
  ADD KEY `MaTruyen` (`MaTruyen`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBinhLuan`),
  ADD KEY `MaNguoiDung` (`MaNguoiDung`),
  ADD KEY `MaChuong` (`MaChuong`);

--
-- Indexes for table `chuongtruyen`
--
ALTER TABLE `chuongtruyen`
  ADD PRIMARY KEY (`MaChuong`),
  ADD KEY `MaTruyen` (`MaTruyen`);

--
-- Indexes for table `danhmuctruyen`
--
ALTER TABLE `danhmuctruyen`
  ADD PRIMARY KEY (`MaDanhMuc`);

--
-- Indexes for table `lichsudoctruyen`
--
ALTER TABLE `lichsudoctruyen`
  ADD PRIMARY KEY (`MaLichSu`),
  ADD KEY `MaNguoiDung` (`MaNguoiDung`),
  ADD KEY `MaTruyen` (`MaTruyen`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaNguoiDung`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`MaTheLoai`);

--
-- Indexes for table `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`MaTruyen`),
  ADD KEY `MaTheLoai` (`MaTheLoai`),
  ADD KEY `MaNguoiDang` (`MaNguoiDang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baocaoloi`
--
ALTER TABLE `baocaoloi`
  MODIFY `MaBaoCao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBinhLuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chuongtruyen`
--
ALTER TABLE `chuongtruyen`
  MODIFY `MaChuong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `danhmuctruyen`
--
ALTER TABLE `danhmuctruyen`
  MODIFY `MaDanhMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `lichsudoctruyen`
--
ALTER TABLE `lichsudoctruyen`
  MODIFY `MaLichSu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaNguoiDung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `MaTheLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `truyen`
--
ALTER TABLE `truyen`
  MODIFY `MaTruyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baocaoloi`
--
ALTER TABLE `baocaoloi`
  ADD CONSTRAINT `baocaoloi_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`),
  ADD CONSTRAINT `baocaoloi_ibfk_2` FOREIGN KEY (`MaTruyen`) REFERENCES `truyen` (`MaTruyen`);

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`MaChuong`) REFERENCES `chuongtruyen` (`MaChuong`);

--
-- Constraints for table `chuongtruyen`
--
ALTER TABLE `chuongtruyen`
  ADD CONSTRAINT `chuongtruyen_ibfk_1` FOREIGN KEY (`MaTruyen`) REFERENCES `truyen` (`MaTruyen`);

--
-- Constraints for table `lichsudoctruyen`
--
ALTER TABLE `lichsudoctruyen`
  ADD CONSTRAINT `lichsudoctruyen_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`),
  ADD CONSTRAINT `lichsudoctruyen_ibfk_2` FOREIGN KEY (`MaTruyen`) REFERENCES `truyen` (`MaTruyen`);

--
-- Constraints for table `truyen`
--
ALTER TABLE `truyen`
  ADD CONSTRAINT `truyen_ibfk_1` FOREIGN KEY (`MaNguoiDang`) REFERENCES `nguoidung` (`MaNguoiDung`),
  ADD CONSTRAINT `truyen_ibfk_2` FOREIGN KEY (`MaTheLoai`) REFERENCES `theloai` (`MaTheLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
