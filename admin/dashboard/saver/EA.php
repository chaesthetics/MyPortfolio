<?php 
session_start();
 $skul1 = $_POST['skul1'];
 $degree1 = $_POST['degree1'];
 $year1 = $_POST['year1'];
 $d1 = $_POST['d1'];

 $skul2 = $_POST['skul2'];
 $degree2 = $_POST['degree2'];
 $year2 = $_POST['year2'];
 $d2 = $_POST['d2'];
 
 $skul3 = $_POST['skul3'];
 $degree3 = $_POST['degree3'];
 $year3 = $_POST['year3'];
 $d3 = $_POST['d3'];
 include "../../config.php";

 $sql = "UPDATE schoolinfo SET address1='$skul1', degree1='$degree1', year1='$year1', description1='$d1', address2='$skul2', degree2='$degree2', year2='$year2', description2='$d2', address3='$skul3', degree3='$degree3', year3='$year3', description3='$d3'WHERE schoolid = 1";

 $result = mysqli_query($conn,$sql) or die("query unsuccessful");
 header("location:../index.php");

mysqli_close($conn);

                 
?>