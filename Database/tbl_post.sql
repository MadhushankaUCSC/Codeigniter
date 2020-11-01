-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 07:21 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `title`, `description`, `date`) VALUES
(20, 'Raspberry Pistachio cake ', 'Shortbreads have a buttery rich flavor and a crisp and crumbly texture. For this recipe I took a plain shortbread and topped it with a powdered sugar glaze and then a sprinkling of chopped pistachios and crushed freeze-dried raspberries. This gives you a cookie that not only looks beautiful, but the combination of tart and sweet flavors is irresistible.\r\n\r\nIngredients: all-purpose flour, salt,  butter, white sugar, sifted, milk, chopped pistachios, freeze-dried raspberries.', '2020-07-30'),
(24, 'Apple Yogurt cake', 'This Apple Yogurt Cake starts with a wonderfully dense and moist cake that tastes of almonds. The almond flavor comes from adding ground almonds and pure almond extract to the batter. Next, is a layer of thinly sliced apples, lightly sweetened. Lastly, we sprinkle the cake with sliced almonds. This cake is really good, and the great part is no one will ever guess how easy it is to make.', '2020-08-05'),
(25, 'Chocolate cake', 'A layered Chocolate Cake never goes out of style. Trends may come and go but a Chocolate Cake is as popular today as it was 10, 20, or 75 years ago. This Simple Chocolate Cake is especially appealing both for the baker and for those who get to enjoy this cake. I find that most bakers are always on the lookout for a cake', '2020-08-05'),
(26, 'carrot cake', 'Carrot Cake never seems to go out of style. This rich and moist spice cake, full of grated carrot, toasted nuts, and crushed pineapple, has great flavor, especially when covered with a tangy-sweet Cream Cheese Frosting. The interesting part is that while those pretty orange flecks of grated carrot give the Carrot Cake color, sweetness, and a moist texture, its flavor is almost indistinguishable.', '2020-08-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
