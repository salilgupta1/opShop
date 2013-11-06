CREATE TABLE `congress_db` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `party` char(1) DEFAULT NULL,
  `special` char(1) DEFAULT NULL,
  `state` varchar(32) DEFAULT NULL,
  `twitter_handle` varchar(64) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `position` char(1) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;
