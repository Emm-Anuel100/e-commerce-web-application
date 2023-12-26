-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 05:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoplex`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_keys`
--

CREATE TABLE `api_keys` (
  `id` int(255) NOT NULL,
  `paystack_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Api keys';

--
-- Dumping data for table `api_keys`
--

INSERT INTO `api_keys` (`id`, `paystack_key`) VALUES
(1, 'pk_test_4d75f5f5bd6c850d3f4c57fe7a55d9b7c84d566f');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `product` varchar(7000) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Orders placed by users';

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product`, `quantity`, `contact`, `subtotal`) VALUES
(1, '[[{\"id\":\"8\",\"name\":\"bebem diaper (maxi)  \",\"desc\":\"Handy diaper for your baby\",\"price\":\"670.32\",\"rrp\":\"0.00\",\"quantity\":\"23\",\"img\":\"babem_diaper.png\",\"date_added\":\"2023-12-01 13:00:23\"}]]', '{\"8\":6}', 'fgtttttttttt@ffkrfjg.yy', '4021.92'),
(2, '[[{\"id\":\"10\",\"name\":\"St. louis sugar\",\"desc\":\"No additives enjoy!\",\"price\":\"420.10\",\"rrp\":\"0.00\",\"quantity\":\"48\",\"img\":\"louis_sugar.png\",\"date_added\":\"2023-12-01 13:01:21\"}]]', '{\"10\":10}', 'edu@gmail.com', '4201'),
(3, '[[{\"id\":\"4\",\"name\":\"molfix diaper\",\"desc\":\"Smooth and handy diaper for your baby\",\"price\":\"700.20\",\"rrp\":\"0.00\",\"quantity\":\"42\",\"img\":\"molfix.png\",\"date_added\":\"2019-03-13 17:42:04\"},{\"id\":\"9\",\"name\":\"hollandia strawberry\",\"desc\":\"Fresh and yummy yourghut\",\"price\":\"750.30\",\"rrp\":\"0.00\",\"quantity\":\"30\",\"img\":\"hollandia_strawberry.png\",\"date_added\":\"2023-12-01 13:00:23\"},{\"id\":\"10\",\"name\":\"St. louis sugar\",\"desc\":\"No additives enjoy!\",\"price\":\"420.10\",\"rrp\":\"0.00\",\"quantity\":\"48\",\"img\":\"louis_sugar.png\",\"date_added\":\"2023-12-01 13:01:21\"}]]', '{\"4\":16,\"10\":8,\"9\":4}', 'ada@yahoo.com', '17565.2'),
(4, '[[{\"id\":\"3\",\"name\":\"maltina\",\"desc\":\"Chilled maltina enjoy!\",\"price\":\"250.29\",\"rrp\":\"0.00\",\"quantity\":\"23\",\"img\":\"maltina.png\",\"date_added\":\"2019-03-13 18:47:56\"},{\"id\":\"4\",\"name\":\"molfix diaper\",\"desc\":\"Smooth and handy diaper for your baby\",\"price\":\"700.20\",\"rrp\":\"0.00\",\"quantity\":\"42\",\"img\":\"molfix.png\",\"date_added\":\"2019-03-13 17:42:04\"},{\"id\":\"10\",\"name\":\"St. louis sugar\",\"desc\":\"No additives enjoy!\",\"price\":\"420.10\",\"rrp\":\"0.00\",\"quantity\":\"48\",\"img\":\"louis_sugar.png\",\"date_added\":\"2023-12-01 13:01:21\"}]]', '{\"3\":10,\"10\":15,\"4\":5}', 'emmanueldrims@gmailcom', '12305.4'),
(5, '[[{\"id\":\"10\",\"name\":\"St. louis sugar\",\"desc\":\"No additives enjoy!\",\"price\":\"420.10\",\"rrp\":\"0.00\",\"quantity\":\"48\",\"img\":\"louis_sugar.png\",\"date_added\":\"2023-12-01 13:01:21\"}]]', '{\"10\":1}', 'emm@yahoo.com', '420.1'),
(6, '[[{\"id\":\"7\",\"name\":\"hollandia strawberry\",\"desc\":\"Fresh and yummy yourghut\",\"price\":\"570.20\",\"rrp\":\"0.00\",\"quantity\":\"30\",\"img\":\"hollandia_strawberry.png\",\"date_added\":\"2023-12-01 13:00:10\"}]]', '{\"7\":1}', 'emm@yahoo.com', '570.2'),
(7, '[[{\"id\":\"8\",\"name\":\"bebem diaper (maxi)  \",\"desc\":\"Handy diaper for your baby\",\"price\":\"670.32\",\"rrp\":\"0.00\",\"quantity\":\"23\",\"img\":\"babem_diaper.png\",\"date_added\":\"2023-12-01 13:00:23\"},{\"id\":\"10\",\"name\":\"St. louis sugar\",\"desc\":\"No additives enjoy!\",\"price\":\"420.10\",\"rrp\":\"0.00\",\"quantity\":\"48\",\"img\":\"louis_sugar.png\",\"date_added\":\"2023-12-01 13:01:21\"}]]', '{\"10\":1,\"8\":1}', 'ejike@gmsail.com', '1090.42'),
(8, '[[{\"id\":\"6\",\"name\":\"bebem diaper (mini)\",\"desc\":\"Smooth diaper for your baby\",\"price\":\"550.70\",\"rrp\":\"0.00\",\"quantity\":\"23\",\"img\":\"babem_diaper.png\",\"date_added\":\"2023-12-01 13:00:10\"}]]', '{\"6\":1}', 'ejyke@yahoo.com', '550.7'),
(9, '[[{\"id\":\"10\",\"name\":\"St. louis sugar\",\"desc\":\"No additives enjoy!\",\"price\":\"420.10\",\"rrp\":\"0.00\",\"quantity\":\"48\",\"img\":\"louis_sugar.png\",\"date_added\":\"2023-12-01 13:01:21\"}]]', '{\"10\":12}', 'enna@gmail.com', '5041.2');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='available products in store';

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'chivita active', 'Low sugar contents', '650.99', '0.00', 34, 'chivita.png', '2019-03-13 17:55:22'),
(2, 'fanta', 'Amazing product', '200.10', '0.00', 38, 'fanta.png', '2019-03-13 18:52:49'),
(3, 'maltina', 'Chilled maltina enjoy!', '250.29', '0.00', 23, 'maltina.png', '2019-03-13 18:47:56'),
(4, 'molfix diaper', 'Smooth and handy diaper for your baby', '700.20', '0.00', 42, 'molfix.png', '2019-03-13 17:42:04'),
(6, 'bebem diaper (mini)', 'Smooth diaper for your baby', '550.70', '0.00', 23, 'babem_diaper.png', '2023-12-01 13:00:10'),
(7, 'hollandia strawberry', 'Fresh and yummy yourghut', '570.20', '0.00', 30, 'hollandia_strawberry.png', '2023-12-01 13:00:10'),
(8, 'bebem diaper (maxi)  ', 'Handy diaper for your baby', '670.32', '0.00', 23, 'babem_diaper.png', '2023-12-01 13:00:23'),
(9, 'hollandia strawberry', 'Fresh and yummy yourghut', '750.30', '0.00', 30, 'hollandia_strawberry.png', '2023-12-01 13:00:23'),
(10, 'St. louis sugar', 'No additives enjoy!', '420.10', '0.00', 48, 'louis_sugar.png', '2023-12-01 13:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `users_data`
--

CREATE TABLE `users_data` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Users login informations';

--
-- Dumping data for table `users_data`
--

INSERT INTO `users_data` (`id`, `username`, `email`, `password`) VALUES
(1, 'emmanuel', 'emma@gmail.com', '$2y$10$L7jqW3z4KNScfVDFw0ZR0.JybD3FhgQ7atcvkb7bl.f8PSuIuRHom'),
(2, 'john ayo', 'john@gmail.vo', '$2y$10$t3/WkXaJmA6fe0XFU5jEX.nb9Zstn1hxDlstblPM6OiPjXczsk4Z6'),
(4, 'zita', 'zita@gmail.com', '$2y$10$JKL1YTR7xwo1EwZjYhl8geyI9swQB08nseWdOhnVzym1YVk5XhQMq'),
(5, 'emmanuel', 'emmanuel001@gmail.com', '$2y$10$dWiwrtN80a1BD70x9SHTB.Kp4v9WrCzwrZh8IsyowIyY/UyA9AYJO'),
(6, 'sanusi', 'sanusi@gmail.com', '$2y$10$yu6d.H5InkmwhUoX4GQ/QueCGnWXzh5Lzzla33IFaiZa.sQndUGXO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_keys`
--
ALTER TABLE `api_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_data`
--
ALTER TABLE `users_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_keys`
--
ALTER TABLE `api_keys`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users_data`
--
ALTER TABLE `users_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
