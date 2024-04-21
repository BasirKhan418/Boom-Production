<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="boom";
$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{
   $sql = "CREATE TABLE `boom`.`usersdata` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(30) NOT NULL , `email` VARCHAR(30) NOT NULL , `phone` VARCHAR(30) NOT NULL , `password` VARCHAR(300) NOT NULL , `regdate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `gnumber` VARCHAR(30) NULL DEFAULT NULL , `branch` VARCHAR(30) NULL DEFAULT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB;";

   $result = mysqli_query($conn,$sql);


    $sql = "CREATE TABLE `boom`.`forgetdata` (`sno` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(35) NOT NULL , `otp` VARCHAR(35) NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB;";
    $result = mysqli_query($conn,$sql);
    
}
?>