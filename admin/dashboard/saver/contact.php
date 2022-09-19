<?php 
session_start();
 $saddress = $_POST['address'];
 $scity = $_POST['city'];
 $scountry = $_POST['country'];
 $spostal = $_POST['postal'];
 $sno = $_POST['cpno'];

 include "../../config.php";

 $sql = "UPDATE userinfo SET saddress ='$saddress', city ='$scity', country ='$scountry', postalcode ='$spostal', snumber='$sno' WHERE infoid = 1";

 $result = mysqli_query($conn,$sql) or die("query unsuccessful");
header("location:../index.php");

mysqli_close($conn);

                 
?>