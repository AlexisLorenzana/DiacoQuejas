-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 08-09-2023 a las 18:51:39
-- Versión del servidor: 5.7.32
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `diaco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comercio`
--

CREATE TABLE `comercio` (
  `id_comercio` int(11) NOT NULL,
  `nit_comercio` varchar(15) NOT NULL,
  `razon_social` varchar(100) NOT NULL,
  `direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comercio`
--

INSERT INTO `comercio` (`id_comercio`, `nit_comercio`, `razon_social`, `direccion`) VALUES
(1, '476976-7', 'REPUESTOS TOTAL', '7 Avenida 1-70 Zona 9'),
(2, '476976-8', 'Walmart', '7 Avenida 1-70 Zona 19'),
(3, '444940-0', 'YYYY', 'CC Zona 1'),
(4, '444940-1', 'nuevo nombre', 'CC Zona 2'),
(5, '476976-9', 'Prueba insert', 'Zona 10'),
(6, '476976-1', 'Prueba insert 1', 'Zona 10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `nombre_departamento` varchar(50) NOT NULL,
  `region` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nombre_departamento`, `region`) VALUES
(1, 'Alta Verapaz', 'Norte'),
(2, 'Baja Verapaz', 'Norte'),
(3, 'Chimaltenango', 'Central'),
(4, 'Chiquimula', 'Nor-Oriente'),
(5, 'El Progreso', 'Nor-Oriente'),
(6, 'Escuintla', 'Central'),
(7, 'Guatemala', 'Metropolitana'),
(8, 'Huehuetenango', 'Nor-Occidente'),
(9, 'Izabal', 'Nor-Oriente'),
(10, 'Jalapa', 'Sur-Oriente'),
(11, 'Jutiapa', 'Sur-Oriente'),
(12, 'Petén', 'Peten'),
(13, 'Quetzaltenango', 'Sur-Occidente'),
(14, 'Quiché', 'Nor-Occidente'),
(15, 'Retalhuleu', 'Sur-Occidente'),
(16, 'Sacatepéquez', 'Central'),
(17, 'San Marcos', 'Sur-Occidente'),
(18, 'Santa Rosa', 'Sur-Oriente'),
(19, 'Solola', 'Sur-Occidente'),
(20, 'Suchitepéquez', 'Sur-Occidente'),
(21, 'Totonicapán', 'Sur-Occidente'),
(22, 'Zacapa', 'Nor-Oriente');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id_municipio` int(11) NOT NULL,
  `nombre_municipio` varchar(50) NOT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id_municipio`, `nombre_municipio`, `id_departamento`) VALUES
(1, 'Chahal', 1),
(2, 'Chisec', 1),
(3, 'Cobán', 1),
(4, 'Fray Bartolomé de las Casas', 1),
(5, 'La Tinta', 1),
(6, 'Lanquín', 1),
(7, 'Panzós', 1),
(8, 'Raxruhá', 1),
(9, 'San Cristóbal Verapaz', 1),
(10, 'San Juan Chamelco', 1),
(11, 'San Pedro Carchá', 1),
(12, 'Santa Cruz Verapaz', 1),
(13, 'Santa María Cahabón', 1),
(14, 'Senahú', 1),
(15, 'Tamahú', 1),
(16, 'Tactic', 1),
(17, 'Tucurú', 1),
(18, 'Cubulco', 2),
(19, 'Granados', 2),
(20, 'Purulhá', 2),
(21, 'Rabinal', 2),
(22, 'Salamá', 2),
(23, 'San Jerónimo', 2),
(24, 'San Miguel Chicaj', 2),
(25, 'Santa Cruz el Chol', 2),
(26, 'Acatenango', 3),
(27, 'Chimaltenango', 3),
(28, 'El Tejar', 3),
(29, 'Parramos', 3),
(30, 'Patzicía', 3),
(31, 'Patzún', 3),
(32, 'Pochuta', 3),
(33, 'San Andrés Itzapa', 3),
(34, 'San José Poaquíl', 3),
(35, 'San Juan Comalapa', 3),
(36, 'San Martín Jilotepeque', 3),
(37, 'Santa Apolonia', 3),
(38, 'Santa Cruz Balanyá', 3),
(39, 'Tecpán', 3),
(40, 'Yepocapa', 3),
(41, 'Zaragoza', 3),
(42, 'Camotán', 4),
(43, 'Chiquimula', 4),
(44, 'Concepción Las Minas', 4),
(45, 'Esquipulas', 4),
(46, 'Ipala', 4),
(47, 'Jocotán', 4),
(48, 'Olopa', 4),
(49, 'Quezaltepeque', 4),
(50, 'San Jacinto', 4),
(51, 'San José la Arada', 4),
(52, 'San Juan Ermita', 4),
(53, 'El Jícaro', 5),
(54, 'Guastatoya', 5),
(55, 'Morazán', 5),
(56, 'San Agustín Acasaguastlán', 5),
(57, 'San Antonio La Paz', 5),
(58, 'San Cristóbal Acasaguastlán', 5),
(59, 'Sanarate', 5),
(60, 'Sansare', 5),
(61, 'Escuintla', 6),
(62, 'Guanagazapa', 6),
(63, 'Iztapa', 6),
(64, 'La Democracia', 6),
(65, 'La Gomera', 6),
(66, 'Masagua', 6),
(67, 'Nueva Concepción', 6),
(68, 'Palín', 6),
(69, 'San José', 6),
(70, 'San Vicente Pacaya', 6),
(71, 'Santa Lucía Cotzumalguapa', 6),
(72, 'Siquinalá', 6),
(73, 'Tiquisate', 6),
(74, 'Amatitlán', 7),
(75, 'Chinautla', 7),
(76, 'Chuarrancho', 7),
(77, 'Guatemala', 7),
(78, 'Fraijanes', 7),
(79, 'Mixco', 7),
(80, 'Palencia', 7),
(81, 'San José del Golfo', 7),
(82, 'San José Pinula', 7),
(83, 'San Juan Sacatepéquez', 7),
(84, 'San Miguel Petapa', 7),
(85, 'San Pedro Ayampuc', 7),
(86, 'San Pedro Sacatepéquez', 7),
(87, 'San Raymundo', 7),
(88, 'Santa Catarina Pinula', 7),
(89, 'Villa Canales', 7),
(90, 'Villa Nueva', 7),
(91, 'Aguacatán', 8),
(92, 'Chiantla', 8),
(93, 'Colotenango', 8),
(94, 'Concepción Huista', 8),
(95, 'Cuilco', 8),
(96, 'Huehuetenango', 8),
(97, 'Jacaltenango', 8),
(98, 'La Democracia', 8),
(99, 'La Libertad', 8),
(100, 'Malacatancito', 8),
(101, 'Nentón', 8),
(102, 'San Antonio Huista', 8),
(103, 'San Gaspar Ixchil', 8),
(104, 'San Ildefonso Ixtahuacán', 8),
(105, 'San Juan Atitán', 8),
(106, 'San Juan Ixcoy', 8),
(107, 'San Mateo Ixtatán', 8),
(108, 'San Miguel Acatán', 8),
(109, 'San Pedro Nécta', 8),
(110, 'San Pedro Soloma', 8),
(111, 'San Rafael La Independencia', 8),
(112, 'San Rafael Pétzal', 8),
(113, 'San Sebastián Coatán', 8),
(114, 'San Sebastián Huehuetenango', 8),
(115, 'Santa Ana Huista', 8),
(116, 'Santa Bárbara', 8),
(117, 'Santa Cruz Barillas', 8),
(118, 'Santa Eulalia', 8),
(119, 'Santiago Chimaltenango', 8),
(120, 'Tectitán', 8),
(121, 'Todos Santos Cuchumatán', 8),
(122, 'Unión Cantinil', 8),
(123, 'El Estor', 9),
(124, 'Livingston', 9),
(125, 'Los Amates', 9),
(126, 'Morales', 9),
(127, 'Puerto Barrios', 9),
(128, 'Jalapa', 10),
(129, 'Mataquescuintla', 10),
(130, 'Monjas', 10),
(131, 'San Carlos Alzatate', 10),
(132, 'San Luis Jilotepeque', 10),
(133, 'San Manuel Chaparrón', 10),
(134, 'San Pedro Pinula', 10),
(135, 'Agua Blanca', 11),
(136, 'Asunción Mita', 11),
(137, 'Atescatempa', 11),
(138, 'Comapa', 11),
(139, 'Conguaco', 11),
(140, 'El Adelanto', 11),
(141, 'El Progreso', 11),
(142, 'Jalpatagua', 11),
(143, 'Jerez', 11),
(144, 'Jutiapa', 11),
(145, 'Moyuta', 11),
(146, 'Pasaco', 11),
(147, 'Quesada', 11),
(148, 'San José Acatempa', 11),
(149, 'Santa Catarina Mita', 11),
(150, 'Yupiltepeque', 11),
(151, 'Zapotitlán', 11),
(152, 'Dolores', 12),
(153, 'El Chal', 12),
(154, 'Ciudad Flores', 12),
(155, 'La Libertad', 12),
(156, 'Las Cruces', 12),
(157, 'Melchor de Mencos', 12),
(158, 'Poptún', 12),
(159, 'San Andrés', 12),
(160, 'San Benito', 12),
(161, 'San Francisco', 12),
(162, 'San José', 12),
(163, 'San Luis', 12),
(164, 'Santa Ana', 12),
(165, 'Sayaxché', 12),
(166, 'Almolonga', 13),
(167, 'Cabricán', 13),
(168, 'Cajolá', 13),
(169, 'Cantel', 13),
(170, 'Coatepeque', 13),
(171, 'Colomba Costa Cuca', 13),
(172, 'Concepción Chiquirichapa', 13),
(173, 'El Palmar', 13),
(174, 'Flores Costa Cuca', 13),
(175, 'Génova', 13),
(176, 'Huitán', 13),
(177, 'La Esperanza', 13),
(178, 'Olintepeque', 13),
(179, 'Palestina de Los Altos', 13),
(180, 'Quetzaltenango', 13),
(181, 'Salcajá', 13),
(182, 'San Carlos Sija', 13),
(183, 'San Francisco La Unión', 13),
(184, 'San Juan Ostuncalco', 13),
(185, 'San Martín Sacatepéquez', 13),
(186, 'San Mateo', 13),
(187, 'San Miguel Sigüilá', 13),
(188, 'Sibilia', 13),
(189, 'Zunil', 13),
(190, 'Canillá', 14),
(191, 'Chajul', 14),
(192, 'Chicamán', 14),
(193, 'Chiché', 14),
(194, 'Chichicastenango', 14),
(195, 'Chinique', 14),
(196, 'Cunén', 14),
(197, 'Ixcán Playa Grande', 14),
(198, 'Joyabaj', 14),
(199, 'Nebaj', 14),
(200, 'Pachalum', 14),
(201, 'Patzité', 14),
(202, 'Sacapulas', 14),
(203, 'San Andrés Sajcabajá', 14),
(204, 'San Antonio Ilotenango', 14),
(205, 'San Bartolomé Jocotenango', 14),
(206, 'San Juan Cotzal', 14),
(207, 'San Pedro Jocopilas', 14),
(208, 'Santa Cruz del Quiché', 14),
(209, 'Uspantán', 14),
(210, 'Zacualpa', 14),
(211, 'Champerico', 15),
(212, 'El Asintal', 15),
(213, 'Nuevo San Carlos', 15),
(214, 'Retalhuleu', 15),
(215, 'San Andrés Villa Seca', 15),
(216, 'San Felipe Reu', 15),
(217, 'San Martín Zapotitlán', 15),
(218, 'San Sebastián', 15),
(219, 'Santa Cruz Muluá', 15),
(220, 'Alotenango', 16),
(221, 'Ciudad Vieja', 16),
(222, 'Jocotenango', 16),
(223, 'Antigua Guatemala', 16),
(224, 'Magdalena Milpas Altas', 16),
(225, 'Pastores', 16),
(226, 'San Antonio Aguas Calientes', 16),
(227, 'San Bartolomé Milpas Altas', 16),
(228, 'San Lucas Sacatepéquez', 16),
(229, 'San Miguel Dueñas', 16),
(230, 'Santa Catarina Barahona', 16),
(231, 'Santa Lucía Milpas Altas', 16),
(232, 'Santa María de Jesús', 16),
(233, 'Santiago Sacatepéquez', 16),
(234, 'Santo Domingo Xenacoj', 16),
(235, 'Sumpango', 16),
(236, 'Ayutla', 17),
(237, 'Catarina', 17),
(238, 'Comitancillo', 17),
(239, 'Concepción Tutuapa', 17),
(240, 'El Quetzal', 17),
(241, 'El Tumbador', 17),
(242, 'Esquipulas Palo Gordo', 17),
(243, 'Ixchiguán', 17),
(244, 'La Blanca', 17),
(245, 'La Reforma', 17),
(246, 'Malacatán', 17),
(247, 'Nuevo Progreso', 17),
(248, 'Ocós', 17),
(249, 'Pajapita', 17),
(250, 'Río Blanco', 17),
(251, 'San Antonio Sacatepéquez', 17),
(252, 'San Cristóbal Cucho', 17),
(253, 'San José El Rodeo', 17),
(254, 'San José Ojetenam', 17),
(255, 'San Lorenzo', 17),
(256, 'San Marcos', 17),
(257, 'San Miguel Ixtahuacán', 17),
(258, 'San Pablo', 17),
(259, 'San Pedro Sacatepéquez', 17),
(260, 'San Rafael Pie de la Cuesta', 17),
(261, 'Sibinal', 17),
(262, 'Sipacapa', 17),
(263, 'Tacaná', 17),
(264, 'Tajumulco', 17),
(265, 'Tejutla', 17),
(266, 'Barberena', 18),
(267, 'Casillas', 18),
(268, 'Chiquimulilla', 18),
(269, 'Cuilapa', 18),
(270, 'Guazacapán', 18),
(271, 'Nueva Santa Rosa', 18),
(272, 'Oratorio', 18),
(273, 'Pueblo Nuevo Viñas', 18),
(274, 'San Juan Tecuaco', 18),
(275, 'San Rafael las Flores', 18),
(276, 'Santa Cruz Naranjo', 18),
(277, 'Santa María Ixhuatán', 18),
(278, 'Santa Rosa de Lima', 18),
(279, 'Taxisco', 18),
(280, 'Concepción', 19),
(281, 'Nahualá', 19),
(282, 'Panajachel', 19),
(283, 'San Andrés Semetabaj', 19),
(284, 'San Antonio Palopó', 19),
(285, 'San José Chacayá', 19),
(286, 'San Juan La Laguna', 19),
(287, 'San Lucas Tolimán', 19),
(288, 'San Marcos La Laguna', 19),
(289, 'San Pablo La Laguna', 19),
(290, 'San Pedro La Laguna', 19),
(291, 'Santa Catarina Ixtahuacán', 19),
(292, 'Santa Catarina Palopó', 19),
(293, 'Santa Clara La Laguna', 19),
(294, 'Santa Cruz La Laguna', 19),
(295, 'Santa Lucía Utatlán', 19),
(296, 'Santa María Visitación', 19),
(297, 'Santiago Atitlán', 19),
(298, 'Sololá', 19),
(299, 'Chicacao', 20),
(300, 'Cuyotenango', 20),
(301, 'Mazatenango', 20),
(302, 'Patulul', 20),
(303, 'Pueblo Nuevo', 20),
(304, 'Río Bravo', 20),
(305, 'Samayac', 20),
(306, 'San Antonio Suchitepéquez', 20),
(307, 'San Bernardino', 20),
(308, 'San Francisco Zapotitlán', 20),
(309, 'San Gabriel', 20),
(310, 'San José El Idolo', 20),
(311, 'San José La Maquina', 20),
(312, 'San Juan Bautista', 20),
(313, 'San Lorenzo', 20),
(314, 'San Miguel Panán', 20),
(315, 'San Pablo Jocopilas', 20),
(316, 'Santa Bárbara', 20),
(317, 'Santo Domingo Suchitepéquez', 20),
(318, 'Santo Tomás La Unión', 20),
(319, 'Zunilito', 20),
(320, 'Momostenango', 21),
(321, 'San Andrés Xecul', 21),
(322, 'San Bartolo', 21),
(323, 'San Cristóbal Totonicapán', 21),
(324, 'San Francisco El Alto', 21),
(325, 'Santa Lucía La Reforma', 21),
(326, 'Santa María Chiquimula', 21),
(327, 'Totonicapán', 21),
(328, 'Cabañas', 22),
(329, 'Estanzuela', 22),
(330, 'Gualán', 22),
(331, 'Huité', 22),
(332, 'La Unión', 22),
(333, 'Río Hondo', 22),
(334, 'San Diego', 22),
(335, 'San Jorge', 22),
(336, 'Teculután', 22),
(337, 'Usumatlán', 22),
(338, 'Zacapa', 22);

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
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `queja`
--

CREATE TABLE `queja` (
  `id_queja` int(11) NOT NULL,
  `fecha_queja` date NOT NULL,
  `detalle_queja` text NOT NULL,
  `no_factura` varchar(20) NOT NULL,
  `fecha_factura` date NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `queja`
--

INSERT INTO `queja` (`id_queja`, `fecha_queja`, `detalle_queja`, `no_factura`, `fecha_factura`, `id_sucursal`, `status`) VALUES
(1, '2021-09-16', 'prueba', '002', '2021-09-16', 1, 0),
(2, '2021-09-16', 'afasdfas', '829323', '2021-09-16', 1, 0),
(3, '2021-09-16', 'afasdfas', '829323', '2021-09-16', 1, 0),
(4, '2021-09-16', '44444', '829323', '2021-09-16', 1, 0),
(5, '2021-09-16', 'hooh', '2021-09-16', '2021-09-16', 1, 0),
(6, '2021-09-16', '444445', '', '2021-09-16', 1, 0),
(7, '2021-09-16', '8484', '', '2021-09-17', 1, 0),
(8, '2021-09-16', 'ffffff', '', '2021-09-17', 1, 0),
(9, '2021-09-16', 'gggggg', 'ggggg', '2021-09-15', 1, 0),
(10, '2021-09-16', 'final', '4444', '2021-09-17', 2, 0),
(11, '2021-09-16', 'Prueba', '3243', '2021-09-17', 1, 0),
(12, '2021-09-16', 'asdfsd3333', '32323', '2021-09-16', 1, 0),
(13, '2021-09-16', 'Hoy', '333', '2021-09-24', 2, 0),
(14, '2021-09-16', '22323', '444', '2021-09-16', 2, 0),
(15, '2021-09-16', 'adfasd333', '2424', '2021-09-17', 2, 0),
(16, '2021-09-16', 'adsfasdf', '232', '2021-09-12', 2, 0),
(17, '2021-09-16', 'asfdasdf', '4444', '2021-09-17', 2, 0),
(18, '2021-09-16', 'fgsdfgsddfvsd', '4444', '2021-09-03', 2, 0),
(19, '2021-09-16', 'asdfasdf asdfasdf', '444', '2021-09-17', 2, 0),
(20, '2021-09-16', 'eeeeeeee', '002', '2021-09-17', 1, 0),
(21, '2021-09-16', 'eeeeeeee', '002', '2021-09-17', 1, 0),
(22, '2021-09-16', 'Producto defectuoso y no aplican garantia', '0029484049', '2021-09-20', 4, 1),
(23, '2021-09-16', 'asfasdf3', '44242', '2021-09-16', 1, 1),
(24, '2021-09-16', '323432', '444', '2021-09-23', 1, 1),
(25, '2021-09-16', 'Queja 1 RT Norte', '1', '2021-09-16', 5, 1),
(26, '2021-09-16', 'Queja 2 RT Norte', '2', '2021-09-16', 5, 1),
(27, '2021-09-16', 'queja3 RT norte', '3', '2021-08-16', 6, 1),
(28, '2021-09-16', 'Queja 4 RT sur', '4', '2021-09-16', 7, 1),
(29, '2021-09-16', 'Queja 5 RT Sur', '5', '2021-09-16', 8, 1),
(30, '2021-09-16', 'Queja 1 W Norte', '1', '2021-09-16', 9, 1),
(31, '2021-09-16', 'Queja 2 W norte', '2', '2021-09-16', 10, 1),
(32, '2021-09-19', 'jjhkjhkh', '4444', '2021-09-20', 5, 1),
(33, '2021-09-19', 'mbmbmnbmn', '978787', '2021-09-20', 5, 1),
(34, '2021-09-19', 'gjghj', '7687687', '2021-09-20', 5, 1),
(35, '2021-09-19', 'prueba20', '20', '2021-09-20', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id_sucursal` int(11) NOT NULL,
  `nombre_sucursal` varchar(50) NOT NULL,
  `id_comercio` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `direccion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id_sucursal`, `nombre_sucursal`, `id_comercio`, `id_municipio`, `direccion`) VALUES
(1, 'RT Portales', 1, 77, 'Centro Comercial Portales local 110'),
(2, 'RT San Rafael', 1, 77, 'Plaza San rafael local 200'),
(3, 'Walmart Z17l', 2, 77, 'Walmart zona 17'),
(4, 'YYYY', 3, 3, 'CC Zona 1'),
(5, 'RT Altaverapaz', 1, 1, 'Alta Verapaz'),
(6, 'RT Baja Verapaz', 1, 18, 'Baja Verapaz'),
(7, 'RT San Marcos', 1, 255, 'San Marcos Sur'),
(8, 'RT Santa Rosa', 1, 269, 'Santa Rosa Sur'),
(9, 'Walmart Alta', 2, 1, 'Alta Verapaz'),
(10, 'Walmart Baja Verapaz', 2, 18, 'Baja Verapaz'),
(11, 'Walmart San Marcos', 2, 255, 'San Marcos Sur'),
(12, 'Walmart Santa Rosa', 2, 269, 'Santa Rosa Sur');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apellido_usuario` varchar(60) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `apellido_usuario`, `correo`, `password`) VALUES
(1, 'alexis', 'lorenzana', 'alexis@diaco.gob.gt', '$2y$10$xdIUK5ZU5TwI7SCAixlZbe68sRtA0qMhkwzvEE86b95pw1viBJtFW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comercio`
--
ALTER TABLE `comercio`
  ADD PRIMARY KEY (`id_comercio`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `municipio_departamento` (`id_departamento`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `queja`
--
ALTER TABLE `queja`
  ADD PRIMARY KEY (`id_queja`),
  ADD KEY `queja_sucursal` (`id_sucursal`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id_sucursal`),
  ADD KEY `comercio_sucursal` (`id_comercio`),
  ADD KEY `municipio_sucursal` (`id_municipio`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comercio`
--
ALTER TABLE `comercio`
  MODIFY `id_comercio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `queja`
--
ALTER TABLE `queja`
  MODIFY `id_queja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `municipio_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`);

--
-- Filtros para la tabla `queja`
--
ALTER TABLE `queja`
  ADD CONSTRAINT `queja_sucursal` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursal` (`id_sucursal`);

--
-- Filtros para la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD CONSTRAINT `comercio_sucursal` FOREIGN KEY (`id_comercio`) REFERENCES `comercio` (`id_comercio`),
  ADD CONSTRAINT `municipio_sucursal` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id_municipio`);
