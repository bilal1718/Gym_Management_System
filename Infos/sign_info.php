<?php

include ("../Dashboard/connect.php");
$id=$_POST['id'];
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_password=md5($_POST['user_password']);
$contact_number=$_POST['contact_number'];

$q=  "INSERT INTO `signup`(user_name, user_email, user_password, contact_number) 
VALUES ('$user_name','$user_email','$user_password','$contact_number')";
if (mysqli_query($connect,$q)==true) {
    header("location:../Detailed Sign-Up Form/basic_information.php?message=your form has been submitted");
}else{
   echo "Not Connected";
}

?>
 