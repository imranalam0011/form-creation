<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){

    die("sorry we failed to connect" .mysqli_connect_error());

}
else
    echo "connection is success <br>";


//create a database
$sql = "CREATE DATABASE imran4";
$result = mysqli_query($conn, $sql);

if($result){

     echo "table creation is success <br>";
}
else{   
    echo "table creation is not success error is--->" .mysqli_error($conn);
}
?>