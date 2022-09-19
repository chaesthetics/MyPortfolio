<?php 
include("../../config.php");
$newskill = $_POST['skilladd'];
$newpercent = $_POST['percentadd'];

$sql = "SELECT * FROM skilltable WHERE skillname = '$newskill'";
$result = mysqli_query($conn,$sql) or die("query unsucessful");
if(mysqli_num_rows($result) > 0){
    header("location:../index.php");
}

else{
    $sql1 = "INSERT INTO skilltable(skillname,percent) VALUES('{$newskill}','{$newpercent}')";
    $result1 = mysqli_query($conn, $sql1) or die("unsucessful query");

    header("location:../skills.php");    
}
mysqli_close($conn);
?>