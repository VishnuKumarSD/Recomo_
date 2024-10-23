-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 01:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(50) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cast`
--

CREATE TABLE `cast` (
  `movie_id` int(11) NOT NULL,
  `creator` varchar(50) NOT NULL,
  `actor` varchar(50) NOT NULL,
  `actress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cast`
--

INSERT INTO `cast` (`movie_id`, `creator`, `actor`, `actress`) VALUES
(1, 'George Miller', 'Tom Hardy', 'Charlize Theron'),
(2, 'Greg Mottola', 'Jonah Hill', 'Michele Trachtenberg'),
(3, 'Frank Darabont', 'Tim Robbins', 'Morgan Freeman'),
(4, 'Peter Jackson', 'Elijah Wood', 'Cate Blanchett'),
(5, 'William Friedkin', 'Ellen Burstyn', 'Linda Blair'),
(6, 'Guy Ritchie', 'Robert Downey Jr.', 'Rachel McAdams'),
(7, 'Joe Wright', 'Matthew Macfadyen', 'Keira Knightley'),
(8, 'Christopher Nolan', 'Matthew McConaughey', 'Anne Hathaway'),
(9, 'Joseph Kosinski', 'Tom Cruise', 'Miles Teller'),
(11, 'John McTiernan', 'Bruce Willis', 'Bonnie Bedelia'),
(22, 'Wes Anderson', 'Ralph Fiennes', 'Tony Revolori'),
(33, 'Robert Zemeckis', 'Tom Hanks', 'Robin Wright'),
(44, 'Chris Columbus', 'Daniel Radcliffe', 'Emma Watson'),
(55, 'Jordan Peele', 'Daniel Kaluuya', 'Allison Williams'),
(66, 'David Fincher', 'Ben Affleck', 'Rosamund Pike'),
(77, 'Nick Cassavetes', 'Ryan Gosling', 'Rachel McAdams'),
(88, 'Denis Villeneuve', 'Amy Adams', 'Jeremy Renner'),
(99, 'David Fincher', 'Brad Pitt', 'Morgan Freeman'),
(111, 'Peter Berg', 'Taylor Kitsch', 'Rihanna'),
(222, 'Ranjith', 'Mammootty', 'Kochu Preman'),
(333, 'David Fincher', 'Jesse Eisenberg', 'Rooney Mara'),
(444, 'Hayao Miyazaki', 'Shun Oguri', 'Masako Nozawa'),
(555, 'A.K. Lohithadas', 'Mohanlal', 'Shobana'),
(777, 'Ali Atay', 'Erdal Be?ikçio?lu', 'Zeynep Toku?'),
(888, 'Anwar Rasheed', 'Dulquer Salmaan', 'Parvathy Thiruvothu'),
(999, 'Rahul Riji Nair', 'Tovino Thomas', 'Aditi Balan'),
(1111, 'Yeon Sang-ho', 'Gong Yoo', 'Kim Su-an'),
(2222, 'Stephen Chow', 'Stephen Chow', 'Yuen Wah'),
(3333, 'Giuseppe Tornatore', 'Philippe Noiret', 'Marina Vlady'),
(4444, 'Hayao Miyazaki', 'Rumi Hiiragi', 'Miyu Irino'),
(5555, 'Paco Plaza', 'Ana de Armas', 'Leticia Dolera');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `genre` varchar(30) DEFAULT NULL,
  `language` varchar(20) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `re_date` date DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `genre`, `language`, `rating`, `re_date`, `image`) VALUES
(1, 'MAD MAX: FURY ROAD', 'ACTION', 'ENGLISH', 8, '2015-05-07', ''),
(2, 'SUPERBAD', 'COMEDY', 'ENGLISH', 7, '2007-08-17', ''),
(3, 'The Shawshank Redemption', 'DRAMA', 'ENGLISH', 9, '1994-09-23', ''),
(4, 'The Lord of the Rings: The Fellowship of the Ring', 'FANTASY', 'ENGLISH', 9, '2001-12-19', ''),
(5, 'The Exorcist', 'HORROR', 'ENGLISH', 8, '1973-12-26', ''),
(6, 'Sherlock Holmes', 'MYSTERY', 'ENGLISH', 7, '2009-12-25', ''),
(7, 'PRIDE AND PREJUDICE', 'ROMANCE', 'ENGLISH', 8, '2005-11-11', ''),
(8, 'INTERSTELLAR', 'SCI-FI', 'ENGLISH', 8, '2014-11-07', ''),
(9, 'Top Gun 2', 'ACTION', 'ENGLISH', 7, '2022-05-27', ''),
(11, 'DIE HARD', 'ACTION', 'ENGLISH', 8, '1988-07-15', ''),
(22, 'The Grand Budapest Hotel', 'COMEDY', 'ENGLISH', 8, '2014-03-07', ''),
(33, 'Forrest Gump', 'DRAMA', 'ENGLISH', 9, '1994-07-06', ''),
(44, 'Harry Potter and the Philosopher\'s Stone', 'FANTASY', 'ENGLISH', 8, '2001-11-16', ''),
(55, 'Get Out', 'HORROR', 'ENGLISH', 7, '2017-02-24', ''),
(66, 'Gone Girl', 'MYSTERY', 'ENGLISH', 8, '2014-10-03', ''),
(77, 'The Notebook', 'ROMANCE', 'ENGLISH', 7, '2004-06-25', ''),
(88, 'Arrival', 'SCI-FI', 'ENGLISH', 8, '2016-09-02', ''),
(99, 'SE7EN', 'THRILLER', 'ENGLISH', 8, '1995-09-22', ''),
(111, 'BATTLESHIP', 'ACTION', 'ENGLISH', 5, '2012-04-13', ''),
(222, 'THE DICTACTOR', 'COMEDY', 'ENGLISH', 6, '2012-05-16', ''),
(333, 'SOCIAL NETWORK', 'DRAMA', 'ENGLISH', 7, '2010-11-12', ''),
(444, 'The Boy and the Heron', 'FANTASY', 'JAPANESE', 7, '2023-07-14', ''),
(555, 'Aakasha Ganga', 'HORROR', 'MALAYALAM', 6, '1999-01-26', ''),
(777, 'LOVE TACTICS', 'ROMANCE', 'TURKISH', 5, '2022-02-11', ''),
(888, 'Gaganachari', 'ACTION', 'MALAYALAM', 7, '2024-06-21', ''),
(999, 'COLD CASE', 'THRILLER', 'MALAYALAM', 6, '2021-06-30', ''),
(1111, 'TRAIN TO BUSAN', 'ACTION', 'KOREAN', 8, '2016-07-20', ''),
(2222, 'KUNG FU HUSTLE', 'COMEDY', 'CHINESE', 7, '2004-12-23', ''),
(3333, 'CINEMA PARADISO', 'DRAMA', 'ITALIAN', 8, '1988-11-17', ''),
(4444, 'SPIRITED AWAY', 'FANTASY', 'JAPANESE', 8, '2001-07-20', ''),
(5555, 'VERONICA', 'HORROR', 'SPANISH', 6, '2017-08-25', '');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `series_name` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`series_name`, `genre`, `rating`) VALUES
('Breaking Bad', 'Drama', 9.5),
('Stranger Things', 'Sci-Fi', 8.7),
('Game of Thrones', 'Fantasy', 9.3),
('The Crown', 'Historical', 8.6),
('The Office', 'Comedy', 8.8),
('The Mandalorian', 'Action', 8.7),
('Fargo', 'Crime', 8.9),
('Black Mirror', 'Anthology', 8.8),
('The Witcher', 'Fantasy', 8.2),
('Sherlock', 'Mystery', 9.1),
('Friends', 'Comedy', 8.9),
('Chernobyl', 'Drama', 9.4),
('The Haunting of Hill House', 'Horror', 8.6),
('Narcos', 'Crime', 8.8),
('Better Call Saul', 'Drama', 8.6),
('The Boys', 'Action', 8.7),
('Money Heist', 'Thriller', 8.3),
('Dark', 'Sci-Fi', 8.8),
('The Queens Gambit', 'Drama', 8.6),
('Westworld', 'Sci-Fi', 8.6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cast`
--
ALTER TABLE `cast`
  ADD UNIQUE KEY `movie_id` (`movie_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cast`
--
ALTER TABLE `cast`
  ADD CONSTRAINT `cast_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
