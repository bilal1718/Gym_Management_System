<?php

include("../Dashboard/connect.php");
$user_id= $_POST["user_id"];
$goal_id= $_POST["goal_id"];
$training_id= $_POST["training_id"];
$fitness_id= $_POST["fitness_id"];


$q="INSERT INTO goal(user_id, goal_id, training_id, fitness_id)
 VALUES ('$user_id','$goal_id','$training_id','$fitness_id')";
if (mysqli_query($connect,$q)==true) {
	header("location:../Detailed Sign-Up Form/condition.php?message=your data has saved");
}else{
	echo"your data has saved";
}





?>