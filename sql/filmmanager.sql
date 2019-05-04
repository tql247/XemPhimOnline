-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 10:15 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Id_Account` int(11) NOT NULL,
  `Name_Account` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `Role` varchar(5) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Id_Account`, `Name_Account`, `Password`, `Role`) VALUES
(1, 'Admin', '123456', 'Admin'),
(2, 'User01', '1234', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id_Category` int(11) NOT NULL,
  `Name_Category` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id_Category`, `Name_Category`) VALUES
(1, 'TV series'),
(2, 'Movies'),
(3, 'Ova'),
(4, 'Species'),
(5, 'Action'),
(6, 'Adventure'),
(7, 'Comedy'),
(8, 'Drama'),
(9, 'Ecchi'),
(10, 'Fantasy'),
(11, 'Harem'),
(12, 'Isekai'),
(13, 'Magic'),
(14, 'Mecha'),
(15, 'Romance'),
(16, 'School Life'),
(17, 'Shoujo'),
(18, 'Shounen'),
(19, 'Slice of life');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Id_Comment` int(11) NOT NULL,
  `Id_Film` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Content` varchar(3000) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Id_Comment`, `Id_Film`, `Id_User`, `Content`) VALUES
(101, 16, 2, 'Hello World'),
(102, 15, 2, 'goood'),
(103, 15, 2, 'bad');

-- --------------------------------------------------------

--
-- Table structure for table `detail_category`
--

CREATE TABLE `detail_category` (
  `Id_Film` int(11) NOT NULL,
  `Id_Category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `detail_category`
--

