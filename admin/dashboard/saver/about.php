<?php 
session_start();
 $sabout = $_POST['aboutyou'];
 

 include "../../config.php";

 $sql = "UPDATE userinfo SET about ='$sabout' WHERE infoid = 1";

 $result = mysqli_query($conn,$sql) or die("query unsuccessful");
    header("location:../index.php");

    mysqli_close($conn);

                 
?>