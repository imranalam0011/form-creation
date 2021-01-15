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
    echo "connetion is success";
}
echo "<br>";


//varibles to be inserted to the table
$name = "akash";
$destination = "russia";

//sql query to be executed for insertion
$sql = "INSERT INTO `phptrip2` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

 if($result){
    echo "The table was successful <br>";
 }
else
 echo "The table was not successful --->" .mysqli_error($conn);

?>
