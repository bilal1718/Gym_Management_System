<?php
session_start();
include("../Dashboard/connect.php");
if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $attendence_id = $_POST['attendence_id'];
    $date = $_POST['date'];

    try { $query = "UPDATE attendence SET attendence_id='$attendence_id', date='$date' WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);
 } catch (mysqli_sql_exception $e) { 
        var_dump($e);
        exit; 
     } 

    if($query_run)
    {
        $_SESSION['sign'] = "Data Updated Successfully";
        header("Location:../Navbar Elements/students_record.php");
    }
    else
    {
        $_SESSION['sign'] = "Not Updated";
        header("Location:../Navbar Elements/students_record.php");
}
}
?>
