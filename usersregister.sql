CREATE TABLE `registration` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Flatno` int(10) NOT NULL,
  `MobileNo` bigint(10) NOT NULL,
  `nno of family members` int(10) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `registration` (`Id`, `Username`, `Email`, `Flatno`, `MobileNo`, `nno of family members`, `Password`) VALUES
(1, 'Vaishu', 'vaishu2@gmail.com', 501, 9769418371, 5, '56ddud'),
(2, 'Sapna', 'sapna20@gmail.com', 809, 9321193780, 2, 'sgssjs');


ALTER TABLE `registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
