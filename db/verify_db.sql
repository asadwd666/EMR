-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 09:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `verify_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `User_id` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User_id`, `UserName`, `Password`, `answer`) VALUES
(0, 'khan', 'abc@123', 'quraan'),
(20, 'asad', 'khanbhai143', 'quraan');

-- --------------------------------------------------------

--
-- Table structure for table `clinical_report`
--

CREATE TABLE `clinical_report` (
  `id` int(11) NOT NULL,
  `Document` varchar(200) NOT NULL,
  `Radiology_Images` varchar(200) NOT NULL,
  `Blood_Reports` varchar(200) NOT NULL,
  `Additional_Notes` varchar(200) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unverified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinical_report`
--

INSERT INTO `clinical_report` (`id`, `Document`, `Radiology_Images`, `Blood_Reports`, `Additional_Notes`, `patient_id`, `status`) VALUES
(7, 'final-new-cv.pdf', 'cv.jpg', 'final-new-cv.pdf', 'ghghgh', 34, 'unverified');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `userid`, `password`) VALUES
(24, 'asad', 'khanbhai143');

-- --------------------------------------------------------

--
-- Table structure for table `family_history`
--

CREATE TABLE `family_history` (
  `id` int(11) NOT NULL,
  `diseases` varchar(100) NOT NULL,
  `family_member` varchar(100) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `other_family_record` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unverified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_history`
--

INSERT INTO `family_history` (`id`, `diseases`, `family_member`, `patient_id`, `other_family_record`, `status`) VALUES
(6, 'Lung Disease', 'Father', 34, 'jhkjhjkh', 'unverified');

-- --------------------------------------------------------

--
-- Table structure for table `immunisation`
--

CREATE TABLE `immunisation` (
  `id` int(11) NOT NULL,
  `Manual_Type_Immunisation` varchar(150) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unverified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `immunisation`
--

INSERT INTO `immunisation` (`id`, `Manual_Type_Immunisation`, `patient_id`, `name`, `size`, `status`) VALUES
(6, 'dsjdsjkdjk', 34, 'cv.jpg', 67071, 'unverified');

-- --------------------------------------------------------

--
-- Table structure for table `medical_record`
--

CREATE TABLE `medical_record` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `diabetic` varchar(100) NOT NULL,
  `diabetic_diagnosis_date` date NOT NULL,
  `high_blood_presuure` varchar(100) NOT NULL,
  `HBP_diagnosis_date` date NOT NULL,
  `cancer` varchar(100) NOT NULL,
  `cancer_diagnosis_date` date NOT NULL,
  `cancer_type` varchar(100) NOT NULL,
  `treat_recieved_date` date NOT NULL,
  `heart_attack` varchar(30) NOT NULL,
  `heart_diagnosis_date` date NOT NULL,
  `HIV_hepatitis_etc` varchar(100) NOT NULL,
  `blood_transfusion` varchar(200) NOT NULL,
  `transfusion_date` date NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `mental_health_condition` varchar(20) NOT NULL,
  `specify_mental` varchar(200) NOT NULL,
  `stroke` varchar(100) NOT NULL,
  `stroke_diagnosis_date` date NOT NULL,
  `immune_disorder` varchar(100) NOT NULL,
  `immune_diagnosis_date` date NOT NULL,
  `lung_disease` varchar(100) NOT NULL,
  `specify_lung_disease` varchar(100) NOT NULL,
  `lung_disease_diagnosis` date NOT NULL,
  `ulcerative_crohn_etc` varchar(100) NOT NULL,
  `specify_ulcerative_etc` varchar(100) NOT NULL,
  `diagnosis_ulcerative_etc` date NOT NULL,
  `neurogical_disease` varchar(100) NOT NULL,
  `specify_neurogical_disease` varchar(100) NOT NULL,
  `neuragical_diagnosis` date NOT NULL,
  `BP_disorder` varchar(100) NOT NULL,
  `specify_bp_disorder` varchar(100) NOT NULL,
  `bp_diagnosis_date` date NOT NULL,
  `cardiac_pacemaker` varchar(100) NOT NULL,
  `date_of_pacemaker` date NOT NULL,
  `type_pacemaker` varchar(100) NOT NULL,
  `other_med_con` varchar(100) NOT NULL,
  `diagnosis_date_other` date NOT NULL,
  `additional_note` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'unverified',
  `New` text NOT NULL,
  `Edit` varchar(210) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `Allergy` varchar(100) NOT NULL,
  `Regular Medicine` varchar(100) NOT NULL,
  `Frequency` varchar(50) NOT NULL,
  `Dose` varchar(100) NOT NULL,
  `Starting_date` date NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unverified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`id`, `patient_id`, `Allergy`, `Regular Medicine`, `Frequency`, `Dose`, `Starting_date`, `status`) VALUES
(11, 34, 'hjhjhg', 'ghghgh', 'Once per day', 'jhghg', '2022-08-22', 'unverified');

-- --------------------------------------------------------

--
-- Table structure for table `miscellaneous`
--

CREATE TABLE `miscellaneous` (
  `id` int(11) NOT NULL,
  `Document` varchar(200) NOT NULL,
  `Additional_Notes` varchar(250) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unverified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resetpasswords`
--

CREATE TABLE `resetpasswords` (
  `id` int(11) NOT NULL,
  `code` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resetpasswords`
--

INSERT INTO `resetpasswords` (`id`, `code`, `email`, `date`) VALUES
(1, '161e869d8f36ca', 'laibakhanaak82@gmail.com', '2022-01-20 00:43:20'),
(2, '161e86a3a44230', 'laibakhanaak82@gmail.com', '2022-01-20 00:44:58'),
(3, '161e86a90c80f6', 'laibakhanaak82@gmail.com', '2022-01-20 00:46:24'),
(4, '161e86ab702668', 'laibakhanaak82@gmail.com', '2022-01-20 00:47:03'),
(5, '161e86b41a3927', 'laibakhanaak82@gmail.com', '2022-01-20 00:49:21'),
(6, '161e90e00ebb5f', 'laibakhanaak82@gmail.com', '2022-01-20 12:23:44'),
(7, '161e90e21933db', 'laibakhanaak82@gmail.com', '2022-01-20 12:24:17'),
(12, '161e99ba3e062e', 'laibakhanaak82@gmail.com', '2022-01-20 22:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `social_history`
--

CREATE TABLE `social_history` (
  `id` int(11) NOT NULL,
  `Smoking` varchar(30) NOT NULL,
  `How_Much_Smoke` varchar(150) NOT NULL,
  `How_often_Smoke` varchar(200) NOT NULL,
  `Drugs` varchar(30) NOT NULL,
  `How_Much_Drug` varchar(100) NOT NULL,
  `How_Often_Drug` varchar(100) NOT NULL,
  `Live_With` varchar(100) NOT NULL,
  `Functional_Status` varchar(100) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unverified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surgical_history`
--

CREATE TABLE `surgical_history` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `Gallbladder_surgery` varchar(30) NOT NULL,
  `Gallblader_srg_date` date NOT NULL,
  `Gallblader_srg_proc` varchar(200) NOT NULL,
  `Organ_transplant` varchar(30) NOT NULL,
  `Transplant_Type` varchar(200) NOT NULL,
  `Transplant_Date` date NOT NULL,
  `Transplant_location` varchar(100) NOT NULL,
  `Transplant_Doctor` varchar(20) NOT NULL,
  `Fractures_Operation` varchar(20) NOT NULL,
  `Fracture_Type` varchar(100) NOT NULL,
  `Fracture_OP_procedure` varchar(200) NOT NULL,
  `Hip-knee_replacement` varchar(200) NOT NULL,
  `Specify_Replacement` varchar(100) NOT NULL,
  `Rep_surg_Date` date NOT NULL,
  `location_rep_surg` varchar(200) NOT NULL,
  `Surgeon_name` varchar(50) NOT NULL,
  `Artificial_heart_valves` varchar(20) NOT NULL,
  `Specify_Valves` varchar(200) NOT NULL,
  `Artificial_heart_surg_Date` date NOT NULL,
  `Valve_Type` varchar(200) NOT NULL,
  `Other_surg_procedure` varchar(200) NOT NULL,
  `Date_Of_procedure` date NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unverified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_table`
--

CREATE TABLE `tmp_table` (
  `patient_id` varchar(100) NOT NULL,
  `tmp_value` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_table`
--

INSERT INTO `tmp_table` (`patient_id`, `tmp_value`, `status`, `id`) VALUES
('34', 'okey i m new data', 'ok', 1),
('34', 'okey i m new data', 'ok', 2),
('34', 'okey i m new data', 'patient', 3),
('34', 'okey i m new data', 'patient', 4),
('34', 'okey i m new data', 'patient', 5),
('34', 'okey i m new data', 'patient', 6),
('34', 'hgghgh', 'patient', 7),
('34', 'hgghgh', 'patient', 8),
('34', 'hgghgh', 'patient', 9),
('34', 'hgghgh', 'ok', 10),
('34', 'okey this is my record', 'patient', 11),
('34', 'cjhhdhchhd', 'patient', 12),
('34', 'sdjhshdjsdjh', 'ok', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified` varchar(100) DEFAULT NULL,
  `password` varchar(400) NOT NULL,
  `date` datetime NOT NULL,
  `code` varchar(10) NOT NULL,
  `tokenexpire` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified`, `password`, `date`, `code`, `tokenexpire`) VALUES
(34, 'Asadkhan', 'laibakhanaak82@gmail.com', 'laibakhanaak82@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', '2022-03-06 10:20:51', '', '2022-06-27 18:56:04'),
(67, 'asadkhan', 'asadalikhanaak82@gmail.com', 'asadalikhanaak82@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', '2022-07-01 20:22:02', '', '2022-07-01 19:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `expires` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`id`, `code`, `expires`, `email`) VALUES
(148, 37518, 1656702564, 'asadalikhanaak82@gmail.com'),
(149, 43261, 1656703558, 'asadalikhanaak82@gmail.com'),
(150, 27179, 1656703980, 'asadalikhanaak82@gmail.com'),
(151, 84168, 1656704015, 'asadalikhanaak82@gmail.com'),
(152, 78919, 1656704041, 'asadalikhanaak82@gmail.com'),
(153, 90403, 1656704069, 'asadalikhanaak82@gmail.com'),
(154, 63819, 1656704127, 'asadalikhanaak82@gmail.com'),
(155, 45049, 1656704177, 'asadalikhanaak82@gmail.com'),
(156, 15355, 1656704201, 'asadalikhanaak82@gmail.com'),
(157, 23005, 1656704215, 'asadalikhanaak82@gmail.com'),
(158, 56614, 1656704259, 'asadalikhanaak82@gmail.com'),
(159, 23065, 1656704319, 'asadalikhanaak82@gmail.com'),
(160, 99763, 1656704339, 'asadalikhanaak82@gmail.com'),
(161, 71597, 1656704358, 'asadalikhanaak82@gmail.com'),
(162, 48825, 1656704427, 'asadalikhanaak82@gmail.com'),
(163, 33488, 1656704448, 'asadalikhanaak82@gmail.com'),
(164, 27932, 1656704487, 'asadalikhanaak82@gmail.com'),
(165, 73385, 1656704499, 'asadalikhanaak82@gmail.com'),
(166, 37001, 1656704529, 'asadalikhanaak82@gmail.com'),
(167, 85992, 1656704550, 'asadalikhanaak82@gmail.com'),
(168, 63956, 1656704567, 'asadalikhanaak82@gmail.com'),
(169, 90645, 1656704591, 'asadalikhanaak82@gmail.com'),
(170, 56414, 1656704616, 'asadalikhanaak82@gmail.com'),
(171, 47617, 1656704680, 'asadalikhanaak82@gmail.com'),
(172, 94179, 1656704721, 'asadalikhanaak82@gmail.com'),
(173, 15619, 1656704742, 'asadalikhanaak82@gmail.com'),
(174, 96745, 1656704847, 'asadalikhanaak82@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinical_report`
--
ALTER TABLE `clinical_report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_history`
--
ALTER TABLE `family_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `immunisation`
--
ALTER TABLE `immunisation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `edit` (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `miscellaneous`
--
ALTER TABLE `miscellaneous`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `resetpasswords`
--
ALTER TABLE `resetpasswords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_history`
--
ALTER TABLE `social_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `surgical_history`
--
ALTER TABLE `surgical_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `tmp_table`
--
ALTER TABLE `tmp_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clinical_report`
--
ALTER TABLE `clinical_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `family_history`
--
ALTER TABLE `family_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `immunisation`
--
ALTER TABLE `immunisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medical_record`
--
ALTER TABLE `medical_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `miscellaneous`
--
ALTER TABLE `miscellaneous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resetpasswords`
--
ALTER TABLE `resetpasswords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `social_history`
--
ALTER TABLE `social_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surgical_history`
--
ALTER TABLE `surgical_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tmp_table`
--
ALTER TABLE `tmp_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `verify`
--
ALTER TABLE `verify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clinical_report`
--
ALTER TABLE `clinical_report`
  ADD CONSTRAINT `clinical_report_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `family_history`
--
ALTER TABLE `family_history`
  ADD CONSTRAINT `family_history_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `immunisation`
--
ALTER TABLE `immunisation`
  ADD CONSTRAINT `immunisation_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD CONSTRAINT `medical_record_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `medication`
--
ALTER TABLE `medication`
  ADD CONSTRAINT `medication_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `miscellaneous`
--
ALTER TABLE `miscellaneous`
  ADD CONSTRAINT `miscellaneous_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `social_history`
--
ALTER TABLE `social_history`
  ADD CONSTRAINT `social_history_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `surgical_history`
--
ALTER TABLE `surgical_history`
  ADD CONSTRAINT `surgical_history_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
