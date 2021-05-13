-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 13, 2021 la 07:15 PM
-- Versiune server: 10.4.18-MariaDB
-- Versiune PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `nivel_educatie`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `aprilie2019`
--

CREATE TABLE `aprilie2019` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `aprilie2019`
--

INSERT INTO `aprilie2019` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 4877, 664, 730, 1535, 885, 39, 790, 234),
('ARAD', 2563, 363, 780, 583, 565, 29, 81, 162),
('ARGES', 7357, 709, 1826, 2414, 965, 83, 1058, 302),
('BACAU', 11434, 1910, 2602, 4177, 1486, 127, 819, 313),
('BIHOR', 3095, 424, 595, 604, 697, 68, 328, 379),
('BISTRITA', 3450, 294, 333, 1185, 901, 66, 474, 197),
('BOTOSANI', 3813, 195, 1154, 1142, 593, 46, 560, 123),
('BRAILA', 4754, 731, 1184, 1789, 374, 41, 486, 149),
('BRASOV', 5471, 1351, 1262, 1399, 838, 47, 313, 261),
('BUZAU', 11615, 2476, 2528, 3995, 901, 54, 1557, 104),
('CALARASI', 3455, 422, 944, 1235, 588, 24, 186, 56),
('CARAS', 3200, 715, 369, 744, 825, 52, 314, 181),
('CLUJ', 4556, 961, 670, 1054, 701, 97, 656, 417),
('CONSTANTA', 6195, 850, 1077, 1827, 1310, 70, 631, 430),
('COVASNA', 2678, 496, 1105, 580, 233, 31, 179, 54),
('DAMBOVITA', 6679, 728, 1230, 2015, 1612, 46, 835, 213),
('DOLJ', 18905, 3125, 6452, 5300, 2971, 103, 615, 339),
('GALATI', 10676, 1475, 2158, 4527, 1188, 113, 916, 299),
('GIURGIU', 1794, 268, 301, 622, 387, 15, 136, 65),
('GORJ', 5117, 465, 338, 1563, 1640, 139, 659, 313),
('HARGHITA', 4997, 1261, 1303, 959, 731, 49, 509, 185),
('HUNEDOARA', 5798, 514, 508, 1568, 1428, 118, 1132, 530),
('IALOMITA', 4736, 527, 1142, 1661, 870, 45, 439, 52),
('IASI', 8657, 721, 1820, 3096, 603, 62, 2058, 297),
('ILFOV', 897, 134, 310, 157, 149, 6, 68, 73),
('MARAMURES', 6161, 194, 2639, 1497, 923, 99, 509, 300),
('MEHEDINTI', 7154, 0, 1563, 3498, 1104, 38, 857, 94),
('MUN. BUC.', 15575, 27, 131, 2648, 5296, 300, 2784, 4389),
('MURES', 6184, 1141, 2229, 1531, 497, 61, 579, 146),
('NEAMT', 7308, 1012, 1184, 2343, 1298, 53, 1239, 179),
('OLT', 8802, 2410, 855, 3078, 2097, 70, 262, 30),
('PRAHOVA', 6605, 626, 1525, 1629, 1232, 124, 1076, 393),
('SALAJ', 4292, 634, 1311, 1129, 742, 43, 281, 152),
('SATU M.', 3597, 468, 1708, 951, 193, 12, 197, 68),
('SIBIU', 3423, 552, 956, 835, 561, 37, 272, 210),
('SUCEAVA', 10635, 1087, 1944, 3041, 1706, 186, 2340, 331),
('TELEORMAN', 10145, 610, 1241, 5642, 1683, 37, 881, 51),
('TIMIS', 2421, 382, 219, 476, 496, 36, 455, 357),
('Total general', 261909, 32369, 54794, 82587, 45290, 2870, 31057, 12942),
('TULCEA', 2667, 0, 543, 1394, 563, 0, 133, 34),
('VALCEA', 4595, 247, 497, 1305, 1029, 100, 1110, 307),
('VASLUI', 10480, 603, 2066, 4041, 1670, 59, 1986, 55),
('VRANCEA', 5096, 597, 1462, 1818, 759, 45, 297, 118);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `aprilie2020`
--

CREATE TABLE `aprilie2020` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `aprilie2020`
--

INSERT INTO `aprilie2020` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 4968, 186, 863, 1415, 1137, 87, 962, 318),
('ARAD', 2478, 297, 264, 613, 605, 57, 354, 288),
('ARGES', 8079, 532, 1540, 2478, 1559, 122, 1380, 468),
('BACAU', 10857, 1701, 739, 3403, 2708, 103, 1840, 363),
('BIHOR', 4316, 215, 621, 993, 1157, 90, 721, 519),
('BISTRITA', 3295, 171, 224, 1018, 1014, 62, 611, 195),
('BOTOSANI', 3156, 180, 1025, 766, 557, 52, 467, 109),
('BRAILA', 4475, 741, 1080, 1526, 419, 59, 485, 165),
('BRASOV', 5477, 979, 1181, 1311, 844, 76, 637, 449),
('BUZAU', 11242, 2221, 2328, 3712, 1161, 70, 1606, 144),
('CALARASI', 2829, 326, 684, 910, 432, 30, 383, 64),
('CARAS', 2984, 463, 317, 558, 881, 59, 467, 239),
('CLUJ', 4786, 628, 427, 1088, 1250, 116, 796, 481),
('CONSTANTA', 6458, 763, 443, 1725, 1810, 89, 1119, 509),
('COVASNA', 2880, 478, 1042, 644, 353, 36, 275, 52),
('DAMBOVITA', 6035, 614, 833, 1913, 1289, 99, 955, 332),
('DOLJ', 18140, 840, 5950, 4864, 3737, 159, 2080, 510),
('GALATI', 10350, 1050, 1945, 4152, 1185, 103, 1555, 360),
('GIURGIU', 1763, 233, 286, 638, 376, 20, 148, 62),
('GORJ', 4069, 223, 222, 1125, 1231, 117, 798, 353),
('HARGHITA', 5087, 1242, 1173, 1006, 794, 77, 606, 189),
('HUNEDOARA', 6220, 305, 476, 1594, 1935, 101, 1254, 555),
('IALOMITA', 3782, 241, 920, 1267, 642, 36, 611, 65),
('IASI', 7909, 552, 1539, 2674, 636, 69, 2095, 344),
('ILFOV', 657, 77, 194, 124, 128, 8, 64, 62),
('MARAMURES', 4216, 74, 1263, 788, 979, 108, 722, 282),
('MEHEDINTI', 6069, 0, 1212, 2725, 1150, 47, 819, 116),
('MUN. BUC.', 15186, 21, 146, 2574, 5264, 304, 2733, 4144),
('MURES', 5782, 866, 1894, 1345, 650, 95, 725, 207),
('NEAMT', 7269, 796, 934, 2037, 1207, 106, 1912, 277),
('OLT', 8573, 1937, 702, 2740, 1521, 69, 1494, 110),
('PRAHOVA', 7223, 542, 1067, 1922, 1607, 123, 1476, 486),
('SALAJ', 4344, 295, 1103, 1202, 982, 56, 524, 182),
('SATU M.', 4172, 666, 1463, 1154, 424, 29, 336, 100),
('SIBIU', 4087, 404, 1084, 930, 697, 65, 584, 323),
('SUCEAVA', 10280, 538, 1800, 3278, 1987, 168, 2140, 369),
('TELEORMAN', 8808, 404, 1032, 4706, 1004, 42, 1523, 97),
('TIMIS', 2763, 305, 215, 504, 661, 61, 595, 422),
('Total general', 251944, 22788, 43672, 74951, 49615, 3429, 42537, 14952),
('TULCEA', 2715, 0, 421, 1219, 581, 0, 424, 70),
('VALCEA', 4967, 116, 477, 1390, 1401, 131, 1089, 363),
('VASLUI', 8421, 291, 1376, 3135, 879, 53, 2612, 75),
('VRANCEA', 4777, 275, 1167, 1785, 781, 75, 560, 134);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `august2020`
--

CREATE TABLE `august2020` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `august2020`
--

INSERT INTO `august2020` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 5590, 430, 479, 1442, 1707, 62, 1071, 399),
('ARAD', 4798, 349, 337, 1018, 1813, 101, 718, 462),
('ARGES', 10508, 649, 1859, 3012, 2411, 167, 1812, 598),
('BACAU', 10881, 1778, 1172, 3098, 3212, 128, 1194, 299),
('BIHOR', 5349, 200, 663, 1139, 1778, 100, 830, 639),
('BISTRITA', 3998, 125, 172, 1177, 1425, 78, 748, 273),
('BOTOSANI', 3991, 196, 1020, 857, 1027, 52, 648, 191),
('BRAILA', 4901, 793, 1122, 1599, 583, 57, 561, 186),
('BRASOV', 6581, 974, 1116, 1378, 1607, 96, 813, 597),
('BUZAU', 12280, 2274, 2315, 3793, 1845, 73, 1792, 188),
('CALARASI', 3765, 358, 789, 1167, 801, 39, 456, 155),
('CARAS', 3915, 551, 379, 790, 1296, 91, 562, 246),
('CLUJ', 6652, 587, 617, 1468, 1772, 180, 1326, 702),
('CONSTANTA', 7017, 844, 680, 1286, 2704, 96, 748, 659),
('COVASNA', 4174, 529, 1123, 871, 930, 53, 550, 118),
('DAMBOVITA', 5967, 557, 460, 1912, 1549, 91, 1022, 376),
('DOLJ', 17467, 731, 5607, 4523, 3973, 368, 1916, 349),
('GALATI', 11944, 1157, 2063, 4312, 2045, 134, 1764, 469),
('GIURGIU', 2186, 248, 294, 664, 714, 18, 166, 82),
('GORJ', 5271, 273, 226, 1299, 1942, 214, 923, 394),
('HARGHITA', 6034, 1186, 1040, 1086, 1435, 83, 892, 312),
('HUNEDOARA', 6265, 205, 397, 1493, 2260, 119, 1194, 597),
('IALOMITA', 4352, 280, 1024, 1337, 945, 52, 628, 86),
('IASI', 9311, 556, 1612, 2864, 1165, 90, 2417, 607),
('ILFOV', 851, 91, 143, 126, 342, 7, 81, 61),
('MARAMURES', 5425, 63, 1153, 727, 2099, 106, 839, 438),
('MEHEDINTI', 6499, 0, 1258, 2829, 1339, 88, 847, 138),
('MUN. BUC.', 15354, 25, 141, 2524, 5254, 302, 2795, 4313),
('MURES', 6025, 663, 1504, 1205, 1289, 89, 884, 391),
('NEAMT', 8160, 877, 1050, 2295, 1603, 122, 1888, 325),
('OLT', 9554, 1990, 706, 2809, 2330, 147, 1503, 69),
('PRAHOVA', 9089, 563, 1076, 2157, 2521, 147, 1861, 764),
('SALAJ', 5042, 347, 1114, 1180, 1455, 69, 633, 244),
('SATU M.', 5028, 643, 1797, 1418, 588, 25, 392, 165),
('SIBIU', 5441, 384, 1025, 1163, 1273, 100, 1011, 485),
('SUCEAVA', 11720, 469, 1845, 2736, 3515, 203, 2374, 578),
('TELEORMAN', 8722, 393, 958, 4443, 1441, 102, 1317, 68),
('TIMIS', 4105, 198, 114, 862, 1510, 117, 690, 614),
('Total general', 286662, 23244, 43984, 77331, 72743, 4479, 46442, 18439),
('TULCEA', 2533, 0, 435, 1030, 628, 0, 355, 85),
('VALCEA', 6112, 118, 491, 1462, 2290, 173, 1138, 440),
('VASLUI', 8281, 261, 1320, 2910, 1133, 70, 2483, 104),
('VRANCEA', 5524, 329, 1288, 1870, 1194, 70, 600, 173);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `decembrie2019`
--

CREATE TABLE `decembrie2019` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `decembrie2019`
--

