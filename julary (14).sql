-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 06:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `julary`
--

-- --------------------------------------------------------

--
-- Table structure for table `addstock`
--

CREATE TABLE `addstock` (
  `id` int(50) NOT NULL,
  `gold_type` varchar(50) NOT NULL,
  `weight` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `discount` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL,
  `file` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addstock`
--

INSERT INTO `addstock` (`id`, `gold_type`, `weight`, `price`, `discount`, `description`, `file`) VALUES
(12, 'Necklace', '48', '5000', '10', 'This set consists of a necklace  Gold plated necklace, has a drawstring closure Gold plated, has a post and back closure', 'png-transparent-jewellery-necklace-earring-chain-bangle-tamilnadu-miscellaneous-ring-gold-thumbnail.png'),
(13, 'Bangles', '12', '5000', '10', 'Set of two gold-plated bangles, each has red stone-studded elegant design details, secured with slip-on closure', '3-2-jewellery-png-thumb.png'),
(24, 'Necklace', '19', '1000', '10', 'This Jewelry set consists of a necklace and a pair of earrings Gold-plated white and pink ruby stone-studded necklace, has  motifs, cut-outs and beade', '27410-7-indian-jewellery-file-thumb.png'),
(46, 'Diamond Necklace', '20', '22000', '10', 'This jewellery set consists of a necklace, a pair of   a maang tikka Silver Rhodium-plated choker necklace has white AD stone-studded and beaded detai', '1526.png'),
(55, 'Necklace1', '22', '500', '10', 'This Jewelry set consists of a necklace and a pair of earrings Gold-plated white and pink ruby stone-studded necklace, has motifs, cut-outs and beade', '27073-1-jewellery-necklace-transparent-background-thumb.png'),
(56, 'Bangles Stone', '20', '600', '10', 'Set Of 2 gold-plated green and red stone studded bangles has a slip on closur', 'images.jpg'),
(59, 'Thumba bangle', '12', '22000', '10', 'Set of two 24 CT gold-plated red stone-studded, has textured detailing', '4-2-jewellery-png-image-thumb.png'),
(60, 'Necklace', '20', '22000', '10', 'This jewellery set consists of a necklace, a pair of a maang tikka Silver Rhodium-plated choker necklace has white AD stone-studded and beaded detai', '1526.png'),
(67, 'Ring1', '20', '5000', '20', 'Silver-plated finger ring has white AD stone-studded details', 'pexels-superlens-photography-16438683.jpg'),
(69, 'chain', '25', '500', '10', ' chain with heart pendent, gold-plated with cubic zirconia Secured with lobster closure.', 'png-transparent-charms-pendants-necklace-earring-jewellery-clothing-accessories-necklace-gemstone-pendant-ring-thumbnail.png'),
(71, 'Necklace', '15', '500', '20', 'It is a pendent type necklace.', 'png-transparent-necklace-boucheron-pendant-jewellery-earring-necklace-gemstone-ring-bracelet-thumbnail.png'),
(72, 'Necklace2', '20', '500', '10', 'This set consists of a necklace Gold plated necklace, has a drawstring closure Gold plated, has a post and back closure', 'png-transparent-gold-colored-necklace-earring-necklace-gold-jewellery-wholesale-jewellery-necklace-pendant-ring-bracelet-thumbnail.png'),
(73, 'chain', '10', '600', '20', 'It is gold chain', 'png-transparent-earring-necklace-gold-jewellery-gold-chain-gemstone-pendant-ring-thumbnail.png'),
(75, 'Ring', '10', '600', '20', 'Sterling silver Rhodium-plated White stone studded finger ring', 'pexels-fox-998521.jpg'),
(77, 'Pendant', '10', '1000', '10', 'Gold-toned  pedant with chain Material and stone type: stainless steel with real stones Plating: gold-plated', 'png-transparent-locket-charms-pendants-necklace-jewellery-gold-necklace-pendant-heart-fashion-thumbnail.png'),
(78, 'Earrings', '5', '500', '10', 'Gold-toned dome shaped jhumkas Gold-plated', 'png-transparent-earring-pearl-tanishq-jewellery-jewellery-miscellaneous-gemstone-ring-thumbnail.png'),
(80, 'Earrings2', '20', '1000', '20', 'Gold-toned jhumkas, gold-plated, has cubic zirconia Secured with a post ', 's-l400.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('abc@gmail.com', 'Abc@1234'),
('admin123@gmail.com', 'Admin@123'),
('admin1234@gmail.com', 'Admin@1234'),
('admin5@gmail.com', 'Admin@56');

-- --------------------------------------------------------

--
-- Table structure for table `bangles`
--

CREATE TABLE `bangles` (
  `id` int(150) NOT NULL,
  `gold_type` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `weight` varchar(150) NOT NULL,
  `discount` varchar(150) NOT NULL,
  `file` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bangles`
--

INSERT INTO `bangles` (`id`, `gold_type`, `price`, `weight`, `discount`, `file`, `description`) VALUES
(30, 'Earrings', '800', '1', '10', 's-l400.jpg', 'gold'),
(31, 'Earings', '456', '2', '10', 'ear1.jpg', 'gold'),
(32, 'Earings', '700', '2', '10', 'ear2.jpg', 'gold'),
(33, 'Earings', '600', '2', '10', 'ear3.jpg', 'gold'),
(34, 'Earings', '680', '1', '10', 'ear4.jpg', 'Metal Metal Purity SILVER Metal Weight 60.67 g Gross Weight 60.67 g Metal Certification BIS Hallmark'),
(36, 'Earings', '1000', '2', '10', 'ear6.jpg', 'gold'),
(37, 'Earings', '456', '2', '10', 'ear6.jpg', 'gold'),
(38, 'Earings', '900', '2', '10', 'ear7.jpg', 'gold'),
(40, 'Earings', '478', '2', '10', 'ear8.jpg', 'gold'),
(41, 'Earings', '700', '2', '10', 'ear9.jpg', 'gold'),
(42, 'Earings', '567', '2', '10', 'ear10.jpg', 'gold'),
(43, 'Earings', '567', '2', '10', 'ear10.jpg', 'gold'),
(44, 'Earings', '567', '2', '10', 'ear10.jpg', 'gold');

-- --------------------------------------------------------

--
-- Table structure for table `diamond`
--

CREATE TABLE `diamond` (
  `id` int(50) NOT NULL,
  `gold_type` varchar(150) NOT NULL,
  `weight` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `discount` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL,
  `file` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diamond`
--

INSERT INTO `diamond` (`id`, `gold_type`, `weight`, `price`, `discount`, `description`, `file`) VALUES
(5, 'Bangles', '2', '680', '10', 'Metal Metal Purity SILVER Metal Weight 125.51 g Gross Weight 125.51 g Metal Certification BIS Hallmark', 'bangle1.jpg'),
(6, 'Bangles', '2', '5000', '10', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark', 'bangle2.jpg'),
(7, 'Bangles', '2', '700', '10', 'Metal Metal Purity SILVER Metal Weight 125.51 g Gross Weight 125.51 g Metal Certification BIS Hallmark', 'bangle4.jpg'),
(8, 'Bangles', '2', '4000', '10', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark', 'bangle3.jpg'),
(9, 'Bangles', '2', '680', '10', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark', 'bangle5.jpg'),
(10, 'Bangles', '2', '900', '10', 'Metal Metal Purity SILVER Metal Weight 125.51 g Gross Weight 125.51 g Metal Certification BIS Hallmark', 'bangle6.jpg'),
(11, 'Bangles', '2', '456', '10', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark', 'bangle7.jpg'),
(12, 'Bangles', '2', '789', '10', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark', 'bangle8.jpg'),
(13, 'Bangles', '1', '500', '10', 'Metal Metal Purity SILVER Metal Weight 125.51 g Gross Weight 125.51 g Metal Certification BIS Hallmark', 'bangle9.jpg'),
(14, 'Bangles', '2', '500', '20', 'Metal Metal Purity SILVER Metal Weight 125.51 g Gross Weight 125.51 g Metal Certification BIS Hallmark', 'bi1.jpg'),
(15, 'Bangles', '2', '4000', '10', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark', 'bi2.jpg'),
(16, 'Bangles', '2', '400', '20', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark', 'bi3.jpg'),
(18, 'Bangles', '2', '478', '10', 'Metal Metal Purity SILVER Metal Weight 60.67 g Gross Weight 60.67 g Metal Certification BIS Hallmark', 'bi5.jpg'),
(19, 'Bangles', '2', '456', '10', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark', 'bi6.jpg'),
(20, 'Bangles', '2', '460', '10', 'Metal Metal Purity SILVER Metal Weight 125.51 g Gross Weight 125.51 g Metal Certification BIS Hallmark', 'bi8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_id` varchar(150) NOT NULL,
  `phone_number` varchar(150) NOT NULL,
  `age` varchar(150) NOT NULL,
  `place` varchar(150) NOT NULL,
  `file` varchar(50) NOT NULL,
  `proof` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_name`, `emp_id`, `phone_number`, `age`, `place`, `file`, `proof`) VALUES
(1, 'Kishan', 'ES345', '2334444444', '26', 'Vijaypur', 'boy5.jpg', 'Adhar Card'),
(2, 'Karan', 'Es543', '9686253268', '25', 'Vijaypur', 'boy2.jpg', 'Adhar Card'),
(28, 'Kavya', 'Es123', '8734545667', '26', 'Vijaypur', 'women.jpg', 'Adhar card'),
(29, 'Karthik', 'Es3435', '9487346734', '25', 'Vijaypur', 'men.jpg', 'Adhar card'),
(30, 'Shravan', 'Es456', '9535935634', '26', 'Vijaypur', 'boy.jpg', 'Adhar card'),
(31, 'Shivu', 'Es457', '8904141659', '27', 'Vijaypur', 'boy2.jpg', 'Adhar card'),
(32, 'Laxmi', 'Es567', '8734545656', '26', 'Bangalore', 'girl6.jpg', 'Adhar card'),
(33, 'Ramya', 'Es567', '9535935612', '25', 'Bangalore', 'girl5.jpg', 'Marks card'),
(34, 'Karuna', 'Es678', '8734545667', '25', 'Bangalore', 'girl4.jpg', 'Marks card'),
(35, 'Karuna', 'Es678', '8734545667', '25', 'Bangalore', 'girl4.jpg', 'Marks card'),
(36, 'Basu', 'Es678', '8904141659', '25', 'Bangalore', 'boy6.jpg', 'Adhar card'),
(37, 'Basu', 'Es', '8904141659', '25', 'Bangalore', 'boy6.jpg', 'Adhar card'),
(38, 'Basu', 'Es', '8904141659', '25', 'Bangalore', 'boy6.jpg', 'Adhar card'),
(39, 'Basu', 'Es', '8904141659', '25', 'Bangalore', 'boy6.jpg', 'Adhar card'),
(40, 'Basu', 'Es', '8904141659', '25', 'Bangalore', 'boy6.jpg', 'Adhar card'),
(41, 'Basu', 'Es', '8904141659', '25', 'Bangalore', 'boy6.jpg', 'Adhar card');

-- --------------------------------------------------------

--
-- Table structure for table `gold`
--

CREATE TABLE `gold` (
  `id` int(50) NOT NULL,
  `gold_type` varchar(150) NOT NULL,
  `Weight` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `discount` varchar(150) NOT NULL,
  `file` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gold`
--

INSERT INTO `gold` (`id`, `gold_type`, `Weight`, `price`, `discount`, `file`, `description`) VALUES
(7, 'Ring', '2', '500', '10', 'ring1.jpg', 'Metal Metal Purity SILVER Metal Weight 125.51 g Gross Weight 125.51 g Metal Certification BIS Hallmark'),
(8, 'Ring', '2', '456', '10', 'ring2.jpg', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark'),
(9, 'Ring', '2', '456', '10', 'ring3.jpg', 'Metal Metal Purity SILVER Metal Weight 60.67 g Gross Weight 60.67 g Metal Certification BIS Hallmark'),
(10, 'Ring', '2', '456', '10', 'ring4.jpg', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark'),
(11, 'Ring', '2', '600', '10', 'ring6.jpg', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark'),
(12, 'Ring', '2', '1000', '10', 'ring5.jpg', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark'),
(13, 'Ring', '2', '456', '10', 'ring7.jpg', 'Metal Metal Purity SILVER Metal Weight 60.67 g Gross Weight 60.67 g Metal Certification BIS Hallmark'),
(15, 'Ring', '2', '677', '10', 'rin2.jpg', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark'),
(16, 'Ring', '2', '1000', '10', 'rin3.jpg', 'Metal Metal Purity SILVER Metal Weight 60.67 g Gross Weight 60.67 g Metal Certification BIS Hallmark'),
(17, 'Ring', '2', '4000', '10', 'rin4.jpg', 'Metal Metal Purity SILVER Metal Weight 60.67 g Gross Weight 60.67 g Metal Certification BIS Hallmark'),
(18, 'Ring', '2', '456', '10', 'rin6.jpg', 'green'),
(19, 'Ring', '2', '7000', '10', 'rin7.jpg', 'green'),
(20, 'Ring', '2', '4000', '10', 'rin8.png', 'green');

-- --------------------------------------------------------

--
-- Table structure for table `jewelry_category`
--

CREATE TABLE `jewelry_category` (
  `id` int(50) NOT NULL,
  `jewelry_type` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `units` varchar(150) NOT NULL,
  `division` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jewelry_category`
--

INSERT INTO `jewelry_category` (`id`, `jewelry_type`, `file`, `units`, `division`, `description`) VALUES
(1, 'Ring', '3-2-jewellery-png-thumb.png', '4', '4', 'Blue'),
(2, 'Ring', '3-2-jewellery-png-thumb.png', '4', '8', 'green'),
(3, 'Pendent', '27410-7-indian-jewellery-file-thumb.png', '4', '8', 'green'),
(4, 'Pendent', '27410-7-indian-jewellery-file-thumb.png', '4', '8', 'green'),
(5, 'Earings', '27410-7-indian-jewellery-file-thumb.png', '4', '8', 'green'),
(6, 'Bangale', '3-2-jewellery-png-thumb.png', '4', '8', 'Blue'),
(7, 'Bangale', '3-2-jewellery-png-thumb.png', '4', '4', 'green'),
(8, 'Pendent', '27410-7-indian-jewellery-file-thumb.png', '4', '8', 'Blue'),
(9, 'Pendent', '27410-7-indian-jewellery-file-thumb.png', '4', '8', 'Blue'),
(10, 'Pendent', '27410-7-indian-jewellery-file-thumb.png', '4', '8', 'Blue'),
(11, 'Earings', '27410-7-indian-jewellery-file-thumb.png', '4', '8', 'Blue'),
(12, 'Pendent', '27410-7-indian-jewellery-file-thumb.png', '4', '8', 'Blue'),
(13, 'Chine', '27410-7-indian-jewellery-file-thumb.png', '4', '4', 'green'),
(14, 'Chine', '27410-7-indian-jewellery-file-thumb.png', '4', '4', 'green'),
(15, 'Pendent', '3-2-jewellery-png-thumb.png', '4', '8', 'green'),
(16, 'Ring', '27410-7-indian-jewellery-file-thumb.png', '4', '8', 'green'),
(17, 'Ring', '27410-7-indian-jewellery-file-thumb.png', '4', '8', 'green'),
(18, 'Necklace', '3-2-jewellery-png-thumb.png 	', '4', '8', 'Blue'),
(19, 'Ring', '3-2-jewellery-png-thumb.png', '4', '8', 'Blue'),
(20, 'Ring', '3-2-jewellery-png-thumb.png', '4', '8', 'Blue'),
(21, 'Bracelet', '3-2-jewellery-png-thumb.png', '4', '4', 'Blue'),
(22, 'Necklace', '3-2-jewellery-png-thumb.png', '4', '8', 'Blue'),
(23, 'Necklace', '3-2-jewellery-png-thumb.png', '4', '8', 'Blue'),
(24, 'Bracelet', '3-2-jewellery-png-thumb.png', '4', '4', 'Blue'),
(25, 'Bracelet', '3-2-jewellery-png-thumb.png', '4', '4', 'Blue');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gold_type` varchar(50) NOT NULL,
  `payment_details` varchar(150) NOT NULL,
  `phonepay_number` varchar(150) NOT NULL,
  `credit_card_number` varchar(150) NOT NULL,
  `paytm_number` varchar(150) NOT NULL,
  `date` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `discount` varchar(150) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `name`, `gold_type`, `payment_details`, `phonepay_number`, `credit_card_number`, `paytm_number`, `date`, `price`, `weight`, `discount`, `total`) VALUES
(1, 'Kishan', 'Ring', 'KA3567777777777', '', '', '', '', '', '', '', ''),
(2, 'Rakshi', 'Ring', 'KA3567777777777', '', '', '', '', '', '', '', ''),
(3, 'Thrivikram', 'Bangale', '04546576768', '', '', '', '', '', '22', '', ''),
(4, 'Rakshi', 'Ring', 'KA3567777777777', '', '', '', '', '', '23', '', ''),
(5, 'Kishan', 'Earings', '045423843546', '', '', '', '', '', '10', '', ''),
(6, 'Rakshi', 'Pendent', '5657677687878', '', '', '', '', '', '22', '', ''),
(7, 'Rakshi', 'Pendent', '5657677687878', '', '', '', '', '', '22', '', ''),
(8, 'Kishan', 'Ring', '04546576768', '', '', '', '', '', '22', '', ''),
(9, 'Rakshi', 'Pendent', '5657677687878', '', '', '', '', '', '22', '', ''),
(10, 'Admin', 'Ring', '5657677687878', '', '', '', '', '', '10', '', ''),
(11, 'Admin', 'Ring', '04546576768', '', '', '', '', '', '22', '', ''),
(12, 'Kishan', 'Earings', '04546576768', '', '', '', '', '', '22', '', ''),
(13, 'Kishan', 'Earings', '04546576768', '', '', '', '', '', '22', '', ''),
(14, 'Kishan', 'Earings', '04546576768', '', '', '', '', '', '22', '', ''),
(15, 'Rakshi', 'Ring', '045423843546', '', '', '', '', '', '22', '', ''),
(16, 'Thrivikram', 'Pendent', '045423843546', '', '', '', '', '', '23', '', ''),
(17, 'Kishan', 'Earings', '5657677687878', '', '', '', '', '', '23', '', ''),
(18, 'Rakshi', 'Earings', '5657677687878', '', '', '', '', '', '22', '', ''),
(19, 'Kishan', 'Earrings', '045423843546', '', '', '', '', '', '22', '', ''),
(21, 'Kishan', 'Earrings', '045423843546', '', '', '', '', '', '22', '', ''),
(22, 'Kishan', 'Earings', '045423843546', '', '', '', '', '500', '22', '10', '400'),
(23, 'Kishan', 'Earings', '045423843546', '', '', '', '', '500', '22', '10', '400'),
(24, 'Kishan', 'Earings', '045423843546', '', '', '', '', '500', '22', '10', '400'),
(25, 'Kishan', 'Earings', '045423843546', '', '', '', '', '500', '22', '10', '400'),
(26, 'Kishan', 'Earings', '045423843546', '', '', '', '', '500', '22', '10', '110500'),
(27, 'Thrivikram', 'Bangle', '5657677687878', '', '', '', '', '6000', '22', '10', '5000'),
(28, 'Rakshi', 'Bangle', '5657677687878', '', '', '', '', '600', '22', '10', '500'),
(29, 'Kishan', 'Necklace', '5657677687878', '', '', '', '', '600', '22', '10', '500'),
(30, 'Kishan', 'Ring', '04546576768', '', '', '', '', '6000', '22', '10', '5000'),
(31, 'Kishan', 'Earrings', '045423843546', '', '', '', '', '6000', '22', '10', '540.00'),
(32, 'Kishan', 'Earrings', '045423843546', '', '', '', '', '6000', '22', '10', '540.00'),
(33, 'Rakshi', 'Earrings', '5657677687878', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(34, 'Rakshi', 'Earrings', '5657677687878', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(35, 'Rakshi', 'Necklace', '04546576768', '', '', '', '', '6000', '2', '10', '5000'),
(36, 'Rakshi', 'Necklace', '04546576768', '', '', '', '', '6000', '2', '10', '5000'),
(37, 'Rakshi', 'Necklace', '04546576768', '', '', '', '', '6000', '2', '10', '5000'),
(38, 'Rakshi', 'Necklace', '5657677687878', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(39, 'Kavya', 'Bangle', '5657677687878', '', '', '', '6/22/2023', '5000', '2', '10', '4000'),
(40, 'Thrivikram', 'Necklace', '5657677687878', '', '', '', '6/22/2023', '2000', '2', '10', '1500'),
(41, 'Kishan', 'Necklace', '5657677687878', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(42, 'Rakshi', 'Necklace', '5657677687878', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(43, 'Rakshi', 'Necklace', '5657677687878', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(44, 'Rakshi', 'Necklace', '5657677687878', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(45, 'Rakshi', 'Necklace', '5657677687878', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(46, 'Rakshi', 'Necklace', '5657677687878', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(47, 'Rakshi', 'Necklace', '5657677687878', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(48, 'Rakshi', 'Necklace', '5657677687878', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(49, 'Rakshi', 'Necklace', '5657677687878', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(50, 'Rakshi', 'Necklace', '5657677687878', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(51, 'Thrivikram', 'Necklace', '04546576768', '', '', '', '', '6000', '2', '10', '5000'),
(52, 'Kishan', 'Ring', '04546576768', '', '', '', '', '6000', '2', '10', '5000'),
(53, 'Kishan', 'Ring', '04546576768', '', '', '', '', '6000', '2', '10', '5000'),
(54, 'Rakshi', 'Ring', '78899676', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(55, 'Rakshi', 'Ring', '78899676', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(56, 'Rakshi', 'Ring', '78899676', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(57, 'Thrivikram', 'Pendant', '78899676', '', '', '', '6/22/2023', '5000', '2', '10', '4000'),
(58, 'Kishan', 'Pendant', '04546576768', '', '', '', '6/22/2024', '6000', '2', '10', '5000'),
(59, 'Rakshi', 'Ring', '78899676', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(60, 'Kishan', 'Ring1', '56576776878', '', '', '', '', '6000', '2', '10', '5000'),
(61, 'Rakshi', 'Chine', '12222333333', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(62, 'Thrivikram', 'Chine', 'Credit Card', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(63, 'Rakshi', 'Chine', 'Credit Card', '', '', '', '6/22/2023', '6000', '2', '10', '5000'),
(64, 'Rakshi', 'Chine', 'Credit Card', '', '', '', '4333333333', '6000', '2', '10', '5000'),
(65, 'Rakshi', 'Chine', 'Credit Card', '', '43546546757', '', '6/22/2023', '6000', '2', '10', '5000'),
(66, 'Rakshi', 'Chine', 'Credit Card', '', '43546546757', '', '6/22/2023', '6000', '2', '10', '5000'),
(67, 'Rakshi', 'Chine', 'Credit Card', '', '43546546757', '', '6/22/2023', '6000', '2', '10', '5000'),
(68, 'Admin', 'Chine', 'Credit Card', '', '43546546757', '', '6/22/2023', '6000', '2', '10', '5000'),
(69, 'Admin', 'Ring', 'Credit Card', '', '43546546757', '', '6/22/2023', '6000', '2', '10', '5000'),
(70, 'Admin', 'Ring', 'Credit Card', '', '43546546757', '', '6/22/2023', '6000', '2', '10', '5000'),
(71, 'Admin', 'Ring', 'Credit Card', '', '43546546757', '', '6/22/2023', '6000', '2', '10', '5000'),
(72, 'Admin', 'Ring', 'Credit Card', '', '43546546757', '', '6/22/2023', '6000', '2', '10', '5000'),
(73, 'Kishan', 'Ring', 'paytm', '', '43546546757', '', '2023-07-14', '5000', '2', '10', '4000'),
(74, 'Kishan', 'Ring', 'paytm', '', '43546546757', '', '2023-07-14', '5000', '2', '10', '4000'),
(75, 'Kishan', 'Ring', 'paytm', '', '43546546757', '', '2023-07-14', '5000', '2', '10', '4000'),
(76, 'Rakshi', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-13', '10000', '2', '10', '5000'),
(77, 'Rakshi', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-13', '10000', '2', '10', '5000'),
(78, 'Rakshi', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-13', '10000', '2', '10', '5000'),
(79, 'Rakshi', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-13', '10000', '2', '10', '5000'),
(80, 'Rakshi', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-13', '10000', '2', '10', '5000'),
(81, 'Thrivikram', 'Bangles', 'paytm', '', '43546546757', '', '2023-06-30', '2000', '2', '10', '1500'),
(82, 'Rakshi', 'Necklace', 'paytm', '', '43546546757', '', '2023-06-30', '6000', '2', '10', '5000'),
(83, 'Rakshi', 'Necklace', 'paytm', '', '43546546757', '', '2023-06-30', '6000', '2', '10', '5000'),
(84, 'Rakshi', 'Necklace', 'paytm', '', '43546546757', '', '2023-06-30', '6000', '2', '10', '5000'),
(85, 'Rakshi', 'Necklace', 'paytm', '', '43546546757', '', '2023-06-30', '6000', '2', '10', '5000'),
(86, 'Rakshi', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-19', '6000', '2', '10', '5000'),
(87, 'Rakshi', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-19', '6000', '2', '10', '5000'),
(88, 'Thrivikram', 'Necklace', 'paytm', '', '43546546757', '', '2023-07-26', '5000', '2', '10', '4000'),
(89, 'Rakshi', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-25', '500', '2', '10', '400'),
(90, 'Rakshi', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-25', '500', '2', '10', '400'),
(91, 'Rakshi', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-25', '500', '2', '10', '400'),
(92, 'Rakshi', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-25', '500', '2', '10', '400'),
(93, 'Rakshi', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-25', '500', '2', '10', '400'),
(94, 'Rakshi', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-25', '500', '2', '10', '400'),
(95, 'Rakshi', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-04', '500', '2', '10', '400'),
(96, 'Kishan', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-13', '5000', '19', '10', '4000'),
(97, 'Admin', 'Ring1', 'Credit Card', '', '43546546757', '', '2023-07-05', '1000', '3', '10', '900'),
(98, 'Rakshi', 'Bangles', 'Credit Card', '', '43546546757', '', '2023-07-26', '5000', '23', '10', '4000'),
(99, 'Thrivikram', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-12', '5000', '11', '10', '4000'),
(100, 'Thrivikram', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-12', '5000', '11', '10', '4000'),
(101, 'Admin', 'Ring', 'Credit Card', '', '43546546757', '', '2023-07-20', '6000', '2', '10', '5000'),
(102, 'Thrivikram', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-05', '6000', '11', '10', '5000'),
(103, 'Kishan', 'Bangles', 'Credit Card', '', '43546546757', '', '2023-07-13', '5000', '23', '10', '4000'),
(104, 'Thrivikram', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-11', '500', '13', '10', '450.00'),
(105, 'Thrivikram', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-11', '500', '13', '10', '450.00'),
(106, 'Thrivikram', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-11', '500', '13', '10', '450.00'),
(107, 'Thrivikram', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-11', '500', '13', '10', '450.00'),
(108, 'Thrivikram', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-11', '500', '13', '10', '450.00'),
(109, 'Thrivikram', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-11', '500', '13', '10', '450.00'),
(110, 'Thrivikram', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-11', '500', '13', '10', '450.00'),
(111, 'Thrivikram', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-11', '500', '13', '10', '450.00'),
(112, 'Thrivikram', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-11', '500', '13', '10', '450.00'),
(113, 'Thrivikram', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-11', '500', '13', '10', '450.00'),
(114, 'Kishan', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-05', '500', '13', '10', '400'),
(115, 'Kishan', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-05', '500', '13', '10', '400'),
(116, 'Kishan', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-05', '500', '13', '10', '400'),
(117, 'Kishan', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-13', '5000', '2', '10', '4000'),
(118, 'Kishan', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-13', '5000', '2', '10', '4000'),
(119, 'Varun kumar', 'Ring', 'Credit Card', '', '43546546757', '', '2023-07-05', '500', '11', '10', '450.00'),
(120, 'Varun kumar', 'Ring', 'Credit Card', '', '43546546757', '', '2023-07-05', '500', '11', '10', '450.00'),
(121, 'Varun kumar', 'Ring', 'Credit Card', '', '43546546757', '', '2023-07-05', '500', '11', '10', '450.00'),
(122, 'Kishan', 'Chine', 'Credit Card', '', '43546546757', '', '2023-06-27', '6000', '11', '10', '5000'),
(123, 'Kishan', 'Chine', 'Credit Card', '', '43546546757', '', '2023-06-27', '6000', '11', '10', '5000'),
(124, 'Kishan', 'Chine', 'Credit Card', '', '43546546757', '', '2023-06-27', '6000', '11', '10', '5000'),
(125, 'Kishan', 'Ring1', 'Credit Card', '', '43546546757', '', '2023-07-12', '5000', '2', '10', '5000'),
(126, 'Kishan', 'Ring1', 'paytm', '', '43546546757', '', '2023-07-05', '500', '2', '10', '410.40'),
(127, 'Kishan', 'Ring1', 'paytm', '', '43546546757', '', '2023-07-05', '500', '2', '10', '410.40'),
(128, 'Kishan', 'Ring1', 'paytm', '', '43546546757', '', '2023-07-05', '500', '2', '10', '410.40'),
(129, 'Kishan', 'Ring1', 'paytm', '', '43546546757', '', '2023-07-05', '500', '2', '10', '410.40'),
(130, 'Kishan', 'Ring1', 'paytm', '', '43546546757', '', '2023-07-05', '500', '2', '10', '410.40'),
(131, 'Admin', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-05', '5000', '2', '10', '4000'),
(132, 'Admin', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-05', '5000', '2', '10', '4000'),
(133, 'Admin', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-05', '5000', '2', '10', '4000'),
(134, 'Admin', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-05', '5000', '2', '10', '4000'),
(135, 'Rakshi', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(136, 'Rakshi', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-18', '500', '11', '10', '400'),
(137, 'Rakshi', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-18', '500', '11', '10', '400'),
(138, 'Rakshi', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-18', '500', '11', '10', '400'),
(139, 'Thrivikram', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-04', '5000', '2', '10', '4000'),
(140, 'Thrivikram', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-04', '5000', '2', '10', '4000'),
(141, 'Karthik Gow', 'Bangles', 'Credit Card', '', '43546546757', '', '2023-07-27', '6000', '2', '10', '5000'),
(142, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-26', '500', '2', '10', '400'),
(143, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-26', '500', '2', '10', '400'),
(144, 'Kishan', 'Bangles', 'Credit Card', '', '43546546757', '', '2023-07-19', '6000', '2', '10', '5000'),
(145, 'Kishan', 'Bangles', 'Credit Card', '', '43546546757', '', '2023-07-19', '6000', '2', '10', '5000'),
(146, 'Rakshi', 'Bangles', 'paytm', '', '43546546757', '', '2023-07-26', '500', '2', '10', '400'),
(147, 'Rakshi', 'Bangles', 'paytm', '', '43546546757', '', '2023-07-26', '500', '2', '10', '400'),
(148, 'Rakshi', 'Bangles', 'paytm', '', '43546546757', '', '2023-07-26', '500', '2', '10', '400'),
(149, 'Rakshi', 'Bangles', 'paytm', '', '43546546757', '', '2023-07-26', '500', '2', '10', '400'),
(150, 'Admin', 'Earrings', 'Credit Card', '', '43546546757', '', '2023-07-19', '500', '1', '10', '400'),
(151, 'Admin', 'Earrings', 'Credit Card', '', '43546546757', '', '2023-07-19', '500', '1', '10', '400'),
(152, 'Admin', 'Earrings', 'Credit Card', '', '43546546757', '', '2023-07-19', '500', '1', '10', '400'),
(153, 'Admin', 'Earrings', 'Credit Card', '', '43546546757', '', '2023-07-19', '500', '1', '10', '400'),
(154, 'Admin', 'Bangles', 'Credit Card', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(155, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(156, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(157, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(158, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(159, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(160, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(161, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(162, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(163, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(164, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(165, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(166, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(167, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(168, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(169, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(170, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(171, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(172, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(173, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(174, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(175, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(176, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(177, 'Kishan', 'Chine', 'paytm', '', '43546546757', '', '2023-07-19', '500', '2', '10', '400'),
(178, 'Admin', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-06', '6000', '2', '10', '29999400.00'),
(179, 'Kavya', 'Pendant', 'Credit Card', '', '43546546757', '', '2023-07-18', '6000', '2', '10', '11400.00'),
(180, 'Kishan', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-04', '6000', '2', '10', '6000.10'),
(181, 'Rakshi', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-10', '6000', '2', '10', '11999.90'),
(182, 'Kishan', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-10', '6000', '1', '10', '5999.90'),
(183, 'Admin', 'Chine', 'Credit Card', '', '43546546757', '', '2023-07-10', '6000', '1', '10', '5400.00'),
(184, 'Kalpita', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-11', '5000', '2', '10', '9500.00'),
(185, 'Rakshi', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-10', '5000', '2', '10', '4500.00'),
(186, 'Kavya', 'Bangles', 'Credit Card', '', '43546546757', '', '2023-07-17', '50000', '2', '10', '95000.00'),
(187, 'Divyadiplom', 'Bangles', 'Credit Card', '', '43546546757', '', '2023-07-17', '500', '1', '10', '450.00'),
(188, 'Divyadiplom', 'Bangles', 'Credit Card', '', '43546546757', '', '2023-07-17', '500', '1', '10', '450.00'),
(189, 'Divyadiplom', 'Bangles', 'Credit Card', '', '43546546757', '', '2023-07-17', '500', '1', '10', '450.00'),
(190, 'Rakshi', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-18', '5000', '2', '10', '9500.00'),
(191, 'Kishan', 'Necklace', 'Credit Card', '', '43546546757', '', '2023-07-18', '500', '2', '10', '950.00'),
(192, 'Kishan', 'Bangles', 'Credit Card', '', '43546546757', '', '2023-06-26', '500', '2', '10', '950.00'),
(193, 'Kishan', 'Necklace', 'Credit Card', '', '5444444444444444', '', '2023-07-19', '500', '2', '10', '950.00'),
(194, 'Kishan', 'Ring', 'paytm', '', '', '5656565656', '2023-07-19', '500', '2', '10', '950.00'),
(195, 'Rakshi', 'Ring', 'Credit Card', '', '5444444444444444', '', '2023-07-19', '500', '2', '10', '950.00'),
(196, 'Rakshi', 'Ring', 'Credit Card', '', '5444444444444444', '', '2023-07-19', '500', '2', '10', '950.00'),
(197, 'Rakshi', 'Ring', 'Credit Card', '', '5444444444444444', '', '2023-07-19', '500', '2', '10', '950.00'),
(198, 'Rakshi', 'Ring', 'Credit Card', '', '5444444444444444', '', '2023-07-19', '500', '2', '10', '950.00'),
(199, 'Rakshi', 'Ring', 'Credit Card', '', '5444444444444444', '', '2023-07-19', '500', '2', '10', '950.00'),
(200, 'Kishan', 'Necklace', 'Credit Card', '', '5444444444444444', '', '2023-07-21', '6000', '2', '10', '11400.00'),
(201, 'Kishan', 'Necklace', 'paytm', '', '5444444444444444', '5656565656', '2023-07-21', '6000', '2', '10', '11400.00'),
(202, 'Admin', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(203, 'Admin', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(204, 'Admin', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(205, 'Admin', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(206, 'Admin', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '6000', '2', '10', '11400.00'),
(207, 'Admin', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '6000', '2', '10', '11400.00'),
(208, 'Admin', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '6000', '2', '10', '11400.00'),
(209, 'Admin', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '6000', '2', '10', '11400.00'),
(210, 'Admin', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '6000', '2', '10', '11400.00'),
(211, 'Admin', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '6000', '2', '10', '11400.00'),
(212, 'Admin', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '6000', '2', '10', '11400.00'),
(213, 'Admin', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '6000', '2', '10', '11400.00'),
(214, 'Admin', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '6000', '2', '10', '11400.00'),
(215, 'Rakshi', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(216, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(217, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(218, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(219, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(220, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(221, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(222, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(223, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(224, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(225, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(226, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(227, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(228, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(229, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(230, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(231, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(232, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(233, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(234, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(235, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(236, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(237, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(238, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(239, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(240, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(241, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(242, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(243, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(244, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(245, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(246, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(247, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(248, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(249, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(250, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(251, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '950.00'),
(252, 'Admin', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '6000', '2', '10', '11400.00'),
(253, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '6000', '2', '10', '11400.00'),
(254, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '6000', '2', '10', '11400.00'),
(255, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '6000', '2', '10', '11400.00'),
(256, 'Kishan', 'Necklace', 'paytm', '', '', '5656565656', '2023-07-21', '500', '1', '10', '450.00'),
(257, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '1', '10', '450.00'),
(258, 'Rakshi', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '1', '10', '450.00'),
(259, 'Rakshi', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '1', '10', '450.00'),
(260, 'Kishan', 'Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-21', '500', '2', '10', '450.00'),
(261, 'Admin', 'Bangles', 'Credit Card', '', '4343212143546545', '', '2023-07-22', '6000', '2', '10', '5400.00'),
(262, 'Admin', 'Ring', 'Credit Card', '', '4343212143546545', '', '2023-07-24', '6000', '2', '10', '5400.00'),
(263, 'Rakshi', '', 'Credit Card', '', '4343212143546545', '', '2023-07-24', '', '20', '20', ''),
(264, 'Rakshi', '', 'Credit Card', '', '4343212143546545', '', '2023-07-24', '', '20', '20', ''),
(265, 'Rakshi', '', 'Credit Card', '', '4343212143546545', '', '2023-07-24', '', '20', '20', ''),
(266, 'Admin', '', 'Credit Card', '', '4343212143546545', '', '2023-07-24', '', '20', '20', ''),
(267, 'Admin', '', 'Credit Card', '', '4343212143546545', '', '2023-07-24', '', '20', '20', ''),
(268, 'Kishan', '', 'Credit Card', '', '4343212143546545', '', '2023-07-24', '', '20', '20', '800.00'),
(269, 'Kishan', '', 'Credit Card', '', '4343212143546545', '', '2023-07-24', '', '20', '20', '800.00'),
(270, 'kishan', 'ring', 'paytm', '', '', '56577777777777777777', '7/24/2023', '600', '2', '1', '600'),
(271, 'Kishan', '', 'Credit Card', '', '4343212143546545', '', '2023-07-25', '', '20', '20', '800.00'),
(272, 'Kishan', 'Diamond Necklace', 'Credit Card', '', '4343212143546545', '', '2023-07-26', '22000', '20', '10', '19800.00');

-- --------------------------------------------------------

--
-- Table structure for table `purchase1`
--

CREATE TABLE `purchase1` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `jewelry_type` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `account_number` varchar(11) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `cost` varchar(11) NOT NULL,
  `weight` varchar(11) NOT NULL,
  `discount` varchar(11) NOT NULL,
  `total` varchar(11) NOT NULL,
  `payment_mode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(50) NOT NULL,
  `order_number` varchar(150) NOT NULL,
  `purchase_date` varchar(150) NOT NULL,
  `customber_name` varchar(150) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `jewelry_type` varchar(150) NOT NULL,
  `price` varchar(50) NOT NULL,
  `weight` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `order_number`, `purchase_date`, `customber_name`, `phone_number`, `address`, `jewelry_type`, `price`, `weight`) VALUES
(1, '222', '6/15/2023', 'Laxmi', '8734545667', 'vijaypur', 'Ring', '1000', '10'),
(2, '344', '6/15/2023', 'Laxmi', '2334444444', 'vijaypur', 'Earings', '1000', '10'),
(3, '222', '6/15/2023', 'Laxmi', '8734545667', 'vijaypur', 'Earings', '100', '22'),
(4, '344', '6/15/2023', 'Laxmi', '8734545667', 'vijaypur', 'Earings', '680', '22'),
(5, '344', '6/15/2023', 'Laxmi', '8734545667', 'vijaypur', 'Earings', '680', '22'),
(6, '222', '6/15/2023', 'Laxmi', '8734545667', 'vijaypur', 'Earings', '100', '22'),
(7, '344', '6/15/2023', 'Laxmi', '8734545667', 'vijaypur', 'Ring', '100', '23'),
(8, '344', '6/15/2023', 'Laxmi', '8734545667', 'vijaypur', 'Ring', '680', '10'),
(9, '344', '6/15/2023', 'Laxmi', '8734545667', 'vijaypur', 'Ring', '680', '10'),
(10, '344', '6/15/2023', 'Laxmi', '8734545667', 'vijaypur', 'Ring', '680', '10'),
(11, '344', '6/15/2023', 'Laxmi', '8734545667', 'vijaypur', 'Ring', '680', '10'),
(12, '344', '6/15/2023', 'Laxmi', '8734545667', 'vijaypur', 'Ring', '680', '10'),
(13, '344', '6/15/2023', 'Laxmi', '8734545667', 'vijaypur', 'Ring', '680', '10'),
(14, '344', '6/15/2023', 'Laxmi', '8734545667', 'vijaypur', 'Ring', '680', '10'),
(15, '344', '6/15/2023', 'Laxmi', '8734545667', 'vijaypur', 'Ring', '680', '10');

-- --------------------------------------------------------

--
-- Table structure for table `silver`
--

CREATE TABLE `silver` (
  `id` int(50) NOT NULL,
  `gold_type` varchar(150) NOT NULL,
  `weight` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `discount` varchar(150) NOT NULL,
  `file` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `silver`
--

INSERT INTO `silver` (`id`, `gold_type`, `weight`, `price`, `discount`, `file`, `description`) VALUES
(6, 'Necklaces', '2', '1000', '10', 'necklace1.jpg', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark'),
(7, 'Necklace', '2', '680', '10', 'necklace2.jpg', 'Metal Metal Purity SILVER Metal Weight 125.51 g Gross Weight 125.51 g Metal Certification BIS Hallmark'),
(10, 'Necklace', '2', '100', '10', 'necklace5.jpg', 'Metal Metal Purity SILVER Metal Weight 125.51 g Gross Weight 125.51 g Metal Certification BIS Hallmark'),
(11, 'Necklace', '2', '456', '10', 'neck6.jpg', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark'),
(12, 'Necklace', '2', '2000', '10', 'necklace8.jpg', 'Metal Metal Purity SILVER Metal Weight 125.51 g Gross Weight 125.51 g Metal Certification BIS Hallmark'),
(13, 'Necklace', '2', '7000', '10', 'necklace7.jpg', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark'),
(14, 'Necklace', '2', '1000', '20', 'necklacek.jpg', 'green'),
(15, 'Necklace', '2', '4000', '20', 'necklacek1.jpg', 'Metal Metal Purity SILVER Metal Weight 60.67 g Gross Weight 60.67 g Metal Certification BIS Hallmark'),
(16, 'Necklace', '2', '4000', '20', 'necklacek4.jpg', 'Metal Metal Purity SILVER Metal Weight 60.67 g Gross Weight 60.67 g Metal Certification BIS Hallmark'),
(17, 'Necklace', '2', '4000', '10', 'necklacek4.jpg', 'green'),
(18, 'Necklace', '2', '456', '10', 'necklacek6.jpg', 'Metal Metal Purity SILVER Metal Weight 125.51 g Gross Weight 125.51 g Metal Certification BIS Hallmark'),
(19, 'Necklace', '2', '456', '10', 'necklacek7.jpg', 'Metal Metal Purity SILVER Metal Weight 125.51 g Gross Weight 125.51 g Metal Certification BIS Hallmark'),
(20, 'Necklace', '2', '456', '10', 'necklacek8.jpg', 'Metal Metal Purity SILVER Metal Weight 122.62 g Gross Weight 122.62 g Metal Certification BIS Hallmark'),
(21, 'Necklace', '2', '456', '20', 'necklacek9.jpg', 'green'),
(22, 'Necklace', '2', '800', '10', 'necklacek10.jpg', 'green'),
(23, 'Necklace', '2', '700', '10', 'necklacek11.jpg', 'Blue'),
(24, 'Necklace', '2', '5000', '10', 'neck12.jpg', 'green'),
(25, 'Necklace', '2', '456', '10', 'neck13.jpg', 'Metal Metal Purity SILVER Metal Weight 125.51 g Gross Weight 125.51 g Metal Certification BIS Hallmark'),
(26, 'Necklace', '2', '456', '10', 'neck14.jpg', 'green'),
(27, 'Necklace', '2', '4000', '10', 'neck14.jpg', 'Metal Metal Purity SILVER Metal Weight 125.51 g Gross Weight 125.51 g Metal Certification BIS Hallmark'),
(28, 'Necklace', '2', '600', '10', 'neck15.jpg', 'Metal Metal Purity SILVER Metal Weight 125.51 g Gross Weight 125.51 g Metal Certification BIS Hallmark');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'zdfsa@dgdfgd.com', 'Abc@12345'),
(2, 'Admin', 'zdfsa@dgdfgd.com', 'Abc@12345'),
(3, 'Admin', 'zdfsa@dgdfgd.com', 'Abc@12345'),
(4, 'Admin', 'abc@gmail.com', 'Abc@12345'),
(5, 'Admin', 'admin123@gmail.com', 'Admin@123'),
(6, 'Admin', 'aff@gmail.com', 'Admin@123'),
(7, 'Admin', 'samyamaiyer@gmail.com', 'Saraswati@5678'),
(8, 'Admin', 'kiranraj@gmail.com', 'Abc@12345'),
(9, 'Admin', 'abc@gmail.com', 'Admin@123'),
(10, 'Admin', 'kiranraj@gmail.com', 'Abc@12345'),
(11, 'Admin', 'kiranraj@gmail.com', 'Abc@12345'),
(12, 'Admin', 'admin@gmail.com', 'Admin@1234'),
(13, 'Admin', 'admin@gmail.com', 'Admin@1234'),
(14, 'Admin', 'admin@gmail.com', 'Admin@1234'),
(15, 'Admin', 'admin@gmail.com', 'Admin@1234'),
(16, 'Admin', 'admin@gmail.com', 'Admin@1234'),
(17, 'Admin', 'admin@gmail.com', 'Admin@1234'),
(18, 'Admin', 'admin@gmail.com', 'Admin@1234'),
(19, 'Admin', 'admin@gmail.com', 'Admin@1234'),
(20, 'Kishan', 'kavya@gmail.com', 'Kavya@123'),
(21, 'Rakshi', 'ravi@gamil.com', 'Ravi@123'),
(22, 'Rakshi', 'ravi@gamil.com', 'Ravi@123'),
(23, 'Kishan', 'admin@gmail.com', 'Admin@1234'),
(24, 'Kishan', 'admin123@gmail.com', 'Admin@123'),
(25, 'Thrivikram', 'admin123@gmail.com', 'Admin@123'),
(26, 'Kishan', 'admin123@gmail.com', 'Admin@123'),
(27, 'Kishan', 'admin123@gmail.com', 'Admin@123'),
(28, 'Kishan', 'admin123@gmail.com', 'Admin@123'),
(29, 'Kishan', 'admin123@gmail.com', 'Admin@123'),
(30, 'Rakshi', 'admin123@gmail.com', 'Admin@123'),
(31, 'Rakshi', 'admin123@gmail.com', 'Admin@123'),
(32, 'Rakshi', 'admin123@gmail.com', 'Admin@123'),
(33, 'Rakshi', 'admin123@gmail.com', 'Admin@123'),
(34, 'Rakshi', 'admin123@gmail.com', 'Admin@123'),
(35, 'Rakshi', 'admin123@gmail.com', 'Admin@123'),
(36, 'Rakshi', 'admin123@gmail.com', 'Admin@123'),
(37, 'Rakshi', 'admin123@gmail.com', 'Admin@123'),
(38, 'Rakshi', 'admin123@gmail.com', 'Admin@123'),
(39, 'Kishan', 'admin123@gmail.com', 'Admin@123'),
(40, 'Kishan', 'admin123@gmail.com', 'Admin@123'),
(41, 'Kishan', 'admin123@gmail.com', 'Admin@123'),
(42, 'Kishan', 'admin123@gmail.com', 'Admin@123'),
(43, 'Kishan', 'admin123@gmail.com', 'Admin@123'),
(44, 'Kishan', 'admin123@gmail.com', 'Admin@123'),
(45, 'Kishan', 'admin123@gmail.com', 'Admin@123'),
(46, 'Kishan', 'admin123@gmail.com', 'Admin@123'),
(47, 'Kishan', 'admin123@gmail.com', 'Admin@123'),
(48, 'Kishan', 'admin123@gmail.com', 'Admin@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addstock`
--
ALTER TABLE `addstock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bangles`
--
ALTER TABLE `bangles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diamond`
--
ALTER TABLE `diamond`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gold`
--
ALTER TABLE `gold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jewelry_category`
--
ALTER TABLE `jewelry_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase1`
--
ALTER TABLE `purchase1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `silver`
--
ALTER TABLE `silver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addstock`
--
ALTER TABLE `addstock`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `bangles`
--
ALTER TABLE `bangles`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `diamond`
--
ALTER TABLE `diamond`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `gold`
--
ALTER TABLE `gold`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `jewelry_category`
--
ALTER TABLE `jewelry_category`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT for table `purchase1`
--
ALTER TABLE `purchase1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `silver`
--
ALTER TABLE `silver`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
