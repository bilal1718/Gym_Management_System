<?php 
include_once('../Dashboard/connect.php');
$user_id=$_POST['user_id'];
$attendence_id=$_POST['attendence_id'];
$date=$_POST['date'];
$q="INSERT INTO attendence(user_id,attendence_id,date) VALUES ('$user_id','$attendence_id','$date')";
if (mysqli_query($connect,$q)==true) {
	header("location:../Navbar Elements/students_record.php?message=your data has saved");
}else{
	echo"your data has not saved";
}
?>