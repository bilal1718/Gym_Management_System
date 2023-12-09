<?php
include_once('../Dashboard/connect.php');

$user_id=$_POST["user_id"];
$pay_amount=$_POST["pay_amount"];
$month=$_POST["month"];

$q="INSERT INTO payment(user_id,pay_amount,month)
VALUES ('$user_id','$pay_amount','$month')";
if (mysqli_query($connect,$q)==true) {
   header("location:../Navbar Elements/alert_invoice.php?message=your data has saved");
}else{
   echo"your data has not saved";
}






?>
