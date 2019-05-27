-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 04 Ιουν 2015 στις 20:56:06
-- Έκδοση διακομιστή: 5.6.17
-- Έκδοση PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8;

--
-- Βάση δεδομένων: `project_web`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `password` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `admin` (`username`, `password`) VALUES
('pen', 12345);
-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook_id` varchar(20) NOT NULL,
  `description` longtext NOT NULL,
  `name` varchar(100) NOT NULL,
  `place_id` varchar(20) NOT NULL,
  `urlCover` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date` timestamp NOT NULL,
  `updated_time` timestamp NOT NULL,
  `place_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Άδειασμα δεδομένων του πίνακα `events`
--

INSERT INTO `events` (`id`, `facebook_id`, `description`, `name`, `place_id`, `urlCover`, `category`, `date`, `updated_time`, `place_name`) VALUES
(1, '1234567890', 'αδσφξ δασλφκξ καφες αδσφκλ΄ασδφβ΄λ<ζδξφ αδσλφκξ ', 'κλαδφκα΄λξ καφές', '0987654321', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(2, '1234567890', 'αδσφξ δασλφκξ καφες αδσφκλ΄ασδφβ΄λ<ζδξφ αδσλφκξ ', 'κλαδφκα΄λξ', '0987654321', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(3, '1234567890', 'αδσφξ δασλφκξ καφες αδσφκλ΄ασδφβ΄λ<ζδξφ αδσλφκξ ', 'κλαδφκα΄λξ', '0987654321', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(4, '1234567890', 'αδσφξ δασλφκξ καφες αδσφκλ΄ασδφβ΄λ<ζδξφ αδσλφκξ ', 'κλαδφκα΄λξ', '0987654321', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(5, '1234567890', 'αδσφξ δασλφκξ καφες αδσφκλ΄ασδφβ΄λ<ζδξφ αδσλφκξ ', 'κλαδφκα΄λξ', '0987654321', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `fb_id` varchar(20) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `img_url` varchar(250) NOT NULL,
  `street` varchar(200) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=948 ;

--
-- Άδειασμα δεδομένων του πίνακα `resources`
--

INSERT INTO `resources` (`id`, `name`, `url`, `fb_id`, `active`, `img_url`, `street`, `latitude`, `longitude`) VALUES
(712, 'Patras, Greece', '', '106070886100190', 1, '', '', 38.2444, 21.7344),
(713, 'Patra , Ahaia', '', '118891328238633', 1, '', '', 38.248008029811, 21.736148202834),
(714, 'Patrasso', '', '466955260027136', 1, '', '', 38.254792280987, 21.737260519879),
(715, 'Plateia Gewrgiou @ Patras', '', '201164299943829', 1, '', 'Αγιου Γεωργιου', 38.246526667172, 21.734774489537),
(716, 'Loft', '', '232953356761127', 1, '', 'gerokostopolou 19', 38.246927797133, 21.734372166471),
(717, 'PATRAS SPORTSCENTER', '', '217557848274540', 1, '', 'ΚΟΡΙΝΘΟΥ 227', 38.24725, 21.73458),
(718, 'Youth Today Patras', '', '348400441996217', 1, '', '', 38.2462923975, 21.7337727245),
(719, 'Patras Clue', '', '791945034224595', 1, '', '', 38.241072969475, 21.733350235696),
(720, 'iRepair Patras store', '', '281250505341182', 1, '', 'Maizonos 121', 38.246664079202, 21.735146133894),
(721, 'Distinto  Mall', '', '196646983787025', 1, '', 'Ερμού 40', 38.247111303535, 21.734835957813),
(722, 'Big Ben', '', '192089157495764', 1, '', 'Αγίου Νικολάου 16-28', 38.248269273262, 21.735740049073),
(723, 'P.I.C.K. Patras - Πλ. Γεωργιου', '', '268409396526613', 1, '', 'Πλατεία Γεωργίου, Πάτρα', 38.246424338542, 21.734965700496),
(724, 'Xantres Patras', '', '278744538853196', 1, '', 'Αγιου Νικολάου', 38.246495140077, 21.739168402681),
(725, 'Playhouse', '', '171992002849787', 1, '', 'R. Ferraiou 127', 38.245991192588, 21.733210446838),
(726, 'Friends Cafe Patras', '', '144840375659108', 1, '', 'Ρηγα Φεραιου - Βοτση', 38.245884679973, 21.732556209678),
(727, 'ΙΝΤΕΑΛ', '', '184480428263269', 1, '', 'Agiou Nikolaou 4', 38.248702825969, 21.735091435584),
(728, 'Mikel Patra', '', '525669367540560', 1, '', 'Agiou Andreou 89-91', 38.248023544007, 21.734002874454),
(729, 'Hondos Center Patras', '', '280146505391721', 1, '', '', 38.2470169914, 21.734695304766),
(730, 'much more Patras', '', '1620811728148055', 1, '', 'GEROKOSTOPOULOU 19', 38.246927797133, 21.734372166471),
(731, 'Malo', '', '233162266760324', 1, '', 'katw meros gerokostopoulou kai riga feraiou', 38.246891908768, 21.73439153628),
(732, 'ΚΤΕΛ ΠΑΤΡΑΣ', '', '176026655783899', 1, '', 'zaimi 2', 38.251141473985, 21.736682325256),
(733, 'Patras Tango Academia', '', '336534833143252', 1, '', '20, Pantanassis str.', 38.246041393088, 21.732882056819),
(734, 'Menodiciotto Patras', '', '533336013475605', 1, '', 'Γεροκωστοπούλου 20 και Ρήγα Φεραίου', 38.247050371308, 21.734228338623),
(735, 'Auto Parking Patras', '', '199232963520061', 1, '', 'Γεροκωστοπουλου 12-16', 38.247220983239, 21.734063001562),
(736, 'Eataly', '', '259142644208076', 1, '', 'Ρηγα Φεραιου και Ερμου (γωνια)', 38.247621524041, 21.734755209179),
(737, 'Selfiesh Patras Carnival 2015', '', '1120186891325563', 1, '', '"Εμπορικό Κέντρο ΚΟΛΛΑ" (Πλησίον Distinto Mall)', 38.24725, 21.73458),
(738, 'Απλα Ελληνικά Patras', '', '1516097645299966', 1, '', 'Othonos Amalias 78', 38.246731118697, 21.731421546129),
(739, 'Patrasso (Grecia)', '', '448261348557559', 1, '', '', 38.250530722983, 21.736532867672),
(740, 'Ontas patra', '', '277769089020936', 1, '', 'μητροπολιτου παρθενιου 31', 38.246073677041, 21.739333671129),
(741, 'Rion, Patras', '', '405303052821436', 1, '', '', 38.247174, 21.734887),
(742, 'Colazione', '', '376702499077283', 1, '', 'Agiou Andreou', 38.249237948825, 21.735284229626),
(743, 'Cibo Cibo', '', '489258077765707', 1, '', 'Αγίου Νικολάου 2', 38.248658964277, 21.73529361349),
(744, 'DC - Dream City Club Patras', '', '459428680764636', 1, '', '9 Ermou street', 38.248083655957, 21.734410611148),
(745, 'Carierra', '', '254115074656721', 1, '', '', 38.2447368333, 21.7340243),
(746, 'Astir Hotel-Pool Bar', '', '318750038209365', 1, '', 'Agiou Andreou 16,', 38.250437599811, 21.736739577978),
(747, 'Port Of Patras', '', '219562344746601', 1, '', 'Patra', 38.249539994003, 21.734351756468),
(748, 'Porto Internazionale di Patras (Patrasso)', '', '209086015804071', 1, '', '', 38.2470616632, 21.7327146573),
(749, 'patra,kendro', '', '547395705351877', 1, '', '', 38.24497724, 21.73849204),
(750, 'Patra Palace', '', '137803159623489', 1, '', 'Όθωνος & Αμαλίας 15', 38.2516005859, 21.736786592695),
(751, 'Cinema Cafe', '', '128777057210504', 1, '', 'Γεροκωστοπούλου 54', 38.244443974809, 21.737259053411),
(752, 'Majestic', '', '362419963842223', 1, '', 'RIGA FERAIOU 95-97', 38.247188962897, 21.734387202787),
(753, 'Legea Patras Greece', '', '1592067947732180', 1, '', 'Κορίνθου 264-266', 38.2444, 21.7344),
(754, 'Everest', '', '167507979980474', 1, '', 'Αγίου Νικολάου 16', 38.248247880012, 21.735606866938),
(755, 'Run Greece Patras', '', '866617363349250', 1, '', '', 38.2464215, 21.7350513),
(756, 'Byzantino Hotel Patras - Ξενοδοχείο Βυζαντινό Πάτρα', '', '170169813015944', 1, '', 'Ρήγα Φεραίου 106', 38.246812116884, 21.733720338896),
(757, 'Patras Roman Odeon - Romaikó Odeío tis Pátras', '', '616399565075848', 1, '', 'Palaion Patron Germanou, Patra 26225, Greece ', 38.24324, 21.73733),
(758, 'Cocos club patras', '', '202373669786302', 1, '', '78,Oth.Amalias', 38.246731722078, 21.731449534495),
(759, 'Kipos Patra', '', '304070093006996', 1, '', 'Germanou 10', 38.242907959297, 21.737297231297),
(760, 'AREA 51 Patras', '', '588413834556164', 1, '', '', 38.2444, 21.7344),
(761, 'Dust + Cream - Patras', '', '1525589724336028', 1, '', 'Agiou Nikolaou 41', 38.24763565744, 21.736601990847),
(762, 'Patras Molos', '', '219534744818600', 1, '', '', 38.250772605561, 21.73243423469),
(763, 'Decco Club', '', '108282092593109', 1, '', 'Ρήγα Φεραίου 150', 38.24846285, 21.735462095),
(764, 'Mr. Burger', '', '209613959050144', 1, '', 'Patra', 38.249469911137, 21.736228462648),
(765, 'Molos Bar Cafe Patra', '', '363380287075012', 1, '', 'Αγιου Νικολαου', 38.250675991223, 21.732413984038),
(766, 'Sephora Patra', '', '266728513433554', 1, '', '', 38.24744765, 21.7355605),
(767, 'Swag & Yankees - Patras Carnival 2015', '', '867156009972653', 1, '', '40, Agiou Andreou st', 38.24561478024, 21.73080379964),
(768, 'Patras Events', '', '284673061673142', 1, '', 'ΑΛΕΞΑΝΔΡΟΥ ΥΨΗΛΑΝΤΟΥ 101', 38.246577999127, 21.739530497065),
(769, 'Patra City', '', '157426797678275', 1, '', '', 38.247610349624, 21.738895492986),
(770, 'Patra My Home', '', '262868707216305', 1, '', '', 38.245007697942, 21.735381983757),
(771, 'Patra Limani', '', '252205138140767', 1, '', 'Αράτου', 38.249421322622, 21.734878884565),
(772, 'Rhga Ferraiou Patra', '', '504734786295738', 1, '', '', 38.249865, 21.7386284),
(773, 'Ermou Patra', '', '124130954438121', 1, '', '', 38.247601788958, 21.735014991413),
(774, 'Faros Patra', '', '498457950218918', 1, '', '', 38.244863996993, 21.725959781846),
(775, 'Bibliotheca sala di studio patras', '', '312459762194133', 1, '', 'Ag.andreou 67 & ag.nikolaou 2 Α`οροφος', 38.24888, 21.73499),
(776, 'PatrasTravel', '', '282285468481610', 1, '', 'Ζαϊμη 2,Όθωνος Αμαλίας', 38.25446, 21.73707),
(777, 'Ofthalmos', '', '196135607124747', 1, '', 'Riga Fereou 99', 38.247129525697, 21.734384066608),
(778, 'Hotel Mediterranee Patras', '', '113041728778104', 1, '', 'Αγίου Νικολάου 18', 38.248180289384, 21.735744939037),
(779, 'Man&Manetti Patras', '', '815301671824769', 1, '', 'Ρήγα Φεραίου 57 & Ραδινού', 38.24725, 21.73458),
(780, 'Yum', '', '240480579373824', 1, '', 'Leoforos Gounari Dimitriou 34', 38.243688379846, 21.733066136617),
(781, 'Disco Room', '', '173653529352472', 1, '', 'Agiou Andreou 88 & Patreos', 38.247154076787, 21.732873731721),
(782, 'Sto Kentro Tis Patras', '', '129010180591008', 1, '', '', 38.2481765007, 21.7342617046),
(783, 'σινιαλο', '', '230825553764789', 1, '', 'Καραϊσκάκη 68-70', 38.246935193242, 21.738820513464),
(784, 'Greco Caffe', '', '121191741310337', 1, '', 'Agiou Andreou 67 & Agiou Nikolaou 2', 38.24888, 21.73499),
(785, 'Όταν Πηγαίναμε Μαζί Σχολείο Patras Carnival 2015', '', '1021566044525738', 1, '', 'Kolokotroni 23', 38.248213799068, 21.737886176467),
(786, 'Mikel Coffee Company Patras', '', '1469725573253972', 1, '', 'Mezonos', 38.248144845599, 21.733949468932),
(787, 'Golden Dragon', '', '864882400217434', 1, '', 'Ypsilantou Alexandrou 162, (Summer: Eleutherias 10 Rion)', 38.244315083174, 21.736841043478),
(788, 'Giapi', '', '162930847163969', 1, '', 'rhga feraiou 34', 38.247594635851, 21.734235070263),
(789, 'Kastro', '', '154640964657548', 1, '', '', 38.244522950104, 21.741264894213),
(790, 'Interamerican Patras', '', '209836522521739', 1, '', '', 38.242792530122, 21.734457986285),
(791, 'ZHIVO DANCE Team Patras', '', '865442880135343', 1, '', 'Agiou Andreou 69', 38.248718312206, 21.73489336218),
(792, 'PICK PATRAS', '', '225695184137545', 1, '', 'Kanakari 184 & Gounari 26221 Pátrai, Greece', 38.246305324155, 21.735801729384),
(793, 'Tag', '', '199391093414939', 1, '', 'Agiou Andreou 127', 38.246548383635, 21.732283143353),
(794, 'Τριών Ναυάρχων, Patras, Greece', '', '154953761202267', 1, '', 'Τριών Ναυάρχων και ρηγα φεραιου', 38.242549803764, 21.73037209306),
(795, 'Pitta Tou Pappou', '', '193372810787565', 1, '', '', 38.248700278181, 21.734656328817),
(796, 'Glukanisos', '', '106397866152223', 1, '', 'Mitropolitou Partheniou', 38.246003754561, 21.739288448882),
(797, 'Patra Ktel', '', '245660092283123', 1, '', '', 38.248841318478, 21.73775841934),
(798, 'Patra Police Station', '', '403202573066516', 1, '', '', 38.245642335557, 21.737510993389),
(799, 'bershka Patra', '', '261484540589384', 1, '', '', 38.248754657479, 21.735217217671),
(800, 'En Patrais', '', '393457604002684', 1, '', 'ifaistou 3', 38.245485418345, 21.738907546819),
(801, 'Zara', '', '252476158096197', 1, '', '', 38.247883156524, 21.73620865771),
(802, 'Agiou Nikolaou, Patra', '', '136127196443666', 1, '', 'Αγίου Νικολάου, Πάτρα', 38.248488471572, 21.735472572722),
(803, 'Stema Patras', '', '1540005432901650', 1, '', 'Μαιζωνος 103', 38.25446, 21.73707),
(804, 'Crėpe In Love Cafė Patra', '', '252716274753865', 1, '', '', 38.248488963276, 21.735591178285),
(805, 'Νέα Πόλη', '', '1400627340193029', 1, '', 'Καρόλου 95, 26221', 38.24725, 21.73458),
(806, 'Kentro Patras', '', '420780674664895', 1, '', '', 38.243716351163, 21.731840987488),
(807, 'Kryolan City Patras', '', '193135584222494', 1, '', 'ΡΗΓΑ ΦΕΡΑΙΟΥ & ΓΕΡΟΚΩΣΤΟΠΟΥΛΟΥ 16', 38.247124974615, 21.734396699411),
(808, 'Adidas store patras', '', '861134340566539', 1, '', 'Ag.Nikolaou 27', 38.248075932908, 21.736062440813),
(809, 'Patra  Psilalonia', '', '266862316765460', 1, '', '', 38.241261314567, 21.73455316131),
(810, 'Brio Πάτρα', '', '585266458183163', 1, '', 'filopoimenos 43', 38.244402834948, 21.733486281233),
(811, 'Hotel Acropole, Patra', '', '492341317527274', 1, '', 'Patra, Agiou Andreou 36', 38.249396599, 21.735000832),
(812, 'Mexx Family Store Patras', '', '541990805886878', 1, '', 'Ερμού 59', 38.24725, 21.73458),
(813, 'Patras Maizonos Str', '', '279926585413725', 1, '', '', 38.2485949, 21.7375321167),
(814, 'Eye Center Patras', '', '289695721139760', 1, '', 'Γεροκωστοπούλου 17', 38.247074977309, 21.734205186944),
(815, 'Patras City Gerokostopoulou', '', '110171295747999', 1, '', '', 38.242202744, 21.737335551),
(816, 'My Home(Patra)', '', '222735497739342', 1, '', '', 38.253546225243, 21.738697645366),
(817, 'Public Patras', '', '273318216104855', 1, '', 'Ερμού 55', 38.25446, 21.73707),
(818, 'Metropolis Live -Πάτρα', '', '118100741632846', 1, '', 'Τσαμαδού 19 (Tsamadou 19)', 38.244455169305, 21.73003716872),
(819, 'Refan Patras', '', '121559824673370', 1, '', '', 38.247852016541, 21.735196373376),
(820, 'Karnavali Patras', '', '164304677057933', 1, '', '', 38.248399494882, 21.735615779221),
(821, 'Patras Association for Mental Health SOPSI', '', '1424309871168699', 1, '', 'Sisini 6', 38.24308751877, 21.73672529836),
(822, 'Optical Area', '', '132460646915482', 1, '', '', 38.247375261022, 21.733507514028),
(823, 'Tiger Patras', '', '1405756313044794', 1, '', '', 38.2485602, 21.7353843),
(824, 'El Greco Hotel Patra -Fun Page-', '', '146779085442099', 1, '', 'Agiou Andreou 145 ', 38.245810356625, 21.731262041369),
(825, 'Ideal Agiou Nikolaou Patra', '', '313903878674351', 1, '', '', 38.248643210672, 21.735269608478),
(826, 'Saint Andrew of Patras', '', '134195519961070', 1, '', '', 38.2425, 21.728055555556),
(827, 'Galaxy Hotel', '', '124704604272348', 1, '', '9. Agiou Nikolaou', 38.248613313624, 21.735526762969),
(828, 'Walk Patras (shoes)', '', '209638505746884', 1, '', 'Riga Feraiou 96', 38.247355077373, 21.734373814064),
(829, 'Arena Live Club Patras', '', '685578908157964', 1, '', 'Othonos amalias k Karolou 1', 38.25238902637, 21.736771596774),
(830, 'Asteria Live', '', '203856983052464', 1, '', 'Όθωνος Αμαλίας ', 38.244231165747, 21.727482656167),
(831, 'Patras Castle', '', '136025246429291', 1, '', '', 38.2530268784, 21.7390295949),
(832, 'Mikel Patras - Αγ.ανδρέου', '', '416460105123206', 1, '', 'Αγίου Ανδρέου 89-91 & Ερμού', 38.25446, 21.73707),
(833, 'Cluedome Patra', '', '1548835455362382', 1, '', 'Maizonos 197', 38.243194859743, 21.730686178176),
(834, 'Face Patras', '', '646444612129651', 1, '', 'Korinthou 216', 38.247464292825, 21.737179160297),
(835, 'Top-Lines Patra', '', '530621607003195', 1, '', 'Leoforos Othonos-amalias', 38.253569824928, 21.737017374553),
(836, 'Home, Patra, Greece', '', '147707095315424', 1, '', '', 38.252404813435, 21.739381354536),
(837, 'Collective', '', '187595468013135', 1, '', 'Ερμού 49', 38.247577064527, 21.739303024904),
(838, 'Dirty Dancing', '', '441996722531153', 1, '', 'AGIOU NIKOLAOU 77', 38.246619508802, 21.738104994144),
(839, 'ΠατραΪκό Γυμναστήριο - Patraiko Gymnastirio', '', '501282319978946', 1, '', 'Αλεξάνδρου Υψηλάντου 268', 38.240905663202, 21.731683855784),
(840, 'Superior Patras', '', '1477352799160238', 1, '', '65 Ag. Nikolaou Str.', 38.246833929175, 21.737621332232),
(841, 'VICKO PATRAS', '', '242797669072265', 1, '', 'GOUNARI 33', 38.244489929918, 21.732663058804),
(842, 'Sousouro', '', '342428339138952', 1, '', '3ων Ναυαρχων 45', 38.242118809884, 21.731155704159),
(843, 'Ikea Patras', '', '110606315694220', 1, '', '', 38.248451545, 21.7369830177),
(844, 'Spiti Mas Patra', '', '291052621009337', 1, '', '', 38.2524310085, 21.7377071264),
(845, 'Clash Of Clanival Patras Carnival 2015', '', '718085771639565', 1, '', 'Αγιου Ανδρεου 44 Ερμου', 38.246183005867, 21.735603111364),
(846, 'Φάτνη', '', '373173822829894', 1, '', '', 38.247198513147, 21.735355116524),
(847, 'Da Vinci Patras', '', '792885547434573', 1, '', 'Γούναρη 11', 38.25446, 21.73707),
(848, 'Λαδαδικα Live', '', '199622750172857', 1, '', 'tsamadou & mpoumpoulinas', 38.244963305968, 21.729266472477),
(849, 'BulStar Patra', '', '475885415843398', 1, '', 'Dim.Votsi 2', 38.246665790865, 21.731322191971),
(850, 'Patras photography', '', '696829273688779', 1, '', ' Georgioy square', 38.25446, 21.73707),
(851, 'Havana Club Patra', '', '785953381459044', 1, '', '', 38.245627017175, 21.732590161264),
(852, 'PATRASNEWS.GR', '', '166184646794907', 1, '', 'evmilou 30', 38.241324453691, 21.727354710637),
(853, 'Netpark', '', '194441690599997', 1, '', 'gerokostopoulou 36', 38.241061593, 21.7353254549),
(854, 'Hotel Marie Palace', '', '220697027978514', 1, '', 'ΓΟΥΝΑΡΗ 6', 38.245798527084, 21.730604427735),
(855, 'Ακαμάτρα', '', '323554397797488', 1, '', 'Αράτου 37', 38.24854556518, 21.739292349243),
(856, 'ΣΟΨΥ Πάτρας', '', '825601037491307', 1, '', 'Σισίνη 6', 38.24469, 21.74045),
(857, 'SANDY KOSTA Patras', '', '342407492625519', 1, '', 'Riga Feraiou 61', 38.248685220769, 21.736326203804),
(858, 'Patras Motor Show', '', '165686570279968', 1, '', 'Molos Ag. Nikolaou', 38.250751977472, 21.733102798462),
(859, 'COFFEETIME ESPRESSO BAR  PATRAS', '', '188948661159065', 1, '', '65 Pantanassis, 262 21 Patra, Greece', 38.244240672165, 21.734981485917),
(860, 'CrocoDiLinO Patra', '', '348874995149584', 1, '', 'ΚΑΝΑΚΑΡΗ  84-86', 38.247175063068, 21.738086401298),
(861, 'Hadra Home Patras', '', '830867353622283', 1, '', 'Patreos 16', 38.24648330408, 21.732976848416),
(862, 'SOCRATES ΠΑΤΡΑ ΦΟΙΤΗΤΙΚΟ ΦΡΟΝΤΙΣΤΗΡΙΟ', '', '297175996213', 1, '', 'Pantanassis 51-53 & Korinthou', 38.24499, 21.73413),
(863, 'Signore', '', '179476322102713', 1, '', 'Αγίου ανδρεου 67', 38.248776008116, 21.73479611499),
(864, 'Dromeas Office Furniture-Patra', '', '364176687035691', 1, '', 'D.Gounari 21-23', 38.244686489751, 21.732125486755),
(865, 'ATLAS SPORT Patras', '', '558333090905830', 1, '', 'Korinthou 186', 38.248572542503, 21.738607308744),
(866, 'Discotheque Jacky .O. Πατρεως 69', '', '153906291394802', 1, '', '', 38.244821051884, 21.735418658726),
(867, 'Egkwmio Kafe Patras', '', '108234812601498', 1, '', '', 38.244659128973, 21.732813991256),
(868, 'Patras Copy Center', '', '187076544678266', 1, '', 'KORINTHOY 130', 38.250844940839, 21.741546195361),
(869, 'Ntivani Patra', '', '196367747140341', 1, '', '', 38.24403107724, 21.73372429036),
(870, 'Super Fast Patra Bari', '', '174979489227696', 1, '', '', 38.2530767355, 21.7350713636),
(871, 'Goethe Zentrum......', '', '300869893328871', 1, '', 'Tsamadou 29 & Riga Fereou 167', 38.2464869106, 21.7344424244),
(872, 'Alma Zois Patras', '', '228667217325633', 1, '', 'Γούναρη 37 Πάτρα', 38.25446, 21.73707),
(873, 'Optical Point Patras', '', '1410683829176838', 1, '', 'ΚΟΡΙΝΘΟΥ 133 & ΚΑΡΟΛΟΥ', 38.251414101276, 21.742342215661),
(874, 'Patra Tattoo Lounge', '', '151918481671255', 1, '', 'aaaaa', 38.25446, 21.73707),
(875, 'Caravel Πλατεία Γεωργίου', '', '365454253579122', 1, '', 'Πλατεία Βασιλέως Γεωργίου Πρώτου', 38.25446, 21.73707),
(876, 'Ixthioskala Patra', '', '331900923512054', 1, '', 'LEOFOROS OTHONOS-AMALIAS', 38.244487064068, 21.726247948596),
(877, 'Greko Patra', '', '480431375352847', 1, '', '', 38.2488745032, 21.7350100167),
(878, 'Bb King', '', '281162338564722', 1, '', 'Plateia Psila Alonia 16', 38.24057780929, 21.735378070232),
(879, 'Neon', '', '212698905412011', 1, '', '', 38.242893235895, 21.729498779013),
(880, 'Edoardo International Hair Studio', '', '314408085291579', 1, '', 'Paparrigopoulou 5 - 7', 38.248860445367, 21.736065408304),
(881, 'College RNBA Group 126_Patras Carnival 2014', '', '238347893013874', 1, '', 'ag.adreou & ermou', 38.24825, 21.73417),
(882, 'Prime Timers Patra', '', '488253764588357', 1, '', 'Maizonos 57', 38.249106021494, 21.738302069539),
(883, 'Oikima F.P.K Protoporia Patras', '', '146256652160247', 1, '', '98, Norman street', 38.252654025234, 21.742570063758),
(884, 'Μικρός Πρίγκηπας', '', '303493903096706', 1, '', '', 38.244972647849, 21.731441786187),
(885, 'Sony Corner Patras', '', '189574627866109', 1, '', 'KORINTHOU 204', 38.247885248069, 21.737722671847),
(886, 'ΕΟΣ Πάτρας - EOS Patras', '', '1522659917981237', 1, '', 'Pantanasis 29', 38.245574207388, 21.733517722024),
(887, 'Iqshop', '', '649642311767125', 1, '', 'Gounari 26', 38.244583318507, 21.73203962511),
(888, 'The Dance Club Patras', '', '159935887483704', 1, '', 'Ερμού 2', 38.24725, 21.73458),
(889, 'Today Store Patras', '', '532963520071118', 1, '', 'Athanasiou Diakou 27', 38.242155809301, 21.735229953701),
(890, 'Gay Bar Patra', '', '491359514234649', 1, '', 'Psila Alonia', 38.25446, 21.73707),
(891, 'VILLA MERCEDES PATRAS', '', '207513315927662', 1, '', 'Othonos Amalias & Karolou 1', 38.25225428357, 21.736860949347),
(892, 'panathinaikos official store patras', '', '153996027993896', 1, '', 'filopoimenos 43', 38.245378920746, 21.733540129876),
(893, 'Agrotech Patras', '', '1496097664000561', 1, '', 'Νοταρά 36', 38.25446, 21.73707),
(894, 'Vanilla Girl', '', '1504132769822327', 1, '', 'Αγίου Νικολάου 53', 38.247045774179, 21.737361158752),
(895, 'Pet Sitting Patras', '', '823393837675833', 1, '', '', 38.2444, 21.7344),
(896, 'PPF - Peridis Patras Farmacy', '', '645815595495295', 1, '', 'St Andrew 79BB', 38.25446, 21.73707),
(897, 'Alegre growshop Patra', '', '152281804880966', 1, '', 'ΑΛ. ΥΨΗΛΑΝΤΟΥ 84', 38.246523367799, 21.739539112473),
(898, 'Enter Radio Patras', '', '758637644198941', 1, '', '', 38.242586, 21.7379666),
(899, 'Kourtis Allergy Patras', '', '270396233141204', 1, '', 'Agiou Nikolaou 53', 38.247178595734, 21.737171155733),
(900, 'Blue Monday Rockers Club', '', '136133143205022', 1, '', 'Kolokotroni 24', 38.248845471159, 21.737309229036),
(901, 'Sxedio-Patra', '', '179567718766979', 1, '', 'karatza 5', 38.241376562785, 21.736527106517),
(902, 'Celestino Patra', '', '615699915162201', 1, '', 'Αγιου Νικολαου 18 ❤️❤️❤️❤️', 38.25446, 21.73707),
(903, 'Οικονομικές Ασφα-λύσεις', '', '157801574321170', 1, '', 'Ερμού, 91', 38.245697485482, 21.737360085253),
(904, 'Super Duper Bar', '', '800519713377476', 1, '', '', 38.245674449424, 21.735537256622),
(905, 'Consulatul Onorific al Romaniei in Patra-Προξενείο της Ρουμανίας στην Πάτρα', '', '306095589592657', 1, '', 'Filopoimenos nr.39 ', 38.24457758168, 21.733282077117),
(906, 'Rio Grappling Club Patras - Grapple Hood Coaching Team', '', '573627819384864', 1, '', 'near 9 28is Oktovriou, 262 23 Patra, Greece', 38.252243, 21.7380238),
(907, 'SHOP SHOP Patras', '', '1424392654451012', 1, '', '49 Filopoimenos st.', 38.243920424355, 21.734066324274),
(908, 'Parts -Patras Arts', '', '544586128912022', 1, '', 'ΣΑΤΩΒΡΙΑΝΔΟΥ 31', 38.25446, 21.73707),
(909, 'Princess Nails Sotiria - Patra', '', '497120510318516', 1, '', 'Riga Feraiou 156', 38.245154036268, 21.731586938559),
(910, 'Van taxi patras', '', '458740987559668', 1, '', '', 38.2444, 21.7344),
(911, 'GANGstars Patras Carnival 2014 - Group 5', '', '784794564869895', 1, '', '', 38.249606147115, 21.739318185789),
(912, 'Αερο-Συνοδεύομαι Σου Λέω Patras Carnival 2013', '', '586166104731886', 1, '', '', 38.2444, 21.7344),
(913, 'Proodeftiki Patras', '', '608732495819728', 1, '', '', 38.248670273333, 21.73993546),
(914, 'Nikos Apostolopoulos Boutique Patras', '', '154842801246839', 1, '', 'Riga Feraiou 67', 38.248414316407, 21.735635255665),
(915, 'Μαργαρωνης-Φιλιππακης ΟΕ Hyundai Kia Patras', '', '477895802261528', 1, '', '95 ethniki odos Korinthou-Patron', 38.243886353814, 21.732837929106),
(916, 'CLEAN CAR Patras Αποστολοπουλος Ιωαννης', '', '512201532226789', 1, '', 'ΣΑΧΤΟΥΡΗ 31', 38.243004691729, 21.730944209911),
(917, 'Cafe Passage', '', '318714678177033', 1, '', 'Kanakari,99', 38.246921836821, 21.738541969681),
(918, 'Tanguera Tango Argentino Patras', '', '400982420025219', 1, '', 'Γερμανού & Βότσαρη 59', 38.25446, 21.73707),
(919, 'Mari Travel', '', '264011833634028', 1, '', 'Agiou Andreou 55-57', 38.249320033451, 21.735650311222),
(920, 'CEID Courses', '', '610654305627125', 1, '', 'Karaiskaki Georgiou 102-104, 1ος όροφος', 38.245820289207, 21.737555130908),
(921, 'Rapsody Sound Patras (Giannakopoylos Nikos)', '', '199375626755166', 1, '', 'Tsamadou Street 63-65', 38.242835240829, 21.732025620101),
(922, 'Cafe Bordeaux, Patras', '', '265325576896019', 1, '', 'μαιζωνος 7-9', 38.251268788707, 21.740906043303),
(923, 'Passepartout Coffee/Beer/Wine/Grill', '', '197668947073599', 1, '', 'Gerokostopoulou 56 & Ifaistou', 38.24434, 21.73742),
(924, 'Φροντιστήριο Άτομο', '', '350357421768831', 1, '', 'Gerokostopoulou ', 38.244845, 21.73682),
(925, 'Coffeebrands Academy', '', '1600825830157939', 1, '', 'Korinthou 371', 38.2420425, 21.7305565),
(926, 'Panos Loizos Patras Store', '', '120220321436990', 1, '', '55, Riga Ferraiou str.', 38.248902857454, 21.73662491485),
(927, 'Τοκογλύψτε μας το χρέος     Patras Carnival 2013', '', '212394068904706', 1, '', 'Aratou 9', 38.250098898749, 21.737290486192),
(928, 'Caligula Music Bar - Patras, Greece', '', '167437393331428', 1, '', 'Germanou 2', 38.243405285863, 21.736888397553),
(929, 'College RNBA  Group 126_Patras Carnival 2014', '', '274851086003946', 1, '', 'Ag.Andreou & Ermou', 38.24825, 21.73417),
(930, 'ASTO PATRAS * ΑΣΤΟ ΕΠΙΚΟΙΝΩΝΟΥΜΕ', '', '211087209071122', 1, '', 'Valtetsiou 3', 38.25102993865, 21.741016570474),
(931, 'NERAIDORAMA PATRAS', '', '218563181515389', 1, '', 'ΠΑΤΡΑ', 38.25446, 21.73707),
(932, 'Kerino Plus Patras', '', '1491705597765431', 1, '', 'Parodos iwanni diakidi 166', 38.25446, 21.73707),
(933, 'Lego Group 122  Patras Carnival 2015', '', '435434396605052', 1, '', 'Canto Caffe Ρήγα Φεραίου & Παντανάσσης', 38.24606, 21.73284),
(934, 'Barco Paralia Riou', '', '866606000060779', 1, '', '', 38.2444, 21.7344),
(935, 'Superlap Patras Greece', '', '719420968165863', 1, '', 'Gounari & Gretza Palaiologou 1A Street', 38.25446, 21.73707),
(936, 'Μαντείο - Πρακτορείο ΟΠΑΠ', '', '189905044495521', 1, '', 'Κορίνθου 389 & Γενναδίου', 38.24141, 21.72954),
(937, 'TAXI Services PATRA', '', '240608889481114', 1, '', 'PATRA GREECE', 38.25446, 21.73707),
(938, 'Peugeot Patra Club', '', '197713406925520', 1, '', 'πατρα', 38.25446, 21.73707),
(939, 'Wing Chun Kung Fu Society Greece (Agrinio & Patra)', '', '428523217186253', 1, '', 'Σαρανταπορου κ Μπιζανιου', 38.25446, 21.73707),
(940, 'Μuay Thai Patras Εugenios-Maximos', '', '606381706063345', 1, '', '', 38.25446, 21.73707),
(941, 'Dandára Cordão de Ouro', '', '120972973588', 1, '', 'Norman, 5', 38.253531499652, 21.739223105969),
(942, 'Family Γούναρη 58 Πάτρα', '', '192819374069295', 1, '', 'Γούναρη 58', 38.24049, 21.72939),
(943, 'Nails Creations Patra', '', '1421202351436309', 1, '', '', 38.240711666667, 21.740195),
(944, 'Gate 13 Patras Club', '', '512845838809423', 1, '', 'patraclub13@yahoo.gr', 38.25446, 21.73707),
(945, 'Κατερίνα accessories', '', '240519146119436', 1, '', 'Έλληνος Στρατιώτου 47', 38.25446, 21.73707),
(946, 'Ανδρίκου ζαχαροπλαστείο', '', '845872272124106', 1, '', 'Γερμανού 152', 38.240759796614, 21.742950882339),
(947, 'Lalaloopsy World  Patras Carnival 2015', '', '734304693246595', 1, '', '', 38.25446, 21.73707);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;