INSERT INTO `detail_category` (`Id_Film`, `Id_Category`) VALUES
(15, 1),
(15, 5),
(15, 10),
(16, 1),
(16, 5),
(16, 6),
(16, 7),
(16, 10),
(16, 12),
(17, 1),
(17, 8),
(17, 14),
(18, 1),
(18, 8),
(18, 15),
(18, 16),
(18, 19),
(19, 1),
(19, 8),
(19, 17),
(19, 19),
(20, 2),
(20, 7),
(20, 8),
(20, 19),
(21, 1),
(21, 7),
(21, 16),
(21, 19),
(22, 1),
(22, 5),
(22, 6),
(22, 10),
(22, 18),
(23, 1),
(23, 5),
(23, 18),
(24, 1),
(24, 5),
(24, 6),
(24, 18),
(25, 1),
(25, 5),
(25, 7),
(25, 15),
(25, 16),
(25, 18),
(25, 19),
(26, 1),
(26, 7),
(26, 9),
(26, 16),
(26, 19),
(27, 1),
(27, 7),
(27, 16),
(27, 17),
(27, 19),
(28, 1),
(28, 5),
(28, 8),
(28, 18),
(28, 19),
(29, 1),
(29, 7),
(29, 11),
(29, 15),
(29, 16),
(29, 18),
(29, 19),
(30, 1),
(30, 5),
(30, 7),
(30, 14),
(30, 15),
(30, 18),
(31, 1),
(31, 5),
(31, 6),
(31, 10),
(31, 13),
(31, 18),
(32, 1),
(32, 5),
(32, 6),
(32, 10),
(32, 13),
(32, 18),
(33, 2),
(33, 5),
(33, 8),
(33, 14),
(33, 18),
(34, 1),
(34, 5),
(34, 6),
(34, 8),
(34, 10),
(34, 18),
(35, 1),
(35, 7),
(35, 8),
(35, 15),
(35, 16),
(35, 18),
(35, 19),
(36, 1),
(36, 7),
(36, 18),
(36, 19),
(38, 1),
(38, 5),
(38, 18),
(39, 1),
(39, 7),
(39, 15),
(39, 18),
(40, 1),
(40, 15),
(40, 16),
(40, 17),
(40, 19),
(41, 1),
(41, 5),
(41, 6),
(41, 10),
(41, 13),
(41, 18),
(42, 1),
(42, 5),
(42, 6),
(42, 10),
(42, 12),
(42, 13),
(42, 18),
(43, 1),
(43, 5),
(43, 7),
(43, 11),
(43, 16),
(43, 18),
(43, 19),
(44, 1),
(44, 7),
(44, 15),
(44, 18),
(37, 1),
(37, 5),
(37, 7),
(37, 9),
(37, 11),
(37, 15),
(37, 18);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `Id_Film` int(11) NOT NULL,
  `Name_Film` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `YearRelease` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `Manufacturer` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `Author` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `Category` varchar(300) COLLATE utf8_vietnamese_ci NOT NULL,
  `Eps_Number` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `Cover_address` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `Content` varchar(10000) COLLATE utf8_vietnamese_ci NOT NULL,
  `ViewNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`Id_Film`, `Name_Film`, `YearRelease`, `Manufacturer`, `Author`, `Category`, `Eps_Number`, `Cover_address`, `Content`, `ViewNumber`) VALUES
(15, 'RE: ZERO', '2016', 'Unknow', 'Unknow', '', '12', 'upload/cover/1aadb568918f23123665a497dbe3f3c10468665d_hq.jpg', '', 0),
(16, 'kono subarashii', '2017', 'Unknow', 'Unknow', '', '13', 'upload/cover/61GI-8ZL4uL.jpg', 'Kuzuma', 0),
(17, 'Code Geass', '2010', 'Unknow', 'Unknow', '', '25', 'upload/cover/9391.jpg', 'hail', 0),
(18, 'Your lie in april', '2014', 'Unknow', 'Unknow', '', '24', 'upload/cover/67177.jpg', 'abc', 0),
(19, 'Natsume Yuujinchou', '2016', 'Unknow', 'Unknow', '', '12', 'upload/cover/84416.jpg', 'buta neko sensei', 0),
(20, 'Your Name', '2016', 'Unknow', 'Shinkai Makoto', '', '1', 'upload/cover/87048.jpg', 'Mitsuha', 0),
(21, 'Saiki Kusuo', '2016', 'Unknow', 'Unknow', '', '12', 'upload/cover/91383.jpg', 'Saiki Kusuo lÃ  má»™t nhÃ  ngoáº¡i cáº£m báº©m sinh. NhÆ°ng khÃ¡c vá»›i nhá»¯ng ngÆ°á»i khÃ¡c vui má»«ng vÃ¬ cÃ³ Ä‘Æ°á»£c sá»©c máº¡nh siÃªu nhiÃªn, Kusuo láº¡i coi Ä‘Ã³ nhÆ° sá»± báº¥t háº¡nh nháº¥t tháº¿ giá»›i, vÃ  cá»‘ gáº¯ng sá»‘ng bÃ¬nh thÆ°á»ng máº·c cho cÃ¡i sá»©c máº¡nh phiá»n nhiá»…u nÃ y', 0),
(22, 'Attack on Titan', '2019', 'Unknow', 'Unknow', '', '13', 'upload/cover/92110.jpg', 'Cuá»™c chiáº¿n cá»§a con ngÆ°á»i chá»‘ng láº¡i cÃ¡c Titan khá»•ng lá»“ Ä‘á»ƒ giÃ nh giáº­t máº¡ng sá»‘ng cá»§a mÃ¬nh. VÃ i trÄƒm nÄƒm trÆ°á»›c, con ngÆ°á»i báº¯t Ä‘áº§u bá»‹ táº¥n cÃ´ng bá»Ÿi nhá»¯ng ngÆ°á»i Khá»•ng lá»“, má»™t sinh váº­t Äƒn thá»‹t ngÆ°á»i. ÄÃ¡ng ngáº¡i thay, chÃºng Äƒn con ngÆ°á»i nhÆ° má»™t thÃº vui hÆ¡n lÃ  nhu cáº§u Äƒn uá»‘ng. Diá»‡n tÃ­ch sá»‘ng cá»§a con ngÆ°á»i ngÃ y cÃ ng thu háº¹p dáº§n, há» Ä‘Ã nh pháº£i xÃ¢y nhá»¯ng bÆ°á»›c tÆ°á»ng cao Ä‘áº¿n 60m Ä‘á»ƒ ngÄƒn ngÆ°á»i Khá»•ng lá»“ cao nháº¥t lÃºc Ä‘Ã³ lÃ  15m. Con ngÆ°á»i tuy sá»‘ng gÃ² bÃ³ trong nhá»¯ng bá»©c tÆ°á»ng cháº­t háº¹p nhÆ°ng Ä‘á»•i láº¡i, há» sá»‘ng yÃªn bÃ¬nh. NhÆ°ng rá»“i má»™t ngÃ y ná», táº¥t cáº£ sá»± yÃªn bÃ¬nh Ä‘Ã³ Ä‘Ã£ tan vÃ o hÆ° vÃ´ trong phÃºt chá»‘c...', 0),
(23, 'Sword Art Online Alternative: Gun Gale Online', '2018', 'Unknow', 'Unknow', '', '12', 'upload/cover/93288.jpg', 'Kohiruimaki,má»™t ná»¯ sinh Ä‘áº¡i há»c vá»›i chiá»u cao 1m83 cÃ¹ng vá»›i nhá»¯ng máº·c cáº£m vá» chiá»u cao vÃ  nhá»¯ng má»‘i quan há»‡ xÃ£ há»™i nghÃ¨o nÃ n. Má»™i chuyá»‡n thay Ä‘á»•i bá»Ÿi VRMMO game : gun gale online GGO. Trong trÃ² chÆ¡i, karen Ä‘Ã£ cÃ³ Ä‘Æ°á»£c hÃ¬nh máº«u\" chibi\" trong mÆ¡ vá»›i chiá»u cao chÆ°a Ä‘áº¿n 1m50, khoáº¯c lÃªn mÃ¬nh cáº£ cÃ¢y há»“ng vÃ  Ä‘áº·t tÃªn lÃ  \"LLENN\", nghá»‹ch ngá»£m trong tháº¿ giá»›i cá»§a GGO.\"Pitohui\" má»™t game thá»§ xinh Ä‘áº¹p xuáº¥t hiá»‡n trÆ°á»›c LLENN. CÃ´ ta lÃ  má»™t ná»¯ game thá»§ hiáº¿m cÃ³ trong GGO nÃªn 2 ngÆ°á»i ráº¥t há»£p nhau. NhÆ°ng Ä‘áº¿n 1 ngÃ y, LLENN Ä‘Æ°á»£c yÃªu cáº§u tham gia Ä‘áº¥u Ä‘á»™i cá»§a giáº£i Ä‘áº¥u hoÃ ng gia \"Squad jam\" bá»Ÿi Pitohui....', 0),
(24, 'Goblin Slayer', '2018', 'Unknow', 'Unknow', '', '12', 'upload/cover/93415.jpg', 'Tháº¿ giá»›i tÆ°Æ¡ng truyá»n vá» má»™t máº¡o hiá»ƒm giáº£ mang danh \"Goblin Slayer\", ngÆ°á»i sáºµn sÃ ng dÃ¹ng má»i kháº£ nÄƒng, má»i thá»§ Ä‘oáº¡n vÃ  cáº£ sinh máº¡ng Ä‘á»ƒ tiÃªu diá»‡t goblin. VÃ  khi anh ta ra tay, cháº³ng ai biáº¿t Ä‘iá»u gÃ¬ sáº½ xáº£y ra tiáº¿p theo...', 0),
(25, 'Kishuku Gakkou no Juliet', '2018', 'Unknow', 'Unknow', '', '12', 'upload/cover/93416.jpg', 'CÃ¢u chuyá»‡n diá»…n ra táº¡i TrÆ°á»ng Ná»™i trÃº Há»c viá»‡n Grigio, nÆ¡i há»c sinh Ä‘áº¿n tá»« hai quá»‘c gia cáº¡nh tranh Ä‘Æ°á»£c gá»i lÃ  Háº¯c Khuyá»ƒn vÃ  Báº¡ch MiÃªu. Persia vÃ  Inuzaka lÃ  nhá»¯ng nhÃ  lÃ£nh Ä‘áº¡o cá»§a kÃ½ tÃºc xÃ¡ tÆ°Æ¡ng á»©ng nhÆ°ng há» bÃ­ máº­t yÃªu nhau. BÃ¢y giá», há» pháº£i giá»¯ bÃ­ máº­t má»‘i quan há»‡ cá»§a há» vá»›i nhá»¯ng ngÆ°á»i báº¡n kÃ½ tÃºc xÃ¡ khÃ¡c trong khi cá»‘ gáº¯ng trÃ¡nh ráº¯c rá»‘i. ', 0),
(26, 'Grand Blue', '2018', 'Unknow', 'Unknow', '', '12', 'upload/cover/94882.jpg', 'CÃ¢u chuyá»‡n xoay quanh Kitahara Iori Ä‘Æ°á»£c báº¯t Ä‘áº§u má»™t cuá»™c sá»‘ng má»›i táº¡i má»™t trÆ°á»ng Ä‘áº¡i há»c gáº§n biá»ƒn á»Ÿ thÃ nh phá»‘ Izu. á»Ÿ Ä‘Ã³ cáº­u gáº·p Ä‘Æ°á»£c má»™t cÃ´ gÃ¡i thÃ­ch láº·n vÃ  tiáº¿p theo Ä‘Ã³ sáº½ diá»…n biáº¿n tháº¿ nÃ o xem rá»“i sáº½ rÃµ :v', 0),
(27, 'Asobi Asobase', '2018', 'Unknow', 'Unknow', '', '12', 'upload/cover/95077.jpg', 'Má»™t nhÃ³m con gÃ¡i quáº­y chÆ¡i cÃ¡c trÃ² Nháº­t Báº£n vá»›i nhau.', 0),
(28, 'Lá»›p Há»c Ãm SÃ¡t', '2015', 'Unknow', 'Unknow', '', '22', 'upload/cover/7683637_orig.jpg', 'Báº¡n pháº£i lÃ m gÃ¬ náº¿u má»™t ngÃ y kia, khi Ä‘ang ngá»“i trong lá»›p há»c, má»™t con báº¡ch tuá»™c da xanh bÆ°á»›c vÃ o lá»›p vÃ  nÃ³i \"Tá»« bÃ¢y giá» tÃ´i sáº½ lÃ  tháº§y cÃ¡c em. Nhiá»‡m vá»¥ cá»§a cÃ¡c tá»« bÃ¢y giá» Ä‘áº¿n háº¿t nÄƒm há»c lÃ  giáº¿t tÃ´i. Náº¿u khÃ´ng tÃ´i sáº½ cho ná»• tung TrÃ¡i Äáº¥t\"?\r\n\r\nPhim chá»‰ dÃ nh cho Ä‘á»‘i tÆ°á»£ng trÃªn 13 tuá»•i. CÃ¡c há»c sinh lá»›p 3-E cÃ³ 1 nhiá»‡m vá»¥, Ä‘Ã³ lÃ  Ã¡m sÃ¡t giÃ¡o viÃªn cá»§a há» trÆ°á»›c khi tá»‘t nghiá»‡p. Ã”ng ta Ä‘Ã£ phÃ¡ há»§y máº·t trÄƒng, vÃ  há»©a háº¹n ráº±ng trong vÃ²ng 1 nÄƒm náº¿u khÃ´ng ai giáº¿t Ä‘Æ°á»£c mÃ¬nh, Ã´ng ta sáº½ há»§y diá»‡t luÃ´n cáº£ TrÃ¡i Äáº¥t. NhÆ°ng lÃ m sao mÃ  cÃ¡i lá»›p há»c chá»‰ cÃ³ toÃ n nhá»¯ng há»c sinh khÃ´ng thÃ­ch nghi Ä‘Æ°á»£c vá»›i ngoáº¡i cáº£nh nÃ y, cÃ³ thá»ƒ giáº¿t Ä‘Æ°á»£c má»™t con quÃ¡i váº­t xÃºc tu cÃ³ kháº£ nÄƒng Ä‘áº¡t tá»›i tá»‘c Ä‘á»™ 20 MÃ¡c, ngÆ°á»i mÃ  ráº¥t cÃ³ thá»ƒ lÃ  giÃ¡o viÃªn giá»i nháº¥t mÃ  há» tá»«ng cÃ³.', 0),
(29, 'Bokutachi wa Benkyou ga Dekinai', '2019', 'Unknow', 'Unknow', '', '12', 'upload/cover/Bokutachi wa Benkyou ga Dekinai.jpg', 'NgÆ°á»i cha quÃ¡ cá»‘ cá»§a cáº­u luÃ´n nÃ³i ráº±ng, ngÆ°á»i vÃ´ dá»¥ng pháº£i cá»‘ pháº¥n Ä‘áº¥u Ä‘á»ƒ trá»Ÿ nÃªn há»¯u dá»¥ng, vÃ¬ tháº¿, há»c sinh nÄƒm ba cao trung Nariyuki Yuiga Ä‘Ã£ quyáº¿t pháº¥n Ä‘áº¥u trá»Ÿ thÃ nh há»c sinh xuáº¥t sáº¯c cá»§a trÆ°á»ng, dÃ¹ Ä‘iá»ƒm trÆ°á»›c Ä‘Ã¢y khÃ¡ kÃ©m. Äá»ƒ giÃºp gia Ä‘Ã¬nh nghÃ¨o khÃ³ cá»§a mÃ¬nh cÃ³ cuá»™c sá»‘ng tá»‘t hÆ¡n, má»¥c tiÃªu chÃ­nh cá»§a cáº­u lÃ  nháº­n Ä‘Æ°á»£c Ä‘á» cá»­, Ä‘áº¡t Ä‘Æ°á»£c há»c bá»•ng toÃ n pháº§n chi tráº£ toÃ n bá»™ phÃ­ Ä‘áº¡i há»c. DÃ¹ Nariyuki cÃ³ kháº£ nÄƒng Ä‘oáº¡t Ä‘Æ°á»£c nÃ³, nhÆ°ng cáº­u láº¡i bá»‹ che phá»§ bá»Ÿi cÃ¡i bÃ³ng cá»§a hai ngÆ°á»i báº¡n cÃ¹ng lá»›p Rizu Ogata á»Ÿ mÃ´n toÃ¡n vÃ  Fumino Furuhashi á»Ÿ mÃ´n vÄƒn.\r\n\r\nBáº¥t ngá», Nariyuki sáº½ Ä‘Æ°á»£c Ä‘á» cá»­, nhÆ°ng cÃ³ Ä‘iá»u kiá»‡n: cáº­u pháº£i dáº¡y kÃ¨m hai thiÃªn tÃ i cá»§a trÆ°á»ng, ngÆ°á»i nÃ y dá»Ÿ tá»‡ á»Ÿ mÃ´n giá»i nháº¥t cá»§a ngÆ°á»i kia. Tá»‡ hÆ¡n, mÃ´n há» há»c kÃ©m láº¡i lÃ  mÃ´n há» muá»‘n há»c á»Ÿ tÆ°Æ¡ng lai. Khi kÃ¬ thi Ä‘áº¡i há»c Ä‘áº¿n gáº§n, Nariyuki pháº£i tÃ¬m ra cÃ¡ch hiá»‡u quáº£ Ä‘á»ƒ dáº¡y cho nhá»¯ng cÃ´ gÃ¡i nÃ y trÆ°á»›c khi quÃ¡ trá»….', 0),
(30, 'Darling in the FranXX', '2018', 'Unknow', 'Unknow', '', '24', 'upload/cover/DARLING IN THE FRANXX.jpg', 'Há» mÆ¡ Æ°á»›c má»™t ngÃ y bay vÃ o báº§u trá»i vÃ´ táº­n, máº·c dÃ¹ há» Ä‘ang Ä‘au Ä‘á»›n nháº­n thá»©c Ä‘Æ°á»£c lÃ m tháº¿ nÃ o xa báº§u trá»i lÃ  ngoÃ i thá»§y tinh mÃ  khá»‘i chuyáº¿n bay cá»§a há». TÆ°Æ¡ng lai xa vá»i: NhÃ¢n loáº¡i Ä‘Ã£ thÃ nh láº­p thÃ nh phá»‘ phÃ¡o Ä‘Ã i di Ä‘á»™ng, Plantation, trÃªn ná»n Ä‘áº¥t hoang váº¯ng vÃ  ná»n vÄƒn minh phÃ¡t triá»ƒn rá»±c rá»¡. Trong thÃ nh phá»‘ lÃ  nhá»¯ng khu thÃ­ Ä‘iá»ƒm Ä‘Æ°á»£c gá»i lÃ  Mistilteinn, cÃ²n Ä‘Æ°á»£c gá»i lÃ  \"Birdcage\". ÄÃ³ lÃ  nÆ¡i bá»n tráº» sá»‘ng ... KhÃ´ng biáº¿t báº¥t cá»© Ä‘iá»u gÃ¬ cá»§a tháº¿ giá»›i bÃªn ngoÃ i vÃ  khÃ´ng biáº¿t Ä‘áº¿n báº§u trá»i rá»™ng lá»›n. Nhiá»‡m vá»¥ duy nháº¥t cá»§a há» trong cuá»™c Ä‘á»i lÃ  cuá»™c chiáº¿n. Káº» thÃ¹ cá»§a há» lÃ  nhá»¯ng sinh váº­t khá»•ng lá»“ bÃ­ áº©n Ä‘Æ°á»£c gá»i lÃ  Kyoryu. Tráº» em Ä‘iá»u khiá»ƒn cÃ¡c robot Ä‘Æ°á»£c gá»i lÃ  FRANXX Ä‘á»ƒ Ä‘á»‘i máº·t vá»›i nhá»¯ng káº» thÃ¹ chÆ°a tháº¥y Ä‘Ã³ bá»Ÿi vÃ¬ há» tin ráº±ng Ä‘Ã³ lÃ  má»¥c Ä‘Ã­ch cá»§a chÃºng trong cuá»™c sá»‘ng. Trong sá»‘ Ä‘Ã³ cÃ³ má»™t cáº­u bÃ© Ä‘Ã£ tá»«ng Ä‘Æ°á»£c gá»i lÃ  má»™t tháº§n Ä‘á»“ng: MÃ£ sá»‘ 016, Hiro. Tuy nhiÃªn, bÃ¢y giá» anh ta lÃ  má»™t tháº¥t báº¡i vÃ  Ä‘Æ°á»£c coi lÃ  khÃ´ng cáº§n thiáº¿t. Nhá»¯ng ngÆ°á»i khÃ´ng thá»ƒ thÃ­ Ä‘iá»ƒm FRANXX cÆ¡ báº£n khÃ´ng tá»“n táº¡i. Má»™t ngÃ y kia, má»™t cÃ´ gÃ¡i bÃ­ áº©n tÃªn Zero Two xuáº¥t hiá»‡n trÆ°á»›c Hiro. Tá»« khuÃ´n máº·t cÃ´ áº¥y Ä‘Ã£ cÃ³ hai chiáº¿c sá»«ng lÃ´i cuá»‘n. \"TÃ´i Ä‘Ã£ tÃ¬m tháº¥y báº¡n, Darling cá»§a tÃ´i.\"', 0),
(31, 'Fairy tail', '2014', 'Unknow', 'Unknow', '', '277', 'upload/cover/Fairy tail.jpg', 'Fairy Tail (Há»™i PhÃ¡p SÆ°) lÃ  má»™t series truyá»‡n tranh Nháº­t Báº£n Ä‘Æ°á»£c sÃ¡ng tÃ¡c bá»Ÿi tÃ¡c giáº£ Hiro Mashima. Truyá»‡n Ä‘Ã£ Ä‘Æ°á»£c phÃ¡t hÃ nh thÃ nh tá»«ng ká»³ trÃªn táº¡p chÃ­ Weekly ShÅnen tá»« ngÃ y 23 thÃ¡ng 8 nÄƒm 2006 vÃ  cho Ä‘áº¿n bÃ¢y giá» váº«n Ä‘ang Ä‘Æ°á»£c tiáº¿p tá»¥c. Sau Ä‘Ã³ nhá»¯ng chÆ°Æ¡ng truyá»‡n riÃªng Ä‘Æ°á»£c nhÃ  xuáº¥t báº£n Kodansha tá»•ng há»£p vÃ  phÃ¡t hÃ nh thÃ nh tá»«ng táº­p. TÃ­nh Ä‘áº¿n thÃ¡ng 10 nÄƒm 2008, Ä‘Ã£ cÃ³ 12 táº­p truyá»‡n Fairy Tail Ä‘Æ°á»£c phÃ¡t hÃ nh. XuyÃªn suá»‘t cÃ¢u chuyá»‡n lÃ  cuá»™c phiÃªu lÆ°u cá»§a má»™t Sorceress tÃªn lÃ  Lucy Heartphilia, sau khi cÃ´ tham gia vÃ o hiá»‡p há»™i há»™i Fairy Tail, cÃ´ Ä‘Ã£ cÃ¹ng vá»›i Natsu Dragneel hÃ nh trÃ¬nh Ä‘á»ƒ Ä‘i tÃ¬m má»™t con rá»“ng tÃªn lÃ  Igneel.\r\n\r\nPháº§n báº¡n Ä‘ang xem lÃ  pháº§n ADMIN Ä‘Ã£ gá»™p pháº§n 1, pháº§n 2, pháº§n 3 vÃ o 1 pháº§n chung', 0),
(32, 'Overlord', '2015', 'Mad House', 'Unknow', '', '', 'upload/cover/ff.jpg', '', 0),
(33, 'Godzilla: City on the Edge of Battle', '2018', 'Netflix', 'Unknow', '', '', 'upload/cover/GODZILLA 2 KESSEN KIDOU ZOUSHOKU TOSHI.jpg', 'VÅ© khÃ­ cÃ³ ngÆ°á»i lÃ¡i di Ä‘á»™ng cao Vulcher (NgÆ°á»i Ká»n Ká»n) do Haruo Ä‘iá»u khiá»ƒn Ä‘Ã£ xuáº¥t hiá»‡n, má»Ÿ ra nhá»¯ng tráº­n chiáº¿n Ä‘áº¥u vá»›i Godzilla Earth. NgoÃ i ra, Futsua â€“ chá»§ng tá»™c Ä‘Æ°á»£c cho lÃ  loÃ i cÃ²n sá»‘ng sÃ³t mÃ  Ä‘Ã£ cá»©u Haruo cÅ©ng sáº½ xuáº¥t hiá»‡n. BÃªn cáº¡nh Ä‘Ã³, trong pháº§n hai cÅ©ng sáº½ sÃ¡ng tá» bÃ­ máº­t vá» Mechagodzilla. Anime miÃªu táº£ cÃ¢u chuyá»‡n vá» Ä‘á»‹nh má»‡nh giá»¯a Godzilla â€“ váº«n Ä‘ang tiáº¿p tá»¥c thá»‘ng trá»‹ Ä‘á»‹a cáº§u, vá»›i con ngÆ°á»i trong suá»‘t 20 000 nÄƒm.', 0),
(34, 'Dororo', '2019', 'Unknow', 'Unknow', '', '25', 'upload/cover/l1600.jpg', 'Má»™t vá»‹ lÃ£nh chÃºa samurai Ä‘Ã£ hiáº¿n táº¿ xÃ¡c thá»‹t cá»§a con trai vá»«a háº¡ sinh cá»§a mÃ¬nh cho Tháº­p Nhá»‹ Quá»· Ä‘á»ƒ Ä‘á»•i láº¥y thá»‹nh vÆ°á»£ng vÃ  bÃ¡ quyá»n cho lÃ£nh thá»• cá»§a Ã´ng. Tuy nhiÃªn, Ä‘á»©a con trai táº­t nguyá»n bá»‹ Ã´ng vá»©t bá» khÃ´ng cháº¿t Ä‘i mÃ  sá»›m trÆ°á»Ÿng thÃ nh thÃ nh má»™t thá»£ sÄƒn quá»·. TrÃªn Ä‘Æ°á»ng hÃ nh hiá»‡p, chÃ ng trai tráº» Ä‘Ã£ gáº·p Ä‘Æ°á»£c má»™t Ä‘á»©a nhÃ³c tÃªn Dororo, ngÆ°á»i tá»± nháº­n lÃ  vua trá»™m cáº¯p.', 0),
(35, 'Relife', '2016', 'Unknow', 'Unknow', '', '13', 'upload/cover/RelIFE-Anime-Poster-e1467731190627.jpg', 'Chuyá»‡n ká»ƒ vá» Kaizaki Arata, má»™t ngÆ°á»i Ä‘Ã n Ã´ng 27 tuá»•i tháº¥t nghiá»‡p. Cuá»™c sá»‘ng cá»§a anh thay Ä‘á»•i khi gáº·p Yoake Ryou cá»§a Viá»‡n nghiÃªn cá»©u Relife, ngÆ°á»i Ä‘Ã£ Ä‘Æ°a anh má»™t loáº¡i thuá»‘c khiáº¿n diá»‡n máº¡o trá»Ÿ vá» tuá»•i 17. Anh sáº½ pháº£i thá»­ nghiá»‡m nÃ³ trong vÃ²ng má»™t nÄƒm. Sau Ä‘Ã³ Kaizaki Ä‘Ã£ trá»Ÿ láº¡i cuá»™c sá»‘ng cá»§a má»™t há»c sinh trung há»c láº§n ná»¯a.', 0),
(36, 'Ryuuou no Oshigoto!', '2018', 'Unknow', 'Unknow', '', '12', 'upload/cover/RYUUOU NO OSHIGOTO!.jpg', 'Kuzuryu yaichi lÃ  nhÃ  vÃ´ Ä‘á»‹ch shogi mang danh hiá»‡u ryuuou (vua rá»“ng ) tráº» nháº¥t trong lá»‹ch sá»­. Má»™t bÃ© gÃ¡i tÃªn hinazuru Ai Ä‘Ã£ tá»± nguyá»‡n xin lÃ m Ä‘á»‡ tá»­. QuÃ¡ tráº» vá»›i danh Ryuou Yaichi sáº½ nháº­n Ai lÃ m Ä‘á»‡ tá»­... Äá»£i Ä‘Ã£, Ai-chan má»›i cÃ³ 9 tuá»•i ? LÃ  há»c sinh tiá»ƒu há»c Æ°? VÃ  Ai sáº½ sá»‘ng cÃ¹ng Yaichi? Cáº£ ngÃ y vÃ  Ä‘Ãªm sao? KhÃ´ng thá»ƒ tin ná»•i? Alo cáº£nh sÃ¡t Ã , tÃ´i muá»‘n trÃ¬nh bÃ¡o. Má»™t cÃ¢u chuyá»‡n vui vá» báº­c tháº§y Shogi tráº» tuá»•i sá»‘ng cÃ¹ng má»™t Ä‘á»“ Ä‘á»‡ chÆ°a dáº­y thÃ¬', 0),
(37, 'HIGH SCHOOL DXD BORN', '2018', 'Unknow', 'Unknow', '', '12', 'upload/cover/HIGH SCHOOL DXD BORN.jpg', 'HIGH SCHOOL DXD BORN ss3', 0),
(38, 'Angels of Death', '2018', 'Unknow', 'Unknow', '', '16', 'upload/cover/SATSURIKU NO TENSHI.jpg', 'Rachel 13 tuá»•i tá»‰nh dáº­y trong táº§ng háº§m cá»§a má»™t tÃ²a nhÃ  mÃ  khÃ´ng cÃ³ báº¥t ká»³ kÃ½ á»©c hay manh má»‘i, trong khi lang thang á»Ÿ cÃ¡i xÃ³m khá»‰ giÃ³ nÃ o Ä‘Ã³, cÃ´ gáº·p Zack , má»™t tÃªn sÃ¡t nhÃ¢n quáº¥n bÄƒng Ä‘áº§y ngÆ°á»i , tráº£i qua má»™t sá»‘ biáº¿n cá»‘ , Rachel vÃ  Zack quyáº¿t Ä‘á»‹nh há»£p tÃ¡c Ä‘á»ƒ rá»i khá»i tÃ²a nhÃ  bÃ­ áº©n nÃ y...', 0),
(39, 'Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo', '2018', 'Unknow', 'Unknow', '', '13', 'upload/cover/Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Minai.jpg', 'CÃ³ má»™t tin Ä‘á»“n trong tháº¿ giá»›i há»c Ä‘Æ°á»ng, áº¥y lÃ  vá» má»™t hiá»‡n tÆ°á»£ng kÃ¬ bÃ­ gá»i lÃ  \"há»™i chá»©ng tuá»•i má»›i lá»›n\". Má»™t ngÃ y ná», cáº­u há»c sinh cao trung Sakuta Azusagawa Ä‘á»™t nhiÃªn tháº¥y má»™t cÃ´ gÃ¡i tai thá» xinh Ä‘áº¹p xuáº¥t hiá»‡n trÆ°á»›c máº·t mÃ¬nh. CÃ´ gÃ¡i áº¥y chÃ­nh lÃ  Mai Sakurajima - Ä‘Ã n chá»‹ lá»›p trÃªn cá»§a Sakuta vÃ  lÃ  má»™t ná»¯ diá»…n viÃªn ná»•i tiáº¿ng hiá»‡n Ä‘ang táº¡m nghá»‰. KhÃ´ng hiá»ƒu vÃ¬ lÃ½ do gÃ¬ mÃ  chá»‰ cÃ³ mÃ¬nh Sakuta tháº¥y cÃ¡i tai thá» cá»§a Mai mÃ  thÃ´i, khÃ´ng ai ngoÃ i cáº­u cÃ³ thá»ƒ tháº¥y Ä‘Æ°á»£c cáº£. Tháº¿ lÃ  Sakuta quyáº¿t Ä‘á»‹nh tÃ¬m cÃ¡ch giáº£i mÃ£ bÃ­ áº©n nÃ y. Cáº­u tiáº¿p cáº­n vÃ  dÃ nh nhiá»u thá»i gian vá»›i Mai hÆ¡n, vÃ  tá»« Ä‘Ã³, cáº­u dáº§n hiá»ƒu ra nhá»¯ng cáº£m xÃºc bÃ­ máº­t Ä‘Æ°á»£c giáº¥u kÃ­n trong Mai.\r\n\r\nNÃ o ngá» Ä‘Ã¢u, nhá»¯ng cÃ´ gÃ¡i khÃ¡c vá»›i \"há»™i chá»©ng tuá»•i má»›i lá»›n\" cÅ©ng báº¯t Ä‘áº§u xuáº¥t hiá»‡n trÆ°á»›c máº·t Sakuta', 0),
(40, 'Tada-kun wa Koi wo Shinai', '2018', 'Unknow', 'Unknow', '', '13', 'upload/cover/TADA-KUN WA KOI WO SHINAI.jpg', 'Anh chÃ ng Tada Mitsuyoshi chÆ°a cÃ³ má»™t máº£nh tÃ¬nh váº¯t vai trong má»™t láº§n máº£i mÃª chá»¥p áº£nh hoa anh Ä‘Ã o Ä‘Ã£ tÃ¬nh cá» gáº·p gá»¡ cÃ´ nÃ ng Teresa Wagner - má»™t du há»c sinh Ä‘áº¿n tá»« Luxembourg Ä‘ang bá»‹ láº¡c khá»i Ä‘oÃ n du lá»‹ch cÃ¹ng thÄƒm thÃº Nháº­t Báº£n. Mitsuyosh Ä‘Ã£ giÃºp Ä‘á»¡ Teresa vÃ  mang cÃ´ Ä‘áº¿n quÃ¡n cÃ  phÃª cá»§a Ã´ng cáº­u vÃ  cÃ¢u chuyá»‡n vá» tÃ¬nh yÃªu giá»¯a há» cÅ©ng báº¯t Ä‘áº§u Ä‘Æ°á»£c viáº¿t lÃªn tá»« Ä‘áº¥y.', 0),
(41, 'Tate no Yuusha no Nariagari', '2019', 'Unknow', 'Unknow', '', '25', 'upload/cover/TATE NO YUUSHA NO NARIAGARI.jpg', 'Iwatani Naofumi Ä‘Æ°á»£c triá»‡u há»“i Ä‘á»ƒ cá»©u má»™t tháº¿ giá»›i khÃ¡c, vÃ  trá»Ÿ thÃ nh má»™t trong bá»‘n vá»‹ anh hÃ¹ng táº¡i nÆ¡i Ä‘Ã¢y. Báº¯t Ä‘áº§u cuá»™c hÃ nh trÃ¬nh khÃ¡ bá»‹ khinh bá»‰, Ä‘á»ƒ má»i viá»‡c tá»‡ hÆ¡n ná»¯a lÃ  anh áº¥y bá»‹ pháº£n bá»™i vÃ o ngÃ y thá»© ba cá»§a cuá»™c hÃ nh trÃ¬nh. Tiá»n báº¡c thÃ¬ máº¥t, tinh tháº§n há»—n Ä‘á»™n, nÃªn anh áº¥y thá» sáº½ tráº£ thÃ¹ nhá»¯ng káº» Ä‘Ã£ pháº£n bá»™i mÃ¬nh, vÃ  báº¯t Ä‘áº§u tá»« ...', 0),
(42, 'Tensei shitara Slime Datta Ken', '2018', 'Unknow', 'Unknow', '', '25', 'upload/cover/TENSEI SHITARA SLIME DATTA KEN.jpg', 'Má»™t anh chÃ ng bá»‹ tÃªn cÆ°á»›p Ä‘Ã¢m cháº¿t khi Ä‘i gáº·p Ä‘á»“ng nghiá»‡p cÃ¹ng vá»£ chÆ°a cÆ°á»›i cá»§a cáº­u ta. Khi Ä‘ang thoi thÃ³p trÆ°á»›c khi cháº¿t, ngÆ°á»i Ä‘áº§y mÃ¡u, anh ta nghe Ä‘Æ°á»£c má»™t tiáº¿ng nÃ³i ká»³ láº¡. Giá»ng nÃ³i áº¥y chuyá»ƒn thá»ƒ sá»± tiáº¿c nuá»‘i cá»§a anh chÃ ng vÃ¬ váº«n cÃ²n tÃ¢n trÆ°á»›c khi Ä‘i vÃ  ban cho anh ta chiÃªu thá»©c Ä‘áº·c biá»‡t [tiÃªn nhÃ¢n vÄ© Ä‘áº¡i]. Liá»‡u Ä‘Ã¢y cÃ³ pháº£i lÃ  trÃ² Ä‘Ã¹a?', 0),
(43, 'Date A Live', '2013', 'Unknow', 'Unknow', '', '12', 'upload/cover/VFRf4LL.jpg', '30 nÄƒm trÆ°á»›c, má»™t hiá»‡n tÆ°á»£ng ká»³ láº¡ Ä‘Æ°á»£c gá»i lÃ  spacequake (táº¡m dá»‹ch lÃ  khÃ´ng cháº¥n) Ä‘Ã£ tÃ n phÃ¡ trung tÃ¢m cá»§a Ä‘áº¡i lá»¥c Ã-Ã‚u, Ä‘e dá»a máº¡ng sá»‘ng cá»§a Ã­t nháº¥t 150 triá»‡u ngÆ°á»i. Tá»« Ä‘Ã³, nhá»¯ng tráº­n khÃ´ng cháº¥n nhá» hÆ¡n Ä‘Ã£ lÃ m tháº¿ giá»›i trá»Ÿ nÃªn báº¥t thÆ°á»ng. Shidou Itsuka lÃ  anh main nhÃ  ta, cÃ³ kháº£ nÄƒng bÃ­ áº©n cÃ³ thá»ƒ phong áº¥n Tinh linh. Tuy nhiÃªn, Ä‘iá»u kiá»‡n Ä‘á»ƒ phong áº¥n lÃ  lÃ m há» yÃªu cáº­u', 0),
(44, 'Wotaku ni Koi wa Muzukashii', '2018', 'Unknow', 'Unknow', '', '11', 'upload/cover/Wotaku ni Koi wa Muzukashii.jpg', 'CÃ¢u chuyá»‡n hÃ i hÆ°á»›c giá»¯a má»™t anh chÃ ng Otaku Gaming vÃ  má»™t cÃ´ nÃ ng Fujoshi thÃ­ch truyá»‡n tranh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `film_eps`
--

CREATE TABLE `film_eps` (
  `Id_Film` int(11) NOT NULL,
  `Eps` int(11) NOT NULL,
  `Direct` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `film_eps`
--

INSERT INTO `film_eps` (`Id_Film`, `Eps`, `Direct`) VALUES
(15, 1, 'upload/film/1.mp4'),
(15, 2, 'upload/film/2.mp4'),
(16, 1, 'upload/film/1.mp4'),
(16, 2, 'upload/film/2.mp4'),
(16, 3, 'upload/film/3.mp4'),
(17, 1, 'upload/film/1.mp4'),
(17, 2, 'upload/film/2.mp4'),
(17, 3, 'upload/film/3.mp4'),
(18, 1, 'upload/film/1.mp4'),
(18, 2, 'upload/film/2.mp4'),
(18, 3, 'upload/film/3.mp4'),
(19, 1, 'upload/film/1.mp4'),
(20, 1, 'upload/film/1.mp4'),
(21, 1, 'upload/film/1.mp4'),
(21, 2, 'upload/film/2.mp4'),
(22, 1, 'upload/film/1.mp4'),
(23, 1, 'upload/film/1.mp4'),
(24, 1, 'upload/film/1.mp4'),
(25, 1, 'upload/film/1.mp4'),
(26, 1, 'upload/film/1.mp4'),
(27, 1, 'upload/film/1.mp4'),
(28, 1, 'upload/film/1.mp4'),
(29, 1, 'upload/film/Boku.mp4'),
(30, 1, 'upload/film/1.mp4'),
(31, 1, 'upload/film/1.mp4'),
(32, 1, 'upload/film/1.mp4'),
(33, 1, 'upload/film/1.mp4'),
(34, 1, 'upload/film/1.mp4'),
(35, 1, 'upload/film/1.mp4'),
(36, 1, 'upload/film/1.mp4'),
(44, 1, 'upload/film/1.mp4'),
(43, 1, 'upload/film/1.mp4'),
(42, 1, 'upload/film/1.mp4'),
(41, 1, 'upload/film/1.mp4'),
(40, 1, 'upload/film/1.mp4'),
(39, 1, 'upload/film/1.mp4'),
(37, 1, 'upload/film/1.mp4'),
(38, 1, 'upload/film/1.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `Id_Film` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`Id_Film`, `Id_User`, `Value`) VALUES
(16, 2, 2),
(16, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `save_film`
--

CREATE TABLE `save_film` (
  `Id_Save` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Id_Film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `save_film`
--

INSERT INTO `save_film` (`Id_Save`, `Id_User`, `Id_Film`) VALUES
(7, 2, 15),
(8, 2, 44);

-- --------------------------------------------------------

--
-- Table structure for table `similar`
--

CREATE TABLE `similar` (
  `Id_Film` int(11) NOT NULL,
  `Value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `similar`