INSERT INTO `decembrie2019` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 5218, 653, 761, 1471, 1128, 59, 848, 298),
('ARAD', 2610, 248, 537, 532, 769, 40, 288, 196),
('ARGES', 7749, 667, 1802, 2398, 1324, 101, 1118, 339),
('BACAU', 11023, 1858, 1211, 3454, 2549, 143, 1538, 270),
('BIHOR', 3690, 207, 657, 832, 993, 78, 504, 419),
('BISTRITA', 3329, 191, 295, 1014, 991, 68, 581, 189),
('BOTOSANI', 3571, 195, 997, 948, 665, 58, 583, 125),
('BRAILA', 4334, 705, 1098, 1505, 372, 57, 456, 141),
('BRASOV', 5233, 1041, 1260, 1293, 708, 45, 581, 305),
('BUZAU', 11296, 2195, 2334, 3647, 1357, 68, 1584, 111),
('CALARASI', 3242, 360, 833, 1012, 590, 36, 360, 51),
('CARAS', 3345, 557, 421, 672, 999, 64, 421, 211),
('CLUJ', 4483, 776, 428, 973, 992, 107, 753, 454),
('CONSTANTA', 7471, 943, 683, 2028, 2044, 112, 1195, 466),
('COVASNA', 2852, 453, 994, 609, 455, 27, 251, 63),
('DAMBOVITA', 6624, 951, 1160, 1818, 1331, 117, 1011, 236),
('DOLJ', 17945, 836, 5903, 4956, 3890, 123, 1889, 348),
('GALATI', 10578, 1054, 2003, 4195, 1400, 106, 1468, 352),
('GIURGIU', 1645, 229, 277, 582, 363, 17, 129, 48),
('GORJ', 4735, 287, 286, 1384, 1418, 129, 920, 311),
('HARGHITA', 5146, 1269, 1228, 963, 865, 80, 550, 191),
('HUNEDOARA', 5157, 380, 410, 1306, 1436, 118, 981, 526),
('IALOMITA', 4231, 299, 1018, 1420, 696, 53, 685, 60),
('IASI', 8035, 546, 1502, 2598, 887, 74, 2107, 321),
('ILFOV', 776, 101, 207, 138, 188, 7, 63, 72),
('MARAMURES', 5185, 125, 1818, 760, 1270, 142, 726, 344),
('MEHEDINTI', 6929, 0, 1478, 3278, 1155, 63, 836, 119),
('MUN. BUC.', 15248, 25, 135, 2645, 5214, 290, 2701, 4238),
('MURES', 6372, 1122, 2266, 1441, 646, 62, 634, 201),
('NEAMT', 7346, 903, 1142, 2207, 1033, 104, 1720, 237),
('OLT', 8855, 1854, 742, 2770, 1899, 80, 1441, 69),
('PRAHOVA', 7118, 619, 1283, 1882, 1453, 105, 1354, 422),
('SALAJ', 4339, 293, 1153, 1098, 1040, 75, 488, 192),
('SATU M.', 3631, 411, 1723, 900, 265, 16, 225, 91),
('SIBIU', 3456, 366, 1001, 835, 560, 45, 426, 223),
('SUCEAVA', 11031, 922, 1840, 2945, 2611, 237, 2103, 373),
('TELEORMAN', 8825, 376, 1052, 4686, 1470, 48, 1148, 45),
('TIMIS', 2775, 305, 125, 459, 810, 54, 593, 429),
('Total general', 257865, 25232, 48175, 75818, 51506, 3452, 40046, 13636),
('TULCEA', 2906, 0, 463, 1452, 535, 0, 409, 47),
('VALCEA', 4560, 137, 496, 1312, 1301, 124, 866, 324),
('VASLUI', 10024, 398, 1880, 3689, 979, 55, 2965, 58),
('VRANCEA', 4947, 375, 1273, 1711, 855, 65, 547, 121);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `decembrie2020`
--

CREATE TABLE `decembrie2020` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `decembrie2020`
--

INSERT INTO `decembrie2020` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 6350, 822, 723, 1558, 1620, 67, 1130, 430),
('ARAD', 4572, 343, 319, 962, 1701, 89, 644, 514),
('ARGES', 9840, 658, 1928, 2955, 1973, 141, 1634, 551),
('BACAU', 11505, 1563, 3209, 801, 1612, 1882, 1965, 473),
('BIHOR', 5965, 318, 1114, 1474, 1496, 97, 855, 611),
('BISTRITA', 4375, 164, 252, 1372, 1424, 86, 805, 272),
('BOTOSANI', 4007, 218, 1138, 949, 820, 63, 655, 164),
('BRAILA', 5263, 883, 1276, 1683, 586, 68, 589, 178),
('BRASOV', 6714, 1089, 1252, 1540, 1282, 107, 833, 611),
('BUZAU', 13468, 2541, 2462, 4158, 1949, 146, 2012, 200),
('CALARASI', 3890, 363, 852, 1140, 790, 32, 613, 100),
('CARAS', 3607, 554, 368, 753, 1109, 116, 486, 221),
('CLUJ', 6108, 492, 743, 1362, 1450, 177, 1122, 762),
('CONSTANTA', 8732, 827, 1006, 2047, 2686, 121, 1337, 708),
('COVASNA', 4348, 613, 1347, 973, 769, 53, 471, 122),
('DAMBOVITA', 6182, 562, 653, 1940, 1512, 118, 1027, 370),
('DOLJ', 18872, 814, 6324, 4905, 4237, 340, 1923, 329),
('GALATI', 12190, 1201, 2452, 4482, 1897, 124, 1537, 497),
('GIURGIU', 2098, 268, 319, 726, 505, 21, 182, 77),
('GORJ', 5212, 281, 255, 1302, 1780, 187, 1041, 366),
('HARGHITA', 6162, 1270, 748, 1337, 1390, 75, 1051, 291),
('HUNEDOARA', 5736, 343, 245, 1340, 1862, 129, 1228, 589),
('IALOMITA', 4581, 264, 1114, 1438, 909, 61, 715, 80),
('IASI', 9356, 583, 1772, 2944, 1061, 86, 2380, 530),
('ILFOV', 1441, 105, 142, 239, 563, 18, 195, 179),
('MARAMURES', 4697, 62, 695, 764, 1738, 151, 856, 431),
('MEHEDINTI', 6503, 0, 1245, 2810, 1326, 109, 860, 153),
('MUN. BUC.', 15251, 24, 140, 2520, 5183, 308, 2788, 4288),
('MURES', 6423, 710, 1999, 1269, 1144, 92, 860, 349),
('NEAMT', 9034, 536, 1589, 2589, 2284, 99, 1605, 332),
('OLT', 9441, 1973, 725, 2864, 2231, 180, 1383, 85),
('PRAHOVA', 8571, 535, 1043, 2100, 2275, 236, 1709, 673),
('SALAJ', 5419, 370, 1485, 1423, 1109, 83, 689, 260),
('SATU M.', 5458, 646, 2104, 1540, 558, 31, 425, 154),
('SIBIU', 5496, 467, 1383, 1239, 1020, 93, 851, 443),
('SUCEAVA', 11804, 951, 1585, 2942, 3238, 201, 2340, 547),
('TELEORMAN', 9151, 447, 1068, 4804, 1360, 114, 1290, 68),
('TIMIS', 4446, 342, 210, 877, 1429, 120, 774, 694),
('Total general', 296051, 24986, 51354, 80259, 67436, 6531, 47029, 18456),
('TULCEA', 2520, 0, 425, 1039, 634, 0, 349, 73),
('VALCEA', 5795, 126, 538, 1574, 1909, 143, 1118, 387),
('VASLUI', 9770, 329, 1658, 3582, 1905, 89, 2079, 128),
('VRANCEA', 5698, 329, 1449, 1943, 1110, 78, 623, 166);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `februarie2019`
--

CREATE TABLE `februarie2019` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `februarie2019`
--

INSERT INTO `februarie2019` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 5673, 677, 848, 1605, 1255, 124, 889, 275),
('ARAD', 2937, 465, 882, 620, 651, 41, 97, 181),
('ARGES', 8391, 803, 2096, 2714, 1125, 93, 1215, 345),
('BACAU', 12574, 2300, 1167, 4122, 3184, 79, 1442, 280),
('BIHOR', 3227, 660, 487, 519, 661, 69, 432, 399),
('BISTRITA', 4060, 240, 356, 1337, 1010, 84, 814, 219),
('BOTOSANI', 4331, 170, 1249, 1273, 686, 85, 738, 130),
('BRAILA', 5359, 808, 1304, 1965, 494, 60, 577, 151),
('BRASOV', 5967, 1476, 1314, 1540, 694, 59, 602, 282),
('BUZAU', 12298, 2444, 2618, 4105, 1129, 67, 1814, 121),
('CALARASI', 3889, 476, 1004, 1277, 735, 38, 282, 77),
('CARAS', 3523, 574, 383, 800, 895, 77, 604, 190),
('CLUJ', 4751, 932, 627, 1088, 840, 101, 715, 448),
('CONSTANTA', 8122, 954, 1169, 2443, 1715, 91, 1283, 467),
('COVASNA', 3091, 550, 1212, 673, 310, 41, 233, 72),
('DAMBOVITA', 7161, 783, 1403, 2071, 1684, 65, 936, 219),
('DOLJ', 20178, 936, 6754, 5629, 3263, 114, 3081, 401),
('GALATI', 11718, 1548, 2327, 4897, 1415, 157, 1065, 309),
('GIURGIU', 1941, 261, 308, 645, 463, 30, 163, 71),
('GORJ', 5814, 464, 363, 1665, 1939, 167, 884, 332),
('HARGHITA', 5625, 1327, 1365, 1088, 878, 72, 679, 216),
('HUNEDOARA', 6340, 647, 475, 1778, 1651, 123, 1132, 534),
('IALOMITA', 5262, 452, 1173, 1822, 995, 49, 714, 57),
('IASI', 8860, 698, 1825, 3146, 643, 65, 2214, 269),
('ILFOV', 1065, 138, 322, 245, 190, 9, 77, 84),
('MARAMURES', 6336, 158, 2936, 1231, 965, 107, 621, 318),
('MEHEDINTI', 7821, 0, 1669, 3763, 1295, 57, 918, 119),
('MUN. BUC.', 15661, 36, 136, 2682, 5298, 295, 2794, 4420),
('MURES', 6857, 1227, 2500, 1603, 574, 76, 710, 167),
('NEAMT', 8428, 988, 1398, 2620, 1634, 106, 1453, 229),
('OLT', 9976, 2304, 872, 3358, 2526, 96, 782, 38),
('PRAHOVA', 7308, 558, 1785, 1732, 1363, 157, 1270, 443),
('SALAJ', 4755, 640, 1426, 1215, 879, 73, 359, 163),
('SATU M.', 3919, 488, 1780, 1034, 248, 11, 283, 75),
('SIBIU', 3695, 528, 1009, 862, 625, 47, 383, 241),
('SUCEAVA', 11941, 840, 2500, 3536, 1948, 228, 2492, 397),
('TELEORMAN', 11289, 528, 1393, 5841, 1972, 69, 1432, 54),
('TIMIS', 2781, 444, 259, 522, 569, 43, 534, 410),
('Total general', 288568, 30721, 57617, 88523, 53522, 3637, 40755, 13793),
('TULCEA', 3250, 0, 575, 1704, 680, 0, 263, 28),
('VALCEA', 5270, 243, 571, 1457, 1680, 178, 795, 346),
('VASLUI', 11584, 462, 2243, 4411, 1953, 66, 2365, 84),
('VRANCEA', 5540, 494, 1534, 1885, 808, 68, 619, 132);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `februarie2020`
--

CREATE TABLE `februarie2020` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `februarie2020`
--

INSERT INTO `februarie2020` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 5482, 645, 791, 1630, 1073, 66, 964, 313),
('ARAD', 2201, 197, 535, 537, 455, 39, 246, 192),
('ARGES', 8136, 676, 1887, 2634, 1248, 117, 1208, 366),
('BACAU', 11332, 1802, 534, 1945, 2762, 102, 3912, 275),
('BIHOR', 3839, 250, 757, 836, 971, 83, 541, 401),
('BISTRITA', 3517, 204, 290, 1104, 1003, 68, 660, 188),
('BOTOSANI', 3371, 150, 1071, 844, 585, 61, 558, 102),
('BRAILA', 4355, 726, 1102, 1503, 355, 63, 472, 134),
('BRASOV', 5029, 998, 1242, 1271, 659, 47, 508, 304),
('BUZAU', 11099, 2228, 2367, 3688, 1098, 62, 1546, 110),
('CALARASI', 3136, 355, 826, 1030, 485, 30, 356, 54),
('CARAS', 3324, 602, 451, 689, 893, 69, 423, 197),
('CLUJ', 4357, 730, 490, 1040, 878, 120, 709, 390),
('CONSTANTA', 7048, 897, 529, 1786, 1963, 82, 1320, 471),
('COVASNA', 2656, 442, 1007, 610, 273, 28, 239, 57),
('DAMBOVITA', 6364, 633, 909, 1938, 1390, 134, 999, 361),
('DOLJ', 17999, 849, 6013, 5010, 3691, 125, 1955, 356),
('GALATI', 10323, 1083, 1997, 4238, 1089, 104, 1470, 342),
('GIURGIU', 1599, 244, 289, 609, 265, 18, 132, 42),
('GORJ', 4392, 273, 287, 1398, 1171, 119, 863, 281),
('HARGHITA', 4977, 1282, 1229, 981, 658, 80, 564, 183),
('HUNEDOARA', 5546, 411, 520, 1488, 1590, 95, 976, 466),
('IALOMITA', 4243, 300, 1036, 1469, 637, 33, 710, 58),
('IASI', 8106, 564, 1567, 2735, 629, 61, 2229, 321),
('ILFOV', 777, 106, 218, 158, 144, 7, 67, 77),
('MARAMURES', 4713, 133, 1515, 830, 1112, 126, 689, 308),
('MEHEDINTI', 7005, 0, 1474, 3286, 1204, 54, 876, 111),
('MUN. BUC.', 15050, 25, 146, 2628, 5098, 292, 2660, 4201),
('MURES', 6400, 1058, 2428, 1484, 542, 55, 653, 180),
('NEAMT', 7604, 938, 1158, 2327, 1017, 91, 1832, 241),
('OLT', 8503, 1824, 724, 2793, 1641, 65, 1396, 60),
('PRAHOVA', 6854, 616, 1265, 1851, 1309, 99, 1280, 434),
('SALAJ', 4381, 321, 1180, 1203, 912, 62, 533, 170),
('SATU M.', 3733, 572, 1404, 1065, 319, 24, 272, 77),
('SIBIU', 3529, 391, 1078, 855, 530, 40, 419, 216),
('SUCEAVA', 10871, 621, 1928, 3444, 2046, 151, 2287, 394),
('TELEORMAN', 9696, 450, 1158, 5290, 1267, 47, 1438, 46),
('TIMIS', 2681, 329, 104, 480, 759, 47, 558, 404),
('Total general', 256743, 24789, 47726, 77214, 47074, 3224, 43319, 13397),
('TULCEA', 2856, 0, 477, 1336, 583, 0, 419, 41),
('VALCEA', 4553, 132, 512, 1398, 1176, 127, 892, 316),
('VASLUI', 10208, 405, 1941, 3953, 889, 62, 2907, 51),
('VRANCEA', 4898, 327, 1290, 1820, 705, 69, 581, 106);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `februarie2021`
--

