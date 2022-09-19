<?php 
include "../../config.php";
$id  = $_GET['id'];
$sql = "DELETE FROM certif WHERE certifid= $id";
$result = mysqli_query($conn, $sql) or die("query unsucessful");
header("location:../certif.php");

mysqli_close($conn);

?>