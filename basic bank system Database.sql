

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Padam Rai', 'Akash Rai', 480, '2021-02-13 18:07:13'),
(2, 'Parkash Rai', 'Preet Rathi', 640, '2021-02-14 20:44:53'),
(7, 'Parkash Rai', 'Rabia Ali', 455, '2021-02-15 07:34:22');



CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




(INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES(1,'Anjali Yadav','anjaliyadav2@gmail.com',20000),
(2,'Sayali Yadav','sayaliliyadav12@gmail.com',50000),(3,'Arya Yadav','aryayadav42@gmail.com',56000),(4,'Siddhika Yadav','siddhikayadav2@gmail.com',60000),
(5,'Priyanka Yadav','priyankayadav2@gmail.com',40000),(6,'Aarav Yadav','aaravyadav2@gmail.com',90000),(7,'Harshada Jadhav','harshu2@gmail.com',20000),
(8,'Snehal Patil','snehalpatil24@gmail.com',50000),(9,'Pooja Yadav','poojayadav32@gmail.com',40000),(10,'Pratiksha Yadav','pratikshayadav2@gmail.com',20000);



ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