CREATE TABLE `februarie2021` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `februarie2021`
--

INSERT INTO `februarie2021` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 6881, 699, 1127, 1779, 1574, 107, 1172, 423),
('ARAD', 4144, 863, 90, 1007, 1094, 66, 576, 448),
('ARGES', 9986, 636, 1895, 2948, 2024, 139, 1805, 539),
('BACAU', 12186, 1433, 3433, 984, 1716, 2131, 1970, 519),
('BIHOR', 5880, 317, 1002, 1529, 1450, 95, 864, 623),
('BISTRITA', 4566, 449, 280, 1228, 1386, 88, 877, 258),
('BOTOSANI', 4154, 225, 1169, 1037, 766, 73, 705, 179),
('BRAILA', 5391, 818, 1294, 1780, 597, 69, 641, 192),
('BRASOV', 6493, 1078, 1323, 1572, 1062, 94, 797, 567),
('BUZAU', 12033, 1700, 2519, 4038, 1562, 122, 1921, 171),
('CALARASI', 3428, 362, 858, 1046, 599, 31, 447, 85),
('CARAS', 3779, 436, 514, 870, 1080, 125, 510, 244),
('CLUJ', 6158, 675, 808, 1356, 1375, 182, 1041, 721),
('CONSTANTA', 8485, 926, 1198, 2022, 2288, 102, 1287, 662),
('COVASNA', 4220, 506, 1473, 917, 738, 43, 417, 126),
('DAMBOVITA', 5700, 364, 1238, 1734, 1182, 101, 793, 288),
('DOLJ', 19037, 870, 6336, 5037, 4039, 320, 2069, 366),
('GALATI', 11733, 1188, 2751, 4383, 1388, 108, 1486, 429),
('GIURGIU', 2150, 220, 429, 763, 458, 24, 189, 67),
('GORJ', 5166, 0, 584, 1426, 1603, 130, 1084, 339),
('HARGHITA', 6030, 777, 1951, 1100, 1071, 100, 815, 216),
('HUNEDOARA', 5875, 230, 626, 1394, 1893, 156, 1015, 561),
('IALOMITA', 4857, 332, 960, 1678, 880, 73, 841, 93),
('IASI', 9810, 607, 1854, 3082, 1061, 96, 2562, 548),
('ILFOV', 1382, 67, 364, 227, 359, 20, 172, 173),
('MARAMURES', 4048, 83, 421, 810, 1399, 147, 800, 388),
('MEHEDINTI', 6266, 0, 1274, 2757, 1212, 99, 782, 142),
('MUN. BUC.', 15006, 22, 144, 2471, 5131, 311, 2758, 4169),
('MURES', 6442, 768, 2037, 1393, 960, 95, 828, 361),
('NEAMT', 9097, 786, 1260, 2870, 1984, 125, 1733, 339),
('OLT', 9552, 801, 1296, 3330, 2231, 186, 1574, 134),
('PRAHOVA', 8517, 542, 1113, 2136, 2065, 223, 1770, 668),
('SALAJ', 5267, 392, 1523, 1384, 938, 95, 689, 246),
('SATU M.', 5398, 649, 2104, 1508, 537, 32, 423, 145),
('SIBIU', 5230, 461, 1315, 1220, 908, 91, 812, 423),
('SUCEAVA', 11096, 921, 1631, 3128, 2447, 197, 2260, 512),
('TELEORMAN', 9319, 574, 1141, 4602, 1512, 105, 1271, 114),
('TIMIS', 4402, 696, 238, 805, 1273, 99, 678, 613),
('Total general', 293461, 23408, 56574, 81557, 61104, 6692, 46260, 17866),
('TULCEA', 2779, 0, 663, 869, 723, 0, 441, 83),
('VALCEA', 6053, 203, 547, 1711, 1817, 142, 1228, 405),
('VASLUI', 9672, 382, 2230, 3631, 1730, 78, 1501, 120),
('VRANCEA', 5793, 350, 1561, 1995, 992, 72, 656, 167);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `ianuarie2019`
--

CREATE TABLE `ianuarie2019` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `ianuarie2019`
--

INSERT INTO `ianuarie2019` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 5486, 689, 747, 1592, 1171, 58, 927, 302),
('ARAD', 3022, 451, 916, 645, 503, 42, 268, 197),
('ARGES', 8509, 805, 2132, 2734, 1179, 80, 1238, 341),
('BACAU', 12506, 2397, 1020, 4028, 3229, 87, 1440, 305),
('BIHOR', 3589, 838, 576, 563, 695, 69, 454, 394),
('BISTRITA', 4097, 239, 344, 1382, 1059, 98, 758, 217),
('BOTOSANI', 4402, 194, 1255, 1288, 615, 89, 834, 127),
('BRAILA', 5151, 717, 1279, 1891, 474, 63, 587, 140),
('BRASOV', 5948, 1433, 1332, 1574, 667, 55, 608, 279),
('BUZAU', 12414, 2603, 2630, 4136, 965, 76, 1869, 135),
('CALARASI', 3894, 470, 1020, 1284, 548, 40, 453, 79),
('CARAS', 3540, 758, 389, 819, 797, 78, 505, 194),
('CLUJ', 4855, 896, 654, 1153, 876, 108, 721, 447),
('CONSTANTA', 8121, 1067, 933, 2526, 1961, 89, 1069, 476),
('COVASNA', 3150, 563, 1222, 669, 329, 43, 255, 69),
('DAMBOVITA', 7329, 793, 1415, 2082, 1786, 65, 960, 228),
('DOLJ', 20097, 925, 6680, 5611, 4078, 134, 2268, 401),
('GALATI', 11698, 1543, 2314, 4832, 860, 163, 1666, 320),
('GIURGIU', 1964, 275, 323, 650, 452, 31, 161, 72),
('GORJ', 5900, 441, 352, 1729, 1693, 160, 1210, 315),
('HARGHITA', 5709, 1352, 1371, 1087, 913, 66, 686, 234),
('HUNEDOARA', 6423, 502, 497, 1544, 1870, 128, 1336, 546),
('IALOMITA', 5248, 553, 1201, 1864, 527, 56, 988, 59),
('IASI', 8961, 706, 1767, 3068, 833, 68, 2234, 285),
('ILFOV', 1196, 181, 305, 296, 241, 10, 78, 85),
('MARAMURES', 6377, 161, 2739, 1418, 964, 132, 630, 333),
('MEHEDINTI', 7770, 0, 1654, 3732, 1291, 62, 910, 121),
('MUN. BUC.', 15679, 37, 135, 2684, 5234, 294, 2800, 4495),
('MURES', 6988, 1202, 2538, 1678, 614, 75, 705, 176),
('NEAMT', 8450, 988, 1297, 2672, 1047, 94, 2113, 239),
('OLT', 10105, 2309, 883, 3401, 1719, 103, 1642, 48),
('PRAHOVA', 7465, 568, 1841, 1700, 1446, 166, 1302, 442),
('SALAJ', 4740, 642, 1438, 1203, 692, 70, 545, 150),
('SATU M.', 3905, 471, 1727, 1046, 275, 10, 297, 79),
('SIBIU', 3598, 510, 989, 841, 552, 53, 429, 224),
('SUCEAVA', 11979, 1256, 2517, 3593, 1684, 223, 2345, 361),
('TELEORMAN', 10899, 500, 1470, 5830, 1577, 72, 1394, 56),
('TIMIS', 2867, 488, 275, 501, 510, 45, 568, 480),
('Total', 289582, 31727, 57159, 87773, 49430, 3807, 45649, 14037),
('TULCEA', 3234, 0, 574, 1717, 534, 0, 382, 27),
('VALCEA', 5029, 239, 639, 1439, 1188, 171, 1031, 322),
('VASLUI', 11653, 458, 2229, 4451, 1051, 68, 3318, 78),
('VRANCEA', 5635, 507, 1540, 820, 731, 213, 1665, 159);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `ianuarie2020`
--

CREATE TABLE `ianuarie2020` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `ianuarie2020`
--

INSERT INTO `ianuarie2020` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 5356, 655, 796, 1577, 1082, 60, 892, 294),
('ARAD', 2367, 235, 529, 555, 520, 39, 294, 195),
('ARGES', 8094, 674, 1858, 2560, 1274, 125, 1214, 389),
('BACAU', 11107, 2177, 771, 1139, 2663, 107, 3987, 263),
('BIHOR', 3972, 239, 693, 888, 1027, 92, 583, 450),
('BISTRITA', 3482, 202, 290, 1099, 986, 71, 640, 194),
('BOTOSANI', 3578, 150, 1080, 936, 610, 54, 620, 128),
('BRAILA', 4412, 718, 1107, 1515, 375, 66, 484, 147),
('BRASOV', 5148, 1024, 1243, 1286, 666, 49, 569, 311),
('BUZAU', 11171, 2230, 2376, 3717, 1097, 67, 1570, 114),
('CALARASI', 3200, 359, 838, 1075, 461, 26, 385, 56),
('CARAS', 3351, 586, 432, 687, 945, 74, 437, 190),
('CLUJ', 4465, 776, 426, 973, 952, 107, 777, 454),
('CONSTANTA', 7213, 1048, 554, 1899, 2005, 83, 1180, 444),
('COVASNA', 2701, 451, 1007, 609, 288, 29, 256, 61),
('DAMBOVITA', 6432, 953, 1161, 1801, 1246, 107, 920, 244),
('DOLJ', 18067, 846, 5997, 5009, 3775, 121, 1948, 371),
('GALATI', 10414, 1067, 1999, 4209, 1197, 98, 1476, 368),
('GIURGIU', 1624, 236, 286, 617, 270, 18, 146, 51),
('GORJ', 4557, 291, 298, 1394, 1230, 127, 918, 299),
('HARGHITA', 5115, 1270, 1234, 1006, 718, 84, 610, 193),
('HUNEDOARA', 5426, 407, 374, 1253, 1600, 113, 1151, 528),
('IALOMITA', 4225, 298, 1032, 1439, 653, 44, 702, 57),
('IASI', 8011, 536, 1541, 2678, 642, 82, 2204, 328),
('ILFOV', 776, 110, 224, 148, 146, 8, 63, 77),
('MARAMURES', 5062, 138, 1709, 830, 1190, 143, 704, 348),
('MEHEDINTI', 6960, 0, 1476, 3274, 1177, 60, 860, 113),
('MUN. BUC.', 15191, 25, 141, 2641, 5162, 287, 2687, 4248),
('MURES', 6502, 1076, 2333, 1596, 572, 56, 673, 196),
('NEAMT', 7610, 932, 1163, 2319, 1034, 92, 1805, 265),
('OLT', 8731, 1855, 725, 2790, 1786, 77, 1433, 65),
('PRAHOVA', 7041, 634, 1290, 1907, 1292, 109, 1363, 446),
('SALAJ', 4325, 313, 1186, 1146, 950, 65, 494, 171),
('SATU M.', 3706, 559, 1374, 1051, 342, 23, 277, 80),
('SIBIU', 3501, 380, 1046, 853, 542, 40, 416, 224),
('SUCEAVA', 10937, 579, 2397, 3140, 2083, 227, 2141, 370),
('TELEORMAN', 9232, 431, 1139, 5090, 1283, 45, 1201, 43),
('TIMIS', 2977, 206, 106, 583, 878, 65, 613, 526),
('Total general', 258917, 25529, 48456, 74714, 48438, 3415, 44518, 13847),
('TULCEA', 2842, 0, 468, 1380, 537, 0, 415, 42),
('VALCEA', 4720, 132, 513, 984, 1296, 131, 1333, 331),
('VASLUI', 10318, 405, 1934, 4035, 1132, 70, 2687, 55),
('VRANCEA', 4998, 326, 1310, 1026, 754, 74, 1390, 118);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `ianuarie2021`
--

