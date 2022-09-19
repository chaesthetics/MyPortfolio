<?php 
include "../../config.php";
if(ISSET($_POST['save'])){
    $image_name = $_FILES["photo"]["name"];
    $image_temp = $_FILES["photo"]["tmp_name"];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $exp = explode(".", $image_name);
    $end = end($exp);
    $name = time().".".$end;
    $path = "upload/".$name;  
    $allowed_ext = array("jpg", "jpeg", "gif", "png");


    if(in_array($end, $allowed_ext)){
        if(move_uploaded_file($image_temp, $path)){
            $sql = "INSERT INTO certif(stitle,sdescript,spic) VALUES('{$title}', '{$description}', '{$path}')";
            $result = mysqli_query($conn, $sql) or die("query unsucessful");


            header("location:../index.php");
        }


    }
    else{
    			echo "<script>alert('Image only')</script>";
    		}

    mysqli_close($conn);
    
}?>