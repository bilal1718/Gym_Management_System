<?php
include_once('../Dashboard/connect.php');
$id=$_GET['user_id'];
$q=mysqli_query($connect,"DELETE FROM attendence where user_id='$id'");
if($q == true){
    header("location:../Navbar Elements/students_list.php?message=Information of user has been deleted");
}

?>