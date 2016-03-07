-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2016 at 06:29 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi-admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_code` int(11) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_code`, `category_description`, `created_at`, `updated_at`) VALUES
(22, 'Haaziq', '2016-02-28 09:27:06', '2016-02-28 09:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_code` int(10) UNSIGNED NOT NULL,
  `item_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_warrantyperiod` int(11) NOT NULL,
  `item_unitprice` int(11) NOT NULL,
  `item_category_code` int(10) NOT NULL,
  `item_pricingprofile_code` int(10) UNSIGNED NOT NULL,
  `item_supplier_code` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `mod_modulegroupcode` varchar(25) NOT NULL,
  `mod_modulegroupname` varchar(50) NOT NULL,
  `mod_modulecode` varchar(25) NOT NULL,
  `mod_modulename` varchar(50) NOT NULL,
  `mod_modulegrouporder` int(3) NOT NULL,
  `mod_moduleorder` int(3) NOT NULL,
  `mod_modulepagename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`mod_modulegroupcode`, `mod_modulegroupname`, `mod_modulecode`, `mod_modulename`, `mod_modulegrouporder`, `mod_moduleorder`, `mod_modulepagename`) VALUES
('INVT', 'Inventory', 'PURCHASES', 'Purchases', 2, 1, 'purchases.php'),
('INVT', 'Inventory', 'STOCKS', 'Stocks', 2, 2, 'stocks.php');

-- --------------------------------------------------------

--
-- Table structure for table `pricingprofile`
--

CREATE TABLE `pricingprofile` (
  `pricingprofile_code` int(10) UNSIGNED NOT NULL,
  `pricingprofile_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pricingprofile_bottom_price` int(11) NOT NULL,
  `pricingprofile_line_discount` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pricingprofile`
--

INSERT INTO `pricingprofile` (`pricingprofile_code`, `pricingprofile_name`, `pricingprofile_bottom_price`, `pricingprofile_line_discount`, `created_at`, `updated_at`) VALUES
(3, 'Profile 2', 10, 10, '2016-02-28 06:35:46', '2016-02-28 06:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_rolecode` varchar(50) NOT NULL,
  `role_rolename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_rolecode`, `role_rolename`) VALUES
('ADMIN', 'Administrator'),
('Dlip', 'Super Admin'),
('SUPERADMIN', 'Super Admin');

-- --------------------------------------------------------

--
-- Table structure for table `role_rights`
--

CREATE TABLE `role_rights` (
  `rr_rolecode` varchar(50) NOT NULL,
  `rr_modulecode` varchar(25) NOT NULL,
  `rr_create` enum('yes','no') NOT NULL DEFAULT 'no',
  `rr_edit` enum('yes','no') NOT NULL DEFAULT 'no',
  `rr_delete` enum('yes','no') NOT NULL DEFAULT 'no',
  `rr_view` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_rights`
--

INSERT INTO `role_rights` (`rr_rolecode`, `rr_modulecode`, `rr_create`, `rr_edit`, `rr_delete`, `rr_view`) VALUES
('ADMIN', 'PURCHASES', 'yes', 'yes', 'yes', 'yes'),
('ADMIN', 'STOCKS', 'no', 'no', 'no', 'yes'),
('SUPERADMIN', 'PURCHASES', 'yes', 'yes', 'yes', 'yes'),
('SUPERADMIN', 'STOCKS', 'yes', 'yes', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_code` int(10) UNSIGNED NOT NULL,
  `supplier_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_contact_no` int(11) NOT NULL,
  `supplier_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_NIC_BR` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_code`, `supplier_name`, `supplier_address`, `supplier_contact_no`, `supplier_email`, `supplier_NIC_BR`, `supplier_title`, `supplier_type`, `created_at`, `updated_at`) VALUES
(5, 'L-Vision 2', '111', 111, '11', '11', '11', '11', '2016-02-28 08:43:06', '2016-02-28 08:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE `system_users` (
  `u_userid` int(11) NOT NULL,
  `u_username` varchar(100) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_rolecode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`u_userid`, `u_username`, `u_password`, `u_rolecode`) VALUES
(1, 'hamza', '123', 'SUPERADMIN'),
(2, 'dilip', '123', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_code`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_code`),
  ADD UNIQUE KEY `item_category_code` (`item_category_code`),
  ADD KEY `item_item_pricingprofile_code_foreign` (`item_pricingprofile_code`),
  ADD KEY `item_item_supplier_code_foreign` (`item_supplier_code`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`mod_modulegroupcode`,`mod_modulecode`),
  ADD UNIQUE KEY `mod_modulecode` (`mod_modulecode`);

--
-- Indexes for table `pricingprofile`
--
ALTER TABLE `pricingprofile`
  ADD PRIMARY KEY (`pricingprofile_code`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_rolecode`);

--
-- Indexes for table `role_rights`
--
ALTER TABLE `role_rights`
  ADD PRIMARY KEY (`rr_rolecode`,`rr_modulecode`),
  ADD KEY `rr_modulecode` (`rr_modulecode`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_code`);

--
-- Indexes for table `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`u_userid`),
  ADD KEY `u_rolecode` (`u_rolecode`),
  ADD KEY `u_userid` (`u_userid`,`u_username`,`u_password`,`u_rolecode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_code` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pricingprofile`
--
ALTER TABLE `pricingprofile`
  MODIFY `pricingprofile_code` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_code` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `system_users`
--
ALTER TABLE `system_users`
  MODIFY `u_userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_item_pricingprofile_code_foreign` FOREIGN KEY (`item_pricingprofile_code`) REFERENCES `pricingprofile` (`pricingprofile_code`),
  ADD CONSTRAINT `item_item_supplier_code_foreign` FOREIGN KEY (`item_supplier_code`) REFERENCES `supplier` (`supplier_code`);

--
-- Constraints for table `role_rights`
--
ALTER TABLE `role_rights`
  ADD CONSTRAINT `role_rights_ibfk_1` FOREIGN KEY (`rr_rolecode`) REFERENCES `role` (`role_rolecode`) ON UPDATE CASCADE,
  ADD CONSTRAINT `role_rights_ibfk_2` FOREIGN KEY (`rr_modulecode`) REFERENCES `module` (`mod_modulecode`) ON UPDATE CASCADE;

--
-- Constraints for table `system_users`
--
ALTER TABLE `system_users`
  ADD CONSTRAINT `system_users_ibfk_1` FOREIGN KEY (`u_rolecode`) REFERENCES `role` (`role_rolecode`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
