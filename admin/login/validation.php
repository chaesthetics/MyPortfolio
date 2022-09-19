<?php 
include "../config.php";
session_start();
$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where sname = '$name' && spassword = '$pass'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num==1){
    $_SESSION['validator'] = $name;
    header('location:../dashboard/index.php');
}
else{
    header('location:index.php');
    $error = "Invalid Credentials";
    $_SESSION['erol'] = $error;
}
?>
