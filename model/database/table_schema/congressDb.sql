CREATE TABLE `congress_db` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
<<<<<<< HEAD
  `party` char(1),
  `special` char(1),
  `state` varchar(32),
  `twitter_handle` varchar(64),
  `image_url` varchar(255),
  `position` char(1),

  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8
=======
  `party` char(1) DEFAULT NULL,
  `special` char(1) DEFAULT NULL,
  `state` varchar(32) DEFAULT NULL,
  `twitter_handle` varchar(64) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `position` char(1) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;
>>>>>>> 529cb5d51a7573a9cc034430f68ca617557ce677
