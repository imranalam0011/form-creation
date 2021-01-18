<?php

//INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES
 //(NULL, 'Make your self fit', 'Hey Imran always make your self fit.', current_timestamp());

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Sorry we failed to connect:" .mysqli_error());
}


?>