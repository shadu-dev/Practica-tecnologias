-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-07-2021 a las 02:17:39
-- Versión del servidor: 10.3.29-MariaDB-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alm_alumnos`
--

CREATE TABLE `alm_alumnos` (
  `alm_id` bigint(20) UNSIGNED NOT NULL,
  `alm_codigo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alm_nombre` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alm_edad` int(11) NOT NULL,
  `alm_sexo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alm_id_grd` bigint(20) UNSIGNED NOT NULL,
  `alm_observación` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alm_alumnos`
--

INSERT INTO `alm_alumnos` (`alm_id`, `alm_codigo`, `alm_nombre`, `alm_edad`, `alm_sexo`, `alm_id_grd`, `alm_observación`, `created_at`, `updated_at`) VALUES
(1, 'sdfs', 'sdfs', 12, 'sdfsdfsdfsdfsdfsdfsdfsdfs', 10, 'sdfsdfsdf', NULL, NULL),
(2, 'dfsdf', 'sdfs', 14, 'sdfs', 11, 'sdfsdfs', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `grd_grados`
--

CREATE TABLE `grd_grados` (
  `grd_id` bigint(20) UNSIGNED NOT NULL,
  `grd_nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `grd_grados`
--

INSERT INTO `grd_grados` (`grd_id`, `grd_nombre`, `created_at`, `updated_at`) VALUES
(10, 'Primero', '2021-07-23 12:03:38', '2021-07-23 12:03:38'),
(11, 'Segundo', '2021-07-23 12:03:42', '2021-07-23 12:03:42'),
(12, 'Tercero', '2021-07-23 12:03:46', '2021-07-23 12:03:46'),
(13, 'Cuarto', '2021-07-23 12:03:49', '2021-07-23 12:03:49'),
(14, 'Quinto', '2021-07-23 12:03:56', '2021-07-23 12:04:02'),
(15, 'Sexto', '2021-07-23 12:04:08', '2021-07-23 12:04:08'),
(16, 'Séptimo', '2021-07-23 12:04:13', '2021-07-23 12:04:25'),
(17, 'Octavo', '2021-07-23 12:04:32', '2021-07-23 12:04:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mat_materias`
--

CREATE TABLE `mat_materias` (
  `mat_id` bigint(20) UNSIGNED NOT NULL,
  `mat_nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mat_materias`
--

INSERT INTO `mat_materias` (`mat_id`, `mat_nombre`, `created_at`, `updated_at`) VALUES
(63, 'Lenguaje', '2021-07-23 12:04:59', '2021-07-23 12:04:59'),
(64, 'Ciencias', '2021-07-23 12:05:03', '2021-07-23 12:05:03'),
(65, 'Matemáticas', '2021-07-23 12:05:06', '2021-07-23 12:05:06'),
(66, 'Inglés', '2021-07-23 12:05:09', '2021-07-23 12:05:09'),
(67, 'Educación física', '2021-07-23 12:05:23', '2021-07-23 12:05:23'),
(68, 'Moral', '2021-07-23 12:05:34', '2021-07-23 12:05:34'),
(69, 'Religión', '2021-07-23 12:05:37', '2021-07-23 12:05:44'),
(70, 'Sociales', '2021-07-23 12:13:52', '2021-07-23 12:13:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_22_234507_create_mat_materias_table', 1),
(5, '2021_07_22_234625_create_grd_grados_table', 1),
(6, '2021_07_22_235403_create_mxg_materiasxgrados_table', 1),
(7, '2021_07_23_002116_create_alm_alumnos_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mxg_materiasxgrados`
--

CREATE TABLE `mxg_materiasxgrados` (
  `mxg_id` bigint(20) UNSIGNED NOT NULL,
  `mxg_id_grd` bigint(20) UNSIGNED DEFAULT NULL,
  `mxg_id_mat` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alm_alumnos`
--
ALTER TABLE `alm_alumnos`
  ADD PRIMARY KEY (`alm_id`),
  ADD KEY `alm_alumnos_alm_id_grd_foreign` (`alm_id_grd`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `grd_grados`
--
ALTER TABLE `grd_grados`
  ADD PRIMARY KEY (`grd_id`);

--
-- Indices de la tabla `mat_materias`
--
ALTER TABLE `mat_materias`
  ADD PRIMARY KEY (`mat_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mxg_materiasxgrados`
--
ALTER TABLE `mxg_materiasxgrados`
  ADD PRIMARY KEY (`mxg_id`),
  ADD KEY `mxg_materiasxgrados_mxg_id_grd_foreign` (`mxg_id_grd`),
  ADD KEY `mxg_materiasxgrados_mxg_id_mat_foreign` (`mxg_id_mat`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT de la tabla `alm_alumnos`
--
ALTER TABLE `alm_alumnos`
  MODIFY `alm_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grd_grados`
--
ALTER TABLE `grd_grados`
  MODIFY `grd_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `mat_materias`
--
ALTER TABLE `mat_materias`
  MODIFY `mat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `mxg_materiasxgrados`
--
ALTER TABLE `mxg_materiasxgrados`
  MODIFY `mxg_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alm_alumnos`
--
ALTER TABLE `alm_alumnos`
  ADD CONSTRAINT `alm_alumnos_alm_id_grd_foreign` FOREIGN KEY (`alm_id_grd`) REFERENCES `grd_grados` (`grd_id`);

--
-- Filtros para la tabla `mxg_materiasxgrados`
--
ALTER TABLE `mxg_materiasxgrados`
  ADD CONSTRAINT `mxg_materiasxgrados_mxg_id_grd_foreign` FOREIGN KEY (`mxg_id_grd`) REFERENCES `grd_grados` (`grd_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `mxg_materiasxgrados_mxg_id_mat_foreign` FOREIGN KEY (`mxg_id_mat`) REFERENCES `mat_materias` (`mat_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
