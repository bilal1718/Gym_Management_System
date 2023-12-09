<?php

include ("../Dashboard/connect.php");
$user_id=$_POST['user_id'];
$height= $_POST['height'];
$weight= $_POST['weight'];

$q=  "INSERT INTO bmi(user_id,height, weight)
VALUES ('$user_id','$height','$weight')";

if (mysqli_query($connect,$q)==true) {
    header("location:../Dashboard/my-profile.php?message=your form has been submitted");
}else{
   echo "Not Connected";
}

?>
 