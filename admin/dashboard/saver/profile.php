<?php 
session_start();
 $suser = $_POST['username'];
 $semail = $_POST['email'];
 $sfname = $_POST['fname'];
 $slname = $_POST['lname'];
 $spass = $_POST['pass'];

 include "../../config.php";

 $sql = "UPDATE usertable SET sname ='$suser', spassword ='$spass', semailadd ='$semail', sfirstname ='$sfname', slastname='$slname' WHERE sname = sname";

 $result = mysqli_query($conn,$sql) or die("query unsuccessful");
 $_SESSION['validator']= $suser;
header("location:../index.php");

mysqli_close($conn);

                 
?>