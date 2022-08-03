DROP DATABASE IF EXISTS test;
CREATE DATABASE test;
USE test;
--
-- Table structure for table `output_images`
--

CREATE TABLE `output_images` (
  `imageId` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `imageType` varchar(255) NOT NULL,
  `imageData` longblob NOT NULL
);