CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_unique` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `pages` (`name`, `content`) VALUES ('welcome', '<h1>Welcome!</h1>\n<p>Welcome to my pages</p>');
INSERT INTO `pages` (`name`, `content`) VALUES ('about', '<h1>About</h1>\n<p>About this site.</p>');
INSERT INTO `pages` (`name`, `content`) VALUES ('contact', '<h1>Contact</h1>\n<p>Please, do <b>not</b> contact me.</p>');
