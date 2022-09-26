CREATE TABLE `processes` (
                             `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                             `process` varchar(255) NOT NULL,
                             PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `countriesOrigin` (
                                   `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                                   `country` varchar(255) DEFAULT NULL,
                                   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `coffees` (
                           `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                           `origin` int(11) NOT NULL,
                           `process` int(11) NOT NULL,
                           `descriptors` varchar(255) DEFAULT NULL,
                           `altitude` int(11) DEFAULT NULL,
                           PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `processes` (`id`, `process`) VALUES (1, 'Natural');
INSERT INTO `processes` (`id`, `process`) VALUES (2, 'Washed');
INSERT INTO `processes` (`id`, `process`) VALUES (3, 'Honey');

INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (1, 'Brazil');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (2, 'Vietnam');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (3, 'Colombia');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (4, 'Indonesia');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (5, 'Ethiopia');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (6, 'Honduras');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (7, 'India');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (8, 'Uganda');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (9, 'Mexico');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (10, 'Guatemala');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (11, 'Peru');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (12, 'Nicaragua');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (13, 'China');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (14, 'Côte d''Ivoire');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (15, 'Costa Rica');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (16, 'Kenya');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (17, 'Papua New Guinea');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (18, 'Tanzania');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (19, 'El Salvador');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (20, 'Ecuador');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (21, 'Cameroon');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (22, 'Laos');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (23, 'Madagascar');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (24, 'Gabon');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (25, 'Thailand');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (26, 'Venezuela');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (27, 'Dominican Republic');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (28, 'Haiti');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (29, 'Democratic Republic of the Congo');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (30, 'Rwanda');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (31, 'Burundi');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (32, 'Philippines');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (33, 'Togo');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (34, 'Guinea');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (35, 'Yemen');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (36, 'Cuba');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (37, 'Panama');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (38, 'Bolivia');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (39, 'Timor Leste');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (40, 'Central African Republic');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (41, 'Nigeria');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (42, 'Ghana');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (43, 'Sierra Leone');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (44, 'Angola');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (45, 'Jamaica');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (46, 'Paraguay');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (47, 'Malawi');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (48, 'Trinidad and Tobago');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (49, 'Zimbabwe');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (50, 'Liberia');
INSERT INTO `countriesOrigin` (`id`, `country`) VALUES (51, 'Zambia');

INSERT INTO `coffees` (`id`, `name`, `origin`, `process`, `descriptors`, `altitude`) VALUES (1, 'Brazil Clássico', 1, 1, 'Honey / Surgarcane molasses / Hazelnut', 1500);
INSERT INTO `coffees` (`id`, `name`, `origin`, `process`, `descriptors`, `altitude`) VALUES (2, 'BS1 Espresso', 2, 2, 'Milk Choc / Sticky Caramel / Red Fruit', 2000);
INSERT INTO `coffees` (`id`, `name`, `origin`, `process`, `descriptors`, `altitude`) VALUES (3, 'Indonesia Kerinchi', 4, 1, 'Cherry Choc / Lemon / Brown Spice', 1700);
INSERT INTO `coffees` (`id`, `name`, `origin`, `process`, `descriptors`, `altitude`) VALUES (4, 'Los Altos', 12, 2, 'Roasted Almond / Chocolate / Brown Sugar', 1300);
INSERT INTO `coffees` (`id`, `name`, `origin`, `process`, `descriptors`, `altitude`) VALUES (5, 'Kirundo Cafex ', 31, 1, 'Baked Apple / Dates / Oolong Tea', 1730);