CREATE TABLE `ianuarie2021` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `ianuarie2021`
--

INSERT INTO `ianuarie2021` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 6736, 795, 896, 1733, 1574, 113, 1194, 431),
('ARAD', 4077, 326, 554, 937, 1125, 75, 588, 472),
('ARGES', 9843, 654, 1866, 2944, 1961, 139, 1752, 527),
('BACAU', 12021, 1433, 3457, 1025, 1658, 1939, 2011, 498),
('BIHOR', 5822, 288, 995, 1461, 1458, 100, 881, 639),
('BISTRITA', 4368, 174, 240, 1363, 1404, 92, 815, 280),
('BOTOSANI', 4108, 218, 1150, 1029, 757, 67, 710, 177),
('BRAILA', 5389, 868, 1307, 1754, 601, 64, 608, 187),
('BRASOV', 6608, 1375, 1202, 1488, 1092, 94, 788, 569),
('BUZAU', 13102, 2505, 2434, 4153, 1692, 136, 1995, 187),
('CALARASI', 3610, 362, 973, 996, 577, 35, 508, 159),
('CARAS', 3547, 581, 348, 755, 1009, 139, 477, 238),
('CLUJ', 6407, 812, 597, 1403, 1405, 209, 1153, 828),
('CONSTANTA', 8330, 833, 1213, 1941, 2328, 118, 1243, 654),
('COVASNA', 4303, 514, 1474, 905, 792, 45, 440, 133),
('DAMBOVITA', 5775, 536, 502, 1847, 1445, 114, 986, 345),
('DOLJ', 18848, 3362, 3842, 4915, 4021, 345, 1971, 392),
('GALATI', 11856, 1228, 2455, 4530, 1458, 121, 1564, 500),
('GIURGIU', 2062, 239, 288, 767, 498, 21, 174, 75),
('GORJ', 5121, 0, 616, 1338, 1645, 152, 1016, 354),
('HARGHITA', 6303, 1467, 783, 1207, 1330, 107, 1106, 303),
('HUNEDOARA', 5426, 407, 374, 1253, 1600, 113, 1151, 528),
('IALOMITA', 4732, 273, 1109, 1521, 864, 73, 803, 89),
('IASI', 9708, 595, 1818, 3014, 1141, 92, 2499, 549),
('ILFOV', 1466, 105, 151, 249, 565, 18, 195, 183),
('MARAMURES', 3991, 61, 638, 721, 1274, 130, 762, 405),
('MEHEDINTI', 6281, 0, 1214, 2739, 1239, 103, 838, 148),
('MUN. BUC.', 15074, 22, 140, 2465, 5196, 299, 2765, 4187),
('MURES', 6241, 702, 1845, 1285, 1002, 102, 893, 412),
('NEAMT', 9252, 916, 1270, 2736, 2118, 102, 1757, 353),
('OLT', 9546, 1903, 749, 2958, 2182, 204, 1424, 126),
('PRAHOVA', 8445, 528, 1043, 2089, 2137, 234, 1742, 672),
('SALAJ', 5326, 374, 1462, 1360, 1032, 95, 720, 283),
('SATU M.', 5516, 632, 2151, 1560, 554, 34, 439, 146),
('SIBIU', 5301, 460, 1327, 1200, 938, 89, 858, 429),
('SUCEAVA', 10635, 894, 1509, 2761, 2480, 212, 2250, 529),
('TELEORMAN', 9267, 428, 1089, 4770, 1415, 117, 1345, 103),
('TIMIS', 4497, 492, 284, 869, 1351, 104, 729, 668),
('Total general', 292216, 28152, 49387, 79886, 61975, 6641, 47585, 18590),
('TULCEA', 2634, 0, 416, 1061, 652, 0, 411, 94),
('VALCEA', 5656, 130, 550, 1494, 1684, 138, 1217, 443),
('VASLUI', 9367, 323, 1596, 3312, 1734, 86, 2185, 131),
('VRANCEA', 5619, 337, 1460, 1978, 987, 71, 622, 164);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `iulie2019`
--

CREATE TABLE `iulie2019` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `iulie2019`
--

INSERT INTO `iulie2019` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 4746, 632, 676, 1461, 953, 37, 749, 238),
('ARAD', 3112, 377, 582, 488, 1252, 22, 206, 185),
('ARGES', 7623, 692, 1826, 2366, 1336, 80, 1028, 295),
('BACAU', 10925, 1664, 1196, 3751, 1076, 57, 1090, 2091),
('BIHOR', 3456, 520, 611, 633, 890, 50, 393, 359),
('BISTRITA', 3180, 183, 291, 1023, 716, 45, 514, 408),
('BOTOSANI', 3893, 155, 1044, 1029, 876, 51, 550, 188),
('BRAILA', 4537, 721, 1080, 1639, 459, 41, 436, 161),
('BRASOV', 5765, 1079, 1386, 1459, 1063, 54, 449, 275),
('BUZAU', 11640, 2229, 2350, 3742, 1689, 54, 1447, 129),
('CALARASI', 3338, 377, 883, 1061, 609, 26, 328, 54),
('CARAS', 3266, 549, 390, 685, 991, 61, 400, 190),
('CLUJ', 4649, 934, 569, 1018, 939, 98, 676, 415),
('CONSTANTA', 5552, 1016, 746, 1342, 1545, 43, 488, 372),
('COVASNA', 2738, 438, 949, 538, 572, 27, 163, 51),
('DAMBOVITA', 6810, 671, 1211, 1997, 1854, 47, 803, 227),
('DOLJ', 18238, 853, 5972, 5062, 4058, 82, 1837, 374),
('GALATI', 11127, 1428, 2111, 4378, 1428, 100, 1372, 310),
('GIURGIU', 1855, 235, 246, 558, 619, 7, 120, 70),
('GORJ', 4778, 297, 292, 1322, 1602, 99, 849, 317),
('HARGHITA', 5051, 1195, 1232, 913, 1024, 48, 472, 167),
('HUNEDOARA', 5787, 514, 508, 1568, 1418, 118, 1132, 529),
('IALOMITA', 4506, 398, 1081, 1496, 758, 35, 669, 69),
('IASI', 8387, 630, 1641, 2850, 1050, 45, 1875, 296),
('ILFOV', 874, 109, 265, 142, 217, 6, 63, 72),
('MARAMURES', 6440, 150, 2860, 988, 1436, 79, 630, 297),
('MEHEDINTI', 6532, 0, 1455, 3165, 997, 25, 809, 81),
('MUN. BUC.', 15502, 26, 132, 2632, 5341, 291, 2764, 4316),
('MURES', 5917, 1057, 2126, 1354, 639, 51, 523, 167),
('NEAMT', 7779, 1117, 1192, 2353, 1031, 78, 1673, 335),
('OLT', 8746, 1794, 802, 2932, 1785, 46, 1318, 69),
('PRAHOVA', 6424, 627, 1214, 1780, 1296, 72, 1030, 405),
('SALAJ', 4449, 605, 1264, 1059, 831, 32, 466, 192),
('SATU M.', 3357, 376, 1613, 875, 225, 11, 172, 85),
('SIBIU', 3246, 423, 847, 803, 461, 29, 358, 325),
('SUCEAVA', 11596, 684, 2138, 2950, 2952, 182, 1877, 813),
('TELEORMAN', 9770, 424, 1210, 5324, 1372, 36, 1300, 104),
('TIMIS', 2944, 386, 168, 647, 801, 41, 506, 395),
('Total general', 262044, 26246, 51347, 77235, 52459, 2479, 36242, 16036),
('TULCEA', 2534, 0, 734, 863, 554, 0, 325, 58),
('VALCEA', 5167, 251, 480, 1296, 1732, 83, 989, 336),
('VASLUI', 10460, 430, 2050, 3966, 994, 46, 2899, 75),
('VRANCEA', 5348, 0, 1924, 1727, 1018, 44, 494, 141);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `iulie2020`
--

CREATE TABLE `iulie2020` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `iulie2020`
--

INSERT INTO `iulie2020` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 5672, 455, 514, 1480, 1673, 63, 1087, 400),
('ARAD', 4558, 323, 320, 975, 1734, 98, 711, 397),
('ARGES', 10383, 637, 1785, 3020, 2420, 158, 1777, 586),
('BACAU', 10966, 2112, 948, 3500, 1141, 89, 1110, 2066),
('BIHOR', 5187, 187, 606, 1077, 1801, 97, 801, 618),
('BISTRITA', 3828, 136, 188, 1138, 1316, 65, 766, 219),
('BOTOSANI', 4021, 193, 1042, 876, 1038, 60, 647, 165),
('BRAILA', 4653, 778, 1077, 1557, 515, 57, 503, 166),
('BRASOV', 6362, 975, 1117, 1395, 1415, 91, 826, 543),
('BUZAU', 12293, 2304, 2335, 3804, 1849, 66, 1765, 170),
('CALARASI', 3740, 343, 773, 1156, 805, 39, 474, 150),
('CARAS', 3865, 574, 383, 775, 1263, 74, 561, 235),
('CLUJ', 6240, 552, 566, 1383, 1611, 177, 1256, 695),
('CONSTANTA', 6872, 756, 776, 1249, 2778, 77, 700, 536),
('COVASNA', 3870, 521, 1099, 820, 828, 50, 464, 88),
('DAMBOVITA', 6167, 582, 640, 1903, 1568, 92, 1012, 370),
('DOLJ', 19131, 854, 6167, 4968, 4301, 379, 2071, 391),
('GALATI', 11726, 1105, 2015, 4316, 1995, 114, 1771, 410),
('GIURGIU', 2226, 245, 285, 712, 721, 16, 177, 70),
('GORJ', 5073, 269, 211, 1278, 1886, 184, 882, 363),
('HARGHITA', 5730, 1069, 1236, 971, 1388, 75, 761, 230),
('HUNEDOARA', 6435, 305, 397, 1540, 2295, 119, 1194, 585),
('IALOMITA', 4351, 270, 1014, 1356, 949, 48, 637, 77),
('IASI', 9037, 564, 1580, 2847, 1108, 82, 2351, 505),
('ILFOV', 851, 91, 143, 126, 342, 7, 81, 61),
('MARAMURES', 5312, 58, 1209, 763, 2031, 117, 770, 364),
('MEHEDINTI', 6695, 0, 1326, 2979, 1286, 89, 876, 139),
('MUN. BUC.', 15290, 25, 144, 2570, 5161, 302, 2839, 4249),
('MURES', 6067, 719, 1545, 1227, 1340, 75, 848, 313),
('NEAMT', 7944, 865, 1018, 2240, 1544, 100, 1870, 307),
('OLT', 9288, 1936, 736, 2773, 2191, 149, 1461, 42),
('PRAHOVA', 8889, 547, 1072, 2167, 2418, 140, 1804, 741),
('SALAJ', 5075, 326, 1131, 1228, 1520, 63, 609, 198),
('SATU M.', 4860, 658, 1691, 1361, 588, 23, 388, 151),
('SIBIU', 5199, 372, 970, 1115, 1263, 94, 949, 436),
('SUCEAVA', 11563, 437, 1569, 3071, 3489, 147, 2269, 581),
('TELEORMAN', 8836, 402, 974, 4618, 1330, 95, 1354, 63),
('TIMIS', 3720, 198, 106, 759, 1396, 99, 641, 521),
('Total general', 283939, 23411, 44142, 78294, 69596, 4162, 45418, 18916),
('TULCEA', 2792, 0, 433, 1107, 757, 0, 416, 79),
('VALCEA', 5916, 125, 489, 1428, 2215, 158, 1119, 382),
('VASLUI', 7798, 240, 1257, 2815, 1112, 62, 2228, 84),
('VRANCEA', 5458, 303, 1255, 1851, 1215, 72, 592, 170);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `iunie2019`
--

CREATE TABLE `iunie2019` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `iunie2019`
--

