-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2023 a las 12:49:09
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `publicacion` int(11) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `disponible` varchar(255) NOT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `created_at`, `updated_at`, `titulo`, `publicacion`, `genero`, `disponible`, `autor`, `descripcion`) VALUES
(30, '2023-07-25 17:49:56', '2023-07-25 22:01:45', 'La casa Magica', 2010, 'Fantasía', 'SI', 'Pepillo Saez', 'Libro de una casa mágica en la que aparecen seres de ficción que ayudan a salvar el mundo.'),
(17, '2023-07-18 05:45:58', '2023-07-28 10:33:13', 'yiiiiii', 2040, 'crimen', 'SI', NULL, NULL),
(18, '2023-07-19 04:53:49', '2023-07-28 10:33:19', 'nuevo libro', 1450, 'Terror', 'SI', NULL, NULL),
(19, '2023-07-19 04:54:01', '2023-07-25 22:01:09', 'nuevo libro 2', 1960, 'suspense', 'SI', NULL, NULL),
(20, '2023-07-19 04:54:12', '2023-07-25 18:06:08', 'nuevo libro 3', 1862, 'crimen', 'SI', NULL, NULL),
(23, '2023-07-19 05:15:08', '2023-07-24 06:47:01', 'nuevo libro 4', 2003, 'suspense', 'SI', NULL, NULL),
(24, '2023-07-19 05:15:22', '2023-07-24 06:47:05', 'nuevo libro 5', 2011, 'crimen', 'SI', NULL, NULL),
(25, '2023-07-19 05:15:34', '2023-07-25 22:01:13', 'nuevo libro 6', 1999, 'suspense', 'SI', NULL, NULL),
(26, '2023-07-19 08:19:46', '2023-07-24 06:47:14', 'Prueba laravel 10', 2023, 'prueba', 'SI', NULL, NULL),
(27, '2023-07-20 06:16:39', '2023-07-24 06:47:18', 'la mate porque era mia 2', 1562, 'Comedia', 'SI', NULL, NULL),
(28, '2023-07-20 07:14:52', '2023-07-26 06:02:59', 'Libro de aventuras', 1520, 'Aventuras', 'SI', 'El aventurero', 'Este es un libro de aventuras que describe las aventuras de unos niños perdidos en una isla desierta.'),
(29, '2023-07-22 08:23:08', '2023-07-22 08:23:36', 'Muo pero no manco', 2010, 'Comedia', 'SI', 'Paquillo el Muo', 'Esto es un libro que habla de un mudo que no era manco y que se llama paquillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(32, '2014_10_12_000000_create_users_table', 5),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(33, '2014_10_12_100000_create_password_reset_tokens_table', 5),
(34, '2019_08_19_000000_create_failed_jobs_table', 5),
(5, '2023_07_11_200937_create_libros_table', 1),
(6, '2023_07_11_204556_libros', 2),
(7, '2023_07_11_204827_create_prestamos_table', 3),
(8, '2023_07_11_205314_prestamos', 4),
(35, '2019_12_14_000001_create_personal_access_tokens_table', 5),
(36, '2023_07_19_101109_create_libros_table', 5),
(37, '2023_07_25_175957_update_prestamos', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libro_id` bigint(20) UNSIGNED NOT NULL,
  `fecha_prestamo` datetime NOT NULL,
  `fecha_devolucion` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id`, `libro_id`, `fecha_prestamo`, `fecha_devolucion`, `created_at`, `updated_at`) VALUES
(3, 30, '2023-07-24 00:00:00', '2023-07-26 00:00:59', '2023-07-25 17:50:10', '2023-07-25 22:01:00'),
(5, 19, '2023-07-22 20:06:16', '2023-07-26 00:01:08', '2023-07-25 18:06:17', '2023-07-25 22:01:09'),
(6, 25, '2023-07-25 20:06:19', '2023-07-26 00:01:12', '2023-07-25 18:06:22', '2023-07-25 22:01:13'),
(7, 30, '2023-07-26 00:01:34', '2023-07-26 00:01:43', '2023-07-25 22:01:36', '2023-07-25 22:01:45'),
(8, 17, '2023-07-28 10:33:20', '2023-07-28 12:33:11', '2023-07-28 08:33:21', '2023-07-28 10:33:13'),
(9, 18, '2023-07-28 11:25:37', '2023-07-28 12:33:18', '2023-07-28 09:25:38', '2023-07-28 10:33:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
