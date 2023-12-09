<?php 
include ("../Dashboard/connect.php");
$user_id=$_POST['user_id'];
$attendence_id=$_POST['attendence_id'];
$date=$_POST['date'];
$q="INSERT INTO attendence(user_id, attendence_id, date) 
VALUES ('$user_id','$attendence_id','$date')";
if (mysqli_query($connect,$q)==true) {
    header("location:../Navbar Elements/students_record.php?message=your form has been submitted");
}else{
   echo "Not Connected";
}
?>