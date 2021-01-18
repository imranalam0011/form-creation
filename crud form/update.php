<?php

$update = false;

    if (isset( $_POST['snoEdit'])){
      // Update the record
        $sno = $_POST["snoEdit"];
        $title = $_POST["titleEdit"];
        $description = $_POST["descriptionEdit"];
    
      // Sql query to be executed
      $sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$description' WHERE `notes`.`sno` = $sno";
      $result = mysqli_query($conn, $sql);
      if($result){
        $update = true;
    }
    else{
        echo "We could not update the record successfully";
        }

    }


?>