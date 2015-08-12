-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2015 at 08:53 PM
-- Server version: 5.0.51
-- PHP Version: 5.3.3-7+squeeze19

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `WebDiP2014x046`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktiv_kodovi`
--

CREATE TABLE IF NOT EXISTS `aktiv_kodovi` (
  `guid` varchar(40) NOT NULL,
  `korisnicko_ime` varchar(50) NOT NULL,
  `datum_reg` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  UNIQUE KEY `qq` (`guid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktiv_kodovi`
--

INSERT INTO `aktiv_kodovi` (`guid`, `korisnicko_ime`, `datum_reg`) VALUES
('5547e90a5bd29', 'mdino', '2015-05-05 23:40:31'),
('55493933cc78d', 'mdino', '2015-05-05 23:42:11'),
('555dcaec09c6e', 'korime', '2015-05-21 14:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `clanci_podrucja`
--

CREATE TABLE IF NOT EXISTS `clanci_podrucja` (
  `idclanci_podrucja` int(11) NOT NULL auto_increment,
  `idtip_clanka` int(11) NOT NULL,
  `korisnik_idkorisnik` int(11) NOT NULL,
  `idpodrucje` int(11) NOT NULL,
  `naslov` varchar(100) default NULL,
  `opis` varchar(400) default NULL,
  `datum` date default NULL,
  `status` varchar(1) default NULL,
  PRIMARY KEY  (`idclanci_podrucja`,`idpodrucje`,`idtip_clanka`,`korisnik_idkorisnik`),
  KEY `fk_clanci_podrucja_korisnik1_idx` (`korisnik_idkorisnik`),
  KEY `fk_clanci_podrucja_podrucje1_idx` (`idpodrucje`),
  KEY `fk_clanci_podrucja_tip_clanka1_idx` (`idtip_clanka`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `clanci_podrucja`
--

INSERT INTO `clanci_podrucja` (`idclanci_podrucja`, `idtip_clanka`, `korisnik_idkorisnik`, `idpodrucje`, `naslov`, `opis`, `datum`, `status`) VALUES
(3, 4, 50, 49, 'quis', 'pharetra.', '2015-03-03', '2'),
(5, 11, 42, 94, 'Praesent', 'lacinia.', '2015-03-04', '1'),
(7, 2, 59, 13, 'tristique', 'inceptos', '2015-03-04', '2'),
(9, 2, 86, 79, 'neque.', 'placerat,', '2015-03-04', '0'),
(13, 4, 99, 10, 'varius.', 'quis', '2015-03-04', '1'),
(13, 4, 88, 37, 'lacus.', 'eleifend', '2015-03-03', '1'),
(18, 3, 62, 10, 'vitae,', 'ornare', '2015-03-03', '0'),
(18, 7, 36, 22, 'volutpat.', 'sed', '2015-03-03', '2'),
(19, 11, 2, 28, 'Duis', 'cursus', '2015-03-04', '2'),
(19, 3, 20, 91, 'Aliquam', 'dolor', '2015-03-04', '0'),
(20, 10, 97, 10, 'interdum', 'eu', '2015-03-03', '0'),
(22, 11, 59, 87, 'sapien,', 'arcu.', '2015-03-04', '0'),
(29, 8, 71, 31, 'massa', 'nec', '2015-03-03', '1'),
(30, 8, 73, 73, 'augue', 'euismod', '2015-03-03', '2'),
(33, 2, 36, 77, 'in', 'eu', '2015-03-03', '1'),
(33, 2, 4, 80, 'vitae', 'lectus', '2015-03-03', '2'),
(34, 5, 24, 32, 'netus', 'elit,', '2015-03-03', '1'),
(36, 7, 52, 56, 'nostra,', 'euismod', '2015-03-03', '2'),
(36, 3, 91, 100, 'lectus', 'auctor', '2015-03-04', '1'),
(38, 11, 34, 61, 'eget', 'sagittis.', '2015-03-04', '2'),
(39, 6, 78, 10, 'mauris', 'nulla.', '2015-03-04', '1'),
(41, 5, 96, 64, 'quis,', 'facilisi.', '2015-03-04', '2'),
(44, 6, 33, 27, 'amet,', 'Sed', '2015-03-03', '1'),
(47, 10, 49, 88, 'pede.', 'dictum', '2015-03-03', '2'),
(48, 2, 22, 76, 'Curae;', 'ac', '2015-03-03', '0'),
(54, 4, 4, 69, 'eleifend', 'vel', '2015-03-03', '2'),
(58, 2, 48, 78, 'arcu', 'eleifend', '2015-03-03', '0'),
(62, 10, 46, 54, 'massa.', 'convallis', '2015-03-03', '0'),
(63, 5, 48, 14, 'In', 'Donec', '2015-03-04', '1'),
(67, 4, 57, 30, 'Nunc', 'Etiam', '2015-03-04', '2'),
(69, 7, 84, 24, 'neque', 'quam.', '2015-03-03', '0'),
(71, 7, 51, 93, 'malesuada', 'gravida.', '2015-03-04', '1'),
(72, 2, 50, 31, 'condimentum.', 'Mauris', '2015-03-03', '1'),
(73, 4, 98, 18, 'nonummy', 'sit', '2015-03-04', '1'),
(75, 5, 98, 69, 'Sed', 'enim,', '2015-03-03', '1'),
(76, 7, 63, 7, 'id', 'ut', '2015-03-04', '1'),
(77, 6, 52, 31, 'Fusce', 'pharetra', '2015-03-03', '0'),
(77, 2, 93, 40, 'Donec', 'pharetra', '2015-03-03', '2'),
(78, 7, 17, 51, 'ut', 'vitae', '2015-03-03', '0'),
(82, 4, 27, 10, 'Aliquam', 'mi', '2015-03-04', '0'),
(83, 7, 2, 17, 'at,', 'mauris,', '2015-03-03', '2'),
(87, 3, 25, 22, 'magna.', 'ipsum', '2015-03-04', '2'),
(89, 2, 46, 96, 'euismod', 'id', '2015-03-03', '1'),
(90, 3, 65, 12, 'Sed', 'mi,', '2015-03-03', '0'),
(91, 3, 52, 47, 'cursus.', 'magnis', '2015-03-03', '2'),
(98, 7, 55, 99, 'felis', 'sodales', '2015-03-03', '0'),
(99, 11, 88, 100, 'Nunc', 'tempus', '2015-03-03', '1');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `idkomentar` int(11) NOT NULL auto_increment,
  `idclanci_podrucja` int(11) NOT NULL,
  `korisnik_idkorisnik` int(11) NOT NULL,
  `tekst` varchar(250) default NULL,
  PRIMARY KEY  (`idkomentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`idkomentar`, `idclanci_podrucja`, `korisnik_idkorisnik`, `tekst`) VALUES
