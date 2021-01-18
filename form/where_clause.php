<?php

include "connec.php";


$sql = "SELECT * FROM `phptrip` WHERE `subject`='Bihar'";
$result = mysqli_query($conn, $sql);

// Usage of WHERE Clause to fetch data from the database

$num = mysqli_num_rows($result);
echo $num . " records found in the DataBase<br>";
$no=1;
if($num> 0){  
    while($row = mysqli_fetch_assoc($result)){ 
        echo $no .  ". Hello ". $row['firstname'] ." Welcome to ". $row['subject'];
        echo "<br>";
        $no = $no +1;
    }
}


// Usage of where clause to Update data
$sql = "UPDATE `phptrip` SET `firstname` = 'SHAHRUKH' WHERE `sno` = 5";
    $result = mysqli_query($conn, $sql);

echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "<br> Number of affected rows: $aff<br>";


if($result){

    echo "We Updated the record successfully";
}
 else{
     echo "We couldn't update the record successfully";
 }

?>

