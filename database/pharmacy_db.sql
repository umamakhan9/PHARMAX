-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 12:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Liver'),
(2, 'Heart'),
(3, 'Lungs'),
(4, 'Kidneys'),
(5, 'Brain'),
(6, 'Stomach'),
(7, 'Skin'),
(8, 'Muscles'),
(9, 'Bones'),
(10, 'Intestine'),
(11, 'null'),
(18, 'Neuropathic pain'),
(19, 'Depression, Anxiety'),
(20, 'Bacterial infections'),
(21, 'Bacterial infections');

-- --------------------------------------------------------

--
-- Table structure for table `formula`
--

CREATE TABLE `formula` (
  `id` int(11) NOT NULL,
  `formula` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formula`
--

INSERT INTO `formula` (`id`, `formula`) VALUES
(2, 'Paracetamol (C8H9NO2)'),
(3, 'Ibuprofen (C13H18O2)'),
(4, 'Aspirin (C9H8O4)'),
(5, 'Amoxicillin (C16H19N3O5S)'),
(6, 'Ciprofloxacin (C17H18FN3O3)'),
(7, 'Metformin (C4H11N5)'),
(8, 'Atorvastatin (C33H35FO5)'),
(9, 'Omeprazole (C17H19N3O3S)'),
(10, 'Losartan (C22H23ClN6O)'),
(11, 'Clopidogrel (C16H16ClNO2S)'),
(12, 'Simvastatin (C25H38O5)'),
(13, 'Levothyroxine (C15H11I4NO4)'),
(14, 'Hydrochlorothiazide (C7H8ClN3O4S2)'),
(15, 'Amlodipine (C20H25ClN2O5)'),
(16, 'Lisinopril (C21H31N3O5)'),
(17, 'Metoprolol (C15H25NO3)'),
(18, 'Gabapentin (C9H17NO2)'),
(19, 'Fluoxetine (C17H18F3NO)'),
(20, 'Metronidazole (C6H9N3O3)'),
(21, 'Doxycycline (C22H24N2O8)');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `med_name` varchar(600) DEFAULT NULL,
  `formula_id` int(11) DEFAULT NULL,
  `uses` varchar(1600) DEFAULT NULL,
  `price` varchar(230) DEFAULT NULL,
  `company` varchar(600) DEFAULT NULL,
  `side_effects` varchar(500) DEFAULT NULL,
  `image` varchar(1200) DEFAULT NULL,
  `category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `med_name`, `formula_id`, `uses`, `price`, `company`, `side_effects`, `image`, `category`) VALUES
