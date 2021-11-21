-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla squadsy.islas: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `islas` DISABLE KEYS */;
REPLACE INTO `islas` (`id`, `id_provincia`, `nombre`) VALUES
	(1, 1, 'Palmas, Las'),
	(2, 2, 'Santa Cruz de Tenerife'),
	(3, 2, 'La Palma'),
	(4, 2, 'La Gomera'),
	(5, 2, 'El Hierro'),
	(7, 1, 'Lanzarote'),
	(8, 1, 'Fuerteventura');
/*!40000 ALTER TABLE `islas` ENABLE KEYS */;

-- Volcando datos para la tabla squadsy.municipios: ~88 rows (aproximadamente)
/*!40000 ALTER TABLE `municipios` DISABLE KEYS */;
REPLACE INTO `municipios` (`id`, `id_isla`, `codMunicipio`, `DC`, `Municipio`) VALUES
	(35, 1, 1, 7, 'Agaete'),
	(38, 2, 1, 2, 'Adeje'),
	(84, 1, 2, 2, 'Agüimes'),
	(87, 4, 2, 7, 'Agulo'),
	(132, 8, 3, 8, 'Antigua'),
	(135, 4, 3, 3, 'Alajeró'),
	(180, 7, 4, 3, 'Arrecife'),
	(183, 2, 4, 8, 'Arafo'),
	(227, 1, 5, 6, 'Artenara'),
	(230, 2, 5, 1, 'Arico'),
	(275, 1, 6, 9, 'Arucas'),
	(278, 2, 6, 4, 'Arona'),
	(323, 8, 7, 5, 'Betancuria'),
	(326, 3, 7, 0, 'Barlovento'),
	(370, 1, 8, 1, 'Firgas'),
	(373, 3, 8, 6, 'Breña Alta'),
	(418, 1, 9, 4, 'Gáldar'),
	(421, 3, 9, 9, 'Breña Baja'),
	(467, 7, 10, 8, 'Haría'),
	(470, 2, 10, 3, 'Buenavista del Norte'),
	(516, 1, 11, 5, 'Ingenio'),
	(519, 2, 11, 0, 'Candelaria'),
	(563, 1, 12, 0, 'Mogán'),
	(566, 2, 12, 5, 'Fasnia'),
	(610, 1, 13, 6, 'Moya'),
	(613, 5, 13, 1, 'Frontera'),
	(658, 8, 14, 1, 'Oliva, La'),
	(661, 3, 14, 6, 'Fuencaliente de la Palma'),
	(706, 8, 15, 4, 'Pájara'),
	(709, 2, 15, 9, 'Garachico'),
	(754, 1, 16, 7, 'Palmas de Gran Canaria, Las'),
	(757, 3, 16, 2, 'Garafía'),
	(803, 8, 17, 3, 'Puerto del Rosario'),
	(806, 2, 17, 8, 'Granadilla de Abona'),
	(852, 7, 18, 9, 'San Bartolomé'),
	(855, 2, 18, 4, 'Guancha, La'),
	(900, 1, 19, 2, 'San Bartolomé de Tirajana'),
	(903, 2, 19, 7, 'Guía de Isora'),
	(949, 1, 20, 6, 'Aldea de San Nicolás, La'),
	(952, 2, 20, 1, 'Güímar'),
	(997, 1, 21, 3, 'Santa Brígida'),
	(1000, 4, 21, 8, 'Hermigua'),
	(1046, 1, 22, 8, 'Santa Lucía de Tirajana'),
	(1049, 2, 22, 3, 'Icod de los Vinos'),
	(1094, 1, 23, 4, 'Santa María de Guía de Gran Canaria'),
	(1097, 2, 23, 9, 'San Cristóbal de La Laguna'),
	(1142, 7, 24, 9, 'Teguise'),
	(1145, 3, 24, 4, 'Llanos de Aridane, Los'),
	(1189, 1, 25, 2, 'Tejeda'),
	(1192, 2, 25, 7, 'Matanza de Acentejo, La'),
	(1233, 1, 26, 5, 'Telde'),
	(1236, 2, 26, 0, 'Orotava, La'),
	(1283, 1, 27, 1, 'Teror'),
	(1286, 3, 27, 6, 'Paso, El'),
	(1327, 7, 28, 7, 'Tías'),
	(1330, 2, 28, 2, 'Puerto de la Cruz'),
	(1375, 7, 29, 0, 'Tinajo'),
	(1378, 3, 29, 5, 'Puntagorda'),
	(1421, 8, 30, 4, 'Tuineje'),
	(1424, 3, 30, 9, 'Puntallana'),
	(1466, 1, 31, 1, 'Valsequillo de Gran Canaria'),
	(1469, 2, 31, 6, 'Realejos, Los'),
	(1515, 1, 32, 6, 'Valleseco'),
	(1518, 2, 32, 1, 'Rosario, El'),
	(1564, 1, 33, 2, 'Vega de San Mateo'),
	(1567, 3, 33, 7, 'San Andrés y Sauces'),
	(1613, 7, 34, 7, 'Yaiza'),
	(1616, 2, 34, 2, 'San Juan de la Rambla'),
	(1661, 2, 35, 5, 'San Miguel de Abona'),
	(1708, 4, 36, 8, 'San Sebastián de la Gomera'),
	(1756, 3, 37, 4, 'Santa Cruz de la Palma'),
	(1803, 2, 38, 0, 'Santa Cruz de Tenerife'),
	(1850, 2, 39, 3, 'Santa Úrsula'),
	(1895, 2, 40, 7, 'Santiago del Teide'),
	(1942, 2, 41, 4, 'Sauzal, El'),
	(1989, 2, 42, 9, 'Silos, Los'),
	(2034, 2, 43, 5, 'Tacoronte'),
	(2080, 2, 44, 0, 'Tanque, El'),
	(2123, 3, 45, 3, 'Tazacorte'),
	(2169, 2, 46, 6, 'Tegueste'),
	(2215, 3, 47, 2, 'Tijarafe'),
	(2258, 5, 48, 8, 'Valverde'),
	(2304, 4, 49, 1, 'Valle Gran Rey'),
	(2347, 4, 50, 4, 'Vallehermoso'),
	(2393, 2, 51, 1, 'Victoria de Acentejo, La'),
	(2438, 2, 52, 6, 'Vilaflor'),
	(2482, 3, 53, 2, 'Villa de Mazo'),
	(7980, 5, 901, 3, 'Pinar de El Hierro, El');
/*!40000 ALTER TABLE `municipios` ENABLE KEYS */;

-- Volcando datos para la tabla squadsy.provincias: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `provincias` DISABLE KEYS */;
REPLACE INTO `provincias` (`id`, `Provincia`) VALUES
	(1, 'Palmas, Las'),
	(2, 'Santa Cruz de Tenerife');
/*!40000 ALTER TABLE `provincias` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
