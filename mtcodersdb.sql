-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 01:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtcodersdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `about_id` int(11) NOT NULL,
  `about_text` text NOT NULL,
  `vision_text` text NOT NULL,
  `value_text` text NOT NULL,
  `mission_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`about_id`, `about_text`, `vision_text`, `value_text`, `mission_text`) VALUES
(1, 'MT Coders is a full service digital design develoment and marketing agency specializing in search engine optimization, website develoment, website design, social media and web-hosting. Our focus is enables your target customers to connect with your brand.conceptual design to product release, the highest level of maintained Professionalism. We have specific experience with Development And Marketing, Design and Construction industries, Fashion and Retail, Healthcare and Business start-ups. Our extensive communication facilities allow us to keep in touch with our customers 24 hours a day.', 'To remain the largest content provider in Pakistan and to become the largest mobile value added service and solution provider throughout.', 'Our Values are our employees at first and operations at second because our employees make our operations valuable and smooth which leads to the satisfaction of our Clients because Our Clients are Our first priority.', 'Continue to provide innovative technology and content based solutions in global IT industry, Telecom sector and beyond.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `contact_form_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` text NOT NULL,
  `current_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`contact_form_id`, `name`, `email`, `phone`, `message`, `current_date`) VALUES
(1, 'dsafasd', 'sdfsd', 451313, 'dfasdf', '2021-04-26'),
(2, 'sdfasd', 'dsfasd', 62, 'sdfasdf', '2021-04-26'),
(3, 'Zara', 'zara@gmail.com', 4153135, 'dsfasdf', '2021-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `footer_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `fb_link` varchar(255) NOT NULL,
  `wp_link` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `phone2` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`footer_id`, `text`, `fb_link`, `wp_link`, `email`, `phone`, `phone2`, `address`) VALUES
(1, '34234sdd', 'sdfsdaf', 'dsfsdaf', 'info@gmail.com', 5112, 53151531, 'sdafasdf');

-- --------------------------------------------------------

--
-- Table structure for table `homepages`
--

CREATE TABLE `homepages` (
  `homepage_id` int(11) NOT NULL,
  `banner_heading` varchar(255) NOT NULL,
  `banner_tagline` varchar(255) NOT NULL,
  `banner_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepages`
--

INSERT INTO `homepages` (`homepage_id`, `banner_heading`, `banner_tagline`, `banner_text`) VALUES
(3, 'Welcome To Mt Coders', 'We Create Brands', 'CONTENT AGGREGATION, CONTENT DEVELOPMENT, DIGITAL MARKETING, MOBILITY & VAS SERVICES, DESIGN SERVICES, TECHNOLOGY SERVICES');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `portfolio_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`portfolio_id`, `category_id`, `image`, `description`) VALUES
(2, 4, 'asdfsdaf', 'Design On Tech 1'),
(3, 4, 'Design On Tech 2', ''),
(4, 4, 'Images/Portfolios/zAzhHqelTMly8242IXsLobTD9YUMFpRqN6NSm0wu.jpg', 'dfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE `portfolio_categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`category_id`, `name`) VALUES
(4, 'Websites'),
(5, 'Mobile Apps'),
(6, 'SEO');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_text` text NOT NULL,
  `icon_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_text`, `icon_class`) VALUES
(1, 'Website Development', 'We deliver cutting edge websites that are beautiful to look at and perform equally well. To target all your potential clients it’s important to have a website that is optimizes for all devices. Google Loves Responsive websites, keeping this in mind we create cutting edge sites that fits all machines by adjusting resolution, images size and scripting.', 'bi bi-globe text-light'),
(3, 'Mobile App Development', 'We made highly polished iPhone & Android apps for startups and enterprise clients. We also know a thing or two about branding, websites, and user purchase. At Webtrica, we don’t just build apps. We create the kind of apps that people talk about, that they use over and over again. We eat, sleep, and breathe mobile apps. It’s who we are. You will surely find creative and different work for sure.', 'fa fa-mobile text-light mt-3'),
(4, 'Graphic Designing', 'Meet with clients or the art director to determine the scope of a project. Use digital illustration, photo editing software, and layout software to create designs. Create visual elements such as logos, original images, and illustrations to help deliver a message.', 'bi bi-palette-fill text-light'),
(5, 'Social Media & Digital Marketing', 'MT Coders established by skilled professionals with a vision to enable our clients to compete with the latest challenges of the expeditiously changing world. We provide services augment modern strategies and build tailored solution.', 'bi bi-megaphone-fill text-light'),
(6, '3D Home Designing', '3D Home Designing Interior design is the art and science of enhancing the interior of a building to achieve a healthier and more aesthetically pleasing environment for the people using the space. An interior designer is someone who plans, researches, coordinates, and manages such enhancement projects.', 'fa fa-cube text-light mt-3');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `solution_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`solution_id`, `name`, `details`, `image`) VALUES
(1, 'Point on Sale\r\n', 'Add, manage, and categorize job listings.\r\nSearchable & filterable ajax powered job listings added to your pages.\r\nFrontend forms for guests and registered users to submit & manage job listings.\r\nAllow job listers to preview their listing before it goes live. The preview matches the appearance of a live job listing.\r\nEach listing can be tied to an email or website address so that job seekers can apply to the jobs.\r\nDeveloper friendly code — Custom Post Types, endpoints & template files.\r\nAllow candidates to apply to jobs using a form & employers to view and manage the applications from their job dashboard.\r\nPaid listing functionality\r\nResume Manager\r\nAllow registered users to save their job searches and create alerts which send new jobs via email daily, weekly or fortnightly.', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_services`
--

CREATE TABLE `sub_services` (
  `sub_service_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_services`
--

INSERT INTO `sub_services` (`sub_service_id`, `service_id`, `name`, `icon_class`) VALUES
(1, 1, 'Website Designing\r\n', 'bi bi-laptop service-icon'),
(2, 1, 'Website Development\r\n', 'bi bi-file-code service-icon'),
(3, 1, 'Web Application\r\n', 'bi bi-window service-icon'),
(4, 1, 'Web Portal\r\n', 'bi bi-window-sidebar service-icon'),
(5, 1, 'Open Source & Customized\r\n', 'bi bi-gear service-icon'),
(6, 1, 'Open Source & Customized E-Commerce Solutions\r\n', 'bi bi-bag service-icon'),
(7, 1, 'Open Source & Customized E-Commerce Solutions\r\n', 'bi bi-sliders service-icon');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$l7Zm2RXlN1XbLe3U2UChSeegrFOhVRBlC8h.1h7v8yxm.B6Y/hXly', NULL, '2021-04-26 06:21:08', '2021-04-26 06:21:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`contact_form_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `homepages`
--
ALTER TABLE `homepages`
  ADD PRIMARY KEY (`homepage_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`portfolio_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`solution_id`);

--
-- Indexes for table `sub_services`
--
ALTER TABLE `sub_services`
  ADD PRIMARY KEY (`sub_service_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `contact_form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepages`
--
ALTER TABLE `homepages`
  MODIFY `homepage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `solution_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_services`
--
ALTER TABLE `sub_services`
  MODIFY `sub_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `portfolio_categories` (`category_id`);

--
-- Constraints for table `sub_services`
--
ALTER TABLE `sub_services`
  ADD CONSTRAINT `sub_services_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
