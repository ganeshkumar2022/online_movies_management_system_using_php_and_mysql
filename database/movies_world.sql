-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 01:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_world`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_movies`
--

CREATE TABLE `add_movies` (
  `mid` int(11) NOT NULL,
  `mcategory_id` int(11) NOT NULL,
  `msub_category_id` int(11) NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `movie_year` int(11) NOT NULL,
  `movie_image` varchar(100) NOT NULL,
  `movie_story` text NOT NULL,
  `movie_trailor` varchar(100) NOT NULL,
  `torrent_file` varchar(100) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_movies`
--

INSERT INTO `add_movies` (`mid`, `mcategory_id`, `msub_category_id`, `movie_name`, `movie_year`, `movie_image`, `movie_story`, `movie_trailor`, `torrent_file`, `reading_time`) VALUES
(1, 5, 1, 'Shark night 3D', 2011, 'movies/shark night 3d.jpg', 'A group of friends decide to stay in a cabin by the lake for the weekend. However, they find themselves in a dangerous situation when they are attacked by sharks.', 'https://www.youtube.com/embed/c38GMlPPCTA', 'torrents/Shark Night 3D (2011)[720p]MyDownloadTube.torrent', '2023-07-12 08:43:59'),
(2, 5, 3, 'Bedazzled', 2000, 'movies/bedazled.webp', 'Elliot Richardson is a shy man who is reluctant to convey his feelings to the girl he loves. Observing his sad state, the Devil grants him seven wishes in exchange for his soul.', 'https://www.youtube.com/embed/tfpLEU2YKzc', 'torrents/Bedazzled (2000)[720p]MyDownloadTube.torrent', '2023-07-12 21:32:30'),
(3, 5, 5, 'The Mummy', 1999, 'movies/mummy.jpg', 'The Mummy is a rousing, suspenseful and horrifying epic about an expedition of treasure-seeking explorers in the Sahara Desert in 1925. Stumbling upon an ancient tomb, the hunters unwittingly set loose a 3,000-year-old legacy of terror, which is embodied in the vengeful reincarnation of an Egyptian priest who had been sentenced to an eternity as one of the living dead.', 'https://www.youtube.com/embed/f7oKxlaUBac', 'torrents/The Mummy (1999)[720p]MyDownloadTube.torrent', '2023-07-13 07:30:06'),
(4, 6, 10, 'Scooby-Doo! WrestleMania Mystery', 2014, 'movies/shaa.webp', 'When Shaggy and Scooby win tickets to WrestleMania, the entire gang travels in the Mystery Machine to WWE City to attend the epic event. However, when a mysterious ghostly bear appears and threatens to ruin the show, Scooby, Shaggy, Velma, Daphne and Fred work with WWE Superstars to solve the case.', 'https://www.youtube.com/embed/fZpsstQKElU', 'torrents/Scooby-Doo! WrestleMania Mystery (2014)[720p]MyDownloadTube.torrent', '2023-07-14 22:07:43'),
(5, 7, 12, 'Cocktail', 2012, 'movies/cocktail.jpg', 'Veronica becomes friends with Meera and then Gautam and eventually both move into her apartment. All is well until love enters their lives and adds more complications than they can handle.', 'https://www.youtube.com/embed/KgiYA04X3cE', 'torrents/Scooby-Doo 2_ Monsters Unleashed (2004)[720p]MyDownloadTube.torrent', '2023-07-18 21:37:11'),
(6, 5, 2, 'Bad moms', 2016, 'movies/bad moms.jpg', 'When three overworked mothers, Amy, Carla and Kiki, are pushed beyond their limits, they decide to shirk their responsibilities and lead a life they love.', 'https://www.youtube.com/embed/2sOQZ-xaYqQ', 'torrents/bad moms.torrent', '2023-08-06 14:52:10'),
(8, 5, 4, 'My Teacher My Love', 2018, 'movies/my teacher my love.jpg', 'Ayuha Samaru is a high school student. She is honest and works hard at everything, no matter what. One day, she has trouble at a gyudon restaurant due to money.', 'https://www.youtube.com/embed/rNNKuaC1Okw', 'torrents/my teacher my love.torrent', '2023-08-08 07:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$eGqQszQ4UzRMtLR8MwMun.5n7.3xPGsDHDuFv8jEE5Ms/pM01tzh.');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `name`, `reading_time`) VALUES
(5, 'Hollywood Movies', '2023-06-25 06:09:50'),
(6, 'Animation', '2023-06-28 03:22:02'),
(7, 'Bollywood Movies', '2023-06-25 06:10:10'),
(8, 'Arabic Movies', '2023-06-25 06:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `dir_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `director_name` varchar(50) NOT NULL,
  `director_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`dir_id`, `movie_id`, `director_name`, `director_image`) VALUES
(1, 1, 'David R. Ellis', 'director/david r willis.jpg'),
(2, 2, 'Harold Ramis', 'director/horald ramis.jpg'),
(3, 3, 'Stephen Sommers', 'director/Stephen Sommers.jpg'),
(4, 4, 'Brandon Vietti', 'director/Brandon Vietti.jpg'),
(5, 5, 'Homi Adajania', 'director/Homi Adajania.jpg'),
(6, 6, 'Jon Lucas', 'director/jon lucas.jpg'),
(7, 6, 'Scott Moore', 'director/Scott Moore.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `user_id`, `movie_id`, `reading_time`) VALUES
(5, 1, 6, '2023-08-06 15:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `movie_scenes`
--

CREATE TABLE `movie_scenes` (
  `scenes_id` int(11) NOT NULL,
  `movies_id` int(11) NOT NULL,
  `scene_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_scenes`
--

INSERT INTO `movie_scenes` (`scenes_id`, `movies_id`, `scene_image`) VALUES
(1, 1, 'movie_scenes/s1.jpg'),
(2, 1, 'movie_scenes/s2.jpg'),
(3, 1, 'movie_scenes/s3.jpg'),
(4, 1, 'movie_scenes/s4.jpg'),
(5, 1, 'movie_scenes/s5.jpg'),
(6, 2, 'movie_scenes/b1.jpg'),
(7, 2, 'movie_scenes/b2.jpg'),
(8, 2, 'movie_scenes/b3.jpg'),
(9, 3, 'movie_scenes/m1.jpg'),
(10, 3, 'movie_scenes/m2.jpg'),
(11, 3, 'movie_scenes/m3.jpg'),
(12, 3, 'movie_scenes/m4.jpg'),
(13, 4, 'movie_scenes/sd1.jpg'),
(14, 4, 'movie_scenes/sd3.jpg'),
(15, 5, 'movie_scenes/c1.jpg'),
(16, 5, 'movie_scenes/c2.jpg'),
(17, 5, 'movie_scenes/c3.jpg'),
(18, 6, 'movie_scenes/bm1.jpg'),
(19, 6, 'movie_scenes/bm2.jpg'),
(20, 6, 'movie_scenes/bm3.jpg'),
(21, 6, 'movie_scenes/bm4.jpg'),
(22, 8, 'movie_scenes/t1.jpg'),
(23, 8, 'movie_scenes/t2.jpg'),
(24, 8, 'movie_scenes/t3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movie_stars`
--

CREATE TABLE `movie_stars` (
  `stars_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `stars_name` varchar(60) NOT NULL,
  `stars_photos` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `star`
--

CREATE TABLE `star` (
  `star_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `star_name` varchar(40) NOT NULL,
  `star_image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `star`
--

INSERT INTO `star` (`star_id`, `movie_id`, `star_name`, `star_image`) VALUES
(1, 1, 'Sara paxton', 'star/sara paxton.jpg'),
(2, 1, 'Joel david', 'star/joel david.jpg'),
(3, 1, 'Katharine mc phee', 'star/katharine mc phee.jpg'),
(6, 2, 'Elizabeth hurley', 'star/elizabeth hurley.jpg'),
(7, 2, 'Brenden fraser', 'star/brendern fraser.jpg'),
(8, 3, 'Brenden fraser', 'star/brenden fraser2.jpg'),
(9, 3, 'Rachel weisz', 'star/rachel weisz.jpg'),
(10, 3, 'Patrica velasquez', 'star/patrica velasquez.jpg'),
(11, 3, 'Arnold vosloo', 'star/arnold vosloo.jpg'),
(12, 4, 'shaggy', 'star/shaggy.jpg'),
(13, 4, 'Scooby', 'star/scooby.jpg'),
(14, 4, 'Velma', 'star/velma.jpg'),
(15, 4, 'Daphne', 'star/daphne.jpg'),
(16, 5, 'Deepika padukone', 'star/deepika.jpg'),
(17, 5, 'Diana penty', 'star/diana penty2.jpg'),
(18, 5, 'Saif ali khan', 'star/saif ali khan.jpg'),
(19, 6, 'Mila kunis', 'star/mila kunis.jpg'),
(20, 6, 'Kristen bell', 'star/kristen bell.jpg'),
(21, 8, 'Yoshitaka hiromitsu', 'star/Yoshitaka Hiromitsu.jpg'),
(22, 8, 'Ayuha samaru', 'star/Ayuha Samaru.jpg'),
(23, 8, 'Ryoma Takeuchi', 'star/Ryoma Takeuchi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `scid` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(50) NOT NULL,
  `screading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`scid`, `category_id`, `sub_category_name`, `screading_time`) VALUES
(1, 5, 'Adventure', '2023-06-26 19:27:07'),
(2, 5, 'Comedy', '2023-06-26 19:27:16'),
(3, 5, 'Action', '2023-06-26 19:27:34'),
(4, 5, 'Romance', '2023-06-26 19:27:43'),
(5, 5, 'Horror', '2023-06-26 19:27:53'),
(6, 6, 'Action', '2023-06-26 19:29:01'),
(7, 6, 'Adventure', '2023-06-26 19:29:10'),
(8, 6, 'Family', '2023-06-26 19:29:18'),
(10, 6, 'Drama', '2023-06-26 19:29:39'),
(11, 7, 'Action', '2023-06-26 19:30:33'),
(12, 7, 'Comedy', '2023-06-26 19:30:42'),
(13, 7, 'Crime', '2023-06-26 19:30:49'),
(14, 7, 'Thriller', '2023-06-26 19:31:05'),
(15, 8, 'Action', '2023-06-26 19:33:05'),
(16, 8, 'Horror', '2023-06-26 19:33:13'),
(17, 8, 'Mystery', '2023-06-26 19:33:22'),
(18, 8, 'Family', '2023-06-26 19:33:32'),
(20, 11, 'one', '2023-07-09 13:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`, `reading_time`) VALUES
(1, 'ram@gmail.com', '2023-06-20 05:25:29'),
(2, 'ramya@gmail.com', '2023-06-20 05:26:08'),
(3, 'kavya@gmail.com', '2023-06-20 05:26:36'),
(4, 'rm@gmail.com', '2023-06-21 07:53:45'),
(5, 'as@gmail.com', '2023-07-19 21:21:27'),
(6, 'as@gmail.com', '2023-07-19 21:21:40'),
(7, 'd@gmail.com', '2023-07-21 20:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `zipcode` varchar(30) NOT NULL,
  `myimage` varchar(50) NOT NULL DEFAULT 'images/avatar.jfif',
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `dob`, `gender`, `zipcode`, `myimage`, `reading_time`) VALUES
(1, 'Ganesh', 'kumar', 'ganesh@gmail.com', '12', '2023-05-31', 'male', '643215', 'profile_imagesayesha.jfif', '2023-08-06 15:13:35'),
(2, 'a', 'a', 'a@gmail.com', '12345678', '2023-06-07', 'male', 'dd', '', '2023-06-14 20:04:18'),
(3, 'a', 'a', 'a@gmail.com', '12345678', '2023-06-15', 'male', 'ed', '', '2023-06-14 20:06:53'),
(4, 'w', 'w', 'w@gmail.com', '12345678', '2023-06-07', 'male', 'de', '', '2023-06-14 20:07:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_movies`
--
ALTER TABLE `add_movies`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`dir_id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_scenes`
--
ALTER TABLE `movie_scenes`
  ADD PRIMARY KEY (`scenes_id`);

--
-- Indexes for table `movie_stars`
--
ALTER TABLE `movie_stars`
  ADD PRIMARY KEY (`stars_id`);

--
-- Indexes for table `star`
--
ALTER TABLE `star`
  ADD PRIMARY KEY (`star_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`scid`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_movies`
--
ALTER TABLE `add_movies`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `dir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie_scenes`
--
ALTER TABLE `movie_scenes`
  MODIFY `scenes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `movie_stars`
--
ALTER TABLE `movie_stars`
  MODIFY `stars_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `star`
--
ALTER TABLE `star`
  MODIFY `star_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `scid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
