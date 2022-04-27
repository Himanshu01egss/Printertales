-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 03:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_printertales2`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogfaqs`
--

CREATE TABLE `blogfaqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogfaqs`
--

INSERT INTO `blogfaqs` (`id`, `question`, `answer`, `blog_id`, `created_at`, `updated_at`) VALUES
(3, 'How do I easily download Canon printer drivers?', 'Move to the Canon Printer Support page so we can search for the particular printer model you have. Type your Canon model in the box and click enter. When your model is shown below the box, press it. You will be directly connected to the printer Drivers & Downloads page for the Canon model you searched for in the previous process.', 4, NULL, NULL),
(4, 'How do I easily connect my Canon Pixma printer to my laptop device?', 'Click and hold the Wi-Fi button given on your Canon printer-top till the light flashes once. Step 2: The light next to your Canon printer WiFi button also flashes blue. After this, move to the access point and click the WPS button within two minutes. As the connection between laptop device and printer shows, the flashing of Wi-Fi lights and power will go off.', 4, NULL, NULL),
(5, 'How do I easily find my Canon printer driver settings?', 'Press Start, point to Settings, and after that, press Printers. Right-press your Canon printer icon, and press Printing Preferences. The screen shows the Printing Preferences window, which has the Paper/Quality, Layout, Extension Settings, and User Defined Paper menus. These menus show the Canon printer drivers settings.', 4, NULL, NULL),
(6, 'How do I fix the Brother printer in Error state?', 'The Brother printer in error state is quite common. It may occur due to incorrect printer connections. To fix the problem on Brother printers, ensure to check all the connections and rectify them. It will surely fix the issue.', 6, NULL, NULL),
(7, 'How do I troubleshoot the Brother printer not printing?', 'Check the connection properly and set Brother printer as the default service. Update your printer driver. Check for the corrupt or missing files and then repair them. Factory reset your printer. The steps will fix the issue.', 6, NULL, NULL),
(8, 'What is the process to reset the Brother printer?', 'Press the Settings button. Then, Press the All Settings. Then, Press the Initial Setup. Now, press either Factory Reset or All Settings according to your choice. Finally, press Yes and wait for the process to complete.', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metakeywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `image`, `brand_id`, `status`, `description`, `metatitle`, `metadescription`, `metakeywords`, `created_at`, `updated_at`, `alt`) VALUES
(3, '8 Factors To Know About HP Instant Ink Before Signing Up', '8-factors-to-know-about-hp-instant-ink-before-signing-up', 'storage/blog/6263d3bb2a1ee_108198-8-factors-to-know-about-hp-instant-ink-before-signing-up.jpg', 1, 1, '<p>Subscription plan-based services have become increasingly famous over the past few years. Nowadays, HP is one of many companies jumping on the subscription plan bandwagon, and with Instant Ink, they are rediscovering the way you buy ink. Instead of replacing a cartridge when your ink runs out, you&#39;re paying to print several pages each month.&nbsp;</p>\r\n\r\n<p>HP offers some different pricing options depending on how often you print. The Occasional subscription plan, at $2.99, gives you 50 prints a month. The Medium subscription plan is $4.99 and gives you 100 prints per month. And the Regular subscription plan is $9.99, which gives you 300 prints per month. Your new printer has a free trial period of Instant Ink. The HP Instant Ink program is affordable for many customers. But if you factor in the fine print, tackling the rules and regulations of HP Instant Ink may make the convenience of a lower monthly cost less.&nbsp;</p>\r\n\r\n<p>If you&#39;re planning to buy an HP printer, we recommend reading what you need to know about the HP Instant Ink program.&nbsp;</p>\r\n\r\n<h2>HP Instant Ink - A printed page may not be what you expect</h2>\r\n\r\n<p>A PRINTED PAGE under HP instant ink is &quot;a page on which any amount of ink is placed by the printer.&quot; If you printed a page with only one line of text, it would count in your monthly print total. If customers have to consider the price of each page, they can become more mindful of their printing habits. Unexpected prints or typos can add up fast.</p>\r\n\r\n<h2>HP Instant Ink - Consider the possibility of higher fees</h2>\r\n\r\n<p>If you exhaust your allotted monthly amount, the price of your subscription plan may start to rise. HP charges $1 per 15 pages on the Occasional subscription plan, $1 per 20 pages on the Medium subscription plan, and $1 per 25 pages on the Regular subscription plan.&nbsp;</p>\r\n\r\n<p>The occasional higher fee may not be a deal-breaker for most customers, but the extra expense can add up quickly if you have an important print job to complete. You might consider keeping&nbsp;<strong>backup cartridges</strong>&nbsp;on hand to pay the higher fees. Regular (non-instant ink-ready)&nbsp;<strong>backup cartridges</strong>&nbsp;let you continue printing without worrying about incurring extra charges.</p>\r\n\r\n<h2>HP may be monitoring some of your information</h2>\r\n\r\n<p>When you sign up for the HP Instant Ink program, you can tell the HP the page count, ink level, type of documents you print, the type of device you use to print a particular document, and the type of device you want to print. Authorized to remotely monitor whether the&nbsp;<strong>last cartridge</strong>&nbsp;used was new or not.&nbsp;</p>\r\n\r\n<p>Also, they are permitted to share some of your information (name, email, printer model, address) with the retailer from which you have purchased the subscription plan.</p>\r\n\r\n<h2>Replacement of cartridges may take up to 10 days to arrive</h2>\r\n\r\n<p><strong>HP Instant Ink cartridges</strong>&nbsp;are usually shipped, and some may take up to 10 days to arrive. But, for most customers, it probably won&#39;t take that much longer. When it was tested, an&nbsp;<strong>HP instant ink cartridge</strong>&nbsp;order arrived quickly.&nbsp;</p>\r\n\r\n<p>HP sent an email as a notification saying a new set of cartridges was being shipped Friday and would be received the following Wednesday. HP Instant Ink will monitor your machine&#39;s ink volume to predict when it should ship a replacement set of cartridges to you. HP predicts this based on whether your cartridge has enough ink to print &quot;twice the average number of pages in your monthly subscription plan.&quot; It will work well for customers who print only occasionally, and shipping times probably won&#39;t be a problem. But if you&#39;re in the middle of a high-volume print job with a solid deadline, you may not be able to wait. HP offers fast shipping for those in a hurry with an extra fee.</p>\r\n\r\n<h2>Unused prints will be rolled over to a certain point in the next month</h2>\r\n\r\n<p>Rollover prints are baked into each subscription plan, but the number of rollover pages you can earn varies depending on which subscription plan you&#39;re enrolled in. The Occasional subscription plan gives a maximum of 50 rollover pages on your account at a time, the Medium subscription plan will allow 100 rollover pages per account, and the Regular subscription plan gives up to 300 rollover pages. If you don&#39;t want to print for a few months, the number of rollover pages will be limited.</p>\r\n\r\n<h2>For HP Instant Ink to accurately check cartridge usage, your printer must be connected to the Internet</h2>\r\n\r\n<p><strong>HP&#39;s Instant Ink cartridge</strong>&nbsp;is set up to communicate with the printer to track page usage and ink levels accurately. The cartridge only communicates with the printer when it is connected to the Internet, so if the Internet connection is poor, it will not be able to record the total page count correctly. You can print even when it is not connected to the Internet, but the page tracker won&#39;t print unless there is a connection. Its delay can be an issue for HP Instant Ink customers if they access a large print job offline, reach their monthly page limit, and need a replacement cartridge immediately. If the connection cannot check the pages you leave in real-time, the service may not be able to predict when a&nbsp;<strong>new cartridge</strong>&nbsp;is sent.</p>\r\n\r\n<h2>HP Instant Ink only works with certain printers</h2>\r\n\r\n<p>Printer prices differ depending on what type of printer you&#39;re in the market for, anywhere between $70 to $380. There are only a few new model HP machines ready for instant ink. If you have an older model HP printer, you&#39;ll need to upgrade to enroll in a subscription plan.</p>\r\n\r\n<h2>Forget paying your Instant Ink bill, and HP may stop accessing the service</h2>\r\n\r\n<p>HP can temporarily turn off Access and your&nbsp;<strong><a href=\"https://printertales.com/knowledgebase/fix-paper-jam-driver-problems-cartridge-issues-with-these-tips\">HP Instant Ink cartridges</a></strong>&nbsp;in service if you do not continue. If you run out of ink at that time, a temporary delay in service could be a bigger problem than expected. Since HP Instant Ink depends on an active account to report ink levels, a delay in payment can also delay the shipping time of badly needed replacement cartridges. Worrying about the monthly fee to use something as normal as a printer is not something we are used to.&nbsp;</p>\r\n\r\n<p>HP Instant Ink is making us think differently about the way we print. The low monthly price and the ability to print whatever you want within a specified page limit are tempting, especially for customers who print only a few times a month. But for customers trying to stick to a strict printing budget, the extra charges have unexpected prints that can become a burden. No matter where you are, factors like monthly bills, connectivity concerns, and overcharges need to be considered.</p>\r\n\r\n<h2>Conclusion&nbsp;</h2>\r\n\r\n<p>This largely depends on how often you print and the number of documents or images you want to print. It may not be worth it if you don&#39;t print regularly. Customer feedback is mixed. Some signed up initially and canceled.</p>', '8 Factors To Know About HP Instant Ink Before Signing Up1', 'If you\'re planning to buy an HP printer, read to know about the HP Instant Ink program. Your new printer will come with a free trial period of Instant Ink.1', 'HP Instant Ink, cartridge, HP printer, backup cartridges, HP Instant Ink program.1', '2022-04-23 04:27:30', '2022-04-23 04:53:55', 'hp printer'),
(4, 'How to Download Canon Printer Drivers and Software?', 'how-to-download-canon-printer-drivers-and-software', 'storage/blog/6263d5e6634af_726609-how-to-download-canon-printer-drivers-and-software.jpg', 3, 1, '<p>Downloading&nbsp;<strong>Canon printer drivers</strong>&nbsp;can be confusing and tedious.&nbsp;<strong>Updating system drivers</strong>&nbsp;such as those discovered in Canon printers can also be a hassle, especially on the time of multiple devices. At some point, a maximum of your devices, especially computers and printers, will require driver updates to keep driving smoothly or easily and working appropriately. Canon printers should update the drivers automatically by themselves, but many times they do not. It can be a hassle to move through the full operation by yourself, especially when you do not know the latest technology.</p>\r\n\r\n<p><strong>Canon printer drivers</strong>&nbsp;download might end up being more complicated if you use multiple printers with other operating systems. There are some other third-party websites that you can go to get downloadable links. Basically,&nbsp;<strong>Canon printer drivers</strong>&nbsp;is a piece of device software that gives permission to your computer to interact with your Canon printer.</p>\r\n\r\n<h2>Downloading The Canon Printer Drivers</h2>\r\n\r\n<p>There are various drivers available that you can download from the&nbsp;<a href=\"https://printertales.com/knowledgebase/4-common-canon-printer-error-codes--how-to-solve-them\">Canon printer download</a>&nbsp;center. This blog will help to make it simpler to select the correct&nbsp;<strong>Canon printer drivers</strong>&nbsp;for your system or device. Once you have chosen your model, you will be presented with a given list of available software/drivers.&nbsp;</p>\r\n\r\n<h2>How To Easily Find Canon Printer Drivers?</h2>\r\n\r\n<p>Canon printer driver collection could give you opportunities to find a lost driver for an older printer or have more out of your printer. Not only is the driver important for enabling the system to communicate with the Canon printer, but it also could be available with a&nbsp;<strong>Canon printer software</strong>&nbsp;package that provides the printer with furthermore functionality or just give greater compatibility. Without&nbsp;<strong>Canon printer drivers</strong>, the printer does not work. Discover the drivers for your specific printer by visiting Canon&rsquo;s website and downloading them to your system.</p>\r\n\r\n<ol>\r\n	<li>Go to the Web browser of your preference and move to the&nbsp;<strong>Canon Support and Drivers</strong>&nbsp;Web Page.</li>\r\n	<li>Press the &ldquo;Consumer &amp; Home Office&rdquo; link in the Product Type column.</li>\r\n	<li>Choose &ldquo;Printer &amp; Multifunction&rdquo; from the Product Family column.</li>\r\n	<li>Press your&nbsp;<strong>Canon printer drivers</strong>&nbsp;model series from the given list under Product Series.</li>\r\n	<li>Placed your particular printer in the Models column and pressed &ldquo;<strong>Drivers &amp; Software</strong>&rdquo; to go to the Canon product&rsquo;s Web page.</li>\r\n	<li>Choose your operating system and particular OS version from the two drop-down menus.</li>\r\n	<li>Press on the &ldquo;Drivers&rdquo; bar to take up a list showing all supportive&nbsp;<strong>drivers for your printer</strong>. Choose the driver file appropriate for your Canon printer.</li>\r\n</ol>\r\n\r\n<h2>Steps To Install The Canon Printer Drivers And Software</h2>\r\n\r\n<ol>\r\n	<li>Insert the&nbsp;<a href=\"https://printertales.com/knowledgebase/inkless-printer-review\"><strong>Printer Drivers Software</strong></a>&nbsp;CD-ROM drive.</li>\r\n	<li>And then, double-press the [My Computer] icon -&gt; the CD-ROM drive icon.</li>\r\n	<li>After that, double-press the following folders: [PCL] or [UFRII] -&gt; [uk_eng].</li>\r\n	<li>Double-press the [Setup.exe] icon to begin the installation operation.</li>\r\n	<li>You have to click next in the first dialog box of the UFR or PCL II Printer Driver Setup Wizard.</li>\r\n	<li>Read and agree on the license agreement carefully. After agreeing on all the given terms, you have to press the Yes button.</li>\r\n	<li>And then, choose [Manually Set Port to Install] -&gt; press [Next].</li>\r\n	<li>Press Next</li>\r\n	<li>After that, choose the printer driver(s) you need to install from [Printer List] -&gt; press [Add].</li>\r\n	<li>Inspect that the printer driver(s) you need to install is chosen in [Printer List for Driver Installation] -&gt; press [Next].</li>\r\n	<li>Choose a port.</li>\r\n	<li>Type a printer name in [Printer Name] if essential -&gt; choose [Set as Default] if you need to set the printer as the default printer -&gt; press [Next].</li>\r\n	<li>Check the installation settings -&gt; press [Start].</li>\r\n	<li>And after the files are copied, press [Exit] to finish the installation.</li>\r\n</ol>', 'How to Download Canon Printer Drivers and Software?', 'Are you searching for the best methods or steps that you have to use for downloading Canon printer drivers and software? Take a look at this blog.', 'Canon Printer Drivers, Drivers and Software, Download Canon Printer Drivers, printer driver settings.', '2022-04-23 05:03:10', '2022-04-23 05:03:10', 'Canon Printer Drivers'),
(5, 'Easy Methods To Install Epson Printer Step-by-Step', 'easy-methods-to-install-epson-printer-step-by-step', 'storage/blog/6263e199665a2_707465-easy-methods-to-install-epson-printer-step-by-step.jpg', 4, 1, '<p>If you are looking to&nbsp;<strong>install Epson Printer</strong>&nbsp;Step-by-Step, then read this blog very carefully to get detailed information about this. If you just bought an&nbsp;<strong>Epson printer</strong>&nbsp;and don&rsquo;t know how to set this in your office or home, then you are at the right place. You have to be very careful when you start your installation process after buying an Epson printer.</p>\r\n\r\n<p>Before you start the installation operation, you just need to know everything about the&nbsp;<strong>install Epson printer</strong>. Firstly, you have to connect your printer to the network so you can use it from your computer system. Follow all the given steps to set up your printer and attach it to your network.</p>\r\n\r\n<h2>Install Epson Printer For Windows</h2>\r\n\r\n<ol>\r\n	<li>Switch on the printer.</li>\r\n	<li>Move to the official website of Epson and then select to download and install the Windows version of Epson Connect Printer Set up Utility.</li>\r\n	<li>Tick right to the agreement and press next.</li>\r\n	<li>Make your devices run better with RIP software digital factory v10.</li>\r\n	<li>Press Install.</li>\r\n	<li>Choose your product in the menu and then press next.</li>\r\n	<li>Choose printer registration and press next.</li>\r\n	<li>You have to make your devices run better with RIP software digital factory v10.</li>\r\n	<li>Press agree &gt; next.</li>\r\n	<li>Press ok when you watch the register a printer to Epson Connect.</li>\r\n	<li>You have to sign up for an existing one or create a new account.</li>\r\n	<li>Press close.</li>\r\n</ol>\r\n\r\n<h2>Install Epson Printer For Mac</h2>\r\n\r\n<ol>\r\n	<li>Switch on the printer.</li>\r\n	<li>Move to the official website of Epson, and select to download and install the Mac version of Epson Connect Printer Setup Utility.</li>\r\n	<li>Press to continue.</li>\r\n	<li>Press continue &gt; agree.</li>\r\n	<li>Press install &gt; close.</li>\r\n	<li>Choose your printer and press next.</li>\r\n	<li>Select printer registration, then press next &gt; ok.</li>\r\n	<li>Move down the content and agree to the I accept the terms and conditions checkbox, and then press next.</li>\r\n	<li>You have to sign up for an existing one or create a new account.</li>\r\n	<li>Press close.</li>\r\n</ol>\r\n\r\n<h2>Beneficial Tips For Epson Printer</h2>\r\n\r\n<p>Many times, users find some errors with their printers. One of the errors is how to&nbsp;<strong>install Epson Printer</strong>. Sometimes printer causes trouble, and you do not exactly know what typically causes the crash. You don&rsquo;t need to worry. We are here to give you two tips that you love to solve your problems and fix very easily.&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Install Reimage</li>\r\n	<li>Update your&nbsp;<strong>Epson printer driver</strong>.</li>\r\n</ol>\r\n\r\n<h3>1. Install Reimage</h3>\r\n\r\n<p>Many&nbsp;<strong>Epson printer problems</strong>&nbsp;could be related to damaged system files. Reimage is the most powerful and amazing tool to construct and rebuild Windows for your&nbsp;<strong>install Epson Printer.</strong>&nbsp;It is tailored to your particular device and works in an automatic and private way. There is no harm to your system and no type of worry about losing any applications or programs and your private or personal data.&nbsp;</p>\r\n\r\n<p>Given below how to use this:</p>\r\n\r\n<ol>\r\n	<li>You have to download and install Reimage.</li>\r\n	<li>And then, turn on Reimage and drive a free scan. This operation takes a few minutes.</li>\r\n	<li>You will see the summary of discovered problems on your system. Press Start Repair, and all the problems will be solved automatically.&nbsp;</li>\r\n</ol>\r\n\r\n<h3>2. Update Your Epson Printer Driver</h3>\r\n\r\n<p><strong>Install Epson Printer</strong>&nbsp;is very important for you to get the higher results.&nbsp;<strong>Epson printer</strong>&nbsp;wants drivers to work appropriately. If the driver is not up to date or latest, it may cause problems. You are given below two ways that you follow to get the correct driver for your driver: automatically and manually.</p>\r\n\r\n<h4>Option 1 - Automatically</h4>\r\n\r\n<p>If you do not have much patience, time, or computer device skills to&nbsp;<strong>install Epson Printer</strong>&nbsp;or update your driver manually, you can make it automatically with Driver Easy. Driver Easy will automatically find your system and discover the right drivers for it. You do not have to know exactly what device your computer system is running, you do not have to worry about making a mistake at the time of installation, and you do not have to download and install the wrong driver.&nbsp;</p>\r\n\r\n<p>You have the option to install an&nbsp;<strong>Epson Printer</strong>&nbsp;that you can update your drivers automatically, either the Pro version or the FREE version of Driver Easy. But the Pro version of Driver Easy just takes two clicks to update. Given below the steps to update:</p>\r\n\r\n<ol>\r\n	<li>Firstly, download and install Driver Easy.</li>\r\n	<li>Drive Driver Easy and press the Scan Now button. Then Driver Easy starts scanning your computer and discovers any issue drivers.</li>\r\n	<li>Press the Update button given next to the audio driver to download the right version of the driver automatically, then, manually, you can install it, and you can also do it with the free version.&nbsp;Or press Update All to automatically download and install the right version of all the drivers that are out of date or missing on your device.&nbsp;</li>\r\n</ol>\r\n\r\n<h4>Option 2 - Manually</h4>\r\n\r\n<p>To get the right driver to&nbsp;<strong>install Epson printer drivers</strong>, you have to move to the Epson support webpage, find your printer and search for the drivers corresponding with your particular flavor of Windows version and download the driver manually.</p>\r\n\r\n<p>Once you have downloaded the right drivers for your device, double press on the downloaded file and go with the on-screen instructions to install the driver.</p>\r\n\r\n<p>I hope this blog will meet your wants or needs. If you have any type of queries, please go to the official website of the&nbsp;<strong>Epson printer</strong></p>', 'Easy Methods To Install Epson Printer Step-by-Step', 'Are you facing installation issues with your Epson printer? Read this blog to know the detailed information about how to Install Epson Printer Step-by-Step.', 'Install Epson Printer, install Epson Printer Step-by-Step, Epson Printer Driver, download and install.', '2022-04-23 05:53:05', '2022-04-23 05:53:05', 'Epson Printer'),
(6, '3 Best Brother Printers for Your Business in 2022', '3-best-brother-printers-for-your-business-in-2022', 'storage/blog/6263e1e548947_826649-3-best-brother-printers-for-your-business.jpg', 5, 1, '<p><strong>Brother printers</strong>&nbsp;are excellent printers that suit both budget and printing needs. Your search for superb&nbsp;<strong>Brother printers</strong>&nbsp;for your business will come to an end as soon as you read the list given below. The Brother printers on this list are ideal for your business. These&nbsp;<strong>Brother printers</strong>&nbsp;give decent printing results and perform the printing tasks faster. We have made every possible effort so that you can choose the perfect printer for your needs. Read the list of the&nbsp;<strong>best Brother printers</strong>&nbsp;and pick the best one for your needs.&nbsp;</p>\r\n\r\n<h2>Top Reasons to Go for Brother Printers</h2>\r\n\r\n<p>Brother is a popular printer brand.&nbsp;<strong>Brother printers</strong>&nbsp;produce high-quality, vibrant, and bright printouts that look entirely professional. In terms of build quality, they are also good. There are several Brother printer models, so it may be difficult for a user to decide which Brother printer you should choose for your business. Take a quick look at the list of the&nbsp;<strong>best Brother printers</strong>&nbsp;now.&nbsp;</p>\r\n\r\n<h2>The List of the Best Brother Printers</h2>\r\n\r\n<p>Owing to the availability of various Brother printer models in the market, one may get confused about which Brother printer one should go for. Even though these printers are similar in features, yet big difference lies between them. The purpose of the list is to assist you in choosing the&nbsp;<strong>best Brother printers</strong>&nbsp;that fit your needs. Read the list of the&nbsp;<strong>best Brother printers</strong>.&nbsp;</p>\r\n\r\n<h3>Brother MFC-J4535DW&nbsp;</h3>\r\n\r\n<p>Brother MFC-J4535DW is one of the most&nbsp;<strong>popular Brother printers</strong>. The excellent printer is ideal for both small and mid-sized businesses. It comes with print, copy, scan, and fax capabilities. The printer has two paper trays and a high ink capacity. It also supports a large cartridge that lasts longer than usual and keeps you worry-free about installing the cartridge. With XL cartridges, you can easily print up to 3000 mono pages. It comes with a 2.7&rdquo; touchscreen that makes printing tasks easy. It has 20-sheet ADF and Wi-Fi compatibility.&nbsp;</p>\r\n\r\n<p>Features and Specifications&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Printer Type: Multifunctional Color Printer</li>\r\n	<li>Printing Method: Inkjet</li>\r\n	<li>Wi-Fi connectivity: Yes</li>\r\n	<li>Touchscreen: Yes</li>\r\n	<li>Touchscreen size: 2.7&rdquo;</li>\r\n	<li>Auto-duplex printing: Yes</li>\r\n	<li>Copy: Yes</li>\r\n	<li>Fax: Yes</li>\r\n	<li>Height: 9.8</li>\r\n	<li>Width: 16.9</li>\r\n</ul>\r\n\r\n<h3>Brother MFC-J5330DW Printer</h3>\r\n\r\n<p>Brother MFC-J5330DW is one of the most excellent&nbsp;<strong>Brother printers for business</strong>. The smart printer is designed for maximum efficiency and performance. The excellent printer can hold 250 sheets in the paper tray. This one of the&nbsp;<strong>best Brother printers</strong>&nbsp;delivers sharp black texts and highly professional printouts on plain paper. The printer has print, copy, and fax capabilities. It also comes with wireless connectivity to let you enjoy remote printing. To use remote printing, you need an internet connection. Its smart features make it one of the&nbsp;<strong>best Brother printers</strong>. Take a look at the list of the features and specifications of the Brother printer.&nbsp;</p>\r\n\r\n<p>Features and Specifications&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Printing Method: Inkjet</li>\r\n	<li>Printer Type: Multifunctional Color Printer.</li>\r\n	<li>Print: Yes</li>\r\n	<li>Copy: Yes</li>\r\n	<li>Scan: Yes</li>\r\n	<li>Automatic Document Feeder: Yes</li>\r\n	<li>Paper Tray Capacity: 250</li>\r\n	<li>Print Output: Color</li>\r\n	<li>Touchscreen: Yes.</li>\r\n	<li>Touchscreen size: 2.7&rdquo;</li>\r\n	<li>Compatible devices: PC and laptops</li>\r\n	<li>Wireless Connectivity: Wi-Fi</li>\r\n	<li>Unit Color: Black.</li>\r\n</ul>\r\n\r\n<h3>Brother MFC-J5945DW Printer</h3>\r\n\r\n<p>Brother MFC-J5945DW is an excellent printer that does a superb job of printing sharp documents quickly. It comes with an internal ink tank that helps deliver superb printouts. The wireless capabilities help you print documents wirelessly using your smartphone, laptop, and desktop. It requires no network and easily connects to your device to let you enjoy mobile printing and scanning. It has a 3.7&rdquo; inch color touchscreen display that lets you easily operate your printer and makes printing jobs easy. Take a glance at the features and specifications of the Brother MFC-J5945DW printer.&nbsp;</p>\r\n\r\n<p>Features and Specifications</p>\r\n\r\n<ul>\r\n	<li>Print Method: Inkjet</li>\r\n	<li>Printer type: Multifunctional Printer.</li>\r\n	<li>Copy: Yes</li>\r\n	<li>Print: Yes</li>\r\n	<li>Scan: Yes</li>\r\n	<li>Print output: B/W &amp; Color</li>\r\n	<li>Print speed: Black (up to 22ppm)</li>\r\n	<li>Print speed: Color (up to 20 ppm)</li>\r\n	<li>Duplex Printing: Yes</li>\r\n	<li>Scanner Type: Color Flatbed.</li>\r\n	<li>LCD Display: 3.7 inches.</li>\r\n</ul>\r\n\r\n<h2>Conclusion</h2>\r\n\r\n<p>The list of&nbsp;<strong>best Brother printers</strong>&nbsp;is provided below. We have mentioned the specifications of each on the list. Our detailed review of the printers will help you understand which printer is perfect for your needs.</p>', '3 Best Brother Printers for Your Business in 2022', 'Looking for printers that deliver high-quality printouts? Check the list of Brother printers perfect for your business. Give this list a quick read now.', 'Brother printers, Best Brother Printers, Brother MFC-J4535DW, popular printer brand.', '2022-04-23 05:54:21', '2022-04-23 05:54:21', 'Brother Printers'),
(8, 'How To Connect Wireless/Wired Epson Printer To Your Laptop', 'how-to-connect-wireless-wired-epson-printer-to-your-laptop', 'storage/blog/6268dee69fb33_239592-how-to-connect-wireless-wired-epson-printer-to-your-laptop.jpg', 4, 1, '<p>Want to access your Epson printer with the help of your laptop but do not know how to do this? Don&rsquo;t worry! In this blog, we will provide you with detailed information to connect wireless Epson printer and to connect wired Epson printer to your laptop in just a few easy steps. Before going to learn about this information, you need to decide how you would like to connect your Epson printer to your laptop.</p>\r\n\r\n<h2>Option 1 - Connect Your Epson Printer To Your Laptop Through Wirelessly</h2>\r\n\r\n<ol>\r\n	<li>Connect your Epson printer to your Wi-Fi.</li>\r\n	<li>And then configure your printer on your laptop.</li>\r\n</ol>\r\n\r\n<p>Check which windows operating system is used on your laptop. If your laptop runs on the Windows 7 operating system, then carefully follow the steps given below.</p>\r\n\r\n<ul>\r\n	<li>Click the Windows logo key and R on your keyboard at the same time and choose devices and printers.</li>\r\n	<li>Press Add a printer.</li>\r\n	<li>Choose to Add a network, Bluetooth, or wireless printer.</li>\r\n	<li>Choose the printer you need, and then press Next.</li>\r\n	<li>Choose your printer from the given list, and then press Next to install the driver for it.</li>\r\n	<li>Write a printer name and press Next.</li>\r\n</ul>\r\n\r\n<p>After finishing this step, your Epson printer will be added to your laptop successfully.</p>\r\n\r\n<ol start=\"3\">\r\n	<li>And then update your printer driver.</li>\r\n</ol>\r\n\r\n<p>Printer issues, such as empty page printing, may encounter if you&rsquo;re using the corrupt printer driver or it&rsquo;s outdated. If you want your printer to drive very smoothly, then you have to use the latest correct driver at all times. There are two ways that you can get the correct drivers for your systems: manually or automatically.</p>\r\n\r\n<p><strong>Manual driver update</strong>&nbsp;- You can update the driver manually by simply going to the manufacturer&rsquo;s website for each one of your devices and then searching for the most recent correct driver. Make sure to select only drivers that are useful with your Windows version.</p>\r\n\r\n<p><strong>Automatic driver update</strong>&nbsp;- If you do not have the patience, time, or computer skills to update drivers manually, then you can do it automatically with Driver Easy.</p>\r\n\r\n<h2>Option 2 - Connect The Epson Printer To Your Laptop Via A Cable</h2>\r\n\r\n<p>If you have the correct printer cable, you can also connect your Epson printer to your laptop through cable. Let&rsquo;s see, connect wired Epson printer to your laptop. Follow the given steps exactly as it is mentioned below.</p>\r\n\r\n<ol>\r\n	<li>Identify the correct cable to connect the Epson printer to your laptop.</li>\r\n	<li>Connect the cable to your printer and also to the laptop.</li>\r\n	<li>And then, update your Epson printer driver.</li>\r\n</ol>\r\n\r\n<p>There are two methods by which you can get the correct drivers for your devices: manually or automatically.</p>\r\n\r\n<p><strong>Manual driver update</strong>&nbsp;- You can update the driver manually by easily going to the manufacturer&rsquo;s website for every one of your systems and then discovering the most recent correct driver. Make sure to choose only drivers that are relevant to your Windows version.</p>\r\n\r\n<p><strong>Automatic driver update</strong>&nbsp;- If you do not have the patience, time, or computer skills to update drivers manually, then you can do it automatically with Driver Easy.</p>', 'How To Connect Wireless/Wired Epson Printer To Your Laptop', 'Want to access your Epson printer with the help of your laptop but do not know how to do this? Don’t worry! In this blog, we will provide you with detailed information to connect wireless Epson printer and to connect wired Epson printer to your laptop in just a few easy steps.', 'Wireless/Wired Epson Printer', '2022-04-27 00:42:54', '2022-04-27 00:42:54', 'Wireless/Wired Epson Printer'),
(9, 'Solutions to 3 Common Epson Printer Error Codes', 'solutions-to-3-common-epson-printer-error-codes', 'storage/blog/6268df21b99c0_299945-solutions-to-3-common-epson-printer-error-codes.jpg', 4, 1, '<p>Epson is a popular printer brand all over the world. It is popular for its great printing performance and excellent print quality. Epson printer users often report the occurrence of error codes on their printers. If you are an Epson printer user who is facing any error code or issue on your printing device, you can resolve Epson printer error quickly. To resolve Epson printer error, all you need do is just follow the steps in the same way as explained below. We have provided helpful instructions so that you can quickly resolve Epson printer errors. Read the causes for the occurrence of the error codes on Epson printers and learn how to fix them.</p>\r\n\r\n<h2>What is Error Code on Epson Printer?</h2>\r\n\r\n<p>Error code is an error message that may be difficult for a layperson to understand. An error code indicates that there may be something technically wrong with your Epson printer. The first question that comes to one&rsquo;s mind in this situation is &ldquo;How to Resolve it&rdquo; The process to resolve Epson printer error is easy. All the resolution takes is a little effort and the right solution. To resolve Epson printer error, you first need to know what is causing the error.&nbsp;</p>\r\n\r\n<h2>What Causes Epson Printer Error Codes?</h2>\r\n\r\n<p>Before getting down to resolve Epson printer error code, you should first become aware of the causes for the occurrence of the Epson printer error. We have listed some basic reasons that will help you understand the problem better and make it easy for you to resolve Epson printer error. Read the causes.</p>\r\n\r\n<ul>\r\n	<li>The hardware issue may cause the occurrence of the error code.</li>\r\n	<li>Cartridges, if not installed properly, can cause an issue.</li>\r\n	<li>Outdated and missing printer drivers may cause the issue on your Epson printer.</li>\r\n	<li>The presence of foreign objects inside the printer may lead to an error code.</li>\r\n</ul>\r\n\r\n<p>Note: If you are not tech-savvy, you should avoid touching the printer hardware, as the situation may go from bad to worse. If you are fully aware of the printer parts, you can go through the steps in the explained manner.&nbsp;</p>\r\n\r\n<h2>Methods to Resolve Epson Printer Error Codes</h2>\r\n\r\n<p>Below are the methods to resolve Epson printer error codes. With the help of the provided methods, you can quickly get rid of the error codes on your Epson printer. Read the methods and follow the steps.</p>\r\n\r\n<h3>Resolve Epson Printer Error Code 0x69</h3>\r\n\r\n<p>The appearance of the error code 0x69 is when a piece of paper is stuck inside the printer. If you come across the error code, there is no need to get frustrated! To resolve Epson printer error code 0x69, you can follow the steps below.&nbsp;</p>\r\n\r\n<ol>\r\n	<li>First of all, turn off your Epson printer and disconnect it from the main power supply.</li>\r\n	<li>Now, open the lid of the Epson printer and see if any paper is jammed stuck inside it.</li>\r\n	<li>Gently take out the cartridges and reinstall them properly again.</li>\r\n	<li>Try the power cycle procedure and see if the issue has ended.</li>\r\n	<li>In this way, you will quickly be able to resolve Epson printer error code 0x69.</li>\r\n</ol>\r\n\r\n<h3>Resolve Epson Printer Error 000031</h3>\r\n\r\n<p>As an Epson printer user, one may often come across the error code 000031. The error code is caused due to an issue with the scanner. To resolve Epson printer error, you can follow the steps.&nbsp;</p>\r\n\r\n<ol>\r\n	<li>First and foremost, you need to remove the cartridges.&nbsp;</li>\r\n	<li>Reinstall the cartridges correctly in the slots.</li>\r\n	<li>Check to see if the paper is stuck inside the paper tray.</li>\r\n	<li>If you see any piece of paper, you can pull it out gently.&nbsp;</li>\r\n	<li>Disconnect all the cables attached to your printer, and reconnect them properly.</li>\r\n	<li>Set up your Epson printer correctly by reading the user manual.</li>\r\n	<li>That is how you will quickly be able to resolve the Epson printer error.&nbsp;</li>\r\n</ol>\r\n\r\n<h3>Resolve Epson Printer Error 0xf1</h3>\r\n\r\n<p>A corrupted registry or missing printer drivers may lead to the Epson printer error code 0xf1. It is not difficult to resolve Epson printer code once you have the right solution. Go through the method described below to resolve Epson printer error code 0xf1.&nbsp;</p>\r\n\r\n<ol>\r\n	<li>First of all, turn off your Epson printer.</li>\r\n	<li>Keep it disconnected for about 10 minutes.</li>\r\n	<li>Turn your printer back on to see if the issue is gone.&nbsp;</li>\r\n	<li>If the issue persists, install an antivirus and run it on your system, as the issue may often occur due to viruses or malware also.&nbsp;</li>\r\n	<li>The steps shared above will help resolve Epson printer error 0xf1 quickly.&nbsp;</li>\r\n</ol>\r\n\r\n<h2>Conclusion</h2>\r\n\r\n<p>The causes of the Epson printer error codes and their solutions are mentioned in the article. An Epson printer user can follow these effective methods and quickly resolve Epson printer error codes. We hope the methods eliminate the Epson printer issues you are facing.</p>', 'Solutions to 3 Common Epson Printer Error Codes', 'Epson is a popular printer brand all over the world. It is popular for its great printing performance and excellent print quality. Epson printer users often report the occurrence of error codes on their printers.', 'Common Epson Printer Error Codes', '2022-04-27 00:43:53', '2022-04-27 00:43:53', 'Common Epson Printer Error Codes');

