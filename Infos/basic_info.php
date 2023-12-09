<?php
include("../Dashboard/connect.php");
$user_id=$_POST['user_id'];
$father_name= $_POST["father_name"];
$id_card= $_POST["id_card"];
$date_of_birth= $_POST["date_of_birth"];
$nationality_id= $_POST["nationality_id"];
$district_id= $_POST["district_id"];
$address= $_POST["address"];
$religion_id= $_POST["religion_id"];

$q="INSERT INTO basic_information(user_id, father_name, id_card, date_of_birth,
 nationality_id, district_id, address, religion_id)
 VALUES ('$user_id','$father_name','$id_card','$date_of_birth','$nationality_id','$district_id',
 '$address','$religion_id')";

if (mysqli_query($connect,$q)==true) {
	header("location:../Detailed Sign-Up Form/BMI.php?message=your data has saved");
}else{
	echo"your data has saved";
}





?>