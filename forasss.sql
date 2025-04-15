-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 12 mei 2024 om 16:16
-- Serverversie: 10.4.13-MariaDB
-- PHP-versie: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forasss`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `idname` int(200) NOT NULL,
  `specialty` varchar(200) NOT NULL,
  `qualifications` varchar(200) NOT NULL,
  `educationalQualification` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` int(11) NOT NULL,
  `profile_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `cv`
--

INSERT INTO `cv` (`id`, `name`, `idname`, `specialty`, `qualifications`, `educationalQualification`, `city`, `dateOfBirth`, `gender`, `profile_pic`) VALUES
(1, 'alaoi', 737, 'cs', 'cs', 'cs', 'gdah', '2024-05-12', 1, 'fdfg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `data_opporaution`
--

CREATE TABLE `data_opporaution` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `dateend` date NOT NULL,
  `datestar` date NOT NULL,
  `Numberofvolunteerhours` varchar(100) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `Requireskillsandqualifications` varchar(100) NOT NULL,
  `Opportunityresidencysite` varchar(100) NOT NULL,
  `Volunteertasks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `data_opporaution`
--

INSERT INTO `data_opporaution` (`id`, `title`, `dateend`, `datestar`, `Numberofvolunteerhours`, `Area`, `age`, `sex`, `Requireskillsandqualifications`, `Opportunityresidencysite`, `Volunteertasks`) VALUES
(1, 'تطوعيه', '2024-05-12', '2024-05-12', '34', 'المجال ', '231', 'ذكر', 'كمبيوتر', 'جده', 'المهام');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `data_volunteer`
--

CREATE TABLE `data_volunteer` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `ouhr` int(20) NOT NULL,
  `age` int(12) NOT NULL,
  `opportunityType` varchar(122) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `startTime` varchar(100) NOT NULL,
  `moahe` varchar(100) NOT NULL,
  `numberdy` int(11) NOT NULL,
  `opportunityLocation` varchar(100) NOT NULL,
  `imageUpload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `Sex` varchar(100) NOT NULL,
  `Specialization` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `identification` int(20) NOT NULL,
  `dateofbirth` varchar(11) NOT NULL,
  `Qualifications` varchar(255) NOT NULL,
  `Ofexperience` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `name`, `pwd`, `email`, `Qualification`, `city`, `Sex`, `Specialization`, `image`, `identification`, `dateofbirth`, `Qualifications`, `Ofexperience`, `phone`) VALUES
(1, 'ala', 'ala123', 'alaoi@gamil.com', 'cs', 'alrtith', 'ذكر', 'cs', 'image/pro.jpg', 4544848, '12\\2\\2024', 'cs', 'hgh djsjhksd \r\ndsj', 42525137);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8 NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `volunteer`
--

INSERT INTO `volunteer` (`id`, `type`, `name`, `status`) VALUES
(1, 'تطوعيه', 'دينيه', 'active'),
(2, 'ثقافيه', 'صحيه', 'active'),
(3, 'عملي', 'تطوير', 'inactive'),
(4, 'تنظيف', 'تطوعيه', 'active');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `data_opporaution`
--
ALTER TABLE `data_opporaution`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `data_volunteer`
--
ALTER TABLE `data_volunteer`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `data_opporaution`
--
ALTER TABLE `data_opporaution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `data_volunteer`
--
ALTER TABLE `data_volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
