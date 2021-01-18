<?php
 
 include "connec.php";

$sql = "SELECT * FROM phptrip";
$result = mysqli_query($conn, $sql);

//find the number of records  returned
 
$num = mysqli_num_rows($result);
echo $num;
echo " Record found in the database <br>";



// Display the rows returned by the sql query
if($num> 0){

    while($row = mysqli_fetch_assoc($result)){
        //echo var_dump($row);
        echo $row['sno']. ".hello" . $row['firstname'] . "welcome to " . $row['subject'];
        echo "<br>";

    }
    //$row = mysqli_fetch_assoc($result);
    //echo var_dump($row);
    //echo "<br>";

 




}



?>
  
