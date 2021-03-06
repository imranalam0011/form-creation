<?php
    $login = false;
    $showError =false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    include "partials/_dbconnect.php";
    $username = $_POST["username"];
    $password = $_POST["password"];
    

    $exists = false;
    
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'" ;
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        
        if($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: welcome.php");
        }

    
    else{
        $showError = "Invalid Credentials";
    }

}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <?php require 'partials/_nav.php'; ?>
    <?php
    if($login){
     echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> You are logged in
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if($showError){
     echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error:</strong> '.$showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <div class="container my-4">
        <h1 class="text-center">Welcome to our website</h1>
     <form action="login.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group my-4">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
         
        <button type="submit" class="btn btn-primary">login</button>
     </form>
    
    
    
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>