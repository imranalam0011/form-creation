<?php
include "connec.php";

if(isset($_POST['submit'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];

$sql = "INSERT INTO `phptrip`(`firstname`, `lastname`, `subject`) 
VALUES ('$firstname',' $lastname','$subject')";

$result = mysqli_query($conn, $sql);

if($result){
    ?>
    <script> 
        alert("data inserted properly");
    </script>
    <?php
}
else{
    ?>
    <script> 
        alert("data not inserted  properly");
    </script>
<?php
}



}
?>
