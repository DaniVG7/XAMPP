-- MariaDB dump 10.18  Distrib 10.5.8-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: nascor04_bddCurso
-- ------------------------------------------------------
-- Server version	10.5.8-MariaDB-1:10.5.8+maria~buster

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Customers`
--

DROP TABLE IF EXISTS `Customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `email_address` varchar(50) DEFAULT NULL,
  `job_title` varchar(50) DEFAULT NULL,
  `business_phone` varchar(25) DEFAULT NULL,
  `home_phone` varchar(25) DEFAULT NULL,
  `mobile_phone` varchar(25) DEFAULT NULL,
  `fax_number` varchar(25) DEFAULT NULL,
  `Address` longtext DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state_province` varchar(50) DEFAULT NULL,
  `zip_postal_code` varchar(15) DEFAULT NULL,
  `Region` varchar(50) DEFAULT NULL,
  `web_page` longtext DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `attachments` longblob DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `city` (`city`),
  KEY `company` (`CompanyName`),
  KEY `first_name` (`first_name`),
  KEY `last_name` (`last_name`),
  KEY `zip_postal_code` (`zip_postal_code`),
  KEY `state_province` (`state_province`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Customers`
--

LOCK TABLES `Customers` WRITE;
/*!40000 ALTER TABLE `Customers` DISABLE KEYS */;
INSERT INTO `Customers` VALUES (1,'Company A','Bedecs','Anna',NULL,'Owner','(123)555-0100',NULL,NULL,'(123)555-0101','123 1st Street','Seattle','WA','99999','USA',NULL,NULL,''),(2,'Company B','Gratacos Solsona','Antonio',NULL,'Owner','(123)555-0100',NULL,NULL,'(123)555-0101','123 2nd Street','Boston','MA','99999','CA',NULL,NULL,''),(3,'Company C','Axen','Thomas',NULL,'Purchasing Representative','(123)555-0100',NULL,NULL,'(123)555-0101','123 3rd Street','Los Angelas','CA','99999','USA',NULL,NULL,''),(4,'Company D','Lee','Christina',NULL,'Purchasing Manager','(123)555-0100',NULL,NULL,'(123)555-0101','123 4th Street','New York','NY','99999','CA',NULL,NULL,''),(5,'Company E','O’Donnell','Martin',NULL,'Owner','(123)555-0100',NULL,NULL,'(123)555-0101','123 5th Street','Minneapolis','MN','99999','USA',NULL,NULL,''),(6,'Company F','Pérez-Olaeta','Francisco',NULL,'Purchasing Manager','(123)555-0100',NULL,NULL,'(123)555-0101','123 6th Street','Milwaukee','WI','99999','USA',NULL,NULL,''),(7,'Company G','Xie','Ming-Yang',NULL,'Owner','(123)555-0100',NULL,NULL,'(123)555-0101','123 7th Street','Boise','ID','99999','USA',NULL,NULL,''),(8,'Company H','Andersen','Elizabeth',NULL,'Purchasing Representative','(123)555-0100',NULL,NULL,'(123)555-0101','123 8th Street','Portland','OR','99999','USA',NULL,NULL,''),(9,'Company I','Mortensen','Sven',NULL,'Purchasing Manager','(123)555-0100',NULL,NULL,'(123)555-0101','123 9th Street','Salt Lake City','UT','99999',NULL,NULL,NULL,''),(10,'Company J','Wacker','Roland',NULL,'Purchasing Manager','(123)555-0100',NULL,NULL,'(123)555-0101','123 10th Street','Chicago','IL','99999','USA',NULL,NULL,''),(11,'Company K','Krschne','Peter',NULL,'Purchasing Manager','(123)555-0100',NULL,NULL,'(123)555-0101','123 11th Street','Miami','FL','99999','USA',NULL,NULL,''),(12,'Company L','Edwards','John',NULL,'Purchasing Manager','(123)555-0100',NULL,NULL,'(123)555-0101','123 12th Street','Las Vegas','NV','99999',NULL,NULL,NULL,''),(13,'Company M','Ludick','Andre',NULL,'Purchasing Representative','(123)555-0100',NULL,NULL,'(123)555-0101','456 13th Street','Memphis','TN','99999','USA',NULL,NULL,''),(14,'Company N','Grilo','Carlos',NULL,'Purchasing Representative','(123)555-0100',NULL,NULL,'(123)555-0101','456 14th Street','Denver','CO','99999','USA',NULL,NULL,''),(15,'Company O','Kupkova','Helena',NULL,'Purchasing Manager','(123)555-0100',NULL,NULL,'(123)555-0101','456 15th Street','Honolulu','HI','99999','USA',NULL,NULL,''),(16,'Company P','Goldschmidt','Daniel',NULL,'Purchasing Representative','(123)555-0100',NULL,NULL,'(123)555-0101','456 16th Street','San Francisco','CA','99999','USA',NULL,NULL,''),(17,'Company Q','Bagel','Jean Philippe',NULL,'Owner','(123)555-0100',NULL,NULL,'(123)555-0101','456 17th Street','Seattle','WA','99999','MT',NULL,NULL,''),(18,'Company R','Autier Miconi','Catherine',NULL,'Purchasing Representative','(123)555-0100',NULL,NULL,'(123)555-0101','456 18th Street','Boston','MA','99999','USA',NULL,NULL,''),(19,'Company S','Eggerer','Alexander',NULL,'Accounting Assistant','(123)555-0100',NULL,NULL,'(123)555-0101','789 19th Street','Los Angelas','CA','99999','USA',NULL,NULL,''),(20,'Company T','Li','George',NULL,'Purchasing Manager','(123)555-0100',NULL,NULL,'(123)555-0101','789 20th Street','New York','NY','99999','USA',NULL,NULL,''),(21,'Company U','Tham','Bernard',NULL,'Accounting Manager','(123)555-0100',NULL,NULL,'(123)555-0101','789 21th Street','Minneapolis','MN','99999','CA',NULL,NULL,''),(22,'Company V','Ramos','Luciana',NULL,'Purchasing Assistant','(123)555-0100',NULL,NULL,'(123)555-0101','789 22th Street','Milwaukee','WI','99999','WA',NULL,NULL,''),(23,'Company W','Entin','Michael',NULL,'Purchasing Manager','(123)555-0100',NULL,NULL,'(123)555-0101','789 23th Street','Portland','OR','99999','USA',NULL,NULL,''),(24,'Company X','Hasselberg','Jonas',NULL,'Owner','(123)555-0100',NULL,NULL,'(123)555-0101','789 24th Street','Salt Lake City','UT','99999','USA',NULL,NULL,''),(25,'Company Y','Rodman','John',NULL,'Purchasing Manager','(123)555-0100',NULL,NULL,'(123)555-0101','789 25th Street','Chicago','IL','99999','MT',NULL,NULL,''),(26,'Company Z','Liu','Run',NULL,'Accounting Assistant','(123)555-0100',NULL,NULL,'(123)555-0101','789 26th Street','Miami','FL','99999','USA',NULL,NULL,''),(27,'Company AA','Toh','Karen',NULL,'Purchasing Manager','(123)555-0100',NULL,NULL,'(123)555-0101','789 27th Street','Las Vegas','NV','99999','USA',NULL,NULL,''),(28,'Company BB','Raghav','Amritansh',NULL,'Purchasing Manager','(123)555-0100',NULL,NULL,'(123)555-0101','789 28th Street','Memphis','TN','99999','USA',NULL,NULL,''),(29,'Company CC','Lee','Soo Jung',NULL,'Purchasing Manager','(123)555-0100',NULL,NULL,'(123)555-0101','789 29th Street','Denver','CO','99999','USA',NULL,NULL,'');
/*!40000 ALTER TABLE `Customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Employees`
--

DROP TABLE IF EXISTS `Employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Employees` (
  `EmployeeID` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `email_address` varchar(50) DEFAULT NULL,
  `job_title` varchar(50) DEFAULT NULL,
  `business_phone` varchar(25) DEFAULT NULL,
  `home_phone` varchar(25) DEFAULT NULL,
  `mobile_phone` varchar(25) DEFAULT NULL,
  `fax_number` varchar(25) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `Region` varchar(50) DEFAULT NULL,
  `zip_postal_code` varchar(15) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `web_page` longtext DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `attachments` longblob DEFAULT NULL,
  PRIMARY KEY (`EmployeeID`),
  KEY `city` (`city`),
  KEY `company` (`company`),
  KEY `first_name` (`first_name`),
  KEY `last_name` (`LastName`),
  KEY `zip_postal_code` (`zip_postal_code`),
  KEY `state_province` (`Region`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Employees`
--

LOCK TABLES `Employees` WRITE;
/*!40000 ALTER TABLE `Employees` DISABLE KEYS */;
INSERT INTO `Employees` VALUES (1,'Northwind Traders','Freehafer','Nancy','nancy@northwindtraders.com','Sales Representative','(123)555-0100','(123)555-0102',NULL,'(123)555-0103','123 1st Avenue','Seattle','WA','99999','USA','#http://northwindtraders.com#',NULL,''),(2,'Northwind Traders','Cencini','Andrew','andrew@northwindtraders.com','Vice President, Sales','(123)555-0100','(123)555-0102',NULL,'(123)555-0103','123 2nd Avenue','Bellevue','WA','99999','USA','http://northwindtraders.com#http://northwindtraders.com/#','Joined the company as a sales representative, was promoted to sales manager and was then named vice president of sales.',''),(3,'Northwind Traders','Kotas','Jan','jan@northwindtraders.com','Sales Representative','(123)555-0100','(123)555-0102',NULL,'(123)555-0103','123 3rd Avenue','Redmond','WA','99999','USA','http://northwindtraders.com#http://northwindtraders.com/#','Was hired as a sales associate and was promoted to sales representative.',''),(4,'Northwind Traders','Sergienko','Mariya','mariya@northwindtraders.com','Sales Representative','(123)555-0100','(123)555-0102',NULL,'(123)555-0103','123 4th Avenue','Kirkland','WA','99999','USA','http://northwindtraders.com#http://northwindtraders.com/#',NULL,''),(5,'Northwind Traders','Thorpe','Steven','steven@northwindtraders.com','Sales Manager','(123)555-0100','(123)555-0102',NULL,'(123)555-0103','123 5th Avenue','Seattle','WA','99999','Spain','http://northwindtraders.com#http://northwindtraders.com/#','Joined the company as a sales representative and was promoted to sales manager. Fluent in French.',''),(6,'Northwind Traders','Neipper','Michael','michael@northwindtraders.com','Sales Representative','(123)555-0100','(123)555-0102',NULL,'(123)555-0103','123 6th Avenue','Redmond','WA','99999','USA','http://northwindtraders.com#http://northwindtraders.com/#','Fluent in Japanese and can read and write French, Portuguese, and Spanish.',''),(7,'Northwind Traders','Zare','Robert','robert@northwindtraders.com','Sales Representative','(123)555-0100','(123)555-0102',NULL,'(123)555-0103','123 7th Avenue','Seattle','WA','99999','USA','http://northwindtraders.com#http://northwindtraders.com/#',NULL,''),(8,'Northwind Traders','Giussani','Laura','laura@northwindtraders.com','Sales Coordinator','(123)555-0100','(123)555-0102',NULL,'(123)555-0103','123 8th Avenue','Redmond','WA','99999','USA','http://northwindtraders.com#http://northwindtraders.com/#','Reads and writes French.',''),(9,'Northwind Traders','Hellung-Larsen','Anne','anne@northwindtraders.com','Sales Representative','(123)555-0100','(123)555-0102',NULL,'(123)555-0103','123 9th Avenue','Seattle','WA','99999','USA','http://northwindtraders.com#http://northwindtraders.com/#','Fluent in French and German.','');
/*!40000 ALTER TABLE `Employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GA_Alu_Curso`
--

DROP TABLE IF EXISTS `GA_Alu_Curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GA_Alu_Curso` (
  `idAluCurso` int(11) NOT NULL AUTO_INCREMENT,
  `idAlumno` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  PRIMARY KEY (`idAluCurso`),
  UNIQUE KEY `idAlumno` (`idAlumno`,`idCurso`),
  KEY `GA_Alu_Curso_idCurso` (`idCurso`),
  CONSTRAINT `GA_Alu_Curso_idAlumno` FOREIGN KEY (`idAlumno`) REFERENCES `GA_Alumno` (`idAlumno`),
  CONSTRAINT `GA_Alu_Curso_idCurso` FOREIGN KEY (`idCurso`) REFERENCES `GA_Curso` (`idCurso`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GA_Alu_Curso`
--

LOCK TABLES `GA_Alu_Curso` WRITE;
/*!40000 ALTER TABLE `GA_Alu_Curso` DISABLE KEYS */;
INSERT INTO `GA_Alu_Curso` VALUES (109,52,66),(111,52,74),(107,52,78),(110,52,79),(108,52,80),(112,52,81),(106,53,66),(115,54,74),(113,54,78),(114,54,79),(121,56,66),(122,56,74),(120,56,80),(117,58,66),(119,58,74),(116,58,78),(118,58,79);
/*!40000 ALTER TABLE `GA_Alu_Curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GA_Alumno`
--

DROP TABLE IF EXISTS `GA_Alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GA_Alumno` (
  `idAlumno` int(11) NOT NULL,
  `estudios` varchar(100) NOT NULL,
  PRIMARY KEY (`idAlumno`),
  CONSTRAINT `GA_Alumno_idAlumno` FOREIGN KEY (`idAlumno`) REFERENCES `GA_Persona` (`idPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GA_Alumno`
--

LOCK TABLES `GA_Alumno` WRITE;
/*!40000 ALTER TABLE `GA_Alumno` DISABLE KEYS */;
INSERT INTO `GA_Alumno` VALUES (52,'Master'),(53,'Universitarios'),(54,'Formacion profesional'),(56,'Universitarios'),(57,'Formacion profesional'),(58,'Formacion profesional');
/*!40000 ALTER TABLE `GA_Alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GA_Aula`
--

DROP TABLE IF EXISTS `GA_Aula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GA_Aula` (
  `idAula` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  PRIMARY KEY (`idAula`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GA_Aula`
--

LOCK TABLES `GA_Aula` WRITE;
/*!40000 ALTER TABLE `GA_Aula` DISABLE KEYS */;
INSERT INTO `GA_Aula` VALUES (1,'Informática 1'),(2,'Informática 2'),(3,'Informática 3'),(14,'Proyector/Presentaciones');
/*!40000 ALTER TABLE `GA_Aula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GA_Curso`
--

DROP TABLE IF EXISTS `GA_Curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GA_Curso` (
  `idCurso` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCurso` varchar(50) NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFinal` date DEFAULT NULL,
  `numHoras` int(11) NOT NULL,
  `idAula` int(11) NOT NULL,
  `idProfesor` int(11) NOT NULL,
  PRIMARY KEY (`idCurso`),
  KEY `GA_Curso_idAula` (`idAula`),
  KEY `GA_Curso_idProfesor` (`idProfesor`),
  CONSTRAINT `GA_Curso_idAula` FOREIGN KEY (`idAula`) REFERENCES `GA_Aula` (`idAula`),
  CONSTRAINT `GA_Curso_idProfesor` FOREIGN KEY (`idProfesor`) REFERENCES `GA_Profesor` (`idProfesor`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GA_Curso`
--

LOCK TABLES `GA_Curso` WRITE;
/*!40000 ALTER TABLE `GA_Curso` DISABLE KEYS */;
INSERT INTO `GA_Curso` VALUES (66,'HTMX',NULL,NULL,400,2,55),(74,'Swift','2023-12-01','2024-04-01',400,3,21),(78,'C #',NULL,NULL,280,1,62),(79,'PHP y MySQL',NULL,NULL,280,2,70),(80,'JavaScript','2023-12-01',NULL,380,1,70),(81,'COBOL','2024-04-01','2024-08-01',400,3,71);
/*!40000 ALTER TABLE `GA_Curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GA_Persona`
--

DROP TABLE IF EXISTS `GA_Persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GA_Persona` (
  `idPersona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `ape1` varchar(100) NOT NULL,
  `ape2` varchar(100) DEFAULT NULL,
  `DNI` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idPersona`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GA_Persona`
--

LOCK TABLES `GA_Persona` WRITE;
/*!40000 ALTER TABLE `GA_Persona` DISABLE KEYS */;
INSERT INTO `GA_Persona` VALUES (2,'Borja','Mulleras','Vinzia','43566645R'),(21,'Maia','Lorenzo','García','37794495X'),(52,'Alberto','Vargas','García','47732343C'),(53,'Arnau','Pérez','Muniesa','23222211X'),(54,'Laura','Masquefa','Palá','37783224X'),(55,'Marc','Sabata','Lara','47777782S'),(56,'Laia','Guerra','Gracia','477345532C'),(57,'Ivan','Herencia','Cabestany','39448223S'),(58,'Marta','Valencia','Costa','43365543D'),(62,'David','Marcó','Martinez','43211334J'),(70,'Borja','Mulleras','Vinzia','37794121X'),(71,'David','Alcolea','Martinez','34343281T');
/*!40000 ALTER TABLE `GA_Persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GA_Profesor`
--

DROP TABLE IF EXISTS `GA_Profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GA_Profesor` (
  `idProfesor` int(11) NOT NULL,
  PRIMARY KEY (`idProfesor`),
  CONSTRAINT `GA_Profesor_idProfesor` FOREIGN KEY (`idProfesor`) REFERENCES `GA_Persona` (`idPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GA_Profesor`
--

LOCK TABLES `GA_Profesor` WRITE;
/*!40000 ALTER TABLE `GA_Profesor` DISABLE KEYS */;
INSERT INTO `GA_Profesor` VALUES (21),(55),(62),(70),(71);
/*!40000 ALTER TABLE `GA_Profesor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GB_Autor`
--

DROP TABLE IF EXISTS `GB_Autor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GB_Autor` (
  `idAutor` int(11) NOT NULL,
  `generoLiterario` varchar(150) NOT NULL,
  `premios` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idAutor`),
  CONSTRAINT `GB_Autor_idAutor` FOREIGN KEY (`idAutor`) REFERENCES `GB_Persona` (`idPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GB_Autor`
--

LOCK TABLES `GB_Autor` WRITE;
/*!40000 ALTER TABLE `GB_Autor` DISABLE KEYS */;
INSERT INTO `GB_Autor` VALUES (2,'Fantasía','The Reading List award for fantasy 2008'),(23,'Fantasía, Mundo mágico','Orden del Imperio Británico por su contribución a la literatura infantil'),(24,'Psicología',''),(27,'Literatura fantástica, Ciencia ficción','Premio Locus a la mejor novela de fantasía'),(28,'Género negro y criminal, novela policiaca',''),(32,'Novela rosa','Premio Torre di Castruccio, Premio Insula Romana 2004'),(33,'Novela y cuento','Bisto Book of the Year'),(44,'Tragedia, comedia, obras históricas, fantasía, juicios críticos',''),(49,'Gótico, Novela','Barry Award a la mejor primera novela 2005'),(57,'Autobiografía','Los 100 Libros del S.XX según Le Monde'),(62,'Novela histórica','Children\'s Book of the Year Award: Older Readers, Premio Alemán de Literatura Juvenil (2007)'),(63,'Historieta','');
/*!40000 ALTER TABLE `GB_Autor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GB_Autor_Libro`
--

DROP TABLE IF EXISTS `GB_Autor_Libro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GB_Autor_Libro` (
  `idAutorLibro` int(11) NOT NULL AUTO_INCREMENT,
  `idLibro` int(11) DEFAULT NULL,
  `idAutor` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAutorLibro`),
  KEY `GB_Autor_Libro_idLibro` (`idLibro`),
  KEY `GB_Autor_Libro_idAutor` (`idAutor`),
  CONSTRAINT `GB_Autor_Libro_idAutor` FOREIGN KEY (`idAutor`) REFERENCES `GB_Autor` (`idAutor`),
  CONSTRAINT `GB_Autor_Libro_idLibro` FOREIGN KEY (`idLibro`) REFERENCES `GB_Libro` (`idLibro`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GB_Autor_Libro`
--

LOCK TABLES `GB_Autor_Libro` WRITE;
/*!40000 ALTER TABLE `GB_Autor_Libro` DISABLE KEYS */;
INSERT INTO `GB_Autor_Libro` VALUES (1,2,2),(6,22,24),(8,23,27),(9,21,28),(11,25,2),(12,26,23),(13,27,23),(14,28,23),(15,29,23),(16,30,23),(17,31,23),(18,32,23),(19,34,32),(20,35,32),(21,33,33),(23,41,27),(24,42,27),(50,49,44),(51,19,49),(55,53,57),(56,54,62),(57,55,63);
/*!40000 ALTER TABLE `GB_Autor_Libro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GB_Libro`
--

DROP TABLE IF EXISTS `GB_Libro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GB_Libro` (
  `idLibro` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `numPaginas` int(11) DEFAULT NULL,
  `idioma` varchar(50) NOT NULL,
  `añoPublicacion` int(4) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `generoLiterario` varchar(50) NOT NULL,
  `premios` varchar(350) DEFAULT NULL,
  `sinopsisLibro` text NOT NULL,
  `imagen` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`idLibro`),
  KEY `GB_Libro_idUsuario` (`idUsuario`),
  CONSTRAINT `GB_Libro_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `GB_Usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GB_Libro`
--

LOCK TABLES `GB_Libro` WRITE;
/*!40000 ALTER TABLE `GB_Libro` DISABLE KEYS */;
INSERT INTO `GB_Libro` VALUES (2,'EL NOMBRE DEL VIENTO',880,'Español',2007,47,'Fantasía heroica, Literatura fantástica, Novela','The Reading List award for fantasy 2008',' \"Músico, ladrón, mago, asesino y héroe: ésta es la leyenda de Kvothe. Su verdadera historia sólo empezará a contarla en El nombre del viento.\r\nKvothe es un personaje legendario, el héroe y el villano de miles de historias que corren entre la gente. Todos le dan por muerto, cuando en realidad vive con un nombre falso en una posada apartada y humilde, de la que es propietario. Nadie sabe ahora quién es. Hasta que una noche un viajero, llamado el Cronista, le reconoce y le suplica que le revele su historia, la verdadera, a lo que finalmente Kvothe accede. Pero habrá mucho que contar, le llevará tres días. Este es el primero…\"','https://3.bp.blogspot.com/-5UKm2TSFM1g/TyHEFJKIJII/AAAAAAAAAIU/Hr_qUyJCsHw/s400/El+nombre+del+viento+-+Portada.jpg'),(19,'LA SOMBRA DEL VIENTO',565,'Español',2001,NULL,'Novela, Misterio, Suspense, Ficción gótica','Barry Award a la mejor primera novela 2005','El mayor éxito internacional de la novela española. Más de un millón de ejemplares vendidos.\r\nUn amanecer de 1945 un muchacho es conducido por su padre a un misterioso lugar oculto en el corazón de la ciudad vieja: El Cementerio de los Libros Olvidados. Allí, Daniel Sempere encuentra un libro maldito que cambiará el rumbo de su vida y le arrastrará a un laberinto de intrigas y secretos enterrados en el alma oscura de la ciudad.La Sombra del Viento es un misterio literario ambientado en la Barcelona de la primera mitad del siglo XX, desde los últimos esplendores del Modernismo a las tinieblas de la posguerra.La Sombra del Viento mezcla técnicas de relato de intriga, de novela histórica y de comedia de costumbres pero es, sobre todo, una tragedia histórica de amor cuyo eco se proyecta a través del tiempo. Con gran fuerza narrativa, el autor entrelaza tramas y enigmas a modo de muñecas rusas en un inolvidable relato sobre los secretos del corazón y el embrujo de los libros, manteniendo la intriga hasta la última página.','https://imagessl5.casadellibro.com/a/l/s7/45/9788408043645.webp'),(21,'SÉ LO QUE ESTAS PENSANDO',432,'Español, Inglés, Francés y Catalán',2010,NULL,'Suspense, Misterio, Ficción detectivesca','','Un hombre recibe una carta que le urge a pensar en un número, cualquiera. Cuando abre el pequeño sobre que acompaña al texto, siguiendo las instrucciones que figuran en la propia carta, se da cuenta de que el número allí escrito es exactamente en el que había pensado. David Gurney, un policía que después de 25 años de servicio se ha retirado al norte del Estado de Nueva York con su esposa, se verá involucrado en el caso cuando un conocido, el que ha recibido la carta, le pide ayuda para encontrar a su autor con urgencia. Pero lo que en principio parecía poco más que un chantaje se ha acabado convirtiendo en un caso de asesinato que además guarda relación con otros sucedidos en el pasado. Gurney deberá desentrañar el misterio de cómo este criminal parece capaz de leer la mente de sus víctimas en primer lugar, para poder llegar a establecer el patrón que le permita atraparlo.\r\n«La novela de John Verdon es uno de los mejores thrillers que he leído en años. Lo devoré. Es inteligente, sólido, compulsivo, lleno de giros brillantes, profundidad psicológica y personajes que llenan de vida sus páginas, te entretiene desde la primera escena hasta el tenso final.» John Katzenbach. \r\n\r\n\r\n«Sé lo que estás pensando es imposible de dejar de leer. En contadas ocasiones, ha llegado a mis manos una primera novela que me haya atrapado de esta manera. Espero volver a encontrarme con este autor y su inteligente protagonista.» Nelson DeMille ','https://libreria-alzofora.com/wp-content/uploads/2023/10/SE-LO-QUE-ESTAS-PENSANDO-175298.jpg'),(22,'LAS GAFAS DE LA FELICIDAD',NULL,'Català',2014,NULL,'Psicología, Autoayuda',NULL,'Rafael Santandreu es uno de los psicólogos más prestigiosos de España.  Está especializado en ayudar a las personas a desarrollar su  fortaleza  emocional. A través de su método, miles de personas han conseguido perder sus miedos de forma permanente.\r\n\r\n«Este libro pretende convertirte en una persona mucho más fuerte y  feliz. Aglutina todos los mecanismos que conoce la psicología moderna  para transformarnos. Personalmente no soy fan de los libros de  autoayuda, excepto de aquellos basados en la evidencia. Aquí te  ofrezco  solo herramientas de comprobada eficacia y te aseguro que el 80% de los  pacientes que han seguido mi combinación terapéutica han dejado  completamente atrás la depresión, la ansiedad, las obsesiones y los miedos exagerados.»\r\nRafael Santandreu\r\n\r\nAhora te toca a ti descubrir las lentes que te enseñarán a graduar tu corazón y tu mente.\r\n\r\n¡Ponte las gafas de la felicidad!','https://cdn.kobo.com/book-images/27ade26d-24c6-453d-9bd1-5ea63515effa/353/569/90/False/las-gafas-de-la-felicidad-1.jpg'),(23,'TORMENTA DE ESPADAS',685,'Inglés',2000,NULL,'Novela, Literatura fantástica',NULL,'Las huestes de los fugaces reyes de Poniente, descompuestas en hordas, asuelan y esquilman una tierra castigada por la guerra e indefensa ante un invierno que se anuncia inusitadamente crudo. Las alianzas nacen y se desvanecen como volutas de humo bajo el viento helado del Norte. Ajena a las intrigas palaciegas, e ignorante del auténtico peligro en ciernes, la Guardia de la Noche se ve desbordada por los salvajes. Y al otro lado del mundo, Daenerys Targaryen intenta reclutar en las Ciudades Libres un ejército con el que desembarcar en su tierra. Martin hace que lo imposible parezca sencillo. Tormenta de espadas confirma Canción de hielo y fuego como un hito de la fantasía épica. Brutal y poética, conmovedora y cruel, la magia de Martin, como la del mundo de Poniente, necesita apenas una pincelada para cautivar al lector, hacerlo reír y llorar, y conseguir que el asombro ceda paso a la más profunda admiración por la serie.\r\n','https://fantasytienda.fantasymundo.com/wp-content/uploads/2020/11/898.jpg	'),(25,'LA MÚSICA DEL SILENCIO',152,'Español, Ingles, Alemán, Francés',2014,NULL,'Literatura fantástica',NULL,'\"Al despertar, Auri supo que faltaban siete días. Sí, estaba segura. Él iría a visitarla al septimo día.\"\r\n\r\n \r\nLa Universidad, el bastión del conocimiento, atrae a las mentes más  brillantes para aprender ciencias como la artificería y la alquimia.  Pero bajo esos edificios y sus concurridas aulas existe un mundo en penumbra.\r\n\r\n \r\nEn ese laberinto de túneles antiguos, de salas y habitaciones  abandonadas, de escaleras serpenteantes y pasillos semiderruidos vive   Auri, otrora alumna de la Universidad. Ahora cuida de la Subrealidad,  de la que ha aprendido que hay misterios que no conviene remover. Ya no  se deja engañar por la lógica en la que tanto confían en lo alto: ella  sabe reconocer los sutiles peligros y los nombres  olvidados que se ocultan bajo la superficie de las cosas.','https://imagessl5.casadellibro.com/a/l/s7/75/9788401343575.webp'),(26,'HARRY POTTER Y LA PIEDRA FILOSOFAL',264,'Castellano, Inglés y Catalán',1997,NULL,'Fantasía, Mundo mágico, Suspense','National Book Award 1997','\"Con las manos temblorosas, Harry le dio la vuelta al sobre y vio un  sello de lacre púrpura con un escudo de armas: un león, un águila, un tejón y una serpiente, que rodeaban una gran letra H.\"\r\n\r\n \r\nHarry Potter nunca ha oído hablar de Hogwarts hasta que empiezan a caer  cartas en el felpudo del número 4 de Privet Drive. Llevan la dirección  escrita con tinta verde en un sobre de pergamino amarillento con un  sello de lacre púrpura, y sus horripilantes tíos se apresuran a  confiscarlas. Más tarde, el día que Harry cumple once años, Rubeus  Hagrid, un hombre gigantesco cuyos ojos brillan como escarabajos negros,  irrumpe con una noticia extraordinaria: Harry Potter es un mago, y le  han concedido una plaza en el Colegio Hogwarts de Magia y Hechicería. ¡Está a punto de comenzar una aventura increíble!','https://imagessl2.casadellibro.com/a/l/s7/52/9788478884452.webp'),(27,'HARRY POTTER Y LA CÁMARA SECRETA',296,'Español, Inglés, Catalán',1998,NULL,'Fantasía, Mundo mágico, Suspense','Children\'s Book of the Year British Book Award 1998','«Hay una conspiración, Harry Potter. Una conspiración para hacer que este año sucedan las cosas más terribles en el Colegio Hogwarts de Magia y Hechicería.»\r\n\r\nEl verano de Harry Potter ha incluido el peor cumpleaños de su vida, las funestas advertencias de un elfo doméstico llamado Dobby y el rescate de casa de los Dursley protagonizado por su amigo Ron Weasley al volante de un coche mágico volador. De vuelta en el Colegio Hogwarts de Magia y Hechicería, donde va a empezar su segundo curso, Harry oye unos extraños susurros que resuenan por los pasillos vacíos. Y entonces empiezan los ataques y varios alumnos aparecen petrificados... Por lo visto, las siniestras predicciones de Dobby se están cumpliendo....','https://imagessl7.casadellibro.com/a/l/s7/57/9788478884957.webp'),(28,'HARRY POTTER Y EL PRISIONERO DE AZKABAN',360,'Español, Inglés, Catalán',1999,NULL,'Fantasía, Mundo mágico, Suspense','Premio Elección Booklist Editor 1999, Premio Locus a la mejor novela fantástica 2000','«Bienvenido al autobús noctámbulo, transporte de emergencia para el  brujo abandonado a su suerte. Levante la varita, suba a bordo y lo llevaremos a donde quiera.»\r\n\r\nCuando el autobús noctámbulo irrumpe en una calle oscura y frena con  fuertes chirridos delante de Harry, comienza para él un nuevo curso en  Hogwarts, lleno de acontecimientos extraordinarios. Sirius Black,  asesino y seguidor de lord Voldemort, se ha fugado, y dicen que va en  busca de Harry. En su primera clase de Adivinación, la profesora  Trelawney ve un augurio de muerte en las hojas de té de la taza de  Harry... Pero quizá lo más aterrador sean los dementores que patrullan  por los jardines del colegio, capaces de sorberte el alma con su beso...','https://imagessl0.casadellibro.com/a/l/s7/90/9788478885190.webp'),(29,'HARRY POTTER Y EL CALIZ DE FUEGO',672,'Español, Inglés, Catalán',2000,NULL,'Fantasía, Mundo mágico, Suspense','Premio Hugo a la mejor novela 2001','\"Habrá tres pruebas, espaciadas en el curso escolar, que medirán a los  campeones en muchos aspectos diferentes: sus habilidades mágicas, su  osadía, sus dotes de deducción y, por supuesto, su capacidad para sortear el peligro.\"\r\n\r\nSe va a celebrar en Hogwarts el Torneo de los Tres Magos. Sólo los  alumnos mayores de diecisiete años pueden participar en esta competición, pero, aun así, Harry sueña con ganarla. En Halloween,  cuando el cáliz de fuego elige a los campeones, Harry se lleva una  sorpresa al ver que su nombre es uno de los escogidos por el cáliz  mágico. Durante el torneo deberá enfrentarse a desafíos mortales,  dragones y magos tenebrosos, pero con la ayuda de Ron y Hermione, sus mejores amigos, ¡quizá logre salir con vida!','https://imagessl6.casadellibro.com/a/l/s7/56/9788478886456.webp'),(30,'HARRY POTTER Y LA ORDEN DEL FENIX',928,'Español, Catalán',2003,NULL,'Fantasía, Mundo mágico, Suspense','ALA Notable Books for Children','«El director cree que no es conveniente que eso continúe ocurriendo.  Quiere que te enseñe a cerrar tu mente al Señor Tenebroso.»\r\n\r\nSon malos tiempos para Hogwarts. Tras el ataque de los dementores a su  primo Dudley, Harry Potter comprende que Voldemort no se detendrá ante  nada para encontrarlo. Muchos niegan que el Señor Tenebroso haya  regresado, pero Harry no está solo: una orden secreta se  reúne en  Grimmauld Place para luchar contra las fuerzas oscuras. Harry debe  permitir que el profesor Snape le enseñe a protegerse de las brutales  incursiones de Voldemort en su mente. Pero éstas son cada vez más potentes, y a Harry se le está agotando el tiempo...','https://imagessl2.casadellibro.com/a/l/s7/22/9788478887422.webp'),(31,'HARRY POTTER Y EL MISTERIO DEL PRINCIPE',576,'Español, Inglés, Catalán',2005,NULL,'Fantasía, Mundo mágico, Suspense','British Book libro del año 2006, \r\nNickelodeon\'s choice libro del año 2006, \r\nAsociación de Bibliotecas de los Estados Unidos como mejor libro para jóvenes adultos 2006,\r\nBooklist Editor\'s Choice,\r\nPremio Pluma a «Book of the Year» y «Quill Children\'s Chapter / Middle Grade Book of the Year»[...]','Con dieciseis años cumplidos, Harry inicia el sexto curso en Hogwarts en  medio de terribles acontecimientos que asolan Inglaterra. Elegido capitán del equipo de quidditch, los ensayos, los exámenes y las chicas ocupan todo su tiempo, pero la tranquilidad dura poco.\r\n\r\n \r\nA pesar de los ferreos controles de seguridad que protegen la escuela,  dos alumnos son brutalmente atacados. Dumbledore sabe que se  acerca el  momento, anunciado por la Profecía, en que Harry y Voldemort se enfrentarán a muerte: \"El único con poder para vencer al  Señor  Tenebroso se acerca... Uno de los dos debe morir a manos del otro, pues  ninguno de los dos podrá vivir mientras siga el otro  con vida.\"\r\n\r\n \r\nEl anciano director solicitará la ayuda de Harry y juntos emprenderán  peligrosos viajes para intentar debilitar al enemigo, para lo  cual el  joven mago contará con un viejo libro de pociones perteneciente a un misterioso personaje, alguien que se hace llamar Príncipe Mestizo.','https://imagessl7.casadellibro.com/a/l/s7/07/9788478889907.webp'),(32,'HARRY POTTER Y LAS RELIQUIAS DE LA MUERTE',640,'Español, Inglés, Catalán',2007,NULL,'Fantasía, Mundo mágico, Suspense','Children’s Choice Book Awards 2008,\r\nUSA Today Book of the year 2007,\r\nAmazon Best Book 2007','\"Entregadme a Harry Potter -dijo la voz de Voldemort- y nadie sufrirá  ningún daño. Entregadme a Harry Potter y dejare el colegio intacto. Entregadme a Harry Potter y sereis recompensados.\"\r\n\r\n \r\nCuando se monta en el sidecar de la moto de Hagrid y se eleva en el  cielo, dejando Privet Drive por última vez, Harry Potter sabe que lord  Voldemort y sus mortífagos se hallan cerca. El encantamiento protector  que había mantenido a salvo a Harry se ha roto, pero el no puede seguir  escondiendose. El Señor Tenebroso se dedica a aterrorizar a todos los  seres queridos de Harry, y, para detenerlo, este habrá de encontrar y destruir los horrocruxes que quedan. La batalla definitiva debe comenzar: Harry tendrá que alzarse y enfrentarse a su enemigo...','https://imagessl5.casadellibro.com/a/l/s7/05/9788498381405.webp'),(33,'EL NIÑO CON EL PIJAMA DE RAYAS',224,'Español, Ingles, Alemán, Francés',2006,NULL,'Novela histórica, Drama, Literatura infantil','Irish Book Awards (x2), Premio de la revista Qué leer a la mejor novela traducida 2007','Estimado lector, estimada lectora:\r\n\r\nAunque el uso habitual de un texto como éste es describir las  características de la obra, por una vez nos tomaremos la libertad de  hacer una excepción a la norma establecida. No sólo porque el libro que  tienes en tus manos es muy difícil de definir, sino porque estamos  convencidos de que explicar su contenido estropearía la experiencia de  la lectura. Creemos que es importante empezar esta novela sin saber de qué trata.\r\n\r\nNo obstante, si decides embarcarte en la aventura, debes saber que  acompañarás a Bruno, un niño de nueve años, cuando se muda con su  familia a una casa junto a una cerca. Cercas como ésa existen en muchos  sitios del mundo, sólo deseamos que no te encuentres nunca con una. Por  último, cabe aclarar que este libro no es sólo para adultos; también lo  pueden leer, y sería recomendable que lo hicieran, niños a partir de los trece años de edad.','https://imagessl8.casadellibro.com/a/l/s7/98/9788498380798.webp'),(34,'PERDONA SI TE LLAMO AMOR',688,'Español, Italiano',2007,NULL,'Novela rosa, Ficción',NULL,'¿Y si fuera amor, amor de verdad? Una deliciosa novela sobre el poder del amor \r\nNiki es una joven madura y responsable que cursa su último año de secundaria. Alessandro es un exitoso publicista de treinta y siete años a quien acaba de dejar su novia de toda la vida. A pesar de los veinte años de diferencia que hay entre ambos y del abismo generacional que los separa, Niki y Alessandro se enamorarán locamente y vivirán una apasionada historia de amor en contra de todas las convenciones y prejuicios sociales.','https://proassetspdlcom.cdnstatics2.com/usuaris/libros/thumbs/b155ebfd-45b1-49c2-bfd4-6242357b3180/d_360_620/perdona-si-te-llamo-amor_9788408076940.webp'),(35,'A TRES METROS SOBRE EL CIELO',464,'Españo e Italiano',1992,NULL,'Novela rosa, Ficción','Premio Torre di Castruccio 2004, Premio Insula Romana para jóvenes adultos 2004, Best Seller en Amazon','La primera novela de Federico Moccia, que lo lanzó a la fama.\r\nBabi es una estudiante modelo y la hija perfecta. Step, en cambio, es violento y descarado. Provienen de dos mundos completamente distintos. A pesar de todo, entre los dos nacerá un amor más allá de todas las convenciones. Un amor controvertido por el que deberán luchar más de lo que esperaban. Babi y Step se erigen como un Romeo y Julieta contemporáneos en Roma, un escenario que parece creado para el amor.\r\n','https://imagessl5.casadellibro.com/a/l/s7/85/9788408082385.webp'),(41,'FUEGO Y SANGRE (CANCIÓN DE HIELO Y FUEGO)',880,'Español e Inglés',2018,NULL,'Literatura fantástica','','Siglos antes de que tuvieran lugar los acontecimientos que se relatan en «Canción de hielo y fuego», la casa Targaryen, la única dinastía de señores dragón que sobrevivió a la Maldición de Valyria, se asentó en la isla de Rocadragón.\r\n\r\nAquí tenemos el primero de los dos volúmenes en el que el autor deJuego de tronos nos cuenta, con todo lujo de detalles, la historia de tan fascinante familia: empezando por Aegon I Targaryen, creador del icónico Trono de Hierro, y seguido por el resto de las generaciones de Targaryens que lucharon con fiereza por conservar el poder, y el trono, hasta la llegada de la guerra civil que casi acaba con ellos.\r\n\r\n¿Qué pasó realmente durante la Danza de dragones? ¿Por qué era tan peligroso acercarse a Valyria después de la Maldición? ¿Cómo era Poniente cuando los dragones dominaban los cielos? Estas, y otras muchas, son las preguntas a las que responde esta monumental crónica, narrada por un culto maestre de la Ciudadela, que anticipa el ya conocido universo de George R.R. Martin.\r\n\r\nFuego y Sangre brindará a los lectores la oportunidad de tener otra visión de la fascinante historia de Poniente. Esta obra, magníficamente ilustrada con 80 láminas inéditas de Doug Wheatley, se convertirá, sin duda, en una lectura ineludible para todos los fans de la aclamada serie.','https://imagessl6.casadellibro.com/a/l/s7/66/9788401022166.webp'),(42,'DANZA DE DRAGONES (CANCIÓN DE HIELO Y FUEGO 5)',1136,'Español, Inglés',2011,NULL,'Literatura fantástica','','«Mata al niño, Jon Nieve. El invierno se nos echa encima. Mata al niño y que nazca el hombre.»\r\n\r\n\r\nLa victoria de los leones Lannister ha dejado tras de sí un interminable reguero de sangre: lord Tywin yace enterrado, asesinado por mano de su propio hijo; la reina Cersei está encadenada y el pequeño rey Tommen ocupa un trono que podría matarlo. El destino de Poniente pende de un hilo.\r\n\r\n\r\nEn el Muro, Jon Nieve se ve obligado a consolidar por la espada su rango como lord comandante de la Guardia de la Noche. Mientras, al otro lado del mar Angosto, Daenerys Targaryen, la Madre de Dragones, defiende su dominio contra hordas de enemigos tanto viejos como nuevos.\r\n\r\n\r\nTras huir a las Ciudades Libres, el parricida Tyrion Lannister podría ser la clave para que la sangre del dragón, que nunca llegó a extinguirse por completo, resurja. No obstante, todo esfuerzo tal vez resulte ser en vano. Porque ahora, verdaderamente... se acerca el invierno.','https://imagessl2.casadellibro.com/a/l/s7/62/9788401032462.webp'),(43,'JUEGO DE TRONOS (CANCIÓN DE HIELO Y FUEGO 1)',800,'Español e Inglés',1996,NULL,'Literatura, Narrativa fantástica','Premio Locus (1997), Premio Ignotus (2003)','«Cuando se juega al juego de tronos, solo se puede ganar o morir. No hay puntos intermedios.»\r\n\r\n\r\nEn un mundo diferente al nuestro, en el que los veranos y los inviernos duran generaciones, un gran conflicto está a punto de estallar. Robert Baratheon ocupa el Trono de Hierro en el cálido y opulento sur de Poniente. Se lo arrebató tras una sangrienta guerra al último rey loco de la dinastía Targaryen, señores de dragones.\r\n\r\n\r\nSin embargo, ahora su poder se ve amenazado: en el norte, el Muro erigido para proteger el reino de las bestias y de los extraños se tambalea. Hace siglos que nadie ve a los caminantes blancos, pero ¿quiénes son entonces esos seres de ojos azules y fríos que se ocultan en las sombras de los bosques y que les arrebatan la vida y la mente a aquellos desafortunados que se cruzan en su camino? El final del verano está próximo, se acerca el invierno y solo un milagro podrá disipar las tinieblas.','https://imagessl4.casadellibro.com/a/l/s7/24/9788401032424.webp'),(49,'hamlet',320,'Español e Inglés',1602,NULL,'Tragedia, drama','','HAMLET, la obra más conocida de Shakespeare, es en realidad una pieza llena de lagunas e indefiniciones. Una obra enigmática y misteriosa, en la que cada personaje es un artista de la simulación. El propio Hamlet es un ser en continua transformación. En él caben la ceremoniosidad, la cortesía y la reflexión, junto a la pasión, la burla, el enigma o la posibilidad de la locura. En el castillo de Elsenor, en un ambiente que emana corrupción y desconfianza, claustrofóbico y hostil, se alternan escenas solemnes y reveses irónicos, al tiempo que se agita una corte de personajes cuyo sentido último será llevar a Hamlet a vencer su tensión interna y cumplir la venganza por la muerte de su padre. El magnífico estudio de Ángel-Luis Pujante que precede su traducción analiza el carácter incoherente e incierto de la tragedia y sitúa el atractivo de una obra tan compleja y rica en ese halo de misterio que suscita la duda, requiere la meditación y que la ha convertido en uno de los grandes mitos de Occidente.','https://imagessl0.casadellibro.com/a/l/s7/80/9788467033380.webp'),(53,'El diario de Ana Frank',384,'Español, Ingles, Francés',1947,NULL,'Autobiografía','Los 100 Libros del S.XX según Le Monde','Oculta con su familia y otra familia judía (los Van Daan), en una buhardilla de unos almacenes de Ámsterdam durante la ocupación nazi de Holanda.  Ana Frankcon trece años, cuenta en su diario, al que llamó «Kitty», la vida del grupo. Ayudados por varios empleados de la oficina, permanecieron durante más de dos años en el achterhuis (conocido como «el anexo secreto») hasta que, finalmente, fueron delatados y detenidos. Ana escribió un diario entre el 12 de junio de 1942 y el 1 de agosto de 1944. El 4 de agosto de 1944, unos vecinos (se desconocen los nombres) delatan a los ocho escondidos en \"la casa de atrás\". Además del Diario escribió varios cuentos que han sido publicados paulatinamente desde 1960. Su hermana, Margot Frank también escribió un diario, pero nunca se encontró ningún rastro de éste.\r\n\r\nDespués de permanecer durante un tiempo en los campos de concentración de Westerbork en Holanda y Auschwitzen Polonia, Ana y su hermana mayor, Margot, fueron deportadas a Bergen-Belsen, donde ambas murieron durante una epidemia de tifus entre finales de febrero y mediados de marzo de 1945 (el tifus fue causado por la extrema falta de higiene en el campo de concentración). Edith Holländer (madre de Margot y Ana) muere de inanición en el campo de concentración de Auschwitz-Birkenau. Hermann Van Pels (uno de los ocho escondidos) fue enviado el 6 de septiembre de 1944 a las cámaras de gas de Auschwitz, donde muere semanas más tarde. Su esposa, Auguste Van Pels, muere a mediados de abril de 1945 en el campo de concentración de Theresienstadt. Peter Van Pels muere el 5 de mayo de 1945, tres días antes de la liberación. En cuánto a Fritz Pfeffer, murió en el campo de concentración de Neuengamme, el 20 de diciembre de 1944.\r\n\r\nEl diario se publica por primera vez bajo el título Het Achterhuis (la casa de atrás) en Holanda, en 1947, por el editor Contact. En abril de 1955 se publica la primera traducción al español con el título Las habitaciones de atrás (editorial Garbo, Barcelona).\r\n\r\nAsí pues el Diario de Ana Frank es un testimonio único en su género sobre el horror y la barbarie nazi, y sobre los sentimientos y experiencias de la propia Ana y sus acompañantes. Ana murió en el campo de Bergen-Belsen en marzo de 1945. Su Diario nunca morirá.','https://imagessl9.casadellibro.com/a/l/s7/69/9788497593069.webp'),(54,'la ladrona de libros',544,'Español',2005,NULL,'Novela, Literatura juvenil','Premio Michael L. Printz en 2007, 2006 - School Library Journal Best Book of the Year, 2007 - Book Sense Book of the Year, 2006 - Booklist Children\'s Editors\' Choice....','Una novela preciosa, tremendamente humana y emocionante, que describe  las peripecias de una niña alemana de nueve años desde que es dada en  adopción por su madre hasta el final de la II Guerra Mundial.\r\n\r\nUNO DE LOS 30 MEJORES NOVELAS HISTÓRICAS DE TODOS LOS TIEMPOS SEGÚNELLE\r\n\r\nÉrase una vez un pueblo donde las noches eran largas y la muerte contaba  su propia historia. En el pueblo vivía una niña que quería leer, un  hombre que tocaba el acordeón y un joven judío que escribía bellos  cuentos para escapar del horror de la guerra. Al cabo de un tiempo, la  niña se convirtió en una ladrona que robaba libros y regalaba palabras.  Con estas palabras se escribió una historia hermosa y cruel que ahora ya es una novela inolvidable.','https://imagessl6.casadellibro.com/a/l/s7/16/9788426416216.webp'),(55,'todas las personas que fui',208,'Español',2023,NULL,'Historieta','','Alfonso Casas vuelve con un viaje al centro de uno mismo. Porque para encontrarte hoy, hay que abrazar todas las personas que fuiste.\r\n\r\n \r\nEste es un libro para despedirse\r\n\r\n \r\nde las vidas que no vivirás,\r\n\r\n \r\nde las metas que ya no quieres alcanzar,\r\n\r\n \r\nde esas creencias que te limitaban y\r\n\r\n \r\nque ya no lo harán más.\r\n\r\n(Y, quizá, de algunos monstruos).\r\n\r\n \r\nPero tambien es un libro para\r\n\r\n \r\nencontrarse con la vida que eliges,\r\n\r\n \r\ncon el camino que dibujas al andar ,\r\n\r\n \r\ncon todas las personas que fuiste\r\n\r\n \r\ny con aquella en la que te convertirás.','https://imagessl6.casadellibro.com/a/l/s7/76/9788418040276.webp');
/*!40000 ALTER TABLE `GB_Libro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GB_Persona`
--

DROP TABLE IF EXISTS `GB_Persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GB_Persona` (
  `idPersona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) DEFAULT NULL,
  `DNI` varchar(50) DEFAULT NULL,
  `fechaNacimiento` date NOT NULL,
  `numeroTelefono` bigint(50) DEFAULT NULL,
  PRIMARY KEY (`idPersona`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GB_Persona`
--

LOCK TABLES `GB_Persona` WRITE;
/*!40000 ALTER TABLE `GB_Persona` DISABLE KEYS */;
INSERT INTO `GB_Persona` VALUES (1,'Daniel','Vargas','García','43566243B','1993-12-07',685830365),(2,'Patrick','Rothfuss','',NULL,'1976-10-13',0),(3,'Alberto','Vargas','García','47333743X','1986-10-07',646653212),(22,'Jose Antonio','Vargas','García','43551925E','1981-04-07',661871759),(23,'J.','K.','Rowling',NULL,'1965-07-31',0),(24,'Rafael','Santandreu','Lorite',NULL,'1969-12-08',NULL),(27,'George R.','R.','Martin',NULL,'1948-09-20',NULL),(28,'John P.','Verdon','',NULL,'1942-01-01',NULL),(29,'Carlos','Ruiz','Zafón',NULL,'1964-09-25',NULL),(32,'Federico','Moccia','',NULL,'1963-07-20',NULL),(33,'John','Boyne','',NULL,'1971-04-30',NULL),(44,'William','Shakespeare','',NULL,'1564-04-26',NULL),(47,'Carlos Javier','Ordoñez','Beltran','123456789','1988-10-10',613433202),(48,'Daniel','Vargas','Garcia',NULL,'1993-12-07',NULL),(49,'Carlos','Ruiz','Zafón',NULL,'1964-09-25',NULL),(57,'Annelies Marie','Frank','',NULL,'1929-06-12',NULL),(62,'Markus','Zusak','',NULL,'1975-06-23',NULL),(63,'Alfonso','Casas','Moreno',NULL,'1981-07-04',NULL);
/*!40000 ALTER TABLE `GB_Persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GB_Usuario`
--

DROP TABLE IF EXISTS `GB_Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GB_Usuario` (
  `idUsuario` int(11) NOT NULL,
  `perfilUsuario` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `valor_cookie` varchar(100) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  CONSTRAINT `GB_Usuario_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `GB_Persona` (`idPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GB_Usuario`
--

LOCK TABLES `GB_Usuario` WRITE;
/*!40000 ALTER TABLE `GB_Usuario` DISABLE KEYS */;
INSERT INTO `GB_Usuario` VALUES (1,'Administrador','dvg9383','21232f297a57a5a743894a0e4a801fc3','ai84limhrqug2qq6p5e90504uc','2023-11-27 13:39:22'),(3,'Usuario','avg1986','6f0e40fdd54d792d01d7ada08858f42a','',NULL),(22,'Administrador','tvg1981','b1379118cabf0ee7aa44c4a0b708c019','ifiounmveti809emavnb9olb9l','2023-11-04 14:10:48'),(47,'Usuario','SrCharles','25d55ad283aa400af464c76d713c07ad','6qav99o8cihelsipqphm2fe26m','2023-11-03 09:03:57');
/*!40000 ALTER TABLE `GB_Usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Plantas_Dosis_abono`
--

DROP TABLE IF EXISTS `Plantas_Dosis_abono`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Plantas_Dosis_abono` (
  `id_planta` int(11) NOT NULL,
  `Dosis` int(11) NOT NULL,
  `Comentario` varchar(400) NOT NULL,
  `id_marca` int(11) NOT NULL,
  KEY `planta_FK` (`id_planta`),
  KEY `marca_fk` (`id_marca`),
  CONSTRAINT `marca_fk` FOREIGN KEY (`id_marca`) REFERENCES `Plantas_Marcas` (`id`),
  CONSTRAINT `planta_FK` FOREIGN KEY (`id_planta`) REFERENCES `Plantas_Plantas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Plantas_Dosis_abono`
--

LOCK TABLES `Plantas_Dosis_abono` WRITE;
/*!40000 ALTER TABLE `Plantas_Dosis_abono` DISABLE KEYS */;
INSERT INTO `Plantas_Dosis_abono` VALUES (3,120,'Cada  15  días  en  primavera  y  verano.  Las hojas se ponen amarillas por falta de nutrientes.',1),(5,30,'Enriquecer  con fertilización  o  fertilizante  de lenta  liberación  hacia  fines  del  otoño.  Durante  la  primavera añadir  al  agua  de  riego fertilización  para  plantas  de  flores una vez al mes.',3),(7,240,'Aportar  fertilizante  líquido  diluido  en  agua cada 15 días en la etapa de crecimiento.',2),(9,120,'',2),(10,50,'Fertilizante líquido según las indicaciones del fabricante.',1),(11,60,'En primavera un poco de fertilización químico bajo  en  nitrógeno,    añadiendo  cada  20  días  un  poco  en  el agua de riego',1),(12,20,'Con añadir un poco de fertilizante líquido una vez cada 10 días es suficiente',2);
/*!40000 ALTER TABLE `Plantas_Dosis_abono` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Plantas_Estaciones`
--

DROP TABLE IF EXISTS `Plantas_Estaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Plantas_Estaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Estacion` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Plantas_Estaciones`
--

LOCK TABLES `Plantas_Estaciones` WRITE;
/*!40000 ALTER TABLE `Plantas_Estaciones` DISABLE KEYS */;
INSERT INTO `Plantas_Estaciones` VALUES (1,'Primavera'),(2,'Verano'),(3,'Otoño'),(4,'Invierno');
/*!40000 ALTER TABLE `Plantas_Estaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Plantas_Floracion`
--

DROP TABLE IF EXISTS `Plantas_Floracion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Plantas_Floracion` (
  `id_planta` int(11) NOT NULL,
  `id_estacion` int(11) NOT NULL,
  PRIMARY KEY (`id_planta`,`id_estacion`),
  KEY `FK_estacion` (`id_estacion`),
  CONSTRAINT `FK_estacion` FOREIGN KEY (`id_estacion`) REFERENCES `Plantas_Estaciones` (`id`),
  CONSTRAINT `FK_planta` FOREIGN KEY (`id_planta`) REFERENCES `Plantas_Plantas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Plantas_Floracion`
--

LOCK TABLES `Plantas_Floracion` WRITE;
/*!40000 ALTER TABLE `Plantas_Floracion` DISABLE KEYS */;
INSERT INTO `Plantas_Floracion` VALUES (3,2),(5,2),(5,3),(5,4),(6,1),(6,2),(6,3),(6,4),(7,1),(7,2),(9,3),(9,4),(10,1),(11,1),(11,2),(12,3),(12,4);
/*!40000 ALTER TABLE `Plantas_Floracion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Plantas_Marcas`
--

DROP TABLE IF EXISTS `Plantas_Marcas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Plantas_Marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Nombre` (`Nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Plantas_Marcas`
--

LOCK TABLES `Plantas_Marcas` WRITE;
/*!40000 ALTER TABLE `Plantas_Marcas` DISABLE KEYS */;
INSERT INTO `Plantas_Marcas` VALUES (2,'CASADOB'),(3,'CIRSADOB'),(1,'PRISADOB');
/*!40000 ALTER TABLE `Plantas_Marcas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Plantas_Plantas`
--

DROP TABLE IF EXISTS `Plantas_Plantas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Plantas_Plantas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_cientifico` varchar(300) NOT NULL,
  `Nombre_comun` varchar(300) NOT NULL,
  `Descripcion` varchar(2000) NOT NULL,
  `id_ubicacion` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ubicacion` (`id_ubicacion`),
  KEY `Nombre_cientifico` (`Nombre_cientifico`),
  KEY `Nombre_comun` (`Nombre_comun`),
  KEY `id_ubicacion` (`id_ubicacion`),
  KEY `Descripcion` (`Descripcion`(1024)),
  CONSTRAINT `FK_ubicacion` FOREIGN KEY (`id_ubicacion`) REFERENCES `Plantas_Ubicacion` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Plantas_Plantas`
--

LOCK TABLES `Plantas_Plantas` WRITE;
/*!40000 ALTER TABLE `Plantas_Plantas` DISABLE KEYS */;
INSERT INTO `Plantas_Plantas` VALUES (1,'Adiantum capillus-veneris','Culantrillo de pozo','Helecho con hojas finas',1,10),(3,'Allamanda violacea','Trompeta','Planta  trepadora  o  enredadera  con  bonitas flores rosas a rojas en forma de trompeta y hojas perennes.',2,0),(5,'Antigonon leptopus','Coral  vine, Flor  de  San  Diego, Corona de reina','Planta  trepadora,  con  zarcillos  presentes  en las  terminaciones  de  las  inflorescencias.  Tiene  las  raíces tuberosas. Tamaño: Alcanza los 1-2 (-10) m de largo. Hojas alternas, espiraladas, simples.',2,0),(6,'Beaucarnea inermis','Beucarnea, Soyate, Petate  de caballo, Pata de vaca','Planta siempre verde.',2,1),(7,'Calathea crocata','Calatea, Galatea','Arbusto  de  follaje  ornamental  con  pequeñitas flores blancas',2,33),(9,'Coleus blumei','Coleo, Cretona','Anual  o  perenne,  herbácea  o  semiarbustiva. Sus hojas son opuestas, simples, en forma de corazón. Los colores varían entre el verde y el amarillo, el rojo, el bronce, el púrpura y el gris, todos ellos variadamente jaspeados.',2,25),(10,'Cuphea hyssopifolia.','Mosquito, Trueno  de  Venus, Lluvia  de estrella, Falso brezo mexicano.','Arbusto perenne tropical de forma compacta',1,5),(11,'Euphorbia milii var. splendens.','Corona de Cristo, Espinas de Cristo.','Arbusto con  flores  y  espinas.  Hojas de  forma oblongo-espatulada,  verdes  en  ambas  caras  y  provistas  de una espina en su base de implantación al tallo. ',2,10),(12,'Euphorbia pulcherrima.','Nochebuena, Flor de Santa Catarina.','Arbusto con brácteas  y  en diferentes colores: rojas, amarillas, salmón, blancas, etc.',2,100),(14,'Paretus Bianyencus','Parer','La nueva planta',2,10),(16,'Georgius','Jordi','La planta del Jordi',2,1),(20,'test','test','un test',2,2);
/*!40000 ALTER TABLE `Plantas_Plantas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Plantas_Ubicacion`
--

DROP TABLE IF EXISTS `Plantas_Ubicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Plantas_Ubicacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Ubicacion` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Ubicacion` (`Ubicacion`),
  KEY `Ubicacion_2` (`Ubicacion`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Plantas_Ubicacion`
--

LOCK TABLES `Plantas_Ubicacion` WRITE;
/*!40000 ALTER TABLE `Plantas_Ubicacion` DISABLE KEYS */;
INSERT INTO `Plantas_Ubicacion` VALUES (2,'Exterior'),(1,'Interior'),(5,'Mixta');
/*!40000 ALTER TABLE `Plantas_Ubicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `valor` varchar(100) DEFAULT NULL,
  `fecha_conexion` datetime DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('albertovargas','6f0e40fdd54d792d01d7ada08858f42a','ldshdtbb15oqbqdfcnbbpn0e0m','2023-10-27 14:20:01'),('danielvargas','87afc9109595a7111b19ed57c77d7542','7ggnu3f8r597o5b8mtcstd5u6v','2023-10-26 12:24:56'),('fmilaca','5a6ff408326bd51aea87cb3b5c17924e','2of9glgbmcse3m1k816h2vknak','2023-10-27 14:29:54'),('tonacovargas','b1379118cabf0ee7aa44c4a0b708c019','a79aagfh60d8ko4gd2lmt35s5a','2023-10-13 10:11:53');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'nascor04_bddCurso'
--
/*!50003 DROP FUNCTION IF EXISTS `nombre_completo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE  /* DEFINER=`nascor04`@`%` */ FUNCTION `nombre_completo`(`idAlumno` INT, `formato` VARCHAR(3)) RETURNS varchar(200) CHARSET utf8
BEGIN
  DECLARE nombre VARCHAR(50);
  DECLARE ape1 VARCHAR(50);
  DECLARE ape2 VARCHAR(50);
  DECLARE resultado VARCHAR(200); -- Declarar la variable resultado

  SELECT GA_Persona.nombre, GA_Persona.ape1, GA_Persona.ape2 INTO nombre, ape1, ape2
  FROM GA_Persona
  WHERE GA_Persona.idPersona = idAlumno;
  
  IF formato = 'AAN' THEN
    SET resultado = CONCAT(ape1, ' ', ape2, ', ', nombre);
  ELSE
    SET resultado = CONCAT(nombre, ' ', ape1, ' ', ape2);
  END IF;

  RETURN resultado; -- Devolver el resultado
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `nombre_curso` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE  /* DEFINER=`nascor04`@`%` */ FUNCTION `nombre_curso`(`idCurso` INT) RETURNS varchar(200) CHARSET utf8
BEGIN
DECLARE salida VARCHAR(200);
SELECT
GA_Curso.nombreCurso INTO salida
FROM GA_Curso
WHERE GA_Curso.idCurso= idCurso ;
RETURN salida;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-30 13:38:39
