-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2022 lúc 04:46 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Nam'),
(2, 'Phụ Nữ'),
(3, 'Trẻ Em'),
(4, 'Sản Phẩm Khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `subject_name` varchar(350) DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `firstname`, `lastname`, `email`, `phone_number`, `subject_name`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nguyen', 'Hoang Long', 'long1@gmail.com', '1', 'chu de 1', 'noi dung 1', 1, '2022-12-04 17:46:03', '2022-12-04 12:37:50'),
(2, 'Tran', 'Van Hoang', 'Hoang1@gmail.com', '2', 'chu de 2', 'noi dung 2', 1, '2022-12-04 17:46:03', '2022-12-04 12:46:53'),
(3, '', '', 'Thi@gmail.com', '', 'Hard', '', 0, '2022-12-09 18:01:37', '2022-12-09 18:01:37'),
(4, '', '', 'Thi@gmail.com', '', 'Hard', '', 0, '2022-12-09 18:02:41', '2022-12-09 18:02:41'),
(5, 'Nguyen', '', 'Thi@gmail.com', '', 'Hard', '', 0, '2022-12-09 18:02:54', '2022-12-09 18:02:54'),
(6, 'Nguyen', 'Thi', 'Thi@gmail.com', '', 'Hard', '', 0, '2022-12-09 18:03:23', '2022-12-09 18:03:23'),
(7, 'Hoang', 'Quy', 'quy@gmail.com', '', 'Chu de', '', 0, '2022-12-09 18:03:44', '2022-12-09 18:03:44'),
(8, 'Hoang', 'Quy', 'quy@gmail.com', '', 'Chu de', '', 0, '2022-12-09 18:04:44', '2022-12-09 18:04:44'),
(9, 'Ly', 'Ly', 'ly@gmail.com', '0987', 'ly la ai', 'ai la Ly', 0, '2022-12-09 18:05:09', '2022-12-09 18:05:09'),
(10, 'Ly', 'Ly', 'ly@gmail.com', '0987', 'ly la ai', 'ai la Ly', 0, '2022-12-09 18:06:35', '2022-12-09 18:06:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fullname`, `email`, `phone_number`, `address`, `note`, `order_date`, `status`, `total_money`) VALUES
(1, 5, 'Nguyen Hoang Long', 'long@gmail.com', '01234567', 'Thu Duc - Ho chi Minh', 'Ghi chu', '2022-12-06 15:13:28', 2, 2),
(2, 7, 'Nguyen XuanX', 'x@gmail.com', '0987654321', 'Ha Noi', 'Ghi chu ne', '2022-12-05 15:14:19', 1, 3),
(4, 5, '1', '1', '1', '1', '1', '2022-12-10 09:14:12', 1, 17),
(5, 5, 'Nguyen Van Khanh', '13213312@hihihi.com', '', '123', '123', '2022-12-10 09:18:14', 1, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `price`, `num`, `total_money`) VALUES
(1, 1, 2, 1, 1, 1),
(2, 1, 1, 1, 1, 1),
(3, 2, 2, 1, 1, 1),
(4, 2, 1, 1, 1, 1),
(5, 4, 1, 1, 7, 7),
(6, 4, 11, 5, 2, 10),
(7, 5, 11, 5, 1, 5),
(8, 5, 9, 1, 1, 1),
(9, 5, 12, 4, 1, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `price`, `discount`, `thumbnail`, `description`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 1, 'Quần Nam', 1, 1, 'assets/photos/testda2.jpg', '<h2 style=\"color: rgb(35, 31, 32); font-size: 24px; font-family: Pangea, sans-serif; text-align: center;\"><span style=\"font-weight: bolder;\">Áo Polo nam Pique Cotton USA thấm hút tối đa (trơn)</span></h2><p style=\"color: rgb(35, 31, 32); font-family: Pangea, sans-serif; font-size: 16px;\">Với những chiếc&nbsp;<a href=\"https://www.coolmate.me/collection/ao-nam\" target=\"_blank\" rel=\"noopener\" style=\"text-decoration-line: underline; color: rgb(47, 90, 207); transition: all 0.2s ease 0s;\">áo nam&nbsp;</a>cực kì basic và đẹp đẽ thì hôm nay Coolmate giới thiệu đến bạn chiếc&nbsp;<a title=\"áo phông có cổ nam\" href=\"https://www.coolmate.me/collection/ao-polo-nam\" target=\"_blank\" rel=\"noopener\" style=\"text-decoration-line: underline; color: rgb(47, 90, 207); transition: all 0.2s ease 0s;\">áo phông có cổ nam</a>&nbsp;đảm bảo sự thanh lịch mã vẫn đảm bảo được sự vừa vặn và thoải mái, mang lại cho chúng ta những bộ đồ thật trẻ trung và khỏe khoắn</p><h3 style=\"color: rgb(35, 31, 32); font-size: 20.5px; font-family: Pangea, sans-serif;\"><span style=\"font-weight: bolder;\">Đặc điểm nổi bật Áo Polo nam Pique Cotton USA thấm hút tối đa</span></h3><blockquote style=\"color: rgb(35, 31, 32); font-family: Pangea, sans-serif; font-size: 16px;\"><p>Tại&nbsp;<a href=\"https://www.coolmate.me/\" target=\"_blank\" rel=\"noopener\" style=\"text-decoration-line: underline; color: rgb(47, 90, 207); transition: all 0.2s ease 0s;\">Coolmate</a>, chúng tôi cải thiện sản phẩm mỗi ngày để đem đến chiếc áo tốt nhất đến bạn.</p><p>Với sản phẩm áo phông polo nam lần này, Coolmate tự tin mang đến cho khách hàng những sản phẩm không chỉ được đầu tư về chất liệu mà còn tỉ mỉ trong từng đường kim, mũi chỉ để cho ra những chiếc áo polo nam chất lượng đúng nghĩa nhất.</p></blockquote><p style=\"color: rgb(35, 31, 32); font-family: Pangea, sans-serif; font-size: 16px;\"><img src=\"https://mcdn.coolmate.me/image/July2022/mceclip0_41.jpg\" style=\"max-width: 100%; height: auto; text-indent: 100%; color: transparent; white-space: nowrap; overflow: hidden; image-rendering: -webkit-optimize-contrast;\"></p><h3 style=\"color: rgb(35, 31, 32); font-size: 20.5px; font-family: Pangea, sans-serif;\"><span style=\"font-weight: bolder;\">Chất liệu Áo Polo nam Pique Cotton USA thấm hút tối đa&nbsp;</span></h3><blockquote style=\"color: rgb(35, 31, 32); font-family: Pangea, sans-serif; font-size: 16px;\"><p>Với collection này thì nhà Coolmate mang đến một chiếc áo phông có cổ với chất liệu 97% Cotton USA chất lượng cao&nbsp;</p><p>Ngoài ra, đây còn là chiếc áo thun nam polo có cổ với chất liệu co giãn 4 chiều, bởi kết hợp với những thành phần vải kết hợp&nbsp;<a href=\"https://www.coolmate.me/lp/dong-san-pham-excool\" target=\"_blank\" rel=\"noopener\" style=\"text-decoration-line: underline; color: rgb(47, 90, 207); transition: all 0.2s ease 0s;\">Spandex</a>&nbsp;giúp chúng ta có cảm giác thoải mái nhất khi mặc</p><p>Hơn thế nữa, với những tính năng ưu việt của Cotton USA thì chiếc áo polo có cổ nam này còn có tính năng thấm hút, giúp chúng ta luôn cảm thấy mát mẻ và khô thoáng</p></blockquote><p style=\"color: rgb(35, 31, 32); font-family: Pangea, sans-serif; font-size: 16px;\"><img src=\"https://mcdn.coolmate.me/image/August2022/polo_pique_222.jpg\" width=\"1129\" height=\"532\" style=\"max-width: 100%; height: auto; text-indent: 100%; color: transparent; white-space: nowrap; overflow: hidden; image-rendering: -webkit-optimize-contrast;\"></p><h3 style=\"color: rgb(35, 31, 32); font-size: 20.5px; font-family: Pangea, sans-serif;\"><span style=\"font-weight: bolder;\">Kiểu dáng&nbsp;Áo Polo nam Pique Cotton USA thấm hút tối đa&nbsp;</span></h3><blockquote style=\"color: rgb(35, 31, 32); font-family: Pangea, sans-serif; font-size: 16px;\"><p>Với kiểu áo cực kì trẻ trung, chiếc áo polo nam này là một chiếc áo có from áo ôm eo và bó sát người, phù hợp với hầu hết tất cả dáng nam giới Việt. Chiếc áo polo thực sự ổn so với những chiếc áo bạn đang mặc và xứng đang đáng là một chiếc áo thun nam có cổ hàng hiệu, chắc chắn đây sẽ là chiếc áo đưa \"sự thoải mái\" lên hàng đầu</p></blockquote><h3 style=\"color: rgb(35, 31, 32); font-size: 20.5px; font-family: Pangea, sans-serif;\"><span style=\"font-weight: bolder;\">Cách mix đồ với Áo Polo nam Pique Cotton USA thấm hút tối đa&nbsp;</span></h3><blockquote style=\"color: rgb(35, 31, 32); font-family: Pangea, sans-serif; font-size: 16px;\"><p>Chúng ta thường luôn phải suy nghĩ về một&nbsp;<a href=\"https://www.coolmate.me/post/phoi-ao-polo-nam-thoi-trang-sanh-dieu\" target=\"_blank\" rel=\"noopener\" style=\"text-decoration-line: underline; color: rgb(47, 90, 207); transition: all 0.2s ease 0s;\">outfit</a>&nbsp;đơn giản hay phải đắn đo là sẽ không biết mặc áo phông có cổ với gì, vậy thì hãy để Coolmate giúp bạn có một bộ oufit cực kì trẻ trung nhưng toát lên được sự lịch lãm&nbsp;</p><p>Với một chiếc quần jeans được phối cùng một chiếc áo polo nam có cổ sẽ giúp bạn trở lên \"gọn gàng và lịch lãm\" hơn rất nhiều so với một chiếc&nbsp;<a href=\"https://www.coolmate.me/collection/ao-thun-nam\" target=\"_blank\" rel=\"noopener\" style=\"text-decoration-line: underline; color: rgb(47, 90, 207); transition: all 0.2s ease 0s;\">áo thun</a>&nbsp;không cổ bình thường</p><p>Không những thế, vào những ngày hè nóng thay vì phải mặc những chiếc quần dài hay những chiếc&nbsp;<a href=\"https://www.coolmate.me/collection/ao-so-mi-nam\" target=\"_blank\" rel=\"noopener\" style=\"text-decoration-line: underline; color: rgb(47, 90, 207); transition: all 0.2s ease 0s;\">áo sơ mi&nbsp;</a>có chất vải không thấm hút thì việc mix một chiếc quần short với một chiếc áo thun polo nam sẽ là một lựa chọn tuyệt vời&nbsp;<a href=\"https://www.coolmate.me/collection/do-casual\" target=\"_blank\" rel=\"noopener\" style=\"text-decoration-line: underline; color: rgb(47, 90, 207); transition: all 0.2s ease 0s;\">hằng ngày</a>&nbsp;mỗi khi chàng trai bước ra đường</p></blockquote><p style=\"color: rgb(35, 31, 32); font-family: Pangea, sans-serif; font-size: 16px;\">&nbsp;<img src=\"https://mcdn.coolmate.me/image/October2022/mceclip1_25.png\" style=\"max-width: 100%; height: auto; text-indent: 100%; color: transparent; white-space: nowrap; overflow: hidden; image-rendering: -webkit-optimize-contrast;\"></p><h3 dir=\"ltr\" style=\"color: rgb(35, 31, 32); font-size: 20.5px; font-family: Pangea, sans-serif;\"><span style=\"font-weight: bolder;\">Cách bảo quản Áo Polo nam Pique Cotton USA thấm hút tối đa&nbsp;</span></h3><ul style=\"color: rgb(35, 31, 32); font-family: Pangea, sans-serif; font-size: 16px;\"><li dir=\"ltr\">Hạn chế dùng chất tẩy mạnh đối với áo polo và nên giặt bằng tay để đảm bảo độ bền của áo</li><li dir=\"ltr\">Không đổ trực tiếp bột giặt lên bề mặt áo vì nếu tác dụng tẩy mạnh sẽ làm chiếc áo nhanh bạc màu và ảnh hưởng đến chất liệu&nbsp;</li><li dir=\"ltr\">Nên hạn chế ngâm áo polo quá lâu trong bột giặt sẽ làm giảm tuổi thọ của chiếc áo</li><li dir=\"ltr\">Nên giặt bằng nước lạnh hoặc nước ấm (&lt;40 độ C) vì nếu giặt áo ở tình trạng nước quá nóng sẽ gây nên tình trạng áo bị giãn ra và nhanh hỏng hơn. Bạn có thể tham khảo thêm&nbsp;<a title=\"cách giặt áo polo nam\" href=\"https://www.coolmate.me/post/cach-giat-ao-polo-nam\" target=\"_blank\" rel=\"noopener\" style=\"text-decoration-line: underline; color: rgb(47, 90, 207); transition: all 0.2s ease 0s;\">cách giặt áo polo nam</a>.</li></ul><p style=\"color: rgb(35, 31, 32); font-family: Pangea, sans-serif; font-size: 16px;\">Hãy chọn cho mình những chiếc áo Polo phù hợp nhất cho bạn nhé!</p>', '2022-12-02 21:21:34', '2022-12-09 08:39:51', 0),
(2, 1, 'Ao Thun nam test', 1, 1, 'assets/photos/testda2_1.jpg', 'huhu', '2022-12-04 09:37:40', '2022-12-07 03:44:31', 1),
(3, 1, 'Áo Sơ Mi', 3, 1, 'assets/photos/aosomi.jpg', 'Áo PoPo Nam mang phong cách trẻ trung , phù hợp với nhiều lứa tuổi . Chất liệt mát mẻ .', '2022-12-02 21:21:34', '2022-12-08 11:20:53', 0),
(4, 1, 'Ao Thun nam test', 1, 1, 'assets/photos/testda2_1.jpg', 'huhu', '2022-12-04 09:37:40', '2022-12-07 03:44:31', 1),
(5, 1, 'Áo Phông Nam', 4, 1, 'assets/photos/aophongnam.jpg', 'Áo PoPo Nam mang phong cách trẻ trung , phù hợp với nhiều lứa tuổi . Chất liệt mát mẻ .', '2022-12-02 21:21:34', '2022-12-08 11:29:54', 0),
(6, 1, 'Ao Thun nam test', 1, 1, 'assets/photos/testda2_1.jpg', 'huhu', '2022-12-04 09:37:40', '2022-12-07 03:44:31', 1),
(7, 1, 'Quần Ngắn Nam', 1, 1, 'assets/photos/quannam.jpg', 'Áo PoPo Nam mang phong cách trẻ trung , phù hợp với nhiều lứa tuổi . Chất liệt mát mẻ .', '2022-12-02 21:21:34', '2022-12-08 11:05:55', 0),
(8, 1, 'Ao Thun nam test', 1, 1, 'assets/photos/testda2_1.jpg', 'huhu', '2022-12-04 09:37:40', '2022-12-07 03:44:31', 1),
(9, 2, 'Áo Nữ', 2, 1, 'assets/photos/aonuda2.jpg', '<p>khong biet ghi gi</p>', '2022-12-08 11:22:52', '2022-12-08 11:22:52', 0),
(10, 2, 'Quần Dài Nữ', 10, 2, 'assets/photos/quandainu.jpg', '<p>hehe</p>', '2022-12-08 11:16:56', '2022-12-08 11:16:56', 0),
(11, 2, 'Váy Nữ Ngắn', 5, 5, 'assets/photos/vaynu.jpg', '<p>vay nu&nbsp;</p>', '2022-12-08 11:45:56', '2022-12-08 11:45:56', 0),
(12, 2, 'Váy Dài', 8, 4, 'assets/photos/vaydai.jpg', '<p>vay dai cua nu</p>', '2022-12-08 11:16:57', '2022-12-08 11:16:57', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tokens`
--

CREATE TABLE `tokens` (
  `user_id` int(11) NOT NULL,
  `token` varchar(32) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tokens`
--

INSERT INTO `tokens` (`user_id`, `token`, `created_at`) VALUES
(5, '1e349a238470de63cd015d1c99ff2662', '2022-12-04 10:00:45'),
(5, '47aeee301de43d6870365441546c6d82', '2022-12-02 10:14:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `phone_number`, `address`, `password`, `role_id`, `created_at`, `updated_at`, `deleted`) VALUES
(5, 'Nguyen Hoang Long', 'Long@gmail.com', NULL, NULL, '9d81330346e82c9ad1bdea79fc668afd', 2, '2022-12-02 10:13:13', '2022-12-02 10:13:13', 0),
(6, 'Long Hoang', 'Longhoang@gmail.com', '1', '1', '9d81330346e82c9ad1bdea79fc668afd', 1, '2022-12-02 10:15:08', '2022-12-02 10:15:08', 0),
(7, 'Nguyen x', 'x@gmail.com', '123456789', 'ktx', '9d81330346e82c9ad1bdea79fc668afd', 1, '2022-12-04 12:42:36', '2022-12-04 12:42:36', 0),
(8, 'Nguyen Thi Long Lanh', 'Hoang@gmail.com', '09876543', 'Ha Noi', '9d81330346e82c9ad1bdea79fc668afd', 1, '2022-12-07 03:22:51', '2022-12-07 03:43:53', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`user_id`,`token`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `galery`
--
ALTER TABLE `galery`
  ADD CONSTRAINT `galery_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
