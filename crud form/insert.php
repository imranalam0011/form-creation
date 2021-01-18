<?php
    include "conn.php";
    
    $insert = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST["title"];
        $description = $_POST["description"];
      
        $sql = "INSERT INTO `notes` (`title`, `description`) VALUES('$title', '$description')";
        $result = mysqli_query($conn, $sql);
      
        if($result){
           // echo "The record has been successfully inserted!<br>";
        
           $insert = true;
       
       
       
        }

        else{
            echo "The record has been not successfully inserted because -->" .mysqli_error($conn);
        }
      
      
      }


?>