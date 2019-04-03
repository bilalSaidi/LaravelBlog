-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 04 Avril 2019 à 01:28
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bloglarvel`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'web development', NULL, NULL),
(2, 'back-end web', NULL, NULL),
(3, 'design', NULL, NULL),
(4, 'android', NULL, NULL),
(5, 'art', NULL, NULL),
(6, 'book', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_03_185414_create_posts_table', 1),
(4, '2019_02_03_185747_create_categories_table', 1),
(5, '2019_03_15_170725_create_tags_table', 1),
(6, '2019_03_16_015105_post_tags_creation', 1),
(7, '2019_03_17_161004_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featrued` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `category_id`, `user_id`, `featrued`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'test 1', '<p> test 01  test 01 test 01 test 01 test 01 test 01 test 01 test</p><p> 01 test 01 test 01 test 01 test 01 test 01 test 01 test 01 test 01 </p>', '1', '1', '1553463122brochure-template-design-for-business-presentation-vector.jpg', NULL, '2019-04-23 22:00:00', '2019-04-01 15:36:13'),
(2, 'test 02', '<p> test 02  test 02  test 02  test 02  test 02  test 0</p><p>2  test 02  test 02  test 02  test 02  test 02  test 02  test 02 </p>', '3', '1', '1553462900best-free-online-graphic-design-courses.jpg', NULL, '2019-04-16 03:19:42', '2019-04-01 15:36:26'),
(3, 'test 03', '<p>  test 03 test 03 test 03 test 03 test 03 test 03 test </p><p>03 test 03 test 03 test 03 test 03 test 03 test 03 test 03 </p>', '2', '2', '1553463235maxresdefault.jpg', NULL, '2019-04-15 17:48:28', '2019-04-01 15:32:03'),
(4, 'test 03', '<p> test3test3test3test3test3test3test3test3test3test3test3te</p><p>st3test3test3test3test3test3test3test3test3test3test3test3tes</p><p>t3test3test3test3test3</p>', '4', '1', '155346329420110510-1-1-907x493.jpg', NULL, '2019-04-17 10:31:00', '2019-04-01 15:35:49'),
(5, 'test last', '<p> test last test last  test last test last test last test last test l</p><p>ast test last test last test last test last test last test l</p><p>ast test last test last test last test last test last test </p><p>last test last test last test last test last test last </p>', '5', '2', '1553454749LaAo5wKki6v53NXaCJ9hAEknERUQGXf8aWvk8aG6.png', NULL, '2019-04-17 10:31:00', '2019-04-01 15:32:29'),
(6, 'test 06', '<p> test 06 06 test 06 06 test 06 06 test 06 06 test 06 06 te</p><p>st 06 06 test 06 06 test 06 06 test 06 06 test 06 06 te</p><p>st 06 06 test 06 06 test 06 06 test 06 06 test 06 06 tes</p><p>t 06 06 test 06 06 test 06 06 test 06 06 test 06 0</p><p>6 test 06 06 test 06 06 test 06 06 test 06 06 test </p><p>06 06 test 06 06 test 06 06 test 06 06 test 06 06 </p>', '6', '1', '1553463122brochure-template-design-for-business-presentation-vector.jpg', NULL, '2019-04-17 10:31:00', '2019-04-01 15:37:23'),
(7, 'java', '<p>test author java </p>', '1', '2', '15541351331_nC94XZXcbKJQVF1vhj30nQ.png', NULL, '2019-04-01 14:12:13', '2019-04-01 14:13:38');

-- --------------------------------------------------------

--
-- Structure de la table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `post_tags`
--

INSERT INTO `post_tags` (`id`, `post_id`, `tags_id`, `created_at`, `updated_at`) VALUES
(1, 7, 1, NULL, NULL),
(2, 7, 2, NULL, NULL),
(3, 7, 3, NULL, NULL),
(4, 3, 6, NULL, NULL),
(5, 3, 7, NULL, NULL),
(6, 3, 8, NULL, NULL),
(7, 5, 3, NULL, NULL),
(8, 5, 4, NULL, NULL),
(9, 5, 8, NULL, NULL),
(10, 4, 5, NULL, NULL),
(11, 4, 8, NULL, NULL),
(12, 4, 9, NULL, NULL),
(13, 4, 10, NULL, NULL),
(14, 1, 8, NULL, NULL),
(15, 1, 9, NULL, NULL),
(16, 2, 10, NULL, NULL),
(17, 2, 11, NULL, NULL),
(18, 2, 12, NULL, NULL),
(19, 6, 5, NULL, NULL),
(20, 6, 6, NULL, NULL),
(21, 6, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `BlogName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NameAdminBlog` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `settings`
--

INSERT INTO `settings` (`id`, `BlogName`, `NameAdminBlog`, `email`, `adress`, `created_at`, `updated_at`) VALUES
(1, 'bilal blog', 'bilal', 'bilal.saidibatna@gmail.com', 'Algeria Djezzar Batna', NULL, '2019-04-01 16:18:22');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'php', NULL, NULL),
(2, 'java', NULL, NULL),
(3, 'html', NULL, NULL),
(4, 'css', NULL, NULL),
(5, 'bootstrap', NULL, NULL),
(6, 'canvas', NULL, NULL),
(7, 'photoshop', NULL, NULL),
(8, 'andoird studio', NULL, NULL),
(9, 'neatbeans', NULL, NULL),
(10, 'loopBack', NULL, NULL),
(11, 'react', NULL, NULL),
(12, 'javascript', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `password`, `about_user`, `avatar`, `facebook`, `github`, `twitter`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bilal', 'b.saidi@esi-sba.dz', 1, '$2y$10$Z2ecsrueuGX75NYZ35iF/eud34vooiLBKgLEqblWqm9GNobJATBay', 'speak   a bit about yourself', '155414250929313968_314050029120507_6910055694351728640_n.jpg', 'https://www.facebook.com/bilal.saidi.311', 'https://github.com/bilalSaidi', 'https://twitter.com/bilal79217672', NULL, 'VtO0FMmCP90yCOs34yI2w0u3s4wbNgfzMKUeyL17Cg5azZ3IqogAQfH3bYr6', '2019-04-01 13:51:17', '2019-04-02 12:29:22'),
(2, 'bilal saidi', 'bilal.saidibatna@gmail.com', 0, '$2y$10$uP7FaM.rbWAWIaebBNH3Q.NkdG23gCkKXlJXszjRrRFgmmVAXbyzG', 'speak a bit about yourself', 'default.jpg', NULL, NULL, NULL, NULL, '8Upmb7dm70evJW1if9HQ6yiRTvLE3z8QjRTHik0CbhAsuhwn3IFcyjbHcdSM', '2019-04-01 13:53:31', '2019-04-01 15:29:26');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