INSERT INTO `iunie2019` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 4671, 649, 693, 1496, 799, 37, 776, 221),
('ARAD', 2882, 389, 578, 530, 991, 21, 218, 155),
('ARGES', 7414, 713, 1872, 2398, 1044, 75, 1025, 287),
('BACAU', 10802, 1776, 946, 3262, 2920, 98, 1412, 388),
('BIHOR', 3348, 411, 679, 674, 734, 55, 437, 358),
('BISTRITA', 3273, 270, 316, 1119, 856, 47, 472, 193),
('BOTOSANI', 3604, 159, 1041, 1058, 634, 50, 556, 106),
('BRAILA', 4503, 717, 1099, 1650, 406, 40, 439, 152),
('BRASOV', 5777, 1279, 1251, 1292, 1123, 51, 527, 254),
('BUZAU', 11430, 2237, 2429, 3820, 1254, 55, 1525, 110),
('CALARASI', 3270, 380, 871, 1121, 493, 23, 336, 46),
('CARAS', 3130, 563, 373, 701, 869, 52, 396, 176),
('CLUJ', 4509, 970, 520, 1074, 734, 97, 703, 411),
('CONSTANTA', 5656, 957, 359, 1678, 1773, 52, 488, 349),
('COVASNA', 2611, 474, 1024, 560, 319, 28, 154, 52),
('DAMBOVITA', 6613, 662, 1184, 1995, 1704, 43, 810, 215),
('DOLJ', 18278, 868, 6123, 5127, 3805, 100, 1917, 338),
('GALATI', 10823, 1442, 2142, 4470, 1015, 101, 1370, 283),
('GIURGIU', 1783, 249, 267, 591, 476, 7, 122, 71),
('GORJ', 4693, 323, 313, 1411, 1385, 86, 894, 281),
('HARGHITA', 4910, 1241, 1285, 935, 754, 46, 489, 160),
('HUNEDOARA', 5614, 514, 508, 1568, 1245, 118, 1132, 529),
('IALOMITA', 4570, 422, 1125, 1549, 677, 35, 712, 50),
('IASI', 8545, 696, 1708, 2907, 939, 47, 1949, 299),
('ILFOV', 913, 125, 315, 152, 173, 5, 68, 75),
('MARAMURES', 6394, 144, 3130, 942, 1172, 87, 633, 286),
('MEHEDINTI', 7013, 0, 1564, 3479, 1021, 27, 836, 86),
('MUN. BUC.', 15525, 26, 136, 2628, 5282, 290, 2794, 4369),
('MURES', 6043, 1222, 2171, 1413, 488, 62, 539, 148),
('NEAMT', 7274, 1000, 1171, 2242, 966, 61, 1661, 173),
('OLT', 8691, 1842, 822, 2968, 1634, 63, 1331, 31),
('PRAHOVA', 6444, 662, 1374, 1501, 1385, 102, 1057, 363),
('SALAJ', 4119, 584, 1245, 1027, 649, 38, 440, 136),
('SATU M.', 3364, 396, 1652, 880, 182, 9, 174, 71),
('SIBIU', 3283, 482, 862, 826, 593, 34, 264, 222),
('SUCEAVA', 10657, 1019, 2102, 3042, 2413, 147, 1602, 332),
('TELEORMAN', 9570, 433, 1204, 5363, 1298, 28, 1199, 45),
('TIMIS', 2920, 395, 292, 609, 662, 37, 537, 388),
('Total general', 257583, 27791, 51089, 78100, 48719, 2541, 36594, 12749),
('TULCEA', 2430, 0, 456, 1202, 475, 0, 267, 30),
('VALCEA', 4838, 256, 458, 1303, 1517, 98, 880, 326),
('VASLUI', 10151, 425, 2026, 3802, 848, 49, 2942, 59),
('VRANCEA', 5245, 419, 1403, 1735, 1012, 40, 511, 125);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `iunie2020`
--

CREATE TABLE `iunie2020` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `iunie2020`
--

INSERT INTO `iunie2020` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 5432, 484, 582, 1546, 1388, 53, 1030, 349),
('ARAD', 3327, 283, 283, 827, 938, 96, 549, 351),
('ARGES', 9412, 588, 1777, 2825, 1952, 140, 1585, 545),
('BACAU', 10454, 2149, 749, 3500, 1082, 77, 1009, 1888),
('BIHOR', 4239, 155, 440, 979, 1322, 99, 745, 499),
('BISTRITA', 3307, 137, 195, 1037, 791, 56, 624, 467),
('BOTOSANI', 3421, 189, 1042, 808, 651, 41, 542, 148),
('BRAILA', 4508, 760, 1075, 1534, 426, 54, 490, 169),
('BRASOV', 5812, 932, 1141, 1336, 1088, 80, 699, 536),
('BUZAU', 11506, 2293, 2345, 3756, 1249, 59, 1609, 195),
('CALARASI', 3183, 344, 786, 1032, 454, 33, 375, 159),
('CARAS', 3319, 480, 309, 697, 813, 82, 510, 428),
('CLUJ', 5514, 552, 535, 1313, 1310, 152, 957, 695),
('CONSTANTA', 6497, 818, 519, 1240, 2010, 90, 1010, 810),
('COVASNA', 3263, 517, 1082, 713, 469, 48, 370, 64),
('DAMBOVITA', 6179, 614, 835, 2006, 1244, 94, 1035, 351),
('DOLJ', 18996, 860, 6142, 4982, 3841, 150, 2450, 571),
('GALATI', 10768, 1072, 1999, 4246, 1338, 105, 1580, 428),
('GIURGIU', 1944, 239, 280, 666, 508, 16, 162, 73),
('GORJ', 4270, 224, 213, 1187, 1240, 164, 790, 452),
('HARGHITA', 5244, 1247, 1171, 1025, 911, 67, 617, 206),
('HUNEDOARA', 6380, 305, 388, 1594, 2053, 98, 1429, 513),
('IALOMITA', 4060, 272, 1001, 1474, 597, 44, 605, 67),
('IASI', 8446, 572, 1569, 2778, 786, 64, 2236, 441),
('ILFOV', 677, 85, 158, 118, 176, 7, 73, 60),
('MARAMURES', 4536, 69, 1260, 750, 1267, 115, 730, 345),
('MEHEDINTI', 6328, 0, 1254, 2815, 1230, 88, 828, 113),
('MUN. BUC.', 15241, 25, 143, 2562, 5253, 302, 2756, 4200),
('MURES', 5520, 757, 1587, 1274, 809, 70, 751, 272),
('NEAMT', 6286, 656, 707, 1755, 1037, 95, 1631, 405),
('OLT', 8673, 1891, 693, 2747, 1369, 126, 1391, 456),
('PRAHOVA', 7888, 530, 1058, 2060, 1854, 130, 1598, 658),
('SALAJ', 4556, 312, 1134, 1207, 1063, 58, 568, 214),
('SATU M.', 4659, 635, 1647, 1339, 490, 22, 365, 161),
('SIBIU', 4309, 364, 945, 986, 750, 81, 694, 489),
('SUCEAVA', 10735, 506, 1714, 3274, 2273, 137, 2086, 745),
('TELEORMAN', 8565, 394, 980, 4422, 1091, 98, 1370, 210),
('TIMIS', 3220, 197, 204, 621, 1016, 96, 598, 488),
('Total general', 260667, 23145, 43280, 76017, 51545, 3664, 42541, 20475),
('TULCEA', 2718, 0, 447, 1155, 578, 0, 411, 127),
('VALCEA', 5301, 126, 518, 1416, 1573, 153, 1074, 441),
('VASLUI', 6972, 228, 1177, 2596, 619, 51, 2030, 271),
('VRANCEA', 5002, 284, 1196, 1819, 636, 73, 579, 415);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `mai2019`
--

CREATE TABLE `mai2019` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `mai2019`
--

INSERT INTO `mai2019` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 4721, 658, 732, 1499, 807, 39, 767, 219),
('ARAD', 2288, 344, 617, 529, 402, 24, 220, 152),
('ARGES', 7362, 697, 1852, 2430, 980, 74, 1045, 284),
('BACAU', 10830, 1824, 1345, 1532, 3224, 61, 2616, 228),
('BIHOR', 3316, 437, 662, 656, 696, 64, 427, 374),
('BISTRITA', 3339, 170, 327, 931, 1109, 59, 555, 188),
('BOTOSANI', 3616, 193, 1102, 1072, 502, 43, 589, 115),
('BRAILA', 4506, 720, 1124, 1684, 354, 38, 438, 148),
('BRASOV', 5401, 1291, 1259, 584, 1370, 54, 580, 263),
('BUZAU', 11303, 2229, 2434, 3857, 1037, 56, 1581, 109),
('CALARASI', 3273, 385, 893, 1105, 488, 22, 327, 53),
('CARAS', 3080, 556, 368, 691, 850, 59, 390, 166),
('CLUJ', 4637, 926, 688, 1044, 762, 93, 707, 417),
('CONSTANTA', 5514, 881, 771, 1288, 1612, 59, 519, 384),
('COVASNA', 2577, 475, 1047, 569, 237, 30, 170, 49),
('DAMBOVITA', 6573, 696, 1196, 2010, 1597, 47, 811, 216),
('DOLJ', 18523, 886, 6281, 5190, 3799, 95, 1942, 330),
('GALATI', 10532, 1439, 2163, 4500, 673, 102, 1374, 281),
('GIURGIU', 1711, 253, 284, 581, 376, 10, 136, 71),
('GORJ', 4839, 359, 315, 1500, 1297, 119, 943, 306),
('HARGHITA', 4804, 1243, 1295, 913, 661, 44, 488, 160),
('HUNEDOARA', 5775, 514, 508, 1568, 1405, 118, 1132, 530),
('IALOMITA', 4626, 440, 1121, 1587, 645, 47, 732, 54),
('IASI', 8313, 674, 1735, 2961, 583, 57, 2000, 303),
('ILFOV', 866, 121, 310, 151, 137, 4, 64, 79),
('MARAMURES', 6181, 145, 2970, 1217, 856, 86, 617, 290),
('MEHEDINTI', 7011, 0, 1537, 3472, 1047, 32, 831, 92),
('MUN. BUC.', 15559, 25, 135, 2644, 5278, 294, 2804, 4379),
('MURES', 6009, 1182, 2151, 1430, 488, 57, 561, 140),
('NEAMT', 6876, 932, 1104, 2134, 813, 53, 1668, 172),
('OLT', 8541, 1887, 826, 3028, 1371, 62, 1335, 32),
('PRAHOVA', 6491, 610, 1402, 1490, 1369, 119, 1126, 375),
('SALAJ', 4166, 631, 1280, 1083, 718, 38, 269, 147),
('SATU M.', 3445, 410, 1685, 886, 193, 7, 197, 67),
('SIBIU', 3280, 469, 883, 817, 486, 37, 391, 197),
('SUCEAVA', 10017, 651, 2203, 2291, 2515, 156, 1868, 333),
('TELEORMAN', 9602, 445, 1178, 5328, 1378, 37, 1191, 45),
('TIMIS', 2717, 383, 317, 579, 535, 38, 485, 380),
('Total general', 254631, 27279, 52483, 75116, 45735, 2617, 38731, 12670),
('TULCEA', 2478, 0, 473, 1272, 437, 0, 264, 32),
('VALCEA', 4587, 260, 481, 1271, 1054, 89, 1110, 322),
('VASLUI', 10333, 425, 2026, 3983, 848, 49, 2943, 59),
('VRANCEA', 5013, 413, 1403, 1759, 746, 45, 518, 129);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `mai2020`
--

CREATE TABLE `mai2020` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `mai2020`
--

INSERT INTO `mai2020` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 4968, 186, 863, 1415, 1137, 87, 962, 318),
('ARAD', 2478, 297, 264, 613, 605, 57, 354, 288),
('ARGES', 8079, 532, 1540, 2478, 1559, 122, 1380, 468),
('BACAU', 10857, 1701, 739, 3403, 2708, 103, 1840, 363),
('BIHOR', 4316, 215, 621, 993, 1157, 90, 721, 519),
('BISTRITA', 3295, 171, 224, 1018, 1014, 62, 611, 195),
('BOTOSANI', 3156, 180, 1025, 766, 557, 52, 467, 109),
('BRAILA', 4475, 741, 1080, 1526, 419, 59, 485, 165),
('BRASOV', 5477, 979, 1181, 1311, 844, 76, 637, 449),
('BUZAU', 11242, 2221, 2328, 3712, 1161, 70, 1606, 144),
('CALARASI', 2829, 326, 684, 910, 432, 30, 383, 64),
('CARAS', 2984, 463, 317, 558, 881, 59, 467, 239),
('CLUJ', 4786, 628, 427, 1088, 1250, 116, 796, 481),
('CONSTANTA', 6458, 763, 443, 1725, 1810, 89, 1119, 509),
('COVASNA', 2880, 478, 1042, 644, 353, 36, 275, 52),
('DAMBOVITA', 6035, 614, 833, 1913, 1289, 99, 955, 332),
('DOLJ', 18140, 840, 5950, 4864, 3737, 159, 2080, 510),
('GALATI', 10350, 1050, 1945, 4152, 1185, 103, 1555, 360),
('GIURGIU', 1763, 233, 286, 638, 376, 20, 148, 62),
('GORJ', 4069, 223, 222, 1125, 1231, 117, 798, 353),
('HARGHITA', 5087, 1242, 1173, 1006, 794, 77, 606, 189),
('HUNEDOARA', 6220, 305, 476, 1594, 1935, 101, 1254, 555),
('IALOMITA', 3782, 241, 920, 1267, 642, 36, 611, 65),
('IASI', 7909, 552, 1539, 2674, 636, 69, 2095, 344),
('ILFOV', 657, 77, 194, 124, 128, 8, 64, 62),
('MARAMURES', 4216, 74, 1263, 788, 979, 108, 722, 282),
('MEHEDINTI', 6069, 0, 1212, 2725, 1150, 47, 819, 116),
('MUN. BUC.', 15186, 21, 146, 2574, 5264, 304, 2733, 4144),
('MURES', 5782, 866, 1894, 1345, 650, 95, 725, 207),
('NEAMT', 7269, 796, 934, 2037, 1207, 106, 1912, 277),
('OLT', 8573, 1937, 702, 2740, 1521, 69, 1494, 110),
('PRAHOVA', 7223, 542, 1067, 1922, 1607, 123, 1476, 486),
('SALAJ', 4344, 295, 1103, 1202, 982, 56, 524, 182),
('SATU M.', 4172, 666, 1463, 1154, 424, 29, 336, 100),
('SIBIU', 4087, 404, 1084, 930, 697, 65, 584, 323),
('SUCEAVA', 10280, 538, 1800, 3278, 1987, 168, 2140, 369),
('TELEORMAN', 8808, 404, 1032, 4706, 1004, 42, 1523, 97),
('TIMIS', 2763, 305, 215, 504, 661, 61, 595, 422),
('Total general', 251944, 22788, 43672, 74951, 49615, 3429, 42537, 14952),
('TULCEA', 2715, 0, 421, 1219, 581, 0, 424, 70),
('VALCEA', 4967, 116, 477, 1390, 1401, 131, 1089, 363),
('VASLUI', 8421, 291, 1376, 3135, 879, 53, 2612, 75),
('VRANCEA', 4777, 275, 1167, 1785, 781, 75, 560, 134);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `martie2019`
--

