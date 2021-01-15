
<?php

$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username);

if(!$conn){

die ("sorry we failed to connect".mysqli_connect_error());

}
else{

    echo "connection is success <br>";
}




?>