(28, 32, 61, 'tekst'),
(37, 9, 6, 'tekst'),
(49, 2, 67, 'tekst'),
(63, 58, 49, 'tekst'),
(75, 96, 14, 'tekst'),
(79, 84, 23, 'tekst'),
(85, 6, 49, 'tekst'),
(86, 8, 23, 'tekst');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE IF NOT EXISTS `korisnik` (
  `idkorisnik` int(11) NOT NULL auto_increment,
  `tip_korisnika_idtip_korisnika` int(11) NOT NULL,
  `ime` varchar(45) default NULL,
  `prezime` varchar(45) default NULL,
  `username` varchar(45) default NULL,
  `email` varchar(100) default NULL,
  `datum_rodenja` date default NULL,
  `adresa` varchar(300) NOT NULL,
  `lozinka` varchar(50) NOT NULL,
  `spol` varchar(10) NOT NULL,
  `status` int(11) NOT NULL default '0',
  PRIMARY KEY  (`idkorisnik`,`tip_korisnika_idtip_korisnika`),
  KEY `fk_korisnik_tip_korisnika1_idx` (`tip_korisnika_idtip_korisnika`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`idkorisnik`, `tip_korisnika_idtip_korisnika`, `ime`, `prezime`, `username`, `email`, `datum_rodenja`, `adresa`, `lozinka`, `spol`, `status`) VALUES
(1, 1, 'Celeste', 'Mcfadden', 'Ross', 'luctus.ipsum@quamdignissimpharetra.ca', '0000-00-00', '', '', '', 0),
(2, 3, 'Caleb', 'Lewis', 'Jonah', 'Curabitur@nisinibhlacinia.org', '0000-00-00', '', '', '', 0),
(3, 3, 'Wallace', 'Washington', 'Xerxes', 'Sed.eget.lacus@iaculis.ca', '2024-07-13', '', '', '', 0),
(4, 3, 'Piper', 'Booker', 'Whitney', 'nunc.ullamcorper.eu@pretiumet.edu', '0000-00-00', '', '', '', 0),
(5, 3, 'Martena', 'Perry', 'Hector', 'elit.pede.malesuada@nec.edu', '2010-11-12', '', '', '', 0),
(6, 3, 'Dahlia', 'Williamson', 'Michelle', 'tincidunt@vitaepurusgravida.edu', '0000-00-00', '', '', '', 0),
(7, 1, 'Timothy', 'Head', 'Melodie', 'consequat.nec.mollis@vitaenibhDonec.edu', '2019-10-13', '', '', '', 0),
(8, 2, 'Risa', 'Cooley', 'Blythe', 'Class.aptent.taciti@sitametornare.edu', '0000-00-00', '', '', '', 0),
(9, 2, 'Mannix', 'Bonner', 'Macaulay', 'arcu.Vestibulum@tinciduntadipiscingMauris.net', '0000-00-00', '', '', '', 0),
(10, 2, 'Petra', 'Hall', 'Hermione', 'Ut.semper.pretium@pedeSuspendisse.edu', '2022-03-15', '', '', '', 0),
(11, 2, 'Darius', 'Gutierrez', 'Allen', 'nunc@estacfacilisis.co.uk', '0000-00-00', '', '', '', 0),
(12, 3, 'Illiana', 'Knowles', 'Yvette', 'eget.ipsum@ornare.edu', '0000-00-00', '', '', '', 0),
(13, 3, 'Serena', 'Pena', 'Briar', 'parturient@acfermentumvel.co.uk', '0000-00-00', '', '', '', 0),
(14, 1, 'Odysseus', 'Gay', 'Colton', 'magna.Lorem.ipsum@eudui.ca', '0000-00-00', '', '', '', 0),
(15, 3, 'Damon', 'Workman', 'Micah', 'eu@commodoauctorvelit.co.uk', '0000-00-00', '', '', '', 0),
(16, 3, 'Kalia', 'Serrano', 'Venus', 'faucibus.lectus.a@orciin.co.uk', '0000-00-00', '', '', '', 0),
(17, 2, 'Jakeem', 'Hanson', 'Brynn', 'massa.non@tinciduntpedeac.net', '0000-00-00', '', '', '', 0),
(18, 1, 'Bree', 'Lambert', 'Elaine', 'quis@veliteu.ca', '2020-07-15', '', '', '', 0),
(19, 1, 'MacKenzie', 'Banks', 'Armand', 'Nunc@Vivamusmolestie.co.uk', '2015-07-01', '', '', '', 0),
(20, 2, 'Zachery', 'Leonard', 'Adrienne', 'eu.arcu.Morbi@dictum.org', '0000-00-00', '', '', '', 0),
(21, 1, 'Anjolie', 'Valentine', 'Brody', 'lorem@Integerurna.com', '0000-00-00', '', '', '', 0),
(22, 2, 'Bevis', 'Burch', 'Indigo', 'Integer@elit.org', '0000-00-00', '', '', '', 0),
(23, 2, 'Maggie', 'Church', 'Yeo', 'et@aliquameu.edu', '2020-03-12', '', '', '', 0),
(24, 3, 'Pamela', 'Acevedo', 'Beatrice', 'mi.enim@ornare.ca', '2019-06-02', '', '', '', 0),
(25, 1, 'Quon', 'Fulton', 'Dane', 'tellus.Nunc.lectus@Utnec.co.uk', '2017-07-15', '', '', '', 0),
(26, 2, 'Leo', 'Armstrong', 'Mikayla', 'nec.ligula.consectetuer@MaurisnullaInteger.net', '0000-00-00', '', '', '', 0),
(27, 1, 'Aileen', 'Dodson', 'Clarke', 'at@odioAliquamvulputate.co.uk', '0000-00-00', '', '', '', 0),
(28, 2, 'Nadine', 'Hudson', 'Zenia', 'vitae.sodales.at@morbitristique.com', '0000-00-00', '', '', '', 0),
(29, 2, 'Sheila', 'Goodman', 'Francis', 'vehicula.aliquet@non.org', '0000-00-00', '', '', '', 0),
(30, 3, 'Rana', 'Stout', 'Alika', 'risus.Nunc.ac@felis.co.uk', '2017-05-00', '', '', '', 0),
(31, 2, 'Fulton', 'Macias', 'Kadeem', 'Duis@nequeseddictum.edu', '0000-00-00', '', '', '', 0),
(32, 2, 'Xandra', 'Hurst', 'Allistair', 'Nam@convallis.com', '2023-07-03', '', '', '', 0),
(33, 2, 'Eric', 'Price', 'Reuben', 'dui.semper@ligula.edu', '2002-03-11', '', '', '', 0),
(34, 3, 'Lance', 'Bray', 'Gretchen', 'pharetra.ut@lacusQuisque.edu', '2016-12-08', '', '', '', 0),
(35, 1, 'Halee', 'Lamb', 'Colette', 'dapibus@vel.com', '0000-00-00', '', '', '', 0),
(36, 2, 'Katelyn', 'Schultz', 'Howard', 'pede.et.risus@acfermentumvel.ca', '2002-04-09', '', '', '', 0),
(37, 1, 'Flynn', 'Howell', 'Nissim', 'Proin.vel@orcitinciduntadipiscing.org', '0000-00-00', '', '', '', 0),
(38, 2, 'Cleo', 'Leon', 'Chester', 'neque.Nullam.nisl@inlobortistellus.edu', '2019-11-00', '', '', '', 0),
(39, 1, 'Hanna', 'Snyder', 'Quentin', 'mauris.sapien.cursus@enimconsequatpurus.ca', '2029-11-03', '', '', '', 0),
(40, 1, 'Noelle', 'Heath', 'Taylor', 'eu.neque@imperdiet.co.uk', '0000-00-00', '', '', '', 0),
(41, 3, 'Angela', 'Thornton', 'Dexter', 'fringilla@sodalesMaurisblandit.com', '0000-00-00', '', '', '', 0),
(42, 3, 'Gareth', 'Lloyd', 'Kuame', 'et.eros.Proin@nibh.edu', '0000-00-00', '', '', '', 0),
(43, 1, 'Mariam', 'Henson', 'Quinlan', 'Fusce.fermentum.fermentum@ullamcorper.ca', '2011-08-12', '', '', '', 0),
(44, 3, 'Prescott', 'Richmond', 'Berk', 'In@fringillaestMauris.net', '0000-00-00', '', '', '', 0),
(45, 3, 'Kirsten', 'Powell', 'Igor', 'arcu.Sed.eu@feliseget.co.uk', '0000-00-00', '', '', '', 0),
(46, 2, 'Omar', 'Eaton', 'Maryam', 'erat.Vivamus@Loremipsum.edu', '2028-10-11', '', '', '', 0),
(47, 2, 'Chelsea', 'Strong', 'Dexter', 'elementum@nonlorem.com', '0000-00-00', '', '', '', 0),
(48, 2, 'Tasha', 'Andrews', 'Ruth', 'tempor.erat.neque@conubianostra.org', '0000-00-00', '', '', '', 0),
(49, 3, 'Cade', 'Padilla', 'Madonna', 'mollis.non@pede.net', '0000-00-00', '', '', '', 0),
(50, 2, 'Abigail', 'Charles', 'Miriam', 'ad.litora.torquent@egestashendreritneque.ca', '0000-00-00', '', '', '', 0),
(51, 3, 'Ezekiel', 'Rivera', 'Mercedes', 'lectus@euodiotristique.net', '0000-00-00', '', '', '', 0),
(52, 3, 'Alvin', 'Daniels', 'Jeremy', 'sed.est@consequatpurusMaecenas.com', '0000-00-00', '', '', '', 0),
(53, 3, 'Keefe', 'Browning', 'Carolyn', 'ante.Nunc.mauris@enim.edu', '0000-00-00', '', '', '', 0),
(54, 3, 'Darrel', 'Hebert', 'Portia', 'Donec.felis.orci@a.edu', '0000-00-00', '', '', '', 0),
(55, 3, 'Kim', 'Whitley', 'Ulric', 'Nunc.laoreet.lectus@Aeneanegestas.ca', '0000-00-00', '', '', '', 0),
(56, 3, 'Naomi', 'Beck', 'Sonya', 'Vivamus.non@porttitorinterdumSed.co.uk', '2013-04-00', '', '', '', 0),
(57, 1, 'Blair', 'Wolf', 'Adele', 'Nulla.facilisis.Suspendisse@Etiam.co.uk', '0000-00-00', '', '', '', 0),
(58, 3, 'Kevin', 'Hernandez', 'Isabella', 'cursus.in@consectetueripsum.com', '0000-00-00', '', '', '', 0),
(59, 3, 'Maite', 'Oneil', 'Chava', 'risus.Duis@et.com', '0000-00-00', '', '', '', 0),
(60, 2, 'Fiona', 'Garcia', 'Sandra', 'a.arcu@IntegermollisInteger.edu', '0000-00-00', '', '', '', 0),
(61, 3, 'Cameron', 'Vega', 'Blake', 'et@vitaeposuereat.edu', '2009-09-15', '', '', '', 0),
(62, 2, 'Raya', 'Cline', 'Harlan', 'sit@at.com', '2010-11-13', '', '', '', 0),
(63, 2, 'Kennan', 'Holder', 'Chastity', 'orci.luctus@nullaanteiaculis.edu', '2013-11-02', '', '', '', 0),
(64, 1, 'Cailin', 'Jones', 'Yeo', 'Vestibulum.ut@diamDuismi.ca', '0000-00-00', '', '', '', 0),
(65, 1, 'Brett', 'Mathis', 'Ginger', 'arcu.Aliquam@malesuadavelvenenatis.com', '0000-00-00', '', '', '', 0),
(66, 1, 'Daniel', 'Morrison', 'Ronan', 'non.ante.bibendum@Nunc.edu', '0000-00-00', '', '', '', 0),
(67, 1, 'Halee', 'Lara', 'Shellie', 'dictum.augue@acmi.net', '0000-00-00', '', '', '', 0),
(68, 3, 'Hillary', 'Pickett', 'Scarlett', 'pretium.neque.Morbi@Donec.edu', '2017-12-14', '', '', '', 0),
(69, 2, 'Clio', 'Blevins', 'Abbot', 'magna.et.ipsum@anteVivamusnon.org', '2011-01-02', '', '', '', 0),
(70, 1, 'Cooper', 'Hendrix', 'Maya', 'adipiscing.lobortis@velit.edu', '0000-00-00', '', '', '', 0),
(71, 1, 'Valentine', 'Bowman', 'Adele', 'dignissim.tempor@orciluctuset.net', '0000-00-00', '', '', '', 0),
(72, 1, 'Ivan', 'Fletcher', 'Colette', 'ut.pellentesque.eget@pedemalesuada.net', '2031-03-08', '', '', '', 0),
(73, 2, 'Camille', 'Holt', 'Cyrus', 'lobortis@ac.com', '0000-00-00', '', '', '', 0),
(74, 1, 'Harding', 'Payne', 'Tanner', 'a.odio@aptent.net', '2016-06-12', '', '', '', 0),
(75, 2, 'Leo', 'Church', 'Shoshana', 'magna@semperpretium.edu', '0000-00-00', '', '', '', 0),
(76, 3, 'Brenna', 'May', 'Stephanie', 'elit.elit.fermentum@justoPraesentluctus.net', '0000-00-00', '', '', '', 0),
(77, 3, 'Idona', 'Baker', 'Timon', 'et@etcommodoat.com', '0000-00-00', '', '', '', 0),
(78, 3, 'Ross', 'Scott', 'Velma', 'Fusce.fermentum@augue.net', '0000-00-00', '', '', '', 0),
(79, 3, 'Rooney', 'Donaldson', 'Hedwig', 'tempus.risus.Donec@sagittislobortis.co.uk', '0000-00-00', '', '', '', 0),
(80, 1, 'Cleo', 'Simpson', 'Althea', 'nibh@luctusipsum.edu', '0000-00-00', '', '', '', 0),
(81, 3, 'Harding', 'Atkins', 'Paloma', 'sed.pede.nec@MorbimetusVivamus.com', '2022-06-10', '', '', '', 0),
(82, 2, 'Charles', 'Finch', 'Kylynn', 'cursus.vestibulum.Mauris@semPellentesqueut.edu', '0000-00-00', '', '', '', 0),
(83, 3, 'Chloe', 'Mejia', 'Chaney', 'ultrices@utcursus.co.uk', '0000-00-00', '', '', '', 0),
(84, 2, 'Wang', 'Schwartz', 'Hasad', 'malesuada@nec.org', '2002-08-09', '', '', '', 0),
(85, 3, 'Lana', 'Roberts', 'Lilah', 'odio.sagittis.semper@in.org', '2007-12-13', '', '', '', 0),
(86, 2, 'Winter', 'Marshall', 'Felicia', 'Curabitur@elitpretiumet.co.uk', '0000-00-00', '', '', '', 0),
(87, 3, 'Brett', 'Lancaster', 'Stone', 'ut.nisi.a@at.net', '0000-00-00', '', '', '', 0),
(88, 2, 'Phillip', 'Webb', 'Erasmus', 'est@egestasligulaNullam.org', '0000-00-00', '', '', '', 0),
(89, 1, 'Eric', 'Workman', 'Emery', 'Vivamus.molestie@sitamet.edu', '2010-09-10', '', '', '', 0),
(90, 1, 'Holly', 'Norton', 'Preston', 'ipsum.dolor.sit@diam.net', '2007-07-12', '', '', '', 0),
(91, 3, 'Cole', 'Farmer', 'Hakeem', 'ipsum.porta@nuncid.co.uk', '0000-00-00', '', '', '', 0),
(92, 1, 'Kylan', 'Ortiz', 'Patrick', 'cursus.non.egestas@ultriciessemmagna.net', '2019-07-03', '', '', '', 0),
(93, 2, 'Hamilton', 'Kline', 'Darrel', 'Nullam.feugiat.placerat@ultricies.ca', '2006-02-11', '', '', '', 0),
(94, 2, 'Tad', 'Allison', 'Dylan', 'ultrices@fermentummetus.org', '2012-01-04', '', '', '', 0),
(95, 2, 'Norman', 'Greene', 'Quinlan', 'In@cursus.net', '0000-00-00', '', '', '', 0),
(96, 2, 'Reece', 'Dickerson', 'Hayes', 'erat.nonummy@velpede.net', '2005-09-04', '', '', '', 0),
(97, 2, 'Lance', 'Garner', 'Helen', 'non.enim.commodo@Nuncut.ca', '0000-00-00', '', '', '', 0),
(98, 1, 'Emma', 'Russell', 'Kylee', 'ut@nullaCras.ca', '0000-00-00', '', '', '', 0),
(99, 3, 'Molly', 'Herring', 'Belle', 'scelerisque@molestiearcuSed.net', '0000-00-00', '', 'dino', '', 0),
(100, 1, 'Amaya', 'Fuller', 'Jasper', 'Aliquam.auctor.velit@cursusdiam.edu', '2005-06-11', '', 'dino', '', 1),
(101, 3, 'MA', 'Ma', 'd', 'darktroll1@net.hr', '0000-00-00', 'A', 'saddsada"211ASD', 'male', 0),
(102, 3, 'MA', 'Ma', 'dsadada', 'dino.musliu@gmail.com', '0000-00-00', 'A', 'Asads2123', 'male', 0),
(109, 3, 'Dino', 'Musliu', 'mdino', 'mdino@foi.hr', '0000-00-00', 'Sda', '12323AAdd', 'male', 1),
(110, 3, 'Jurica', 'Å eva', 'korime', 'jseva@foi.hr', '2015-04-27', 'Adresa', 'Lozinka11!', 'male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lokacija`
--

CREATE TABLE IF NOT EXISTS `lokacija` (
  `idlokacija` int(11) NOT NULL auto_increment,
  `naziv` varchar(45) default NULL,
  `postanski` varchar(5) default NULL,
  PRIMARY KEY  (`idlokacija`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `lokacija`
--

INSERT INTO `lokacija` (`idlokacija`, `naziv`, `postanski`) VALUES
(1, 'Wommelgem', '22778'),
(2, 'Vitrolles', '86329'),
(3, 'Mannekensvere', '97031'),
(4, 'Temploux', '50702'),
(5, 'Certaldo', '73936'),
(6, 'Delianuova', '76252'),
(7, 'Rocky View', '6244'),
(8, 'Delta', '7642'),
(9, 'Campbeltown', '43833'),
(10, 'Leerbeek', '26-39'),
(11, 'Tournefeuille', '60417'),
(12, 'Kitchener', '87348'),
(13, 'Stewart', '52-97'),
(14, 'Windermere', '19848'),
(15, 'Birmingham', '36676'),
(16, 'Montoggio', '6778'),
(17, 'Fraser Lake', '17640'),
(18, 'Milestone', '34262'),
(19, 'Porpetto', '75520'),
(20, 'Ophain-Bois-Seigneur-Isaac', '6139'),
(21, 'Blenheim', '40-39'),
(22, 'Kayseri', 'X7 1D'),
(23, 'Felitto', '97438'),
(24, 'Serramonacesca', '10403'),
(25, 'Waitara', '0132'),
(26, 'Paranaguá', '49392'),
(27, 'Westrem', '1021'),
(28, 'Grande Cache', '91695'),
(29, 'Merritt', 'N6R 2'),
(30, 'Reutlingen', 'Y18 4'),
(31, 'Draguignan', '8720'),
(32, 'Pontboset', 'OC56 '),
(33, 'Keumiee', '9963'),
(34, 'Brodick', 'E8H 6'),
(35, 'Canino', '11108'),
(36, 'Airdrie', '64039'),
(37, 'Racine', '05-41'),
(38, 'Mobile', '3822'),
(39, 'L?vis', '4249'),
(40, 'San Felice a Cancello', '5266'),
(41, 'Coldstream', '51490'),
(42, 'Hemel Hempstead', '9595'),
(43, 'Troyes', '15061'),
(44, 'Bexbach', '16717'),
(45, 'Chiusa Sclafani', '32874'),
(46, 'Morgex', '7232A'),
(47, 'Vallepietra', '06-05'),
(48, 'Rotello', '71432'),
(49, 'Koersel', 'I51 1'),
(50, 'Khanewal', 'E96 9'),
(51, 'Pune', '80852'),
(52, 'Arras', '2415R'),
(53, 'Schwalbach', '1010'),
(54, 'Aulnay-sous-Bois', '17148'),
(55, 'Merrickville-Wolford', '12391'),
(56, 'La Baie', '19273'),
(57, 'Blankenberge', '27916'),
(58, 'Medicine Hat', '1304'),
(59, 'Sogliano Cavour', '37029'),
(60, 'Louveign?', '5121'),
(61, 'Tumbler Ridge', '18595'),
(62, 'Rycroft', '6114M'),
(63, 'Campina Grande', '3671'),
(64, 'Den Helder', '36376'),
(65, 'Piscinas', '3490'),
(66, 'Falkensee', '7808L'),
(67, 'Sant''Egidio alla Vibrata', 'TB6 0'),
(68, 'Flushing', '94421'),
(69, 'Tuktoyaktuk', '68723'),
(70, 'Sète', '05714'),
(71, 'Rivi?re', '34667'),
(72, 'Rocky View', '3556'),
(73, 'Bursa', '48380'),
(74, 'Kettering', '95-11'),
(75, 'Moerbeke', 'G3E 2'),
(76, 'Lonzee', '85971'),
(77, 'Thuillies', '88771'),
(78, 'Belcarra', 'E2Z 0'),
(79, 'Veldwezelt', '37-25'),
(80, 'Auburn', '91998'),
(81, 'Konin', 'T8Y 3'),
(82, 'Ashoknagar-Kalyangarh', '7705'),
(83, 'Leuze', '02964'),
(84, 'Lucknow', '59995'),
(85, 'Chelsea', '0820K'),
(86, 'Algeciras', '4468'),
(87, 'Humbeek', '52360'),
(88, 'Gattatico', '56374'),
(89, 'Riparbella', '74859'),
(90, 'Idaho Falls', '30-90'),
(91, 'Dilbeek', '70615'),
(92, 'Placanica', '9253'),
(93, 'Rockville', '6211'),
(94, 'Westrem', '14200'),
(95, 'Thunder Bay', '38023'),
(96, 'H?villers', '30210'),
(97, 'West Ham', '12806'),
(98, 'Crewe', '77968'),
(99, 'Wolfenb?ttel', '7717'),
(100, 'Lang', '18224');

-- --------------------------------------------------------

--
-- Table structure for table `materijal`
--

CREATE TABLE IF NOT EXISTS `materijal` (
  `idmaterijal` int(11) NOT NULL auto_increment,
  `idkorisnik` int(11) NOT NULL,
  `idclanci_podrucja` int(11) NOT NULL,
  `idtip_materijala` int(11) NOT NULL,
  `naziv` varchar(45) default NULL,
  `opis` varchar(45) default NULL,
  PRIMARY KEY  (`idmaterijal`,`idkorisnik`,`idclanci_podrucja`,`idtip_materijala`),
  KEY `fk_materijal_korisnik1_idx` (`idkorisnik`),
  KEY `fk_materijal_clanci_podrucja1_idx` (`idclanci_podrucja`),
  KEY `fk_materijal_table11_idx` (`idtip_materijala`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `materijal`
--

INSERT INTO `materijal` (`idmaterijal`, `idkorisnik`, `idclanci_podrucja`, `idtip_materijala`, `naziv`, `opis`) VALUES
(7, 48, 3, 2, 'cursus', 'quis'),
(9, 81, 3, 3, 'Morbi', 'in'),
(52, 77, 3, 2, 'eleifend', 'elementum'),
(56, 43, 3, 3, 'ornare,', 'luctus'),
(67, 59, 3, 1, 'Lorem', 'diam'),
(75, 20, 3, 3, 'nunc.', 'Etiam'),
(76, 81, 3, 2, 'lacus.', 'Proin'),
(82, 64, 3, 1, 'arcu.', 'pellentesque'),
(95, 17, 3, 2, 'in', 'tellus,'),
(96, 94, 3, 2, 'nec', 'lobortis'),
(99, 46, 3, 3, 'nec,', 'Donec');

-- --------------------------------------------------------

--
-- Table structure for table `moderator_podrucja`
--

CREATE TABLE IF NOT EXISTS `moderator_podrucja` (
  `idkorisnik` int(11) NOT NULL,
  `idpodrucje` int(11) NOT NULL,
  PRIMARY KEY  (`idkorisnik`,`idpodrucje`),
  KEY `fk_moderator_podrucja_korisnik1_idx` (`idkorisnik`),
  KEY `fk_moderator_podrucja_podrucje1_idx` (`idpodrucje`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moderator_podrucja`
--

INSERT INTO `moderator_podrucja` (`idkorisnik`, `idpodrucje`) VALUES
(5, 91),
(17, 29),
(34, 31),
(34, 95),
(50, 23),
(55, 57),
(59, 9),
(70, 8),
(75, 81),
(81, 1),
(84, 58),
(85, 25),
(87, 57),
(92, 66),
(97, 24),
(100, 8);

-- --------------------------------------------------------

--
-- Table structure for table `obavijesti`
--

CREATE TABLE IF NOT EXISTS `obavijesti` (
  `idobavijest` int(11) NOT NULL auto_increment,
  `idpodrucje` int(11) NOT NULL,
  `idkorisnik` int(11) NOT NULL,
  `naslov` varchar(100) default NULL,
  `opis` varchar(400) default NULL,
  `datum` date default NULL,
  `status` varchar(1) default NULL,
  PRIMARY KEY  (`idobavijest`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `obavijesti`
--

INSERT INTO `obavijesti` (`idobavijest`, `idpodrucje`, `idkorisnik`, `naslov`, `opis`, `datum`, `status`) VALUES
(2, 74, 57, 'torquent', 'ac', '2015-06-23', '1'),
(3, 93, 33, 'malesuada', 'habitant', '2016-03-25', '1'),
(9, 60, 9, 'parturient', 'Nunc', '2015-11-15', '1'),
(35, 5, 80, 'feugiat', 'nec', '2015-01-05', '1'),
(40, 87, 55, 'turpis', 'semper', '2015-12-08', '0'),
(47, 25, 16, 'velit.', 'Nulla', '2016-02-26', '2'),
(49, 18, 25, 'enim', 'inceptos', '2015-02-13', '1'),
(52, 35, 20, 'at,', 'ante', '2014-10-31', '2'),
(54, 10, 12, 'Quisque', 'Donec', '2014-11-08', '2'),
(56, 43, 37, 'in', 'mauris', '2014-06-15', '2'),
(71, 5, 10, 'pede', 'turpis.', '2016-01-29', '0'),
(85, 28, 47, 'egestas,', 'ipsum', '2014-10-30', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ocjena`
--

CREATE TABLE IF NOT EXISTS `ocjena` (
  `korisnik_idkorisnik` int(11) NOT NULL,
  `idclanci_podrucja` int(11) NOT NULL,
  `ocjena` varchar(1) default NULL,
  PRIMARY KEY  (`korisnik_idkorisnik`,`idclanci_podrucja`),
  KEY `fk_ocjena_clanci_podrucja1_idx` (`idclanci_podrucja`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ocjena`
--

INSERT INTO `ocjena` (`korisnik_idkorisnik`, `idclanci_podrucja`, `ocjena`) VALUES
(1, 7, NULL),
(18, 78, '3'),
(20, 89, '3'),
(29, 78, '1'),
(52, 77, '5'),
(63, 99, '5'),
(71, 99, '3'),
(74, 90, '4'),
(77, 91, '1'),
(82, 39, '4');

-- --------------------------------------------------------

--
-- Table structure for table `podrucje`
--

CREATE TABLE IF NOT EXISTS `podrucje` (
  `idpodrucje` int(11) NOT NULL auto_increment,
  `idlokacija` int(11) NOT NULL,
  `naziv` varchar(45) default NULL,
  `opis` varchar(300) default NULL,
  PRIMARY KEY  (`idpodrucje`,`idlokacija`),
  KEY `fk_podrucje_grad1_idx` (`idlokacija`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `podrucje`
--

INSERT INTO `podrucje` (`idpodrucje`, `idlokacija`, `naziv`, `opis`) VALUES
(1, 89, 'Maranhão', 'opis'),
(2, 10, 'AP', 'opis'),
(3, 49, 'Tamil Nadu', 'opis'),
(4, 74, 'Alabama', 'opis'),
(5, 82, 'Ist', 'opis'),
(6, 42, 'NI', 'opis'),
(7, 72, 'Hawaii', 'opis'),
(8, 4, 'Calabria', 'opis'),
(9, 3, 'LAZ', 'opis'),
(10, 23, 'São Paulo', 'opis'),
(11, 23, 'North Island', 'opis'),
(12, 84, 'Bremen', 'opis'),
(13, 77, 'AN', 'opis'),
(14, 3, 'Suffolk', 'opis'),
(15, 21, 'Ontario', 'opis'),
(16, 14, 'N.', 'opis'),
(17, 81, 'Ontario', 'opis'),
(18, 10, 'South Island', 'opis'),
(19, 81, 'New Brunswick', 'opis'),
(20, 41, 'AB', 'opis'),
(21, 19, 'SP', 'opis'),
(22, 48, 'AL', 'opis'),
(23, 72, 'MG', 'opis'),
(24, 38, 'CN', 'opis'),
(25, 15, 'VB', 'opis'),
(26, 88, 'Dolno?l?skie', 'opis'),
(27, 99, 'Ist', 'opis'),
(28, 27, 'U', 'opis'),
(29, 85, 'HB', 'opis'),
(30, 4, 'SC', 'opis'),
(31, 7, 'WA', 'opis'),
(32, 35, 'Dr', 'opis'),
(33, 50, 'CA', 'opis'),
(34, 91, 'NI', 'opis'),
(35, 44, 'Louisiana', 'opis'),
(36, 49, 'North Rhine-Westphalia', 'opis'),
(37, 88, 'Wie', 'opis'),
(38, 15, 'Connacht', 'opis'),
(39, 78, 'Alajuela', 'opis'),
(40, 66, 'Ankara', 'opis'),
(41, 17, 'VIC', 'opis'),
(42, 39, 'WB', 'opis'),
(43, 4, 'Lubelskie', 'opis'),
(44, 95, 'IN', 'opis'),
(45, 47, 'South Island', 'opis'),
(46, 81, 'BC', 'opis'),
(47, 81, 'Munster', 'opis'),
(48, 27, 'Connacht', 'opis'),
(49, 48, 'BA', 'opis'),
(50, 92, 'U', 'opis'),
(51, 18, 'Adana', 'opis'),
(52, 53, 'WA', 'opis'),
(53, 70, 'C', 'opis'),
(54, 30, 'C', 'opis'),
(55, 93, 'AN', 'opis'),
(56, 93, 'ZP', 'opis'),
(57, 36, 'Victoria', 'opis'),
(58, 61, 'BE', 'opis'),
(59, 28, 'Z.', 'opis'),
(60, 8, 'Louisiana', 'opis'),
(61, 12, 'Wie', 'opis'),
(62, 10, 'Limburg', 'opis'),
(63, 68, 'Bremen', 'opis'),
(64, 82, 'ID', 'opis'),
(65, 21, 'South Island', 'opis'),
(66, 41, 'Mer', 'opis'),
(67, 12, 'NI', 'opis'),
(68, 37, 'Ontario', 'opis'),
(69, 47, 'Ov', 'opis'),
(70, 44, 'KR', 'opis'),
(71, 25, 'HH', 'opis'),
(72, 6, 'Paraná', 'opis'),
(73, 33, 'Manitoba', 'opis'),
(74, 69, 'São Paulo', 'opis'),
(75, 44, 'Rio Grande do Sul', 'opis'),
(76, 36, 'Alsace', 'opis'),
(77, 66, 'Mississippi', 'opis'),
(78, 88, 'Wie', 'opis'),
(79, 30, 'Maharastra', 'opis'),
(80, 44, 'AL', 'opis'),
(81, 88, 'Bahia', 'opis'),
(82, 55, 'Borno', 'opis'),
(83, 18, 'CA', 'opis'),
(84, 85, 'Catalunya', 'opis'),
(85, 7, 'Katsina', 'opis'),
(86, 29, 'HR', 'opis'),
(87, 5, 'Newfoundland and Labrador', 'opis'),
(88, 64, 'RI', 'opis'),
(89, 54, 'Provence-Alpes-Côte d''Azur', 'opis'),
(90, 36, 'KY', 'opis'),
(91, 85, 'MN', 'opis'),
(92, 3, 'WE', 'opis'),
(93, 33, 'NI', 'opis'),
(94, 94, 'WB', 'opis'),
(95, 22, 'Yukon', 'opis'),
(96, 73, 'KL', 'opis'),
(97, 64, 'HH', 'opis'),
(98, 50, 'Missouri', 'opis'),
(99, 18, 'PD', 'opis'),
(100, 34, 'Namen', 'opis');

-- --------------------------------------------------------

--
-- Table structure for table `pretplata`
--

CREATE TABLE IF NOT EXISTS `pretplata` (
  `korisnik_idkorisnik` int(11) NOT NULL,
  `podrucje_idpodrucje` int(11) NOT NULL,
  `status` varchar(1) default NULL,
  PRIMARY KEY  (`korisnik_idkorisnik`,`podrucje_idpodrucje`),
  KEY `fk_pretplata_podrucje1_idx` (`podrucje_idpodrucje`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pretplata`
--

INSERT INTO `pretplata` (`korisnik_idkorisnik`, `podrucje_idpodrucje`, `status`) VALUES
(1, 70, '2'),
(1, 72, '1'),
(2, 34, '1'),
(3, 22, '0'),
(3, 23, '0'),
(3, 88, '2'),
(6, 71, '0'),
(6, 75, '1'),
(8, 80, '0'),
(9, 92, '2'),
(10, 87, '1'),
(11, 37, '2'),
(12, 13, '2'),
(17, 34, '1'),
(17, 73, '0'),
(17, 95, '2'),
(19, 7, '1'),
(19, 43, '1'),
(19, 81, '2'),
(19, 93, '2'),
(21, 87, '2'),
(22, 92, '0'),
(24, 23, '2'),
(25, 86, '0'),
(28, 26, '2'),
(28, 80, '1'),
(29, 31, '0'),
(29, 60, '0'),
(29, 98, '0'),
(30, 14, '2'),
(30, 95, '2'),
(32, 29, '2'),
(33, 1, '0'),
(34, 51, '0'),
(35, 51, '1'),
(35, 59, '0'),
(36, 44, '2'),
(37, 89, '0'),
(38, 51, '0'),
(39, 9, '2'),
(39, 45, '2'),
(41, 12, '2'),
(41, 65, '2'),
(43, 4, '0'),
(43, 22, '0'),
(43, 43, '1'),
(44, 20, '2'),
(44, 70, '1'),
(44, 90, '2'),
(47, 69, '1'),
(48, 34, '0'),
(48, 52, '1'),
(50, 82, '0'),
(51, 12, '1'),
(51, 66, '1'),
(51, 73, '2'),
(51, 78, '2'),
(55, 42, '0'),
(56, 60, '0'),
(61, 25, '1'),
(62, 49, '2'),
(62, 54, '0'),
(62, 59, '1'),
(62, 66, '1'),
(64, 28, '1'),
(65, 1, '0'),
(66, 7, '1'),
(66, 26, '0'),
(66, 64, '2'),
(68, 44, '2'),
(68, 85, '1'),
(73, 47, '1'),
(73, 49, '0'),
(73, 83, '1'),
(73, 86, '2'),
(74, 43, '0'),
(77, 97, '0'),
(81, 31, '0'),
(82, 70, '2'),
(85, 19, '2'),
(85, 83, '1'),
(86, 32, '0'),
(86, 80, '1'),
(88, 29, '0'),
(89, 2, '0'),
(89, 21, '2'),
(89, 72, '1'),
(89, 80, '1'),
(90, 27, '1'),
(90, 49, '1'),
(94, 8, '1'),
(94, 10, '1'),
(94, 42, '0'),
(96, 9, '1'),
(96, 70, '0'),
(96, 77, '0'),
(98, 91, '2'),
(99, 51, '2'),
(99, 71, '2'),
(100, 66, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tip_clanka`
--

CREATE TABLE IF NOT EXISTS `tip_clanka` (
  `idtip_clanka` int(11) NOT NULL auto_increment,
  `naziv` varchar(45) default NULL,
  PRIMARY KEY  (`idtip_clanka`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tip_clanka`
--

INSERT INTO `tip_clanka` (`idtip_clanka`, `naziv`) VALUES
(2, 'priroda'),
(3, 'lifestyle'),
(4, 'zabava'),
(5, 'opasno'),
(6, 'zdravo'),
(7, 'zanimljivosti'),
(8, 'znanost'),
(10, 'wildlife'),
(11, 'putovanja');

-- --------------------------------------------------------

--
-- Table structure for table `tip_korisnika`
--

CREATE TABLE IF NOT EXISTS `tip_korisnika` (
  `idtip_korisnika` int(11) NOT NULL auto_increment,
  `naziv` varchar(45) default NULL,
  PRIMARY KEY  (`idtip_korisnika`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tip_korisnika`
--

INSERT INTO `tip_korisnika` (`idtip_korisnika`, `naziv`) VALUES
(1, 'Administrator'),
(2, 'Moderator'),
(3, 'Korisnik');

-- --------------------------------------------------------

--
-- Table structure for table `tip_materijala`
--

CREATE TABLE IF NOT EXISTS `tip_materijala` (
  `tip_materijala` int(11) NOT NULL auto_increment,
  `naziv` varchar(45) default NULL,
  PRIMARY KEY  (`tip_materijala`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tip_materijala`
--

INSERT INTO `tip_materijala` (`tip_materijala`, `naziv`) VALUES
(1, 'foto'),
(2, 'video'),
(3, 'dokument');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clanci_podrucja`
--
ALTER TABLE `clanci_podrucja`
  ADD CONSTRAINT `fk_clanci_podrucja_korisnik1` FOREIGN KEY (`korisnik_idkorisnik`) REFERENCES `korisnik` (`idkorisnik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clanci_podrucja_podrucje1` FOREIGN KEY (`idpodrucje`) REFERENCES `podrucje` (`idpodrucje`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clanci_podrucja_tip_clanka1` FOREIGN KEY (`idtip_clanka`) REFERENCES `tip_clanka` (`idtip_clanka`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `fk_korisnik_tip_korisnika1` FOREIGN KEY (`tip_korisnika_idtip_korisnika`) REFERENCES `tip_korisnika` (`idtip_korisnika`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `materijal`
--
ALTER TABLE `materijal`
  ADD CONSTRAINT `fk_materijal_clanci_podrucja1` FOREIGN KEY (`idclanci_podrucja`) REFERENCES `clanci_podrucja` (`idclanci_podrucja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_materijal_korisnik1` FOREIGN KEY (`idkorisnik`) REFERENCES `korisnik` (`idkorisnik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_materijal_table11` FOREIGN KEY (`idtip_materijala`) REFERENCES `tip_materijala` (`tip_materijala`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `moderator_podrucja`
--
ALTER TABLE `moderator_podrucja`
  ADD CONSTRAINT `fk_moderator_podrucja_korisnik1` FOREIGN KEY (`idkorisnik`) REFERENCES `korisnik` (`idkorisnik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_moderator_podrucja_podrucje1` FOREIGN KEY (`idpodrucje`) REFERENCES `podrucje` (`idpodrucje`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ocjena`
--
ALTER TABLE `ocjena`
  ADD CONSTRAINT `fk_ocjena_clanci_podrucja1` FOREIGN KEY (`idclanci_podrucja`) REFERENCES `clanci_podrucja` (`idclanci_podrucja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ocjena_korisnik1` FOREIGN KEY (`korisnik_idkorisnik`) REFERENCES `korisnik` (`idkorisnik`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `podrucje`
--
ALTER TABLE `podrucje`
  ADD CONSTRAINT `fk_podrucje_grad1` FOREIGN KEY (`idlokacija`) REFERENCES `lokacija` (`idlokacija`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pretplata`
--
ALTER TABLE `pretplata`
  ADD CONSTRAINT `fk_pretplata_korisnik1` FOREIGN KEY (`korisnik_idkorisnik`) REFERENCES `korisnik` (`idkorisnik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pretplata_podrucje1` FOREIGN KEY (`podrucje_idpodrucje`) REFERENCES `podrucje` (`idpodrucje`) ON DELETE NO ACTION ON UPDATE NO ACTION;
