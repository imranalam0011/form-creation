
<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$database = "imran";


$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){

die ("sorry we failed to connect".mysqli_connect_error());

}
else{

    echo "connection is success <br>";
}



*/
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Sorry we failed to connect:" .mysqli_error());
}
else
    echo "Successfully connect";


?>