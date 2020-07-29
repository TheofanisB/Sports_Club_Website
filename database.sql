-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql302.epizy.com
-- Generation Time: May 19, 2020 at 11:33 AM
-- Server version: 5.6.47-87.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_25734946_icsd15133`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(190) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `contact_input` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `email`, `subject`, `contact_input`) VALUES
('Takis', 'takis123@gmail.com', '0', '693 333 4444'),
('Marios', 'marios123@gmail.com', '0', '22730 12345'),
('Nikos', 'nikolakis@gmail.com', '0', '697 697 6970'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('2', '2', '2', '2'),
('5', '25', '5', '5'),
('5', '25', '5', '5'),
('5', '25', '5', '5'),
('5', '25', '5', '5'),
('Takis', 'takis123@gmail.com', '0', '693 333 4444'),
('Marios', 'marios123@gmail.com', '0', '22730 12345'),
('Nikos', 'nikolakis@gmail.com', '0', '697 697 6970'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('Mikis', '123@gmail.com', '0', '784 678 9966'),
('2', '2', '2', '2'),
('5', '25', '5', '5'),
('5', '25', '5', '5'),
('5', '25', '5', '5'),
('5', '25', '5', '5'),
('1', '2', '3', '4'),
('1', '2', '3', '4'),
('1', '2', '3', '4'),
('777', '777', '777', '777'),
('345', '345', '345', '345'),
('345', '345', '345', '345'),
('1', '1', '1', '1'),
('2', '2', '2', '2'),
('123', '123', '123', '123'),
('2', '123', '123', '123'),
('2', '123', '123', '123'),
('3', '123', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `team1` varchar(50) NOT NULL,
  `team2` varchar(50) NOT NULL,
  `score1` int(11) NOT NULL,
  `score2` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`team1`, `team2`, `score1`, `score2`, `date`) VALUES
('Asteras Fournon', 'KATSIKOXORI', 5, 1, '2020-05-07'),
('Asteras Fournon', 'KATSIKOXORI', 5, 1, '2020-05-07'),
('Asteras Fournon', 'UPPER RAHOULA', 3, 2, '2020-05-07'),
('Asteras Fournon', 'VATHY RANGERS', 9, 0, '2020-05-01'),
('Asteras Fournon', 'MARATHOKAMPOS GOATS', 5, 1, '2020-05-08'),
('Asteras Fournon', 'YDROUSA RAMS', 5, 1, '2020-05-07'),
('Asteras Fournon', 'KOKKARI ROOSTERS', 5, 1, '2020-05-07'),
('Asteras Fournon', 'KATSIKOXORI', 5, 1, '2020-05-07'),
('Asteras Fournon', 'KATSIKOXORI', 5, 1, '2020-05-07'),
('Asteras Fournon', 'UPPER RAHOULA', 3, 2, '2020-05-07'),
('Asteras Fournon', 'VATHY RANGERS', 9, 0, '2020-05-01'),
('Asteras Fournon', 'MARATHOKAMPOS GOATS', 5, 1, '2020-05-08'),
('Asteras Fournon', 'YDROUSA RAMS', 5, 1, '2020-05-07'),
('Asteras Fournon', 'KOKKARI ROOSTERS', 5, 1, '2020-05-07'),
('Asteras Fournon', '1', 1, 1, '0000-00-00'),
('', '', 1, 1, '0000-00-00'),
('Asteras Fournon', '1', 3, 3, '0000-00-00'),
('Asteras Fournon', '1', 5, 0, '0000-00-00'),
('1', '2', 5, 6, '0000-00-00'),
('', '', 15, 15, '0000-00-00'),
('omada1', 'omada2', 5, 8, '2020-01-01'),
('t1', 't2', 4, 5, '2020-01-01'),
('omada1', 'omada2', 10, 15, '2020-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`name`, `surname`, `age`) VALUES
('Joe', 'Robertson', 34),
('Joe', 'Robertson', 34),
('Joe', 'Mamas', 22),
('Nick', 'Sougias', 31),
('Alec', 'Howard', 20),
('Jimmy', 'Johnson', 23),
('Billy', 'Bobby', 30),
('Jack', 'Timber', 34),
('Chris', 'White', 34),
('Rick', 'Ashley', 18),
('Doug', 'Green', 34),
('Mike', 'Knight', 34),
('Joe', 'Robertson', 34),
('Joe', 'Robertson', 34),
('Joe', 'Mamas', 22),
('Nick', 'Sougias', 31),
('Alec', 'Howard', 20),
('Jimmy', 'Johnson', 23),
('Billy', 'Bobby', 30),
('Jack', 'Timber', 34),
('Chris', 'White', 34),
('Rick', 'Ashley', 18),
('Doug', 'Green', 34),
('Mike', 'Knight', 34);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Title`, `Description`, `date`) VALUES
('Larry got Injured', 'Larry Goldberg got slammed by Mike Green , started bleeding and was quickly  moved to the YEET hospital', '0000-00-00'),
('Larry got Injured', 'Larry Goldberg got slammed by Mike Green , started bleeding and was quickly  moved to the YEET hospital', '0000-00-00'),
('Eric Simpleton missing in action!', 'Eric Simpleton has not played for the team for the past 5 matches . The reason behind this is his lack of interest in the game according to our coach Mr.Amazing .', '2020-05-17'),
('New Team Addition!', 'Yuri has joined the team!', '2020-05-15'),
('New Team Addition!', 'Yuri has joined the team!', '2020-05-15'),
('New Team Addition!', 'Luis has joined the team!', '2020-05-13'),
('New Team Addition!', 'Juan has joined the team!', '2020-05-11'),
('New Team Addition!', 'Edison has joined the team!', '2020-05-10'),
('Larry got Injured', 'Larry Goldberg got slammed by Mike Green , started bleeding and was quickly  moved to the YEET hospital', '0000-00-00'),
('Larry got Injured', 'Larry Goldberg got slammed by Mike Green , started bleeding and was quickly  moved to the YEET hospital', '0000-00-00'),
('Eric Simpleton missing in action!', 'Eric Simpleton has not played for the team for the past 5 matches . The reason behind this is his lack of interest in the game according to our coach Mr.Amazing .', '2020-05-17'),
('New Team Addition!', 'Yuri has joined the team!', '2020-05-15'),
('New Team Addition!', 'Yuri has joined the team!', '2020-05-15'),
('New Team Addition!', 'Luis has joined the team!', '2020-05-13'),
('New Team Addition!', 'Juan has joined the team!', '2020-05-11'),
('New Team Addition!', 'Edison has joined the team!', '2020-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"relation_lines\":\"true\",\"snap_to_grid\":\"off\",\"angular_direct\":\"direct\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"icsd15133\",\"table\":\"users\"},{\"db\":\"icsd15133\",\"table\":\"game\"},{\"db\":\"icsd15133\",\"table\":\"contact\"},{\"db\":\"icsd15133\",\"table\":\"news\"},{\"db\":\"icsd15133\",\"table\":\"members\"},{\"db\":\"phpmyadmin\",\"table\":\"pma__users\"}]'),
('root', '[{\"db\":\"icsd15133\",\"table\":\"users\"},{\"db\":\"icsd15133\",\"table\":\"game\"},{\"db\":\"icsd15133\",\"table\":\"contact\"},{\"db\":\"icsd15133\",\"table\":\"news\"},{\"db\":\"icsd15133\",\"table\":\"members\"},{\"db\":\"phpmyadmin\",\"table\":\"pma__users\"}]'),
('epiz_25734946', '[{\"db\":\"epiz_25734946_icsd15133\",\"table\":\"contact\"}]'),
('epiz_25734946', '[{\"db\":\"epiz_25734946_icsd15133\",\"table\":\"game\"},{\"db\":\"epiz_25734946_icsd15133\",\"table\":\"contact\"}]'),
('epiz_25734946', '[{\"db\":\"epiz_25734946_icsd15133\",\"table\":\"members\"},{\"db\":\"epiz_25734946_icsd15133\",\"table\":\"game\"},{\"db\":\"epiz_25734946_icsd15133\",\"table\":\"contact\"}]'),
('epiz_25734946', '[{\"db\":\"epiz_25734946_icsd15133\",\"table\":\"users\"},{\"db\":\"epiz_25734946_icsd15133\",\"table\":\"members\"},{\"db\":\"epiz_25734946_icsd15133\",\"table\":\"game\"},{\"db\":\"epiz_25734946_icsd15133\",\"table\":\"contact\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'icsd15133', 'contact', '[]', '2020-05-08 08:39:23'),
('root', 'icsd15133', 'news', '{\"sorted_col\":\"`news`.`date`  ASC\"}', '2020-05-07 11:24:19'),
('root', 'icsd15133', 'contact', '[]', '2020-05-08 08:39:23'),
('root', 'icsd15133', 'news', '{\"sorted_col\":\"`news`.`date`  ASC\"}', '2020-05-07 11:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2020-05-10 05:02:15', '{\"Console\\/Mode\":\"collapse\"}'),
('root', '2020-05-10 05:02:15', '{\"Console\\/Mode\":\"collapse\"}'),
('epiz_25734946', '2020-05-19 15:33:05', '{\"Console\\/Mode\":\"collapse\",\"ThemeDefault\":\"pmahomme\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `role`) VALUES
('Bobby', 'password', 'user'),
('Bobby', 'password', 'user'),
('John', 'password', 'user'),
('Rob', 'password', 'user'),
('Jake', 'password', 'user'),
('Bobby', 'password', 'user'),
('Bobby', 'password', 'user'),
('John', 'password', 'user'),
('Rob', 'password', 'user'),
('Jake', 'password', 'user'),
('Johny', 'password', 'user'),
('Tony', '1', 'user'),
('', '', 'user'),
('Chris', '!Password1', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
