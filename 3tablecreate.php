<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "imran";

$conn = mysqli_connect($servername, $username, $password, $database);


if(!$conn){
    die("sorry we failed to connect".mysqli_connect_error());
}
else{
    echo "connetion is success <br>";
}


//create a table into table
$sql = "CREATE TABLE `phptrip2` ( `sno` INT(6) NOT NULL AUTO_INCREMENT ,
`name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL ,
 PRIMARY KEY (`sno`))";

 $result = mysqli_query($conn, $sql);

 if($result){
    echo "The table was successful <br>";
 }
else
 echo "The table was not successful --->" .mysqli_error($conn);

?>

