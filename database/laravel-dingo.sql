-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 �?09 �?04 �?17:24
-- 服务器版本: 5.5.47
-- PHP 版本: 5.5.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `laravel-dingo`
--

-- --------------------------------------------------------

--
-- 表的结构 `lessons`
--

CREATE TABLE IF NOT EXISTS `lessons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `free` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- 转存表中的数据 `lessons`
--

INSERT INTO `lessons` (`id`, `title`, `body`, `free`, `created_at`, `updated_at`) VALUES
(1, 'Nihil cumque dolorum ad facilis quod consequatur.', 'Quisquam neque modi in velit. Aut aspernatur deleniti libero amet enim consequatur harum et. Fugit aut eos error facere reiciendis exercitationem.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(2, 'Aut voluptas iusto quis quia rerum.', 'Praesentium accusantium aliquam consequuntur. Eos ut mollitia optio similique et pariatur. Nostrum facere at dolores ut quo. Labore non provident nisi dolores.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(3, 'Veniam nam labore nesciunt nemo porro.', 'Laboriosam ab molestiae quaerat dignissimos explicabo nihil accusantium. Id rerum quos qui ut nihil. Voluptates alias consectetur expedita commodi non qui illum.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(4, 'Distinctio ea rerum ad voluptatem consequuntur quam numquam.', 'Quos excepturi ducimus perspiciatis vitae. Delectus est assumenda perspiciatis repellendus est. Quia aliquam dignissimos non est ea consequatur.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(5, 'Facilis molestiae non esse qui nisi aut.', 'Nostrum tempora unde qui odit. Voluptatibus dignissimos nostrum asperiores asperiores voluptas. Quisquam quis hic in et sit laboriosam sint.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(6, 'Odit quia porro qui nesciunt.', 'A quidem quis nobis consequuntur dolore nihil. Non excepturi dicta esse. Et est quis soluta voluptatem sit eveniet qui. Quo quia et velit sed consequatur qui aliquam ea.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(7, 'Fugit distinctio ab et sapiente iusto.', 'Nobis accusamus et sed voluptates molestiae. Voluptate modi dolore placeat officia nemo ex repellendus. Nisi cumque ipsa nesciunt. Perferendis est ut illo optio placeat quidem perferendis.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(8, 'In commodi omnis voluptas aut autem magnam.', 'Repudiandae est distinctio possimus asperiores distinctio id cum. Id et temporibus laudantium neque dolorum enim. Molestiae voluptatem vitae iure voluptas velit vel. Accusamus totam aut inventore modi delectus quibusdam praesentium.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(9, 'Asperiores a qui vel ipsum.', 'Ea sapiente ad ea nisi rerum. Eveniet minus dolores facilis officia sunt aut. At in eos et nisi.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(10, 'Qui non non minima.', 'Corporis est tenetur ullam quia officiis. Reiciendis enim dolorum maxime provident qui est necessitatibus. Dolores possimus ut quam enim voluptatem.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(11, 'Cum non inventore qui alias voluptates.', 'Molestias doloremque ipsum provident earum aliquid ad rerum. In laboriosam dolore deserunt perferendis tenetur et. Blanditiis neque incidunt quaerat tempora quod non cupiditate. Doloribus in facilis beatae adipisci veniam sint molestiae sit. Harum minima in et mollitia et.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(12, 'Animi sit doloremque quia.', 'Molestiae ipsum neque ut omnis. Optio enim vero aut deleniti illo. Vel alias voluptas maiores est rem sit. Autem qui neque est esse rem. Officiis eos dolorem necessitatibus distinctio.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(13, 'Minus eos in eius ut incidunt blanditiis saepe et.', 'Esse fugit adipisci placeat blanditiis est fuga. Occaecati dolor doloribus delectus. Officiis dolores temporibus illo debitis eligendi. Consequatur qui aut et officia.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(14, 'At quo pariatur adipisci est qui qui.', 'Ut recusandae ea et similique quidem et. Doloremque et similique facilis occaecati. Qui aliquam itaque vitae molestias et accusamus.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(15, 'Occaecati cupiditate similique quod numquam qui.', 'Quia enim beatae inventore eum officiis ut quis sit. Ut modi architecto facere qui nemo consequatur consequatur. Sit in voluptatum quis. Accusamus molestiae occaecati quis tempore.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(16, 'Velit illum numquam unde officia rerum.', 'Architecto esse voluptas cupiditate quia dolores pariatur. Quam est molestias voluptatem eaque laboriosam sit tempora ut. Et explicabo et reprehenderit fugit non dolores sit illum.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(17, 'Veritatis voluptatem corporis hic ut voluptates perferendis.', 'Ut laborum natus accusamus cumque explicabo. Dicta consectetur dicta magnam rerum voluptatem accusantium. Aut exercitationem illum culpa ipsa. Quisquam consequatur impedit quasi temporibus incidunt.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(18, 'Porro omnis laboriosam autem alias.', 'Non eaque placeat nulla necessitatibus voluptatem. Dicta praesentium delectus sequi tenetur amet illo.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(19, 'Rerum perferendis necessitatibus itaque nesciunt repudiandae ratione.', 'Porro nobis impedit temporibus magnam accusamus necessitatibus ea. Saepe ut aliquid vel eligendi. Et commodi culpa asperiores rerum aut odit aut. Error unde quia nesciunt accusantium ut.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(20, 'Dolorem et non dolores nam veniam.', 'Iste dolore voluptas enim voluptatem molestias sequi laudantium. Ut et officia autem eos ab cum aut. Dolorem maiores reiciendis incidunt tempora eos eligendi ut.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(21, 'Voluptates non in ea ipsam.', 'Ut fugiat rerum nobis commodi aperiam voluptatem error. Eum consectetur accusantium similique rerum voluptatum sed. Magnam voluptatem est qui illum sint. Qui aut consequatur sint dolores.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(22, 'Sint assumenda excepturi totam.', 'Corrupti aliquam commodi totam optio. Aliquid commodi tempore rerum eligendi. Animi dolores omnis nam voluptatem.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(23, 'Reprehenderit at commodi aut et.', 'Non eum beatae deleniti. In magnam aspernatur exercitationem reprehenderit. Commodi vero tempora est.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(24, 'Doloremque repellendus non quae autem.', 'Aut aut vel consequatur asperiores perferendis consequatur. Iste magnam deleniti voluptatem eos maiores fugit fuga. Temporibus earum dicta dignissimos recusandae. Consequatur beatae et similique eum dolorem blanditiis optio.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(25, 'Recusandae modi assumenda occaecati ut fugit laborum et.', 'Unde est dolores consequatur quo accusamus. Nam et voluptatem ea eos et. Cumque dolorem qui corrupti dolore at reiciendis.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(26, 'Similique quia in assumenda praesentium vel.', 'Aperiam nihil saepe est. Qui doloribus non deserunt culpa ut officiis. Nobis minima ut culpa ducimus. Ut natus optio tenetur et.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(27, 'Et dolorum id at quia est.', 'Dolores iure fuga ut laborum omnis veniam. Deserunt amet velit cumque velit assumenda. Est beatae amet amet fuga non architecto.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(28, 'Voluptates repudiandae et atque quae nemo distinctio.', 'Qui ipsum voluptatem occaecati eum. In animi quos voluptatem voluptatum qui. Et reprehenderit nam possimus est est nobis. Ullam voluptas in ab temporibus repellendus similique rerum.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(29, 'Possimus error nulla et repudiandae eos aut.', 'Modi aut eveniet facere cumque et. Omnis praesentium culpa nihil qui. Quibusdam est tenetur molestiae sunt exercitationem rerum quia. Molestiae fugit architecto impedit asperiores.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(30, 'Ad quod qui quisquam fugit velit praesentium distinctio.', 'Debitis repudiandae est aut animi consectetur. Eius temporibus aspernatur saepe. Ut atque aut porro accusantium.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(31, 'Illum culpa tempora velit reiciendis quia.', 'Dignissimos qui iusto labore et. Temporibus nulla ut delectus hic eos necessitatibus doloremque. Quae consequatur doloremque maiores eos maxime quo nisi pariatur.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(32, 'Reiciendis incidunt fuga fugiat quo aut magni.', 'Est explicabo cumque unde nesciunt consequatur pariatur. Et officiis adipisci possimus omnis earum non. Ea nesciunt quo qui et. Illum harum enim ut quidem perferendis nesciunt.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(33, 'Magnam ipsum quaerat est quia repellendus maxime ut.', 'Consequuntur et deserunt consequatur molestiae ea quasi quasi. Sed itaque tempora cumque itaque sit id. Voluptatem voluptates nisi voluptatem perspiciatis harum placeat repellendus ullam. Mollitia quisquam dignissimos ut quas odit minima quod.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(34, 'Porro quaerat eveniet eum expedita neque.', 'Nam ut ipsa corrupti aut. Quam commodi debitis nulla quis voluptas ea veritatis. Modi quos rem facilis. Odio temporibus vero eveniet illo voluptas libero voluptatum.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(35, 'A enim asperiores quisquam nobis officia et est.', 'Labore voluptatum aut qui quod beatae et reprehenderit. Impedit minima vitae omnis deleniti laudantium cupiditate impedit. Aut quod omnis sunt non consectetur voluptate. Voluptas et unde aperiam inventore inventore.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(36, 'Veniam perferendis est repudiandae cumque voluptates.', 'Qui distinctio eaque voluptatibus fuga. Praesentium dolor ea labore fugiat et. Animi et mollitia aut ad temporibus aperiam molestiae vel. Animi voluptatem voluptatum sed.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(37, 'Et est illum neque soluta est.', 'Officiis assumenda accusantium earum et. Nisi molestias ratione iusto nulla aliquam reprehenderit. Sunt provident blanditiis ut dolor.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(38, 'Distinctio maiores quis qui non nulla et ad.', 'Et quia dolor rem perspiciatis non quibusdam. Ut autem dicta corporis asperiores labore. Nihil error quia nulla dolore iusto quis unde. Molestiae voluptatibus non corrupti enim asperiores. Deleniti dolor debitis exercitationem magni et in.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(39, 'Voluptatem nam qui qui quia eum ipsam a.', 'Quibusdam similique ullam explicabo quibusdam. Unde maiores est nihil sit libero nisi molestias. Provident architecto dolores voluptas doloribus voluptates.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(40, 'Et culpa dignissimos consequatur sint aperiam.', 'Voluptas ex quia veniam facere aut ullam qui. Ipsa voluptatibus amet eveniet minus sed. Consequatur molestiae ex porro cum.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(41, 'Totam voluptatem sunt commodi fugiat et earum sed reprehenderit.', 'Accusantium aut atque unde ullam expedita. Labore hic provident necessitatibus eos quia fugit. Veniam distinctio reprehenderit tempora voluptas est. Molestiae ex atque et.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(42, 'Aliquid et accusamus est quibusdam.', 'Provident aut ipsa qui id voluptatem rerum nostrum. Quos quaerat ratione fuga et aut hic placeat. Nesciunt laboriosam necessitatibus magni rerum labore.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(43, 'Libero ipsum voluptatem non ut quis id.', 'Dolorem illum cumque voluptatem. Nemo qui consequatur non. Enim eveniet voluptatem tempora iure molestias quia doloribus. Dolore et magnam dignissimos quisquam.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(44, 'Quae aliquam et voluptate.', 'Voluptas qui deserunt et natus laudantium qui voluptatem. Sit molestiae mollitia delectus cum in sed. Error eos dolor qui exercitationem possimus.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(45, 'Veritatis molestias et et quaerat tempora consequuntur suscipit exercitationem.', 'Minima velit sed quas odio neque et corrupti. Eius vitae sequi omnis facilis. Cumque eos deserunt dolorum occaecati ut dolor iste.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(46, 'Ut inventore nemo debitis eveniet.', 'Incidunt omnis sunt voluptatem illo et quasi voluptatem quae. Natus quo perferendis at quam. Ducimus ipsum est nam illum impedit maxime.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(47, 'Facere odio maxime qui qui quis accusantium dicta.', 'Expedita quos tenetur repudiandae sed voluptatibus sunt. Sunt sint ullam eos maxime non fugit rerum. Pariatur enim vitae reprehenderit ut. Officia rerum et porro libero voluptates quis. Similique tempore quas possimus.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(48, 'Rem blanditiis exercitationem perspiciatis eos.', 'Laboriosam adipisci delectus placeat sint. Eveniet in laboriosam rem vel accusantium et. Magni est dolorum laborum ad tempora ab ut non.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(49, 'Accusantium quidem aspernatur placeat quia sed cum cum ut.', 'Sed ipsa quod corrupti repellat aut voluptate officia. Dolorem aut voluptas at adipisci ex eaque dicta sunt. Neque et molestiae voluptates dolor impedit. Suscipit molestiae eum quae voluptatem vel optio quo tempore. Hic deleniti cum quia.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(50, 'Consequatur quia provident aut dolorum non enim voluptatem.', 'Hic dolorem ipsum nam adipisci. Distinctio omnis dignissimos repellat dolorum rerum minima est et. Dolor atque velit quia porro sapiente numquam voluptate. Reprehenderit et consequuntur eum sed sed possimus aspernatur.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(51, 'Et enim voluptas ipsum consequatur voluptatibus repudiandae sed quos.', 'Ex et et provident libero expedita voluptas. Quia quod quae voluptas sequi at qui et laudantium.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(52, 'Libero sapiente quia architecto.', 'Reprehenderit velit eum atque vitae iusto. Quae tempora sequi nostrum ut.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(53, 'Facere occaecati sint veniam pariatur iure.', 'Error ducimus maxime est voluptatem. Consequatur animi quo eligendi. Ullam fuga magnam ullam ut architecto.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(54, 'Aut praesentium nemo architecto sapiente voluptas.', 'Non suscipit corrupti dolorem vitae. Quos quia ab et ut rerum et.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(55, 'Et atque architecto ut.', 'Beatae dignissimos voluptatem deserunt beatae atque sed. Neque debitis et odio ad quis magnam nam quam. Repellendus ut eius perspiciatis voluptate corrupti repellat et. Suscipit rerum architecto qui quos illum.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(56, 'Nobis aliquam aliquid eum adipisci.', 'Eos laudantium hic nulla quia. Illo commodi enim voluptas eligendi. Accusantium quidem sit molestiae et perferendis. Aut eius itaque quibusdam quasi temporibus pariatur nisi.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(57, 'Et nemo et rerum.', 'Quis consequuntur nostrum consequatur mollitia amet quod. Qui dolor excepturi optio. Beatae quidem fugiat nemo ex eos et odit.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(58, 'Nisi at est quia omnis.', 'Illo aliquid voluptas et in autem. Praesentium fuga sit omnis corrupti accusamus enim. Aut et inventore provident fugiat dolor et non consequatur.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(59, 'Ut dolorem nostrum recusandae non.', 'Odio illum commodi repellat. Ut nesciunt vero doloremque sed doloremque. Natus excepturi enim eaque fuga esse. Est omnis ut saepe eveniet ad possimus. Nobis quod ad beatae atque.', 0, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(60, 'Vel odio praesentium tenetur quis voluptatem reiciendis.', 'Nisi praesentium corporis aliquid sapiente cupiditate eos. Quisquam exercitationem ex officiis libero qui. Et numquam hic reprehenderit provident iusto voluptatibus amet natus. Vel dolorem est sunt aliquam sed incidunt molestiae aut. Corrupti voluptas eveniet quisquam aut aut qui.', 1, '2016-08-07 23:12:47', '2016-08-07 23:12:47'),
(61, 'from postman', 'postman body', 0, '2016-08-08 02:02:45', '2016-08-08 02:02:45'),
(62, 'from postman', 'postman body', 0, '2016-08-08 02:02:48', '2016-08-08 02:02:48'),
(63, 'from postman', 'postman body', 0, '2016-08-08 02:03:30', '2016-08-08 02:03:30');

-- --------------------------------------------------------

--
-- 表的结构 `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_08_08_065242_create_lessons_table', 1),
('2016_08_22_193136_create_posts_table', 1),
('2015_01_15_105324_create_roles_table', 2),
('2015_01_15_114412_create_role_user_table', 2),
('2015_01_26_115212_create_permissions_table', 2),
('2015_01_26_115523_create_permission_role_table', 2),
('2015_02_09_132439_create_permission_user_table', 2);

