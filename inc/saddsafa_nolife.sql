--
-- Baza danych: `saddsafa_nolife`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rejestracja`
--

CREATE TABLE IF NOT EXISTS `rejestracja` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(1000) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `kod` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `data` datetime NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `nazwa` varchar(1000) COLLATE utf8_polish_ci NOT NULL,
  `yt` varchar(1000) COLLATE utf8_polish_ci NOT NULL,
  `SubPlusPlus` varchar(250) COLLATE utf8_polish_ci NOT NULL DEFAULT '0',
  `DataZakupuSubPlusPlus` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `DatakoniecSubPlusPlus` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `zbanowany` int(11) NOT NULL DEFAULT '0',
  `ranga` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `ipzalogowanego` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `salt1` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `salt2` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `salt3` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `salt4` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `salt5` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `salt6` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `klikniete` varchar(1000) COLLATE utf8_polish_ci NOT NULL DEFAULT '0',
  `maxklikniec` varchar(1000) COLLATE utf8_polish_ci NOT NULL DEFAULT '100',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=19 ;

--
-- Zrzut danych tabeli `rejestracja`
--

INSERT INTO `rejestracja` (`id`, `login`, `haslo`, `email`, `kod`, `data`, `status`, `nazwa`, `yt`, `SubPlusPlus`, `DataZakupuSubPlusPlus`, `DatakoniecSubPlusPlus`, `zbanowany`, `ranga`, `ip`, `ipzalogowanego`, `salt1`, `salt2`, `salt3`, `salt4`, `salt5`, `salt6`, `klikniete`, `maxklikniec`) VALUES
(1, 'nolif', 'b9072ef8b7c73566225ed5f5e4305a06553df0c5c305b93c68e925f2c01199562edf65e63adcd4f7894369472a42ffbae7d5208f94c995696ad5a3e53753dae3', 'piotrekkus5555@wp.pl', '90006495054ad8fc42d7af', '2015-01-07 20:59:55', 1, 'nolif666', 'UCjP-HT_2nl3JjnQZnZ_uYAQ', '0', '', '', 0, 0, '188.95.29.164', '188.95.29.164', '158945690854ad8fc42d59d', '29760131754ad8fc42d5f0', '35168673754ad8fc42d643', '111937205854ad8fc42d694', '489077954ad8fc42d6e6', '190759225754ad8fc42d739', '12', '100'),
(13, 'nolif3', 'f98fe3e4d0fcffdf2062d64db60369d0de9131bbd0f94afcd7bc3cd8a52f2cc08d086213190ca676de96f9f365d24bc9341fec4f30296062e637d88bde78995e', 'piotrekkus55@wp.pl', '103438155754b29c42d1e7c', '2015-01-11 16:55:48', 1, 'piotrekkus55@wp.pl', 'UCjP-HT_2nl3JjnQZnZ_uYAQ', '0', '', '', 0, 0, '188.95.29.164', '', '27956210154b29c42d1a97', '180673327154b29c42d1ae6', '139094507954b29c42d1b39', '160295335154b29c42d1b88', '59047639254b29c42d1c13', '188104024654b29c42d1e09', '10', '100'),
(10, 'adonis', 'ebae90708c772788ba353fff898d4c4008e0751613245fdf04dc5f2cc67fb44f9c106ca9c8861e88dff0d215b48f6fefe2bcd75d35471b6026e5ae603474d265', 'gamesadonis5@gmail.com', '7533893354afeed23a6cb', '2015-01-09 16:08:02', 1, 'gamesadonis', 'UCth-S6qKgdMd32OTwLfexQw', '0', '', '', 0, 0, '89.231.243.187', '89.231.243.187', '39551658354afeed23a4a0', '93694171154afeed23a4f2', '55648624154afeed23a542', '46771484554afeed23a5b1', '195836252254afeed23a601', '21908179054afeed23a65e', '12', '100'),
(15, 'adek1990', '3c8a1b061dd55672936a7161f394b238850eaa2ddad62c62a1b78e35d0f78d6e9f8a462f5156f2078f294a70e1bb287af64fb5258b4f3f64bf3d09e724e31d94', 'realisticwebworld@gmail.com', '87783907254b2a5fbcc508', '2015-01-11 17:34:03', 1, 'realisticwebworld', 'UC3Vpa3lKJJHcsPfgq6Ia0_g', '0', '', '', 0, 0, '83.21.54.119', '79.184.171.181', '43888910454b2a5fbcc352', '93810137654b2a5fbcc398', '135552866454b2a5fbcc3de', '79518920854b2a5fbcc422', '130642346954b2a5fbcc466', '1840381954b2a5fbcc4aa', '9', '100'),
(14, 'nolif4', 'bab06f9f118273c8e29bdad427ffa9a51add1ffbe140d2350c96915e1118f33c17e5099e11581b7da47ce2eae30a4c8f7f0259a955b911625e427a01cefa0c1f', 'piotrekku5@wp.pl', '44355752254b29d391d1ab', '2015-01-11 16:56:41', 1, 'piotrekkus5@wp.pl', 'UCjP-HT_2nl3JjnQZnZ_uYAQ', '0', '', '', 0, 0, '188.95.29.164', '188.95.29.164', '106212517454b29d391cfdd', '195827641054b29d391d02b', '33748018854b29d391d04a', '149695789254b29d391d09e', '144682403254b29d391d0f9', '114110794254b29d391d146', '10', '100'),
(16, 'dddd', 'cb770702ee5de70fa7b278e5372a2733dd1e6b936d876a940fb787becd5f186c2bdb6eac74a6cc7c8d496ce095e160bd6734756e8c4e1148330223658243e019', 'dddd@wp.pl', '108110086454b55b53a23f5', '2015-01-13 18:52:19', 1, 'dddddd', 'ddddd', '0', '', '', 0, 0, '79.135.171.219', '79.135.171.219', '8071587254b55b53a2246', '171499191054b55b53a2289', '192824691754b55b53a22cb', '18462085054b55b53a2313', '176610476154b55b53a2356', '124049332154b55b53a239a', '8', '100'),
(17, 'cycek', '365c6385b226726ef1c124bf5452f48bfff81cff4e73769f51242ed2ba8c086998f0e7199b12ab890db81a7409dc383ac8a4aa2c1682d6f7ebf6418a8d5d7931', 'kurwamac@pirektodzifka.pl', '81707397154b7fa0584a2c', '2015-01-15 18:33:57', 0, 'dziffek', 'UCfQnVJIdCw3SjaizXJ_W00Q', '0', '', '', 0, 0, '31.42.15.2', '', '74671270354b7fa0584671', '121871105854b7fa05846c3', '24398732254b7fa058472e', '155961589954b7fa05847d4', '194613685954b7fa0584856', '104472943954b7fa05848ac', '6', '100'),
(18, 'cycek1', '35f3a34d9fb39fe6a5c3c5df4162b66fc9f82242c4c4a7b5939c5dd2059b3b1b531dbbbed593c7618ad738bcda56b55aac40c6c196ff6fd6bb4e6eb8ad7c2444', 'skuggypl5@gmail.com', '62956929454b7faa5a11ee', '2015-01-15 18:37:38', 1, 'pirektokurwa', 'UCfQnVJIdCw3SjaizXJ_W00Q', '0', '', '', 0, 0, '31.42.15.2', '31.42.15.2', '87327822854b7faa5a0f5a', '117763561554b7faa5a0faf', '4655939254b7faa5a0ffc', '33740820454b7faa5a105d', '84731353554b7faa5a10ea', '198336993554b7faa5a1147', '-10', '100');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sklep`
--

CREATE TABLE IF NOT EXISTS `sklep` (
  `id` int(11) NOT NULL,
  `Ilosc` int(11) NOT NULL,
  `Numer` int(11) NOT NULL,
  `Nazwa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;