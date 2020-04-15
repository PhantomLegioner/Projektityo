-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 02:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ravitsemusterapeuttisovellus`
--

-- --------------------------------------------------------

--
-- Table structure for table `erityisosaaminen`
--

CREATE TABLE `erityisosaaminen` (
  `ERITYISOSAAMINEN_ID` int(11) NOT NULL,
  `OSAAMISEN_NIMI` varchar(100) NOT NULL,
  `KUVAUS` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erityisosaaminen`
--

INSERT INTO `erityisosaaminen` (`ERITYISOSAAMINEN_ID`, `OSAAMISEN_NIMI`, `KUVAUS`) VALUES
(1, 'Diabeettiasiantuntija', 'blaa blaa blaa');

-- --------------------------------------------------------

--
-- Table structure for table `ravitsemusterapeutti`
--

CREATE TABLE `ravitsemusterapeutti` (
  `HENKILO_ID` int(11) NOT NULL,
  `ETUNIMI` varchar(100) DEFAULT NULL,
  `SUKUNIMI` varchar(100) DEFAULT NULL,
  `PAIKKAKUNTA` varchar(100) DEFAULT NULL,
  `OSOITE` varchar(200) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `Etäyhteys` varchar(60) NOT NULL,
  `Koulutus` varchar(60) NOT NULL,
  `Kuvaus` text NOT NULL,
  `Kuva_ID` varchar(60) NOT NULL,
  `PASSWORD` char(60) DEFAULT NULL,
  `PUHELINNRO` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ravitsemusterapeutti`
--

INSERT INTO `ravitsemusterapeutti` (`HENKILO_ID`, `ETUNIMI`, `SUKUNIMI`, `PAIKKAKUNTA`, `OSOITE`, `EMAIL`, `Etäyhteys`, `Koulutus`, `Kuvaus`, `Kuva_ID`, `PASSWORD`, `PUHELINNRO`) VALUES
(1, 'Antti', 'Auvinen', 'Oulu', 'Pyöräkatu 7', 'antti@gmail.com', '', '', '', '', 'jugjfhgkfhgk', '0405473958934'),
(2, 'Matti', 'Auvinen', 'Kuopio', 'Juustotie', 'matti@gmail.com', '', '', '', '', 'Kuusi', '050671857'),
(3, 'Erkki', 'Esimerkki', 'Joensuu', 'Joensuun tie 1', 'erkki.esimerkki@gmail.com', '', '', '', '', 'SALASANA', '40506848'),
(4, 'Juusto', 'Jamppa', 'Juustola', 'Juustotie', 'juusto@hotmail.fi', '', '', '', '', 'Juusto123', '505838376'),
(5, 'Emma', 'Esimerkki', 'Helsinki', 'Hesalantie', 'Emma@gmail.com', '', '', '', '', '$2y$10$qLuWDH7VEU.7xjg/WT4k6u7xLIhUKrR8FdPyds5eWtwaaUNt/4EKW', '40562662'),
(6, 'Esim', 'Suku', 'Turku', 'Turuntie 11', 'Esim@gmail.com', '', '', '', '', '$2y$10$8Cv1a5rJ1hpdFdYjXVuG8On8sWZvZZ3UNxAu1E9qlPoeD1O68e8nS', '5059604'),
(7, 'Esim', 'Esimerkki', 'Juuva', 'Esimtie 1', 'esim@hotmail.com', '', '', '', '', '$2y$10$nXk.7SilZhboeX0W5Ee34OPy0okHfG4gTQ0e9X6s6XIrxRcIbMBtG', '4040560656'),
(8, 'Erkki', 'Esimerkki', 'Kuopio', 'Kuopiontie 12', 'Erkka@gmail.com', '', '', 'Tähän voi kirjoittaa pitkän viestin itsestään.', '', '$2y$10$6U7NGuVJb7xTQwlOS.BAtOYFLIfMPBKB/uFQGiSHiF.XKMzjlcIOC', '0405060406'),
(9, 'Anders', 'Aapola', 'Kuopio', 'Pyörätie 7 B 44', 'Anders@gmail.com', '', '', '', '', '$2y$10$e3omZQhFIhv5ewr1yI4wP.NeLmItarJqctKO97SGghNtmwuOjz0CW', '040569824'),
(10, 'Reetta', 'Esim', 'Kuopio', 'Juuselantie 1', 'reetta@hotmail.fi', '', '', '', '', '$2y$10$eX/rqVShi2DF1Aeo.t/15OQXhGzYT1e7/Jh.//2C99fIno86Hho.y', '0505769344'),
(11, 'Reetta', 'Esimerkki', 'Kuopio', 'Kuopiontie', 'Reetta@hotmail.com', '', '', '', '', '$2y$10$E.KZ9G14iPw.Q8SM7p0HX.jEACW5uqedXrFWsmZhZLRzEHjMud72C', '05056189495');

-- --------------------------------------------------------

--
-- Table structure for table `varattu_aika`
--

CREATE TABLE `varattu_aika` (
  `varaus_id` int(11) NOT NULL,
  `varaaja_etunimi` varchar(60) DEFAULT NULL,
  `varaaja_sukunimi` varchar(60) DEFAULT NULL,
  `puhelinnumero` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `terapeutti_etunimi` varchar(60) DEFAULT NULL,
  `terapeutti_sukunimi` varchar(60) NOT NULL,
  `palvelu_valittu` varchar(60) DEFAULT NULL,
  `paivamaara` date DEFAULT NULL,
  `aloitusaika` varchar(60) DEFAULT NULL,
  `lopetusaika` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `erityisosaaminen`
--
ALTER TABLE `erityisosaaminen`
  ADD PRIMARY KEY (`ERITYISOSAAMINEN_ID`);

--
-- Indexes for table `ravitsemusterapeutti`
--
ALTER TABLE `ravitsemusterapeutti`
  ADD PRIMARY KEY (`HENKILO_ID`);

--
-- Indexes for table `varattu_aika`
--
ALTER TABLE `varattu_aika`
  ADD PRIMARY KEY (`varaus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `erityisosaaminen`
--
ALTER TABLE `erityisosaaminen`
  MODIFY `ERITYISOSAAMINEN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ravitsemusterapeutti`
--
ALTER TABLE `ravitsemusterapeutti`
  MODIFY `HENKILO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `varattu_aika`
--
ALTER TABLE `varattu_aika`
  MODIFY `varaus_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