CREATE TABLE `martie2019` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `martie2019`
--

INSERT INTO `martie2019` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 5294, 715, 765, 1658, 970, 53, 882, 251),
('ARAD', 2797, 453, 842, 597, 438, 40, 259, 168),
('ARGES', 7992, 767, 2002, 2600, 1074, 92, 1133, 324),
('BACAU', 12133, 1964, 3061, 4087, 1321, 67, 1392, 241),
('BIHOR', 3077, 551, 436, 570, 650, 70, 412, 388),
('BISTRITA', 3855, 309, 388, 1325, 833, 85, 694, 221),
('BOTOSANI', 4166, 183, 1237, 1243, 554, 66, 761, 122),
('BRAILA', 5167, 807, 1261, 1931, 426, 52, 553, 137),
('BRASOV', 5764, 1435, 1295, 1487, 619, 61, 588, 279),
('BUZAU', 11895, 2524, 2611, 4036, 859, 66, 1688, 111),
('CALARASI', 3707, 462, 999, 1316, 455, 33, 379, 63),
('CARAS', 3512, 771, 403, 799, 782, 70, 495, 192),
('CLUJ', 4715, 972, 663, 1103, 735, 93, 727, 422),
('CONSTANTA', 7759, 928, 1267, 2455, 1438, 81, 1122, 468),
('COVASNA', 2961, 525, 1183, 656, 286, 32, 222, 57),
('DAMBOVITA', 7046, 780, 1393, 2060, 1646, 59, 891, 217),
('DOLJ', 19758, 3228, 6678, 5515, 1590, 131, 2223, 393),
('GALATI', 11368, 1516, 2319, 4827, 1290, 129, 983, 304),
('GIURGIU', 1860, 262, 295, 633, 432, 21, 152, 65),
('GORJ', 5457, 503, 347, 1645, 1419, 171, 1075, 297),
('HARGHITA', 5428, 1333, 1351, 1061, 831, 62, 588, 202),
('HUNEDOARA', 6227, 647, 475, 1778, 1547, 118, 1132, 530),
('IALOMITA', 5013, 563, 1190, 1774, 484, 57, 892, 53),
('IASI', 8690, 707, 1824, 3114, 594, 62, 2114, 275),
('ILFOV', 1032, 149, 334, 213, 176, 5, 72, 83),
('MARAMURES', 6356, 149, 2852, 1350, 920, 106, 672, 307),
('MEHEDINTI', 7509, 0, 1619, 3650, 1184, 52, 890, 114),
('MUN. BUC.', 15650, 41, 137, 2672, 5326, 296, 2795, 4383),
('MURES', 6559, 1304, 2258, 1647, 468, 73, 660, 149),
('NEAMT', 7730, 1026, 1213, 2392, 844, 76, 1974, 205),
('OLT', 9349, 2495, 883, 3288, 1080, 82, 1485, 36),
('PRAHOVA', 7176, 585, 1750, 1752, 1296, 145, 1234, 414),
('SALAJ', 4679, 638, 1410, 1179, 874, 64, 357, 157),
('SATU M.', 3811, 481, 1754, 1017, 240, 10, 240, 69),
('SIBIU', 3579, 560, 987, 888, 460, 35, 430, 219),
('SUCEAVA', 11325, 1170, 2497, 3435, 1533, 219, 2136, 335),
('TELEORMAN', 10965, 601, 1254, 5819, 1819, 61, 1361, 50),
('TIMIS', 2573, 418, 230, 497, 507, 38, 495, 388),
('Total general', 278147, 34006, 58350, 86783, 41030, 3318, 41412, 13248),
('TULCEA', 2965, 0, 602, 1235, 580, 0, 518, 30),
('VALCEA', 4726, 202, 539, 1333, 1191, 159, 964, 338),
('VASLUI', 11149, 627, 2199, 4260, 728, 59, 3206, 70),
('VRANCEA', 5373, 655, 1547, 1886, 531, 67, 566, 121);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `martie2020`
--

CREATE TABLE `martie2020` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `martie2020`
--

INSERT INTO `martie2020` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 5190, 596, 671, 1544, 1099, 53, 918, 309),
('ARAD', 2234, 331, 291, 598, 440, 41, 309, 224),
('ARGES', 8096, 659, 1844, 2618, 1269, 109, 1208, 389),
('BACAU', 10983, 1745, 557, 3771, 2752, 106, 1766, 286),
('BIHOR', 4155, 272, 788, 923, 1035, 84, 602, 451),
('BISTRITA', 3216, 177, 259, 984, 918, 64, 635, 179),
('BOTOSANI', 3132, 170, 1070, 774, 507, 51, 485, 75),
('BRAILA', 4301, 724, 1068, 1495, 365, 58, 452, 139),
('BRASOV', 5113, 981, 1228, 1297, 667, 51, 532, 357),
('BUZAU', 10990, 2217, 2350, 3662, 1087, 66, 1491, 117),
('CALARASI', 3012, 350, 809, 1002, 400, 30, 361, 60),
('CARAS', 3236, 573, 425, 680, 863, 60, 431, 204),
('CLUJ', 4479, 677, 481, 1066, 944, 113, 764, 434),
('CONSTANTA', 6763, 868, 538, 1806, 1911, 92, 1089, 459),
('COVASNA', 2680, 435, 1006, 615, 292, 31, 249, 52),
('DAMBOVITA', 6207, 631, 924, 1954, 1308, 116, 938, 336),
('DOLJ', 17131, 827, 5795, 4802, 3399, 120, 1790, 398),
('GALATI', 10247, 1072, 2001, 4171, 1099, 107, 1446, 351),
('GIURGIU', 1640, 232, 285, 618, 305, 18, 129, 53),
('GORJ', 4314, 269, 278, 1298, 1184, 129, 839, 317),
('HARGHITA', 4843, 1268, 1195, 963, 647, 71, 528, 171),
('HUNEDOARA', 5822, 449, 463, 1594, 1700, 88, 1032, 496),
('IALOMITA', 3996, 284, 1002, 1389, 595, 28, 623, 75),
('IASI', 7613, 548, 1533, 2648, 529, 51, 2010, 294),
('ILFOV', 738, 93, 222, 142, 136, 8, 60, 77),
('MARAMURES', 4530, 129, 1351, 847, 1087, 117, 709, 290),
('MEHEDINTI', 6923, 0, 1474, 3285, 1151, 42, 875, 96),
('MUN. BUC.', 14996, 22, 142, 2625, 5069, 294, 2674, 4170),
('MURES', 6094, 1036, 2194, 1458, 546, 69, 623, 168),
('NEAMT', 7500, 902, 1157, 2314, 1003, 79, 1794, 251),
('OLT', 8318, 1841, 712, 2758, 1493, 62, 1353, 99),
('PRAHOVA', 6656, 568, 1151, 1815, 1303, 107, 1307, 405),
('SALAJ', 4226, 311, 1153, 1185, 858, 60, 515, 144),
('SATU M.', 3834, 578, 1427, 1100, 342, 27, 276, 84),
('SIBIU', 3688, 394, 1073, 859, 588, 51, 472, 251),
('SUCEAVA', 10389, 565, 2306, 2904, 1960, 169, 2162, 323),
('TELEORMAN', 9304, 434, 1103, 5118, 1151, 35, 1373, 90),
('TIMIS', 2449, 338, 139, 479, 589, 41, 501, 362),
('Total general', 250882, 24407, 46526, 77386, 45903, 3153, 39934, 13573),
('TULCEA', 2800, 0, 439, 1279, 602, 0, 422, 58),
('VALCEA', 4591, 125, 502, 1393, 1234, 139, 881, 317),
('VASLUI', 9600, 405, 1841, 3736, 752, 53, 2772, 41),
('VRANCEA', 4853, 311, 1279, 1817, 724, 63, 538, 121);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `martie2021`
--

CREATE TABLE `martie2021` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `martie2021`
--

INSERT INTO `martie2021` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 6332, 653, 1057, 1656, 1464, 91, 1036, 375),
('ARAD', 4486, 743, 531, 1065, 1055, 69, 594, 429),
('ARGES', 9875, 534, 1956, 2846, 2059, 126, 1817, 537),
('BACAU', 12516, 1133, 1716, 3386, 3159, 125, 2657, 340),
('BIHOR', 6280, 324, 1012, 1761, 1502, 98, 992, 591),
('BISTRITA', 4613, 172, 571, 1280, 1389, 82, 862, 257),
('BOTOSANI', 3888, 183, 1119, 972, 702, 70, 691, 151),
('BRAILA', 5265, 805, 1270, 1780, 571, 64, 599, 176),
('BRASOV', 6551, 1096, 1438, 1579, 1019, 89, 772, 558),
('BUZAU', 10295, 937, 2363, 3417, 1513, 117, 1757, 191),
('CALARASI', 3252, 390, 821, 1096, 394, 52, 406, 93),
('CARAS', 3760, 449, 525, 877, 1072, 104, 502, 231),
('CLUJ', 6129, 694, 812, 1374, 1383, 174, 1005, 687),
('CONSTANTA', 8170, 937, 1186, 1946, 2204, 103, 1155, 639),
('COVASNA', 4153, 521, 1486, 899, 716, 44, 372, 115),
('DAMBOVITA', 5956, 412, 1346, 1882, 1184, 77, 785, 270),
('DOLJ', 18384, 859, 6344, 4904, 3757, 265, 1928, 327),
('GALATI', 11622, 1267, 2451, 4411, 1411, 103, 1548, 431),
('GIURGIU', 2235, 238, 460, 792, 469, 20, 183, 73),
('GORJ', 5108, 0, 585, 1474, 1547, 103, 1055, 344),
('HARGHITA', 6023, 846, 2008, 1126, 1033, 84, 762, 164),
('HUNEDOARA', 5743, 226, 613, 1364, 1888, 135, 958, 559),
('IALOMITA', 4627, 342, 973, 1596, 824, 46, 759, 87),
('IASI', 9676, 599, 1813, 3076, 1000, 97, 2581, 510),
('ILFOV', 1439, 97, 347, 232, 361, 18, 185, 199),
('MARAMURES', 4100, 90, 529, 904, 1300, 121, 769, 387),
('MEHEDINTI', 6277, 102, 1328, 2308, 1495, 142, 808, 94),
('MUN. BUC.', 14974, 27, 163, 2517, 5258, 312, 2766, 3931),
('MURES', 6703, 850, 2231, 1499, 923, 75, 837, 288),
('NEAMT', 9119, 709, 1277, 2938, 1941, 120, 1777, 357),
('OLT', 9391, 848, 1034, 3377, 2201, 163, 1615, 153),
('PRAHOVA', 8442, 569, 1188, 2132, 2008, 190, 1715, 640),
('SALAJ', 5288, 419, 1600, 1413, 893, 70, 671, 222),
('SATU M.', 5042, 646, 2049, 1416, 426, 27, 368, 110),
('SIBIU', 4893, 450, 1263, 1119, 822, 85, 772, 382),
('SUCEAVA', 11353, 1073, 1799, 3305, 2329, 172, 2196, 479),
('TELEORMAN', 9496, 721, 1356, 4470, 1570, 99, 1164, 116),
('TIMIS', 4180, 498, 441, 754, 1216, 90, 596, 585),
('Total general', 290972, 22448, 56458, 83566, 61400, 4315, 45898, 16887),
('TULCEA', 2841, 0, 704, 848, 740, 0, 457, 92),
('VALCEA', 6049, 190, 567, 1689, 1843, 149, 1182, 429),
('VASLUI', 10431, 433, 2508, 4006, 1735, 71, 1559, 119),
('VRANCEA', 6015, 366, 1618, 2080, 1024, 73, 685, 169);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `noiembrie2019`
--

