CREATE TABLE `libri` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `titolo` varchar(200) NOT NULL,
 `autori` varchar(200) NOT NULL,
 `prezzo` decimal(6,2) NOT NULL,
 `copie` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
