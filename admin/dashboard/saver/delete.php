<?php
include "../../config.php";
$ssid =  $_GET['id'];
$sql = "DELETE FROM skilltable WHERE skillid='$ssid'";
$result = mysqli_query($conn, $sql) or die("query unsucessful");
header("location:../skills.php");
mysqli_close($conn);

?>
