

<?php
 include 'connect.php';
$id = $_GET['id'];
 $delete = "DELETE FROM report WHERE id='$id'";
 $del = mysqli_query($con,$delete);
 if(!$del) {
    die('wrong');
 }
 else {
    header('location:adfees.php');
 }
?>