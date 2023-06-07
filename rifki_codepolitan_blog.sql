-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 06:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rifki_codepolitan_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `thumbnail`) VALUES
(1, 'Web Programming', 'web-programming', '2023-06-01 07:37:54', '2023-06-01 07:37:54', NULL),
(2, 'Personal', 'personal', '2023-06-01 07:37:54', '2023-06-01 07:37:54', NULL),
(3, 'Web Design', 'web-design', '2023-06-01 07:37:54', '2023-06-01 07:37:54', NULL),
(6, 'Internet Of Things', 'internet-of-things', '2023-06-02 02:32:18', '2023-06-02 03:37:33', 'category-thumbnail/glBiLz5NbBwgRFGOveiAit0q76jWUa4YVQqt5HNm.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_22_074446_create_posts_table', 1),
(6, '2023_05_23_041118_create_categories_table', 1),
(7, '2023_06_02_035820_add_is_admin_to_users_table', 2),
(8, '2023_06_02_092504_add_thumbnail_to_categories_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `excerpt` text NOT NULL,
  `body` text NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `thumbnail`, `banner`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 'Asperiores distinctio praesentium est.', 'quisquam-assumenda-aspernatur-delectus-quo-est-vero', NULL, NULL, 'Ut fugit et minima in. Error et nihil recusandae et. Alias ipsum ut at dolorum exercitationem. Dolorem provident non illo omnis iste tempore et. Saepe enim qui ratione repudiandae at soluta voluptas ut.', '<p>Quae sint quia facere inventore animi placeat. Nostrum at qui cum consectetur a. Fugiat itaque quia non ut quam quos atque. Officiis voluptatibus a sequi.</p><p>Sint minima ut sed dolore. Reprehenderit error cumque nemo error ratione deleniti. At aut accusamus quod. Expedita saepe saepe non.</p><p>Est eaque harum vero asperiores et. Eius amet magni et doloribus dolorem error aliquam. Qui reprehenderit neque sed iusto aut corrupti.</p><p>Dignissimos illum nesciunt omnis quia. Nam aperiam similique ea reiciendis. Culpa eveniet repellat aliquam libero id omnis. Suscipit at et amet.</p><p>Et quia aut odit ducimus eveniet ut. Sed at sed at sed. Eos itaque omnis quisquam quam libero aut molestiae.</p><p>Et non non est vel exercitationem quidem dolor. Eos nemo aliquid labore ea quos pariatur. Nam recusandae possimus ut in omnis aut harum. Sunt atque perferendis occaecati qui.</p><p>Debitis et tenetur quia quos illo iste. Est ea provident cupiditate voluptas. Aut unde quia et architecto ut ullam accusamus tempore.</p><p>Et modi magni deleniti enim molestiae ut repellendus. Amet ratione qui et non. Magnam quisquam et corrupti qui. Aperiam optio odio quaerat delectus omnis.</p><p>Sequi est vitae dolore sit totam. Aut eaque deleniti rerum non omnis veritatis repellat necessitatibus. Quos consectetur veniam ut ut qui error explicabo. Et iure sit velit animi aut facere sint.</p><p>Omnis praesentium a quos dolorem sit aut quo. Sed dolor doloribus rerum sunt. Explicabo repellat facilis fugiat culpa.</p>', NULL, '2023-06-01 07:37:54', '2023-06-01 07:37:54'),
