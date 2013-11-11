CREATE TABLE `congress_db` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `party` char(1),
  `special` char(1),
  `state` varchar(32),
  `twitter_handle` varchar(64),
  `image_url` varchar(255),
  `position` char(1),

  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8
