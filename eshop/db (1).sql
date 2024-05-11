-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 10 Ιουν 2020 στις 12:41:27
-- Έκδοση διακομιστή: 10.4.11-MariaDB
-- Έκδοση PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `eshop`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customers_phone` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `orders`
--

INSERT INTO `orders` (`order_id`, `customers_phone`, `total`) VALUES
(1, 0, 159),
(1, 0, 159),
(1, 0, 159),
(1, 0, 159),
(1, 0, 159),
(1, 0, 0),
(1, 0, 69),
(1, 0, 69),
(1, 0, 69),
(1, 0, 69),
(1, 0, 69),
(1, 0, 0),
(1, 0, 0),
(1, 0, 0),
(1, 0, 0),
(1, 0, 0),
(1, 0, 22),
(1, 0, 69),
(1, 0, 149),
(1, 0, 149),
(1, 0, 149),
(1, 0, 149),
(1, 0, 149),
(1, 0, 69),
(1, 0, 69),
(1, 0, 69),
(1, 0, 22),
(1, 0, 159),
(1, 0, 69),
(1, 0, 69),
(1, 0, 69),
(1, 0, 298),
(1, 0, 69),
(1, 0, 69),
(1, 0, 69),
(1, 0, 69),
(1, 0, 149),
(1, 0, 520),
(1, 0, 200),
(1, 0, 105),
(1, 0, 159),
(1, 0, 159),
(1, 0, 0),
(1, 0, 0),
(1, 0, 69),
(1, 0, 22),
(1, 0, 69),
(1, 0, 69),
(1, 0, 69),
(1, 0, 159),
(1, 0, 22),
(1, 0, 207);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `order_contents`
--

CREATE TABLE `order_contents` (
  `oc_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `order_contents`
--

INSERT INTO `order_contents` (`oc_id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 1, 0, 0, 0),
(1, 1, 0, 0, 159),
(1, 1, 1, 1, 159),
(1, 1, 1, 1, 22),
(1, 1, 1, 3, 22),
(1, 1, 1, 3, 22),
(1, 1, 1, 1, 159),
(1, 1, 1, 1, 159),
(1, 1, 1, 1, 159),
(1, 1, 1, 1, 159),
(1, 1, 1, 1, 159),
(1, 1, 0, 0, 0),
(1, 1, 1, 1, 69),
(1, 1, 1, 1, 69),
(1, 1, 1, 1, 69),
(1, 1, 1, 1, 69),
(1, 1, 1, 1, 69),
(1, 1, 0, 0, 0),
(1, 1, 0, 0, 0),
(1, 1, 0, 0, 0),
(1, 1, 0, 0, 0),
(1, 1, 0, 0, 0),
(1, 1, 1, 1, 22),
(1, 1, 1, 1, 69),
(1, 1, 1, 1, 149),
(1, 1, 1, 1, 149),
(1, 1, 1, 1, 149),
(1, 1, 1, 1, 149),
(1, 1, 1, 1, 149),
(1, 1, 1, 1, 69),
(1, 1, 1, 1, 69),
(1, 1, 1, 1, 69),
(1, 1, 1, 1, 22),
(1, 1, 1, 1, 159),
(1, 1, 1, 1, 69),
(1, 1, 1, 1, 69),
(1, 1, 1, 1, 69),
(1, 1, 1, 2, 149),
(1, 1, 1, 1, 69),
(1, 1, 1, 1, 69),
(1, 1, 1, 1, 69),
(1, 1, 1, 1, 69),
(1, 1, 2, 1, 149),
(1, 1, 2, 1, 520),
(1, 1, 1, 1, 200),
(1, 1, 10, 1, 105),
(1, 1, 9, 1, 159),
(1, 1, 9, 1, 159),
(1, 1, 0, 0, 0),
(1, 1, 0, 0, 0),
(1, 1, 1, 1, 69),
(1, 1, 5, 1, 22),
(1, 1, 1, 1, 69),
(1, 1, 1, 1, 69),
(1, 1, 1, 1, 69),
(1, 1, 9, 1, 159),
(1, 1, 5, 1, 22),
(1, 1, 1, 3, 69);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(50,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'Razer BlackWindow Πληκτρολογιο', '69.00'),
(2, 'LG 44\"', '149.00'),
(3, 'Desktop Lenovo Y900 RE-34ISZ Razer Edition,i7-6700', '520.00'),
(4, 'MSI Aegis 3 8SD-231AT gaming PC Intel i7-9700F, 16', '650.00'),
(5, ' JBL ηχειο ', '22.00'),
(6, ' GENESIS NSG-1412 RADON 200 VIRTUAL 7.1 GAMING HEA', '28.00'),
(7, 'NOD INTRO PORTABLE RADIO LCD WITH CD / USB / MP3', '40.00'),
(8, 'OMNITRONIC M-60 ', '27.00'),
(9, 'Φωτογραφικη Μηχανη Canon Ixus 190', '159.00'),
(10, 'ROLLEI SPORTSLINE 100 BLUE', '105.00'),
(11, 'RICOH THETA M15 BLUE', '200.00'),
(12, 'KODAK POWER FLASH SINGLE USE CAMERA 27+12 EXPOSURE', '20.00');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` char(40) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`name`, `lastname`, `email`, `pass`, `phone`) VALUES
('Dimosthenis', 'Georgousis', 'dimosgeo@hotmail.gr', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234'),
('Dimosthenis', 'Geor', 'dai19015@uom.edu.gr', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '6979154789'),
('Kwstas', 'PAP', 'dai19019@uom.edu.gr', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '6979154780'),
('Dimosthenis', 'Georgousis', '123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'aaa'),
('Dimosthenis', 'Γεωργουσης', 'aa', '17ba0791499db908433b80f37c5fbc89b870084b', '11'),
('dff', 'dd', 'dd', '388ad1c312a488ee9e12998fe097f2258fa8d5ee', 'dd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
