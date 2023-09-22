-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 19, 2023 lúc 07:35 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `example`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `groups` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `gender`, `groups`, `mobile`, `date`) VALUES
(1, 'Lynna Tapping', 'ltapping0@netscape.com', 'Female', 'Russia', 443, '2022-10-07'),
(2, 'Dwain Hardesty', 'dhardesty1@livejournal.com', 'Male', 'Morocco', 811, '2023-05-17'),
(3, 'Kayla Craighead', 'kcraighead2@pbs.org', 'Female', 'Ukraine', 321, '2022-12-26'),
(4, 'Leonanie Geffinger', 'lgeffinger3@last.fm', 'Female', 'Canada', 229, '2022-10-31'),
(5, 'Erastus Sollom', 'esollom4@cdc.gov', 'Male', 'Indonesia', 189, '2023-05-14'),
(6, 'Arden Bernat', 'abernat5@salon.com', 'Female', 'Philippines', 406, '2022-09-19'),
(7, 'Aksel Stoffels', 'astoffels6@hp.com', 'Male', 'Albania', 698, '2023-05-03'),
(8, 'Ronald Pass', 'rpass7@msn.com', 'Male', 'Thailand', 829, '2022-09-20'),
(9, 'Gwendolin Atteridge', 'gatteridge8@eventbrite.com', 'Female', 'Myanmar', 881, '2022-10-20'),
(10, 'Haven Utton', 'hutton9@senate.gov', 'Male', 'Finland', 943, '2023-03-29'),
(11, 'Peyter Demaine', 'pdemainea@nytimes.com', 'Male', 'Honduras', 736, '2023-08-08'),
(12, 'Nat Broady', 'nbroadyb@smugmug.com', 'Male', 'Russia', 233, '2022-11-13'),
(13, 'Perla Pedrazzi', 'ppedrazzic@deviantart.com', 'Female', 'Venezuela', 416, '2022-10-22'),
(14, 'Donna Shobrook', 'dshobrookd@ibm.com', 'Female', 'Philippines', 646, '2022-11-14'),
(15, 'Dougie Bushell', 'dbushelle@mlb.com', 'Male', 'Indonesia', 863, '2022-11-12'),
(16, 'Mac Mannering', 'mmanneringf@deviantart.com', 'Male', 'Poland', 401, '2023-08-17'),
(17, 'Querida Rounsefell', 'qrounsefellg@slashdot.org', 'Female', 'Mauritius', 315, '2023-07-09'),
(18, 'Agnesse Selbach', 'aselbachh@psu.edu', 'Female', 'Cyprus', 174, '2023-05-06'),
(19, 'Heall Mee', 'hmeei@blinklist.com', 'Male', 'Nigeria', 896, '2023-07-30'),
(20, 'Deny Lambeth', 'dlambethj@microsoft.com', 'Female', 'Portugal', 978, '2023-03-03'),
(21, 'Tabina Burrass', 'tburrassk@tumblr.com', 'Female', 'Russia', 320, '2022-11-27'),
(22, 'Fionna Pinkney', 'fpinkneyl@craigslist.org', 'Female', 'China', 411, '2023-07-07'),
(23, 'Anna-diane Konzelmann', 'akonzelmannm@geocities.jp', 'Female', 'Paraguay', 695, '2022-12-17'),
(24, 'Eilis Crosseland', 'ecrosselandn@cbsnews.com', 'Female', 'Poland', 197, '2023-02-27'),
(25, 'Meta Gripton', 'mgriptono@weibo.com', 'Female', 'Malaysia', 776, '2023-05-07'),
(26, 'Cristian Upstell', 'cupstellp@cam.ac.uk', 'Male', 'Russia', 599, '2022-10-04'),
(27, 'Linzy Barltrop', 'lbarltropq@noaa.gov', 'Female', 'Russia', 630, '2023-01-09'),
(28, 'Aldon Atchly', 'aatchlyr@illinois.edu', 'Male', 'Tanzania', 868, '2022-10-17'),
(29, 'Zebedee Van Son', 'zvans@fastcompany.com', 'Male', 'Poland', 656, '2022-10-01'),
(30, 'Ulick Pieche', 'upiechet@qq.com', 'Male', 'Philippines', 516, '2022-11-16'),
(31, 'Cristi Godwyn', 'cgodwynu@sphinn.com', 'Female', 'Finland', 289, '2023-02-08'),
(32, 'Gaylord Alonso', 'galonsov@cbslocal.com', 'Male', 'Jamaica', 355, '2022-12-27'),
(33, 'Zerk Bramhall', 'zbramhallw@reverbnation.com', 'Bigender', 'Guatemala', 345, '2022-11-20'),
(34, 'Graig Bessent', 'gbessentx@php.net', 'Male', 'China', 478, '2022-12-24'),
(35, 'Hanni Wardall', 'hwardally@scribd.com', 'Female', 'China', 591, '2023-07-25'),
(36, 'Selena Bryning', 'sbryningz@sitemeter.com', 'Female', 'Portugal', 822, '2023-08-04'),
(37, 'Leelah Huff', 'lhuff10@imdb.com', 'Female', 'Brazil', 288, '2023-02-06'),
(38, 'Brita Taleworth', 'btaleworth11@latimes.com', 'Female', 'Thailand', 397, '2023-07-29'),
(39, 'Morrie Pakenham', 'mpakenham12@uiuc.edu', 'Male', 'Mexico', 252, '2023-01-01'),
(40, 'Ynez Thwaite', 'ythwaite13@linkedin.com', 'Female', 'Indonesia', 357, '2023-03-14'),
(41, 'Hamlen Castaneda', 'hcastaneda14@cpanel.net', 'Polygender', 'Venezuela', 599, '2023-06-27'),
(42, 'Nissie Dybbe', 'ndybbe15@zimbio.com', 'Female', 'Russia', 691, '2023-05-07'),
(43, 'Alvin Jolin', 'ajolin16@youtu.be', 'Male', 'Indonesia', 405, '2023-08-26'),
(44, 'Jacob Lochet', 'jlochet17@va.gov', 'Male', 'China', 237, '2023-03-19'),
(45, 'Giraud Quittonden', 'gquittonden18@umich.edu', 'Male', 'Poland', 957, '2023-05-14'),
(46, 'Bord Wharf', 'bwharf19@admin.ch', 'Male', 'Portugal', 508, '2023-09-12'),
(47, 'Betteann Selkirk', 'bselkirk1a@narod.ru', 'Female', 'China', 717, '2023-04-09'),
(48, 'Rolando Pentland', 'rpentland1b@devhub.com', 'Male', 'China', 213, '2023-03-06'),
(49, 'Torry Dudden', 'tdudden1c@cnet.com', 'Male', 'Jordan', 647, '2023-07-01'),
(50, 'Morlee Massard', 'mmassard1d@bloomberg.com', 'Male', 'Indonesia', 725, '2023-01-04'),
(51, 'Karleen Benezet', 'kbenezet1e@loc.gov', 'Female', 'Peru', 860, '2022-10-07'),
(52, 'Korella Wilbud', 'kwilbud1f@dailymotion.com', 'Female', 'Sweden', 287, '2023-08-16'),
(53, 'Husain Sunock', 'hsunock1g@elpais.com', 'Male', 'Canada', 749, '2023-07-17'),
(54, 'Ely Paulon', 'epaulon1h@psu.edu', 'Genderqueer', 'Thailand', 205, '2023-01-03'),
(55, 'Ansell Brotheridge', 'abrotheridge1i@umich.edu', 'Male', 'Belarus', 296, '2023-06-18'),
(56, 'Berkley Kunze', 'bkunze1j@studiopress.com', 'Male', 'China', 643, '2022-12-30'),
(57, 'Lorrayne Bendon', 'lbendon1k@webeden.co.uk', 'Female', 'Ukraine', 433, '2022-10-02'),
(58, 'Veronica Zum Felde', 'vzum1l@springer.com', 'Female', 'Ecuador', 629, '2023-02-20'),
(59, 'Lindsay Dunbavin', 'ldunbavin1m@ed.gov', 'Bigender', 'China', 908, '2022-10-03'),
(60, 'Giffie Patton', 'gpatton1n@360.cn', 'Male', 'Vietnam', 409, '2023-07-04'),
(61, 'Worth Meltetal', 'wmeltetal1o@sfgate.com', 'Male', 'France', 417, '2023-06-07'),
(62, 'Karlik Bearman', 'kbearman1p@yahoo.com', 'Male', 'South Africa', 818, '2023-05-16'),
(63, 'Welsh Enevoldsen', 'wenevoldsen1q@youku.com', 'Non-binary', 'China', 201, '2022-10-13'),
(64, 'Orelle Haskey', 'ohaskey1r@kickstarter.com', 'Female', 'China', 718, '2023-03-24'),
(65, 'Somerset Strathern', 'sstrathern1s@free.fr', 'Male', 'Nigeria', 263, '2022-10-21'),
(66, 'Koenraad Lomond', 'klomond1t@ebay.co.uk', 'Polygender', 'China', 634, '2023-05-10'),
(67, 'Hodge Weaver', 'hweaver1u@trellian.com', 'Male', 'Philippines', 786, '2022-11-03'),
(68, 'Erica Vakhlov', 'evakhlov1v@flavors.me', 'Female', 'Russia', 442, '2023-01-12'),
(69, 'Madonna Mahony', 'mmahony1w@tmall.com', 'Female', 'France', 704, '2023-04-11'),
(70, 'Derby Blenkiron', 'dblenkiron1x@diigo.com', 'Male', 'Peru', 678, '2022-12-16'),
(71, 'Derward Breheny', 'dbreheny1y@weibo.com', 'Non-binary', 'Indonesia', 575, '2023-06-13'),
(72, 'Amby Lightman', 'alightman1z@freewebs.com', 'Male', 'China', 272, '2023-08-29'),
(73, 'Curtis Hapgood', 'chapgood20@wp.com', 'Male', 'Thailand', 411, '2023-03-05'),
(74, 'Odo Broadfield', 'obroadfield21@aol.com', 'Male', 'China', 611, '2022-12-10'),
(75, 'Fields Peasey', 'fpeasey22@symantec.com', 'Male', 'Palestinian Territory', 245, '2023-08-14'),
(76, 'Marissa Feldman', 'mfeldman23@pbs.org', 'Female', 'Haiti', 444, '2022-11-25'),
(77, 'Wilmer Forlonge', 'wforlonge24@yandex.ru', 'Male', 'Argentina', 257, '2023-03-01'),
(78, 'Alric Malenoir', 'amalenoir25@ucsd.edu', 'Male', 'China', 725, '2023-01-03'),
(79, 'Cross Leverentz', 'cleverentz26@tiny.cc', 'Genderfluid', 'South Sudan', 434, '2023-07-21'),
(80, 'Raviv MacFarlane', 'rmacfarlane27@icq.com', 'Male', 'Russia', 786, '2023-03-10'),
(81, 'Gonzalo Luety', 'gluety28@etsy.com', 'Genderqueer', 'Morocco', 165, '2023-01-20'),
(82, 'Klaus Sans', 'ksans29@google.pl', 'Male', 'Mexico', 514, '2023-03-31'),
(83, 'Melinde Dawney', 'mdawney2a@marriott.com', 'Female', 'Panama', 811, '2022-12-05'),
(84, 'Othilia Nother', 'onother2b@ed.gov', 'Female', 'Japan', 207, '2023-03-12'),
(85, 'Vonni Killcross', 'vkillcross2c@histats.com', 'Female', 'Nigeria', 664, '2023-09-03'),
(86, 'Adolphe Ruilton', 'aruilton2d@friendfeed.com', 'Bigender', 'Portugal', 829, '2023-08-20'),
(87, 'Lisa Heindle', 'lheindle2e@bbb.org', 'Female', 'United States', 719, '2022-12-18'),
(88, 'Garfield Bourget', 'gbourget2f@constantcontact.com', 'Male', 'Indonesia', 362, '2023-08-16'),
(89, 'Ty Kingscote', 'tkingscote2g@github.io', 'Polygender', 'China', 355, '2022-12-16'),
(90, 'Grenville Niesing', 'gniesing2h@nba.com', 'Male', 'United States', 518, '2023-02-28'),
(91, 'Willabella Deackes', 'wdeackes2i@oakley.com', 'Female', 'Brazil', 864, '2023-05-29'),
(92, 'Archer Bettley', 'abettley2j@hugedomains.com', 'Male', 'Indonesia', 554, '2023-03-29'),
(93, 'Philippine Gabites', 'pgabites2k@behance.net', 'Female', 'Uzbekistan', 675, '2023-01-14'),
(94, 'Krysta Piddington', 'kpiddington2l@aboutads.info', 'Female', 'Czech Republic', 290, '2023-08-27'),
(95, 'Bradney Pedlingham', 'bpedlingham2m@flickr.com', 'Male', 'China', 420, '2023-09-06'),
(96, 'Ollie Huckle', 'ohuckle2n@mail.ru', 'Bigender', 'Argentina', 496, '2023-05-02'),
(97, 'Teddi Nail', 'tnail2o@blogtalkradio.com', 'Female', 'Canada', 287, '2022-09-17'),
(98, 'Arnaldo Clerc', 'aclerc2p@squarespace.com', 'Male', 'China', 516, '2023-01-30'),
(99, 'Wilow Petrozzi', 'wpetrozzi2q@mlb.com', 'Female', 'Czech Republic', 565, '2023-01-10'),
(100, 'Jewell Johanssen', 'jjohanssen2r@wix.com', 'Female', 'Serbia', 472, '2023-06-21');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
