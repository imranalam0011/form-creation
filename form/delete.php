<?php
include "connec.php";

//$sql = "DELETE FROM `phptrip` WHERE `subject` = 'Bihar'";
$sql = "DELETE FROM `phptrip` WHERE `subject` = 'Bihar' LIMIT 2"; //delete with limitation 
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br> Number of affected rows: $aff<br>";


if($result){
    echo "Successfully Deleted";
}
else{
    $err = mysqli_error($conn);
    echo "Facing problem in deletion due to this error --> $err";
}

?>