--

INSERT INTO `similar` (`Id_Film`, `Value`) VALUES
(15, 1),
(16, 2),
(17, 1),
(18, 2),
(19, 1),
(20, 1),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 4),
(26, 2),
(27, 2),
(28, 2),
(29, 4),
(30, 4),
(31, 2),
(32, 2),
(33, 1),
(34, 2),
(35, 4),
(36, 3),
(37, 4),
(38, 2),
(39, 4),
(40, 2),
(41, 2),
(42, 2),
(43, 3),
(44, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trailer`
--

CREATE TABLE `trailer` (
  `Id_Film` int(11) NOT NULL,
  `Trailer` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `trailer`
--

INSERT INTO `trailer` (`Id_Film`, `Trailer`) VALUES
(15, 'upload/trailer/1.mp4'),
(16, 'upload/trailer/2.mp4'),
(44, 'upload/trailer/trailer.mp4'),
(43, 'upload/trailer/trailer.mp4'),
(42, 'upload/trailer/trailer.mp4'),
(41, 'upload/trailer/trailer.mp4'),
(40, 'upload/trailer/trailer.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Id_Account`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id_Category`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id_Comment`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`Id_Film`);

--
-- Indexes for table `save_film`
--
ALTER TABLE `save_film`
  ADD PRIMARY KEY (`Id_Save`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Id_Account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id_Comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `Id_Film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `save_film`
--
ALTER TABLE `save_film`
  MODIFY `Id_Save` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
