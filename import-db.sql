CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Department` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `User` varchar(50) DEFAULT NULL,
  `Employe` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Local` varchar(50) DEFAULT NULL,
  `lastlogon` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `User` (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