(25, 'Panadol', 2, 'Pain relief, Fever', '30.00', 'GSK', 'Nausea, Rash', '../images/panadol.webp', 5),
(26, 'Calpol', 2, 'Pain relief, Fever', '28.00', 'GSK', 'Nausea, Rash', '../images/calpol.webp', 5),
(27, 'Tylenol', 2, 'Pain relief, Fever', '32.00', 'Johnson & Johnson', 'Nausea, Rash', '../images/tylenol.webp', 5),
(28, 'Dolo 650', 2, 'Pain relief, Fever', '35.00', 'Micro Labs', 'Nausea, Rash', '../images/p.webp', 5),
(29, 'Crocin', 2, 'Pain relief, Fever', '29.00', 'GSK', 'Nausea, Rash', '../images/crocin.webp', 5),
(30, 'Mapic', 2, 'Pain relief, Fever', '27.00', 'Mapic Pharmaceuticals', 'Nausea, Rash', '../images/mapic.jpg', 5),
(31, 'Brufen', 3, 'Pain relief, Inflammation', '50.00', 'Abbott', 'Stomach pain, Nausea', '../images/brufen.webp', 8),
(32, 'Nurofen', 3, 'Pain relief, Inflammation', '55.00', 'Reckitt Benckiser', 'Stomach pain, Nausea', '../images/n.webp', 8),
(33, 'Advil', 3, 'Pain relief, Inflammation', '48.00', 'Pfizer', 'Stomach pain, Nausea', '../images/advil.avif', 8),
(34, 'Motrin', 3, 'Pain relief, Inflammation', '52.00', 'Johnson & Johnson', 'Stomach pain, Nausea', '../images/motrin.jpg', 8),
(35, 'Ibuprofen', 3, 'Pain relief, Inflammation', '47.00', 'Polpharma', 'Stomach pain, Nausea', '../images/ibuprofenn.jpg', 8),
(37, 'Aspirin Cardio', 4, 'Blood thinner, Pain relief', '20.00', 'Bayer', 'Stomach irritation, Bleeding', '../images/aspirin.jpg', 2),
(38, 'Disprin', 4, 'Pain relief, Fever', '15.00', 'Reckitt Benckiser', 'Stomach irritation, Bleeding', '../images/disprin.jpg', 2),
(39, 'Aspro', 4, 'Pain relief, Fever', '18.00', 'Bayer', 'Stomach irritation, Bleeding', '../images/Aspro.jpeg', 2),
(40, 'Ecotrin', 4, 'Blood thinner, Pain relief', '22.00', 'GlaxoSmithKline', 'Stomach irritation, Bleeding', '../images/download.jpeg', 2),
(41, 'Cardiprin', 4, 'Blood thinner, Pain relief', '21.00', 'Pfizer', 'Stomach irritation, Bleeding', '../images/Cardiprin.jpeg', 2),
(42, 'Solprin', 4, 'Pain relief, Fever', '19.00', 'Bayer', 'Stomach irritation, Bleeding', '../images/solprin.jpg', 2),
(43, 'Amoxil', 5, 'Bacterial infections', '120.00', 'GlaxoSmithKline', 'Diarrhea, Allergic reaction', '../images/amoxil.webp', 4),
(44, 'Moxatag', 5, 'Bacterial infections', '135.00', 'Shionogi Pharma', 'Diarrhea, Allergic reaction', '../images/moxa.jpg', 4),
(45, 'Trimox', 5, 'Bacterial infections', '140.00', 'Bristol-Myers Squibb', 'Diarrhea, Allergic reaction', '../images/trimox.jpeg', 4),
(46, 'Augmentin', 5, 'Bacterial infections', '150.00', 'GSK', 'Diarrhea, Allergic reaction', '../images/augmentin.jpeg', 4),
(48, 'Clamoxyl', 5, 'Bacterial infections', '125.00', 'Sanofi-Aventis', 'Diarrhea, Allergic reaction', '../images/clamo.jpeg', 4),
(49, 'Cipro', 6, 'Bacterial infections', '200.00', 'Bayer', 'Nausea, Diarrhea', '../images/cipro.webp', 5),
(50, 'Ciplox', 6, 'Bacterial infections', '210.00', 'Cipla', 'Nausea, Diarrhea', '../images/ciplox.webp', 5),
(51, 'Ciproxin', 6, 'Bacterial infections', '205.00', 'Bayer', 'Nausea, Diarrhea', '../images/ciproxin.webp', 5),
(52, 'Ciprobay', 6, 'Bacterial infections', '215.00', 'Bayer', 'Nausea, Diarrhea', '../images/ciprobay.jpeg', 5),
(53, 'Cetraxal', 6, 'Ear infections', '220.00', 'Laboratorios SALVAT', 'Nausea, Diarrhea', '../images/cetraxal.jpg', 5),
(54, 'Cifran', 6, 'Bacterial infections', '195.00', 'Ranbaxy', 'Nausea, Diarrhea', '../images/cifran.jpg', 5),
(55, 'Glucophage', 7, 'Type 2 Diabetes', '80.00', 'Merck', 'Nausea, Diarrhea', '../images/gluco.webp', 6),
(56, 'Metforal', 7, 'Type 2 Diabetes', '85.00', 'Sanofi', 'Nausea, Diarrhea', '../images/metforal.jpeg', 5),
(57, 'Fortamet', 7, 'Type 2 Diabetes', '78.00', 'Shionogi', 'Nausea, Diarrhea', '../images/fort.jpg', 5),
(58, 'Glumetza', 7, 'Type 2 Diabetes', '90.00', 'Bausch Health', 'Nausea, Diarrhea', '../images/glu.jpeg', 5),
(59, 'Riomet', 7, 'Type 2 Diabetes', '88.00', 'Sun Pharma', 'Nausea, Diarrhea', '../images/riomet.jpeg', 5),
(60, 'Metgluc', 7, 'Type 2 Diabetes', '82.00', 'Bosch Pharmaceuticals', 'Nausea, Diarrhea', '../images/metgluc.jpeg', 5),
(61, 'Lipitor', 8, 'Cholesterol reduction', '500.00', 'Pfizer', 'Muscle pain, Liver damage', '../images/lipitor.jpeg', 8),
(62, 'Atorva', 8, 'Cholesterol reduction', '480.00', 'Abbott', 'Muscle pain, Liver damage', '../images/atorva.jpeg', 8),
(63, 'Atorlip', 8, 'Cholesterol reduction', '490.00', 'Macleods', 'Muscle pain, Liver damage', '../images/atorlip.jpeg', 8),
(65, 'Ator', 8, 'Cholesterol reduction', '495.00', 'Sun Pharma', 'Muscle pain, Liver damage', '../images/ator.jpeg', 8),
(66, 'Atorvast', 8, 'Cholesterol reduction', '505.00', 'Alkem Labs', 'Muscle pain, Liver damage', '../images/atorvastin.jpeg', 8),
(67, 'Prilosec', 9, 'Acid reflux, GERD', '150.00', 'AstraZeneca', 'Headache, Diarrhea', '../images/prilosec.jpeg', 10),
(68, 'Losec', 9, 'Acid reflux, GERD', '145.00', 'AstraZeneca', 'Headache, Diarrhea', '../images/losec.jpeg', 10),
(69, 'Omez', 9, 'Acid reflux, GERD', '140.00', 'Dr. Reddy\'s', 'Headache, Diarrhea', '../images/omez.jpeg', 10),
(70, 'Omeprazole', 9, 'Acid reflux, GERD', '155.00', 'Cipla', 'Headache, Diarrhea', '../images/omeza.jpeg', 10),
(71, 'Gastrozol', 9, 'Acid reflux, GERD', '160.00', 'GlaxoSmithKline', 'Headache, Diarrhea', '../images/gastrol.jpeg', 10),
(72, 'Zegerid', 9, 'Acid reflux, GERD', '165.00', 'Pfizer', 'Headache, Diarrhea', '../images/zegerid.jpeg', 10),
(73, 'Cozaar', 10, 'High blood pressure', '220.00', 'Merck', 'Dizziness, Fatigue', '../images/cozar.jpeg', 2),
(74, 'Losar', 10, 'High blood pressure', '230.00', 'Cipla', 'Dizziness, Fatigue', '../images/losar.jpeg', 2),
(75, 'Lortan', 10, 'High blood pressure', '225.00', 'Sun Pharma', 'Dizziness, Fatigue', '../images/lortan.jpeg', 2),
(76, 'Losa', 10, 'High blood pressure', '240.00', 'Novartis', 'Dizziness, Fatigue', '../images/losa.png', 2),
(77, 'Lozan', 10, 'High blood pressure', '235.00', 'Dr. Reddy\'s', 'Dizziness, Fatigue', '../images/lozan.jpeg', 2),
(78, 'Losartan', 10, 'High blood pressure', '250.00', 'Ranbaxy', 'Dizziness, Fatigue', '../images/losartan.jpeg', 2),
(79, 'Plavix', 11, 'Prevent blood clots', '300.00', 'Sanofi', 'Bleeding, Bruising', '../images/plavix.jpeg', 5),
(80, 'Clopilet', 11, 'Prevent blood clots', '280.00', 'Cipla', 'Bleeding, Bruising', '../images/clopi.jpeg', 5),
(81, 'Clopidogrel', 11, 'Prevent blood clots', '290.00', 'Mylan', 'Bleeding, Bruising', '../images/clopid.jpeg', 5),
(82, 'Clopivas', 11, 'Prevent blood clots', '295.00', 'Sun Pharma', 'Bleeding, Bruising', '../images/clopivas.jpeg', 5),
(83, 'Clopigen', 11, 'Prevent blood clots', '310.00', 'Dr. Reddy\'s', 'Bleeding, Bruising', '../images/clopigen.jpeg', 5),
(84, 'Clopi', 11, 'Prevent blood clots', '305.00', 'Ranbaxy', 'Bleeding, Bruising', '../images/clop.jpeg', 5),
(85, 'Zocor', 12, 'Cholesterol reduction', '600.00', 'Merck', 'Muscle pain, Liver damage', '../images/zocor.jpeg', 5),
(86, 'Simcor', 12, 'Cholesterol reduction', '620.00', 'Abbott', 'Muscle pain, Liver damage', '../images/simcor.jpeg', 5),
(87, 'Simvotin', 12, 'Cholesterol reduction', '610.00', 'Mylan', 'Muscle pain, Liver damage', '../images/', 5),
(88, 'Simvast', 12, 'Cholesterol reduction', '630.00', 'Pfizer', 'Muscle pain, Liver damage', '../images/simvastin.jpeg', 5),
(89, 'Simvax', 12, 'Cholesterol reduction', '625.00', 'Dr. Reddy\'s', 'Muscle pain, Liver damage', '../images/simvax.jpeg', 5),
(90, 'Simvat', 12, 'Cholesterol reduction', '615.00', 'Sun Pharma', 'Muscle pain, Liver damage', '../images/simvat.jpeg', 5),
(91, 'Synthroid', 13, 'Thyroid hormone replacement', '150.00', 'Abbott', 'Weight loss, Rapid heartbeat', '../images/synthroid.jpeg', 5),
(92, 'Eltroxin', 13, 'Thyroid hormone replacement', '160.00', 'GlaxoSmithKline', 'Weight loss, Rapid heartbeat', '../images/eltroxin.jpeg', 5),
(93, 'Thyrox', 13, 'Thyroid hormone replacement', '155.00', 'Mylan', 'Weight loss, Rapid heartbeat', '../images/thyroxin.jpeg', 5),
(94, 'Thyroxin', 13, 'Thyroid hormone replacement', '170.00', 'Cipla', 'Weight loss, Rapid heartbeat', '../images/thyrox.jpeg', 5),
(95, 'Levothroid', 13, 'Thyroid hormone replacement', '165.00', 'Sun Pharma', 'Weight loss, Rapid heartbeat', '../images/levoth.jpeg', 5),
(96, 'Euthyrox', 13, 'Thyroid hormone replacement', '175.00', 'Boehringer Ingelheim', 'Weight loss, Rapid heartbeat', '../images/euth.jpeg', 5),
(97, 'Hydrodiuril', 14, 'High blood pressure, Edema', '70.00', 'Sanofi', 'Dizziness, Dehydration', '../images/hydruli.jpeg', 5),
(98, 'Microzide', 14, 'High blood pressure, Edema', '75.00', 'Boehringer Ingelheim', 'Dizziness, Dehydration', '../images/microz.jpeg', 5),
(99, 'Esidrix', 14, 'High blood pressure, Edema', '65.00', 'Mylan', 'Dizziness, Dehydration', '../images/esid.jpeg', 5),
(100, 'Hydrochlorothiazide', 14, 'High blood pressure, Edema', '80.00', 'Cipla', 'Dizziness, Dehydration', '../images/hydroch.jpeg', 5),
(101, 'HCTZ', 14, 'High blood pressure, Edema', '72.00', 'GlaxoSmithKline', 'Dizziness, Dehydration', '../images/hctz.jpeg', 5),
(102, 'Hydrothiazide', 14, 'High blood pressure, Edema', '77.00', 'Sun Pharma', 'Dizziness, Dehydration', '../images/hydrochlo.jpeg', 5),
(103, 'Norvasc', 15, 'High blood pressure, Angina', '100.00', 'Pfizer', 'Swelling, Dizziness', '../images/norvasc.jpeg', 5),
(104, 'Amlodac', 15, 'High blood pressure, Angina', '105.00', 'Cipla', 'Swelling, Dizziness', '../images/amlodac.jpeg', 5),
(105, 'Amlosafe', 15, 'High blood pressure, Angina', '110.00', 'Ranbaxy', 'Swelling, Dizziness', '../images/amlosafe.jpeg', 5),
(106, 'Amlodipine', 15, 'High blood pressure, Angina', '95.00', 'Sun Pharma', 'Swelling, Dizziness', '../images/amlodi.jpg', 5),
(107, 'Amlonorm', 15, 'High blood pressure, Angina', '102.00', 'Dr. Reddy\'s', 'Swelling, Dizziness', '../images/amlon.jpeg', 5),
(108, 'Amlopine', 15, 'High blood pressure, Angina', '98.00', 'Mylan', 'Swelling, Dizziness', '../images/amlo.jpg', 5),
(109, 'Zestril', 16, 'High blood pressure, Heart failure', '70.00', 'Merck', 'Cough, Dizziness', '../images/ze.jpeg', 5),
(110, 'Prinivil', 16, 'High blood pressure, Heart failure', '75.00', 'Pfizer', 'Cough, Dizziness', '../images/pri.jpeg', 5),
(111, 'Lisinopril', 16, 'High blood pressure, Heart failure', '80.00', 'Sun Pharma', 'Cough, Dizziness', '../images/lisinopril.jpeg', 5),
(112, 'Lisinopril-HCTZ', 16, 'High blood pressure, Heart failure', '85.00', 'Cipla', 'Cough, Dizziness', '../images/lisi.webp', 5),
(113, 'Valsartan', 16, 'High blood pressure, Heart failure', '90.00', 'Ranbaxy', 'Cough, Dizziness', '../images/var.jpg', 5),
(114, 'Lisino', 16, 'High blood pressure, Heart failure', '77.00', 'Dr. Reddy\'s', 'Cough, Dizziness', '../images/lisino.jpeg', 5),
(115, 'Lopressor', 17, 'High blood pressure, Angina', '60.00', 'Novartis', 'Dizziness, Fatigue', '../images/lopo.jpeg', 5),
(116, 'Toprol XL', 17, 'High blood pressure, Angina', '65.00', 'Pfizer', 'Dizziness, Fatigue', '../images/tropol-.webp', 5),
(117, 'Metoprolol', 17, 'High blood pressure, Angina', '70.00', 'Sun Pharma', 'Dizziness, Fatigue', '../images/metro.jpeg', 5),
(118, 'Metoprolol Tartrate', 17, 'High blood pressure, Angina', '55.00', 'Cipla', 'Dizziness, Fatigue', '../images/metroprolo.webp', 5),
(119, 'Metol', 17, 'High blood pressure, Angina', '58.00', 'Ranbaxy', 'Dizziness, Fatigue', '../images/metol.webp', 5),
(120, 'Metopron', 17, 'High blood pressure, Angina', '62.00', 'Dr. Reddy\'s', 'Dizziness, Fatigue', '../images/metroprol.jpeg', 5),
(121, 'Neurontin', 18, 'Neuropathic pain, Seizures', '100.00', 'Pfizer', 'Dizziness, Fatigue', '../images/Neurontin.jpeg', 5),
(122, 'Gabapentin', 18, 'Neuropathic pain, Seizures', '105.00', 'Pfizer', 'Dizziness, Fatigue', '../images/Gabapentin.jpeg', 18),
(123, 'Gralise', 18, 'Neuropathic pain', '110.00', 'Depomed', 'Dizziness, Fatigue', '../images/Gralise.jpeg', 18),
(124, 'Horizant', 18, 'Neuropathic pain', '115.00', 'XenoPort', 'Dizziness, Fatigue', '../images/Horizant.jpeg', 18),
(126, 'Neurotin', 18, 'Neuropathic pain, Seizures', '125.00', 'Mylan', 'Dizziness, Fatigue', '../images/Neurotin.jpeg', 18),
(127, 'Prozac', 19, 'Depression, Anxiety', '150.00', 'Eli Lilly', 'Nausea, Insomnia', '../images/Prozac.jpeg', 19),
(128, 'Sarafem', 19, 'Depression, Anxiety', '155.00', 'Eli Lilly', 'Nausea, Insomnia', '../images/Sarafem.jpeg', 19),
(129, 'Fluoxetine', 19, 'Depression, Anxiety', '145.00', 'Teva', 'Nausea, Insomnia', '../images/Fluoxetine.jpeg', 19),
(130, 'Fluctin', 19, 'Depression, Anxiety', '160.00', 'GlaxoSmithKline', 'Nausea, Insomnia', '../images/Fluctin.jpeg', 19),
(131, 'Lovan', 19, 'Depression, Anxiety', '165.00', 'Solvay', 'Nausea, Insomnia', '../images/Lovan.jpeg', 19),
(132, 'Floxetin', 19, 'Depression, Anxiety', '170.00', 'Cipla', 'Nausea, Insomnia', '../images/Floxetin.jpeg', 19),
(133, 'Flagyl', 20, 'Bacterial infections', '70.00', 'Pfizer', 'Nausea, Metallic taste', '../images/Flagyl.jpeg', 20),
(134, 'Metrogel', 20, 'Bacterial infections', '75.00', 'Galderma', 'Nausea, Metallic taste', '../images/metrogel.webp', 20),
(135, 'Metronidazole', 20, 'Bacterial infections', '65.00', 'Sun Pharma', 'Nausea, Metallic taste', '../images/Metronidazole.png', 20),
(136, 'Rozex', 20, 'Bacterial infections', '80.00', 'Galderma', 'Nausea, Metallic taste', '../images/Rozex.jpeg', 20),
(137, 'Noritate', 20, 'Bacterial infections', '85.00', 'Stiefel', 'Nausea, Metallic taste', '../images/Noritate.jpeg', 20),
(138, 'Metrocream', 20, 'Bacterial infections', '90.00', 'Galderma', 'Nausea, Metallic taste', '../images/Metrocream.jpeg', 20),
(139, 'Vibramycin', 21, 'Bacterial infections', '110.00', 'Pfizer', 'Nausea, Sensitivity to sunlight', '../images/Vibramycin.jpeg', 21),
(140, 'Doxicip', 21, 'Bacterial infections', '115.00', 'Cipla', 'Nausea, Sensitivity to sunlight', '../images/Doxycin.jpeg', 21),
(141, 'Doxycycline', 21, 'Bacterial infections', '120.00', 'Mylan', 'Nausea, Sensitivity to sunlight', '../images/Doxycycline.png', 21),
(142, 'Doryx', 21, 'Bacterial infections', '125.00', 'Daiichi Sankyo', 'Nausea, Sensitivity to sunlight', '../images/Doryx.jpeg', 21),
(143, 'Monodox', 21, 'Bacterial infections', '130.00', 'Daiichi Sankyo', 'Nausea, Sensitivity to sunlight', '../images/Monodox.jpeg', 21),
(144, 'Adoxa', 21, 'Bacterial infections', '135.00', 'Solvay', 'Nausea, Sensitivity to sunlight', '../images/adoxa.webp', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formula`
--
ALTER TABLE `formula`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formula_id` (`formula_id`),
  ADD KEY `fk_category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `formula`
--
ALTER TABLE `formula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`formula_id`) REFERENCES `formula` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