(2, 3, 1, 'Dolores et quo.', 'quasi-autem-nihil-necessitatibus-fugit-deleniti-omnis-vero', NULL, NULL, 'Sequi perferendis autem ex. Veritatis similique pariatur labore aspernatur perspiciatis ut itaque. Fuga quae autem voluptas et veniam rerum.', '<p>Hic aut et expedita et est placeat voluptate quasi. Aut rerum molestias aliquam. Dolores repellendus provident natus qui laboriosam qui nihil. Est ducimus eligendi exercitationem et ad veritatis earum.</p><p>Cumque magni veritatis est eos est vel laboriosam vel. Id officia adipisci suscipit soluta tempora qui. Aliquam ab autem accusantium neque inventore ex beatae quia. Eligendi reprehenderit aut aperiam ex.</p><p>Quae sed ut qui assumenda fuga nihil rem sapiente. Sint fugiat repudiandae autem reiciendis et. Possimus vero quo nihil nihil autem. Eos sit dolores quis voluptatem ducimus numquam ipsum.</p><p>Qui ut neque nam cum amet velit aut. Ea consequuntur et nemo rerum dicta nemo.</p><p>Est dolorem cumque sapiente quam maiores. Rerum facilis facilis est similique sint repellendus itaque. Reprehenderit qui voluptate asperiores perspiciatis maiores ipsam iusto. Sit natus non laborum placeat harum.</p><p>Non repellendus et rerum laboriosam quo quis. Consequatur consequatur illum harum accusamus unde aliquam. Ipsa at in ratione iusto consequatur.</p><p>Numquam culpa aliquid id inventore quaerat. Inventore officia cupiditate fuga vel facilis totam quia. Quasi aut doloribus vel ducimus et est et nesciunt. Et iste tempore sunt nulla exercitationem vitae.</p><p>Assumenda voluptas beatae modi et inventore. Nihil possimus tempora aut autem magnam voluptatem est. Qui odit provident modi non alias hic.</p><p>Aut molestiae impedit nostrum rem id nemo consequuntur. Illo sequi quia consectetur nostrum. Voluptate aut doloribus eos aliquid sint laborum aspernatur voluptate.</p><p>Animi optio perspiciatis dolorem illo voluptas. Quidem ad non numquam animi qui aliquid. Ab error earum quasi dolorem et.</p>', NULL, '2023-06-01 07:37:55', '2023-06-01 07:37:55'),
(3, 3, 1, 'Iure qui et quaerat porro reiciendis ducimus sunt.', 'suscipit-explicabo-necessitatibus-architecto', NULL, NULL, 'Amet ipsa rem ut sint. Hic repellat deleniti cupiditate repudiandae dolore nulla.', '<p>Doloremque omnis voluptatum quia nostrum ut sapiente quia. Ut non quae voluptatem dolor quibusdam est. Hic praesentium vel consequuntur quidem eligendi vel labore.</p><p>Odio deleniti est veniam veniam libero esse. Saepe repellendus adipisci perferendis. Magni ut placeat voluptas qui vero quod praesentium. Velit quia est eos.</p><p>In sint iste eaque eligendi impedit et maxime excepturi. Consequuntur nulla eius quisquam ex quam ut sint. Et consectetur quis consequatur aliquam.</p><p>Autem omnis mollitia consequatur praesentium fuga dignissimos. Voluptatum quaerat dolore deserunt distinctio. Odio voluptatum iste rerum consectetur aut ratione. Nobis corrupti non reprehenderit dolor aspernatur.</p><p>Possimus omnis recusandae non voluptas. Hic accusamus neque dolores accusantium dolore ea non. Tenetur unde non distinctio quia est.</p><p>Aut enim harum debitis optio. Blanditiis facilis perferendis dolor. Quia dolorum aliquid qui quibusdam rerum sit cum.</p><p>Quia aliquam quia odit. Aspernatur voluptatem necessitatibus aliquid suscipit nesciunt minus qui vero. Et consequatur esse sit ut atque deleniti non. Consequatur soluta nihil earum dolorem assumenda hic.</p><p>Eveniet error et tempore tempora. Optio natus unde unde aut. Enim dolores ut odio consequatur.</p>', NULL, '2023-06-01 07:37:55', '2023-06-01 07:37:55'),
(4, 1, 2, 'Perferendis veniam enim quas magnam incidunt.', 'suscipit-odit-blanditiis-sapiente-iure-modi-quo-libero', NULL, NULL, 'Dolore accusamus eum modi facere saepe asperiores quod modi. Reiciendis in veritatis enim sit. Consequatur nobis qui quis voluptates similique. Dignissimos impedit ea soluta soluta ut. Eveniet omnis earum nam libero.', '<p>Ut id doloremque dolores sint non magni molestiae. Et nam odit explicabo exercitationem eligendi necessitatibus et. Repellendus atque earum ipsa earum dolor ullam ducimus. Corrupti fugiat dolorem tempora.</p><p>Molestiae mollitia impedit magni illum architecto ut ratione. Quod architecto voluptatem dignissimos ut nobis molestiae facilis. Delectus vitae nihil dolor accusantium.</p><p>Est eum dolor accusantium dolores odio nisi quis. Id numquam in et hic laboriosam. Dignissimos quidem magnam eius.</p><p>Quam alias porro quae laboriosam minus. Rem ut expedita nostrum omnis. Consectetur dicta qui aperiam magni unde.</p><p>Atque explicabo magni ea voluptatem. Cum quam neque corporis. Quis rerum quia vero et. Laborum voluptatem et vitae ipsam.</p>', NULL, '2023-06-01 07:37:55', '2023-06-01 07:37:55'),
(5, 1, 1, 'Veniam sunt labore velit.', 'aliquid-labore-velit-nulla-rerum', NULL, NULL, 'Earum molestiae recusandae est labore. Incidunt est quia quis et occaecati sapiente et. Quod vel eligendi laudantium soluta autem enim.', '<p>Vero illum accusamus eligendi occaecati ratione harum unde. Rerum culpa ducimus dolores ipsam. Quae porro voluptates excepturi numquam quis est. Error aut provident ut repellendus enim aut.</p><p>Sed repudiandae ut dolores omnis repellat excepturi voluptatem. Ab eos velit rerum et omnis quis exercitationem ut.</p><p>Deserunt omnis tempore voluptatem amet. Dolorem in consequatur illo reprehenderit dignissimos minus explicabo. A recusandae et earum quis id.</p><p>Exercitationem provident dolor illo debitis. Eos occaecati magnam sint quasi et. Aspernatur itaque id facilis dolorem illum accusamus ea quis.</p><p>Expedita nesciunt facilis numquam nulla. Sunt ipsa ipsa dolorem voluptatem necessitatibus. Perspiciatis nisi consequuntur assumenda omnis molestiae.</p><p>Expedita deleniti voluptatem in sit ut suscipit. Quis perferendis maiores omnis consequatur. Eum qui excepturi delectus nihil. Quo nihil enim ea aut omnis.</p><p>Architecto aliquam modi natus maxime rem voluptatibus. Alias aut repudiandae totam quidem totam. Ut tenetur earum et eligendi dolores qui molestias.</p><p>Ut explicabo nostrum repellat. Rerum sint est qui eos sunt et asperiores.</p>', NULL, '2023-06-01 07:37:55', '2023-06-01 07:37:55'),
(6, 3, 1, 'Asperiores delectus ipsam ut autem aut possimus.', 'sit-sint-totam-non-sed-sed-accusantium', NULL, NULL, 'Et voluptatem corporis minus dignissimos iusto. Quia fugit earum tenetur animi aut. Quasi assumenda velit tempora recusandae voluptas perferendis sit.', '<p>Id rerum aut aut expedita aut. Aliquam a consequatur est officia. Officiis illum et aut ea.</p><p>Odit ea deserunt error in voluptas est soluta. Eaque consequatur veniam eaque aperiam. Id architecto excepturi nam et voluptatum. Et et deserunt eius et sapiente.</p><p>Est labore quidem autem tenetur. A atque quis animi et rerum tempore quos. Dolorem quia sunt amet odit at eveniet qui.</p><p>Laudantium a explicabo non provident. Adipisci eveniet expedita ratione aliquam quos praesentium quo et. Eum ea corrupti numquam architecto quia sed ipsum. Commodi sed qui praesentium veniam consequatur sed.</p><p>Repellendus id illo ipsa eveniet rerum natus autem. Et vero cupiditate nemo voluptatem beatae voluptatem ea. Quia quasi modi deserunt nisi expedita tenetur voluptatum. Laborum ut voluptates consequatur.</p><p>Et autem est accusantium voluptatem enim nesciunt. Itaque laudantium iusto id.</p><p>Voluptatem excepturi blanditiis rem debitis deleniti animi velit. Et reiciendis omnis laborum ipsam. Iure est cum harum eos corporis deleniti. Adipisci atque dicta in.</p><p>Vel dignissimos rerum nihil reprehenderit rerum qui et. Fugit in ut enim voluptatibus quod quis. Ut sunt temporibus est aut fugiat praesentium.</p><p>Rerum saepe fugit unde vel. Maxime omnis soluta temporibus reiciendis. Cupiditate molestiae impedit omnis quas veritatis exercitationem. Vel quidem alias aspernatur nostrum blanditiis ullam.</p>', NULL, '2023-06-01 07:37:55', '2023-06-01 07:37:55'),
(8, 1, 2, 'A temporibus nulla sit aperiam qui et.', 'itaque-pariatur-consequatur-assumenda-dolor-et', NULL, NULL, 'Ut hic doloribus dolorem. Atque harum labore perspiciatis vel cupiditate ducimus. Facere sunt cumque deleniti cupiditate veniam id cum. Ut dignissimos ut qui at corporis maiores maiores totam.', '<p>Officiis et nihil ipsum. Non ullam pariatur id a consequatur. Voluptatum ut non amet in. Tenetur sed maxime culpa.</p><p>Earum veritatis eius ad et maiores. Blanditiis nisi sint ducimus voluptatem totam nobis. Mollitia sunt ullam eum tenetur.</p><p>Eum voluptatem at sunt architecto dolorem. Et eligendi nobis facilis iure. Quia deserunt impedit earum quidem suscipit odio.</p><p>Eligendi assumenda tempore quo sit maxime ratione. Quas facere vel quam qui omnis eius. Dolorem magnam assumenda totam optio consectetur. Est autem sequi qui est sit id voluptatem.</p><p>Est ut doloremque voluptatem aut qui quo voluptatem delectus. Sint nulla nam et eos aliquam. Iure assumenda cupiditate est est.</p><p>Recusandae eligendi quos aliquid. Alias et provident et et ullam. Sed sunt id id iusto officiis.</p><p>Dolore error maiores dignissimos quam facere. Facilis dicta eum vero nam harum similique illo. Omnis iure ad sapiente ut doloremque nihil neque.</p>', NULL, '2023-06-01 07:37:55', '2023-06-01 07:37:55'),
(9, 2, 1, 'Sit et ea excepturi laudantium facilis minima ipsam in.', 'dolorem-deserunt-ab-est-reiciendis-eius-laborum', NULL, NULL, 'Nihil quia cum blanditiis consequatur. Expedita dolorem error illum ipsam amet reprehenderit. Omnis omnis laboriosam sint. Tempora sed quas animi ut.', '<p>Consequatur tempora eveniet dolorum a nulla. Enim excepturi architecto eaque quia voluptate fugit. Error officiis sed assumenda eum. Ad facere quis ut voluptatem magnam.</p><p>Voluptate deleniti fuga quasi. Libero officiis quibusdam nisi corrupti. Deserunt hic modi facere id maxime. Nobis facilis adipisci molestias quia ex.</p><p>Reiciendis voluptatibus labore officia aut optio. In voluptas labore voluptatem vitae velit. Minus autem labore voluptates sequi aut debitis.</p><p>Optio nihil molestias voluptatem nobis consequuntur. Voluptatem aut soluta accusamus ea ipsam odit facere aliquam. Eum ab voluptatibus dolores illum sit consequuntur facere. Voluptate consequatur officiis qui nulla cum excepturi magni.</p><p>Eveniet accusamus suscipit debitis perspiciatis et cupiditate. Voluptas quae delectus harum molestiae officiis velit amet et. Odit sequi odio ex illum quia et sit.</p>', NULL, '2023-06-01 07:37:55', '2023-06-01 07:37:55'),
(11, 3, 1, 'Facere labore architecto enim.', 'sed-quia-vel-consequatur-eum-doloremque-ullam-tenetur-aperiam', NULL, NULL, 'Tenetur provident maiores blanditiis quis pariatur ut. Voluptatum ut ex ea nesciunt. Blanditiis adipisci minus officiis itaque est fugit aut.', '<p>Saepe quo quam aliquam eaque provident voluptas. Soluta quasi sunt blanditiis cum minima asperiores dolorum. Repellendus aspernatur quo nulla eum et autem. Ut rerum earum voluptatem quo. Voluptas molestias vel molestias vel maxime voluptas aliquam.</p><p>Sunt voluptatem dolor dolorum et impedit hic iure. Et in in et iure omnis. Ut iure ut laboriosam.</p><p>Sunt consequatur non eaque placeat. Corrupti est amet molestiae a. Vel et quos sed voluptatibus mollitia molestiae.</p><p>Voluptatem et nobis voluptates corrupti vel laudantium. Error quod corrupti architecto expedita. Velit vel natus officia quod enim accusantium quis quae.</p><p>Voluptatum exercitationem asperiores temporibus nam quo. Aut ab distinctio fuga. Nemo maiores accusamus et doloremque ut eveniet aliquam et.</p><p>Beatae aut dolores unde dolores est. Ipsam fugit pariatur ratione. Qui nihil consequatur beatae corrupti sequi consequatur. Quasi voluptates qui odio rerum quasi et.</p><p>Dolorem placeat velit aliquid beatae eum omnis. Et voluptatem at quos voluptas vero sequi debitis. Sequi mollitia dolores animi itaque sed ducimus eos possimus. Enim ut quaerat distinctio.</p><p>Dolor voluptate doloribus distinctio incidunt velit iusto qui. Alias commodi autem voluptas qui voluptatem optio dolor expedita. Rerum vero est magnam itaque dolores corrupti.</p>', NULL, '2023-06-01 07:37:55', '2023-06-01 07:37:55'),
(12, 1, 1, 'Doloribus eos quia odio fuga nihil maiores corrupti voluptatibus.', 'in-explicabo-rerum-velit-veritatis-rem', NULL, NULL, 'Sunt repudiandae quo incidunt eligendi consequatur est fugiat. Praesentium veritatis non impedit reiciendis magnam. Consequuntur saepe voluptate laudantium. Consectetur sunt placeat aut eum veniam.', '<p>Atque incidunt dolor earum. Accusantium molestiae veniam nesciunt minima enim a repellendus. Porro nostrum sequi eligendi voluptas sunt. Eos incidunt eius totam laboriosam.</p><p>Nostrum dolor sit expedita odit illum. Sit et debitis ut est rerum officia.</p><p>Voluptas qui et veritatis eius. Qui ipsam dignissimos maxime quaerat laudantium ad expedita. Eos voluptatem odit inventore saepe vel.</p><p>Atque similique nobis aut accusamus qui. Consequatur officia provident aut.</p><p>Et soluta qui perspiciatis. Voluptatem facilis aut vitae quaerat fugiat qui rerum. Consequatur atque cumque fuga sit eligendi.</p><p>Ab aut omnis possimus fuga fuga sed. Et cumque at enim quis et modi. Voluptatem quam quia repudiandae et.</p><p>Ut qui repellendus sint recusandae mollitia recusandae et quae. Vel corrupti aperiam modi aut cumque. Minus iusto doloribus quo saepe unde ratione earum. Assumenda qui at beatae atque repellat. Consequatur distinctio optio impedit.</p><p>Occaecati aut maiores corrupti similique perferendis. Excepturi ut optio eligendi velit. Mollitia qui necessitatibus eos soluta qui dolorem consequuntur.</p><p>Tempora rerum omnis autem nemo vitae. Similique dolor nobis unde asperiores amet.</p>', NULL, '2023-06-01 07:37:56', '2023-06-01 07:37:56'),
(13, 3, 1, 'Eius quibusdam quidem omnis corrupti doloremque totam id eum.', 'quia-est-repellendus-odit-quia-autem-consequatur', NULL, NULL, 'Voluptatibus mollitia veniam quae aut dignissimos ut sint. Sed optio consequatur vel. Voluptatem sit accusantium placeat est quasi voluptatem voluptas. Voluptates dolore adipisci aut aut dolore laboriosam. Eius nostrum quia amet debitis.', '<p>Vero eligendi et omnis ea ut iure. Laudantium sed omnis occaecati quis autem et. Consectetur odio necessitatibus eos perspiciatis.</p><p>Fugiat et delectus ex magni. Perferendis quaerat sit nemo sit. Porro debitis magni voluptas reiciendis magni.</p><p>Sed fuga distinctio aliquid saepe possimus voluptates velit. Pariatur consequatur magnam dolorem delectus. Facere voluptatem accusamus voluptas sit eius ipsum molestiae itaque.</p><p>Corrupti aut nam atque pariatur porro molestias. Ducimus dolores vero rerum dolore repellat quidem eos cumque. Ab amet veniam quibusdam est deleniti ea autem.</p><p>Doloribus ipsam sapiente autem enim illum vel blanditiis fuga. Quod inventore qui porro cupiditate minus fuga aut. Earum sunt est qui architecto assumenda mollitia.</p><p>Voluptas a repellendus iste molestiae. Dolore illo quaerat libero soluta tenetur quia quia dolorum. Eligendi iure debitis odit quia assumenda doloremque veritatis.</p>', NULL, '2023-06-01 07:37:56', '2023-06-01 07:37:56'),
(14, 3, 1, 'Quaerat sapiente tempora laudantium ut officiis.', 'nostrum-adipisci-quasi-non-omnis-quod', NULL, NULL, 'Omnis quia omnis voluptas velit. Ipsam incidunt sapiente quia reiciendis. Ea quibusdam possimus consequatur.', '<p>Ducimus quaerat suscipit rem aliquid officiis unde. Enim dolor vel vitae facilis. Esse dicta ut qui voluptas voluptatem dignissimos. Saepe cumque cum fuga quo cupiditate qui.</p><p>Facere asperiores eos quasi placeat. Ea est molestiae ut quidem. Delectus iusto repudiandae voluptates assumenda excepturi.</p><p>Ut dolorum id et nesciunt. Nobis architecto laboriosam officiis. Veritatis dolor nemo corrupti. Corporis et facilis a iusto adipisci.</p><p>Vitae accusantium expedita rerum ullam. Facilis qui eveniet et. Rem nemo soluta excepturi accusantium.</p><p>Quaerat aperiam iure porro ratione labore. Reprehenderit voluptas alias perspiciatis pariatur eos dolorem neque. Sed illum corrupti dolor ut culpa. Possimus et hic reprehenderit nesciunt.</p><p>Fugiat aut voluptate laudantium. Aut vero dolores voluptatum vero et et. Dolore nemo consequatur porro corporis recusandae in sunt. Sit minus placeat et aspernatur eveniet qui blanditiis.</p>', NULL, '2023-06-01 07:37:56', '2023-06-01 07:37:56'),
(15, 3, 2, 'Ex ad nihil error qui totam sapiente.', 'tenetur-aut-earum-placeat-excepturi-quia-quod-nihil', NULL, NULL, 'Aut commodi quod atque vitae quia officiis inventore. In autem pariatur enim excepturi adipisci tempore. Enim assumenda consequatur nesciunt non minus.', '<p>Consequuntur ex quo veniam cum fugiat voluptates. Quis rerum molestiae voluptatibus rerum quas. Itaque minus placeat enim.</p><p>Quam ut magni quia ut eaque. Qui soluta labore natus maxime. Voluptates ut perferendis qui modi repudiandae aut iusto. Quae facere veritatis minus et debitis est consequuntur voluptas.</p><p>Est quod qui autem dolor alias at. Culpa molestias eveniet a rerum sint sed.</p><p>Autem impedit voluptatem ratione. Debitis voluptatem minima fugiat quasi. Dolores illo est sed consequatur veniam fuga. Ab quas quasi aut placeat.</p><p>Dolores et illo totam voluptatibus sint temporibus illo. Eum molestiae quos officia. Aperiam laboriosam cumque modi rerum.</p><p>Corporis deleniti quia labore voluptatem distinctio autem. Nihil aut eius et voluptatibus facere minima. Reprehenderit delectus rem omnis et fugit voluptatem.</p><p>Nostrum laboriosam et possimus odio suscipit. Quo quam cumque architecto occaecati ipsam. Et est qui nobis velit a sint impedit.</p><p>Assumenda sed repellat voluptate impedit sed. Nesciunt mollitia delectus sed et. In dolore dicta atque.</p><p>Corporis delectus ex quidem in. Ut facere et ut omnis.</p><p>Delectus veritatis enim saepe mollitia odio est. Suscipit aliquam fugit aut voluptas deleniti ducimus sint voluptatem. Incidunt recusandae mollitia et accusantium. Harum et voluptate adipisci velit.</p>', NULL, '2023-06-01 07:37:56', '2023-06-01 07:37:56'),
(16, 2, 2, 'Porro exercitationem non at adipisci sed et non ab.', 'veniam-odit-commodi-est-quas-harum-labore-praesentium', NULL, NULL, 'Deleniti velit molestiae velit illum facilis est. Voluptatem quo aperiam nostrum.', '<p>Omnis id incidunt dolore vero et ut id. Excepturi officiis enim et fuga est architecto quis unde. Beatae velit omnis dolorem et. Eos fuga illum ab ut dolorem.</p><p>Assumenda porro quisquam non voluptatem voluptate qui. Recusandae sequi dolores a sed velit rerum tempora. Iusto rerum consequatur cupiditate ab.</p><p>Officiis ea velit ut ducimus animi adipisci temporibus et. In et incidunt qui ut velit recusandae. Aut aliquid modi sit ab dolor reiciendis natus non. Consequatur qui corrupti corporis et non vel quam.</p><p>Atque rerum eos est ut delectus. Dolor voluptatum debitis voluptates eos in est. Recusandae dolor suscipit officiis tenetur excepturi. Totam sint eveniet numquam quia laboriosam.</p><p>Sint rem numquam nulla illum dolore totam est neque. Officia et laborum perferendis commodi debitis. Placeat modi dolores sint dolorem. Enim voluptate nihil eaque veniam.</p><p>Quo placeat et veritatis reiciendis aspernatur ratione. Ipsum soluta qui et enim et quia illum. Possimus mollitia repudiandae mollitia saepe assumenda voluptatem est. Occaecati in omnis aliquid consequuntur.</p><p>Et omnis id minus nulla. Voluptas id et natus. Rerum in beatae laborum et et qui. Qui omnis ad est quas.</p><p>Ex ratione consequatur consequatur nihil quam consequatur quidem necessitatibus. Facilis expedita necessitatibus iure voluptates culpa ut. Deserunt autem ducimus placeat velit non. Velit reiciendis exercitationem consequatur dolorem incidunt quae iure.</p>', NULL, '2023-06-01 07:37:56', '2023-06-01 07:37:56'),
(17, 1, 2, 'Perferendis sequi ad repellat blanditiis.', 'qui-quam-cum-at-illum', NULL, NULL, 'Cum aspernatur sunt blanditiis magni voluptatem. Necessitatibus ratione sint suscipit vero veniam provident sed.', '<p>Placeat enim consequatur est velit perspiciatis. Libero accusantium est autem exercitationem officia occaecati. Repudiandae rerum quo nihil quis quae autem tempora et. Autem harum reprehenderit similique consequatur omnis quae natus.</p><p>At sed sed quasi vel nisi. Quidem rerum optio aut mollitia porro culpa. Maiores sit quibusdam maxime omnis.</p><p>Molestias inventore beatae qui quia pariatur aut. Est quos perferendis eos dolore dolorem odio. Voluptatum officia ullam mollitia culpa quidem. Aut ea voluptate repellat quisquam accusantium reiciendis. Molestiae id aperiam accusantium atque aliquid dolorem.</p><p>Eligendi omnis laudantium perferendis. Dolor cupiditate qui omnis soluta rerum reprehenderit. Hic qui eius quis quas. Sint ratione blanditiis velit.</p><p>Nesciunt inventore deserunt quia rerum. Quis et numquam fugiat dolorem culpa. Eveniet praesentium eos doloribus. Iure sed accusantium sint et.</p><p>Est alias quia quod maxime sed neque quaerat libero. In eveniet quidem culpa. Suscipit sint nisi id dicta. Dolor reiciendis omnis dolore assumenda minima est.</p>', NULL, '2023-06-01 07:37:56', '2023-06-01 07:37:56'),
(18, 2, 2, 'Aut laborum fugit deserunt sunt numquam ratione ea sint perferendis.', 'accusantium-reprehenderit-non-nostrum-labore-sint-explicabo-animi-eum', NULL, NULL, 'Assumenda odit blanditiis facilis aut. Aut quam laudantium aspernatur et. Id molestias odit maxime officia eum adipisci. Expedita dolores veritatis occaecati voluptates voluptatum corporis quisquam. Optio maxime saepe ut et recusandae.', '<p>Voluptatem fugiat assumenda sapiente aliquid omnis corporis qui. Reprehenderit totam beatae aut magnam neque et rerum. Dolores rem quaerat incidunt libero sit id occaecati.</p><p>Nisi ipsam aut rerum voluptatem beatae sit. Adipisci ea nisi nulla aperiam aperiam ipsa. Unde porro earum consequuntur exercitationem.</p><p>Incidunt quo sapiente suscipit. Incidunt voluptas perferendis ut maxime dolorem et.</p><p>Dolorem ea quo dolorem. Rerum doloremque fuga dolorum eius accusamus iste. Animi aperiam rerum soluta eos. Sed ab aliquam illo nihil quia dolor.</p><p>Sed sit est sit autem est unde. Officiis temporibus fuga velit perspiciatis est. Veritatis iure sunt nesciunt quia enim delectus animi repudiandae.</p><p>Omnis voluptates minima sit quas. Id repellat et non non ad et. Sapiente adipisci qui quia facilis odio vero placeat consequatur. Eos fugiat aut ipsum non nobis in et. Velit sint et ipsum.</p><p>Quas qui occaecati id veniam. Possimus impedit velit modi. Alias sit dolor dolores et tempore.</p><p>Nisi aut placeat quo. Tenetur voluptate odio velit. Dolorum animi eveniet repudiandae sit nihil nobis sit. Asperiores quo porro qui aut quia illum.</p><p>Repellendus autem consequatur reiciendis odit est commodi nisi. Illum ea sit mollitia molestiae. Dolor porro voluptatem sit odio perspiciatis qui. Dolor dolor voluptatem quis assumenda aliquam.</p>', NULL, '2023-06-01 07:37:56', '2023-06-01 07:37:56'),
(19, 3, 2, 'Officiis ab rerum voluptates nulla sit sed adipisci commodi animi ea.', 'hic-distinctio-quisquam-perspiciatis-assumenda-dolor', NULL, NULL, 'Suscipit non in distinctio. Optio placeat qui culpa ut et eligendi quis. Ut dolorum deserunt porro ea.', '<p>Enim sapiente sequi enim delectus enim pariatur. Laboriosam vero magni quis quisquam vel quia. Vero aut at eos nulla quis. Et blanditiis inventore reprehenderit at enim nihil alias itaque. Fugiat eius quaerat sunt consequatur assumenda ut non aspernatur.</p><p>Aliquam at eius sunt dolorem aut optio. Quia repellat a labore iusto itaque omnis aut. Ea dolorem doloremque odit adipisci aliquam consequuntur alias.</p><p>Et perspiciatis culpa esse amet. Molestias maxime dolorem sint. Voluptatem aperiam est vitae non veritatis sed quae.</p><p>Ratione commodi necessitatibus at perspiciatis eum. Aperiam fugiat odio qui ut possimus. Quasi fugit fugit enim voluptatem quis. Sit commodi voluptas molestiae cum est.</p><p>Quis voluptatem molestiae minus harum animi cumque velit. Quas voluptas at officiis ad enim. Suscipit sit incidunt et similique omnis illum. Qui ipsam magni ex ipsum.</p>', NULL, '2023-06-01 07:37:56', '2023-06-01 07:37:56'),
(20, 1, 1, 'Perferendis aut ut.', 'et-aut-voluptatem-nisi', NULL, NULL, 'Corporis nihil ea porro omnis dolorem reprehenderit nesciunt. Ut sit dolore dolor impedit sed qui qui dolor. Voluptate quia eius vitae deserunt.', '<p>Quae est inventore magni id. Adipisci beatae eum eius alias beatae non. Commodi a est tenetur qui hic.</p><p>Dignissimos consequatur quo sequi aspernatur. Et eligendi ipsam autem id. Non a quia autem quibusdam sint error. Et suscipit itaque fuga dolores laboriosam et.</p><p>Distinctio veniam quos omnis et. Nostrum animi aut rem dolor nihil ipsa. Sed sed mollitia ab error. Quia aut quis aperiam.</p><p>Vero sint exercitationem enim laboriosam. Maiores quam reprehenderit impedit vero. Quo ad ut ut aliquam. Mollitia adipisci aspernatur et occaecati et magni fuga.</p><p>Omnis dolores harum molestias eaque odit aperiam. Quo expedita ab blanditiis voluptatem. Et aliquam nemo qui sapiente id laborum maiores. Autem eum ut culpa qui et commodi.</p><p>Similique modi occaecati sed. Eos officiis enim in in omnis animi. Qui nulla ullam est rerum earum.</p><p>Laudantium deserunt officiis tempore eligendi enim hic. Veniam distinctio autem mollitia inventore ipsa error modi. Porro minus consectetur labore rerum aut mollitia.</p><p>Eos nihil neque nam adipisci voluptates laudantium. Praesentium qui numquam in est eos velit.</p><p>Eveniet eum est et autem. Quia ducimus porro perferendis nihil excepturi labore.</p><p>Aut exercitationem aut et placeat. Eius nam expedita ut placeat modi et. Voluptatem et ipsam aut. Nihil eos minima nam est et necessitatibus repudiandae.</p>', NULL, '2023-06-01 07:37:56', '2023-06-01 07:37:56'),
(25, 6, 1, 'Coba Post 1', 'coba-post-1', 'post-thumbnail/YjOHdykTPEVoOWCyThxfbxREGBbsSuel8NLCuqnc.jpg', 'post-banner/M65g3jtygM60iTa8QCyoG95LX4lvNbmoFdXF36aX.jpg', 'Coba 1', '<div>Coba 1</div>', NULL, '2023-06-02 03:36:13', '2023-06-02 03:38:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'muhammadrifki', 'Muhammad Rifki', 'immuhammadrifki@gmail.com', NULL, '$2y$10$mS9QUDtMrH6.5eEgS0UTDedFzsxyF4nDtEdmlUzTl1MpDdeUkeJQq', NULL, '2023-06-01 07:37:52', '2023-06-01 07:37:52', 1),
(2, 'maimunah97', 'Tugiman Siregar', 'opratiwi@gmail.com', '2023-06-01 07:37:53', '$2y$10$GPJv7DoaJiQ1L444wTtrT.bKbI1mJP6qA3jCzGCMi0ygIarbMldte', 'gXz5xtKtRnOfonz0WZ3V2tXVweB1U8axKiwlDAaCC45hKDtpioP6CPzDw4ti', '2023-06-01 07:37:54', '2023-06-01 07:37:54', 1),
(3, 'raina88', 'Kania Puspita', 'gasti83@example.org', '2023-06-01 07:37:53', '$2y$10$7pxVO8v0HlaAWvVnkra5Aus.H3CMBu3smnvl1O6lDPVD.p8Vj/jUG', 'vM0P72DfIT', '2023-06-01 07:37:54', '2023-06-01 07:37:54', 0),
(4, 'fusada', 'Maryadi Caturangga Wijaya S.Farm', 'hariyah.kardi@example.net', '2023-06-01 07:37:54', '$2y$10$u1/rWlOSA8GgnVPjmRviIuhxAI8byvX9RuJWEo1WKbw3Z/kJ8zyp2', 'xv8HqQsFyZuFprYlJevjKWd0CjcA5oxH5VzkXL73pzGMnXQCSdPrX9bJBR4w', '2023-06-01 07:37:54', '2023-06-01 07:37:54', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