CREATE TABLE `noiembrie2019` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `noiembrie2019`
--

INSERT INTO `noiembrie2019` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 5194, 650, 761, 1456, 1126, 55, 841, 305),
('ARAD', 3211, 299, 670, 262, 1102, 39, 640, 199),
('ARGES', 7731, 648, 1788, 2355, 1379, 100, 1109, 352),
('BACAU', 10743, 1670, 1304, 832, 2710, 230, 3644, 353),
('BIHOR', 3652, 204, 600, 779, 1048, 82, 484, 455),
('BISTRITA', 3225, 186, 290, 802, 968, 72, 711, 196),
('BOTOSANI', 3521, 177, 949, 920, 689, 70, 572, 144),
('BRAILA', 4286, 703, 1079, 1487, 390, 48, 437, 142),
('BRASOV', 5540, 1050, 1239, 1292, 973, 55, 603, 328),
('BUZAU', 11343, 2212, 2328, 3626, 1433, 71, 1556, 117),
('CALARASI', 3246, 359, 832, 440, 586, 25, 953, 51),
('CARAS', 3369, 545, 405, 370, 946, 56, 833, 214),
('CLUJ', 4616, 832, 655, 957, 932, 120, 666, 454),
('CONSTANTA', 7536, 972, 564, 1723, 2192, 106, 1520, 459),
('COVASNA', 2819, 429, 945, 570, 536, 29, 238, 72),
('DAMBOVITA', 6678, 879, 1054, 1670, 1401, 138, 1266, 270),
('DOLJ', 17816, 835, 5877, 4916, 3767, 123, 1936, 362),
('GALATI', 10836, 1027, 1997, 4190, 1665, 114, 1446, 397),
('GIURGIU', 1683, 219, 263, 574, 441, 15, 122, 49),
('GORJ', 4725, 292, 267, 865, 1296, 134, 1539, 332),
('HARGHITA', 5120, 1256, 1224, 931, 907, 81, 520, 201),
('HUNEDOARA', 5183, 380, 410, 1306, 1459, 118, 981, 529),
('IALOMITA', 4094, 320, 969, 1379, 685, 44, 632, 65),
('IASI', 8242, 564, 1539, 2605, 957, 81, 2159, 337),
('ILFOV', 817, 101, 221, 146, 207, 7, 65, 70),
('MARAMURES', 5611, 121, 1934, 837, 1527, 145, 673, 374),
('MEHEDINTI', 6917, 0, 1488, 3296, 1126, 63, 825, 119),
('MUN. BUC.', 15300, 25, 137, 2640, 5220, 287, 2718, 4273),
('MURES', 6356, 1080, 2254, 1384, 679, 65, 661, 233),
('NEAMT', 7282, 957, 1092, 2161, 1035, 114, 1668, 255),
('OLT', 8666, 1760, 741, 2746, 1821, 68, 1453, 77),
('PRAHOVA', 7185, 638, 1278, 1851, 1525, 111, 1351, 431),
('SALAJ', 4274, 295, 1077, 710, 1037, 57, 852, 246),
('SATU M.', 3478, 407, 1700, 859, 237, 14, 177, 84),
('SIBIU', 3422, 368, 995, 806, 573, 38, 415, 227),
('SUCEAVA', 11189, 455, 2220, 2135, 3056, 183, 2717, 423),
('TELEORMAN', 8988, 388, 1064, 4707, 1424, 44, 1318, 43),
('TIMIS', 2832, 304, 118, 378, 768, 72, 734, 458),
('Total general', 259388, 24480, 48500, 67211, 53585, 3559, 47766, 14287),
('TULCEA', 2815, 0, 458, 933, 465, 0, 915, 44),
('VALCEA', 4888, 137, 533, 857, 1401, 160, 1458, 342),
('VASLUI', 9868, 398, 1875, 3636, 937, 49, 2918, 55),
('VRANCEA', 5091, 338, 1306, 822, 959, 76, 1440, 150);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `noiembrie2020`
--

CREATE TABLE `noiembrie2020` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `noiembrie2020`
--

INSERT INTO `noiembrie2020` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 6429, 796, 735, 1585, 1693, 68, 1105, 447),
('ARAD', 4582, 340, 479, 786, 1764, 89, 631, 493),
('ARGES', 9719, 633, 1890, 2902, 2020, 137, 1569, 568),
('BACAU', 11165, 1560, 3190, 734, 1568, 1831, 1841, 441),
('BIHOR', 5833, 302, 1069, 1392, 1540, 107, 808, 615),
('BISTRITA', 4098, 133, 218, 1223, 1384, 94, 770, 276),
('BOTOSANI', 3898, 207, 1080, 901, 865, 69, 605, 171),
('BRAILA', 5061, 880, 1237, 1602, 569, 64, 538, 171),
('BRASOV', 7050, 1097, 1242, 1574, 1512, 112, 878, 635),
('BUZAU', 12378, 2357, 2180, 3771, 1856, 127, 1897, 190),
('CALARASI', 3809, 364, 951, 1107, 775, 34, 469, 109),
('CARAS', 3758, 585, 437, 469, 1165, 115, 745, 242),
('CLUJ', 6003, 492, 616, 1378, 1587, 169, 1031, 730),
('CONSTANTA', 8629, 785, 730, 1851, 3115, 124, 1275, 749),
('COVASNA', 4492, 610, 1282, 994, 865, 64, 539, 138),
('DAMBOVITA', 6236, 575, 700, 1929, 1518, 126, 1018, 370),
('DOLJ', 18343, 787, 6116, 4729, 3933, 365, 2081, 332),
('GALATI', 12092, 1148, 2135, 4387, 2019, 144, 1743, 516),
('GIURGIU', 2169, 271, 315, 701, 612, 23, 168, 79),
('GORJ', 5325, 279, 455, 1009, 1804, 208, 1179, 391),
('HARGHITA', 6504, 1291, 1172, 1264, 1401, 78, 980, 318),
('HUNEDOARA', 5925, 343, 295, 1340, 2055, 129, 1124, 639),
('IALOMITA', 4237, 245, 1009, 1283, 868, 62, 683, 87),
('IASI', 9132, 558, 1705, 2836, 1089, 90, 2309, 545),
('ILFOV', 1450, 105, 163, 239, 568, 18, 195, 162),
('MARAMURES', 4999, 61, 758, 757, 1940, 148, 870, 465),
('MEHEDINTI', 6238, 0, 1220, 2746, 1229, 98, 809, 136),
('MUN. BUC.', 15287, 23, 140, 2512, 5209, 306, 2775, 4322),
('MURES', 6102, 699, 1718, 1134, 1175, 91, 901, 384),
('NEAMT', 7722, 703, 1001, 2073, 1624, 100, 1867, 354),
('OLT', 9391, 1928, 2506, 303, 2201, 187, 2176, 90),
('PRAHOVA', 8670, 533, 1024, 2071, 2368, 252, 1717, 705),
('SALAJ', 5299, 345, 1170, 1390, 1402, 87, 653, 252),
('SATU M.', 5369, 637, 1560, 1292, 583, 34, 1102, 161),
('SIBIU', 5183, 395, 1364, 966, 1047, 95, 867, 449),
('SUCEAVA', 12130, 492, 1590, 3360, 3555, 218, 2357, 558),
('TELEORMAN', 8943, 408, 1029, 4704, 1244, 107, 1392, 59),
('TIMIS', 4129, 251, 120, 859, 1388, 98, 742, 671),
('Total general', 290676, 23928, 50490, 73286, 68057, 6601, 49507, 18807),
('TULCEA', 2632, 0, 435, 1102, 620, 0, 389, 86),
('VALCEA', 5818, 122, 641, 1087, 2024, 161, 1376, 407),
('VASLUI', 8830, 286, 1443, 3037, 1134, 89, 2714, 127),
('VRANCEA', 5617, 302, 1370, 1907, 1169, 83, 619, 167);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `octombrie2019`
--

CREATE TABLE `octombrie2019` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `octombrie2019`
--

INSERT INTO `octombrie2019` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 5064, 638, 725, 1467, 1050, 58, 834, 292),
('ARAD', 3193, 342, 543, 522, 1281, 26, 272, 207),
('ARGES', 7544, 648, 1738, 2293, 1340, 98, 1069, 358),
('BACAU', 10808, 1605, 1195, 3610, 2769, 92, 1218, 319),
('BIHOR', 3330, 181, 541, 610, 1036, 78, 450, 434),
('BISTRITA', 3337, 181, 286, 978, 1031, 59, 564, 238),
('BOTOSANI', 3633, 167, 953, 967, 713, 84, 592, 157),
('BRAILA', 4299, 702, 1063, 1497, 414, 50, 434, 139),
('BRASOV', 5631, 1080, 1272, 1300, 1004, 61, 591, 323),
('BUZAU', 11532, 2237, 2359, 3660, 1521, 72, 1532, 151),
('CALARASI', 3309, 366, 838, 1023, 638, 31, 359, 54),
('CARAS', 3389, 534, 398, 716, 1012, 64, 437, 228),
('CLUJ', 4599, 853, 491, 973, 991, 118, 723, 450),
('CONSTANTA', 6836, 919, 663, 1623, 2171, 112, 930, 418),
('COVASNA', 2829, 433, 966, 566, 523, 24, 239, 78),
('DAMBOVITA', 6676, 799, 930, 1967, 1600, 139, 924, 317),
('DOLJ', 17887, 837, 5826, 4897, 3866, 122, 1877, 462),
('GALATI', 10624, 985, 1962, 4063, 1733, 109, 1388, 384),
('GIURGIU', 1720, 226, 259, 571, 475, 9, 128, 52),
('GORJ', 4721, 265, 275, 1388, 1402, 144, 922, 325),
('HARGHITA', 5111, 1210, 1210, 911, 955, 78, 519, 228),
('HUNEDOARA', 5040, 380, 410, 1154, 1468, 118, 981, 529),
('IALOMITA', 4023, 269, 984, 1321, 709, 41, 628, 71),
('IASI', 8553, 599, 1563, 2703, 997, 84, 2256, 351),
('ILFOV', 850, 94, 231, 141, 241, 3, 68, 72),
('MARAMURES', 5528, 117, 1832, 851, 1522, 137, 652, 417),
('MEHEDINTI', 6786, 0, 1471, 3255, 1088, 60, 804, 108),
('MUN. BUC.', 15394, 25, 135, 2645, 5248, 283, 2773, 4285),
('MURES', 6248, 1103, 2143, 1394, 625, 74, 668, 241),
('NEAMT', 7367, 958, 1144, 2261, 1045, 94, 1610, 255),
('OLT', 8738, 1776, 726, 2784, 1853, 69, 1388, 142),
('PRAHOVA', 6914, 650, 1305, 1819, 1455, 108, 1130, 447),
('SALAJ', 4186, 272, 1063, 1021, 1102, 58, 459, 211),
('SATU M.', 3446, 388, 1648, 856, 255, 17, 193, 89),
('SIBIU', 3399, 358, 942, 802, 601, 41, 396, 259),
('SUCEAVA', 11193, 475, 2239, 2778, 3187, 191, 1968, 355),
('TELEORMAN', 9078, 378, 1052, 4825, 1443, 35, 1237, 108),
('TIMIS', 2925, 317, 140, 581, 952, 54, 434, 447),
('Total general', 258737, 24325, 47651, 74744, 55643, 3356, 38340, 14678),
('TULCEA', 2654, 0, 437, 1256, 554, 0, 347, 60),
('VALCEA', 5189, 196, 497, 1321, 1694, 144, 943, 394),
('VASLUI', 9913, 407, 1870, 3651, 987, 45, 2881, 72),
('VRANCEA', 5241, 355, 1326, 1723, 1092, 72, 522, 151);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `octombrie2020`
--

CREATE TABLE `octombrie2020` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `octombrie2020`
--

