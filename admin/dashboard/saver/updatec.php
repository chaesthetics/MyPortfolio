<?php 
include "../../config.php";
$image_name = $_FILES["photo"]["name"];
$image_temp = $_FILES["photo"]["tmp_name"];
$title = $_POST['title'];
$description = $_POST['description'];
$exp = explode(".", $image_name);
$end = end($exp);
$name = time().".".$end;
$path = "upload/".$name;  
$allowed_ext = array("jpg", "jpeg", "gif", "png");
$id = $_POST['certifid'];


if(in_array($end, $allowed_ext)){
    if(move_uploaded_file($image_temp, $path)){
        $sql = "UPDATE certif SET stitle='$title', sdescript='$description', spic='$path'WHERE certifid= $id";
        $result = mysqli_query($conn, $sql) or die("query unsucessful");


        header("location:../certif.php");
    }


}

mysqli_close($conn);?>