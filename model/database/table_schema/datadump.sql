
CREATE TABLE `congress_db` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `party` char(1) DEFAULT NULL,
  `special` varchar(1) DEFAULT NULL,
  `state` varchar(32) DEFAULT NULL,
  `twitter_handle` varchar(64) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `position` char(1) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1416 ;

--
-- Dumping data for table `congress_db`
--

INSERT INTO `congress_db` (`pid`, `first_name`, `last_name`, `rating`, `party`, `special`, `state`, `twitter_handle`, `image_url`, `position`) VALUES
(1, 'Richard', 'Shelby', 12, 'R', 'N', 'Alabama', '@SenShelbyPress', 'http://media.washingtonpost.com/wp-srv/politics/congress/members/photos/228/S000320.jpg', 'S'),
(2, 'Jeff', 'Sessions', 6, 'R', 'N', 'Alabama', '@SenatorSessions', 'http://media.washingtonpost.com/wp-srv/politics/congress/members/photos/228/S001141.jpg', 'S'),
(3, 'Lisa', 'Murkowski', 36, 'R', 'Y', 'Alaska', '@lisamurkowski', 'http://media.washingtonpost.com/wp-srv/politics/congress/members/photos/228/M001153.jpg', 'S'),
(4, 'Mark', 'Begich', 91, 'D', 'N', 'Alaska', '@SenatorBegich', 'http://upload.wikimedia.org/wikipedia/commons/e/ed/Mark_Begich,_official_Senate_photo_portrait,_2009.jpg', 'S'),
(5, 'John', 'McCain', 9, 'R', 'Y', 'Arizona', '@SenJohnMcCain', 'http://upload.wikimedia.org/wikipedia/commons/9/93/John_McCain_official_portrait_with_alternative_background.jpg', 'S'),
(6, 'Jeff', 'Flake', -1, 'R', 'N', 'Arizona', NULL, NULL, 'S'),
(7, 'Mark', 'Pryor', 77, 'D', 'Y', 'Arkansas', '@SenMarkPryor', 'http://media.washingtonpost.com/wp-srv/politics/congress/members/photos/228/P000590.jpg', 'S'),
(8, 'John', 'Boozman', 17, 'R', 'N', 'Arkansas', '@JohnBoozman', 'http://media.washingtonpost.com/wp-srv/politics/congress/members/photos/228/B001236.jpg', 'S'),
(9, 'Diane', 'Feinstein', 96, 'D', 'N', 'California', '@SenFeinstein', 'http://upload.wikimedia.org/wikipedia/commons/7/7d/Dianne_Feinstein,_official_Senate_photo_2.jpg', 'S'),
(10, 'Barbara', 'Boxer', 93, 'D', 'N', 'California', '@SenatorBoxer', 'http://upload.wikimedia.org/wikipedia/commons/1/18/Barbara_Boxer,_Official_Portrait,_112th_Congress.jpg', 'S'),
(11, 'Mark', 'Udall', 96, 'D', 'N', 'Colorado', '@MarkUdall', 'http://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/UdallUdall.jpg/220px-UdallUdall.jpg', 'S'),
(12, 'Michael', 'Bennet', 96, 'D', 'N', 'Colorado', NULL, NULL, 'S'),
(13, 'Richard', 'Blumenthal', 95, 'D', 'N', 'Connecticut', NULL, NULL, 'S'),
(15, 'Chris', 'Murphy', -1, 'D', 'N', 'Connecticut', NULL, NULL, 'S'),
(16, 'Tom', 'Carper', 89, 'D', 'N', 'Delaware', NULL, NULL, 'S'),
(17, 'Chris', 'Coons', 98, 'D', 'N', 'Delaware', NULL, NULL, 'S'),
(18, 'Bill', 'Nelson', 91, 'D', 'N', 'Florida', NULL, NULL, 'S'),
(19, 'Marco', 'Rubio', 0, 'R', 'Y', 'Florida', NULL, NULL, 'S'),
(20, 'Saxby', 'Chambliss', 0, 'R', 'N', 'Georgia', NULL, NULL, 'S'),
(21, 'Johnny', 'Isakson', 90, 'R', 'N', 'Georgia', NULL, NULL, 'S'),
(22, 'Brian', 'Schatz', -1, 'D', 'N', 'Hawaii', NULL, NULL, 'S'),
(23, 'Mazie', 'Hirono', -1, 'D', 'N', 'Hawaii', NULL, NULL, 'S'),
(24, 'Mike', 'Crapo', 11, 'R', 'N', 'Idaho', NULL, NULL, 'S'),
(25, 'Jim', 'Risch', 5, 'R', 'N', 'Idaho', NULL, NULL, 'S'),
(26, 'Dick', 'Durbin', 98, 'D', 'N', 'Illinois', NULL, NULL, 'S'),
(27, 'Mark', 'Kirk', -1, 'R', 'N', 'Illinois', NULL, NULL, 'S'),
(28, 'Dan', 'Coats', 15, 'D', 'N', 'Indiana', NULL, NULL, 'S'),
(29, 'Joe', 'Donnelly', -1, 'D', 'N', 'Indiana', NULL, NULL, 'S'),
(30, 'Chuck', 'Grassley', 24, 'R', 'Y', 'Iowa', NULL, NULL, 'S'),
(31, 'Tom', 'Harkin', 96, 'D', 'N', 'Iowa', NULL, NULL, 'S'),
(32, 'Jerry', 'Moran', 26, 'R', 'N', 'Kansas', NULL, NULL, 'S'),
(33, 'Pat', 'Roberts', 22, 'R', 'N', 'Kansas', NULL, NULL, 'S'),
(34, 'Mitch', 'McConnell', 0, 'R', 'Y', 'Kentucky', NULL, NULL, 'S'),
(35, 'Rand', 'Paul', 5, 'R', 'Y', 'Kentucky', NULL, NULL, 'S'),
(36, 'Mary', 'Landrieu', 80, 'D', 'N', 'Louisiana', NULL, NULL, 'S'),
(37, 'David', 'Vitter', 13, 'R', 'N', 'Louisiana', NULL, NULL, 'S'),
(38, 'Susan', 'Collins', 36, 'R', 'Y', 'Maine', NULL, NULL, 'S'),
(39, 'Angus', 'King', -1, 'I', 'N', 'Maine', NULL, NULL, 'S'),
(40, 'Barbara', 'Mikulski', 98, 'D', 'N', 'Maryland', NULL, NULL, 'S'),
(41, 'Ben', 'Cardin', 98, 'D', 'N', 'Maryland', NULL, NULL, 'S'),
(42, 'Elizabeth', 'Warren', 100, 'D', 'Y', 'Massachusetts', NULL, NULL, 'S'),
(43, 'Ed', 'Markey', -1, 'D', 'N', 'Massachusetts', NULL, NULL, 'S'),
(44, 'Carl', 'Levin', 94, 'D', 'N', 'Michigan', NULL, NULL, 'S'),
(45, 'Debbie', 'Stabenow', 87, 'D', 'N', 'Michigan', NULL, NULL, 'S'),
(46, 'Amy', 'Klobuchar', 93, 'D', 'N', 'Minnesota', NULL, NULL, 'S'),
(47, 'Al', 'Franken', 98, 'D', 'Y', 'Minnesota', NULL, NULL, 'S'),
(48, 'Thad', 'Cochran', 34, 'R', 'N', 'Mississippi', NULL, NULL, 'S'),
(49, 'Roger', 'Wicker', 23, 'R', 'N', 'Mississippi', NULL, NULL, 'S'),
(50, 'Claire', 'McCaskill', 80, 'D', 'Y', 'Missouri', NULL, NULL, 'S'),
(51, 'Roy', 'Blunt', 19, 'R', 'N', 'Missouri', NULL, NULL, 'S'),
(52, 'Max', 'Baucus', 89, 'D', 'Y', 'Montana', NULL, NULL, 'S'),
(53, 'John', 'Tester', 93, 'D', 'N', 'Montana', NULL, NULL, 'S'),
(54, 'Mike', 'Johanns', 18, 'R', 'N', 'Nebraska', NULL, NULL, 'S'),
(55, 'Deb', 'Fischer', -1, 'R', 'N', 'Nebraska', NULL, NULL, 'S'),
(56, 'Harry', 'Reid', 95, 'D', 'Y', 'Nevada', NULL, NULL, 'S'),
(57, 'Dean', 'Heller', 25, 'R', 'N', 'Nevada', NULL, NULL, 'S'),
(58, 'Jeanne', 'Shaheen', 98, 'D', 'N', 'New Hampshire', NULL, NULL, 'S'),
(59, 'Kelly', 'Ayotte', 17, 'R', 'N', 'New Hampshire', NULL, NULL, 'S'),
(60, 'Bob', 'Menendez', 93, 'D', 'N', 'New Jersey', NULL, NULL, 'S'),
(61, 'Jeffrey', 'Chiesa', -1, 'R', 'N', 'New Jersey', NULL, NULL, 'S'),
(62, 'Tom', 'Udall', 100, 'D', 'N', 'New Mexico', NULL, NULL, 'S'),
(63, 'Martin', 'Heinrich', -1, 'D', 'N', 'New Mexico', NULL, NULL, 'S'),
(64, 'Chuck', 'Schumer', 98, 'D', 'N', 'New York', NULL, NULL, 'S'),
(65, 'Kirsten', 'Gillibrand', 98, 'D', 'N', 'New York', NULL, NULL, 'S'),
(66, 'Richard', 'Burr', 6, 'R', 'N', 'North Carolina', NULL, NULL, 'S'),
(67, 'Kay', 'Hagan', 87, 'D', 'N', 'North Carolina', NULL, NULL, 'S'),
(68, 'John', 'Hoeven', 41, 'R', 'N', 'North Dakota', NULL, NULL, 'S'),
(69, 'Heidi', 'Heitcamp', -1, 'D', 'N', 'North Dakota', NULL, NULL, 'S'),
(70, 'Sherrod', 'Brown', 100, 'D', 'N', 'Ohio', NULL, NULL, 'S'),
(71, 'Rob', 'Portman', 16, 'R', 'N', 'Ohio', NULL, NULL, 'S'),
(72, 'Jim', 'Inhofe', 10, 'R', 'N', 'Oklahoma', NULL, NULL, 'S'),
(73, 'Tom', 'Coburn', 4, 'R', 'N', 'Oklahoma', NULL, NULL, 'S'),
(74, 'Ron', 'Wyden', 98, 'D', 'N', 'Oregon', NULL, NULL, 'S'),
(75, 'Jeff', 'Merkley', 100, 'D', 'N', 'Oregon', NULL, NULL, 'S'),
(76, 'Bob', 'Casey', 87, 'D', 'N', 'Pennsylvania', NULL, NULL, 'S'),
(77, 'Pat', 'Toomey', 3, 'R', 'N', 'Pennsylvania', NULL, NULL, 'S'),
(78, 'Jack', 'Reed', 95, 'D', 'N', 'Rhode Island', NULL, NULL, 'S'),
(79, 'Sheldon', 'Whitehouse', 95, 'D', 'N', 'Rhode Island', NULL, NULL, 'S'),
(80, 'Lindsay', 'Graham', 4, 'R', 'Y', 'South Carolina', NULL, NULL, 'S'),
(81, 'Tim', 'Scott', -1, 'R', 'N', 'South Carolina', NULL, NULL, 'S'),
(82, 'Tim', 'Johnson', 95, 'D', 'N', 'South Dakota', NULL, NULL, 'S'),
(83, 'John', 'Thune', 19, 'R', 'N', 'South Dakota', NULL, NULL, 'S'),
(84, 'Lamar', 'Alexander', 26, 'R', 'N', 'Tennessee', NULL, NULL, 'S'),
(85, 'Bob', 'Corker', 12, 'R', 'N', 'Tennessee', NULL, NULL, 'S'),
(86, 'John', 'Cornyn', 6, 'R', 'N', 'Texas', NULL, NULL, 'S'),
(87, 'Ted', 'Cruz', -1, 'R', 'Y', 'Texas', NULL, NULL, 'S'),
(88, 'Orrin', 'Hatch', 4, 'R', 'N', 'Utah', NULL, NULL, 'S'),
(89, 'Mike', 'Lee', 5, 'R', 'N', 'Utah', NULL, NULL, 'S'),
(90, 'Patrick', 'Leahy', 98, 'D', 'N', 'Vermont', NULL, NULL, 'S'),
(91, 'Bernie', 'Sanders', 96, 'D', 'Y', 'Vermont', NULL, NULL, 'S'),
(92, 'Mark', 'Warner', 86, 'D', 'N', 'Virginia', NULL, NULL, 'S'),
(93, 'Tim', 'Kaine', -1, 'D', 'N', 'Virginia', NULL, NULL, 'S'),
(94, 'Maria', 'Cantwell', 98, 'D', 'N', 'Washington', NULL, NULL, 'S'),
(95, 'Patty', 'Murray', 100, 'D', 'N', 'Washington', NULL, NULL, 'S'),
(96, 'Jay', 'Rockefeller', 93, 'D', 'N', 'West Virginia', NULL, NULL, 'S'),
(97, 'Joe', 'Manchin', 74, 'D', 'N', 'West Virginia', NULL, NULL, 'S'),
(98, 'Ron', 'Johnson', 0, 'R', 'N', 'Wisconsin', NULL, NULL, 'S'),
(99, 'Tammy', 'Baldwin', -1, 'D', 'N', 'Wisconsin', NULL, NULL, 'S'),
(100, 'Mike', 'Enzi', 7, 'R', 'N', 'Wyoming', NULL, NULL, 'S'),
(101, 'John', 'Barrasso', 11, 'R', 'N', 'Wyoming', NULL, NULL, 'S'),
(976, 'Jo', 'Bonner', 11, 'R', 'N', 'Alabama', NULL, NULL, 'H'),
(977, 'Martha', 'Roby', 12, 'R', 'N', 'Alabama', NULL, NULL, 'H'),
(978, 'Mike', 'Rogers', 14, 'R', 'N', 'Alabama', NULL, NULL, 'H'),
(979, 'Robert', 'Aderholt', 12, 'R', 'N', 'Alabama', NULL, NULL, 'H'),
(980, 'Mo', 'Brooks', 9, 'R', 'N', 'Alabama', NULL, NULL, 'H'),
(981, 'Spencer', 'Bachus', 9, 'R', 'N', 'Alabama', NULL, NULL, 'H'),
(982, 'Terri', 'Sewell', 81, 'D', 'N', 'Alabama', NULL, NULL, 'H'),
(983, 'Don', 'Young', 10, 'R', 'N', 'Alaska', NULL, NULL, 'H'),
(984, 'Eni F H', 'Faleomavaega', -1, 'D', 'N', 'American Samoa', NULL, NULL, 'H'),
(985, 'Ann', 'Kirkpatrick', -1, 'D', 'N', 'Arizona', NULL, NULL, 'H'),
(986, 'Ron', 'Barber', -1, 'D', 'N', 'Arizona', NULL, NULL, 'H'),
(987, 'Raul', 'Grijalva', 100, 'D', 'N', 'Arizona', NULL, NULL, 'H'),
(988, 'Paul A', 'Gosar', 12, 'R', 'N', 'Arizona', NULL, NULL, 'H'),
(989, 'Matt', 'Salmon', -1, 'R', 'N', 'Arizona', NULL, NULL, 'H'),
(990, 'David', 'Schweikert', 10, 'R', 'N', 'Arizona', NULL, NULL, 'H'),
(991, 'Ed', 'Pastor', 95, 'D', 'N', 'Arizona', NULL, NULL, 'H'),
(992, 'Trent', 'Franks', 8, 'R', 'N', 'Arizona', NULL, NULL, 'H'),
(993, 'Kyrsten', 'Sinema', -1, 'D', 'N', 'Arizona', NULL, NULL, 'H'),
(994, 'Rick', 'Crawford', 12, 'R', 'N', 'Arkansas', NULL, NULL, 'H'),
(995, 'Tim', 'Griffin', 10, 'R', 'N', 'Arkansas', NULL, NULL, 'H'),
(996, 'Steve', 'Womack', 12, 'R', 'N', 'Arkansas', NULL, NULL, 'H'),
(997, 'Tom', 'Cotton', -1, 'R', 'N', 'Arkansas', NULL, NULL, 'H'),
(998, 'Doug', 'LaMalfa', -1, 'R', 'N', 'California', NULL, NULL, 'H'),
(999, 'Jared', 'Huffman', -1, 'D', 'N', 'California', NULL, NULL, 'H'),
(1000, 'John', 'Garamendi', 73, 'D', 'N', 'California', NULL, NULL, 'H'),
(1001, 'Tom', 'McClintock', 27, 'R', 'N', 'California', NULL, NULL, 'H'),
(1002, 'Mike', 'Thompson', 91, 'D', 'N', 'California', NULL, NULL, 'H'),
(1003, 'Doris O', 'Matsui', 98, 'D', 'N', 'California', NULL, NULL, 'H'),
(1004, 'Ami', 'Bera', -1, 'D', 'N', 'California', NULL, NULL, 'H'),
(1005, 'Paul', 'Cook', -1, 'R', 'N', 'California', NULL, NULL, 'H'),
(1006, 'Jerry', 'McNerney', 84, 'D', 'N', 'California', NULL, NULL, 'H'),
(1007, 'Jeff', 'Denham', 9, 'R', 'N', 'California', NULL, NULL, 'H'),
(1008, 'George', 'Miller', 91, 'D', 'Y', 'California', NULL, NULL, 'H'),
(1009, 'Nancy', 'Pelosi', 88, 'D', 'Y', 'California', NULL, NULL, 'H'),
(1010, 'Barbara', 'Lee', 98, 'D', 'N', 'California', NULL, NULL, 'H'),
(1011, 'Jackie', 'Speier', 93, 'D', 'N', 'California', NULL, NULL, 'H'),
(1012, 'Eric', 'Swalwell', -1, 'D', 'N', 'California', NULL, NULL, 'H'),
(1013, 'Jim', 'Costa', 56, 'D', 'N', 'California', NULL, NULL, 'H'),
(1014, 'Mike', 'Honda', 100, 'D', 'N', 'California', NULL, NULL, 'H'),
(1015, 'Anna G', 'Eshoo', 98, 'D', 'N', 'California', NULL, NULL, 'H'),
(1016, 'Zoe', 'Lofgren', 98, 'D', 'N', 'California', NULL, NULL, 'H'),
(1017, 'Sam', 'Farr', 98, 'D', 'N', 'California', NULL, NULL, 'H'),
(1018, 'David', 'Valadao', -1, 'R', 'N', 'California', NULL, NULL, 'H'),
(1019, 'Devin', 'Nunes', 6, 'R', 'N', 'California', NULL, NULL, 'H'),
(1020, 'Kevin', 'McCarthy', 7, 'R', 'N', 'California', NULL, NULL, 'H'),
(1021, 'Lois', 'Capps', 98, 'D', 'N', 'California', NULL, NULL, 'H'),
(1022, 'Buck', 'McKeon', 9, 'R', 'N', 'California', NULL, NULL, 'H'),
(1023, 'Julia', 'Brownley', -1, 'D', 'N', 'California', NULL, NULL, 'H'),
(1024, 'Judy', 'Chu', 98, 'D', 'N', 'California', NULL, NULL, 'H'),
(1025, 'Adam', 'Schiff', 91, 'D', 'N', 'California', NULL, NULL, 'H'),
(1026, 'Tony', 'Cardenas', -1, 'D', 'N', 'California', NULL, NULL, 'H'),
(1027, 'Brad', 'Sherman', 88, 'D', 'N', 'California', NULL, NULL, 'H'),
(1028, 'Gary', 'Miller', 3, 'R', 'N', 'California', NULL, NULL, 'H'),
(1029, 'Grace', 'Napolitano', 95, 'D', 'N', 'California', NULL, NULL, 'H'),
(1030, 'Henry', 'Waxman', 100, 'D', 'Y', 'California', NULL, NULL, 'H'),
(1031, 'Xavier', 'Becerra', 100, 'D', 'N', 'California', NULL, NULL, 'H'),
(1032, 'Gloria', 'Negrete McLeod', -1, 'D', 'N', 'California', NULL, NULL, 'H'),
(1033, 'Raul', 'Ruiz', -1, 'D', 'N', 'California', NULL, NULL, 'H'),
(1034, 'Karen', 'Bass', 100, 'D', 'N', 'California', NULL, NULL, 'H'),
(1035, 'Linda', 'Sanchez', 95, 'D', 'N', 'California', NULL, NULL, 'H'),
(1036, 'Ed', 'Royce', 5, 'R', 'N', 'California', NULL, NULL, 'H'),
(1037, 'Lucille', 'Roybal-Allard', 93, 'D', 'N', 'California', NULL, NULL, 'H'),
(1038, 'Mark', 'Takano', -1, 'D', 'N', 'California', NULL, NULL, 'H'),
(1039, 'Ken', 'Calvert', 11, 'R', 'N', 'California', NULL, NULL, 'H'),
(1040, 'Maxine', 'Waters', 100, 'D', 'N', 'California', NULL, NULL, 'H'),
(1041, 'Janice', 'Hahn', 98, 'D', 'N', 'California', NULL, NULL, 'H'),
(1042, 'John', 'Campbell', 15, 'D', 'N', 'California', NULL, NULL, 'H'),
(1043, 'Loretta', 'Sanchez', 95, 'D', 'N', 'California', NULL, NULL, 'H'),
(1044, 'Alan', 'Lowenthal', -1, 'D', 'N', 'California', NULL, NULL, 'H'),
(1045, 'Dana', 'Rohrabacher', 12, 'R', 'N', 'California', NULL, NULL, 'H'),
(1046, 'Darrell', 'Issa', 4, 'R', 'N', 'California', NULL, NULL, 'H'),
(1047, 'Duncan D', 'Hunter', 0, 'R', 'N', 'California', NULL, NULL, 'H'),
(1048, 'Juan', 'Vargas', -1, 'D', 'N', 'California', NULL, NULL, 'H'),
(1049, 'Scott', 'Peters', -1, 'D', 'N', 'California', NULL, NULL, 'H'),
(1050, 'Susan', 'Davis', 0, 'D', 'N', 'California', NULL, NULL, 'H'),
(1051, 'Diana', 'DeGette', 95, 'D', 'N', 'Colorado', NULL, NULL, 'H'),
(1052, 'Jared', 'Polis', 91, 'D', 'N', 'Colorado', NULL, NULL, 'H'),
(1053, 'Scott', 'Tipton', 11, 'R', 'N', 'Colorado', NULL, NULL, 'H'),
(1054, 'Cory', 'Gardner', 7, 'R', 'N', 'Colorado', NULL, NULL, 'H'),
(1055, 'Doug', 'Lamborn', 5, 'R', 'N', 'Colorado', NULL, NULL, 'H'),
(1056, 'Mike', 'Coffman', 4, 'R', 'N', 'Colorado', NULL, NULL, 'H'),
(1057, 'Ed', 'Perlmutter', 83, 'D', 'N', 'Colorado', NULL, NULL, 'H'),
(1058, 'John B.', 'Larson', 98, 'D', 'N', 'Connecticut', NULL, NULL, 'H'),
(1059, 'Joe', 'Courtney', 93, 'D', 'N', 'Connecticut', NULL, NULL, 'H'),
(1060, 'Rosa L.', 'DeLauro', 98, 'D', 'N', 'Connecticut', NULL, NULL, 'H'),
(1061, 'Jim', 'Himes', 88, 'D', 'N', 'Connecticut', NULL, NULL, 'H'),
(1062, 'Elizabeth', 'Etsy', -1, 'D', 'N', 'Connecticut', NULL, NULL, 'H'),
(1063, 'John', 'Carney', 79, 'D', 'N', 'Delaware', NULL, NULL, 'H'),
(1064, 'Eleanor Holmes', 'Norton', -1, 'D', 'N', 'District of Columbia', NULL, NULL, 'H'),
(1065, 'Jeff', 'Miller', 9, 'R', 'N', 'Florida', NULL, NULL, 'H'),
(1066, 'Steve', 'Southerland', 11, 'R', 'N', 'Florida', NULL, NULL, 'H'),
(1067, 'Ted', 'Yoho', -1, 'R', 'N', 'Florida', NULL, NULL, 'H'),
(1068, 'Ander', 'Crenshaw', 12, 'R', 'N', 'Florida', NULL, NULL, 'H'),
(1069, 'Corrine', 'Brown', 86, 'D', 'N', 'Florida', NULL, NULL, 'H'),
(1070, 'Ron', 'DeSantis', -1, 'R', 'N', 'Florida', NULL, NULL, 'H'),
(1071, 'John', 'Mica', 4, 'R', 'N', 'Florida', NULL, NULL, 'H'),
(1072, 'Bill', 'Posey', 8, 'R', 'N', 'Florida', NULL, NULL, 'H'),
(1073, 'Alan', 'Grayson', -1, 'D', 'N', 'Florida', NULL, NULL, 'H'),
(1074, 'Daniel', 'Webster', 14, 'R', 'N', 'Florida', NULL, NULL, 'H'),
(1075, 'Richard', 'Nugent', 6, 'R', 'N', 'Florida', NULL, NULL, 'H'),
(1076, 'Gus M.', 'Bilirakis', 8, 'R', 'N', 'Florida', NULL, NULL, 'H'),
(1077, 'C.W. Bill', 'Young', 12, 'R', 'N', 'Florida', NULL, NULL, 'H'),
(1078, 'Kathy', 'Castor', 83, 'D', 'N', 'Florida', NULL, NULL, 'H'),
(1079, 'Dennis', 'Ross', 5, 'R', 'N', 'Florida', NULL, NULL, 'H'),
(1080, 'Vern', 'Buchanan', 15, 'R', 'N', 'Florida', NULL, NULL, 'H'),
(1081, 'Tom', 'Rooney', 2, 'R', 'N', 'Florida', NULL, NULL, 'H'),
(1082, 'Patrick', 'Murphy', -1, 'D', 'N', 'Florida', NULL, NULL, 'H'),
(1083, 'Trey', 'Radel', -1, 'R', 'N', 'Florida', NULL, NULL, 'H'),
(1084, 'Alcee L.', 'Hastings', 98, 'D', 'N', 'Florida', NULL, NULL, 'H'),
(1085, 'Ted', 'Deutch', 93, 'D', 'N', 'Florida', NULL, NULL, 'H'),
(1086, 'Lois', 'Frankel', -1, 'D', 'N', 'Florida', NULL, NULL, 'H'),
(1087, 'Debbie', 'Wasserman Schultz', 95, 'D', 'N', 'Florida', NULL, NULL, 'H'),
(1088, 'Frederica', 'Wilson', 98, 'D', 'N', 'Florida', NULL, NULL, 'H'),
(1089, 'Mario', 'Diaz-Balart', 23, 'D', 'N', 'Florida', NULL, NULL, 'H'),
(1090, 'Joe', 'Garcia', -1, 'D', 'N', 'Florida', NULL, NULL, 'H'),
(1091, 'Ileana', 'Ros-Lehtinen', 24, 'D', 'N', 'Florida', NULL, NULL, 'H'),
(1092, 'Jack', 'Kingston', 6, 'R', 'N', 'Georgia', NULL, NULL, 'H'),
(1093, 'Sanford D', 'Bishop Jr', 57, 'D', 'N', 'Georgia', NULL, NULL, 'H'),
(1094, 'Lynn A', 'Westmoreland', 5, 'R', 'N', 'Georgia', NULL, NULL, 'H'),
(1095, 'Henry', 'Johnson Jr', 96, 'D', 'N', 'Georgia', NULL, NULL, 'H'),
(1096, 'John', 'Lewis', 98, 'D', 'N', 'Georgia', NULL, NULL, 'H'),
(1097, 'Tom', 'Price', 5, 'R', 'N', 'Georgia', NULL, NULL, 'H'),
(1098, 'Robert', 'Woodall', 7, 'R', 'N', 'Georgia', NULL, NULL, 'H'),
(1099, 'Austin', 'Scott', 5, 'R', 'N', 'Georgia', NULL, NULL, 'H'),
(1100, 'Doug', 'Collins', -1, 'R', 'N', 'Georgia', NULL, NULL, 'H'),
(1101, 'Paul C', 'Broun', 15, 'R', 'N', 'Georgia', NULL, NULL, 'H'),
(1102, 'Phil', 'Gingrey', 2, 'R', 'N', 'Georgia', NULL, NULL, 'H'),
(1103, 'John', 'Barrow', 30, 'D', 'N', 'Georgia', NULL, NULL, 'H'),
(1104, 'David', 'Scott', 84, 'D', 'N', 'Georgia', NULL, NULL, 'H'),
(1105, 'Tom', 'Graves', 3, 'R', 'N', 'Georgia', NULL, NULL, 'H'),
(1106, 'Colleen', 'Hanabusa', 88, 'D', 'N', 'Hawaii', NULL, NULL, 'H'),
(1107, 'Tulsi', 'Gabbard', -1, 'D', 'N', 'Hawaii', NULL, NULL, 'H'),
(1108, 'Raul R', 'Labrador', 12, 'R', 'N', 'Idaho', NULL, NULL, 'H'),
(1109, 'Mike', 'Simpson', 13, 'R', 'N', 'Idaho', NULL, NULL, 'H'),
(1110, 'Bobby L', 'Rush', 95, 'D', 'N', 'Illinois', NULL, NULL, 'H'),
(1111, 'Robin', 'Kelly', -1, 'D', 'N', 'Illinois', NULL, NULL, 'H'),
(1112, 'Daniel', 'Lipinski', 66, 'D', 'N', 'Illinois', NULL, NULL, 'H'),
(1113, 'Luis', 'Gutierrez', 95, 'D', 'N', 'Illinois', NULL, NULL, 'H'),
(1114, 'Mike', 'Quigley', 95, 'D', 'N', 'Illinois', NULL, NULL, 'H'),
(1115, 'Peter J', 'Roskam', 10, 'R', 'N', 'Illinois', NULL, NULL, 'H'),
(1116, 'Danny K', 'Davis', 98, 'D', 'N', 'Illinois', NULL, NULL, 'H'),
(1117, 'Tammy', 'Duckworth', -1, 'D', 'N', 'Illinois', NULL, NULL, 'H'),
(1118, 'Jan', 'Schakowsky', 100, 'D', 'N', 'Illinois', NULL, NULL, 'H'),
(1119, 'Brad', 'Schneider', -1, 'D', 'N', 'Illinois', NULL, NULL, 'H'),
(1120, 'Bill', 'Foster', -1, 'D', 'N', 'Illinois', NULL, NULL, 'H'),
(1121, 'William', 'Enyart', -1, 'R', 'N', 'Illinois', NULL, NULL, 'H'),
(1122, 'Rodney', 'Davis', -1, 'R', 'N', 'Illinois', NULL, NULL, 'H'),
(1123, 'Randy', 'Hultgren', 6, 'R', 'N', 'Illinois', NULL, NULL, 'H'),
(1124, 'John', 'Shimkus', 13, 'R', 'N', 'Illinois', NULL, NULL, 'H'),
(1125, 'Adam', 'Kinzinger', 15, 'R', 'N', 'Illinois', NULL, NULL, 'H'),
(1126, 'Cheri', 'Bustos', -1, 'D', 'N', 'Illinois', NULL, NULL, 'H'),
(1127, 'Aaron', 'Schock', 12, 'R', 'N', 'Illinois', NULL, NULL, 'H'),
(1128, 'Peter', 'Visclosky', 90, 'D', 'N', 'Indiana', NULL, NULL, 'H'),
(1129, 'Jackie', 'Walorski', -1, 'R', 'N', 'Indiana', NULL, NULL, 'H'),
(1130, 'Marlin', 'Stutzman', 3, 'R', 'N', 'Indiana', NULL, NULL, 'H'),
(1131, 'Todd', 'Rokita', 0, 'R', 'N', 'Indiana', NULL, NULL, 'H'),
(1132, 'Susan W', 'Brooks', -1, 'R', 'N', 'Indiana', NULL, NULL, 'H'),
(1133, 'Luke', 'Messer', -1, 'R', 'N', 'Indiana', NULL, NULL, 'H'),
(1134, 'Andre', 'Carson', 93, 'D', 'N', 'Indiana', NULL, NULL, 'H'),
(1135, 'Larry', 'Bucshon', 6, 'R', 'N', 'Indiana', NULL, NULL, 'H'),
(1136, 'Todd', 'Young', 6, 'R', 'N', 'Indiana', NULL, NULL, 'H'),
(1137, 'Bruce L', 'Braley', 93, 'D', 'N', 'Iowa', NULL, NULL, 'H'),
(1138, 'David', 'Loebsack', 77, 'D', 'N', 'Iowa', NULL, NULL, 'H'),
(1139, 'Tom', 'Latham', 15, 'R', 'N', 'Iowa', NULL, NULL, 'H'),
(1140, 'Steve', 'King', 6, 'R', 'N', 'Iowa', NULL, NULL, 'H'),
(1141, 'Tim', 'Huelskamp', 22, 'R', 'N', 'Kansas', NULL, NULL, 'H'),
(1142, 'Lynn', 'Jenkins', 0, 'R', 'N', 'Kansas', NULL, NULL, 'H'),
(1143, 'Kevin', 'Yoder', 2, 'R', 'N', 'Kansas', NULL, NULL, 'H'),
(1144, 'Mike', 'Pompeo', 3, 'R', 'N', 'Kansas', NULL, NULL, 'H'),
(1145, 'Ed', 'Whitfield', 16, 'R', 'N', 'Kentucky', NULL, NULL, 'H'),
(1146, 'S. Brett', 'Guthrie', 10, 'R', 'N', 'Kentucky', NULL, NULL, 'H'),
(1147, 'John A', 'Yarmuth', 95, 'D', 'N', 'Kentucky', NULL, NULL, 'H'),
(1148, 'Thomas', 'Massie', -1, 'R', 'N', 'Kentucky', NULL, NULL, 'H'),
(1149, 'Harold', 'Rogers', 14, 'R', 'N', 'Kentucky', NULL, NULL, 'H'),
(1150, 'Andy', 'Barr', -1, 'R', 'N', 'Kentucky', NULL, NULL, 'H'),
(1151, 'Steve', 'Scalise', 0, 'R', 'N', 'Louisiana', NULL, NULL, 'H'),
(1152, 'Cedric', 'Richmond', 79, 'D', 'N', 'Louisiana', NULL, NULL, 'H'),
(1153, 'Charles W', 'Boustany Jr', 0, 'R', 'N', 'Louisiana', NULL, NULL, 'H'),
(1154, 'John', 'Fleming', 7, 'R', 'N', 'Louisiana', NULL, NULL, 'H'),
(1155, 'William', 'Cassidy', 9, 'R', 'N', 'Louisiana', NULL, NULL, 'H'),
(1156, 'Chellie', 'Pingree', 98, 'D', 'N', 'Maine', NULL, NULL, 'H'),
(1157, 'Michael', 'Michaud', 89, 'D', 'N', 'Maine', NULL, NULL, 'H'),
(1158, 'Andy', 'Harris', 4, 'R', 'N', 'Maryland', NULL, NULL, 'H'),
(1159, 'Dutch', 'Ruppersberger', 74, 'D', 'N', 'Maryland', NULL, NULL, 'H'),
(1160, 'John P', 'Sarbanes', 93, 'D', 'N', 'Maryland', NULL, NULL, 'H'),
(1161, 'Donna F', 'Edwards', 98, 'D', 'N', 'Maryland', NULL, NULL, 'H'),
(1162, 'Steny H', 'Hoyer', 88, 'D', 'N', 'Maryland', NULL, NULL, 'H'),
(1163, 'John', 'Delaney', -1, 'D', 'N', 'Maryland', NULL, NULL, 'H'),
(1164, 'Elijah', 'Cummings', 98, 'D', 'N', 'Maryland', NULL, NULL, 'H'),
(1165, 'Chris', 'Van Hollen', 93, 'D', 'N', 'Maryland', NULL, NULL, 'H'),
(1166, 'Richard E', 'Neal', 95, 'D', 'N', 'Massachussetts', NULL, NULL, 'H'),
(1167, 'James', 'McGovern', 96, 'D', 'N', 'Massachussetts', NULL, NULL, 'H'),
(1168, 'Niki', 'Tsongas', 98, 'D', 'N', 'Massachussetts', NULL, NULL, 'H'),
(1169, 'Joseph P', 'Kennedy III', -1, 'D', 'N', 'Massachussetts', NULL, NULL, 'H'),
(1170, 'John', 'Tierney', 95, 'D', 'N', 'Massachussetts', NULL, NULL, 'H'),
(1171, 'Michael E', 'Capuano', 100, 'D', 'N', 'Massachussetts', NULL, NULL, 'H'),
(1172, 'Stephen', 'Lynch', 82, 'D', 'N', 'Massachussetts', NULL, NULL, 'H'),
(1173, 'William', 'Keating', 93, 'D', 'N', 'Massachussetts', NULL, NULL, 'H'),
(1174, 'Dan', 'Benishek', 13, 'R', 'N', 'Michigan', NULL, NULL, 'H'),
(1175, 'Bill', 'Huizenga', 5, 'R', 'N', 'Michigan', NULL, NULL, 'H'),
(1176, 'Justin', 'Amash', 41, 'R', 'N', 'Michigan', NULL, NULL, 'H'),
(1177, 'Dave', 'Camp', 8, 'R', 'N', 'Michigan', NULL, NULL, 'H'),
(1178, 'Daniel', 'Kildee', 93, 'D', 'N', 'Michigan', NULL, NULL, 'H'),
(1179, 'Fred', 'Upton', 12, 'R', 'N', 'Michigan', NULL, NULL, 'H'),
(1180, 'Tim', 'Walberg', 5, 'R', 'N', 'Michigan', NULL, NULL, 'H'),
(1181, 'Mike', 'Rogers', 6, 'R', 'N', 'Michigan', NULL, NULL, 'H'),
(1182, 'Sander', 'Levin', 88, 'D', 'N', 'Michigan', NULL, NULL, 'H'),
(1183, 'Candice', 'Miller', 14, 'R', 'N', 'Michigan', NULL, NULL, 'H'),
(1184, 'Kerry', 'Bentivolio', -1, 'R', 'N', 'Michigan', NULL, NULL, 'H'),
(1185, 'John', 'Dingell', 83, 'D', 'Y', 'Michigan', NULL, NULL, 'H'),
(1186, 'John', 'Conyers Jr', 98, 'D', 'N', 'Michigan', NULL, NULL, 'H'),
(1187, 'Gary', 'Peters', 86, 'D', 'N', 'Michigan', NULL, NULL, 'H'),
(1188, 'Timothy J', 'Walz', 79, 'D', 'N', 'Minnesota', NULL, NULL, 'H'),
(1189, 'John', 'Kline', 2, 'R', 'N', 'Minnesota', NULL, NULL, 'H'),
(1190, 'Erik', 'Paulsen', 8, 'R', 'N', 'Minnesota', NULL, NULL, 'H'),
(1191, 'Betty', 'McCollum', 96, 'D', 'N', 'Minnesota', NULL, NULL, 'H'),
(1192, 'Keith', 'Ellison', 100, 'D', 'N', 'Minnesota', NULL, NULL, 'H'),
(1193, 'Michele', 'Bachmann', 3, 'R', 'N', 'Minnesota', NULL, NULL, 'H'),
(1194, 'Collin C', 'Peterson', 34, 'D', 'N', 'Minnesota', NULL, NULL, 'H'),
(1195, 'Rick', 'Nolan', -1, 'D', 'N', 'Minnesota', NULL, NULL, 'H'),
(1196, 'Alan', 'Nunnelee', 2, 'R', 'N', 'Mississippi', NULL, NULL, 'H'),
(1197, 'Bennie G', 'Thompson', 89, 'D', 'N', 'Mississippi', NULL, NULL, 'H'),
(1198, 'Gregg', 'Harper', 10, 'R', 'N', 'Mississippi', NULL, NULL, 'H'),
(1199, 'Steven', 'Palazzo', 8, 'R', 'N', 'Mississippi', NULL, NULL, 'H'),
(1200, 'William', 'Clay Jr', 98, 'D', 'N', 'Missouri', NULL, NULL, 'H'),
(1201, 'Ann', 'Wagner', -1, 'R', 'N', 'Missouri', NULL, NULL, 'H'),
(1202, 'Blaine', 'Luetkemeyer', 10, 'R', 'N', 'Missouri', NULL, NULL, 'H'),
(1203, 'Vicky', 'Hartzler', 10, 'R', 'N', 'Missouri', NULL, NULL, 'H'),
(1204, 'Emanuel', 'Cleaver', 98, 'D', 'N', 'Missouri', NULL, NULL, 'H'),
(1205, 'Sam', 'Graves', 8, 'R', 'N', 'Missouri', NULL, NULL, 'H'),
(1206, 'Billy', 'Long', 2, 'R', 'N', 'Missouri', NULL, NULL, 'H'),
(1207, 'Steve', 'Daines', -1, 'R', 'N', 'Montana', NULL, NULL, 'H'),
(1208, 'Jeff', 'Fortenberry', 16, 'R', 'N', 'Nebraska', NULL, NULL, 'H'),
(1209, 'Lee', 'Terry', 17, 'R', 'N', 'Nebraska', NULL, NULL, 'H'),
(1210, 'Adrian', 'Smith', 8, 'R', 'N', 'Nebraska', NULL, NULL, 'H'),
(1211, 'Dina', 'Titus', -1, 'D', 'N', 'Nevada', NULL, NULL, 'H'),
(1212, 'Mark', 'Amodei', 7, 'R', 'N', 'Nevada', NULL, NULL, 'H'),
(1213, 'Joe', 'Heck', 9, 'R', 'N', 'Nevada', NULL, NULL, 'H'),
(1214, 'Steven', 'Horsford', -1, 'R', 'N', 'Nevada', NULL, NULL, 'H'),
(1215, 'Carol', 'Shea-Porter', -1, 'D', 'N', 'New Hampshire', NULL, NULL, 'H'),
(1216, 'Ann', 'Kuster', -1, 'D', 'N', 'New Hampshire', NULL, NULL, 'H'),
(1217, 'Robert E', 'Andrews', 91, 'D', 'N', 'New Jersey', NULL, NULL, 'H'),
(1218, 'Frank', 'LoBiondo', 32, 'R', 'N', 'New Jersey', NULL, NULL, 'H'),
(1219, 'Jon', 'Runyan', 25, 'R', 'N', 'New Jersey', NULL, NULL, 'H'),
(1220, 'Chris', 'Smith', 29, 'R', 'N', 'New Jersey', NULL, NULL, 'H'),
(1221, 'Scott', 'Garrett', 8, 'R', 'N', 'New Jersey', NULL, NULL, 'H'),
(1222, 'Frank', 'Pallone Jr', 100, 'D', 'N', 'New Jersey', NULL, NULL, 'H'),
(1223, 'Leonard', 'Lance', 15, 'R', 'N', 'New Jersey', NULL, NULL, 'H'),
(1224, 'Albio', 'Sires', 90, 'D', 'N', 'New Jersey', NULL, NULL, 'H'),
(1225, 'Bill', 'Pascrell Jr', 98, 'D', 'N', 'New Jersey', NULL, NULL, 'H'),
(1226, 'Donald', 'Payne Jr', -1, 'D', 'N', 'New Jersey', NULL, NULL, 'H'),
(1227, 'Rodney', 'Frelinghuysen', 19, 'R', 'N', 'New Jersey', NULL, NULL, 'H'),
(1228, 'Rush', 'Holt', 100, 'D', 'N', 'New Jersey', NULL, NULL, 'H'),
(1229, 'Michelle', 'Lujan-Grisham', -1, 'D', 'N', 'New Mexico', NULL, NULL, 'H'),
(1230, 'Steve', 'Pearce', 11, 'R', 'N', 'New Mexico', NULL, NULL, 'H'),
(1231, 'Ben R', 'Lujan', 88, 'D', 'N', 'New Mexico', NULL, NULL, 'H'),
(1232, 'Timothy', 'Bishop', 76, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1233, 'Pete', 'King', 60, 'R', 'Y', 'New York', NULL, NULL, 'H'),
(1234, 'Steve', 'Israel', 86, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1235, 'Carolyn', 'McCarthy', 79, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1236, 'Gregory W', 'Meeks', 93, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1237, 'Grace', 'Meng', -1, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1238, 'Nydia M', 'Velaquez', 95, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1239, 'Hakeem', 'Jeffries', -1, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1240, 'Yvette D', 'Clarke', 98, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1241, 'Jerrold', 'Nadler', 100, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1242, 'Michael', 'Grimm', 18, 'R', 'N', 'New York', NULL, NULL, 'H'),
(1243, 'Carolyn', 'Maloney', 93, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1244, 'Charles', 'Rangel', 30, 'D', 'Y', 'New York', NULL, NULL, 'H'),
(1245, 'Joseph', 'Crowley', 98, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1246, 'Jose E', 'Serrano', 100, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1247, 'Eliot', 'Engel', 91, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1248, 'Nita', 'Lowey', 88, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1249, 'Sean Patrick', 'Maloney', 93, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1250, 'Chris', 'Gibson', 40, 'R', 'N', 'New York', NULL, NULL, 'H'),
(1251, 'Paul D', 'Tonko', 98, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1252, 'Bill', 'Owens', 50, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1253, 'Richard', 'Hanna', 20, 'R', 'N', 'New York', NULL, NULL, 'H'),
(1254, 'Tom', 'Reed', 10, 'R', 'N', 'New York', NULL, NULL, 'H'),
(1255, 'Daniel', 'Maffei', -1, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1256, 'Louise', 'Slaughter', 80, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1257, 'Brian', 'Higgins', 90, 'D', 'N', 'New York', NULL, NULL, 'H'),
(1258, 'Chris', 'Collins', -1, 'R', 'N', 'New York', NULL, NULL, 'H'),
(1259, 'GK', 'Butterfield', 85, 'D', 'N', 'North Carolina', NULL, NULL, 'H'),
(1260, 'Renee', 'Ellmers', 5, 'R', 'N', 'North Carolina', NULL, NULL, 'H'),
(1261, 'Walter B', 'Jones', 39, 'R', 'N', 'North Carolina', NULL, NULL, 'H'),
(1262, 'David', 'Price', 93, 'D', 'N', 'North Carolina', NULL, NULL, 'H'),
(1263, 'Virginia', 'Foxx', 7, 'R', 'N', 'North Carolina', NULL, NULL, 'H'),
(1264, 'Howard', 'Coble', 7, 'R', 'N', 'North Carolina', NULL, NULL, 'H'),
(1265, 'Mike', 'McIntyre', 25, 'D', 'N', 'North Carolina', NULL, NULL, 'H'),
(1266, 'Richard', 'Hudson', -1, 'R', 'N', 'North Carolina', NULL, NULL, 'H'),
(1267, 'Robert', 'Pittenger', -1, 'R', 'N', 'North Carolina', NULL, NULL, 'H'),
(1268, 'Patrick T', 'McHenry', 0, 'R', 'N', 'North Carolina', NULL, NULL, 'H'),
(1269, 'Mark', 'Meadows', -1, 'R', 'N', 'North Carolina', NULL, NULL, 'H'),
(1270, 'Mel', 'Watt', 95, 'D', 'N', 'North Carolina', NULL, NULL, 'H'),
(1271, 'George', 'Holding', -1, 'R', 'N', 'North Carolina', NULL, NULL, 'H'),
(1272, 'Kevin', 'Cramer', -1, 'R', 'N', 'North Dakota', NULL, NULL, 'H'),
(1273, 'Gregorio', 'Sablan', -1, 'D', 'N', 'Northern Mariana Island', NULL, NULL, 'H'),
(1274, 'Steve', 'Chabot', 0, 'R', 'N', 'Ohio', NULL, NULL, 'H'),
(1275, 'Brad', 'Wenstrup', 7, 'R', 'N', 'Ohio', NULL, NULL, 'H'),
(1276, 'Joyce', 'Beatty', -1, 'D', 'N', 'Ohio', NULL, NULL, 'H'),
(1277, 'Jim', 'Jordan', 3, 'R', 'N', 'Ohio', NULL, NULL, 'H'),
(1278, 'Robert', 'Latta', 11, 'R', 'N', 'Ohio', NULL, NULL, 'H'),
(1279, 'Bill', 'Johnson', 10, 'R', 'N', 'Ohio', NULL, NULL, 'H'),
(1280, 'Bob', 'Gibbs', 10, 'R', 'N', 'Ohio', NULL, NULL, 'H'),
(1281, 'John', 'Boehner', 0, 'R', 'Y', 'Ohio', NULL, NULL, 'H'),
(1282, 'Marcy', 'Kaptur', 93, 'D', 'N', 'Ohio', NULL, NULL, 'H'),
(1283, 'Michael', 'Turner', 61, 'R', 'N', 'Ohio', NULL, NULL, 'H'),
(1284, 'Marcia', 'Fudge', 100, 'D', 'N', 'Ohio', NULL, NULL, 'H'),
(1285, 'Pat', 'Tiberi', 12, 'R', 'N', 'Ohio', NULL, NULL, 'H'),
(1286, 'Tim', 'Ryan', 89, 'D', 'N', 'Ohio', NULL, NULL, 'H'),
(1287, 'David', 'Joyce', -1, 'R', 'N', 'Ohio', NULL, NULL, 'H'),
(1288, 'Steve', 'Stivers', 9, 'R', 'N', 'Ohio', NULL, NULL, 'H'),
(1289, 'Jim', 'Renacci', 14, 'R', 'N', 'Ohio', NULL, NULL, 'H'),
(1290, 'Jim', 'Bridenstine', -1, 'R', 'N', 'Oklahoma', NULL, NULL, 'H'),
(1291, 'Markwayne', 'Mullin', -1, 'R', 'N', 'Oklahoma', NULL, NULL, 'H'),
(1292, 'Frank', 'Lucas', 18, 'R', 'N', 'Oklahoma', NULL, NULL, 'H'),
(1293, 'Tom', 'Cole', 14, 'R', 'N', 'Oklahoma', NULL, NULL, 'H'),
(1294, 'James', 'Lankford', 8, 'R', 'N', 'Oklahoma', NULL, NULL, 'H'),
(1295, 'Suzanne', 'Bonamici', 98, 'D', 'N', 'Oregon', NULL, NULL, 'H'),
(1296, 'Greg', 'Walden', 14, 'R', 'N', 'Oregon', NULL, NULL, 'H'),
(1297, 'Earl', 'Blumenauer', 93, 'D', 'N', 'Oregon', NULL, NULL, 'H'),
(1298, 'Peter', 'DeFazio', 93, 'D', 'N', 'Oregon', NULL, NULL, 'H'),
(1299, 'Kurt', 'Schrader', 86, 'D', 'N', 'Oregon', NULL, NULL, 'H'),
(1300, 'Robert', 'Brady', 100, 'D', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1301, 'Chaka', 'Fattah', 90, 'D', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1302, 'Mike', 'Kelly', 12, 'R', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1303, 'Scott', 'Perry', -1, 'R', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1304, 'Glenn', 'Thompson', 12, 'R', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1305, 'Jim', 'Gerlach', 16, 'R', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1306, 'Pat', 'Meehan', 25, 'R', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1307, 'Michael', 'Fitzpatrick', 29, 'R', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1308, 'Bill', 'Shuster', 12, 'R', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1309, 'Tom', 'Marino', 13, 'R', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1310, 'Lou', 'Barletta', 17, 'R', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1311, 'Keith', 'Rothfus', -1, 'R', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1312, 'Allyson', 'Schwartz', 86, 'D', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1313, 'Mike', 'Doyle', 100, 'D', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1314, 'Charles', 'Dent', 10, 'R', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1315, 'Joseph', 'Pitts', 8, 'R', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1316, 'Matthew', 'Cartwright', -1, 'D', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1317, 'Tim', 'Murphy', 15, 'R', 'N', 'Pennsylvania', NULL, NULL, 'H'),
(1318, 'Pedro', 'Pierluisi', -1, 'D', 'N', 'Puerto Rico', NULL, NULL, 'H'),
(1319, 'David', 'Cicilline', 95, 'D', 'N', 'Rhode Island', NULL, NULL, 'H'),
(1320, 'Jim', 'Langevin', 88, 'D', 'N', 'Rhode Island', NULL, NULL, 'H'),
(1321, 'Mark', 'Sanford', -1, 'R', 'N', 'South Carolina', NULL, NULL, 'H'),
(1322, 'Joe', 'Wilson', 5, 'R', 'N', 'South Carolina', NULL, NULL, 'H'),
(1323, 'Jeff', 'Duncan', 5, 'R', 'N', 'South Carolina', NULL, NULL, 'H'),
(1324, 'Trey', 'Gowdy', 5, 'R', 'N', 'South Carolina', NULL, NULL, 'H'),
(1325, 'Mick', 'Mulvaney', 15, 'R', 'Y', 'South Carolina', NULL, NULL, 'H'),
(1326, 'James', 'Clyburn', 83, 'D', 'Y', 'South Carolina', NULL, NULL, 'H'),
(1327, 'Tom', 'Rice', -1, 'R', 'N', 'South Carolina', NULL, NULL, 'H'),
(1328, 'Kristi', 'Noem', 8, 'R', 'N', 'South Dakota', NULL, NULL, 'H'),
(1329, 'Phil', 'Roe', 6, 'R', 'N', 'Tennessee', NULL, NULL, 'H'),
(1330, 'John', 'Duncan Jr', 28, 'R', 'N', 'Tennessee', NULL, NULL, 'H'),
(1331, 'Chuck', 'Fleischmann', 4, 'R', 'N', 'Tennessee', NULL, NULL, 'H'),
(1332, 'Scott', 'DesJarlais', 4, 'R', 'N', 'Tennessee', NULL, NULL, 'H'),
(1333, 'Jim', 'Cooper', 68, 'D', 'N', 'Tennessee', NULL, NULL, 'H'),
(1334, 'Diane', 'Black', 3, 'R', 'N', 'Tennessee', NULL, NULL, 'H'),
(1335, 'Marsha', 'Blackburn', 0, 'R', 'N', 'Tennessee', NULL, NULL, 'H'),
(1336, 'Stephen', 'Fincher', 9, 'R', 'N', 'Tennessee', NULL, NULL, 'H'),
(1337, 'Steve', 'Cohen', 98, 'D', 'N', 'Tennessee', NULL, NULL, 'H'),
(1338, 'Louie', 'Gohmert', 12, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1339, 'Ted', 'Poe', 11, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1340, 'Sam', 'Johnson', 2, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1341, 'Ralph', 'Hall', 11, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1342, 'Jeb', 'Hensarling', 2, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1343, 'Joe', 'Barton', 11, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1344, 'John', 'Culberson', 4, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1345, 'Kevin', 'Brady', 2, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1346, 'Al', 'Green', 80, 'D', 'N', 'Texas', NULL, NULL, 'H'),
(1347, 'Michael', 'McCaul', 3, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1348, 'Michael', 'Conaway', 100, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1349, 'Kay', 'Granger', 11, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1350, 'Mac', 'Thornberry', 2, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1351, 'Randy', 'Weber', -1, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1352, 'Ruben', 'Hinojosa', -1, 'D', 'N', 'Texas', NULL, NULL, 'H'),
(1353, 'Beto', 'O’Rourke', -1, 'D', 'N', 'Texas', NULL, NULL, 'H'),
(1354, 'Bill', 'Flores', 3, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1355, 'Sheila', 'Jackson Lee', 90, 'D', 'N', 'Texas', NULL, NULL, 'H'),
(1356, 'Randy', 'Neugebauer', 5, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1357, 'Joaquin', 'Castro', -1, 'D', 'N', 'Texas', NULL, NULL, 'H'),
(1358, 'Lamar', 'Smith', 6, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1359, 'Pete', 'Olson', 0, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1360, 'Pete', 'Gallego', -1, 'D', 'N', 'Texas', NULL, NULL, 'H'),
(1361, 'Kenny', 'Marchant', 9, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1362, 'Roger', 'Williams', -1, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1363, 'Michael', 'Burgess', 7, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1364, 'Blake', 'Farenthold', 11, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1365, 'Henry', 'Cuellar', 52, 'D', 'N', 'Texas', NULL, NULL, 'H'),
(1366, 'Gene', 'Green', 67, 'D', 'N', 'Texas', NULL, NULL, 'H'),
(1367, 'Eddie', 'Johnson', 93, 'D', 'N', 'Texas', NULL, NULL, 'H'),
(1368, 'John', 'Carter', 11, 'D', 'N', 'Texas', NULL, NULL, 'H'),
(1369, 'Pete', 'Sessions', 2, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1370, 'Marc', 'Veasey', -1, 'D', 'N', 'Texas', NULL, NULL, 'H'),
(1371, 'Filemon', 'Vela', -1, 'D', 'N', 'Texas', NULL, NULL, 'H'),
(1372, 'Lloyd', 'Doggett', 89, 'D', 'N', 'Texas', NULL, NULL, 'H'),
(1373, 'Steve', 'Stockman', -1, 'R', 'N', 'Texas', NULL, NULL, 'H'),
(1374, 'Rob', 'Bishop', 9, 'R', 'N', 'Utah', NULL, NULL, 'H'),
(1375, 'Chris', 'Stewart', -1, 'R', 'N', 'Utah', NULL, NULL, 'H'),
(1376, 'Jason', 'Chaffetz', 9, 'R', 'N', 'Utah', NULL, NULL, 'H'),
(1377, 'Jim', 'Matheson', 32, 'R', 'N', 'Utah', NULL, NULL, 'H'),
(1378, 'Peter', 'Welch', 98, 'R', 'N', 'Vermont', NULL, NULL, 'H'),
(1379, 'Donna', 'Christensen', -1, 'R', 'N', 'Virgin Islands', NULL, NULL, 'H'),
(1380, 'Robert', 'Wittman', 8, 'R', 'N', 'Virginia', NULL, NULL, 'H'),
(1381, 'Scott', 'Rigell', 0, '1', 'N', 'Virginia', NULL, NULL, 'H'),
(1382, 'Robert', 'Scott', 95, 'D', 'N', 'Virginia', NULL, NULL, 'H'),
(1383, 'Randy', 'Forbes', 0, 'R', 'N', 'Virginia', NULL, NULL, 'H'),
(1384, 'Robert', 'Hurt', 6, 'R', 'N', 'Virginia', NULL, NULL, 'H'),
(1385, 'Bob', 'Goodlatte', 6, 'R', 'N', 'Virginia', NULL, NULL, 'H'),
(1386, 'Eric', 'Cantor', 3, 'R', 'N', 'Virginia', NULL, NULL, 'H'),
(1387, 'James', 'Moran', 93, 'D', 'N', 'Virginia', NULL, NULL, 'H'),
(1388, 'Morgan', 'Griffith', 15, 'R', 'N', 'Virginia', NULL, NULL, 'H'),
(1389, 'Frank', 'Wolf', 23, 'R', 'N', 'Virginia', NULL, NULL, 'H'),
(1390, 'Gerald', 'Connolly', 74, 'D', 'N', 'Virginia', NULL, NULL, 'H'),
(1391, 'Suzan', 'DelBene', -1, 'D', 'N', 'Washington', NULL, NULL, 'H'),
(1392, 'Rick', 'Larsen', 86, 'D', 'N', 'Washington', NULL, NULL, 'H'),
(1393, 'Jaime', 'Herrera Beutler', 15, 'R', 'N', 'Washington', NULL, NULL, 'H'),
(1394, 'Doc', 'Hastings', 11, 'R', 'N', 'Washington', NULL, NULL, 'H'),
(1395, 'Cathy', 'McMorris Rodgers', 8, 'R', 'N', 'Washington', NULL, NULL, 'H'),
(1396, 'Derek', 'Kilmer', -1, 'D', 'N', 'Washington', NULL, NULL, 'H'),
(1397, 'Jim', 'McDermott', 98, 'D', 'N', 'Washington', NULL, NULL, 'H'),
(1398, 'David', 'Reichert', 22, 'R', 'N', 'Washington', NULL, NULL, 'H'),
(1399, 'Adam', 'Smith', 81, 'D', 'N', 'Washington', NULL, NULL, 'H'),
(1400, 'Denny', 'Heck', -1, 'D', 'N', 'Washington', NULL, NULL, 'H'),
(1401, 'David', 'McKinley', 19, 'R', 'N', 'West Virginia', NULL, NULL, 'H'),
(1402, 'Shelley Moore', 'Capito', 16, 'R', 'N', 'West Virginia', NULL, NULL, 'H'),
(1403, 'Nick', 'Rahall', 73, 'D', 'N', 'West Virginia', NULL, NULL, 'H'),
(1404, 'Paul', 'Ryan', 11, 'R', 'Y', 'Wisconsin', NULL, NULL, 'H'),
(1405, 'Mark', 'Pocan', -1, 'D', 'N', 'Wisconsin', NULL, NULL, 'H'),
(1406, 'Ron', 'Kind', 89, 'D', 'N', 'Wisconsin', NULL, NULL, 'H'),
(1407, 'Gwen', 'Moore', 100, 'D', 'N', 'Wisconsin', NULL, NULL, 'H'),
(1408, 'James', 'Sensenbrenner', 10, 'R', 'N', 'Wisconsin', NULL, NULL, 'H'),
(1409, 'Thomas', 'Petri', 15, 'R', 'N', 'Wisconsin', NULL, NULL, 'H'),
(1410, 'Sean', 'Duffy', 8, 'R', 'N', 'Wisconsin', NULL, NULL, 'H'),
(1411, 'Reid', 'Ribble', 9, 'R', 'N', 'Wisconsin', NULL, NULL, 'H'),
(1412, 'Cynthia', 'Lummis', 14, 'R', 'N', 'Wyoming', NULL, NULL, 'H'),
(1413, 'Barack', 'Obama', 85, 'D', 'Y', 'N/A', NULL, NULL, 'O'),
(1414, 'Chuck', 'Hagel', 20, 'R', 'Y', 'N/A', NULL, NULL, 'O'),
(1415, 'John', 'Kerry', 85, 'D', 'Y', 'N/A', NULL, NULL, 'O');
