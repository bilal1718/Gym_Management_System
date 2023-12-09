<?php
session_start();
$_SESSION['sign']=$_GET['user_id'];
if(isset($_SESSION['sign'])){
    include('dashboard.php');
}else{
    header('location:../Detailed Sign-Up Form/login.php');
}
?>