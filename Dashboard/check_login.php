<?php
include_once('connect.php');
$user_name = $_POST['user_name'];
$user_password = md5($_POST['user_password']);

$q = "SELECT * FROM signup WHERE user_name='$user_name' AND user_password='$user_password'";
$run = mysqli_query($connect, $q);
$row = mysqli_fetch_object($run);

if ($row->user_name == $user_name && $row->user_password == $user_password) {
    session_start();
    $_SESSION['sign'] = $row->id;

    header("location:secure.php?id=$row->id");
} else {
    header("location:../Detailed Sign-Up Form/login.php");
}
?>