-- --------------------------------------------------------

--
-- 表的结构 `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_slug_unique` (`slug`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `permission_user`
--

CREATE TABLE IF NOT EXISTS `permission_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `permission_user_permission_id_index` (`permission_id`),
  KEY `permission_user_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 5, 'Et facere quis voluptas voluptates.', 'Provident iusto et voluptatum voluptatem enim corporis. Voluptatum sed nisi beatae sit laborum architecto aut sunt. Et sapiente maiores illo quisquam vel quasi facere asperiores.', '2016-08-23 11:42:56', '2016-08-23 11:42:56');

-- --------------------------------------------------------

--
-- 表的结构 `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_index` (`role_id`),
  KEY `role_user_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dmodai', '1846907072@qq.com', '$2y$10$DK1eDiqfelYoxSjDMW/89.2vmqKttiToR9cXJ1fyEItmQ14jo1eJO', '21B7mewZFSO5wS5XqGnuYwgCqnGJSUP0afCE35pI5lZUzBocO30gQdVGolSN', '2016-08-01 16:00:00', '2016-08-15 16:00:00'),
(2, 'test', '2273549343@qq.com', '$2y$10$f27V3tlo73MOzWzrLbdQm.WeacTr2MpJGy/YCnbAfiSVSzZFXmHMa', NULL, '2016-08-08 05:11:57', '2016-08-08 05:11:57'),
(3, 'admin', 'admin@qq.com', '4a56e644153d8c73ac75fb47ac238e54', NULL, '2016-08-08 19:44:15', '2016-08-08 19:44:15'),
(4, 'admin', 'admintest@qq.com', '$2y$10$R82uzmq.roLT6xuahQaA6.fsDImJ4Dc./KLwaQf.JP5.39b0b5BgS', NULL, '2016-08-08 20:25:19', '2016-08-08 20:25:19'),
(5, 'admin', 'admin@ndtest', '$2y$10$pauYCXPl6jRtWqZixb82sO0UnwTOnjwXcnuKtIajE7unDbms0i47u', NULL, '2016-08-09 00:25:12', '2016-08-09 00:25:12'),
(6, 'Mrs. Rosamond Weimann', 'watsica.alycia@example.com', '$2y$10$3Wzxxtb6eE4vUvaOHN0G3eTNA6zxzL2Y5xpfYOwRbctucbE.OoXU2', 'VBBaGxjD35', '2016-08-23 11:40:08', '2016-08-23 11:40:08'),
(7, 'Jessica Wyman', 'marks.damien@example.org', '$2y$10$MAAmrCDOaupS5Bw1E..52.YfW1QkdVpuyIp1F2iVv.knK4rOQKXbm', 'wkQoLy1AMG', '2016-08-23 11:40:12', '2016-08-23 11:40:12'),
(8, 'Macie Kuhlman', 'schinner.trace@example.net', '$2y$10$tR5TfOIn5l9mwn79Ko/9yuatQCvEGpbAGrZ0bwVjD9kwKcuU.nzi6', 'wZeuL9pjHj', '2016-08-23 11:42:56', '2016-08-23 11:42:56');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
