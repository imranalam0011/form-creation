<?php


///Writing to a file in php
/*$fptr = fopen("file.txt", "w"); //w - It will overwrite everything

fwrite($fptr, "Hi I am an Engineer and my dream is work in a reputed mnc company \n");
fwrite($fptr, "This is another content");
fclose($fptr); */

//Apending to file in php
$fptr = fopen("file.txt", "a"); //a - It will add in existing file

fwrite($fptr, "\nThis is being appendind to the file \n")
 

?>