INSERT INTO `octombrie2020` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 6391, 704, 678, 1605, 1743, 67, 1131, 463),
('ARAD', 4675, 336, 328, 965, 1804, 98, 649, 495),
('ARGES', 9382, 597, 1675, 2733, 2071, 141, 1580, 585),
('BACAU', 11121, 1560, 3201, 734, 1546, 1806, 1849, 425),
('BIHOR', 5524, 272, 978, 1281, 1514, 104, 771, 604),
('BISTRITA', 4131, 144, 231, 1215, 1410, 104, 761, 266),
('BOTOSANI', 3917, 194, 1067, 898, 883, 82, 625, 168),
('BRAILA', 4906, 832, 1198, 1572, 557, 63, 515, 169),
('BRASOV', 6704, 1039, 1120, 1470, 1525, 105, 827, 618),
('BUZAU', 11824, 2264, 2143, 3644, 1799, 87, 1711, 176),
('CALARASI', 3730, 469, 805, 1091, 786, 36, 427, 116),
('CARAS', 3602, 539, 353, 403, 971, 303, 802, 231),
('CLUJ', 6308, 587, 617, 1367, 1678, 189, 1094, 776),
('CONSTANTA', 7870, 697, 659, 1755, 2915, 112, 1011, 721),
('COVASNA', 4373, 592, 1227, 935, 872, 65, 549, 133),
('DAMBOVITA', 6257, 581, 728, 1918, 1528, 129, 998, 375),
('DOLJ', 17456, 747, 5851, 4364, 3885, 377, 1903, 329),
('GALATI', 11677, 1105, 2010, 4252, 2029, 137, 1659, 485),
('GIURGIU', 2097, 265, 309, 683, 584, 20, 160, 76),
('GORJ', 5159, 260, 245, 821, 1666, 328, 1460, 379),
('HARGHITA', 6108, 1237, 1140, 1165, 1297, 78, 878, 313),
('HUNEDOARA', 5963, 343, 295, 1340, 2093, 129, 1124, 639),
('IALOMITA', 4073, 246, 1009, 1205, 856, 64, 615, 78),
('IASI', 9026, 544, 1679, 2778, 1076, 99, 2288, 562),
('ILFOV', 1423, 100, 162, 239, 570, 18, 194, 140),
('MARAMURES', 5042, 68, 757, 781, 1923, 141, 880, 492),
('MEHEDINTI', 6227, 0, 1211, 2727, 1232, 99, 820, 138),
('MUN. BUC.', 15317, 24, 136, 2513, 5226, 302, 2797, 4319),
('MURES', 5999, 665, 1626, 1079, 1213, 122, 899, 395),
('NEAMT', 7869, 859, 980, 2114, 1606, 108, 1884, 318),
('OLT', 9332, 1917, 700, 2764, 2251, 185, 1434, 81),
('PRAHOVA', 8935, 526, 1088, 2107, 2436, 275, 1773, 730),
('SALAJ', 5253, 361, 1140, 1321, 1429, 84, 655, 263),
('SATU M.', 5280, 627, 1993, 1475, 583, 31, 412, 159),
('SIBIU', 5207, 392, 1150, 1149, 1104, 104, 871, 437),
('SUCEAVA', 12034, 486, 2044, 2871, 3539, 218, 2298, 578),
('TELEORMAN', 8381, 357, 846, 4130, 1340, 119, 1520, 69),
('TIMIS', 4055, 206, 113, 494, 1419, 126, 1036, 661),
('Total general', 285731, 23456, 47170, 72906, 68051, 7115, 48275, 18758),
('TULCEA', 2597, 0, 426, 1026, 673, 0, 374, 98),
('VALCEA', 5909, 122, 465, 1016, 2026, 290, 1599, 391),
('VASLUI', 9011, 303, 1470, 3009, 1171, 92, 2837, 129),
('VRANCEA', 5586, 289, 1317, 1897, 1222, 78, 605, 178);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `septembrie2019`
--

CREATE TABLE `septembrie2019` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `septembrie2019`
--

INSERT INTO `septembrie2019` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 5673, 677, 848, 1605, 1255, 124, 889, 275),
('ARAD', 2937, 465, 882, 620, 651, 41, 97, 181),
('ARGES', 8391, 803, 2096, 2714, 1125, 93, 1215, 345),
('BACAU', 12574, 2300, 1167, 4122, 3184, 79, 1442, 280),
('BIHOR', 3227, 660, 487, 519, 661, 69, 432, 399),
('BISTRITA', 4060, 240, 356, 1337, 1010, 84, 814, 219),
('BOTOSANI', 4331, 170, 1249, 1273, 686, 85, 738, 130),
('BRAILA', 5359, 808, 1304, 1965, 494, 60, 577, 151),
('BRASOV', 5967, 1476, 1314, 1540, 694, 59, 602, 282),
('BUZAU', 12298, 2444, 2618, 4105, 1129, 67, 1814, 121),
('CALARASI', 3889, 476, 1004, 1277, 735, 38, 282, 77),
('CARAS', 3523, 574, 383, 800, 895, 77, 604, 190),
('CLUJ', 4751, 932, 627, 1088, 840, 101, 715, 448),
('CONSTANTA', 8122, 954, 1169, 2443, 1715, 91, 1283, 467),
('COVASNA', 3091, 550, 1212, 673, 310, 41, 233, 72),
('DAMBOVITA', 7161, 783, 1403, 2071, 1684, 65, 936, 219),
('DOLJ', 20178, 936, 6754, 5629, 3263, 114, 3081, 401),
('GALATI', 11718, 1548, 2327, 4897, 1415, 157, 1065, 309),
('GIURGIU', 1941, 261, 308, 645, 463, 30, 163, 71),
('GORJ', 5814, 464, 363, 1665, 1939, 167, 884, 332),
('HARGHITA', 5625, 1327, 1365, 1088, 878, 72, 679, 216),
('HUNEDOARA', 6340, 647, 475, 1778, 1651, 123, 1132, 534),
('IALOMITA', 5262, 452, 1173, 1822, 995, 49, 714, 57),
('IASI', 8860, 698, 1825, 3146, 643, 65, 2214, 269),
('ILFOV', 1065, 138, 322, 245, 190, 9, 77, 84),
('MARAMURES', 6336, 158, 2936, 1231, 965, 107, 621, 318),
('MEHEDINTI', 7821, 0, 1669, 3763, 1295, 57, 918, 119),
('MUN. BUC.', 15661, 36, 136, 2682, 5298, 295, 2794, 4420),
('MURES', 6857, 1227, 2500, 1603, 574, 76, 710, 167),
('NEAMT', 8428, 988, 1398, 2620, 1634, 106, 1453, 229),
('OLT', 9976, 2304, 872, 3358, 2526, 96, 782, 38),
('PRAHOVA', 7308, 558, 1785, 1732, 1363, 157, 1270, 443),
('SALAJ', 4755, 640, 1426, 1215, 879, 73, 359, 163),
('SATU M.', 3919, 488, 1780, 1034, 248, 11, 283, 75),
('SIBIU', 3695, 528, 1009, 862, 625, 47, 383, 241),
('SUCEAVA', 11941, 840, 2500, 3536, 1948, 228, 2492, 397),
('TELEORMAN', 11289, 528, 1393, 5841, 1972, 69, 1432, 54),
('TIMIS', 2781, 444, 259, 522, 569, 43, 534, 410),
('Total general', 288568, 30721, 57617, 88523, 53522, 3637, 40755, 13793),
('TULCEA', 3250, 0, 575, 1704, 680, 0, 263, 28),
('VALCEA', 5270, 243, 571, 1457, 1680, 178, 795, 346),
('VASLUI', 11584, 462, 2243, 4411, 1953, 66, 2365, 84),
('VRANCEA', 5540, 494, 1534, 1885, 808, 68, 619, 132);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `septembrie2020`
--

CREATE TABLE `septembrie2020` (
  `JUDET` varchar(13) NOT NULL,
  `Total_someri_din_care` int(11) NOT NULL,
  `fara_studii` int(11) NOT NULL,
  `invatamant_primar` int(11) NOT NULL,
  `invatamant_gimnazial` int(11) NOT NULL,
  `invatamant_liceal` int(11) NOT NULL,
  `invatamant_posticeal` int(11) NOT NULL,
  `invatamant_profesionalarte_si_meserii` int(11) NOT NULL,
  `invatamant_universitar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `septembrie2020`
--

INSERT INTO `septembrie2020` (`JUDET`, `Total_someri_din_care`, `fara_studii`, `invatamant_primar`, `invatamant_gimnazial`, `invatamant_liceal`, `invatamant_posticeal`, `invatamant_profesionalarte_si_meserii`, `invatamant_universitar`) VALUES
('ALBA', 6453, 695, 696, 1644, 1762, 66, 1155, 435),
('ARAD', 4772, 350, 523, 802, 1821, 106, 688, 482),
('ARGES', 10070, 654, 1885, 2924, 2212, 154, 1632, 609),
('BACAU', 10825, 1511, 3090, 760, 1536, 1792, 1761, 375),
('BIHOR', 5317, 242, 818, 1209, 1575, 104, 768, 601),
('BISTRITA', 4062, 95, 301, 1153, 1037, 406, 803, 267),
('BOTOSANI', 3933, 198, 1090, 823, 968, 71, 616, 167),
('BRAILA', 4874, 809, 1149, 1570, 576, 60, 547, 163),
('BRASOV', 6831, 1019, 1176, 1441, 1600, 104, 862, 629),
('BUZAU', 11953, 2259, 2224, 3632, 1848, 84, 1729, 177),
('CALARASI', 3714, 362, 973, 998, 758, 35, 429, 159),
('CARAS', 3771, 201, 719, 769, 1254, 111, 491, 226),
('CLUJ', 6595, 587, 617, 1468, 1792, 180, 1278, 673),
('CONSTANTA', 7017, 844, 742, 1289, 2664, 84, 727, 667),
('COVASNA', 4290, 551, 1163, 893, 914, 63, 557, 149),
('DAMBOVITA', 6083, 569, 615, 1914, 1531, 106, 983, 365),
('DOLJ', 17707, 758, 5832, 4515, 3975, 379, 1927, 321),
('GALATI', 12027, 1175, 2077, 4346, 2118, 152, 1692, 467),
('GIURGIU', 2153, 258, 304, 655, 674, 19, 166, 77),
('GORJ', 4979, 174, 476, 1005, 1626, 329, 992, 377),
('HARGHITA', 5517, 1019, 915, 1046, 1271, 89, 862, 315),
('HUNEDOARA', 6009, 205, 301, 1299, 2243, 126, 1194, 641),
('IALOMITA', 4294, 276, 1047, 1324, 881, 66, 619, 81),
('IASI', 9078, 535, 1636, 2784, 1131, 89, 2326, 577),
('ILFOV', 922, 79, 121, 122, 416, 8, 97, 79),
('MARAMURES', 5008, 74, 900, 686, 1956, 117, 831, 444),
('MEHEDINTI', 6329, 0, 1242, 2794, 1227, 90, 837, 139),
('MUN. BUC.', 15343, 24, 144, 2519, 5234, 298, 2802, 4322),
('MURES', 5910, 640, 1536, 1097, 1220, 120, 895, 402),
('NEAMT', 8370, 903, 1075, 2310, 1641, 124, 2004, 313),
('OLT', 9460, 1896, 714, 2812, 2310, 170, 1474, 84),
('PRAHOVA', 9071, 532, 1121, 2101, 2446, 290, 1816, 765),
('SALAJ', 5254, 111, 1235, 1113, 1443, 131, 981, 240),
('SATU M.', 5223, 286, 1966, 1310, 589, 57, 846, 169),
('SIBIU', 5360, 404, 1273, 1010, 1161, 101, 946, 465),
('SUCEAVA', 11600, 209, 1771, 2696, 3220, 477, 2661, 566),
('TELEORMAN', 7968, 334, 802, 4064, 1401, 95, 1209, 63),
('TIMIS', 4289, 206, 370, 637, 1539, 115, 756, 666),
('Total general', 285294, 21469, 48901, 72067, 68521, 7702, 48085, 18549),
('TULCEA', 2478, 0, 410, 860, 634, 0, 480, 94),
('VALCEA', 6292, 53, 796, 1174, 2268, 286, 1266, 449),
('VASLUI', 8671, 271, 1383, 3176, 1178, 86, 2459, 118),
('VRANCEA', 5422, 101, 1673, 1323, 871, 362, 921, 171);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `aprilie2019`
--
ALTER TABLE `aprilie2019`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `aprilie2020`
--
ALTER TABLE `aprilie2020`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `august2020`
--
ALTER TABLE `august2020`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `decembrie2019`
--
ALTER TABLE `decembrie2019`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `decembrie2020`
--
ALTER TABLE `decembrie2020`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `februarie2019`
--
ALTER TABLE `februarie2019`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `februarie2020`
--
ALTER TABLE `februarie2020`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `februarie2021`
--
ALTER TABLE `februarie2021`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `ianuarie2019`
--
ALTER TABLE `ianuarie2019`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `ianuarie2020`
--
ALTER TABLE `ianuarie2020`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `ianuarie2021`
--
ALTER TABLE `ianuarie2021`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `iulie2019`
--
ALTER TABLE `iulie2019`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `iulie2020`
--
ALTER TABLE `iulie2020`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `iunie2019`
--
ALTER TABLE `iunie2019`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `iunie2020`
--
ALTER TABLE `iunie2020`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `mai2019`
--
ALTER TABLE `mai2019`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `mai2020`
--
ALTER TABLE `mai2020`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `martie2019`
--
ALTER TABLE `martie2019`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `martie2020`
--
ALTER TABLE `martie2020`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `martie2021`
--
ALTER TABLE `martie2021`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `noiembrie2019`
--
ALTER TABLE `noiembrie2019`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `noiembrie2020`
--
ALTER TABLE `noiembrie2020`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `octombrie2019`
--
ALTER TABLE `octombrie2019`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `octombrie2020`
--
ALTER TABLE `octombrie2020`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `septembrie2019`
--
ALTER TABLE `septembrie2019`
  ADD PRIMARY KEY (`JUDET`);

--
-- Indexuri pentru tabele `septembrie2020`
--
ALTER TABLE `septembrie2020`
  ADD PRIMARY KEY (`JUDET`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
