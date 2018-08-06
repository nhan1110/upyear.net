-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 06:04 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upyear.net`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` bigint(20) NOT NULL,
  `app_id` varchar(200) NOT NULL,
  `app_title` varchar(250) DEFAULT NULL,
  `app_hero_image` varchar(250) DEFAULT NULL,
  `app_author_name` varchar(250) DEFAULT NULL,
  `app_author_url` varchar(250) DEFAULT NULL,
  `app_category_name` varchar(250) DEFAULT NULL,
  `app_category_url` varchar(250) DEFAULT NULL,
  `app_rating` float DEFAULT NULL,
  `app_rating_number` float DEFAULT NULL,
  `app_list_images` text,
  `app_description` text,
  `app_email` varchar(250) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `member_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `app_id`, `app_title`, `app_hero_image`, `app_author_name`, `app_author_url`, `app_category_name`, `app_category_url`, `app_rating`, `app_rating_number`, `app_list_images`, `app_description`, `app_email`, `updated_at`, `member_id`, `created_at`) VALUES
(2, 'com.ea.game.pvz2_row', 'Plants vs. Zombies 2', 'https://lh3.googleusercontent.com/CaiPFM5AfpKQzaJZ_pvTJqIUYmvQQmzKOJtAjc6NhsJOYRNveX9i9rZz8D7ieB0xCaQa=s180', 'ELECTRONIC ARTS', 'https://play.google.com/store/apps/dev?id=6605125519975771237', 'Casual', 'https://play.google.com/store/apps/category/GAME_CASUAL', 4.4, 5600880, 'https://i.ytimg.com/vi/rOaYAwxPXNE/hqdefault.jpg,https://lh3.googleusercontent.com/NdRmiugakoZ-CgyoqeEd7SC9xT_xFIfjY3LtjMifJ9_iKsUdzA5WgBrs2cgoAK3d_CNr=w720-h310,https://lh3.googleusercontent.com/A4POGA0IPwbcaSj5dba5zrn6tUlCiyvu4ppse912kWUzr084-qqgvCT0m-E99RPi228=w720-h310,https://lh3.googleusercontent.com/PeX7REevxeIec-hxFckCJP0xyg88TEzwPh4zz2Prv08d-0UsspP6wcoaBXYJqWzkuQ=w720-h310,https://lh3.googleusercontent.com/YL2_i-PixRM-qYfrZ6CpAqyNiXW_MrIx2KFyg2zZLkdjjosIK5qyPg1dfbyTAC-BdNg=w720-h310,https://lh3.googleusercontent.com/7eLhd7iKWRh79bMXbCcIkOsq5bL5DFIN7jhg9ZKpgmQCCgpz8OoQ2ocUbNOCk3BW6AI=w720-h310,https://lh3.ggpht.com/OQxeSnQrdR5np6T-_ibbOXV582BsI4_HzWiwH09p_IhdTVWNsTREsUIme3GryfQ_uZA=w720-h310,https://lh3.googleusercontent.com/r7aRwC-xe4DlOFSewWVYAfA71Tg4YjTrz2QU9EVmdUQkIAUwI4QAxMSmCR0k6LYJgeLW=w720-h310,https://lh3.googleusercontent.com/xBObLwXQ9JykYCfTSk0x1f8s0yB_Mex6ryQe2jKb5G4s0GZvpKMvC4KWt4jClmJeyxQ=w720-h310,https://lh3.googleusercontent.com/J0_K9XhIZG9CkSF8uAqT34qFZCrCzETix9O9S9Aa5MJgbxBIE6dFlM2PcNocQzSfiUpF=w720-h310,https://lh3.googleusercontent.com/VKQuS6JmItlJ8NvpzYjcX7G-EbWKirBH0oJ_E26pyzl-adNgsclnzJUmNB_nIHrXIAs=w720-h310,https://lh3.googleusercontent.com/qJjwkGEY42x_mhYEDi7v67QVxUVdKwrfM0qPjarkDn8YfrGPtGELtWKxmG53erzMk3k=w720-h310,https://lh3.ggpht.com/BPBKgSE3Va9Pq4R372R9mDiFMHOB6sU8T6YCRc_dMIgkxisg3m1CYTuBDUs-71QHnXXn=w720-h310,https://lh3.googleusercontent.com/JlN36LZqFPkZiDonBxnAC864b_wjZlTK94AEVe7eHNG5WlfHRmx9on_5ijxS0V7yPIU=w720-h310,https://lh3.googleusercontent.com/ol6BCswtvk70o3zTE5-L7X40dmVrGXDoLO1d_n3KTSkEXjja78RUihg0ExGWrrSa7Xzz=w720-h310,https://lh3.googleusercontent.com/AgQqPnJYLbX5BOuJQld3mKZXBZ1JRKIwyscDgpoi4NKpo4SkjVuJvdgu0DzVGa56E34=w720-h310,https://lh3.googleusercontent.com/tlhOeG95rS_DDXicGXAcrvaNCa4gyPiKjS8i1qxRdVzTV9AAsgzQdk_7roUaJhhxJAHQ=w720-h310,https://lh3.googleusercontent.com/4IJXjZRIa-24feu1tzjc_oyYYLVOcpLNzUk45GRbBNHWQUxKKOnYZuuQhJeCAzYqXpY=w720-h310,https://lh3.ggpht.com/z_jnzpWNCsFGly5jPC5-hHwQB-AcFZDdLUNsPROSZGFDwgedD2xrtsBpMOs_X3N3rMA=w720-h310', 'Play the award-winning hit action-strategy adventure where you meet, greet, and defeat legions of hilarious zombies from the dawn of time, to the end of days. Amass an army of amazing plants, supercharge them with Plant Food, and devise the ultimate plan to protect your brain. <br><br>100 Million Downloads – This app has received more than 100 million overall downloads. <br><br>Winner: Best Mobile Game at E3 – Game Informer<br>Winner: Best Mobile Game 2013 – Mashable<br>Winner: Game of the Year 2013 – Slide to Play<br><br>DISCOVER HUNDREDS OF PLANTS AND ZOMBIES<br>Collect your favorite lawn legends, like Sunflower and Peashooter, along with hundreds of other horticultural hotshots, including creative bloomers like Lava Guava and Laser Bean. Go toe-to-missing-toe with a massive array of zombies at every turn, like Jetpack Zombie and Mermaid Imp – you’ll even have to protect your brain from rampant Zombie Chickens! <br><br>GROW POWERFUL PLANTS  <br>Earn Seed Packets as you play and use them to fuel your plants like never before. Power up attacks, double-down defenses, speed up planting time, and even gain entirely new abilities. Boost your plants to ensure those zombies are lawn-gone!<br><br>JOURNEY THROUGH SPACE AND TIME <br>Battle across 11 crazy worlds, from Ancient Egypt to the Far Future, and beyond. With more than 300 levels, ultra-challenging endless zones, fun mini-games, and daily Piñata Party events, there’s always a new challenge to complete. Plus, ready your best defenses – Dr. Zomboss is waiting to take you on at the end of every world! <br><br>EXPLORE MORE WITH THE TRAVEL LOG<br>Stumped about where to go next? Consult your Travel Log to embark on exciting Quests created just for you. Complete Scheduled Quests before time runs out, or take on a series of Epic Quests and earn special rewards.<br><br>Requires acceptance of EA’s Privacy &amp; Cookie Policy and User Agreement.', NULL, '2018-06-26 16:55:07', 1, '2018-06-26 23:55:07'),
(3, 'com.gameloft.android.ANMP.GloftDMHM', 'Minion Rush: Despicable Me Official Game', 'https://lh3.googleusercontent.com/N0dy2nJmocpVQuWxDzk9nwubKtbQWn-IhEAVXhTt60QcQjOdvlO3uUXJHVEzvrTROAg=s180', 'Gameloft', 'https://play.google.com/store/apps/dev?id=6258770168633898802', 'Casual', 'https://play.google.com/store/apps/category/GAME_CASUAL', 4.5, 10161800, 'https://i.ytimg.com/vi/YFIKWQWch_Q/hqdefault.jpg,https://lh3.googleusercontent.com/rURQ1jELDLy6RCR7yLRx7IA47t3_mpDUR66LX_iA_An1Gl-tt83vU8wlybNBsuPKPg=w720-h310,https://lh3.googleusercontent.com/a5PME16fCz0M4JwX2Bft_De_1c8kJEb97X3RDENT-GvvCoCR-WrlEGVNhFl3B-cJ3A=w720-h310,https://lh3.googleusercontent.com/pRs3rp_P_mTy3-wuS7khopq-GEuw3zED6fmFCm-4RYQ4nUZR3p2iOR6r2DFKwjAO=w720-h310,https://lh3.googleusercontent.com/sQKHLjTtvVeAM703vuMTJ7erPcTyhiPCtB-PcUKQvQP0B011MtGlOf5nedrGN_Gu5A=w720-h310,https://lh3.googleusercontent.com/JTEgagGWrF9RQMYumPdJ3OVoxk3ZfjqRk43jZkJ8djktZ89y3U6PijAB_3IqScDk-h1t=w720-h310,https://lh3.ggpht.com/VcUSyIGlDSOvV5EpAyUIFDBLnKCBtfTkFtOQhGBDwaR9XIYfB83wzycUTj-qQ5MMo10=w720-h310,https://lh3.googleusercontent.com/6Cn9bRd0fnptWLDSN4HiD2DzfeVISI0ZQEj-Cp_gx4gOJGW-_ZDKGWQM9NduLyogPQ=w720-h310,https://lh3.googleusercontent.com/IUFZUMUfBSCaEYN7CzRTD6ov7o6HSD6ErGfgrCI3vQUf4igRPynafJT0a8SLs6Azog=w720-h310,https://lh3.googleusercontent.com/U7gqUG_Hum2ujjVHElp2zH-BEqNXhrgY4nc-cq4fFqEe1XM3UFm75XKYI1-7JA7-kxU-=w720-h310,https://lh3.googleusercontent.com/vHdbF7cGs0I7nIsTlP6G8Y7WN7GBLWHV1Pgz45lySmixv6fLF19FIpqCRXtGKIOSzkU=w720-h310,https://lh3.googleusercontent.com/UgySjKPNtfIEiZN-s38hMhNg1UKzlZ3b_tTJxfRSMqcpT0Hu6UjjpLILui9DeBowKro=w720-h310,https://lh3.ggpht.com/8we82TOEyLXA2GpDB7vR9_yQmUY-VsgbkSno1zQ_3vw-VBr5rsAgkUTz4Lgqvq1pN1Y=w720-h310,https://lh3.googleusercontent.com/keGPzEENOnFEVTmaZv52INwHTUvIygJOqJgTD5gQOcuMCzsnWpQ7XiEaY8_7_LPGF-dP=w720-h310,https://lh3.googleusercontent.com/GyGM2tkbfpfaP43sktSrADPsKA9XAWwxAA8fuFo1d7Aa6iOxVMqXEHJBobs99Dn3cw=w720-h310,https://lh3.googleusercontent.com/WIXUrHV749sxNa5XVRiqFblkyEcY1iQ7HTqxwuzs50BqBJHbgDLHWA4HzkNa6RcKqTg=w720-h310,https://lh3.googleusercontent.com/iEmG7nIEd7V6W7gypd39JhUzWc_romreOxMkDV7K88LKgkmaRwIoj5yvC6tgP3EQz_8=w720-h310,https://lh3.googleusercontent.com/PfP_v13JBdFuSHNcHLvaDp6UMu4ehIdHc_sfEq5LJqwFD5t99WnfaZ5B-4Em_DHw5R2V=w720-h310,https://lh3.ggpht.com/c65jai4TvssY9T8DXyKyE5BjhoLIuQE_7rKVsdEQStX3fIbVSMQk0TtwtdWxErQddQ=w720-h310', 'OVER 860 MILLION PLAYERS GLOBALLY!<br><br>Race with the Minions in the award-winning, fan-favorite runner, Minion Rush!<br>Run as fast as you can while jumping, dodging, rolling and knocking Minions off the track in despicably action-packed levels. <br>Rush to collect Bananas and play exciting Special Missions to increase your score as you enjoy unexpected Minion moments.<br><br>ALL THE FUN OF THE DESPICABLE ME MOVIES IN THE OFFICIAL GAME!<br><br>• Race as DAVE, CARL OR JERRY -- and straight out of the Despicable Me 3 movie, MEL!<br>• Wear incredibly UNIQUE COSTUMES, such as Lucy, the Surfer or the Ninja Minion.<br>• Speed through ICONIC LOCATIONS inspired by the Despicable Me movies, like Bratt\'s Lair, the Anti-Villain League and ancient Egyptian temples in The Pyramids.<br>• Power up your Minions by riding the FLUFFY UNICORN or GRU\'S ROCKET.<br>• Play SPECIAL MISSIONS to discover new content and new Costumes in each update!<br>______________________________________________<br><br>You can download and play this game for free. Please be informed that it also allows you to play using virtual currency, which can be acquired as you progress through the game, watching certain advertisements, or by paying with real money. Purchases of virtual currency using real money are performed using a credit card, or other form of payment associated with your account, and are activated when you input your Google Play account password, without the need to re-enter your credit card number or PIN. <br>In-app purchases can be restricted by adjusting the authentication settings within your Play Store settings (Google Play Store Home &gt; Settings &gt; Require authentication for purchases) and setting up a password for each purchase / Every 30 minutes or Never. <br>Disabling password protection may result in unauthorized purchases. We strongly encourage you to keep password protection turned on if you have children or if others could have access to your device.<br>This game contains advertising for Gameloft’s products or some third parties which will redirect you to a third-party site. You can disable your device’s ad identifier being used for interest-based advertising in the settings menu of your device. This option can be found in the Settings app &gt; Accounts (Personal) &gt; Google &gt; Ads (Settings and Privacy) &gt; Opt out of interest-based ads.<br>Certain aspects of this game will require the player to connect to the Internet. <br>______________________________________________<br><br>Find out more about the game on the official site -- http://www.minionrush.com<br>Follow us on Facebook at http://gmlft.co/MinionRush_FB and on Instagram http://gmlft.co/MinionRush_IN<br>Check out our videos and game trailers on http://gmlft.co/MinionRush_YT<br>____________________________________________<br><br>Visit our official site at http://gmlft.co/website_EN<br>Check out the new blog at http://gmlft.co/central<br><br>Don\'t forget to follow us on social media:<br><br>Facebook: http://gmlft.co/DM2Facebook<br>Twitter: http://gmlft.co/SNS_TW_EN<br>Instagram: http://gmlft.co/GL_SNS_IG<br>YouTube: http://gmlft.co/DM2YouTube<br>Forum: http://gmlft.co/DM2_Forum<br><br>Privacy Policy: http://www.gameloft.com/en/privacy-notice<br>Terms of Use: http://www.gameloft.com/en/conditions-of-use<br>End-User License Agreement: http://www.gameloft.com/en/eula', NULL, '2018-06-27 09:04:10', 2, '2018-06-27 15:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pid` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `pid`, `created_at`, `updated_at`) VALUES
(1, 'Art & Design', 'art-design', 0, NULL, NULL),
(2, 'Auto & Vehicles', 'auto-vehicles', 0, NULL, NULL),
(3, 'Beauty', 'beauty', 0, NULL, NULL),
(4, 'Books & Reference', 'books-reference', 0, NULL, NULL),
(5, 'Business', 'business', 0, NULL, NULL),
(6, 'Comics', 'comics', 0, NULL, NULL),
(7, 'Communication', 'communication', 0, NULL, NULL),
(8, 'Dating', 'dating', 0, NULL, NULL),
(9, 'Education', 'education', 0, NULL, NULL),
(10, 'Entertainment', 'entertainment', 0, NULL, NULL),
(11, 'Events', 'events', 0, NULL, NULL),
(12, 'Finance', 'finance', 0, NULL, NULL),
(13, 'Food & Drink', 'food-drink', 0, NULL, NULL),
(14, 'Health & Fitness', 'health-fitness', 0, NULL, NULL),
(15, 'House & Home', 'house-home', 0, NULL, NULL),
(16, 'Libraries & Demo', 'libraries-demo', 0, NULL, NULL),
(17, 'Lifestyle', 'lifestyle', 0, NULL, NULL),
(18, 'Maps & Navigation', 'maps-navigation', 0, NULL, NULL),
(19, 'Medical', 'medical', 0, NULL, NULL),
(20, 'Music & Audio', 'music-audio', 0, NULL, NULL),
(21, 'News & Magazines', 'news-magazines', 0, NULL, NULL),
(22, 'Parenting', 'parenting', 0, NULL, NULL),
(23, 'Personalization', 'personalization', 0, NULL, NULL),
(24, 'Photography', 'photography', 0, NULL, NULL),
(25, 'Productivity', 'productivity', 0, NULL, NULL),
(26, 'Shopping', 'shopping', 0, NULL, NULL),
(27, 'Social', 'social', 0, NULL, NULL),
(28, 'Sports', 'sports', 0, NULL, NULL),
(29, 'Tools', 'tools', 0, NULL, NULL),
(30, 'Travel & Local', 'travel-local', 0, NULL, NULL),
(31, 'Video Players & Editors', 'video-players-editors', 0, NULL, NULL),
(32, 'Wear OS by Google', 'wear-os-by-google', 0, NULL, NULL),
(33, 'Weather', 'weather', 0, NULL, NULL),
(34, 'Games', 'games', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_05_154039_create_categories_table', 1),
(4, '2018_06_05_154834_create_news_table', 1),
(5, '2018_06_05_160129_create_products_table', 1),
(6, '2018_06_05_160202_create_testimonials_table', 1),
(7, '2018_06_05_160225_create_roles_table', 1),
(8, '2018_06_05_160238_create_rules_table', 1),
(9, '2018_06_05_160253_create_modules_table', 1),
(10, '2018_06_05_160343_create_settings_table', 1),
(11, '2018_06_08_143826_create_members_table', 1),
(12, '2018_06_08_144114_create_tracking_members_products_table', 1),
(13, '2018_06_08_150325_create_tracking_products_table', 1),
(14, '2018_06_12_171452_create_user_activations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `module_key` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `hero_image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `focus` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `list_images` text COLLATE utf8_unicode_ci NOT NULL,
  `original_url` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `settings` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tracking_members_products`
--

CREATE TABLE `tracking_members_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `view` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `share` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `rating` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tracking_products`
--

CREATE TABLE `tracking_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `total_view` int(11) NOT NULL,
  `total_share` int(11) NOT NULL,
  `total_comment` int(11) NOT NULL,
  `total_rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_member` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `type_member`, `created_at`, `updated_at`, `verification_token`) VALUES
(2, 'nathan lee', 'nhan1110@gmail.com', '$2y$10$m77pFGelIRHWSXYesBoAB.d.uLYfOXIYm4N9OGaVRQg89fbJstLW.', NULL, NULL, '2018-06-12 10:26:18', '2018-06-12 10:26:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_activations`
--

CREATE TABLE `user_activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `app_id` (`app_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking_members_products`
--
ALTER TABLE `tracking_members_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking_products`
--
ALTER TABLE `tracking_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_activations`
--
ALTER TABLE `user_activations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tracking_members_products`
--
ALTER TABLE `tracking_members_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tracking_products`
--
ALTER TABLE `tracking_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_activations`
--
ALTER TABLE `user_activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
