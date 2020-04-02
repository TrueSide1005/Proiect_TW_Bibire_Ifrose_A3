-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: apr. 02, 2020 la 04:40 PM
-- Versiune server: 10.4.11-MariaDB
-- Versiune PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `autentificare`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `registru`
--

CREATE TABLE `registru` (
  `id` int(11) NOT NULL,
  `adresa_email` varchar(255) NOT NULL,
  `parola` varchar(255) NOT NULL,
  `judet` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `registru`
--

INSERT INTO `registru` (`id`, `adresa_email`, `parola`, `judet`, `create_at`, `update_at`) VALUES
(1, 'ifrose_a@yahoo.ro', 'abcd', 'alba', '2020-04-02 15:05:18', '2020-04-02 15:05:18'),
(2, 'popescu@yahoo.com', 'ytb', 'alba', '2020-04-02 15:08:07', '2020-04-02 15:08:07'),
(6, 'pop@yahoo.com', 'rrr', 'cluj', '2020-04-02 15:34:56', '2020-04-02 15:34:56'),
(7, 'pop@yahoo.com', 'yyyy', 'giurgiu', '2020-04-02 15:42:03', '2020-04-02 15:42:03'),
(8, 'pop@yahoo.com', 'uuuuu', 'alba', '2020-04-02 15:44:05', '2020-04-02 15:44:05');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `registru`
--
ALTER TABLE `registru`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `registru`
--
ALTER TABLE `registru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
