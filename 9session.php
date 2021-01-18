<?php
//It is used for manage information across different pages

//Verify the user login info
session_start();

$_SESSION['username'] = "Imran";
$_SESSION['favCat'] = "Books";

echo "We have saved your session";



?>