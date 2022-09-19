<?php 
include "../../config.php";
$sskillid = $_POST['skillid'];
$sskill = $_POST['skillname'];
$spercent = $_POST['percent'];

$sql = "UPDATE skilltable SET skillname='$sskill', percent='$spercent' WHERE skillid='$sskillid'";
$result = mysqli_query($conn, $sql) or die("query unsucessful");
header("location:../skills.php   ");
mysqli_close($conn);
?>