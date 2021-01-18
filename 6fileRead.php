<?php

$fptr = fopen("file.txt", "r");

/*If you want to only read file as it is.
readfile("file.txt"); */
/*


//echo var_dump($fptr);

if(!$fptr){
    die("Unable to open this file");
}
$content = fread($fptr, filesize("file.txt"));
    echo $content;

fclose($fptr);
*/


/*
//Reading a file line by line



while($a = fgets($fptr)){   //fgets - Read only one line at a time
    
    echo $a;
}
echo "<br> End of the file reached";
*/

//Reading a file character by charcacter
/*
while($a = fgetc($fptr)){   //fgetc - Read only one charcter at a time
    
    echo $a;
   
    
}
echo "<br> End of the file reached";
*/

//Write a program which reads the content of a file until . has been reached
while($a = fgetc($fptr)){
    echo $a;
    if($a == "."){

        break;
    }

}
fclose($fptr);


?>