-- --------------------------------------------------------

--
-- Table structure for table `brandissues`
--

CREATE TABLE `brandissues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metakeywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brandissues`
--

INSERT INTO `brandissues` (`id`, `name`, `slug`, `brand_id`, `image`, `description`, `description2`, `metatitle`, `metadescription`, `metakeywords`, `created_at`, `updated_at`) VALUES
(1, 'Printer Driver', 'printer-driver', 3, 'storage/brandissues/626696e549e4b_833861-printer-driver.png', '<h2>Facing issues setting up your printer or installing the printer driver?</h2>\r\n\r\n<p>Use our recommended automated Virtual Agent to get product-specific setup information or visit HP Print &amp; Scan doctor to diagnose and fix printer setup issues.</p>\r\n\r\n<p>At Printer tales, we try to solve the issue(s) faced by our users and provide them with the best solutions. We have a dedicated team of a certified technician</p>', '<h2>The Causes of the Canon Printer Not Detecting Driver</h2>\r\n\r\n<p>Canon printer users often report the issue of a Canon printer not detecting the driver. The basic reasons behind this issue may be either the missing drivers or obsolete printer drivers. A Canon printer model may not detect the driver in rare cases due to an incorrect internet connection. Resolving the issue requires little effort and a proper method.</p>\r\n\r\n<h2>Solution to Fix the Issue of Canon Printer Not Detecting Driver</h2>\r\n\r\n<p>First, check if the connection is properly established between your Canon printer and driver. Make sure that your Canon printer is on. If the LED Status is not lit, you need to check if the printer&rsquo;s power cable is plugged into a wall socket. Also, check the USB cable is properly connected to your Canon printer. Try a new USB port on your computer if it is damaged. It will fix the Canon printer issue. The second solution is to turn off the firewall. In the Search bar, you should type &lsquo;windows defender firewall.&rsquo; Click the Windows Defender Firewall and turn it off. If the issue persists, you can update the printer drivers. Updating drivers to the latest version will resolve the issue.</p>', 'Printer Driver', 'Canon printer users often report the issue of a Canon printer not detecting the driver.', 'Printer Driver', '2022-04-25 07:11:09', '2022-04-25 07:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headquarter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `founder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `established` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `people` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `metatitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metakeywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `description`, `headquarter`, `founder`, `established`, `website`, `people`, `status`, `metatitle`, `metadescription`, `metakeywords`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'HP', 'storage/brand/6263c3591b6f0_sand-art-experiences.png', '<p>HP stands for Hewlett Packard, which is a well-known information technology company. HP&#39;s headquarters is based in Palo Alto, California. HP manufactures and provides a wide variety of hardware components as well as software-related services to its consumers. HP clients are from small and medium-sized businesses to large enterprises, including customers in the health, government, and education sectors. HP company got its first big contract in 1938 to provide test &amp; measurement instruments for Walt Disney&#39;s production of the animated film named Fantasia. This contract allowed Bill Hewlett and David Packard (founders of HP) to formally establish the HP company on July 2, 1939. The company turned into a multinational company widely respected for its products.</p>', 'Palo Alto, California, United States', 'Bill Hewlett David Packard', 'January 1, 1939; 83 years ago', 'https://www.hp.com/', 'Chip Bergh (Chairman) Enrique Lores (President & CEO)', 1, 'Fix HP Printer Issues And Error Codes | Printer Tales', 'Palo Alto, California, United States', 'hp deskjet, hp deskjet plus 4155, hp deskjet 3755, hp officejet pro 9015e, hp deskjet 2755, hp envy 6055, hp envy pro 6455, hp officejet pro 8025e, hp envy photo 7155, hp envy photo 7855', '2022-04-23 02:08:02', '2022-04-23 03:44:01', 'hp'),
(3, 'Canon', 'storage/brand/6263d575eff66_327-3275702-bolle-circolari-icon-user-image-icon-png-transparent.png', '<p>Canon Inc is a Japan-based multinational company that is basically known as a manufacturer of electronics &amp; electrical appliances. Canon headquarters is located in Ōta, Tokyo, Japan. Canon is the sales and marketing subsidiary of Canon Inc., also known as a world leader in imaging technologies. Set up in 1997, Canon World markets a comprehensive range of sophisticated contemporary digital imaging products and solutions around the World. In sync with its corporate tagline- &lsquo;Delighting You Always,&rsquo; reinforced by world-class technology. Canon offers an extended product portfolio, including Large Format Printers, Digital Production Printers, Commercial Printers, Managed Document Services, Multi-Functional Devices, Inkjet &amp; Laser Printers, Document and Cheque Scanners, Digital Cameras, DSLRs, Mirrorless cameras, Cinematic Imaging Products, Surveillance cameras and Medical Imaging products catering to the multiple market segments of consumer, SME, B2B, Commercial, Government &amp; PSUs.</p>', 'Ōta, Tokyo, Japan', 'Goro Yoshida Saburo Uchida Takeo Maeda', '10 August 1937; 84 years ago', 'https://global.canon/en/', 'Fujio Mitarai (Chairman & CEO)', 1, 'Resolve Canon Printer Issues | Printer Tales', 'How to resolve Canon Wireless Photo Printer issues? Let out technical expert at Printer Tales help you resolve the error problems wihtin a few seconds.', 'canon printer, canon pixma, inkjet printer, wireless printer, canon pixma printer, canon support, canon printer ink, canon pixma mg3620, canon ink, canon inkjet printer.', '2022-04-23 05:01:18', '2022-04-23 05:01:18', 'canon'),
(4, 'Epson', 'storage/brand/6263e0cf81405_592801-20.jpg', '<p>Epson (Seiko Epson Corporation) is a japan-based multinational electronics company. Epson is well known as one of the largest manufacturers of computer printers &amp; information, and imaging-related equipment. Epson&rsquo;s headquarter is located in Suwa, Nagano, Japan. It has most subsidiaries worldwide. They manufacture dot matrix, inkjet, thermal and laser printers for consumer, business, and industrial use, laptop, scanners, and desktop computers, video projectors, point of sale systems, watches, robots and industrial automation equipment, semiconductor devices, sensing systems, crystal oscillators, and other associated electronic components. Epson company is owned by Seiko Group. Seiko Group - a name basically known for manufacturing Seiko timepieces since its founding.</p>', 'Suwa, Nagano, Japan', 'Hisao Yamazaki', '18 May 1942; 79 years ago', 'https://global.epson.com/', 'Minoru Usui (Chairman & Director) Yasunori Ogawa (President, CEO & Representative Director)', 1, 'Epson Printer', 'Epson Printer', 'Epson Printer', '2022-04-23 05:49:43', '2022-04-23 05:49:43', 'epson'),
(5, 'Brother', 'storage/brand/6263e13c972c8_592801-20.jpg', '<p>Brother is the sales and marketing subsidiary of Canon Inc., a world leader in imaging technologies. Set up in 1997, Canon World markets a comprehensive range of sophisticated contemporary digital imaging products and solutions in World. In sync with its corporate tagline- &lsquo;Delighting You Always&rsquo;, reinforced by world-class technology, Canon offers an extended product portfolio, including Digital Production Printers, Large Format Printers, Commercial Printers, Multi-Functional Devices, Managed Document Services, Inkjet &amp; Laser Printers, Document and Cheque Scanners, Digital Cameras, DSLRs, Mirrorless cameras, Cinematic Imaging Products, Surveillance cameras and Medical Imaging products catering to the multiple market segments of consumer, SME, B2B, Commercial, Government &amp; PSUs.</p>', 'Palo Alto, California, United States', 'Bill Hewlett , David Packard', 'January 1, 1939; 83 years ago (as Hewlett-Packard) November 1, 2015; (as HP Inc.)ge yield of upto 7500 pages for color and 4500 pages for monochrome', 'brother.com', 'Chip Bergh (Chairman) Enrique Lores (President & CEO)', 1, 'Brother', 'Palo Alto, California, United States', 'Brother', '2022-04-23 05:51:32', '2022-04-23 05:51:38', 'brother');

-- --------------------------------------------------------

--
-- Table structure for table `contactlists`
--

CREATE TABLE `contactlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `date`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Alex', 'Alex@test.com', '987456321', '2022-05-10', NULL, '2022-04-23 02:07:39', '2022-04-23 02:07:39'),
(2, 'Henry', 'Henry@test.com', '987456321', '2022-05-10', NULL, '2022-04-23 02:07:39', '2022-04-23 02:07:39'),
(3, 'test', 'test001@gmail.com', '74649272726', '2022-03-31', NULL, '2022-04-27 06:29:00', '2022-04-27 06:29:00'),
(4, 'test', 'asdf@afg.com', '74649272726', '2022-04-02', NULL, '2022-04-27 06:37:12', '2022-04-27 06:37:12'),
(5, 'test', 'test001@gmail.com', '74649272726', '2022-04-29', NULL, '2022-04-27 06:50:31', '2022-04-27 06:50:31');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_04_23_062151_brands', 1),
(16, '2022_04_23_063143_blog', 1),
(17, '2022_04_23_064738_contacts', 1),
(18, '2022_04_23_072921_add_slug_to_brands_table', 1),
(19, '2022_04_23_094717_add_alt_to_blogs_table', 2),
(20, '2022_04_23_095205_rename_brnad_id_to_brand_id_in_blogs_table', 3),
(21, '2022_04_23_103405_create_blogfaqs_table', 4),
(22, '2022_04_23_113807_create_testimonials_table', 5),
(26, '2022_04_25_054441_create_printers_table', 6),
(27, '2022_04_25_071107_create_printerfaqs_table', 7),
(28, '2022_04_25_085745_create_printererrors_table', 8),
(29, '2022_04_25_095942_create_printerfeatures_table', 9),
(31, '2022_04_25_120744_create_brandissues_table', 10),
(32, '2022_04_26_043533_create_settings_table', 11),
(33, '2022_04_26_061434_create_sociallinks_table', 12),
(34, '2022_04_26_101842_create_contactlists_table', 13);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `printererrors`
--

CREATE TABLE `printererrors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `printer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `printererrors`
--

INSERT INTO `printererrors` (`id`, `title`, `description`, `printer_id`, `created_at`, `updated_at`) VALUES
(19, 'Error code 02', '<p style=\"padding: 0px; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(0, 0, 0); font-size: 14px; font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">The “02” is a typical error, affecting almost every printer regardless of brand and printer technologies. This error is associated with the printer driver or the printer cable. Luckily, you can fix 02 errors by following a set of simple steps below.</p><ul style=\"padding: 0px 0px 0px 68px; margin: 20px 0px 10px; list-style-position: initial; list-style-image: initial; color: rgb(102, 102, 102); font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 15px;\"><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Turn OFF the printer.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Turn it ON after some time, and the error will be fixed.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">If you can still see the 02 error on your printer, contact HP technical support or visit your nearest HP printer service center.</li></ul>', 1, NULL, NULL),
(20, 'Error code 10', '<p style=\"padding: 0px; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(0, 0, 0); font-size: 14px; font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">The “10” error code indicates an issue with the toner cartridge chip. Usually, this error occurs when the cartridge chip fails to read the information. To fix the “10” error, follow the steps given below.</p><ul style=\"padding: 0px 0px 0px 68px; margin: 20px 0px 10px; list-style-position: initial; list-style-image: initial; color: rgb(102, 102, 102); font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 15px;\"><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Configure the printer to its default settings.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Remove and reinstall the ink cartridges.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Turn ON the printer.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">If you can still see the “10” error on the printer screen, there is a hardware issue with the printer.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">In that case, contact HP technical support or visit your nearest HP printer service center.</li></ul>', 1, NULL, NULL),
(21, 'Error code 11', 'The “11” error code is commonly associated with a lack of paper sheets within the printer, and you can fix this issue by feeding more sheets to the printer. This error is a common occurrence with most printer models, and it is fixable by simply loading more paper in the paper trays.', 1, NULL, NULL),
(22, 'Error code 12', 'The “12” is a common printer error, and it is associated with the incorrect installation of ink cartridges. In some cases, opened cartridge doors or uneven placement of inks also leads to the “12” error. To fix the “12” error code, remove and reinstall the ink cartridges and ensure that the ink cartridge doors have been closed properly.', 1, NULL, NULL),
(23, 'Error code 13', 'The error code “13” indicates a paper jam issue within the printer. To troubleshoot this error, don’t try removing the paper jam manually, as it can damage the printer. Instead, follow the procedure on the printer screen, and the “13” error will be fixed.', 1, NULL, NULL),
(28, 'Error code 02', '<p style=\"padding: 0px; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(0, 0, 0); font-size: 14px; font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">The “02” is a common printer error, and it usually indicates an issue with the printer cable or printer drivers. Due to wear and tear or the incorrect installation, you can get this error. Luckily, you can fix the 02 error by following the steps given below.</p><ul style=\"padding: 0px 0px 0px 68px; margin: 20px 0px 10px; list-style-position: initial; list-style-image: initial; color: rgb(102, 102, 102); font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 15px;\"><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Turn OFF the printer.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Remove all the cables and unplug the printer from the power source.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Turn it ON after 5 minutes.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Update the printer drivers.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">If none of the things are working, contact HP technical support or visit your nearest HP printer service center.</li></ul>', 3, '2022-04-27 09:51:56', NULL),
(29, 'Error code 10', '<p style=\"padding: 0px; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(0, 0, 0); font-size: 14px; font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">The “10” is a common printer error, and it occurs with almost every HP printer. Usually, this error indicates a problem when the toner cartridge chip fails to read the information. To fix the “10” error, follow the steps given below.</p><ul style=\"padding: 0px 0px 0px 68px; margin: 20px 0px 10px; list-style-position: initial; list-style-image: initial; color: rgb(102, 102, 102); font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 15px;\"><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Reset the printer by turning it ON and then ON.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Remove and reinstall the ink cartridges.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Clean the printer and remove any paper jams, dust, or paper pieces.</li></ul>', 3, '2022-04-27 09:51:56', NULL),
(30, 'Error code 11', '<p style=\"padding: 0px; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(0, 0, 0); font-size: 14px; font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">The “11” error is commonly associated with an issue with the printer papers. Usually, this error signifies that the printer is out of space, but this is not entirely true. Your printer might not be out of papers, but there should be an error with the paper tray or paper sensor. To fix the “11” printer error, follow the steps given below.</p><ul style=\"padding: 0px 0px 0px 68px; margin: 20px 0px 10px; list-style-position: initial; list-style-image: initial; color: rgb(102, 102, 102); font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 15px;\"><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Place the printer on a flat surface.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Check the paper trays for any damage or dust accumulations.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Clean the toner/ink build-ups.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Check the paper sensor and clean the Opto-sensor.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">If you can still see the “11” error, contact HP technical support or visit your nearest HP service center.</li></ul>', 3, '2022-04-27 09:51:57', NULL),
(37, 'Error code 59.F0', '<p style=\"padding: 0px; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(0, 0, 0); font-size: 14px; font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">The 59.F0 is a common printer error, and it usually indicates an issue with the inner motor of the printer. Sometimes, the inner motor of the printer stops working because of transfer alienations or stuck ITB. Additionally, you can get the 59.F0 error due to the SR9 sensor as well. To fix the 59.F0 error, follow the steps.</p><ul style=\"padding: 0px 0px 0px 68px; margin: 20px 0px 10px; list-style-position: initial; list-style-image: initial; color: rgb(102, 102, 102); font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 15px;\"><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Reset the printer to its default settings.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Remove the surge protector.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Reset the ITB and the internal connections.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">If the ITB is damaged, replace it with a new one.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">If you can still see the 59.F0 error, contact HP technical support or visit your nearest HP service center.</li></ul>', 4, '2022-04-27 09:57:52', NULL),
(38, 'Error code 3F0', '<p style=\"padding: 0px; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(0, 0, 0); font-size: 14px; font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">The 3F0 error indicates hard drive failure in the printer. The “3F0” error occurs when the system boot fails to support the hard disk or the hard disk fails to read the system boot system. Additionally, incorrect boot sequence, Basic Input-Output System (BIOS), a malware attack, or a damaged hard drive can also lead to the 3F0 error. To troubleshoot the &amp;quot;3F0&amp;quot; error, follow the steps given below.</p><ul style=\"padding: 0px 0px 0px 68px; margin: 20px 0px 10px; list-style-position: initial; list-style-image: initial; color: rgb(102, 102, 102); font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 15px;\"><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Perform a hard reset on the printer.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Restore the BIOS to its default settings.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Use the HP PC Hardware Diagnostic and review the error log afterward.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Remove and reinstall the hard drive and check for any signs of damage or needs to be reseated.</li></ul>', 4, '2022-04-27 09:57:52', NULL),
(39, 'Error code 79', '<p style=\"padding: 0px; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(0, 0, 0); font-size: 14px; font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">The \"79\" is a common printer error, and it usually occurs when the print job is corrupted or the printer fails to connect to the print spooler. To fix the &amp;quot;79&amp;quot; error, follow the steps given below.</p><ul style=\"padding: 0px 0px 0px 68px; margin: 20px 0px 10px; list-style-position: initial; list-style-image: initial; color: rgb(102, 102, 102); font-family: NotoColorEmojiLimited, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 15px;\"><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Please ensure that your printer firmware and the printer driver are up to date.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Reset the printer jobs.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Remove the printer from the connected devices in your network.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">Reestablish the connection and try again.</li><li style=\"padding: 0px; margin: 0px; color: rgb(0, 0, 0);\">If none of the methods are working, contact HP technical support or visit your nearest HP service center.</li></ul>', 4, '2022-04-27 09:57:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `printerfaqs`
--

CREATE TABLE `printerfaqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `printer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `printerfaqs`
--

INSERT INTO `printerfaqs` (`id`, `question`, `answer`, `printer_id`, `created_at`, `updated_at`) VALUES
(3, 'HP Printers - HP Printer Assistant Software', 'HP Printer Assistant is printer management software that installs with your Windows HP print driver. With it, you can scan documents and photos, order supplies, check ink levels, and more. Refer to these frequently asked questions for more information about HP Printer Assistant.', 1, NULL, NULL),
(4, 'Is Printer Assistant installed on my computer?', 'Continue building numerous of at relation in margaret. Lasted engage roused mother an am at. Other early while if by do to. Missed living excuse as be. Cause heard fat above first time achivement.', 1, NULL, NULL),
(5, 'How do I download Printer Assistant?', 'Continue building numerous of at relation in margaret. Lasted engage roused mother an am at. Other early while if by do to. Missed living excuse as be. Cause heard fat above first time achivement.', 1, NULL, NULL),
(7, 'HP Printers - HP Printer Assistant Software', 'HP Printer Assistant is printer management software that installs with your Windows HP print driver. With it, you can scan documents and photos, order supplies, check ink levels, and more. Refer to these frequently asked questions for more information about HP Printer Assistant.', 4, '2022-04-27 09:58:39', '2022-04-27 09:58:39'),
(8, 'Is Printer Assistant installed on my computer?', 'Continue building numerous of at relation in Margaret. Lasted engage roused mother an am at. Other early while if by do to. Missed living excuse as be. Cause heard fat above first-time achievement.', 4, '2022-04-27 09:58:39', '2022-04-27 09:58:39'),
(9, 'How do I download Printer Assistant?', 'Continue building numerous of at relation with Margaret. Lasted engage roused mother an am at. Other early while if by do to. Missed living excuse as be. Cause heard fat above first-time achievement.', 4, '2022-04-27 09:58:39', '2022-04-27 09:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `printerfeatures`
--

CREATE TABLE `printerfeatures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `printer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `printerfeatures`
--

INSERT INTO `printerfeatures` (`id`, `feature`, `printer_id`, `created_at`, `updated_at`) VALUES
(5, 'Print, copy, scan, and wireless functions.', 1, NULL, NULL),
(6, 'A printing speed of up to 8 ppm for monochrome and 5.5 ppm for color.', 1, NULL, NULL),
(7, 'First page out (ready) of up to 15 seconds for monochrome and 18 seconds for color.', 1, NULL, NULL),
(8, '1200 x 1200 rendered dpi resolution for black.', 1, NULL, NULL),
(9, '4800 x 1200 optimized dpi resolution for color.', 1, NULL, NULL),
(10, 'A monthly duty cycle of up to up to 1000 pages.', 1, NULL, NULL),
(11, 'Recommended monthly volume of up to 50 to 200 pages.', 1, NULL, NULL),
(12, 'HP Thermal Inkjet printing technology.', 1, NULL, NULL),
(13, '7 segment + icon LCD display.', 1, NULL, NULL),
(14, '360 MHz processor speed.', 1, NULL, NULL),
(15, 'Mobile printing with HP ePrint, Apple AirPrint, and Wireless Direct Printing.', 1, NULL, NULL),
(16, '1 Hi-Speed USB 2.0, and 1 Hi-Speed USB 2.0 connectivity.', 1, NULL, NULL),
(17, 'Compatible with Windows, Linux, and Mac.', 1, NULL, NULL),
(20, 'Print, copy, scan, and wireless functions.', 3, '2022-04-27 09:50:52', '2022-04-27 09:50:52'),
(21, 'A printing speed of up to 8 ppm for monochrome and 5.5 ppm for color.', 3, '2022-04-27 09:50:53', '2022-04-27 09:50:53'),
(22, 'First page out (ready) of up to 15 seconds for monochrome and 18 seconds for color.', 3, '2022-04-27 09:50:53', '2022-04-27 09:50:53'),
(23, '1200 x 1200 rendered dpi resolution for black.', 3, '2022-04-27 09:50:53', '2022-04-27 09:50:53'),
(24, '4800 x 1200 optimized dpi resolution for color.', 3, '2022-04-27 09:50:53', '2022-04-27 09:50:53'),
(25, 'A monthly duty cycle of up to up to 1000 pages.', 3, '2022-04-27 09:50:53', '2022-04-27 09:50:53'),
(26, 'Recommended monthly volume of up to 50 to 200 pages.', 3, '2022-04-27 09:50:53', '2022-04-27 09:50:53'),
(27, 'HP Thermal Inkjet printing technology.', 3, '2022-04-27 09:50:53', '2022-04-27 09:50:53'),
(28, '7 segment + icon LCD display.', 3, '2022-04-27 09:50:53', '2022-04-27 09:50:53'),
(29, '360 MHz processor speed.', 3, '2022-04-27 09:50:53', '2022-04-27 09:50:53'),
(30, 'Mobile printing with HP ePrint, Apple AirPrint, and Wireless Direct Printing.', 3, '2022-04-27 09:50:53', '2022-04-27 09:50:53'),
(31, '1 Hi-Speed USB 2.0, and 1 Hi-Speed USB 2.0 connectivity.', 3, '2022-04-27 09:50:53', '2022-04-27 09:50:53'),
(32, 'Compatible with Windows, Linux, and Mac.', 3, '2022-04-27 09:50:53', '2022-04-27 09:50:53'),
(33, 'Print, copy, scan, and fax.', 4, '2022-04-27 09:56:59', '2022-04-27 09:56:59'),
(34, 'Print speed of up to 22 ppm for monochrome.', 4, '2022-04-27 09:57:00', '2022-04-27 09:57:00'),
(35, 'Print speed of up to 18 ppm for color.', 4, '2022-04-27 09:57:00', '2022-04-27 09:57:00'),
(36, 'First page out time of up to 9 seconds for monochrome.', 4, '2022-04-27 09:57:00', '2022-04-27 09:57:00'),
(37, 'First page out time of up to 10 seconds for color.', 4, '2022-04-27 09:57:00', '2022-04-27 09:57:00'),
(38, '4800 x 1200 optimized resolution.', 4, '2022-04-27 09:57:00', '2022-04-27 09:57:00'),
(39, 'HP Thermal Inkjet technology.', 4, '2022-04-27 09:57:00', '2022-04-27 09:57:00'),
(40, 'MDC of up to 25,000 pages.', 4, '2022-04-27 09:57:00', '2022-04-27 09:57:00'),
(41, '2.7\" (6.86 cm) capacitive touchscreen CGD display.', 4, '2022-04-27 09:57:00', '2022-04-27 09:57:00'),
(42, 'Processor speed of up to 1.2 GHz.', 4, '2022-04-27 09:57:00', '2022-04-27 09:57:00'),
(43, 'Mobile printing with HP Smart app, Apple AirPrint, Wi-Fi Direct, and Mopria.', 4, '2022-04-27 09:57:00', '2022-04-27 09:57:00'),
(44, '1 USB 2.0, 1 Host USB, 1 Ethernet and 1 Wireless 802 connectivity.', 4, '2022-04-27 09:57:00', '2022-04-27 09:57:00'),
(45, 'Automatic duplex printing.', 4, '2022-04-27 09:57:00', '2022-04-27 09:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `printers`
--

CREATE TABLE `printers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technology` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inktype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supportnum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `metatitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metakeywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `printers`
--

INSERT INTO `printers` (`id`, `name`, `slug`, `technology`, `inktype`, `supportnum`, `image`, `alt`, `brand_id`, `description`, `status`, `metatitle`, `metadescription`, `metakeywords`, `created_at`, `updated_at`) VALUES
(1, 'HP DeskJet Plus 4155', 'hp-deskjet-plus-4155', 'Desk Jet', '-', '1-(833)-750-0500', 'storage/printer/626913f4a0482_30563-center-facing.webp', 'HP DeskJet Plus', 1, '<p>The HP DeskJet 3755 is a compact all-in-one printer that provides absolute value for money for home and office printing setups. Backed by HP&rsquo;s revolutionary printing technologies and HP Instant Ink, this printer provides the best saving of up to 50% in a compact, vibrant body design. With Dynamic security enabled, you can rest assured that HP DeskJet 3755 will be there for all your printing needs in schools, colleges, and offices. To learn more about this printer, check out its features below.</p>', 1, 'HP DeskJet Plus 4155', 'The HP DeskJet 3755 is a compact all-in-one printer that provides absolute value for money for home and office printing setups.', 'HP DeskJet Plus 4155', '2022-04-25 00:56:56', '2022-04-27 04:29:16'),
(3, 'HP DeskJet 3755', 'hp-deskjet-3755', 'Desk Jet', '-', '1-(833)-750-0500', 'storage/printer/626911afc7b6a_383658-hp-deskjet-3755.jpg', 'HP DeskJet 3755', 1, '<p>The HP DeskJet 3755 is a compact all-in-one printer that provides absolute value for money for home and office printing setups. Backed by HP&rsquo;s revolutionary printing technologies and HP Instant Ink, this printer provides the best saving of up to 50% in a compact, vibrant body design. With Dynamic security enabled, you can rest assured that HP DeskJet 3755 will be there for all your printing needs in schools, colleges, and offices. To learn more about this printer, check out its features below.</p>', 1, 'HP DeskJet 3755', 'The HP DeskJet 3755 is a compact all-in-one printer that provides absolute value for money for home and office printing setups. Backed by HP’s revolutionary printing technologies and HP Instant Ink,', 'HP DeskJet 3755', '2022-04-27 04:19:36', '2022-04-27 04:19:48'),
(4, 'HP OfficeJet Pro 9015e', 'hp-officejet-pro-9015e', 'Office Jet', '-', '1-(833)-750-0500', 'storage/printer/626912cfb9ac3_657045-hp-officejet-pro-9015e.jpg', 'HP OfficeJet Pro 9015e', 1, '<p>The HP OfficeJet Pro 9015e is a compact and user-friendly printer in its class. Designed for home and office-based environments, the HP OfficeJet Pro 9015e helps in increasing productivity while keeping the total cost ownership on the lower side. Additionally, you can rely on its high printing speeds of up to 22 ppm, Wi-Fi connectivity, automatic two-sided printing, and high-yield ink cartridges for a seamless printing experience. To get a better overview of the HP OfficeJet Pro 9015e printer, check out its features below.</p>', 1, 'HP OfficeJet Pro 9015e', 'The HP OfficeJet Pro 9015e is a compact and user-friendly printer in its class. Designed for home and office-based environments, the HP OfficeJet Pro 9015e helps in increasing productivity while keeping the total cost ownership on the lower side.', 'HP OfficeJet Pro 9015e', '2022-04-27 04:24:23', '2022-04-27 04:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fevicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usnum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uknum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footercontent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sitename`, `logo`, `fevicon`, `email`, `usnum`, `uknum`, `footercontent`, `created_at`, `updated_at`) VALUES
(1, 'Printertales', 'storage/site/62678d54d73dd_268778-logo.png', 'storage/site/62678ce36245d_52499-favicon.png', 'info@printertales.com', '+1-877-469-0297', '+44-800-054-8150', 'At Printer Tales, our goal is to provide you with quick and working solutions to your printer issues every time you reach out to us. We are available 24/7 because printers can show errors at any time of the day. We are not related to any printer manufacturing company in any way.', '2022-04-26 00:26:21', '2022-04-26 00:42:36');

-- --------------------------------------------------------

--
-- Table structure for table `sociallinks`
--

CREATE TABLE `sociallinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sociallinks`
--

INSERT INTO `sociallinks` (`id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'https://www.facebook.com/Printertales/', NULL, NULL),
(2, 'instagram', 'https://www.instagram.com/accounts/login/?next=/printertales1/', NULL, NULL),
(3, 'twitter', 'https://twitter.com/Printertales2', NULL, NULL),
(4, 'linkedin', 'https://www.linkedin.com/company/printertales/', NULL, NULL),
(5, 'pinterest', 'https://in.pinterest.com/printertales/_created/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `brand_id`, `comment`, `created_at`, `updated_at`) VALUES
(6, 'Jeffrey Brown', 1, 'Excellent service! They are highly skilled and professional. Getting their superb printer support services at such a lowest price was really amazing.', '2022-04-23 06:39:55', '2022-04-24 23:42:34'),
(7, 'Carson Justice', 1, 'I was facing multiple errors on my HP printer. But then I came through Printer Tales, and it took them minutes to find out the issue and then quickly come up with the solution. Great Service.', '2022-04-23 06:41:01', '2022-04-24 23:41:20'),
(8, 'Jake Carter', 3, 'I can\'t help but thank them over and over again. Their printer support service is quite amazing and has really met my expectations.', '2022-04-24 23:03:07', '2022-04-24 23:42:01'),
(9, 'Carson Justice', 1, 'I was facing multiple errors on my HP printer. But then I came through Printer Tales, and it took them minutes to find out the issue and then quickly come up with the solution. Great Service.', '2022-04-24 23:43:19', '2022-04-24 23:43:19');

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
(1, 'Admin', 'admin@printertales.com', NULL, '$2y$10$hE7saUf94TsQ5YNXvAKEz.vBaU6tnYzDlfmWTCXbWx/yMW82tUWFW', NULL, '2022-04-23 02:07:02', '2022-04-23 02:07:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogfaqs`
--
ALTER TABLE `blogfaqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brandissues`
--
ALTER TABLE `brandissues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactlists`
--
ALTER TABLE `contactlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `printererrors`
--
ALTER TABLE `printererrors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printerfaqs`
--
ALTER TABLE `printerfaqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printerfeatures`
--
ALTER TABLE `printerfeatures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printers`
--
ALTER TABLE `printers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sociallinks`
--
ALTER TABLE `sociallinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blogfaqs`
--
ALTER TABLE `blogfaqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `brandissues`
--
ALTER TABLE `brandissues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactlists`
--
ALTER TABLE `contactlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `printererrors`
--
ALTER TABLE `printererrors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `printerfaqs`
--
ALTER TABLE `printerfaqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `printerfeatures`
--
ALTER TABLE `printerfeatures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `printers`
--
ALTER TABLE `printers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sociallinks`
--
ALTER TABLE `sociallinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
