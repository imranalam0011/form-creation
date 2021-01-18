<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "imran";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
    ?>
    <script>
        alert ('connecton is success');
    </script>
<?php
}
else{
    die("no connection -->" .mysqli_connect_error());
}
?>
